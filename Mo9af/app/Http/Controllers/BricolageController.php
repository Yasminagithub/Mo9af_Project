<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BricolageRequest;
use App\Models\Bricolage;

class BricolageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bricolages = Bricolage::all();
        return view('bricolage.index',compact('bricolages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bricolage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BricolageRequest $request)
    {
         //Validation rules
         $valiator = $request->validate([
            'CIN'=>['required'],
            'Nom_employe'=>['required'],
            'Prenom_employe'=>['required'],
            'Numero_Tel'=>['required'],
            'categorie'=>['required'],
            'Adresse'=>['required'],
            'Email'=>['required'],
            'password'=>['required'],
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx,png,jpeg,ppt,pptx',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // $post = Bricolage::create($request->all());

        // if($request->hasFile('image') && $request->file('image')->isValid()){
        //     $post->addMediaFromRequest('image')->toMediaCollection('images');
        // }

       // Reserver pour le fichier et sonn  nom
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');

        $bricolage = new Bricolage();
        $bricolage->CIN = $request->input('CIN');
        $bricolage->Nom_employe = $request->input('Nom_employe');
        $bricolage->Prenom_employe = $request->input('Prenom_employe');
        $bricolage->Numero_Tel = $request->input('Numero_Tel');
        $bricolage->categorie = $request->input('categorie');
        $bricolage->SousCategorie = $request->input('SousCategorie');
        $bricolage->Email = $request->input('Email');
        $bricolage->password = $request->input('password');
        $bricolage->Adresse= $request->input('Adresse');
        $bricolage->name = $name;
        $bricolage->path = $path;

        // if($request->hasFile('image') && $request->file('image')->isValid()){
        //     $bricolage->addMediaFromRequest('image')->toMediaCollection('images');
        // }
        if ($request->hasFile('image')) {
            $bricolage->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $bricolage->save();

        return redirect()->route('bricolage.index')->with('message','Employe de bricolage est Ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bricolage = Bricolage::find($id);
        return view('bricolage.show')->with('bricolages',$bricolage);
    }

    public function show1($id)
    {
        $bricolage = Bricolage::find($id);
        return view('bricolage.show1')->with('bricolages',$bricolage);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bricolage = Bricolage::findorFail($id);
        return view('bricolage.edit', compact('bricolage'));
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

        $bricolage = Bricolage::findOrFail($id);
        $request->validate([
            'CIN'=>['required'],
            'Nom_employe'=>['required'],
            'Prenom_employe'=>['required'],
            'Numero_Tel'=>['required'],
            'categorie'=>['required'],
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
            $bricolage->clearMediaCollection('images');
            $bricolage->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $bricolage->update($payload);

        return redirect()->route('bricolage.index')->with('message','Employe du bricolage est Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Bricolage::findorFail($id)->delete();
        return redirect()->route('bricolage.index')->with('message','Employe bricolage est supprime avec success');
    }
}