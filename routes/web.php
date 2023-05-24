<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/package-oriel-tasks', 'PackageOrielTasksController@index')->name('package.skeleton.index');
    Route::get('package-oriel-tasks', 'PackageOrielTasksController@index')->name('package.skeleton.tab.index');
});
