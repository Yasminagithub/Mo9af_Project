@extends('Layout')
@section('title')
   Page Index Bricolage
@endsection
@section('content')
    <div class="table">
        <div class="row">
            <div class="col-md-12">
                @if(session('message'))
                  <h4 class="alert alert-success">{{session('message')}}</h4>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des employés de bricolage</h4>
                        <br><br>
                        <table class="table" id="myTable">
                            <thead class="table-success">
                            <tr>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Numéro de téléphone</th>
                                <th>Catégorie</th>
                                <th>Adresse</th>
                                <th>Email</th>
                                <th width="30%">Photo</th>
                                <th>Voir</th>
                            </tr>
                            </thead>
                            <tbody id="yaya">
                                @foreach($bricolages as $bricolage)
                                <tr>
                                    <td>{{$bricolage->CIN}}</td>
                                    <td>{{$bricolage->Nom_employe}}</td>
                                    <td>{{$bricolage->Prenom_employe}}</td>
                                    <td>{{$bricolage->Numero_Tel}}</td>
                                    <td>{{$bricolage->categorie}}</td>
                                    <td>{{$bricolage->Adresse}}</td>
                                    <td>{{$bricolage->Email}}</td>
                                    <td>
                                        <img  src="{{ $bricolage->getFirstMediaUrl('images') }}" alt="pas d'image" width="120px" height="120px"/>
                                        {{-- {{$bricolage->getFirstMediaUrl('images')}} --}}
                                    </td>

                                    <td>
                                        <a class="btn btn-warning" href="{{route('bricolage.show1',$bricolage->id)}}" role="button"><i class="bi bi-eye-fill"></i>Voir</a>
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




