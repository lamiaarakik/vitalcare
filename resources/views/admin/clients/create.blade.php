@extends('layouts.admin')
@section('content')
<style> fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
} </style>
<div class="card">
    <div class="card-header">
        Créer un nouveau patient
    </div>

    <div class="card-body">
        <form action="{{ route("admin.clients.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
<fieldset  class="scheduler-border">         <div class="container">
    <legend class="scheduler-border"> Identité du bénéficiaire</legend>
            <div class="form-group {{ $errors->has('sexe') ? 'has-error' : '' }}">
                <label for="sexe">sexe </label>
                <input type="text" id="sexe" name="sexe" class="form-control" value="{{ old('sexe', isset($client) ? $client->sexe : '') }}">
                @if($errors->has('sexe'))
                    <em class="invalid-feedback">
                        {{ $errors->first('sexe') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                <label for="nom">Nom et prénom</label>
                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', isset($client) ? $client->nom : '') }}">
                @if($errors->has('nom'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('telephone_fixe') ? 'has-error' : '' }}">
                <label for="telephone_fixe">telephone fixe</label>
                <input type="text" id="telephone_fixe" name="telephone_fixe" class="form-control" value="{{ old('telephone_fixe', isset($client) ? $client->telephone_fixe : '') }}">
                @if($errors->has('telephone_fixe'))
                    <em class="invalid-feedback">
                        {{ $errors->first('telephone_fixe') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('telephone_portable') ? 'has-error' : '' }}">
                <label for="telephone_portable">telephone portable</label>
                <input type="text" id="telephone_portable" name="telephone_portable" class="form-control" value="{{ old('telephone_portable', isset($client) ? $client->telephone_portable : '') }}">
                @if($errors->has('telephone_portable'))
                    <em class="invalid-feedback">
                        {{ $errors->first('telephone_portable') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.client.fields.email') }}</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($client) ? $client->email : '') }}">
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.client.fields.email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('date_de_naissance') ? 'has-error' : '' }}">
                <label for="date_de_naissance">date de naissance</label>
                <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control" value="{{ old('date_de_naissance', isset($client) ? $client->date_de_naissance : '') }}">
                @if($errors->has('date_de_naissance'))
                    <em class="invalid-feedback">
                        {{ $errors->first('date_de_naissance') }}
                    </em>
                @endif
               
            </div>
       
            <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                <label for="adresse">adresse</label>
                <input type="text" id="adresse" name="adresse" class="form-control" value="{{ old('adresse', isset($client) ? $client->adresse : '') }}">
                @if($errors->has('adresse'))
                    <em class="invalid-feedback">
                        {{ $errors->first('adresse') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('nbr_enfants') ? 'has-error' : '' }}">
                <label for="nbr_enfants">nombre d'enfants</label>
                <input type="number" id="nbr_enfants" name="nbr_enfants" class="form-control" value="{{ old('nbr_enfants', isset($client) ? $client->nbr_enfants : '') }}">
                @if($errors->has('nbr_enfants'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nbr_enfants') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('code_postal') ? 'has-error' : '' }}">
                <label for="code_postal">code postal</label>
                <input type="text" id="code_postal" name="code_postal" class="form-control" value="{{ old('code_postal', isset($client) ? $client->code_postal : '') }}">
                @if($errors->has('code_postal'))
                    <em class="invalid-feedback">
                        {{ $errors->first('code_postal') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">         <div class="container">

            <legend class="scheduler-border"> Origine de la demande</legend>
            <div class="form-group {{ $errors->has('demandeur') ? 'has-error' : '' }}">
                <label for="demandeur">Demandeur</label>
                <input type="text" id="demandeur" name="demandeur" class="form-control" value="{{ old('demandeur', isset($client) ? $client->demandeur : '') }}">
                @if($errors->has('demandeur'))
                    <em class="invalid-feedback">
                        {{ $errors->first('demandeur') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('raison_demande') ? 'has-error' : '' }}">
                <label for="raison_demande">raison de la demande</label>
                <input type="text" id="raison_demande" name="raison_demande" class="form-control" value="{{ old('raison_demande', isset($client) ? $client->raison_demande : '') }}">
                @if($errors->has('raison_demande'))
                    <em class="invalid-feedback">
                        {{ $errors->first('raison_demande') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('nom_referent') ? 'has-error' : '' }}">
                <label for="nom_referent">nom du referent</label>
                <input type="text" id="nom_referent" name="nom_referent" class="form-control" value="{{ old('nom_referent', isset($client) ? $client->nom_referent : '') }}">
                @if($errors->has('nom_referent'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom_referent') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('statut_referent') ? 'has-error' : '' }}">
                <label for="statut_referent">statut du referent</label>
                <input type="text" id="statut_referent" name="statut_referent" class="form-control" value="{{ old('statut_referent', isset($client) ? $client->statut_referent : '') }}">
                @if($errors->has('statut_referent'))
                    <em class="invalid-feedback">
                        {{ $errors->first('statut_referent') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('telephone_referent') ? 'has-error' : '' }}">
                <label for="telephone_referent">telephone du referent</label>
                <input type="text" id="telephone_referent" name="telephone_referent" class="form-control" value="{{ old('telephone_referent', isset($client) ? $client->telephone_referent : '') }}">
                @if($errors->has('telephone_referent'))
                    <em class="invalid-feedback">
                        {{ $errors->first('telephone_referent') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">         <div class="container">
            <legend class="scheduler-border"> L’aidant principal </legend>
            <div class="form-group {{ $errors->has('aidant_principal') ? 'has-error' : '' }}">
                <label for="aidant_principal">aidant principal</label>
                <input type="text" id="aidant_principal" name="aidant_principal" class="form-control" value="{{ old('aidant_principal', isset($client) ? $client->aidant_principal : '') }}">
                @if($errors->has('aidant_principal'))
                    <em class="invalid-feedback">
                        {{ $errors->first('aidant_principal') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('statut_aidant_principal') ? 'has-error' : '' }}">
                <label for="statut_aidant_principal">statut aidant principal</label>
                <input type="text" id="statut_aidant_principal" name="statut_aidant_principal" class="form-control" value="{{ old('statut_aidant_principal', isset($client) ? $client->statut_aidant_principal : '') }}">
                @if($errors->has('statut_aidant_principal'))
                    <em class="invalid-feedback">
                        {{ $errors->first('statut_aidant_principal') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('tel_aidant_principal') ? 'has-error' : '' }}">
                <label for="tel_aidant_principal">telephone aidant principal</label>
                <input type="text" id="tel_aidant_principal" name="tel_aidant_principal" class="form-control" value="{{ old('tel_aidant_principal', isset($client) ? $client->tel_aidant_principal : '') }}">
                @if($errors->has('tel_aidant_principal'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tel_aidant_principal') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">         <div class="container">
            <legend class="scheduler-border"> Médecin traitant</legend>
            <div class="form-group {{ $errors->has('medecin') ? 'has-error' : '' }}">
                <label for="medecin">medecin</label>
                <input type="text" id="medecin" name="medecin" class="form-control" value="{{ old('medecin', isset($client) ? $client->medecin : '') }}">
                @if($errors->has('medecin'))
                    <em class="invalid-feedback">
                        {{ $errors->first('medecin') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('specialite_medecin') ? 'has-error' : '' }}">
                <label for="specialite_medecin">specialite_medecin</label>
                <input type="text" id="specialite_medecin" name="specialite_medecin" class="form-control" value="{{ old('specialite_medecin', isset($client) ? $client->specialite_medecin : '') }}">
                @if($errors->has('specialite_medecin'))
                    <em class="invalid-feedback">
                        {{ $errors->first('specialite_medecin') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('tel_medecin') ? 'has-error' : '' }}">
                <label for="tel_medecin">telelphone medecin</label>
                <input type="text" id="tel_medecin" name="tel_medecin" class="form-control" value="{{ old('tel_medecin', isset($client) ? $client->tel_medecin : '') }}">
                @if($errors->has('tel_medecin'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tel_medecin') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">         <div class="container">
            <legend class="scheduler-border"> État physique / psychique de la personne</legend>
            <div class="form-group {{ $errors->has('rique_chute') ? 'has-error' : '' }}">
                <label for="rique_chute">risque de chute?</label>
               <br><label> oui</label> <input type="radio" id="rique_chute" name="rique_chute"  value="oui" checked>
  <label>   non </label><input type="radio" id="rique_chute" name="rique_chute" value="non">
  <br>
<label for="comm_rique_chute" >               Si oui Précisez</label> <input type="text" id="comm_rique_chute" class="form-control" name="comm_rique_chute"  value="{{ old('comm_rique_chute', isset($client) ? $client->comm_rique_chute : '') }}">
    
 
  
            </div>
           
            <div class="form-group {{ $errors->has('alergie_alimentaire') ? 'has-error' : '' }}">
                <label for="alergie_alimentaire">Alergie alimentaire ?</label>
                <br><label> oui</label> <input type="radio" id="alergie_alimentaire" name="alergie_alimentaire" value="oui" checked>
  <label>   non </label><input type="radio" id="alergie_alimentaire" name="alergie_alimentaire" value="non">
  <br>
<label for="comm_alergie_alimentaire" >               Si oui Précisez</label> <input type="text" id="comm_alergie_alimentaire" class="form-control" name="comm_alergie_alimentaire"  value="{{ old('comm_alergie_alimentaire', isset($client) ? $client->comm_alergie_alimentaire : '') }}">
    
               
            </div>

            <div class="form-group {{ $errors->has('vision') ? 'has-error' : '' }}">
                <label for="vision">vision</label>
                <input type="text" id="vision" name="vision" class="form-control" value="{{ old('vision', isset($client) ? $client->vision : '') }}">
                @if($errors->has('vision'))
                    <em class="invalid-feedback">
                        {{ $errors->first('vision') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('audition') ? 'has-error' : '' }}">
                <label for="audition">audition</label>
                <input type="text" id="audition" name="audition" class="form-control" value="{{ old('audition', isset($client) ? $client->audition : '') }}">
                @if($errors->has('audition'))
                    <em class="invalid-feedback">
                        {{ $errors->first('audition') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('memoire') ? 'has-error' : '' }}">
                <label for="memoire">memoire</label>
                <input type="text" id="memoire" name="memoire" class="form-control" value="{{ old('memoire', isset($client) ? $client->memoire : '') }}">
                @if($errors->has('memoire'))
                    <em class="invalid-feedback">
                        {{ $errors->first('memoire') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('continence_fecale') ? 'has-error' : '' }}">
                <label for="continence_fecale">continence fécale</label>
                <input type="text" id="continence_fecale" name="continence_fecale" class="form-control" value="{{ old('continence_fecale', isset($client) ? $client->continence_fecale : '') }}">
                @if($errors->has('continence_fecale'))
                    <em class="invalid-feedback">
                        {{ $errors->first('continence_fecale') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('continence_urinaire') ? 'has-error' : '' }}">
                <label for="continence_urinaire">continence urinaire</label>
                <input type="text" id="continence_urinaire" name="continence_urinaire" class="form-control" value="{{ old('continence_urinaire', isset($client) ? $client->continence_urinaire : '') }}">
                @if($errors->has('continence_urinaire'))
                    <em class="invalid-feedback">
                        {{ $errors->first('continence_urinaire') }}
                    </em>
                @endif
               
            </div></div>
            </fieldset>
            <fieldset  class="scheduler-border">         <div class="container">
            <legend class="scheduler-border"> Capacités /Incapacités </legend>
            <div class="form-group {{ $errors->has('toilette') ? 'has-error' : '' }}">
                <label for="toilette">toilette</label>
                <br><label> Autonome </label> <input type="radio" id="toilette" name="toilette" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="toilette" name="toilette" value="partielle">
  <label>    totale </label><input type="radio" id="toilette" name="toilette" value="totale">

<label for="comm_toilette" >               commentaire</label> <input type="text" id="comm_toilette"  name="comm_toilette"  value="{{ old('comm_toilette', isset($client) ? $client->comm_toilette : '') }}">
    
               
            </div>
           
            <div class="form-group {{ $errors->has('habillage') ? 'has-error' : '' }}">
                <label for="habillage">habillage</label>
                <br><label> Autonome </label> <input type="radio" id="habillage" name="habillage" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="habillage" name="habillage" value="partielle">
  <label>    totale </label><input type="radio" id="habillage" name="habillage" value="totale">

<label for="comm_habillage" >               commentaire</label> <input type="text" id="comm_habillage"  name="comm_habillage"  value="{{ old('comm_habillage', isset($client) ? $client->comm_habillage : '') }}">
    
               
            </div>
    
            <div class="form-group {{ $errors->has('transfert_lit_fauteuil') ? 'has-error' : '' }}">
                <label for="transfert_lit_fauteuil">transfert fauteuil lit</label>
                <br><label> Autonome </label> <input type="radio" id="transfert_lit_fauteuil" name="transfert_lit_fauteuil" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="transfert_lit_fauteuil" name="transfert_lit_fauteuil" value="partielle">
  <label>    totale </label><input type="radio" id="transfert_lit_fauteuil" name="transfert_lit_fauteuil" value="totale">

<label for="comm_transfert_lit_fauteuil" >               commentaire</label> <input type="text" id="comm_transfert_lit_fauteuil"  name="comm_transfert_lit_fauteuil"  value="{{ old('comm_transfert_lit_fauteuil', isset($client) ? $client->comm_transfert_lit_fauteuil : '') }}">
    
               
            </div>
          
            <div class="form-group {{ $errors->has('deplacement_interieur') ? 'has-error' : '' }}">
                <label for="deplacement_interieur">deplacement interieur</label>
                <br><label> Autonome </label> <input type="radio" id="deplacement_interieur" name="deplacement_interieur" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="deplacement_interieur" name="deplacement_interieur" value="partielle">
  <label>    totale </label><input type="radio" id="deplacement_interieur" name="deplacement_interieur" value="totale">

<label for="comm_deplacement_interieur" >               commentaire</label> <input type="text" id="comm_deplacement_interieur"  name="comm_deplacement_interieur"  value="{{ old('comm_deplacement_interieur', isset($client) ? $client->comm_deplacement_interieur : '') }}">
    
               
            </div>
           
            <div class="form-group {{ $errors->has('deplacement_exterieur') ? 'has-error' : '' }}">
                <label for="deplacement_exterieur">deplacement_exterieur</label>
                <br><label> Autonome </label> <input type="radio" id="deplacement_exterieur" name="deplacement_exterieur" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="deplacement_exterieur" name="deplacement_exterieur" value="partielle">
  <label>    totale </label><input type="radio" id="deplacement_exterieur" name="deplacement_exterieur" value="totale">

<label for="comm_deplacement_exterieur" >               commentaire</label> <input type="text" id="comm_deplacement_exterieur"  name="comm_deplacement_exterieur"  value="{{ old('comm_deplacement_exterieur', isset($client) ? $client->comm_deplacement_exterieur : '') }}">
    
            </div>
           
            <div class="form-group {{ $errors->has('alimentation') ? 'has-error' : '' }}">
                <label for="alimentation">alimentation</label>
                <br><label> Autonome </label> <input type="radio" id="alimentation" name="alimentation" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="alimentation" name="alimentation" value="partielle">
  <label>    totale </label><input type="radio" id="alimentation" name="alimentation" value="totale">

<label for="comm_alimentation" >               commentaire</label> <input type="text" id="comm_alimentation"  name="comm_alimentation"  value="{{ old('comm_alimentation', isset($client) ? $client->comm_alimentation : '') }}">
    
            </div>
           
            <div class="form-group {{ $errors->has('communication') ? 'has-error' : '' }}">
                <label for="communication">communication</label>
                <br><label> Autonome </label> <input type="radio" id="communication" name="communication" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="communication" name="communication" value="partielle">
  <label>    totale </label><input type="radio" id="communication" name="communication" value="totale">

<label for="comm_communication" >               commentaire</label> <input type="text" id="comm_communication"  name="comm_communication"  value="{{ old('comm_communication', isset($client) ? $client->comm_communication : '') }}">
    
               
            </div>
          
            <div class="form-group {{ $errors->has('elimination') ? 'has-error' : '' }}">
                <label for="elimination">elimination</label>
                <br><label> Autonome </label> <input type="radio" id="elimination" name="elimination" value="autonome" checked>
  <label>   Partielle </label><input type="radio" id="elimination" name="elimination" value="partielle">
  <label>    totale </label><input type="radio" id="elimination" name="elimination" value="totale">

<label for="comm_elimination" >               commentaire</label> <input type="text" id="comm_elimination"  name="comm_elimination"  value="{{ old('comm_elimination', isset($client) ? $client->comm_elimination : '') }}">
    
            </div>
          </div>
          </fieldset>
          <fieldset  class="scheduler-border">         <div class="container">
          <legend class="scheduler-border"> Habitat / Environnement </legend>

            <div class="form-group {{ $errors->has('habitat_adapte') ? 'has-error' : '' }}">
                <label for="habitat_adapte">habitat adapté???</label>
              
               <br><label> oui</label> <input type="radio" id="habitat_adapte" name="habitat_adapte"  value="oui" checked>
  <label>   non </label><input type="radio" id="habitat_adapte" name="habitat_adapte" value="non">
  <br>
<label for="comm_habitat_adapte" >               Si non pourquoi?</label> <input type="text" id="comm_habitat_adapte" class="form-control" name="comm_habitat_adapte"  value="{{ old('comm_habitat_adapte', isset($client) ? $client->comm_habitat_adapte : '') }}">
    
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">         <div class="container">
          <legend class="scheduler-border">  Intervenants à domicile </legend>
            <div class="form-group {{ $errors->has('aide') ? 'has-error' : '' }}">
                <label for="aide">Est-ce qu’un intervenant vous aide au quotidien ?</label>
                
               <br><label> oui</label> <input type="radio" id="aide" name="aide"  value="oui" checked>
  <label>   non </label><input type="radio" id="aide" name="aide" value="non">
  <br>
<label for="qui_aide" >              Si oui, qui vous aide ? </label> <input type="text" id="qui_aide" class="form-control" name="qui_aide"  value="{{ old('qui_aide', isset($client) ? $client->qui_aide : '') }}">
    
               
            </div>
          </div>
          </fieldset>
          <fieldset  class="scheduler-border">        <div class="container">
          <legend class="scheduler-border">   habitude de vie </legend>
            <div class="form-group {{ $errors->has('habitude_de_vie') ? 'has-error' : '' }}">
                <label for="habitude_de_vie"></label>
                <br> <p>
Indiquer les habitudes de vie de la personne :
Par exemple, se lève très tôt le matin (5h) pour aller faire deux heures de vélo et rentre dormir jusqu’à 11h…  etc.
Habitude d’hygiène, de sommeil, alimentaires…
</p>
                <input type="text" id="habitude_de_vie" name="habitude_de_vie" class="form-control" value="{{ old('habitude_de_vie', isset($client) ? $client->habitude_de_vie : '') }}">
                @if($errors->has('habitude_de_vie'))
                    <em class="invalid-feedback">
                        {{ $errors->first('habitude_de_vie') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">        <div class="container">
          <legend class="scheduler-border">   histoire de vie </legend>
            <div class="form-group {{ $errors->has('histoire_de_vie') ? 'has-error' : '' }}">
                <label for="histoire_de_vie"></label>
                <br> <p>
Indiquer les éléments marquants et l’histoire de vie de la personne :
Par exemple, religion,, loisirs et intérêts, animal de compagnie, musique, personnalité…
</p>
                <input type="text" id="histoire_de_vie" name="histoire_de_vie" class="form-control" value="{{ old('histoire_de_vie', isset($client) ? $client->histoire_de_vie : '') }}">
                @if($errors->has('histoire_de_vie'))
                    <em class="invalid-feedback">
                        {{ $errors->first('histoire_de_vie') }}
                    </em>
                @endif
               
            </div>
      </div>
      </fieldset>
      <fieldset  class="scheduler-border">        <div class="container">
          <legend class="scheduler-border">   Heure et jour d'intervention </legend>
            <div class="form-group {{ $errors->has('nbr_heure') ? 'has-error' : '' }}">
                <label for="nbr_heure">nombre d'heure par jour</label>
                <input type="number" id="nbr_heure" name="nbr_heure" class="form-control" value="{{ old('nbr_heure', isset($client) ? $client->nbr_heure : '') }}">
                @if($errors->has('nbr_heure'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nbr_heure') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">        <div class="container">
          <legend class="scheduler-border">   Note </legend>
            <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
                <label for="note">Ajouter une note</label>
                <input type="text" id="note" name="note" class="form-control" value="{{ old('note', isset($client) ? $client->note : '') }}">
                @if($errors->has('note'))
                    <em class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <fieldset  class="scheduler-border">        <div class="container">
          <legend class="scheduler-border">  Evaluateur </legend>
           
            <div class="form-group {{ $errors->has('nom_evaluateur') ? 'has-error' : '' }}">
                <label for="nom_evaluateur">nom de l'evaluateur</label>
                <input type="text" id="nom_evaluateur" name="nom_evaluateur" class="form-control" value="{{ old('nom_evaluateur', isset($client) ? $client->nom_evaluateur : '') }}">
                @if($errors->has('nom_evaluateur'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nom_evaluateur') }}
                    </em>
                @endif
               
            </div>
            <div class="form-group {{ $errors->has('observation_evaluateur') ? 'has-error' : '' }}">
                <label for="observation_evaluateur">observation de l'evaluateur</label>
                <input type="text" id="observation_evaluateur" name="observation_evaluateur" class="form-control" value="{{ old('observation_evaluateur', isset($client) ? $client->observation_evaluateur : '') }}">
                @if($errors->has('observation_evaluateur'))
                    <em class="invalid-feedback">
                        {{ $errors->first('observation_evaluateur') }}
                    </em>
                @endif
               
            </div>
            </div>
            </fieldset>
            <div>
                <input class="btn btn-danger" type="submit" value="Enregistrer">
            </div>
        </form>


    </div>
</div>
@endsection