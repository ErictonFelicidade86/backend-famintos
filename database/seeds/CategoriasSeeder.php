<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categorias = [
            ['nome' => 'Combo Especial'],
            ['nome' => 'Pizza'],
            ['nome' => 'Sanduíshes'],
            ['nome' => 'Bebidas'],
        ];

        foreach($categorias as $categoria) {
            Categoria::create([
                'nome' => $categoria['nome']
            ]);
        }
    }
}
