@extends('Layout')
@section('title')
   Page Show Domicile
@endsection
@section('content')
    <!-- Navbar top -->
    <div class="profile">
        <div class="imgprofile"> 
            <h1>Profile de : {{$bonnes->Nom_Bonne}}  {{$bonnes->Prenom_Bonne}}</h1>
             <span> <img  src="{{ $bonnes->getFirstMediaUrl('images') }}" alt="pas d'image" width="120px" height="120px"/></span>
        </div>
    <div class="navbar-top">
        <div class="logout">
           <div>   
                <img src="images/log-out.png" alt="ggggggggg"><a href="{{ route('Home') }}">Logout</a>
            </div>
        </div>
    </div>
    <!-- End -->
    <!-- Main -->
   
  
    </head>
    <body>
    
      <form class="form-style-4" action="" method="post">
        <label for="field1">
        <span>CIN</span> <h3> {{$bonnes->CIN}} </h3>
        </label>
        <label for="field2">
          <span>Nom</span> <h3> {{$bonnes->Nom_Bonne}} </h3>
        </label>
        <label for="field3">  
          <span>Prenom</span> <h3> {{$bonnes->Prenom_Bonne}} </h3>
        </label>
        <label for="field4">
          <span>Numero de telephone </span> <h3> {{$bonnes->Numero_Tel}} </h3>
        </label>
        <label>
          <span>Proffession </span> <h3> {{$bonnes->Profession}} </h3>
        </label>
        <label>
          <span>Email</span> <h3> {{$bonnes->Email}} </h3>
        </label>
        <label>
          <span>Adresse</span> <h3> {{$bonnes->Adresse}}</h3>
        </label>
        <label>
          <span>Modifier</span> <h3> <a href="{{ route('Bonne.edit',$bonnes->id) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
           <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
           </svg>Modifier
           </a></h3>
        </label>
        <label>
          <span>Supprimer</span> <h3>  <form  action="{{route('Bonne.destroy',$bonnes->id)}}" method="POST">
            @csrf
            {{method_field('delete')}}
            <input name="_method" type="hidden" value="DELETE">
            <a type="submit" class=" btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
             <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
             </svg> Supprimer</a>
        </form></h3>
        </label>
        </form>



        <style type="text/css">
          .form-style-4{
            width: 750px;
            font-size: 16px;
            background: #495C70;
            padding: 30px 30px 15px 30px;
            border: 5px solid #53687E;
            justify-content: center;
            align-content: center;

          }
          .form-style-4 input[type=submit],
          .form-style-4 input[type=button],
          .form-style-4 input[type=text],
          .form-style-4 input[type=email],
          .form-style-4 textarea,
          .form-style-4 label
          {
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 16px;
            color: #fff;
          
          }
          .form-style-4 label {
            display:block;
            margin-bottom: 10px;
          }
          .form-style-4 label > span{
            display: inline-block;
            float: left;
            width: 150px;
          }
          .form-style-4 input[type=text],
          .form-style-4 input[type=email] 
          {
            background: transparent;
            border: none;
            border-bottom: 1px dashed #83A4C5;
            width: 275px;
            outline: none;
            padding: 0px 0px 0px 0px;
            font-style: italic;
          }
          .form-style-4 textarea{
            font-style: italic;
            padding: 0px 0px 0px 0px;
            background: transparent;
            outline: none;
            border: none;
            border-bottom: 1px dashed #83A4C5;
            width: 275px;
            overflow: hidden;
            resize:none;
            height:20px;
          }
          
          .form-style-4 textarea:focus, 
          .form-style-4 input[type=text]:focus,
          .form-style-4 input[type=email]:focus,
          .form-style-4 input[type=email] :focus
          {
            border-bottom: 1px dashed #D9FFA9;
          }
          
          .form-style-4 input[type=submit],
          .form-style-4 input[type=button]{
            background: #576E86;
            border: none;
            padding: 8px 10px 8px 10px;
            border-radius: 5px;
            color: #A8BACE;
          }
          .form-style-4 input[type=submit]:hover,
          .form-style-4 input[type=button]:hover{
          background: #394D61;
          }
          </style>
      
      
      
      
      
      </body>
      
      
      
      <script type="text/javascript">
        //auto expand textarea
        function adjust_textarea(h) {
            h.style.height = "20px";
            h.style.height = (h.scrollHeight)+"px";
        }
        </script>













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
</div>
@endsection
