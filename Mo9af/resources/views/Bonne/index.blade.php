@extends('Layout')
@section('title')
   Page Index Domicile
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
                        <h4>Liste des bonnes</h4>
                        <table class="table" id="myTable">
                            <thead class="table-success">
                            <tr>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Numéro de téléphone</th>
                                <th>Profession</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th width="30%">Photo</th>
                                <th>Voir</th>
                            </tr>
                            </thead>
                            <tbody id="yaya">
                                @foreach($bonnes as $bonne)
                                <tr>
                                    <td>{{$bonne->CIN}}</td>
                                    <td>{{$bonne->Nom_Bonne}}</td>
                                    <td>{{$bonne->Prenom_Bonne}}</td>
                                    <td>{{$bonne->Numero_Tel}}</td>
                                    <td>{{$bonne->Profession}}</td>
                                    <td>{{$bonne->Email}}</td>
                                    <td>{{$bonne->Adresse}}</td>
                                    <td>
                                        <img  src="{{ $bonne->getFirstMediaUrl('images') }}" alt="pas d'image" width="120px" height="120px"/>
                                    </td>

                                    <td>
                                        <a class="btn btn-warning" href="{{route('Bonne.show1',$bonne->id)}}" role="button"><i class="bi bi-eye-fill"></i>Voir</a>
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
