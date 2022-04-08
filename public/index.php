<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\OffersController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\BooksController;
use coding\app\controllers\CheckoutController;
use coding\app\controllers\OrderController;
use coding\app\controllers\StepOneController;
use coding\app\controllers\StepTwoController;
use coding\app\controllers\StepThreeController;
use coding\app\controllers\citiesController;
use coding\app\controllers\peymentsController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

/** web routes  */

// login Routes
Router::get('/login',[UsersController::class,'login_page']);

// signup Routes
Router::get('/signup',[UsersController::class,'signup_page']);

// checkout Routes
Router::get('/checkout',[CheckoutController::class,'checkout_page']);

// checkout Routes
Router::get('/order',[OrderController::class,'order']);

// steps Routes
Router::get('/step_one',[StepOneController::class,'step_one']);

// steps Routes
Router::get('/step_two',[StepTwoController::class,'step_two']);

// steps Routes
Router::get('/step_three',[StepThreeController::class,'step_three']);


// categories Routes
Router::get('/category_page',[CategoriesController::class,'view_page']);
Router::get('/categories',[CategoriesController::class,'listAll']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/edit_category/{id}',[CategoriesController::class,'edit']);
Router::get('/remove_category/{id}',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/update_category',[CategoriesController::class,'update']);
/** offer routes  */

Router::get('/offers',[OffersController::class,'listAll']);
Router::get('/add_offer',[OffersController::class,'create']);
Router::get('/edit_offer/{id}',[OffersController::class,'edit']);
Router::get('/remove_offer/{id}',[OffersController::class,'remove']);
Router::post('/save_offer',[OffersController::class,'store']);
Router::post('/update_offer',[OffersController::class,'update']);

// Books Routes
Router::get('/book_details_page',[BooksController::class,'view_details_page']);
Router::get('/books_page',[BooksController::class,'view_page']);
Router::get('/books',[BooksController::class,'listAll']);
Router::get('/add_books',[BooksController::class,'create']);
Router::get('/edit_books/{id}',[BooksController::class,'edit']);
Router::get('/remove_books/{id}',[BooksController::class,'remove']);
Router::post('/save_books',[BooksController::class,'store']);
Router::post('/update_books',[BooksController::class,'update']);


// Authors Routes
Router::get('/authors_page',[AuthorsController::class,'view_page']);
Router::get('/authors',[AuthorsController::class,'listAll']);
Router::get('/add_author',[AuthorsController::class,'create']);
Router::get('/edit_author/{id}',[AuthorsController::class,'edit']);
Router::get('/remove_author/{id}',[AuthorsController::class,'remove']);
Router::post('/save_author',[AuthorsController::class,'store']);
Router::post('/update_author',[AuthorsController::class,'update']);

// Publisher Routes
Router::get('/publishers_page',[PublishersController::class,'view_page']);
Router::get('/publishers',[PublishersController::class,'listAll']);
Router::get('/add_publisher',[PublishersController::class,'create']);
Router::get('/edit_publisher/{id}',[PublishersController::class,'edit']);
Router::get('/remove_publisher/{id}',[PublishersController::class,'remove']);
Router::post('/save_publisher',[PublishersController::class,'store']);
Router::post('/update_publisher',[PublishersController::class,'update']);


// user Routes
// Router::get('/users_page',[UsersController::class,'view_page']);
Router::get('/users',[UsersController::class,'listAll']);
Router::get('/singup',[UsersController::class,'create']);
Router::get('/edit_user/{id}',[UsersController::class,'edit']);
Router::get('/remove_user/{id}',[UsersController::class,'remove']);
Router::post('/save_user',[UsersController::class,'store']);
Router::post('/update_user',[UsersController::class,'update']);


// Cities Routes
Router::get('/cities',[citiesController::class,'listAll']);
Router::get('/add_city',[citiesController::class,'create']);
Router::get('/edit_city/{id}',[citiesController::class,'edit']);
Router::get('/remove_city/{id}',[citiesController::class,'remove']);
Router::post('/save_city',[citiesController::class,'store']);
Router::post('/update_city',[citiesController::class,'update']);


// Peyments Routes
Router::get('/peyments',[peymentsController::class,'listAll']);
Router::get('/add_peyment',[peymentsController::class,'create']);
Router::get('/edit_peyment/{id}',[peymentsController::class,'edit']);
Router::get('/remove_peyment/{id}',[peymentsController::class,'remove']);
Router::post('/save_peyment',[peymentsController::class,'store']);
Router::post('/update_peyment',[peymentsController::class,'update']);
/** end of web routes */



$system->start();

