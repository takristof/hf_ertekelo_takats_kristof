<?php

namespace App\Http\Controllers;

use App\Models\Hazifeladatok;
use Illuminate\Http\Request;

class HazifeladatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hazifeladatok = Hazifeladatok::orderBy('tanulo')->get();
        return view('hazifeladatok.index', [ 'hazifeladatok' => $hazifeladatok ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hazifeladatok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['tanulo', 'beadott_feladat', 'link']);
        $hazifeladat = new Hazifeladatok();
        $hazifeladat->fill($adatok);
        $hazifeladat->save();
        return redirect()->route('hazifeladatok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hazifeladatok  $hazifeladat
     * @return \Illuminate\Http\Response
     */
    public function show(Hazifeladatok $hazifeladat)
    {
        return view('hazifeladatok.show', ['hazifeladat' => $hazifeladat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hazifeladatok  $hazifeladat
     * @return \Illuminate\Http\Response
     */
    public function edit(Hazifeladatok $hazifeladat)
    {
        return view('hazifeladatok.edit',['hazifeladat'=> $hazifeladat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hazifeladatok  $hazifeladat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hazifeladatok $hazifeladat)
    {
        $adatok=$request->only(['tanulo','beadott_feladat','link']);
        $hazifeladat->fill($adatok);
        $hazifeladat->save();
        return redirect()->route('hazifeladatok.show',$hazifeladat->id);
    }

    /**
     * Remove the specified resource from storage.
     *
    * @param  \App\Models\Hazifeladatok  $hazifeladat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hazifeladatok $hazifeladat)
    {
        $hazifeladat->delete();
        return redirect()->route('hazifeladatok.index');
    }
}
