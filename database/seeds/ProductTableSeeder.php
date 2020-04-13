<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  

    public function run() {
        $faker = Faker\Factory::create();        

        for ($i=1; $i <=100 ; $i++) { 
            $storeId = (101 - $i);

            for ($e=1; $e <= 10; $e++) { 
                $name = $faker->randomElement($this->producsName);
                $slug = $this->slugify($name);
    
                DB:: table('products')->insert([ 
                    'store_id' =>  $storeId,
                    'name' => $name,
                    'description' => $faker->text($maxNbChars = 50),
                    'body' => $faker->text($maxNbChars = 500),
                    'price' => $faker->randomNumber(2),
                    'slug' => $storeId .'/'. $slug,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
             }                

        }
    }

    protected $producsName = array('Televisão 24"','Televisão 29','Televisão 34','Televisão 42','Televisão 51','Som Portátil','Macbooc Air 2020','Notebook i3','Notebook i5','Notebook i7','Geladeira Brastemp',
    'Geladeira Consul','Amário 6 Portas','Sofá 3 lugares','Conjunto de Panelas Inox','Conjunto de Cama King Size','Conjunto de Cama King','Conjunto de Cama Casal','Calca Importada P','Calca Importada M','Calca Importada G',
    'Calca Importada GG','Camisa Importada P','Camisa Importada M','Camisa Importada G','Camisa Importada GG','Blusa Importada P','Blusa Importada M','Blusa Importada G','Blusa Importada GG','Vestido Importado P','Vestido Importado M',
    'Vestido Importado G','Vestido Importado GG','Celular - Samsung 5"','Celular - Samsung 6"','Celular - Motorola 5"','Celular - Motorola 6"','Celular - Asus 5"','Celular - Asus 6"','Celular - Iphone 5','Celular - Iphone 6',
    'Celular - Iphone 7','Celular - Iphone 8','Celular - Iphone 9','Celular - Iphone 10','Celular - Iphone 11','Celular - Iphone 12','Livro - A Arte de Escrever','Livro - Bíblia','Livro - O Sucesso','Livro - O Segredo',
    'Livro - A Arte de Ser Feliz','Livro - Segunda Guerra Mundial','Livro - No Pain No Gain','Livro - A Vida Como Ela É','Livro - Gibi Infantil','Livro - A Arte de Falar Em Público','Livro - Dominando o PHP','Livro - Estudos Sobre o Apocalipse',
    'Livro - A Identidade do Espião','Livro - Lista Negra','Livro - Machado de Assis','Livro - A Bíblia e o Futuro','Livro - Sorte Grande','Livro - Melhores Destinos');

    public static function slugify($text) {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
