<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinic1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('clinic')->insert(
            [
                'id' => 1,
                'name' => 'Clínica Freira Oliva Direne',
                'address' => 'Avenida do Contorno, 1289 - Lurdes, Belo Horizonte - MG'
            ]
        );
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('clinic')->where('id', 1)->delete();
    }
}
