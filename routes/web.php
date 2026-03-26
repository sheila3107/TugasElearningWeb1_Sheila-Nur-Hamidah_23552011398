<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'brandName' => 'FoodZone Restaurant & Cafe',
        'author' => 'Sheila Nur Hamidah',
        'description' => 'Sistem Informasi FoodZone dirancang untuk memberikan kemudahan bagi pelanggan dalam mengeksplorasi menu andalan kami secara digital dan real-time dengan cita rasa yang tak terlupakan.',
        
        'menus' => [
            [
                'nama' => 'Steak Wagyu Premium',
                'harga' => 150000,
                'desc' => 'Daging sapi pilihan dengan saus mushroom khas FoodZone.',
                'img' => asset('images/steak.jpg')
            ],
            [
                'nama' => 'Pasta Carbonara',
                'harga' => 45000,
                'desc' => 'Pasta creamy dengan topping keju parmesan dan smoked beef.',
                'img' => asset('images/spaghetti.jpg') 
            ],
            [
                'nama' => 'Espresso Martini',
                'harga' => 35000,
                'desc' => 'Perpaduan kopi arabika terbaik dengan sensasi dingin menyegarkan.',
                'img' => asset('images/espresso.jpg')
            ],
            [
                'nama' => 'Burger Cheese Blast',
                'harga' => 55000,
                'desc' => 'Daging patty tebal dengan lelehan keju mozarella melimpah.',
                'img' => asset('images/burger.jpg')
            ],
            [
                'nama' => 'Salmon Grilled',
                'harga' => 125000,
                'desc' => 'Ikan salmon segar dipanggang dengan bumbu rempah spesial.',
                'img' => asset('images/salmon.jpg')
            ],
            [
                'nama' => 'Iced Matcha Latte',
                'harga' => 30000,
                'desc' => 'Bubuk matcha murni Jepang dicampur dengan susu segar dingin.',
                'img' => asset('images/matcha.jpg') 
            ],
        ]
    ];

    return view('index', $data);
});