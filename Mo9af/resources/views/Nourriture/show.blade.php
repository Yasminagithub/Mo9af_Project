@extends('Layout')
@section('title')
   Page Show Nourriture
@endsection
@section('content')
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>
                <a href="{{ route('Home') }}">Logout</a>
            </h1>
        </div>
    </div>
    <!-- End -->
    <!-- Main -->
    <div class="main">
        <div class="card">
            <div class="card-body">

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
                        <tr>
                            <td>Modifier</td>
                            <td>:</td>
                            <td>
                                <a href="{{ route('Nourriture.edit',$nourritures->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg>Modifier
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Supprimer</td>
                            <td>:</td>
                            <td>
                                <form  action="{{route('Nourriture.destroy',$nourritures->id)}}" method="POST">
                                    @csrf
                                    {{method_field('delete')}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg> Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
