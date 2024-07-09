@extends('Layout')
@section('title')
   Page show Professeur
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
                            <td width="30%"><img  src="{{ $professeurs->getFirstMediaUrl('images') }}" alt="pas d'image" width="120px" height="120px"/></td>
                        </tr>
                        <tr>
                            <td>CIN</td>
                            <td>:</td>
                            <td>{{$professeurs->CIN}}</td>
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td>:</td>
                            <td>{{$professeurs->Nom_prof}}</td>
                        </tr>
                        <tr>
                            <td>Prenom</td>
                            <td>:</td>
                            <td>{{$professeurs->Prenom_prof}}</td>
                        </tr>
                        <tr>
                            <td>Numero téléphone</td>
                            <td>:</td>
                            <td>{{$professeurs->Numero_Tel}}</td>
                        </tr>
                        <tr>
                            <td>Niveau scolaire</td>
                            <td>:</td>
                            <td>{{$professeurs->Niveau_Scolaire}}</td>
                        </tr>
                        <tr>
                            <td>Niveau exercice</td>
                            <td>:</td>
                            <td>{{$professeurs->Niveau_Exercie}}</td>
                        </tr>
                        <tr>
                            <td>Matiere</td>
                            <td>:</td>
                            <td>{{$professeurs->Matiere}}</td>
                        </tr>
                        <tr>
                            <td>Option profession</td>
                            <td>:</td>
                            <td>{{$professeurs->Option_Profession}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$professeurs->Email}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>{{$professeurs->Adresse}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
