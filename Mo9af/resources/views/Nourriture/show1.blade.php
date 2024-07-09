@extends('Layout')
@section('title')
   Page Show Nourriture
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
                            <td width="30%"><img  src="{{ $nourritures->getFirstMediaUrl('images') }}" alt="pas d'image" width="120px" height="120px"/></td>
                        </tr>
                        <tr>
                            <td>CIN</td>
                            <td>:</td>
                            <td>{{$nourritures->CIN}}</td>
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td>:</td>
                            <td>{{$nourritures->Nom_femme}}</td>
                        </tr>
                        <tr>
                            <td>Prenom</td>
                            <td>:</td>
                            <td>{{$nourritures->Prenom_femme}}</td>
                        </tr>
                        <tr>
                            <td>Numero téléphone</td>
                            <td>:</td>
                            <td>{{$nourritures->Numero_Tel}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$nourritures->Email}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>{{$nourritures->Adresse}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
