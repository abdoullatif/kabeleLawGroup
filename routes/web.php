<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\PiecesController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\PlainteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CorbeilleController;
use App\Http\Controllers\ComptabiliteController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes Profile
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Profile
Route::get('/f_profile/{user_id}', [ProfileController::class, 'index'])->name('f_profile');

//Profile
Route::post('/m_profile', [UserController::class, 'updateRegistration'])->name('m_profile');

/*
|--------------------------------------------------------------------------
| Web Routes login
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Connection page
Route::get('/', [AuthController::class, 'index'])->name('login');

//save data
//Route::post('/login', [AuthController::class, 'customLogin'])->name('auth.login');

//Connection
Route::post('/auth', [AuthController::class, 'customLogin'])->name('auth.auth');

//Deconnection
Route::get('/logout', [AuthController::class, 'signOut'])->name('auth.logout');


/*
|--------------------------------------------------------------------------
| Web Routes Home
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//HomeController
Route::get('/home', [HomeController::class, 'indexHome'])->name('home');

//HomeController
Route::get('/state', [HomeController::class, 'indexState'])->name('state');

/*
|--------------------------------------------------------------------------
| Web Routes Plainte
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
Route::get('/view_plaintes', [PlainteController::class, 'index'])->name('view_plaintes');

//
Route::get('/form_plaintes', [PlainteController::class, 'index'])->name('form_plaintes');

//
Route::post('/i_plaintes', [PlainteController::class, 'storePlainte'])->name('i_plaintes');

/*
|--------------------------------------------------------------------------
| Web Routes User Personnel
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
Route::get('/view_personnels', [UserController::class, 'index'])->name('view_personnels');

//
Route::get('/m_personnels/{id}', [UserController::class, 'index'])->name('m_personnels');

//
Route::get('/d_personnels/{id}', [UserController::class, 'index'])->name('d_personnels');

//
Route::get('/f_personnels', [UserController::class, 'formUser'])->name('f_personnels');

//
Route::post('/i_personnels', [UserController::class, 'createUser'])->name('i_personnels');

/*
|--------------------------------------------------------------------------
| Web Routes Piece
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
Route::get('/n_pieces', [PiecesController::class, 'index'])->name('n_pieces');

//
Route::post('/i_pieces', [PiecesController::class, 'storePieces'])->name('i_pieces');

//
Route::get('/s_pieces/{dossiers_id}', [PiecesController::class, 'searchPieces'])->name('s_pieces');

//
Route::get('/lecture_piece/{dossiers_id}/{pieces_id}', [PiecesController::class, 'viewPieces'])->name('lecture_piece');

//
//Route::get('/i_plaintes', [DossierController::class, 'index'])->name('i_plaintes');

/*
|--------------------------------------------------------------------------
| Web Routes Comptabilite
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
Route::post('/i_comptabilite', [ComptabiliteController::class, 'storeComptabilite'])->name('i_comptabilite');

//
Route::get('/n_comptabilite', [ComptabiliteController::class, 'f_Comptabilite'])->name('n_comptabilite');

//
Route::get('/v_comptabilite', [ComptabiliteController::class, 'index'])->name('v_comptabilite');

//
Route::get('/j_comptabilite/{id}', [ComptabiliteController::class, 'j_Comptabilite'])->name('j_comptabilite');


/*
|--------------------------------------------------------------------------
| Web Routes Categories
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
Route::get('/f_categorie', [CategorieController::class, 'formCategorie'])->name('f_categorie');

//
Route::get('/view_categorie', [CategorieController::class, 'index'])->name('view_categorie');

//
Route::get('/i_categorie', [CategorieController::class, 'createCategorie'])->name('i_categorie');

//
Route::get('/m_categorie', [CategorieController::class, 'createCategorie'])->name('m_categorie');

//
Route::get('/d_categorie/{id}', [CategorieController::class, 'deleteCategorie'])->name('d_categorie');

/*
|--------------------------------------------------------------------------
| Web Routes Personnels add admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
Route::get('/i_rolePersonnel', [RoleController::class, 'updateRoleUser'])->name('i_rolePersonnel');

//
Route::get('/rolePersonnel', [RoleController::class, 'index'])->name('rolePersonnel');

/*
|--------------------------------------------------------------------------
| Web Routes Dossier
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Dossier
Route::get('/dossier', [DossierController::class, 'index'])->name('v_dossier');

//Dossier
Route::get('/s_dossier', [DossierController::class, 'shareFolder'])->name('s_dossier');

//Dossier
Route::get('/r_dossiers/{id}', [DossierController::class, 'index'])->name('r_dossiers');

//Dossier
Route::get('/dossiers_managers/{id}', [DossierController::class, 'manageDossier'])->name('dossiers_managers');

/*
|--------------------------------------------------------------------------
| Web Routes Share
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Share
Route::get('/share/{dossiers_id}', [ShareController::class, 'index'])->name('foder_share');

//view Share folder
Route::get('/v_share', [ShareController::class, 'index'])->name('v_share');

/*
|--------------------------------------------------------------------------
| Web Routes Corbeille
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Corbeille
Route::get('/corbeille/{dossiers_id}', [CorbeilleController::class, 'index'])->name('folder_corbeille');

/*
|--------------------------------------------------------------------------
| Web Routes Notification
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Notification
Route::get('/notification', [NotificationController::class, 'index'])->name('notification');

//count Notification
Route::get('/c_notification', [NotificationController::class, 'countNotification'])->name('c_notification');

//update Notification
Route::get('/u_notification', [NotificationController::class, 'updateNotification'])->name('u_notification');

Route::get('send', [HomeController::class,'sendNotification']);