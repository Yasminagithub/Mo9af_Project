@extends('Layout')
@section('title')
   Page Create Bonne
@endsection
@section('create')
<div class="formu">  
<div class="form-style-8">
<form  method="POST" action="{{ route('Bonne.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="login-form">
            <div class="headings">
                <h2>Bienvenue !</h2>
            </div>
            <div class="inputs">
                <input class="input-group" type="text" name="CIN" placeholder="Votre CIN *" value="{{old('CIN')}}">
            </div>
            <span style="color:red">
                @error('CIN')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Prenom_Bonne" placeholder="Votre Prenom *" value="{{old('Prenom_Bonne')}}">
            </div>
            <span style="color:red">
                @error('Prenom_Bonne')
                    {{$message}}
                @enderror
            </span>

            <div class="inputs">
                <input class="input-group" type="text" name="Nom_Bonne" placeholder="Votre nom *" value="{{old('Nom_Bonne')}}">
            </div>
            <span style="color:red">
                @error('Nom_Bonne')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Numero_Tel" placeholder="Votre telephone *" pattern="[0-9]{4}[0-9]{6}" value="{{old('Numero_Tel')}}">
            </div>
            <span style="color:red">
                @error('Numero_Tel')
                    {{$message}}
                @enderror
            </span>
            <select id="job" name="Profession"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
                <option value="" selected>Choisir une proffession</option>
                <option value="Enfant" @if (old('Profession') == "Enfant") {{ 'selected' }}@endif>Garde d'enfants a domicile</option>
                <option value="Cuisine" @if (old('Profession') == "Cuisine") {{ 'selected' }}@endif>Cuisinier a domicile</option>
                <option value="Menage" @if (old('Profession') == "Menage") {{ 'selected' }}@endif>Ménage</option>
                <option value="autre" @if (old('Profession') == "autre") {{ 'selected' }}@endif>Autre</option>
            </select>

            <div class="inputs">
                <input class="input-group" type="Email" name="Email" placeholder="Votre email * " value="{{old('Email')}}">
            </div>
            <span style="color:red">
                @error('Email')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="password" name="password" placeholder="Votre mot de passe * " value="{{old('password')}}">
            </div>
            <span style="color:red">
                @error('password')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="Adresse" name="Adresse" placeholder="Votre adresse *" value="{{old('Adresse')}}">
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

            <button class="login-button" type="submit">Envoyer</button>

        </div>
    </div>
</form>
</div>
</div>
@endsection
