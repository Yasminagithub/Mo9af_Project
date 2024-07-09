@extends('Layout')
@section('title')
   Page Create Bricolage
@endsection

@section('create2')
<div class="formu"> 
<div class="form-style-8">
    <form  method="POST" action="{{ route('bricoloage.store') }}" enctype="multipart/form-data">
    @csrf
     <div class="form-style-5">
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
             <input  class="input-group" type="text" name="Nom_employe" placeholder="Votre nom *" value="{{old('Nom_employe')}}">
        </div>
        <span style="color:red">
            @error('Nom_employe')
                {{$message}}
            @enderror
        </span>
        <div class="inputs">
             <input  class="input-group" type="text" name="Prenom_employe" placeholder="Votre Prenom *" value="{{old('Prenom_employe')}}">
        </div>
        <span style="color:red">
            @error('Prenom_employe')
                {{$message}}
            @enderror
        </span>
        <div class="inputs">
            <input  class="input-group" type="text" name="Numero_Tel" placeholder="Votre numero *" pattern="[0-9]{4}[0-9]{6}" value="{{old('Numero_Tel')}}">
        </div>
            <span style="color:red">
            @error('Numero_Tel')
                {{$message}}
            @enderror
        </span>
        <select id="job" name="categorie"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
          <option value="" selected>Choisir une catégorie *</option>
          <option value="Electricien" @if (old('categorie') == "Electricien") {{ 'selected' }}@endif>Électricien</option>
          <option value="Plombier" @if (old('categorie') == "Plombier") {{ 'selected' }}@endif>Plombier</option>
          <option value="Amenagement" @if (old('categorie') == "Amenagement") {{ 'selected' }}@endif>Service pour un aménagement intérieur</option>
          <option value="Macon" @if (old('categorie') == "Macon") {{ 'selected' }}@endif>Maçon</option>
          <option value="Mecanicien" @if (old('categorie') == "Mecanicien") {{ 'selected' }}@endif>Mécanicien</option>
          <option value="Menuiserie" @if (old('categorie') == "Menuiserie") {{ 'selected' }}@endif>Menuiserie</option>
          <option value="Peintre" @if (old('categorie') == "Peintre") {{ 'selected' }}@endif>Peintre</option>
          <option value="Serrurier" @if (old('categorie') == "Serrurier") {{ 'selected' }}@endif>Serrurier</option>
          <option value="Vitrier" @if (old('categorie') == "Vitrier") {{ 'selected' }}@endif>Vitrier</option>
          <option value="Artisanat" @if (old('categorie') == "Artisanat") {{ 'selected' }}@endif>Artisanat</option>
          <option value="jardinage" @if (old('categorie') == "jardinage") {{ 'selected' }}@endif>Jardinage</option>
          <option value="forgeron" @if (old('categorie') == "forgeron") {{ 'selected' }}@endif>Forgeron</option>
          <option value="Beaute" @if (old('categorie') == "Beaute") {{ 'selected' }}@endif>Soin et Beauté</option>
          <option value="autre" @if (old('categorie') == "autre") {{ 'selected' }}@endif>Autre</option>
        </select>
        <span style="color:red">
            @error('categorie')
                {{$message}}
            @enderror
        </span>
        <select name="SousCategorie"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
          <option value="" selected>Choisir une sous catégorie d'artisanat</option>
          <option value="Argile" @if (old('SousCategorie') == "Argile") {{ 'selected' }}@endif>Le travail de l'argile</option>
          <option value="Or" @if (old('SousCategorie') == "Or") {{ 'selected' }}@endif>Le travail de l'or</option>
          <option value="Poterie" @if (old('SousCategorie') == "Poterie") {{ 'selected' }}@endif>La poterie</option>
          <option value="Bois" @if (old('SousCategorie') == "Bois") {{ 'selected' }}@endif>Le travail du bois</option>
          <option value="Tapis" @if (old('SousCategorie') == "Tapis") {{ 'selected' }}@endif>L'art du tapis</option>
          <option value="Metal" @if (old('SousCategorie') == "Metal") {{ 'selected' }}@endif>Le travail du métal</option>
          <option value="Textile" @if (old('SousCategorie') == "Textile") {{ 'selected' }}@endif>Le travail du textile</option>
          <option value="Vannerie" @if (old('SousCategorie') == "Vannerie") {{ 'selected' }}@endif>La vannerie</option>
          <option value="Broderie" @if (old('SousCategorie') == "Broderie") {{ 'selected' }}@endif>La broderie</option>
          <option value="autre" @if (old('SousCategorie') == "autre") {{ 'selected' }}@endif>Autre</option>
        </select>
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
            <input  class="input-group" type="text" name="Adresse" placeholder="Votre adresse *" value="{{old('Adresse')}}">
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
    </form>
</div>
   </div>
@endsection
