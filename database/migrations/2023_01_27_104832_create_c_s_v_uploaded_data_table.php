<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCSVUploadedDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_s_v_uploaded_data', function (Blueprint $table) {
            $table->id();
            $table->string("Code");
            $table->string("Birthplace");
            $table->string("Census_night_population_count");
            $table->string("Census_usually_resident_population_count");
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
        Schema::dropIfExists('c_s_v_uploaded_data');
    }
}
