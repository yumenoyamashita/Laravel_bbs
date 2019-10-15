<?php

Route::get('/', 'PostsController@index')->name('top');


Route::resource('comments', 'CommentsController', ['only' => ['store']]);


Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
