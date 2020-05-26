<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\MOdCliente;
use Illuminate\Support\Facades\Hash;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([

            'rfc' => 'LPE230984YP34PJ09',
            'nombre' => 'Lopez Ernesto David',
            'domicilio' => 'Lorem itsom perros',
            'telefono' => '2383554508',
            'ciudad' => 'Zapopan',
            'cp' => '44600',
            'email' => 'david@gmail.com',
            'user' => 'david',
            'type' => 'admin',
            'pass' => '12345',
            'active' => 1,
            'foto' => 'https://media.metrolatam.com/2018/03/09/capturadepantalla20180309alas75941pm-5b7cce7eabb03507b5b9755cff8468d8-1200x800.jpg',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ],
        
         
        [
            'rfc' => 'CRE260944YP36PJ09',
            'nombre' => 'Camargo Rios Manuel',
            'domicilio' => 'Chapultepec 34',
            'telefono' => '2383569343',
            'ciudad' => 'Zapopan',
            'cp' => '44609',
            'email' => 'manuel@gmail.com',
            'user' => 'manuel',
            'type' => 'user',
            'pass' => '12345',
            'active' => 1,
            'foto' => 'https://studiosol-a.akamaihd.net/uploadfile/letras/fotos/e/7/c/3/e7c3cdaa41ad1c48ec14975643e2a685.jpg',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            
    
        ]
        
        );
   
    }
}
