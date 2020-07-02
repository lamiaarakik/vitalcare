@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
      Patient
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.id') }}
                        </th>
                        <td>
                            {{ $client->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nom et prénom
                        </th>
                        <td>
                            {{ $client->nom }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sexe
                        </th>
                        <td>
                            {{ $client->sexe }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Télephone portable
                        </th>
                        <td>
                            {{ $client->telephone_portable }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Télephone fixe
                        </th>
                        <td>
                            {{ $client->telephone_fixe }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.email') }}
                        </th>
                        <td>
                            {{ $client->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Date de naissance
                        </th>
                        <td>
                            {{ $client->date_de_naissance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        adresse
                        </th>
                        <td>
                            {{ $client->adresse}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        code_postal
                        </th>
                        <td>
                            {{ $client->code_postal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        code_postal
                        </th>
                        <td>
                            {{ $client->code_postal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        situation_familial
                        </th>
                        <td>
                            {{ $client->situation_familial }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        nbr_enfants
                        </th>
                        <td>
                            {{ $client->nbr_enfants }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        demandeur
                        </th>
                        <td>
                            {{ $client->demandeur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        raison_demande
                        </th>
                        <td>
                            {{ $client->raison_demande }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        nom_referent
                        </th>
                        <td>
                            {{ $client->nom_referent }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        statut_referent
                        </th>
                        <td>
                            {{ $client->statut_referent }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        telephone_referent
                        </th>
                        <td>
                            {{ $client->telephone_referent }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        aidant_principal
                        </th>
                        <td>
                            {{ $client->aidant_principal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        tel_aidant_principal
                        </th>
                        <td>
                            {{ $client->tel_aidant_principal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        medecin
                        </th>
                        <td>
                            {{ $client->medecin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        specialite_medecin
                        </th>
                        <td>
                            {{ $client->specialite_medecin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        tel_medecin
                        </th>
                        <td>
                            {{ $client->tel_medecin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        risque de chute
                        </th>
                        <td>
                            {{ $client->rique_chute }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_rique_chute
                        </th>
                        <td>
                            {{ $client->comm_rique_chute }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        alergie_alimentaire
                        </th>
                        <td>
                            {{ $client->alergie_alimentaire }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_alergie_alimentaire
                        </th>
                        <td>
                            {{ $client->comm_alergie_alimentaire }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        vision
                        </th>
                        <td>
                            {{ $client->vision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        audition
                        </th>
                        <td>
                            {{ $client->audition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        memoire
                        </th>
                        <td>
                            {{ $client->memoire }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        continence_fecale
                        </th>
                        <td>
                            {{ $client->continence_fecale }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        continence_urinaire
                        </th>
                        <td>
                            {{ $client->continence_urinaire }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        toilette
                        </th>
                        <td>
                            {{ $client->toilette }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_toilette
                        </th>
                        <td>
                            {{ $client->comm_toilette }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        habillage
                        </th>
                        <td>
                            {{ $client->habillage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_habillage
                        </th>
                        <td>
                            {{ $client->comm_habillage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        transfert_lit_fauteuil
                        </th>
                        <td>
                            {{ $client->transfert_lit_fauteuil }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_transfert_lit_fauteuil
                        </th>
                        <td>
                            {{ $client->comm_transfert_lit_fauteuil }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        deplacement_interieur
                        </th>
                        <td>
                            {{ $client->deplacement_interieur }}
                        </td>
                    </tr>
                  
                    <tr>
                        <th>
                        comm_deplacement_interieur
                        </th>
                        <td>
                            {{ $client->comm_deplacement_interieur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        deplacement_exterieur
                        </th>
                        <td>
                            {{ $client->deplacement_exterieur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        deplacement_interieur
                        </th>
                        <td>
                            {{ $client->deplacement_interieur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        alimentation
                        </th>
                        <td>
                            {{ $client->alimentation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_alimentation
                        </th>
                        <td>
                            {{ $client->comm_alimentation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        communication
                        </th>
                        <td>
                            {{ $client->communication }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_communication
                        </th>
                        <td>
                            {{ $client->comm_communication }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        elimination
                        </th>
                        <td>
                            {{ $client->elimination }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_elimination
                        </th>
                        <td>
                            {{ $client->comm_elimination }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        habitat_adapte
                        </th>
                        <td>
                            {{ $client->habitat_adapte }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        comm_habitat_adapte
                        </th>
                        <td>
                            {{ $client->comm_habitat_adapte }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        aide
                        </th>
                        <td>
                            {{ $client->aide }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        qui_aide
                        </th>
                        <td>
                            {{ $client->qui_aide }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        habitude_de_vie
                        </th>
                        <td>
                            {{ $client->habitude_de_vie }}
                        </td>
                    </tr>
                  
                    <tr>
                        <th>
                        histoire_de_vie
                        </th>
                        <td>
                            {{ $client->histoire_de_vie }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        nbr_heure
                        </th>
                        <td>
                            {{ $client->nbr_heure }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        note
                        </th>
                        <td>
                            {{ $client->note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        observation_evaluateur
                        </th>
                        <td>
                            {{ $client->observation_evaluateur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        nom_evaluateur
                        </th>
                        <td>
                            {{ $client->nom_evaluateur }}
                        </td>
                    </tr>
                   
                  
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection