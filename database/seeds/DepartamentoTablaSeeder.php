<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Departamento;

class DepartamentoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nombre' => 'Bebes',
                'slug' => 'cat-bebes',
                'descripcion' => 'Lorem itsom perros',
                'color' => '#440022'
            ]



        );

        Departamento::insert($data);
    } 
}
