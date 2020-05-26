<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Producto;

class ProductoTablaSeeder extends Seeder
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
                'nombre' => 'Chupon',
                'slug' => 'chupon12',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 275.00,
                'foto' => 'https://www.sanborns.com.mx/imagenes-sanborns-ii/1200/7503003707233.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],
            [
                'nombre' => 'Playera',
                'slug' => 'nike90',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 365.00,
                'foto' => 'https://www.small-smile-shop.com.mx/wp-content/uploads/2018/02/001-8301-030_zoom1.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Playera',
                'slug' => 'adidas10',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 365.00,
                'foto' => 'https://http2.mlstatic.com/playera-adidas-originals-hombre-az8128-dancing-originals-D_NQ_NP_784181-MLM25992717091_092017-F.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

               
            [
                'nombre' => 'Anillo',
                'slug' => 'anillo-231',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 7835.00,
                'foto' => 'https://images.baunat.com/es/391914_ou-gw-r1-0050r-3-geel_722x722/0-50-quilates-anillo-de-compromiso-diamante-diseno-en-oro-amarillo.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Zapatos',
                'slug' => 'zapatos-vestir231',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 1246.00,
                'foto' => 'https://i.pinimg.com/originals/7e/cd/20/7ecd20d55b1d3cb34e197b9a7a73776d.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Smartphone',
                'slug' => 'smartphone-SA5',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 7830.00,
                'foto' => 'https://images-na.ssl-images-amazon.com/images/I/41FaKE61LWL._AC_.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Smart TV',
                'slug' => 'smart-S50',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 16899.00,
                'foto' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6176/6176541cv2d.jpg',
                'existencia' => 18,
                'maximo' => 20,
                'minimo' => 8,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Balon soccer',
                'slug' => 'balon-nike31',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 595.00,
                'foto' => 'https://i.pinimg.com/736x/a0/32/0d/a0320d1b4253e4ece02df2cfab584675.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Reloj',
                'slug' => 'reloj-casio23',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 999.00,
                'foto' => 'https://ss376.liverpool.com.mx/xl/1030800962.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Baby-doll',
                'slug' => 'babydoll-30',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 1455.00,
                'foto' => 'https://images-na.ssl-images-amazon.com/images/I/81Mm0emm%2BlL._AC_SX425_.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Bata',
                'slug' => 'bata-baño231',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 435.00,
                'foto' => 'https://ss504.liverpool.com.mx/xl/1051893451.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ],

            [
                'nombre' => 'Motoneta',
                'slug' => 'moto-honda15',
                'descripcion' => 'Lorem itsom perros',
                'precio' => 23835.00,
                'foto' => 'https://images-na.ssl-images-amazon.com/images/I/61aeAg9PUlL._AC_SY355_.jpg',
                'existencia' => 10,
                'maximo' => 20,
                'minimo' => 6,
                'status' => 'Activo',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'departamento_id' => 1
            


            ]

        );

        Producto::insert($data);
    } 
}
