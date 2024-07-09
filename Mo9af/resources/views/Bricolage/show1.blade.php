@extends('Layout')
@section('title')
   Page Show Bricolage
@endsection
@section('content')
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>
    </div>
    <!-- End -->
    <!-- Main -->
    <div class="main">
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td width="30%"><img  src="{{ $bricolages->getFirstMediaUrl('images') }}" alt="pas d'image" width="120px" height="120px"/></td>
                        </tr>
                        <tr>
                            <td>CIN</td>
                            <td>:</td>
                            <td>{{$bricolages->CIN}}</td>
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td>:</td>
                            <td>{{$bricolages->Nom_employe}}</td>
                        </tr>
                        <tr>
                            <td>Prenom</td>
                            <td>:</td>
                            <td>{{$bricolages->Prenom_employe}}</td>
                        </tr>
                        <tr>
                            <td>Numero téléphone</td>
                            <td>:</td>
                            <td>{{$bricolages->Numero_Tel}}</td>
                        </tr>
                        <tr>
                            <td>catégorie</td>
                            <td>:</td>
                            <td>{{$bricolages->categorie}}</td>
                        </tr>
                        <tr>
                            <td>Sous catégorie</td>
                            <td>:</td>
                            <td>{{$bricolages->SousCategorie}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$bricolages->Email}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>{{$bricolages->Adresse}}</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
      
@endsection
