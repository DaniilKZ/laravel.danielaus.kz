<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPointBilbordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_point_bilbords', function (Blueprint $table) {
            $table->id(); 


            $table->string('user_id'); // К кому пренадлежит ? 
            $table->string('type');
            $table->string('side');
            $table->string('photoa')->nulled();
            $table->string('photob')->nulled();
            $table->string('content');
            $table->string('height');
            $table->string('width');
            $table->string('locate');
            $table->string('price');
            $table->string('date');
            $table->string('mapscoordx');
            $table->string('mapscoordy');

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
        Schema::dropIfExists('admin_point_bilbords');
    }
}
