<?php

namespace App\Http\Controllers;

use App\Adrese;
use App\Amats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtraController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = DB::table('adrese')
            ->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
            ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
            ->whereNotIn('id', DB::table('nodala')->pluck('atrasanas_vieta'))
            ->whereNotIn('id', DB::table('depo')->pluck('atrasanas_vieta'))
            ->orderBy('id')
            ->get();

        $jobs = DB::table('amats')
            ->whereNull('darba_pilditajs')
            ->orderBy('id')
            ->get();

        $nodalas = DB::table('nodala')->get();

        return view('extras', array('addresses' => $addresses, 'jobs' => $jobs, 'nodalas' => $nodalas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAddress()
    {
        return view('address_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAddress(Request $request)
    {
        $rules = $rules = array(
            'valsts' => 'required|string|min:2|max:20',
            'novads' => 'nullable|string|min:2|max:20',
            'pilseta' => 'nullable|string|min:2|max:30',
            'iela' => 'nullable|string|min:2|max:30',
            'majas_nr' => 'nullable|string|min:1|max:10',
            'pagasts' => 'nullable|string|min:2|max:30',
            'majas_nosaukums' => 'nullable|string|min:2|max:20',
            'pasta_indekss' => 'required|string|min:2|max:10',
        );

        $this->validate($request, $rules);

        $address = new Adrese();
        $address->valsts = $request->valsts;
        $address->novads = $request->novads;
        $address->pilseta = $request->pilseta;
        $address->iela = $request->iela;
        $address->majas_nr = $request->majas_nr;
        $address->pagasts = $request->pagasts;
        $address->majas_nosaukums = $request->majas_nosaukums;
        $address->pasta_indekss = $request->pasta_indekss;
        $address->save();

        return redirect()->route('allExtras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAddress($id)
    {
        DB::table('adrese')->where('id', $id)->delete();

        return redirect()->route('allExtras');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createJob()
    {
        $departments = DB::table('nodala')->get();
        $depots = DB::table('depo')->get();

        return view('job_create', array('depots' => $depots, 'departments' => $departments));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeJob(Request $request)
    {
        $rules = $rules = array(
            'nosaukums' => 'required|string|min:2|max:50',
            'nodala' => 'required|numeric|min:1',
            'depo' => 'nullable|numeric|min:1',
            'stundas_likme' => 'required|numeric|min:0',
        );

        $this->validate($request, $rules);

        $job = new Amats();
        $job->nosaukums = $request->nosaukums;
        $job->nodala = $request->nodala;
        $job->depo = $request->depo;
        $job->stundas_likme = $request->stundas_likme;
        $job->darba_pilditajs = NULL;
        $job->darba_uzsaksanas_datums = NULL;
        $job->darba_beigsanas_datums = NULL;
        $job->save();

        return redirect()->route('allExtras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyJob($id)
    {
        DB::table('amats')->where('id', $id)->delete();

        return redirect()->route('allExtras');
    }

    public function postSearchAddress(Request $request)
    {
        return DB::table('adrese')
            ->where('valsts', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('pilseta', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('iela', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('majas_nr', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('pasta_indekss', 'LIKE', '%'. $request->get('search') .'%')
            ->get();
    }

    public function postSearchPosition(Request $request)
    {
        return DB::table('amats')
            ->join('nodala','amats.nodala', '=', 'nodala.id')
            ->where('amats.nosaukums', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('amats.stundas_likme', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('nodala.apraksts', 'LIKE', '%'. $request->get('search') .'%')
            ->select('nodala.apraksts as nodala', 'amats.stundas_likme as stundas_likme',
                'amats.nosaukums as nosaukums', 'amats.depo as depo', 'amats.id as id')
            ->get();
    }
}
