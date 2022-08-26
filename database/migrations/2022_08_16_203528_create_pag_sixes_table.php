<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagSixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pag_sixes', function (Blueprint $table) {
            $table->id();
            $table->string('economical')->nullable();
            $table->string('average')->nullable();
            $table->string('vip')->nullable();
            $table->string('ultra_vip')->nullable();
            $table->string('super_ultra_vip')->nullable();
            $table->integer('amount')->nullable();



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
        Schema::dropIfExists('pag_sixes');
    }
}
