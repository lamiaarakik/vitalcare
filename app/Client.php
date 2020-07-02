<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nom',
        'telephone_fixe',
        'telephone_portable',
        'email',
        'sexe',
        'date_de_naissance',
      
        'adresse',

        'code_postal',
        'situation_familial',
        'nbr_enfants',
        'demandeur',
        'raison_demande',
        'nom_referent',
        'statut_referent',
        'telephone_referent',
        'aidant_principal',
        'statut_aidant_principal',
        'tel_aidant_principal',
        'medecin',
        'specialite_medecin',
        'tel_medecin',
        'rique_chute',
        'comm_rique_chute',
        'alergie_alimentaire',
        'comm_alergie_alimentaire',
        'vision',
        'audition',
        'memoire',
        'continence_fecale',
        'continence_urinaire',
        'toilette',
        'comm_toilette',
        'habillage',
        'comm_habillage',
        'transfert_lit_fauteuil',
        'comm_transfert_lit_fauteuil',
        'deplacement_interieur',
        'comm_deplacement_interieur',
        'deplacement_exterieur',
        'comm_deplacement_exterieur',
        'alimentation',
        'comm_alimentation',
        'communication',
        'comm_communication',
        'elimination',
        'comm_elimination',
        'habitat_adapte',
        'comm_habitat_adapte',
        'aide',
        'qui_aide',
        'habitude_de_vie',
        'histoire_de_vie',
        'jour',
        'nbr_heure',
        'note',
        'observation_evaluateur',
        'nom_evaluateur',


       

        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'client_id', 'id');
    }
  
}
