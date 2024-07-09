@extends('Layout')
@section('title')
   Page Edit Bricolage
@endsection
@section('content')

<div class="form">
    <form  method="POST" action="{{ route('bricoloage.update',$bricolage->id) }}" enctype="multipart/form-data">
    @csrf
        <div class="form-style-5">
        <input type="text" name="CIN" placeholder="" value="{{$bricolage->CIN}}">
        <span style="color:red">
            @error('CIN')
                {{$message}}
            @enderror
        </span>
        <input type="text" name="Nom_employe" placeholder="" value="{{$bricolage->Nom_employe}}">
        <span style="color:red">
            @error('Nom_employe')
                {{$message}}
            @enderror
        </span>
        <input type="text" name="Prenom_employe" placeholder="" value="{{$bricolage->Prenom_employe}}">
        <span style="color:red">
            @error('Prenom_employe')
                {{$message}}
            @enderror
        </span>
        <input type="text" name="Numero_Tel" placeholder="" pattern="[0-9]{4}[0-9]{6}" value="{{$bricolage->Numero_Tel}}">
        <span style="color:red">
            @error('Numero_Tel')
                {{$message}}
            @enderror
        </span>
        <select id="job" name="categorie"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
          <option selected>{{$bricolage->categorie}}</option>
          <option value="Electricien">Électricien</option>
          <option value="Plombier">Plombier</option>
          <option value="Amenagement">Service pour un aménagement intérieur</option>
          <option value="Macon">Maçon</option>
          <option value="Mecanicien">Mécanicien</option>
          <option value="Menuiserie">Menuiserie</option>
          <option value="Peintre">Peintre</option>
          <option value="Serrurier">Serrurier</option>
          <option value="Vitrier">Vitrier</option>
          <option value="Artisanat">Artisanat</option>
          <option value="jardinage">Jardinage</option>
          <option value="forgeron">Forgeron</option>
          <option value="Beaute">Soin et Beauté</option>
          <option value="autre">Autre</option>
        </select>
        <span style="color:red">
            @error('categorie')
                {{$message}}
            @enderror
        </span>
        <select name="SousCategorie"  class="form-select form-control @error('gender') is-invalid @enderror" aria-label=".form-select-lg example">
          <option selected>{{$bricolage->SousCategorie}}</option>
          <option value="Argile">Le travail de l'argile</option>
          <option value="Or">Le travail de l'or</option>
          <option value="Poterie">La poterie</option>
          <option value="Bois">Le travail du bois</option>
          <option value="Tapis">L'art du tapis</option>
          <option value="Metal">Le travail du métal</option>
          <option value="Textile">Le travail du textile</option>
          <option value="Vannerie">La vannerie</option>
          <option value="Broderie">La broderie</option>
          <option value="autre">Autre</option>
        </select>
        <input type="text" name="Email" placeholder="" value="{{$bricolage->Email}}">
        <span style="color:red">
            @error('Email')
                {{$message}}
            @enderror
        </span>
        <input type="password" name="password" placeholder="" value="{{$bricolage->password}}">
        <span style="color:red">
            @error('password')
                {{$message}}
            @enderror
        </span>
        <input type="text" name="Adresse" placeholder="" value="{{$bricolage->Adresse}}">
        <span style="color:red">
            @error('Adresse')
                {{$message}}
            @enderror
        </span>
        <div class="mb-3">
            <label>Fichier<span style="color:red">*</span></label>
                <input type="file" name="file" class="form-control" placeholder="" id="file" value="{{$bricolage->file}}">
                  @error('file')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror

        </div>
        <div class="mb-1">
            <label>Photo</label>
            <input type="file" name="image" class="form-control" placeholder="Choisir une image" >
        </div>
        <input type="submit" value="Envoyer" />
        </div>
    </form>
  </div>

@endsection
