@extends('Layout')
@section('title')
   Page Edit Professeur
@endsection
@section('content')
<div class="container2">
<form  method="POST" action="{{ route('Professeur.update',$professeur->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="login-form1">
            {{-- <div class="headings">
                <h3>Bienvenue !</h3>
            </div> --}}
            <div class="inputs">
                <input class="input-group" type="text" name="CIN" placeholder="" value="{{$professeur->CIN}}">
            </div>
            <span style="color:red">
                @error('CIN')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Nom_prof" placeholder="" value="{{$professeur->Nom_prof}}">
            </div>
            <span style="color:red">
                @error('Nom_prof')
                    {{$message}}
                @enderror
            </span>

            <div class="inputs">
                <input class="input-group" type="text" name="Prenom_prof" placeholder="" value="{{$professeur->Prenom_prof}}">
            </div>
            <span style="color:red">
                @error('Prenom_prof')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Numero_Tel" placeholder="" pattern="[0-9]{4}[0-9]{6}" value="{{$professeur->Numero_Tel}}">
            </div>
            <span style="color:red">
                @error('Numero_Tel')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Niveau_Scolaire" placeholder="" value="{{$professeur->Niveau_Scolaire}}">
            </div>
            <span style="color:red">
                @error('Niveau_Scolaire')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Niveau_Exercie" placeholder="" value="{{$professeur->Niveau_Exercie}}">
            </div>
            <span style="color:red">
                @error('Niveau_Exercie')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Matiere" placeholder="" value="{{$professeur->Matiere}}">
            </div>
            <span style="color:red">
                @error('Matiere')
                    {{$message}}
                @enderror
            </span>
            <select id="job" name="Option_Profession"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
                <option selected>{{$professeur->Option_Profession}}</option>
                <option value="En_Ligne">En ligne</option>
                <option value="Domicile">À domicile</option>
            </select>
            <span style="color:red">
                @error('Option_Profession')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="Email" name="Email" placeholder="" value="{{$professeur->Email}}">
            </div>
            <span style="color:red">
                @error('Email')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="password" name="password" placeholder="" value="{{$professeur->password}}">
            </div>
            <span style="color:red">
                @error('password')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="Adresse" name="Adresse" placeholder="" value="{{$professeur->Adresse}}">
            </div>
            <span style="color:red">
                @error('Adresse')
                    {{$message}}
                @enderror
            </span>

            <div class="mb-3">
                <label>Fichier<span style="color:red">*</span></label>
                    <input type="file" name="file" class="form-control" placeholder="Choisir un fichier" id="file">
                    @error('file')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

            </div>
            <div class="mb-1">
                <label>Photo</label>
                <input type="file" name="image" class="form-control" placeholder="Choisir une image" >
            </div>

            <button class="login-button" type="submit">Login Now</button>

        </div>
    </div>
</form>
</div>
@endsection
