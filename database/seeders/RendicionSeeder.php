<?php

namespace Database\Seeders;

use App\Models\Rendicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RendicionSeeder extends Seeder
{
    public function run(): void
    {
        $rendiciones =[
            'ARREGLADO',
            'PENDIENTE',
        ];
        foreach ($rendiciones as $rendicion) {
            Rendicion::create([
                'nombre_rendicion' => $rendicion,
            ]);
        }
    }
}
