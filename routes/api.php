<?php
Route::group(['middleware' => ['auth:api', 'bindings']], function() {
    Route::get('admin/package-oriel-tasks/fetch', 'PackageOrielTasksController@fetch')->name('package.skeleton.fetch');
    Route::apiResource('admin/package-oriel-tasks', 'PackageOrielTasksController');
});
