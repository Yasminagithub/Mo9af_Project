<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nourriture;

class NourritureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nourritures = Nourriture::all();
        return view('Nourriture.index',compact('nourritures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Nourriture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valiator = $request->validate([
            'CIN'=>['required'],
            'Nom_femme'=>['required'],
            'Prenom_femme'=>['required'],
            'Numero_Tel'=>['required'],
            'Adresse'=>['required'],
            'Email'=>['required'],
            'password'=>['required'],
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx,png,jpeg,ppt,pptx',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

       // Reserver pour le fichier et sonn  nom
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');

        $nourriture = new Nourriture();
        $nourriture->CIN = $request->input('CIN');
        $nourriture->Nom_femme = $request->input('Nom_femme');
        $nourriture->Prenom_femme = $request->input('Prenom_femme');
        $nourriture->Numero_Tel = $request->input('Numero_Tel');
        $nourriture->Email = $request->input('Email');
        $nourriture->password = $request->input('password');
        $nourriture->Adresse= $request->input('Adresse');
        $nourriture->name = $name;
        $nourriture->path = $path;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $nourriture->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $nourriture->save();
        return redirect()->route('Nourriture.index')->with('message','Employe de nourriture est Ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nourriture = Nourriture::find($id);
        return view('Nourriture.show')->with('nourritures',$nourriture);
    }

    public function show1($id)
    {
        $nourriture = Nourriture::find($id);
        return view('Nourriture.show1')->with('nourritures',$nourriture);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nourriture = Nourriture::findorFail($id);
        return view('Nourriture.edit', compact('nourriture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nourriture = Nourriture::findOrFail($id);
        $request->validate([
            'CIN'=>['required'],
            'Nom_femme'=>['required'],
            'Prenom_femme'=>['required'],
            'Numero_Tel'=>['required'],
            'Adresse'=>['required'],
            'Email'=>['required'],
            'password'=>['required'],
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx,png,jpeg,ppt,pptx',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $payload = $request->post();
        
        if ($fichier = $request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->store('public/files');
        }
        else{
            unset($payload['file']);
        }

        if ($request->hasFile('image')) {
            $nourriture->clearMediaCollection('images');
            $nourriture->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $nourriture->update($payload);

        return redirect()->route('Nourriture.index')->with('message','Employe de nourriture est Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nourriture::findorFail($id)->delete();
        return redirect()->route('Nourriture.index')->with('message','Employe de nourriture est supprime avec success');
    }
}