<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Interfaces\ProductInterface;
use App\Http\Resources\ProductResource;
use App\Http\Requests\ProductRequest;
use App\Classes\ApiCatchErrors;
use App\Http\Controllers\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseController
{
    private ProductInterface $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->productInterface->index();

        return [
            'success'=>true,
            'data' => ProductResource::collection($data->items()), 
            'pagination' => [
                'total' => $data->total(),
                'count' => $data->count(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'total_pages' => $data->lastPage(),
                'next_page_url' => $data->nextPageUrl(),
                'prev_page_url' => $data->previousPageUrl(),
            ],
        ];

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
       
        DB::beginTransaction();
        $product_image = $request->file('product_image')->store('uploads', 'public');
        $deatials =[
            'product_name' => $request->product_name,
            'product_category' => $request->product_category,
            'product_description' => $request->product_description,
            'directions' => $request->directions,
            'price' => $request->price,
            'in_stock' => $request->in_stock,
            'product_image' => $product_image,
            
        ];
        try {
            $this->productInterface->store($deatials);
            DB::commit();

            return $this->sendResponse('','Product created Successful');
        } catch (\Exception $ex) {
            Log::info($ex);
            return ApiCatchErrors::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->productInterface->getById($id);

        return $this->sendResponse(new ProductResource($data),'');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, $id)
    {
        DB::beginTransaction();
        $product_image = $request->file('product_image')->store('uploads', 'public');
        $deatials =[
            'product_name' => $request->product_name,
            'product_category' => $request->product_category,
            'product_description' => $request->product_description,
            'directions' => $request->directions,
            'price' => $request->price,
            'in_stock' => $request->in_stock,
            'product_image' => $product_image,
            
        ];
        return $deatials;
        try {

            $this->productInterface->update($id,$deatials);
            DB::commit();

            return $this->sendResponse('Product updated Successful','');
        } catch (\Exception $ex) {
            Log::info($ex);
            return ApiCatchErrors::rollback($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->productInterface->destory($id);

        return $this->sendResponse('Product Delete Successful','');
    }

    public function uploadImage(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
        ]);

        // Store the image in the 'public/uploads' directory
        $path = $request->file('image')->store('uploads', 'public');
        //return $path;
        // Get the full URL of the uploaded image
        $url = Storage::url($path);
        // Return the URL as a response
        return response()->json([
            'success' => true,
            'image_url' => asset($url),
        ]);
    }
}
