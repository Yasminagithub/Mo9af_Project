@extends('Layout')
@section('content')

<html>
<head>
    <link href="/css/style.less" rel="stylesheet">
    <meta charset="utf-8">
    <title>Stackfindover: Sign in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <!--<div class="wrapper">
    <div class="contaner">
        <h1>Login</h1>

       <form class="form" method="post" action="{{route('login.confirmation')}}">
            @csrf
            <select name="profession" style="width: 190px">
                <option disabled selected hidden>Quelle est votre profession</option>
                <option value="bonnes">bonnes</option>
                <option value="bricolages">bricolages</option>
                <option value="professeurs">professeurs</option>
                <option value="nourritures">nourritures</option>
            </select><br>
            @error('profession')<span class="text-danger">{{$message}}</span>@enderror<br>
            <input type="text" placeholder="Email" name="Email" style="width: 190px"><br>
            @error('Email')<span class="text-danger">{{$message}}</span>@enderror<br>
            <input type="password" placeholder="Password" name="password" style="width: 190px"><br>
            @error('password')<span class="text-danger">{{$message}}</span>@enderror<br>
            <button type="submit" id="login-button" style="width: 80px">Login</button><br>
            @if(session('message'))<b class="alert alert-danger">{{session('message')}}</b>@endif<br>
            @if(session('message1'))<b class="alert alert-danger">{{session('message1')}}</b>@endif<br>

        </form> 
    </div>!-->
  
</html>-->
<form class="form" method="post" action="{{route('login.confirmation')}}"> 
  @csrf
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">El Mo9af</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
         
              <form id="stripe-login">
                <div  class="field padding-bottom--24"> 
       
                  <label for="email">Votre proffesion</label>
                  <br>
                <select name="profession" style="width: 190px ; height: 40px ;" >
                    <option disabled selected hidden>Quelle est votre proffession</option>
                    <option value="bonnes">bonnes</option>
                    <option value="bricolages">bricolages</option>
                    <option value="professeurs">professeurs</option>
                    <option value="nourritures">nourritures</option>
                </select><br>
                @error('profession')<span class="text-danger">{{$message}}</span>@enderror<br>
                
            </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" placeholder="Email" name="Email" style="width: 190px"> 
                  @error('Email')<span class="text-danger">{{$message}}</span>@enderror<br>
                </div>
                <div class="field padding-bottom--24">
                  
                    <label for="password">Password</label>
                 
                  <input type="password" placeholder="Password" name="password" style="width: 190px">
                  @error('password')<span class="text-danger">{{$message}}</span>@enderror<br>
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox" name="checkbox"> Restez connecté pendant une semaine
                  </label>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continue" id="login-button">
                  
                  @if(session('message'))<b class="alert alert-danger">{{session('message')}}</b>@endif<br>
                  @if(session('message1'))<b class="alert alert-danger">{{session('message1')}}</b>@endif<br>
                </div>
               
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Vous n'avez pas un compte? <a href="{{route('jobs')}}">S'inscrire</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© El Mo9af</a></span>
              <span><a href="#">Contact</a></span>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>






</body>
</html>


@endsection