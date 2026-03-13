<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Sarees', 'description' => 'Exquisite traditional and modern sarees.'],
            ['name' => 'Women', 'description' => 'Elegant ethnic wear for women.'],
            ['name' => 'Mens', 'description' => 'Traditional and formal wear for men.'],
            ['name' => 'Kids', 'description' => 'Cute and traditional ethnic wear for children.'],
        ];

        foreach ($categories as $cat) {
            $category = Category::create([
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'description' => $cat['description'],
            ]);

            // Add some products to each category
            if ($cat['name'] === 'Sarees') {
                $products = [
                    ['name' => 'Royal Gold Handloom Silk', 'price' => 7490, 'stock' => 10, 'image' => 'saree_royal_gold_handloom_silk_1773214820441.png'],
                    ['name' => 'Classic Red Kanchipuram', 'price' => 4290, 'stock' => 15, 'image' => 'saree_classic_red_kanchipuram_1773214836721.png'],
                    ['name' => 'Elegant Pink Tissue Saree', 'price' => 9990, 'stock' => 5, 'image' => 'pro3.png'],
                ];
            } elseif ($cat['name'] === 'Women') {
                $products = [
                    ['name' => 'Designer Silk Salwar Material', 'price' => 2890, 'stock' => 20, 'image' => 'women_designer_silk_salwar_suit_lavender_1773214851794.png'],
                    ['name' => 'Ethnic Gown Royal Blue', 'price' => 5490, 'stock' => 8, 'image' => 'women_ethnic_gown_royal_blue_sequin_1773214865055.png'],
                    ['name' => 'Party Wear Embroidered Saree', 'price' => 3890, 'stock' => 12, 'image' => 'pro2.png'],
                ];
            } elseif ($cat['name'] === 'Mens') {
                $products = [
                    ['name' => 'Formal Silk Shirt Ivory', 'price' => 1890, 'stock' => 25, 'image' => 'mens_formal_silk_shirt_ivory_1773214241878.png'],
                    ['name' => 'Silk Dhoti Gold Jari', 'price' => 1290, 'stock' => 30, 'image' => 'mens_silk_dhoti_gold_jari_1773214227860.png'],
                    ['name' => 'Traditional Silk Kurta Maroon', 'price' => 2490, 'stock' => 15, 'image' => 'mens_traditional_silk_kurta_maroon_1773214257954.png'],
                ];
            } else { // Kids
                $products = [
                    ['name' => 'Baby Frock Ethnic Yellow', 'price' => 1490, 'stock' => 12, 'image' => 'kids_baby_frock_ethnic_yellow_1773214306371.png'],
                    ['name' => 'Boys Silk Dhoti Set', 'price' => 2290, 'stock' => 10, 'image' => 'kids_boys_silk_dhoti_set_cream_1773214287724.png'],
                    ['name' => 'Pattu Pavadai Pink Gold', 'price' => 1890, 'stock' => 15, 'image' => 'kids_pattu_pavadai_pink_gold_1773214272993.png'],
                ];
            }

            foreach ($products as $prod) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => $prod['name'],
                    'slug' => Str::slug($prod['name']),
                    'price' => $prod['price'],
                    'stock' => $prod['stock'],
                    'description' => 'High quality ' . $prod['name'] . ' from Nandhini Silks.',
                    'image_path' => $prod['image'],
                ]);
            }
        }
    }
}
