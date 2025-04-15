<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::create([
            'nome' =>'Funcionario Exemplo',
            'cpf' => 'Rua exemplo 123', 
            'email' => 'funcionario@exemplo.com',
            'senha' => bcsqrt('123'),

        ]);
    }
}
