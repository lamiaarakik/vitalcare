<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClientRequest;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Client::query()->select(sprintf('%s.*', (new Client)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'client_show';
                $editGate      = 'client_edit';
                $deleteGate    = 'client_delete';
                $crudRoutePart = 'clients';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('nom', function ($row) {
                return $row->nom ? $row->nom : "";
            });
            $table->editColumn('sexe', function ($row) {
                return $row->sexe ? $row->sexe : "";
            });
            $table->editColumn('telephone_portable', function ($row) {
                return $row->telephone_portable ? $row->telephone_portable : "";
            });
            $table->editColumn('telephone_fixe', function ($row) {
                return $row->telephone_fixe ? $row->telephone_fixe : "";
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            $table->editColumn('date_de_naissance', function ($row) {
                return $row->date_de_naissance ? $row->date_de_naissance : "";
            });
         
            $table->editColumn('adresse', function ($row) {
                return $row->adresse ? $row->adresse : "";
            });
          
            $table->editColumn('code_postal', function ($row) {
                return $row->code_postal ? $row->code_postal : "";
            });
            
            $table->editColumn('situation_familial', function ($row) {
                return $row->situation_familial ? $row->situation_familial : "";
            });
            $table->editColumn('nbr_enfants', function ($row) {
                return $row->nbr_enfants ? $row->nbr_enfants : "";
            });
            $table->editColumn('demandeur', function ($row) {
                return $row->demandeur ? $row->demandeur : "";
            });
            $table->editColumn('raison_demande', function ($row) {
                return $row->raison_demande ? $row->raison_demande : "";
            });
            $table->editColumn('nom_referent', function ($row) {
                return $row->nom_referent ? $row->nom_referent : "";
            });
            $table->editColumn('statut_referent', function ($row) {
                return $row->statut_referent ? $row->statut_referent : "";
            });
            $table->editColumn('telephone_referent', function ($row) {
                return $row->telephone_referent ? $row->telephone_referent : "";
            });
         
            $table->editColumn('aidant_principal', function ($row) {
                return $row->aidant_principal ? $row->aidant_principal : "";
            });
            $table->editColumn('tel_aidant_principal', function ($row) {
                return $row->tel_aidant_principal ? $row->tel_aidant_principal : "";
            });
            $table->editColumn('medecin', function ($row) {
                return $row->medecin ? $row->medecin : "";
            });
            $table->editColumn('specialite_medecin', function ($row) {
                return $row->specialite_medecin ? $row->specialite_medecin : "";
            });
            $table->editColumn('tel_medecin', function ($row) {
                return $row->tel_medecin ? $row->tel_medecin : "";
            });
            $table->editColumn('rique_chute', function ($row) {
                return $row->rique_chute ? $row->rique_chute : "";
            });
            $table->editColumn('comm_rique_chute', function ($row) {
                return $row->comm_rique_chute ? $row->comm_rique_chute : "";
            });
            $table->editColumn('alergie_alimentaire', function ($row) {
                return $row->alergie_alimentaire ? $row->alergie_alimentaire : "";
            });
            $table->editColumn('comm_alergie_alimentaire', function ($row) {
                return $row->comm_alergie_alimentaire ? $row->comm_alergie_alimentaire : "";
            });
            $table->editColumn('vision', function ($row) {
                return $row->vision ? $row->vision : "";
            });
            $table->editColumn('audition', function ($row) {
                return $row->audition ? $row->audition : "";
            });
            $table->editColumn('memoire', function ($row) {
                return $row->memoire ? $row->memoire : "";
            });
            $table->editColumn('continence_fecale', function ($row) {
                return $row->continence_fecale ? $row->continence_fecale : "";
            });
            $table->editColumn('continence_urinaire', function ($row) {
                return $row->continence_urinaire ? $row->continence_urinaire : "";
            });
            $table->editColumn('toilette', function ($row) {
                return $row->toilette ? $row->toilette : "";
            });
            $table->editColumn('comm_toilette', function ($row) {
                return $row->comm_toilette ? $row->comm_toilette : "";
            });
            $table->editColumn('habillage', function ($row) {
                return $row->habillage ? $row->habillage : "";
            });
            $table->editColumn('comm_habillage', function ($row) {
                return $row->comm_habillage ? $row->comm_habillage : "";
            });
            $table->editColumn('transfert_lit_fauteuil', function ($row) {
                return $row->transfert_lit_fauteuil ? $row->transfert_lit_fauteuil : "";
            });
            $table->editColumn('comm_transfert_lit_fauteuil', function ($row) {
                return $row->comm_transfert_lit_fauteuil ? $row->comm_transfert_lit_fauteuil : "";
            });
            $table->editColumn('deplacement_interieur', function ($row) {
                return $row->deplacement_interieur ? $row->deplacement_interieur : "";
            });
            $table->editColumn('comm_deplacement_interieur', function ($row) {
                return $row->comm_deplacement_interieur ? $row->comm_deplacement_interieur : "";
            });
            $table->editColumn('deplacement_exterieur', function ($row) {
                return $row->deplacement_exterieur ? $row->deplacement_exterieur : "";
            });
            $table->editColumn('comm_deplacement_exterieur', function ($row) {
                return $row->comm_deplacement_exterieur ? $row->comm_deplacement_exterieur : "";
            });
            $table->editColumn('alimentation', function ($row) {
                return $row->alimentation ? $row->alimentation : "";
            });
            $table->editColumn('comm_alimentation', function ($row) {
                return $row->comm_alimentation ? $row->comm_alimentation : "";
            });
            $table->editColumn('communication', function ($row) {
                return $row->communication ? $row->communication : "";
            });
            $table->editColumn('comm_communication', function ($row) {
                return $row->comm_communication ? $row->comm_communication : "";
            });
            $table->editColumn('elimination', function ($row) {
                return $row->elimination ? $row->elimination : "";
            });
            $table->editColumn('comm_elimination', function ($row) {
                return $row->comm_elimination ? $row->comm_elimination : "";
            });
            $table->editColumn('habitat_adapte', function ($row) {
                return $row->habitat_adapte ? $row->habitat_adapte : "";
            });
            $table->editColumn('comm_habitat_adapte', function ($row) {
                return $row->comm_habitat_adapte ? $row->comm_habitat_adapte : "";
            });
            $table->editColumn('aide', function ($row) {
                return $row->aide ? $row->aide : "";
            });
            $table->editColumn('qui_aide', function ($row) {
                return $row->qui_aide ? $row->qui_aide : "";
            });
            $table->editColumn('habitude_de_vie', function ($row) {
                return $row->habitude_de_vie ? $row->habitude_de_vie : "";
            });
            $table->editColumn('histoire_de_vie', function ($row) {
                return $row->histoire_de_vie ? $row->histoire_de_vie : "";
            });
            $table->editColumn('jour', function ($row) {
                return $row->jour ? $row->jour : "";
            });
            $table->editColumn('nbr_heure', function ($row) {
                return $row->nbr_heure ? $row->nbr_heure : "";
            });
            $table->editColumn('note', function ($row) {
                return $row->note ? $row->note : "";
            });
            $table->editColumn('observation_evaluateur', function ($row) {
                return $row->observation_evaluateur ? $row->observation_evaluateur : "";
            });
            $table->editColumn('nom_evaluateur', function ($row) {
                return $row->nom_evaluateur ? $row->nom_evaluateur : "";
            });
          
            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.clients.index');
    }

    public function create()
    {
        abort_if(Gate::denies('client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        $client = Client::create($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function edit(Client $client)
    {
        abort_if(Gate::denies('client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function show(Client $client)
    {
        abort_if(Gate::denies('client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        abort_if(Gate::denies('client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientRequest $request)
    {
        Client::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
