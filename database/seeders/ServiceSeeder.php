<?php

namespace Database\Seeders;

use App\Models\Service as ModelsService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Servicio 1',
                'description' => 'Descripción del Servicio 1',
                'image' => 'url_de_la_imagen_1.jpg',
            ],
            [
                'title' => 'Servicio 2',
                'description' => 'Descripción del Servicio 2',
                'image' => 'url_de_la_imagen_2.jpg',
            ],
            // Agrega más datos según sea necesario
        ];

        // Itera sobre los datos y crea registros de servicio
        foreach ($services as $service) {
            ModelsService::create($service);
        }
    }
}
