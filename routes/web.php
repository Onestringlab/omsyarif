<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MonthsController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\AllowancesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::middleware(['auth', 'checkrole:user,admin'])->group(
	function () {
		Route::get('/', function () {
			return view('/home');
		});
		Route::get('/home', [HomeController::class, 'index'])->name('home');

		Route::controller(SalariesController::class)->group(function () {
			Route::get('/sliplist', 'sliplist')->name('sliplist');
			Route::get('/slip/{id}', 'slip')->name('slip');
		});

		Route::controller(AllowancesController::class)->group(function () {
			Route::get('/tunjanganlist', 'tunjanganlist')->name('tunjanganlist');
			Route::get('/tunjangan/{id}', 'tunjangan')->name('tunjangan');
		});
	}
);

Route::middleware(['auth', 'checkrole:admin'])->group(
	function () {
		Route::get('/unggahgaji', [HomeController::class, 'unggahgaji'])->name('unggahgaji');

		Route::resource('users', UsersController::class);
		Route::get('/users/{idusers}/delete', [UsersController::class, 'delete']);

		Route::resource('months', MonthsController::class);
		Route::get('/months/{idmonths}/delete', [MonthsController::class, 'delete']);

		Route::resource('salaries', SalariesController::class);
		Route::controller(SalariesController::class)->prefix('salaries')->group(function () {
			Route::get('create/{month_id}', 'create');
			Route::get('show/{month_id}/{id}', 'show');
			Route::get('{month_id}/{id}/edit', 'edit');
			Route::get('{month_id}/{id}/delete', 'delete');
			Route::get('data/{month_id}', 'data');
			Route::get('import/{month_id}', 'importsalaries');
		});

		// Route::get('importsalaries', [SalariesController::class, 'importsalaries']);

		Route::resource('allowances', AllowancesController::class);
		Route::controller(AllowancesController::class)->prefix('allowances')->group(function () {
			Route::get('create/{month_id}', 'create');
			Route::get('show/{month_id}/{id}', 'show');
			Route::get('{month_id}/{id}/edit', 'edit');
			Route::get('{month_id}/{id}/delete', 'delete');
			Route::get('data/{month_id}', 'data');
		});
	}
);
