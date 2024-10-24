<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
     public $categories = [

        ['name' => 'elettronica, informatica', 'img' => '/public/images/banner/banner-phone.jpg'],
        ['name' => 'casa, giardino, fai-da-te', 'img' => '/public/images/banner/banner-casa.jpg'],
        ['name' => 'bellezza & salute', 'img' => '/public/images/banner/banner-bellezze.jpg'],
        ['name' => 'fotografia', 'img' => '/public/images/banner/banner-fotocamera.jpg'],
        ['name' => 'abbigliamento, scarpe', 'img' => '/public/images/banner/banner-abbigliamento.jpg'],
        ['name' => 'gioielli', 'img' => '/public/images/banner/banner-gioielli.jpg'],
        ['name' => 'auto, moto', 'img' => '/public/images/banner/banner-auto.jpg'],
        ['name' => 'musica, film, tv, libri', 'img' => '/public/images/banner/banner-music.jpg'],
        ['name' => 'sport, tempo libero', 'img' => '/public/images/banner/banner-sport.jpg'],
        ['name' => 'videogiochi,console', 'img' => '/public/images/banner/banner-console.jpg'],

        ];
     
    public function run(): void
    {
        
       foreach ($this->categories as $category) {
           
            Category::create([
                'name' => $category['name'],
                'img' => $category['img'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]); 
       } 
       


    }
}
