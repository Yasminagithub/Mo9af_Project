@extends('Layout')
@section('title')
   Page Edit Nourriture
@endsection
@section('content')
<div class="container3">
<form  method="POST" action="{{ route('Nourriture.update',$nourriture->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="login-form2">
            <div class="headings">
                <h3>Bienvenue !</h3>
            </div>
            <div class="inputs">
                <input class="input-group" type="text" name="CIN" placeholder="" value="{{$nourriture->CIN}}">
            </div>
            <span style="color:red">
                @error('CIN')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Prenom_femme" placeholder="" value="{{$nourriture->Prenom_femme}}">
            </div>
            <span style="color:red">
                @error('Prenom_femme')
                    {{$message}}
                @enderror
            </span>

            <div class="inputs">
                <input class="input-group" type="text" name="Nom_femme" placeholder="" value="{{$nourriture->Nom_femme}}">
            </div>
            <span style="color:red">
                @error('Nom_femme')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="text" name="Numero_Tel" placeholder="" pattern="[0-9]{4}[0-9]{6}" value="{{$nourriture->Numero_Tel}}">
            </div>
            <span style="color:red">
                @error('Numero_Tel')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="Email" name="Email" placeholder="" value="{{$nourriture->Email}}">
            </div>
            <span style="color:red">
                @error('Email')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="password" name="password" placeholder="" value="{{$nourriture->password}}">
            </div>
            <span style="color:red">
                @error('password')
                    {{$message}}
                @enderror
            </span>
            <div class="inputs">
                <input class="input-group" type="Adresse" name="Adresse" placeholder="" value="{{$nourriture->Adresse}}">
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
