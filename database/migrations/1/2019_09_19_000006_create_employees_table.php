<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('sexe')->nullable();
            $table->string('position')->nullable();
            $table->string('age')->nullable();
            $table->string('look')->nullable();
            $table->string('situation_familiale')->nullable();
            $table->string('langue')->nullable();
            $table->string('experience')->nullable();
          
            $table->string('nombre_heure')->nullable();
            $table->string('salaire')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('commentaire')->nullable();
  
            $table->timestamps();

            $table->softDeletes();
        });
    }
}
