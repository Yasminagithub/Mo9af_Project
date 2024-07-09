@extends('Layout')
@section('title')
   Page Create service cuisine
@endsection
@section('content')
<div class="formu"> 
<div class="form-style-8">
<form  method="POST" action="{{ route('Nourriture.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="login-form2">
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
                <input class="input-group" type="text" name="Prenom_femme" placeholder="Votre Prenom *" value="{{old('Prenom_femme')}}">
            </div>
            <span style="color:red">
                @error('Prenom_femme')
                    {{$message}}
                @enderror
            </span>

            <div class="inputs">
                <input class="input-group" type="text" name="Nom_femme" placeholder="Votre nom *" value="{{old('Nom_femme')}}">
            </div>
            <span style="color:red">
                @error('Nom_femme')
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
            <div class="inputs">
                <input  class="input-group" type="text" name="Email" placeholder="Votre Email *" value="{{old('Email')}}">
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
