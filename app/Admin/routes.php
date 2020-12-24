<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/information', InformationController::class);
    $router->resource('/categories', CategoryController::class);
    $router->resource('/users', UserController::class);
    $router->resource('/quizzes', QuizController::class);
    $router->resource('/keywords', KeywordController::class);

});
