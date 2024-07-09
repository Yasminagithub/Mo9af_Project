@extends('Layout')
@section('title')
   Page Index Professeur
@endsection
@section('content')

<div class="table">  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('message'))
                  <h4 class="alert alert-success">{{session('message')}}</h4>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des professeurs
                        </h4>
                        <table class="table" id="myTable">
                            <thead class="table-success">
                            <tr>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Numéro de téléphone</th>
                                <th>Niveau exercie</th>
                                <th>Matiere</th>
                                <th>Option de profession</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th width="30%">Photo</th>
                                
                                <th>Voir</th>
                                
                            </tr>
                            </thead>
                            <tbody id="yaya">
                                @foreach($professeurs as $professeur)
                                <tr>
                                    <td>{{$professeur->CIN}}</td>
                                    <td>{{$professeur->Nom_prof}}</td>
                                    <td>{{$professeur->Prenom_prof}}</td>
                                    <td>{{$professeur->Numero_Tel}}</td>
                                    <td>{{$professeur->Niveau_Exercie}}</td>
                                    <td>{{$professeur->Matiere}}</td>
                                    <td>{{$professeur->Option_Profession}}</td>
                                    <td>{{$professeur->Email}}</td>
                                    <td>{{$professeur->Adresse}}</td>
                                    <td>
                                        <img  src="{{ $professeur->getFirstMediaUrl('images') }}" alt="pas d'image" width="120px" height="120px"/>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{route('Professeur.show1',$professeur->id)}}" role="button"><i class="bi bi-eye-fill"></i>Voir</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type="text/javascript">
    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Voulez-vous vraiment supprimer cet enregistrement ?",
            text: "Si vous le supprimez, il disparaîtra pour toujours.",
            icon: "warning",
            type: "warning",
            buttons: ["Annuler","Oui!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>
@endsection
