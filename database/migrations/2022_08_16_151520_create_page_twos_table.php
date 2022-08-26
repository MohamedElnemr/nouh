<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_twos', function (Blueprint $table) {
            $table->id();
            $table->string('unit_type')->nullable();
            $table->string('location')->nullable();
            $table->string('compound')->nullable();
            $table->string('compound_name')->nullable();
            $table->foreignId("page_one_id")->nullable()->constrained("page_ones");
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
        Schema::dropIfExists('page_twos');
    }
}
