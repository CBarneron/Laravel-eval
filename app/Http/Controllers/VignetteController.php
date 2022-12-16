<?php

namespace App\Http\Controllers;

use App\Models\Vignette;
use Illuminate\Http\Request;

class VignetteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vignette',[
            "Vignettes"=>Vignette::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createVignette');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated =$request->validate([
            'Legende'=>'required',
            'Url'=>'required',
            'Description'=>'required',
            'Statut'=>'required'
        ]) ;
    $vignette = new Vignette;
    $vignette->Legende = $request->input('Legende');
    $vignette->Url = $request->input('Url');
    $vignette->Description = $request->input('Description');
    $vignette->Statut = $request->input('Statut');
    $vignette->save();
    return redirect('vignette');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function show(Vignette $vignette)
    {
        return view('showVignette',["vignette"=>$vignette]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function edit(Vignette $vignette)
    {
        return view('editVignette',[
            "Vignettes"=> $vignette
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vignette $vignette)
    {
        $validated =$request->validate([
            'Legend'=>'required',
            'Url'=>'required',
            'Description'=>'required',
            'Statut'=>'required'
        ]) ;
    
    $vignette->Legend = $request->input('Legend');
    $vignette->Url = $request->input('Url');
    $vignette->Description = $request->input('Description');
    $vignette->Statut = $request->input('Statut');
    $vignette->save();
    return redirect('vignette');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vignette $vignette)
    {
        $vignette-> delete();
        return redirect('vignette');
    }
}
