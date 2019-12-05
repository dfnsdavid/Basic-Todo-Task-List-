<?php
/**
 * @category Description
 * @package  Category
 * @author   Adeniyi <adeniyibiz@email.com>
 * @license  MIT
 * @link     http://todo.learn
 */
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

Route::get(
    '/', function () {
        return view('welcome');
    }
);

// Route::get('/new', 'PagesController@new');

Route::get('/todos', 'TodosController@index');

Route::get(
    '/todos/update/{id}', [
        'uses' => 'TodosController@update',
        'as' => 'todo.update'
    ]
);

Route::post(
    '/todos/save/{id}', [
        'uses' => 'TodosController@save',
        'as' => 'todo.save'
    ]
);

Route::get(
    '/todos/delete/{id}', [
        'uses' => 'TodosController@delete',
        'as' => 'todo.delete'
    ]
);

Route::get(
    '/todos/completed/{id}', [
        'uses' => 'TodosController@completed',
        'as' => 'todo.completed'
    ]
);

Route::get(
    '/todos/pending/{id}', [
        'uses' => 'TodosController@pending',
        'as' => 'todo.pending'
    ]
);

Route::post('/create/todo', 'TodosController@store');
