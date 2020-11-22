<?php

use App\Produto;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = [
            [
                'nome' => 'Combo 1',
                'descricao' => '03 x saladas + batata fritas + refrigerante 1,5 L.',
                'categoria' => '1',
                'valor' => '35.00',
            ],
            [
                'nome' => 'Combo 2',
                'descricao' => 'Big zaun+fritas+refrigerante em lata.',
                'categoria' => '1',
                'valor' => '39.90',
            ],
            [
                'nome' => 'Combo 3',
                'descricao' => 'Zaun salad, batata fritas + refrigerante em lata.',
                'categoria' => '1',
                'valor' => '23.90',
            ],
            [
                'nome' => 'Combo 4',
                'descricao' => 'Zaun casal, 2 zaun cheedar +2 refrigerante + fritas.',
                'categoria' => '1',
                'valor' => '43.90',
            ],
            [
                'nome' => 'Combo Festa',
                'descricao' => '2 pizzas (marguerita + mussarela) + refri / Pizza marguerita + pizza mussarela + 1 Pepsi de 1 litro.',
                'categoria' => '1',
                'valor' => '78.90',
            ],
            [
                'nome' => 'Pizza portuguesa grande',
                'descricao' => 'Molho, mussarela, presunto, ovo, tomate,pimentão, cebola e orégano.',
                'categoria' => '2',
                'valor' => '35.00',
            ],
            [
                'nome' => 'Pizza metade calabresa e metade mussarela',
                'descricao' => 'Massa,molho,mussarela,calabresa,oregano.',
                'categoria' => '2',
                'valor' => '45.00',
            ],
            [
                'nome' => 'Pizza brasileira grande',
                'descricao' => 'Molho, mussarela, ovo, pimentão, azeitona e orégano.',
                'categoria' => '2',
                'valor' => '35.00',
            ],
            [
                'nome' => 'Hot dog grande',
                'descricao' => 'Molho, mussarela, salsicha, ervilha, milho, batata palha e orégano.',
                'categoria' => '2',
                'valor' => '35.00',
            ],
            [
                'nome' => 'Presunto e Champignon grande',
                'descricao' => 'Molho, mussarela, provolone, champignon e orégano.',
                'categoria' => '2',
                'valor' => '78.90',
            ],
            [
                'nome' => 'Cheese-Tudo',
                'descricao' => 'Pão, hamburguer, ovo, queijo, presunto de peru, calabresa, salsicha, bacon, alface e tomate.',
                'categoria' => '3',
                'valor' => '18.00',
            ],
            [
                'nome' => 'Cheese-maionese',
                'descricao' => 'Pão bola, hamburguer, queijo, presunto, alface e tomate.',
                'categoria' => '3',
                'valor' => '9.00',
            ],
            [
                'nome' => 'Cheese-bacon',
                'descricao' => 'Pão com gergelim + blend de carne 150g + cream cheese + farofa de bacon + cebola caramelizada.',
                'categoria' => '3',
                'valor' => '22.00',
            ],
            [
                'nome' => 'Cheese-salsicha',
                'descricao' => 'Pão bola, 2 salsichas, ovo, queijo, presunto, alface e tomate.',
                'categoria' => '3',
                'valor' => '10.00',
            ],
            [
                'nome' => 'Cheese-calabresa',
                'descricao' => 'Pão bola, calabresa, ovo, queijo, presunto, alface e tomate.',
                'categoria' => '3',
                'valor' => '10.00',
            ],
            [
                'nome' => 'Sprite',
                'descricao' => '325ml',
                'categoria' => '4',
                'valor' => '5.90',
            ],
            [
                'nome' => 'Fanta Uva',
                'descricao' => '325ml',
                'categoria' => '4',
                'valor' => '5.50',
            ],
            [
                'nome' => 'Coca Cola',
                'descricao' => '325ml',
                'categoria' => '4',
                'valor' => '5.80',
            ],
            [
                'nome' => 'Suco de uva a jarra.',
                'descricao' => '1L',
                'categoria' => '4',
                'valor' => '18.00',
            ],
            [
                'nome' => 'Suco de laranja a jarra.',
                'descricao' => '2L',
                'categoria' => '4',
                'valor' => '26.00',
            ],
            [
                'nome' => 'Suco de maracuja a jarra.',
                'descricao' => '2L',
                'categoria' => '4',
                'valor' => '30.00',
            ],
            [
                'nome' => 'Guaraná Antarctica.',
                'descricao' => '1.5L',
                'categoria' => '4',
                'valor' => '8.00',
            ]
        ];

        foreach($produtos as $produto) {
            Produto::create([
                'nome' => $produto['nome'],
                'descricao' => $produto['descricao'],
                'categoria' => $produto['categoria'],
                'valor' => $produto['valor']
            ]);
        }
    }
}
