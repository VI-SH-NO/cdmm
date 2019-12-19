<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->smallIncrements('id_dossier', '11');
            $table->string('ref', '45')->nullable();
            $table->date('date_sinistre');
            $table->smallInteger('used')->default('1');
            $table->string('matricule', '45')->nullable();
            $table->string('date_reception', '45')->nullable();
            $table->string('date_expertise', '45')->nullable();
            $table->string('id_observation', '200')->nullable();
            $table->date('date_publication')->nullable();
            $table->date('date_apres')->nullable();
            $table->date('date_encours')->nullable();
            $table->date('date_rapport')->nullable();
            $table->date('date_accord')->nullable();
            $table->date('date_facture')->nullable();
            $table->date('date_devis')->nullable();
            $table->date('date_pub_devis')->nullable();
            $table->string('code_dossier', '12');
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
        Schema::dropIfExists('dossiers');
    }
}
