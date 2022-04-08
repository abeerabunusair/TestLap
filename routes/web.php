<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    $name = "Abeer";
    return view('about', [
        "name" => $name
    ]);
});

Route::POST('/store', function () {
    /**$name=$_POST['name']; */
    $name = request('name');
    return view('about', compact('name'));
});
Route::get('/task', function () {
    $tasks = [
        "First-Task" =>'task 1',
        "Second-Task" =>'task 2',
        "Third-Task" =>'task 3'
    ];
    return view('task', compact('tasks'));
});
Route::get('show/{id}', function ($id) {
    $tasks = [
        "First-Task" =>'task 1',
        "Second-Task" =>'task 2',
        "Third-Task" =>'task 3'
    ];
    $task = $tasks[$id];
    return view('show', compact('task'));
});

//-------------------------------------------------------------------

Route::get('tasks', [TaskController::class,'index']);
Route::get('tasks/{id}', [TaskController::class,'show']);

