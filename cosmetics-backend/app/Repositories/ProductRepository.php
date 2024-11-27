<?php

namespace App\Repositories;
use App\Models\Product;
use App\Interfaces\ProductInterface;
use Illuminate\Support\Facades\Log;
use PgSql\Lob;

class ProductRepository implements ProductInterface
{
    public function index(){
        return Product::paginate(12);
    }

    public function getById($id){
        return Product::findOrFail($id);
    }

    public function store(array $data){
        Log::info($data['product_name']);
         return Product::create($data);
//         $table = new Product();
// $table->product_name = $data['product_name'];
// $table->product_category = $data['product_category'];
// $table->product_description = $data['product_description'];
// $table->directions = $data['directions'];
// $table->price = $data['price'];
// $table->in_stock = $data['in_stock'];
// $table->product_image = $data['product_image'];
// $table->save();
    }

    public function update($id,array $data){
        return Product::whereId($id)->update($data);
    }

    public function destory($id){
        return Product::destroy($id);
    }
}
