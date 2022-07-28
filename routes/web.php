<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\InvestController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Front\ProjectController as FrontProjectController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Front\NewsController as FrontNewsController;
use App\Http\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\WordsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front Routes
// Route::get('/', function(){
//     return view('front.index');})->name('home');

    

Route::get('/logout', function(){
    Auth()->logout();
    return redirect()->route('home');
});

// Admin Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::middleware(['is_admin'])->group(function(){
        Route::prefix('admin')->group(function () {
            Route::name('admin.')->group(function () {
                Route::get('/dashboard', Dashboard::class)->name('dashboard');
                Route::get('/users', [UserController::class, 'index'])->name('users');
                

                //// Project Routes //////

                Route::get('/profile', [AdminProfileController::class, 'index'])->name('profile');

                Route::get('/project', [ProjectController::class, 'index'])->name('project');
                Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
                Route::post('/store', [ProjectController::class, 'store'])->name('project.store');
                Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
                Route::post('/update/{id}', [ProjectController::class, 'update'])->name('project.update');
                Route::delete('/destroy/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');

                Route::get('/project-property', [\App\Http\Controllers\ProjectPropertiesController::class, 'index'])->name('project-property');
                Route::post('/project-property', [\App\Http\Controllers\ProjectPropertiesController::class, 'store'])->name('project-property.store');
                Route::put('/project-property/{id}', [\App\Http\Controllers\ProjectPropertiesController::class, 'update'])->name('project-property.update');
                Route::delete('/project-property/{id}', [\App\Http\Controllers\ProjectPropertiesController::class, 'destroy'])->name('project-property.destroy');

                Route::get('/project-property-item', [\App\Http\Controllers\ProjectPropertyItemsController::class, 'index'])->name('project-property-item');
                Route::post('/project-property-item', [\App\Http\Controllers\ProjectPropertyItemsController::class, 'store'])->name('project-property-item.store');
                Route::put('/project-property-item/{id}', [\App\Http\Controllers\ProjectPropertyItemsController::class, 'update'])->name('project-property-item.update');
                Route::delete('/project-property-item/{id}', [\App\Http\Controllers\ProjectPropertyItemsController::class, 'destroy'])->name('project-property-item.destroy');

                ///// INVEST /////

                Route::get('/invest', [InvestController::class, 'index'])->name('invest');
                Route::get('/invest/create', [InvestController::class, 'create'])->name('invest.create');
                Route::post('/invest/store', [InvestController::class, 'store'])->name('invest.store');
                Route::get('/invest/{id}', [InvestController::class, 'edit'])->name('invest.edit');
                Route::post('/invest/{id}', [InvestController::class, 'update'])->name('invest.update');
                Route::delete('/invest/{id}', [InvestController::class, 'destroy'])->name('invest.destroy');

                ///// MESSAGE /////

                Route::get('/message', [MessageController::class, 'index'])->name('message');
                Route::post('/message/store', [MessageController::class, 'store'])->name('message.store'); 
                Route::post('/message/{id}', [MessageController::class, 'destroy'])->name('message.destroy'); 

                ///// News /////

                Route::get('/news', [NewsController::class, 'index'])->name('news');
                Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
                Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
                Route::get('/news/{id}', [NewsController::class, 'edit'])->name('news.edit');
                Route::post('/news/{id}', [NewsController::class, 'update'])->name('news.update');
                Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

                Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
                Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
                Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
<<<<<<< HEAD
                Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
                Route::put('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
                Route::delete('/employee/{id}', [EmployeeController::class, 'deleteImg'])->name('delete.company_img');
                Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');

                Route::get('/words', [WordsController::class, 'index'])->name('words');
=======
                // Route::resource('/words', [WordController::class]);

                Route::get('/words', [WordsController::class, 'index'])->name('words');
                Route::get('/words/store', [WordsController::class, 'store'])->name('words.store');
                Route::get('/words/store', [WordsController::class, 'store'])->name('words.store');
>>>>>>> 77cdb08e33db76e1039606728585b1f09bfea3d1

                Route::controller(MessageController::class)->group(function () {
                    Route::get('/notifications', 'notifications')->name('notifications');
                    Route::get('/notify/{id}', 'notify')->name('notify');
                    Route::get('/markasread/{id}', 'markAsRead')->name('markasread');
                    Route::get('/markallasread', 'markAllAsRead')->name('markallasread');
                });
            });
        });
    });

});


Route::name('front.')->group(function () {
    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
    Route::get('/news/{id}', [FrontNewsController::class,'index'])->name('news.single');
});
Route::get('/', [FrontProjectController::class,'index'])->name('home');
Route::get('/project/{id}', [FrontProjectController::class,'show'])->name('home.project');





















Route::get('/languages/{lang}', function($lang){
    if(in_array($lang, ['en', 'ru', 'uz'])){
        session()->put('locale', $lang);
    }
    return redirect()->back();
});

Route::fallback(function () {
    return view('admin.components.error404');
});