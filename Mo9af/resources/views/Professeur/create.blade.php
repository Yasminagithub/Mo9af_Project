@extends('Layout')
@section('title')
   Page Create service Professeur
@endsection

@section('content')
<div class="formu"> 
<div class="form-style-8">
<form  method="POST" action="{{ route('Professeur.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="login-form1">
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
                <input class="input-group" type="text" name="Nom_prof" placeholder="Votre nom *" value="{{old('Nom_prof')}}">
            </div>
            <span style="color:red">
                @error('Nom_prof')
                    {{$message}}
                @enderror
            </span>

            <div class="inputs">
                <input class="input-group" type="text" name="Prenom_prof" placeholder="Votre prenom *" value="{{old('Prenom_prof')}}">
            </div>
            <span style="color:red">
                @error('Prenom_prof')
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
                <input class="input-group" type="text" name="Niveau_Scolaire" placeholder="Votre niveau scolaire *" value="{{old('Niveau_Scolaire')}}">
            </div>
            <span style="color:red">
                @error('Niveau_Scolaire')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Niveau_Exercie" placeholder="Votre niveau exercie *" value="{{old('Niveau_Exercie')}}">
            </div>
            <span style="color:red">
                @error('Niveau_Exercie')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Matiere" placeholder="Matiere d'education *" value="{{old('Matiere')}}">
            </div>
            <span style="color:red">
                @error('Matiere')
                    {{$message}}
                @enderror
            </span>
            <select id="job" name="Option_Profession"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
                <option value="" selected>Choisir option de formation</option>
                <option value="En_Ligne" @if (old('Option_Profession') == "En_Ligne") {{ 'selected' }}@endif>En ligne</option>
                <option value="Domicile" @if (old('Option_Profession') == "Domicile") {{ 'selected' }}@endif>À domicile</option>
            </select>
            <span style="color:red">
                @error('Option_Profession')
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
