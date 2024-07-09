@extends('Layout')
@section('title')
   Page Edit Domicile
@endsection
@section('content')
<div class="container1">
<form  method="POST" action="{{ route('Bonne.update',$bonne->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="login-form">
            <div class="headings">
                <h3>Bienvenue !</h3>
            </div>
            <div class="inputs">
                <input class="input-group" type="text" name="CIN" placeholder="" value="{{$bonne->CIN}}">
            </div>
            <span style="color:red">
                @error('CIN')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Prenom_Bonne" placeholder="" value="{{$bonne->Prenom_Bonne}}">
            </div>
            <span style="color:red">
                @error('Prenom_Bonne')
                    {{$message}}
                @enderror
            </span>

            <div class="inputs">
                <input class="input-group" type="text" name="Nom_Bonne" placeholder="" value="{{$bonne->Nom_Bonne}}">
            </div>
            <span style="color:red">
                @error('Nom_Bonne')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Numero_Tel" placeholder="" pattern="[0-9]{4}[0-9]{6}" value="{{$bonne->Numero_Tel}}">
            </div>
            <span style="color:red">
                @error('Numero_Tel')
                    {{$message}}
                @enderror
            </span>
            <select id="job" name="Profession"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
                <option selected>{{$bonne->Profession}}</option>
                <option value="Enfant">Garde d'enfants a domicile</option>
                <option value="Cuisine">Cuisinier a domicile</option>
                <option value="Menage">Ménage</option>
                <option value="autre">Autre</option>
            </select>

            <div class="inputs">
                <input class="input-group" type="Email" name="Email" placeholder="" value="{{$bonne->Email}}">
            </div>
            <span style="color:red">
                @error('Email')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="password" name="password" placeholder="" value="{{$bonne->password}}">
            </div>
            <span style="color:red">
                @error('password')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="Adresse" name="Adresse" placeholder="" value="{{$bonne->Adresse}}">
            </div>
            <span style="color:red">
                @error('Adresse')
                    {{$message}}
                @enderror
            </span>

            <div class="mb-3">
                <label>Fichier<span style="color:red">*</span></label>
                    <input type="file" name="file" class="form-control" placeholder="Choisir un fichier" id="file" value="{{$bonne->file}}">
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
