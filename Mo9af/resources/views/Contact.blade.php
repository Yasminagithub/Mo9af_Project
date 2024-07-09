
@extends('Layout')
@section('content')


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="styleContact.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/styleContact.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    

<div class="containe">
    <div class="content">
        <div class="left-side" style="float: left;">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">Surkhet, NP12</div>
                <div class="text-two">Birendranagar 06</div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">+0098 9893 5647</div>
                <div class="text-two">+0096 3434 5678</div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">codinglab@gmail.com</div>
                <div class="text-two">anouarcharbil902@gmail.com</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Envoyer un message</div>

            <p>Tu veux un certain service, et que notre application ne le contient pas ?<br>
                Tu as une proposition d'ajouter un service ?<br>
            Tu est besoin d'aide ?<br>
            N'esiter pas d'exprimer, c'est notre plaisir de vous aidez !</p>

            <form action="{{ route('send.email') }}" method="post">
                @csrf

                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}</div>
                @endif
                @if (Session::has('succes'))
                    <div class="alert alert-success">
                        {{ Session::get('succes') }}</div>
                @endif
                <div class="input-box">
                    <label style="font-size: larger">Nom</label>
                    <input type="text" name="name" placeholder="Entrez votre nom" value="{{old('name')}}">
                    @error('name')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <br>

                <div class="input-box">
                    <label style="font-size: larger" >Email</label>
                    <input type="text" name="email" placeholder="Entrez votre Email" value="{{ old('email') }}">
                    @error('email')<span class="text-danger">{{$message}}</span>@enderror
                    <br>

                </div>
                <br>

                <div class="input-box message-box">
                    <label style="font-size: larger">Confirmer Email</label>
                    <input type="text" name="objet" placeholder="Confirmer votre Email" value="{{old('objet')}}" style="height: 50px">
                    @error('objet')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="input-box message-box">
                    <label style="font-size: larger">Message</label>
                    <input type="text" name="message" placeholder="Entrez votre message" value="{{old('message')}}">
                    @error('message')<span class="text-danger">{{$message}}</span>@enderror


                </div>
                <br>

                <div class="button">
                    <button class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
@endsection
