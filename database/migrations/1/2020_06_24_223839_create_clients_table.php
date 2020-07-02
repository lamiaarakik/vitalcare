<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sexe')->nullable();


            $table->string('nom')->nullable();

            $table->string('telephone_fixe')->nullable();
            $table->string('telephone_portable')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse')->nullable();

            $table->string('code_postal')->nullable();
            $table->datetime('date_de_naissance')->nullable();

            $table->string('situation_familial')->nullable();
            $table->integer('nbr_enfants')->nullable();
            $table->string('demandeur')->nullable();
            $table->string('raison_demande')->nullable();

       
         
          
            $table->string('nom_referent')->nullable();
            $table->string('statut_referent')->nullable();
            $table->string('telephone_referent')->nullable();

            $table->string('aidant_principal')->nullable();
            $table->string('statut_aidant_principal')->nullable();
            $table->string('tel_aidant_principal')->nullable();

            $table->string('medecin')->nullable();
            $table->string('specialite_medecin')->nullable();
            $table->string('tel_medecin')->nullable();

            $table->string('rique_chute')->nullable();
            $table->string('comm_rique_chute')->nullable();
            $table->string('alergie_alimentaire')->nullable();
            $table->string('comm_alergie_alimentaire')->nullable();
            $table->string('vision')->nullable();
            $table->string('audition')->nullable();
            $table->string('memoire')->nullable();
            $table->string('continence_fecale')->nullable();
            $table->string('continence_urinaire')->nullable();

            $table->string('toilette')->nullable();
            $table->string('comm_toilette')->nullable();
            $table->string('habillage')->nullable();
            $table->string('comm_habillage')->nullable();
            $table->string('transfert_lit_fauteuil')->nullable();
            $table->string('comm_transfert_lit_fauteuil')->nullable();
            $table->string('deplacement_interieur')->nullable();
            $table->string('comm_deplacement_interieur')->nullable();
            $table->string('deplacement_exterieur')->nullable();
            $table->string('comm_deplacement_exterieur')->nullable();
            $table->string('alimentation')->nullable();
            $table->string('comm_alimentation')->nullable();
            $table->string('communication')->nullable();
            $table->string('comm_communication')->nullable();
            $table->string('elimination')->nullable();
            $table->string('comm_elimination')->nullable();

            $table->string('habitat_adapte')->nullable();
            $table->string('comm_habitat_adapte')->nullable();

            $table->string('aide')->nullable();
            $table->string('qui_aide')->nullable();

            $table->string('habitude_de_vie')->nullable();
            $table->string('histoire_de_vie')->nullable();
            $table->string('jour')->nullable();
          
            $table->string('nbr_heure')->nullable();

            $table->string('note')->nullable();
            
            $table->string('observation_evaluateur')->nullable();
            $table->string('nom_evaluateur')->nullable();
          
            
            $table->timestamps();

            $table->softDeletes();
        });
    }
}
