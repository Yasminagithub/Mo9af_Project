<?php

namespace App\Http\Controllers;
use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professeurs = Professeur::all();
        return view('Professeur.index',compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Professeur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //Validation rules
          $valiator = $request->validate([
            'CIN'=>['required'],
            'Nom_prof'=>['required'],
            'Prenom_prof'=>['required'],
            'Numero_Tel'=>['required'],
            'Niveau_Scolaire'=>['required'],
            'Niveau_Exercie'=>['required'],
            'Matiere'=>['required'],
            'Option_Profession'=>['required'],
            'Email'=>['required'],
            'password'=>['required'],
            'Adresse'=>['required'],
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx,png,jpeg,ppt,pptx',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

       // Reserver pour le fichier et sonn  nom
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');

        $prof = new Professeur();
        $prof->CIN = $request->input('CIN');
        $prof->Nom_prof = $request->input('Nom_prof');
        $prof->Prenom_prof = $request->input('Prenom_prof');
        $prof->Numero_Tel = $request->input('Numero_Tel');
        $prof->Niveau_Scolaire = $request->input('Niveau_Scolaire');
        $prof->Niveau_Exercie = $request->input('Niveau_Exercie');
        $prof->Matiere = $request->input('Matiere');
        $prof->Option_Profession = $request->input('Option_Profession');
        $prof->Email = $request->input('Email');
        $prof->password = $request->input('password');
        $prof->Adresse= $request->input('Adresse');
        $prof->name = $name;
        $prof->path = $path;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $prof->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $prof->save();
        return redirect()->route('Professeur.index')->with('message','Employe de professeur est Ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professeur = Professeur::find($id);
        return view('Professeur.show')->with('professeurs',$professeur);
    }

    public function show1($id)
    {
        $professeur = Professeur::find($id);
        return view('Professeur.show1')->with('professeurs',$professeur);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professeur = Professeur::findorFail($id);
        return view('Professeur.edit', compact('professeur'));
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

        $professeur = Professeur::findorFail($id);
        $request->validate([
                'CIN'=>['required'],
                'Nom_prof'=>['required'],
                'Prenom_prof'=>['required'],
                'Numero_Tel'=>['required'],
                'Niveau_Scolaire'=>['required'],
                'Niveau_Exercie'=>['required'],
                'Matiere'=>['required'],
                'Option_Profession'=>['required'],
                'Email'=>['required'],
                'password'=>['required'],
                'Adresse'=>['required'],
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
            $professeur->clearMediaCollection('images');
            $professeur->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $professeur->update($payload);

        return redirect()->route('Professeur.index')->with('message','Employe professeur est Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Professeur::findorFail($id)->delete();
        return redirect()->route('Professeur.index')->with('message','Employe professeur est supprime avec success');
    }
}