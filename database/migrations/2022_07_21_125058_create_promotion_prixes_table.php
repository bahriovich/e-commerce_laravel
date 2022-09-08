<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('promotion_prixes', function (Blueprint $table) {
            $table->id();
    //        $table->string('produit_id');
            $table->string('min_pr_prix');
            $table->string('valeur_pr');
            $table->string('type_pr');
            $table->date('d_debut');
            $table->date('d_fin');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('promotion_prixes');
    }
};
