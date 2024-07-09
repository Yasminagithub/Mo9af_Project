<?php

namespace App\Http\Controllers;
use App\Models\Bonne;
use Illuminate\Http\Request;

class BonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bonnes = Bonne::all();
        return view('Bonne.index',compact('bonnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bonne.create');
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
            'Nom_Bonne'=>['required'],
            'Prenom_Bonne'=>['required'],
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

        $bonne = new Bonne();
        $bonne->CIN = $request->input('CIN');
        $bonne->Nom_Bonne = $request->input('Nom_Bonne');
        $bonne->Prenom_Bonne = $request->input('Prenom_Bonne');
        $bonne->Numero_Tel = $request->input('Numero_Tel');
        $bonne->Profession = $request->input('Profession');
        $bonne->Email = $request->input('Email');
        $bonne->password = $request->input('password');
        $bonne->Adresse= $request->input('Adresse');
        $bonne->name = $name;
        $bonne->path = $path;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $bonne->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $bonne->save();
        return redirect()->route('Bonne.index')->with('message','Employe de bonne est Ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bonne = Bonne::find($id);
        return view('bonne.show')->with('bonnes',$bonne);
    }


    public function show1($id)
    {
        $bonne = Bonne::find($id);
        return view('bonne.show1')->with('bonnes',$bonne);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bonne = Bonne::findorFail($id);
        return view('bonne.edit', compact('bonne'));
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
        $bonne = Bonne::findOrFail($id);
        $request->validate([
            'CIN'=>['required'],
            'Nom_Bonne'=>['required'],
            'Prenom_Bonne'=>['required'],
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
            $bonne->clearMediaCollection('images');
            $bonne->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $bonne->update($payload);

        return redirect()->route('Bonne.index')->with('message','Employe du bonne est Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Bonne::findorFail($id)->delete();
        return redirect()->route('Bonne.index')->with('message','Employe bonne est supprime avec success');
    }
}