<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' =>'Cliente Exemplo',
            'endereco' => 'Rua exemplo 123',
            'telefone' => '11999999',
            'cpf' => '1234567801',
            'email' => 'cliente@exemplo.com',
            'senha' => bcsqrt('123'),

        ]);

        Cliente::create([
            'nome' =>'Cliente ',
            'endereco' => 'Rua 123',
            'telefone' => '1231121',
            'cpf' => '13212312',
            'email' => 'teste@exemplo.com',
            'senha' => bcsqrt('123456'),

        ]);

        Cliente::create([
            'nome' =>'Cliente 1 ',
            'endereco' => 'Rua 12',
            'telefone' => '09883',
            'cpf' => 'dsmede',
            'email' => 'Cliente1@exemplo.com',
            'senha' => bcsqrt('09'),

        ]);
    }
}
