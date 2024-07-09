@extends('Layout')
@section('con')

<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


<header>
	<div class="overlay">
<h1>Notre Services</h1>
<h3>Reasons for Choosing US</h3>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
	<br>
	<button href="{{route('jobs')}}">Devenir un Employe</button>
		</div>
</header>
<div class="servs">  

<div class="first hero">
  <img class="hero-profile-img" src="images/servBrico.jpg" alt="">
  <div class="hero-description-bk"></div>
  <div class="hero-logo">
    <img src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557291375.3948_Dy2yZu_n.jpg" alt="">
  </div>
  <div class="hero-description">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  
  <div class="btn-1">
   <a href="{{route('bricolage.index')}}"> Voir les Employes</a>
    
  </div>
</div>
<div class="first hero">
  <img class="hero-profile-img" src="images/minage.png" alt="">
  <div class="hero-description-bk"></div>
  <div class="hero-logo">
    <img src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557291375.3948_Dy2yZu_n.jpg" alt="">
  </div>
  <div class="hero-description">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  
  <div class="btn-1">
    <a href="{{route('Bonne.index')}}">Voir les Employes</a>
  </div>
</div>
<div class="first hero">
  <img class="hero-profile-img" src="images/cooking.png" alt="">
  <div class="hero-description-bk"></div>
  <div class="hero-logo">
    <img src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557291375.3948_Dy2yZu_n.jpg" alt="">
  </div>
  <div class="hero-description">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
 
  <div class="btn-1">
    <a href="{{route('Nourriture.index')}}">Voir les Employes</a>
  </div>
</div>
<div class="second hero">
  <img class="hero-profile-img" src="images/prof.jpeg" alt="">
  <div class="hero-description-bk"></div>
  <div class="hero-logo">
    <img src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557291375.3948_Dy2yZu_n.jpg" alt="">
  </div>
  <div class="hero-description">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  
  <div class="btn-1">
    <a href="{{route('Professeur.index')}}">Voir les Employes</a>
  </div>
</div>

</div>




















@endsection