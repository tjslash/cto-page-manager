<?php

/*
|--------------------------------------------------------------------------
| Tjslash\BackpackPageManager Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the Tjslash\BackpackPageManager package.
|
*/
use \Tjslash\CtoPageManager\Http\Controllers\Admin\PageCrudController;

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
], function () {
    Route::crud('page', PageCrudController::class);
});