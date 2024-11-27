<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                 'product_id' => 'P001',
                'product_name' => 'Red Glossy Lipstick',
                'product_category' => 'Face',
                'product_description' => 'Load your lips with long lasting and impeccable red colour to fulfill your makeup requirements.',
                'directions' => "HOW TO USE:\n\n1. Exfoliate your lips.\n2. Line your lips with the CCUK Lip definer, then fill them in.\n3. Blot your lips for an extra-matte finish.\n*Please note that actual colours may vary slightly.",
                'price' => 2500.00,
                'product_image' => 'uploads/01.jpg' ,               
                'in_stock' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P002',
                'product_name' => 'Red Glossy Lipstik',
                'product_category' => 'Lipstick',
                'product_description' => 'Load your lips with long lasting and impeccable red colour to fulfill your makeup requirements.',
                'directions' => "HOW TO USE:\n\n1. Exfoliate your lips.\n2. Line your lips with the CCUK Lip definer, then fill them in.\n3. Blot your lips for an extra-matte finish.\n*Please note that actual colours may vary slightly.",
                'price' => 2500.00,
                'in_stock' => 150,
                'product_image' => 'uploads/02.jpg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P003',
                'product_name' => 'Red Glossy Lipstik',
                'product_category' => 'Lips',
                'product_description' => 'Load your lips with long lasting and impeccable red colour to fulfill your makeup requirements.',
                'directions' => "HOW TO USE:
                            1. Exfoliate your lips.
                            2. Line your lips with the CCUK Lip definer, then fill them in.
                            3. Blot your lips for an extra-matte finish.
                             *Please note that actual colours may vary slightly.",
                'price' => 2500.00,
                'in_stock' => 150,
                'product_image' => 'uploads/03.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P004',
                'product_name' => 'Wine Lip Liner',
                'product_category' => 'Face',
                'product_description' => 'Defines and creates a neat lip outline resulting on full, bold lips.',
                'directions' => "HOW TO USE:
                        Prime and line lips with lip liner.
                        Fill in to wear alone, or apply lipstick to complete the look.
                        For an even bolder look, fill in and apply Colour Lipstick on top",
                'price' => 1200.00,
                'in_stock' => 75,
                'product_image' => 'uploads/4.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P005',
                'product_name' => 'Wine Lip Liner',
                'product_category' => 'Lip Liner',
                'product_description' => 'Defines and creates a neat lip outline resulting on full, bold lips.',
                'directions' => "HOW TO USE:
                        Prime and line lips with lip liner.
                        Fill in to wear alone, or apply lipstick to complete the look.
                        For an even bolder look, fill in and apply Colour Lipstick on top",
                'price' => 1200.00,
                'in_stock' => 75,
                'product_image' => 'uploads/05.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P006',
                'product_name' => 'Wine Lip Liner',
                'product_category' => 'Lips',
                'product_description' => 'Defines and creates a neat lip outline resulting on full, bold lips.',
                'directions' => "HOW TO USE:
                        Prime and line lips with lip liner.
                        Fill in to wear alone, or apply lipstick to complete the look.
                        For an even bolder look, fill in and apply Colour Lipstick on top",
                'price' => 1200.00,
                'in_stock' => 75,
                'product_image' => 'uploads/06.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P007',
                'product_name' => 'Damson Lip Liner',
                'product_category' => 'Face',
                'product_description' => 'Defines and creates a neat lip outline resulting on full, bold lips.',
                'directions' => "HOW TO USE:
                        Prime and line lips with lip liner.
                        Fill in to wear alone, or apply lipstick to complete the look.
                        For an even bolder look, fill in and apply Colour Lipstick on top",
                'price' => 1400.00,
                'in_stock' => 150,
                'product_image' => 'uploads/07.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P008',
                'product_name' => 'Damson Lip Liner',
                'product_category' => 'Lipstick',
                'product_description' => 'Defines and creates a neat lip outline resulting on full, bold lips.',
                'directions' => "HOW TO USE:
                        Prime and line lips with lip liner.
                        Fill in to wear alone, or apply lipstick to complete the look.
                        For an even bolder look, fill in and apply Colour Lipstick on top",
                'price' => 1400.00,
                'in_stock' => 150,
                'product_image' => 'uploads/08.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P009',
                'product_name' => 'Damson Lip Liner',
                'product_category' => 'Lips',
                'product_description' => 'Defines and creates a neat lip outline resulting on full, bold lips.',
                'directions' => "HOW TO USE:
                        Prime and line lips with lip liner.
                        Fill in to wear alone, or apply lipstick to complete the look.
                        For an even bolder look, fill in and apply Colour Lipstick on top",
                'price' => 1400.00,
                'in_stock' => 150,
                'product_image' => 'uploads/09.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P010',
                'product_name' => 'Glow - Day Creame',
                'product_category' => 'Moisturiser',
                'product_description' => 'Keeps your skin from being damaged while you go through your everyday tasks',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3250,
                'in_stock' => 225,
                'product_image' => 'uploads/10.jpg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P011',
                'product_name' => 'Glow - Day Creame',
                'product_category' => 'Skin',
                'product_description' => 'Keeps your skin from being damaged while you go through your everyday tasks',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3250,
                'in_stock' => 225,
                'product_image' => 'uploads/11.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P012',
                'product_name' => 'Glow - Day Creame',
                'product_category' => 'Body',
                'product_description' => 'Keeps your skin from being damaged while you go through your everyday tasks',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3250,
                'in_stock' => 225,
                'product_image' => 'uploads/12.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P013',
                'product_name' => 'Glow - Day Creame',
                'product_category' => 'Face',
                'product_description' => 'Keeps your skin from being damaged while you go through your everyday tasks',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3250,
                'in_stock' => 225,
                'product_image' => 'uploads/13.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P014',
                'product_name' => 'Radient - Night Creame',
                'product_category' => 'Moisturiser',
                'product_description' => 'Rejuvinates your skin while you rest and sleep at night',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3000,
                'in_stock' => 160,
                'product_image' => 'uploads/14.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P015',
                'product_name' => 'Radient - Night Creame',
                'product_category' => 'Skin',
                'product_description' => 'Rejuvinates your skin while you rest and sleep at night',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3000.00,
                'in_stock' => 160,
                'product_image' => 'uploads/15.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P016',
                'product_name' => 'Radient - Night Creame',
                'product_category' => 'Body',
                'product_description' => 'Rejuvinates your skin while you rest and sleep at night',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3000.00,
                'in_stock' => 160,
                'product_image' => 'uploads/16.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P017',
                'product_name' => 'Radient - Night Creame',
                'product_category' => 'Face',
                'product_description' => 'Rejuvinates your skin while you rest and sleep at night',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 3000.00,
                'in_stock' => 160,
                'product_image' => 'uploads/17.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P018',
                'product_name' => 'Tea Tree Facewash',
                'product_category' => 'Skin',
                'product_description' => 'Cleans the dirt and oil from your face and gives a bright healthy look',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 1350.00,
                'in_stock' => 500,
                'product_image' => 'uploads/18.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P019',
                'product_name' => 'Tea Tree Facewash',
                'product_category' => 'Face',
                'product_description' => 'Cleans the dirt and oil from your face and gives a bright healthy look',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 1350.00,
                'in_stock' => 500,
                'product_image' => 'uploads/19.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P020',
                'product_name' => 'Tea Tree Facewash',
                'product_category' => 'Facewash',
                'product_description' => 'Cleans the dirt and oil from your face and gives a bright healthy look',
                'directions' => "HOW TO USE:
                        Cleanse area to apply and apply cream",
                'price' => 1350.00,
                'in_stock' => 500,
                'product_image' => 'uploads/20.png' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P021',
                'product_name' => 'Kohomba Facewash',
                'product_category' => 'Skin',
                'product_description' => 'For pimple prone skin. Fights germs and cleans your face',
                'directions' => "HOW TO USE:
                        Wash face with clean water and apply product on face. Finally rinse with clean water",
                'price' => 2500.00,
                'in_stock' => 150,
                'product_image' => 'uploads/21.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P022',
                'product_name' => 'Kohomba Facewash',
                'product_category' => 'Face',
                'product_description' => 'For pimple prone skin. Fights germs and cleans your face',
                'directions' => "HOW TO USE:
                        Wash face with clean water and apply product on face. Finally rinse with clean water",
                'price' => 2500.00,
                'in_stock' => 150,
                'product_image' => 'uploads/22.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P023',
                'product_name' => 'Kohomba Facewash',
                'product_category' => 'Facewash',
                'product_description' => 'HOW TO USE:
                        Wash face with clean water and apply product on face. Finally rinse with clean water',
                'directions' => "",
                'price' => 2500.00,
                'in_stock' => 150,
                'product_image' => 'uploads/23.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P024',
                'product_name' => 'Aloe Facewash',
                'product_category' => 'Skin',
                'product_description' => 'Removes dead skin and effective on dry skin types',
                'directions' => "HOW TO USE:
                        Wash face with clean water and apply product on face. Finally rinse with clean water",
                'price' => 1200.00,
                'in_stock' => 500,
                'product_image' => 'uploads/24.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P025',
                'product_name' => 'Aloe Facewash',
                'product_category' => 'Face',
                'product_description' => 'Removes dead skin and effective on dry skin types',
                'directions' => "HOW TO USE:
                        Wash face with clean water and apply product on face. Finally rinse with clean water",
                'price' => 1200.00,
                'in_stock' => 500,
                'product_image' => 'uploads/25.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P026',
                'product_name' => 'Aloe Facewash',
                'product_category' => 'Facewash',
                'product_description' => 'Removes dead skin and effective on dry skin types',
                'directions' => "HOW TO USE:
                        Wash face with clean water and apply product on face. Finally rinse with clean water",
                'price' => 1200.00,
                'in_stock' => 500,
                'product_image' => 'uploads/26.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P027',
                'product_name' => 'Tumeric Handwash',
                'product_category' => 'Skin',
                'product_description' => 'Effectifly removes dirt and germs from skin',
                'directions' => "Wash hands using one or two drops of the handwash whenever needed.",
                'price' => 600.00,
                'in_stock' => 150,
                'product_image' => 'uploads/27.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P028',
                'product_name' => 'Tumeric Handwash',
                'product_category' => 'Hand',
                'product_description' => 'Effectifly removes dirt and germs from skin',
                'directions' => "Wash hands using one or two drops of the handwash whenever needed.",
                'price' => 600.00,
                'in_stock' => 150,
                'product_image' => 'uploads/28.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P029',
                'product_name' => 'Jasmin Bodywash',
                'product_category' => 'Skin',
                'product_description' => 'Makes you feel like you are in a field of jasmin. Feeling fresh and amazing',
                'directions' => "Wash body with clean water and apply. Finally rinse with clean water",
                'price' => 1450.00,
                'in_stock' => 340,
                'product_image' => 'uploads/29.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P030',
                'product_name' => 'Jasmin Bodywash',
                'product_category' => 'Body',
                'product_description' => 'Makes you feel like you are in a field of jasmin. Feeling fresh and amazing',
                'directions' => "Wash body with clean water and apply. Finally rinse with clean water",
                'price' => 1450.00,
                'in_stock' => 340,
                'product_image' => 'uploads/30.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P031',
                'product_name' => 'Mint Bodywash',
                'product_category' => 'Skin',
                'product_description' => 'Feel mint freshness all through your body and take the day with mint filled energy',
                'directions' => "Wash body with clean water and apply. Finally rinse with clean water",
                'price' => 1550.00,
                'in_stock' => 200,
                'product_image' => 'uploads/31.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P032',
                'product_name' => 'Mint Bodywash',
                'product_category' => 'Body',
                'product_description' => 'Feel mint freshness all through your body and take the day with mint filled energy',
                'directions' => "Wash body with clean water and apply. Finally rinse with clean water",
                'price' => 1550.00,
                'in_stock' => 200,
                'product_image' => 'uploads/32.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P033',
                'product_name' => 'Hair Repair Conditioner',
                'product_category' => 'Hair',
                'product_description' => 'Repair your damaged and dry hair with this amazing solution',
                'directions' => "Wash hair with clean water and apply product. Rinse with clean cold water",
                'price' => 1499.00,
                'product_image' => 'uploads/33.jpeg' , 
                'in_stock' => 320,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P034',
                'product_name' => 'Hair Repair Conditioner',
                'product_category' => 'Hair',
                'product_description' => 'Repair your damaged and dry hair with this amazing solution',
                'directions' => "Wash hair with clean water and apply product. Rinse with clean cold water",
                'price' => 1899.00,
                'in_stock' => 310,
                'product_image' => 'uploads/34.jpeg' , 
                'created_at' => now(),
                'updated_at' => now(),
            ]
           
        ]);
    }
}
