
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\BricolageRequest;
use App\Http\Controllers\BricolageController;
use App\Http\Controllers\BonneController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\NourritureController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
  //  return view('Home');
});
Route::get('/Home', function () {
   return view('Home');
})->name('Home');
Route::get('/jobs', function () {
  return view('jobs');
})->name('jobs');
Route::get('/services', function () {
    return view('services');
  })->name('services');

Route::get('/testform', function () {
    return view('Bonne.testform');
 });




Route::get('/Job', function () {
    return view('Jobber');
})->name('Job');
Route::get('/Serv', function () {
    return view('Service');
})->name('Serv');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/login1', function () {
    return view('login1');
})->name('login1');
Route::post('/login/confirmation', [\App\Http\Controllers\loginController::class, 'confirmation'])->name('login.confirmation');
Route::get('/Contact', function () {
    return view('Contact');
})->name('contact');

route::post('send/email',[PostController::class,'send'])->name('send.email');

/*Service Bricolage*/
Route::get('/Bricolage/index', [BricolageController::class, 'index'])->name('bricolage.index');
Route::get('/Bricolage/create', [BricolageController::class, 'create'])->name('bricolage.create');
Route::post('/Bricolage/store', [BricolageController::class, 'store'])->name('bricoloage.store');
Route::get('/Bricolage/show1{id}', [BricolageController::class, 'show1'])->name('bricolage.show1');
 Route::get('/Bricolage/show{id}', [BricolageController::class, 'show'])->name('bricoloage.show');
 Route::get('/Bricolage/edit{id}', [BricolageController::class, 'edit'])->name('bricoloage.edit');
 Route::post('/Bricolage/update{id}', [BricolageController::class, 'update'])->name('bricoloage.update');
Route::delete('/Bricolage/destroy{id}', [BricolageController::class, 'destroy'])->name('bricoloage.destroy');

/*Service Domicile*/
Route::get('/Bonne/index', [BonneController::class, 'index'])->name('Bonne.index');
Route::get('/Bonne/create', [BonneController::class, 'create'])->name('Bonne.create');
Route::post('/Bonne/store', [BonneController::class, 'store'])->name('Bonne.store');
Route::get('/Bonne/show1{id}', [BonneController::class, 'show1'])->name('Bonne.show1');
 Route::get('/Bonne/show{id}', [BonneController::class, 'show'])->name('Bonne.show');
 Route::get('/Bonne/edit{id}', [BonneController::class, 'edit'])->name('Bonne.edit');
 Route::post('/Bonne/update{id}', [BonneController::class, 'update'])->name('Bonne.update');
 Route::delete('/Bonne/destroy{id}', [BonneController::class, 'destroy'])->name('Bonne.destroy');

/*Service Education*/
Route::get('/Professeur/index', [ProfesseurController::class, 'index'])->name('Professeur.index');
Route::get('/Professeur/create', [ProfesseurController::class, 'create'])->name('Professeur.create');
Route::post('/Professeur/store', [ProfesseurController::class, 'store'])->name('Professeur.store');
Route::get('/Professeur/show1{id}', [ProfesseurController::class, 'show1'])->name('Professeur.show1');
 Route::get('/Professeur/show{id}', [ProfesseurController::class, 'show'])->name('Professeur.show');
 Route::get('/Professeur/edit{id}', [ProfesseurController::class, 'edit'])->name('Professeur.edit');
 Route::post('/Professeur/update{id}', [ProfesseurController::class, 'update'])->name('Professeur.update');
 Route::delete('/Professeur/destroy{id}', [ProfesseurController::class, 'destroy'])->name('Professeur.destroy');

/*Service Nourriture*/
Route::get('/Nourriture/index', [NourritureController::class, 'index'])->name('Nourriture.index');
Route::get('/Nourriture/create', [NourritureController::class, 'create'])->name('Nourriture.create');
Route::post('/Nourriture/store', [NourritureController::class, 'store'])->name('Nourriture.store');
Route::get('/Nourriture/show1{id}', [NourritureController::class, 'show1'])->name('Nourriture.show1');
 Route::get('/Nourriture/show{id}', [NourritureController::class, 'show'])->name('Nourriture.show');
 Route::get('/Nourriture/edit{id}', [NourritureController::class, 'edit'])->name('Nourriture.edit');
 Route::post('/Nourriture/update{id}', [NourritureController::class, 'update'])->name('Nourriture.update');
 Route::delete('/Nourriture/destroy{id}', [NourritureController::class, 'destroy'])->name('Nourriture.destroy');


 
 
 
 