<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('companyName');
            $table->string('PhysicallAdress');
            $table->string('postallAdress');
            $table->string('GPS')->nullable()->default(NULL);
            $table->string('aproved')->default(0);
            $table->string('category');
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
        Schema::dropIfExists('companies');
    }
}
