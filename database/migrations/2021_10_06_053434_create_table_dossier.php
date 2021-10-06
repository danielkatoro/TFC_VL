<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDossier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_dossier', function (Blueprint $table) {
            $table->id();
            $table->string('nomClient');
            $table->string('nomDossier');
            $table->text('descriprion');
            $table->string('statut');
            $table->string('termes');
            $table->float('montant');
            $table->string('adversaire');
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
        Schema::dropIfExists('table_dossier');
    }
}
