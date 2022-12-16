<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "Fornecedor 100";
        $fornecedor->site = "fornecedor.com.br";
        $fornecedor->save();

        //utilizando método create (atenção para atributos fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br'
        ]);
    }
}
