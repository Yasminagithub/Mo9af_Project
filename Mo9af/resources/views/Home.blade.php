@extends('Layout')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
 
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="{{url('https://assets.grooveapps.com/images/5e611bd366fa430d8b44ab66/1585559678_Fix%20My%20Home%20SA%20Plumber%20Painting%20and%20Security%20Systems.jpg?update=2')}}" class="d-block w-100" alt="bbbbbbbbbbbbbbbbbbbbb">
      <div class="carousel-caption">
        <h4>Platforme EL Mo9af </h4>
        <p>Some representative placeholder content for the first slide.</p>
        <div class="slider-btn">
         <!-- <button class="btn-1"> Obtenir un service</button>!-->
         <!-- HTML !-->
<button class="button-ser" role="button">Obtenir Votre Service</button>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="etudee.png" class="d-block w-100" alt="ffffffffffffff">
      <div class="carousel-caption d-none d-md-block">
        <h4>Second slide label</h4>
        <p>Some representative placeholder content for the second slide.</p>
        <div class="slider-btn">
          <button class="button-ser"> Obtenir un service</button>
         </div>
      </div>
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
   
  </button>
</div>
<div class="service"> 
<div  class="twelve">
  <h1>Notre Service</h1>
</div>
<div>  

<section class="new-deal">
		 <div class="cont">
		   			<div class="col-md-3 col-sm-6 ">
				<div class="item-slide">
						<div class="box-img">
						<img src="images/servBrico.jpg" alt="dasdas"/>
							<div class="text-wrap">
							<h4>Service de Bricolage <span class="deal-data"></span></h4>
							
								<div class="service">								
								<a href="{{route('bricolage.index')}}">savoir plus</a>
								</div>
							</div>
						</div>
						
				</div>
			</div>
      <div class="col-md-3 col-sm-6">
				<div class="item-slide">
						<div class="box-img">
						<img src="images/minage.png" alt="dasdas"/>
							<div class="text-wrap">
                <h4>Service de Minage <span class="deal-data"> </span></h4>
							
								<div class="service">								
								<a href="{{route('Bonne.index')}}">savoir plus</a>
								</div>
							</div>
						</div>
						
				</div>
			</div>
      <div class="col-md-3 col-sm-6">
				<div class="item-slide">
						<div class="box-img">
						<img src="images/prof.jpeg" alt="dasdas"/>
							<div class="text-wrap">
                <h4>Service de cours de soutien <span class="deal-data"> </span></h4>
							
								<div class="service">								
								<a href="{{route('Professeur.index')}}">savoir plus</a>
								</div>
							</div>
						</div>
						
				</div>
			</div>
      <div class="col-md-3 col-sm-6">
				<div class="item-slide">
						<div class="box-img">
						<img src="images/cooking.png" alt="dasdas"/>
							<div class="text-wrap">
                <h4>Service de cuisine <span class="deal-data"> </span></h4>
						
								<div class="service">								
								<a href="{{route('Nourriture.index')}}">savoir plus</a>
								</div>
							</div>
						</div>
						
				</div>
			</div>

			</div>
		 </div>
		 </section>
    </div>
  </div>
     <div class="title">
     <h1> Comment ça marche ? </h1> 
    </div>
    <div class="about"> 
      <div class="col-xs-6 item">
        <div class="section">
            <div class="imag">
                
                <img src="images/about.png" alt="">
                
            </div>
        </div>
    </div>
    <div class="col-xs-6 item">
      <div class="box" style="background-image:url(assets/img/1.jpg)">
          <div class="cover">
            <h3>La plateForme El Mo9af</h3>
              <p class="title">
                El Mo9af vous permet de présenter votre carrière de manière professionnelle et d'obtenir plus de clients,
D'une part, d'autre part Mo9af vous pouvez gérer tous les services dont vous avez besoin en un seul clic..<br> 
pour devenir un Employe:
<ul> 
 <li> visitez la page devenir un Employe, ou cliquez sur le button devenir un employer</li>
 <li> remplir le formulaire avec precision</li>
 <li>Félicitations! vous etes officiellement un employe chez Mo9af <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
</svg> </li>
</ul>
Pour profiter de notre services
<ul>
  <li>visiter la page services</li>
  <li>Choisir votre choix de service </li>
  <li>choisir l'employe qui vous convient</li>
  <li>Parfait! Vous avez obtenu votre service avec succées <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
  </svg></li>

</ul>
         
              </p>
              
          </div>
      </div>
      
  </div>
</div>

  


@endsection
