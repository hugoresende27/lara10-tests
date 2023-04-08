<?php

use App\Http\Controllers\FarmController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Process;
use Laravel\Pennant\Feature;

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

auth()->onceUsingId(5);
Route::get('/', function () {
//    Feature::activate('new-design');
//    Feature::activate('dashboard-v2');
    return view('welcome');
    echo "<pre>";
//    return Process::run('ls -la')->output();
//    return Process::run('asdadad asdasdasda asdadsdasd')->exitCode();
//    return Process::run('asdadad asdasdasda asdadsdasd')->errorOutput();
    return Process::run('ls -la')->successful();    //bool
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])->name('dashboard')
;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dash', function (){
    if(Feature::active('dashboard-v2')){
        return redirect('/new-dash');
    }
    return 'dashboard';
});

Route::get('/new-dash', function (){
    return 'new dashboard';
})->middleware('feature:dashboard-v2');


Route::get('rel-farm', [FarmController::class, 'index'])->name('farms');

require __DIR__.'/auth.php';
