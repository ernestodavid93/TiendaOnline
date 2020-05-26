<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Clientes;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc', 20);
            $table->string('nombre', 100);
            $table->string('domicilio', 100);
            $table->string('telefono', 100);
            $table->string('ciudad', 50);
            $table->string('cp',5);
            $table->string('email')->unique();
            $table->string('user', 50)->unique();
            $table->enum('type', ['user', 'admin']);
            $table->string('pass', 50);
            $table->boolean('active');
            $table->string('foto');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
