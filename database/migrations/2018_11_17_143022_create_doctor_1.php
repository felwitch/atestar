<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctor1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('doctor')->insert(
            [
                'id' => 1,
                'name' => 'João Silva',
                'specialty' => 'Cardiologista',
                'crm' => 'MG20288900-90',
                'digitalSignature' => 12345
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
        DB::table('doctor')->where('id', 1)->delete();
    }
}
