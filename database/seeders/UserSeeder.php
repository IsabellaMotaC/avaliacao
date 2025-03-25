<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        Cliente::create([
            'nome' => 'Cliente Teste',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '11999999999',
            'CPF' => '12345678901',
            'email' => 'teste@email.com',
            'senha' => Hash::make('senha123'),
        ]);
    }
}
