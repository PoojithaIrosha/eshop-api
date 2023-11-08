<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => "Iphone 15 Pro Max",
                'description' => "The iPhone 12: a compact powerhouse, boasting a 6.9-inch Super Retina XDR display and an advanced triple-lens camera system, delivering top-tier performance in a sleek design. With the A16 Bionic chip and extended battery life,",
                'brand' => "Apple",
                'category' => "Smart Phones",
                'price' => "250000",
                'active' => true
            ],
            [
                'title' => "Samsung Galaxy S23 Ultra",
                'description' => "Experience the pinnacle of innovation with the Samsung Galaxy S23 Ultra, featuring cutting-edge technology and a stunning display. This flagship device redefines excellence, offering unparalleled performance",
                'brand' => "Samsung",
                'category' => "Smart Phones",
                'price' => "278273",
                'active' => true
            ],
            [
                'title' => "Logitech MX Master 3S",
                'description' => "The Logitech MX Master 3S: a compact powerhouse, designed for ultimate productivity. With customizable buttons and lightning-fast scrolling, it's the ergonomic choice",
                'brand' => "Logitech",
                'category' => "Accessories",
                'price' => "154963",
                'active' => true
            ],
            [
                'title' => "Iphone 15 plus",
                'description' => "an innovation marvel with a stunning display and advanced camera features, all powered by cutting-edge technology, offering an exceptional user experience in the palm of your hand",
                'brand' => "Apple",
                'category' => "Smart Phones",
                'price' => "217198",
                'active' => true
            ],
            [
                'title' => "USB Type C Charging Cable",
                'description' => "Get charged up with our high-speed USB Type C Charging Cable, delivering rapid and efficient power to your devices. Its versatile design ensures seamless connectivity, making it the perfect companion for all your charging needs",
                'brand' => "Anker",
                'category' => "Accessories",
                'price' => "379673",
                'active' => true
            ],
            [
                'title' => "MSI Katana",
                'description' => "Power and portability unite in this sleek, cutting-edge laptop. Featuring high-performance components and a lightweight design, it's the perfect companion for on-the-go gaming and productivity.",
                'brand' => "MSI",
                'category' => "Laptops",
                'price' => "218292",
                'active' => true
            ],
            [
                'title' => "Asus ROG Scar 15",
                'description' => "a gaming powerhouse with unrivaled performance. Its cutting-edge technology and sleek design deliver an immersive gaming experience like no other.",
                'brand' => "Asus",
                'category' => "Laptops",
                'price' => "218292",
                'active' => true
            ],
            [
                'title' => "Magsafe Wireless Charger",
                'description' => "The MagSafe Wireless Charger offers seamless, snap-on charging for your compatible iPhone or AirPods. With its magnetic alignment, it ensures a quick and efficient wireless charging experience, simplifying your everyday power needs.",
                'brand' => "Apple",
                'category' => "Accessories",
                'price' => "416651",
                'active' => true
            ],
            [
                'title' => "Pixel 8 Pro",
                'description' => "Meet the Pixel 8 Pro, the epitome of innovation in a sleek design. With its cutting-edge camera technology and lightning-fast performance, it redefines excellence in a compact package.",
                'brand' => "Google Pixel",
                'category' => "Smart Phones",
                'price' => "416651",
                'active' => true
            ],
            [
                'title' => "JBL Wireless Speackers",
                'description' => "Experience impeccable sound quality and wireless convenience with JBL's top-tier wireless speakers, delivering rich, immersive audio in a compact, portable design that effortlessly syncs with your devices for on-the-go entertainment.",
                'brand' => "JBL",
                'category' => "Sounds",
                'price' => "1000",
                'active' => true
            ],
        ];

        foreach ($products as $product) {
            Product::factory()->create($product);
        }
    }
}
