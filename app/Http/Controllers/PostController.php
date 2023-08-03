<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Credit;
use App\Models\Province;
use App\Models\Commune;
use App\Models\Colline;

use App\ModMMUNE;
// use App\Models\;


use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function index()
    // {
    //     return view('form');
    // }

    public function option(Request $request)
        {
            if ($request->type=='commune') {
                $commune = Commune::where('ID_PROVINCE', $request->id)->get();
                // dd($commune);

                return view('live.dash',[
                    'communes'=>$commune
                ])->render();
            }else{
                $colline = Colline::where('ID_COMMUNE', $request->id)->get();
                return view('live.dash',[
                    'collines'=>$colline
                ])->render();
            }
        }

    
      public function step1(Request $request)
    {
        $provinces = Province::all();

        // dd($province);
        // $collines = Colline::all();
        // $collineMMUNE::all();
        $communes = Commune::all();

        return view('form',compact('provinces','communes'));
        // return view('form',[
        //     'provinces'=>$provinces,
        //     'communes'=>$communes,
        //     'collines'=>$collines]);

    }
    
    public function store(Request $request)
    {
        $province = Province::all();
        $colline = Colline::all();

        // dd($collines);
        $client = Client::create([
            'NOM' => $request->input('nom'),
            'PRENOM' => $request->input('prenom'),
            'CODE' => $request->input('code'),
            'FICHE' => $request->input('fiche'),
            'TELEPHONE' => $request->input('telephone'),
            'ID_PROVINCE' => $request->input('province'),
            'ID_COMMUNE' => $request->input('commune'),
            'ID_COLLINE' => $request->input('colline'),
            'NOM_COOPERATIVE' => $request->input('nomCooperative'),
            // 'CATEGORY' => $request->input('category'),
            'AGRICOLE' => $request->input('agricole'),
            'ID_ETAT' => 1,
            // 'DATE_CREATION' =>date_create()

        ]);

        return redirect()->route('form.step2');
    }
    public function step2()
    {
        return view('formStep2');
    }
    
    public function storeStep2(Request $request)
    {
        // $user = Credit::create([
        //     '' => $request->input(''),
        //     '' => $request->input(''),
        // ]);
        return redirect()->route('form.step3');
    }

    public function step3()
    {
        return view('formStep3');
    }

    public function storeStep3(Request $request)
    {
        
        return redirect()->route('form.cotisation');
    }
    public function cotisation()
    {
        return view('cotisation');
    }

    public function storeCotisation(Request $request)
    {
        return redirect()->route('try')->with('success', 'Formulaire soumis avec succès !');
    }
}
