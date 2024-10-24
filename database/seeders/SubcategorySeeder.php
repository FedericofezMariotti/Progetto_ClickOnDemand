<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{


    public function run(): void
    {
         // Dati delle sottocategorie da associare alle categorie esistenti
         $subcategories = [
            'elettronica, informatica' => ['Smartphone', 'Computer', 'Tablet'],
            'casa, giardino, fai-da-te' => ['Arredamento', 'Utensili', 'Illuminazione'],
            'bellezza & salute' => ['Makeup', 'Cura della pelle', 'Prodotti per capelli'],
            'fotografia' => ['Fotocamere', 'Obiettivi', 'Accessori'],
            'abbigliamento, scarpe' => ['Uomo', 'Donna', 'Bambini'],
            'gioielli' => ['Anelli', 'Collane', 'Bracciali'],
            'auto, moto' => ['Accessori auto', 'Accessori moto', 'Manutenzione'],
            'musica, film, tv, libri' => ['Strumenti musicali', 'Film e DVD', 'Libri'],
            'sport, tempo libero' => ['Attrezzature sportive', 'Abbigliamento sportivo', 'Fitness'],
            'videogiochi,console' => ['Console', 'Giochi', 'Accessori'],
        ];

        foreach ($subcategories as $categoryName => $subcategoryNames) {
            // Recupera la categoria dal database tramite il nome
            $category = Category::where('name', $categoryName)->first();

            if ($category) {
                // Crea le sottocategorie e le collega all'ID della categoria esistente
                foreach ($subcategoryNames as $subcategoryName) {
                    SubCategory::create([
                        'name' => $subcategoryName,
                        'category_id' => $category->id, // Collega la sottocategoria alla categoria
                    ]);
                }
            } else {
                // Se la categoria non esiste, segnala il problema
                $this->command->info("Categoria '$categoryName' non trovata!");
            }
        }
    }
}