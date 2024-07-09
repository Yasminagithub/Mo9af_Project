@extends('Layout')
@section('con')

 

<section class="jober">
  <!-- content here -->
  <h1>Espace d'Employe</h1>
  <h2>Obtenez votre chance d'avoir plus de clients et aussi d'etre célébre pour vos excellents services. </h2>
  <div class="curve"></div>
</section>
<section>  
<div class="service">  
<div class="Titre">
   <h2>  services   </h2>
</div>
<div class="servjob">   
<div class="card" style="float:left;width:320px;">
    <img src="images/minage.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Service de Minage</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href=" {{route('Bonne.create')}}  " class="btn btn-primary">S'inscrire</a>
    </div>
  </div>
  <div class="card" style="float:left;width:320px;">
    <img src="images/servBrico.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Service de Bricolage</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('bricolage.create')}}" class="btn btn-primary">S'inscrire</a>
    </div>
  </div>
  <div class="card" style="float:left;width:320px;">
    <img src="images/prof.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Service de cours de soutien</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('Professeur.create')}}" class="btn btn-primary">S'inscrire</a>
    </div>
  </div>
  <div class="card" style="float:left;width:320px;">
    <img src="images/cooking.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Service de cuisine</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('Nourriture.create')}}" class="btn btn-primary">S'inscrire</a>
    </div>
  </div>
</div> 

</div>
</section>
<section class="div">

  <div class="cards">
    <div class="card card-1">
      <div class="card__icon"></div>
      <p class="card__exit"></p>
      <h2 class="card__title">Vous avez une question? <br> Si vous avez besoin, vous pouvez nous contacter à tout moment.
      </h2>

      <p class="card__apply">
        <button class="card__link" href="#">
      
          <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
          </svg>
          <span>CONTACTEZ-NOUS</span>
        </button>
      </p>
    </div>
    </div>
</section>

  <div class="divser">
    <span><img src="images/reseau.jpg" /></span>
    <span class="text"> <h1>text</h1> text texttt Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto cupiditate libero <br> ipsum, illum commodi, fugit ratione necessitatibus molestias nihil similique repellendus sapiente dolorem amet aliquam quas deserunt debitis iste inventore.</span>
  </div>
  

@endsection
