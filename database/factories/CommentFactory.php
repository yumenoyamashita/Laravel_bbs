<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function(Faker $faker){
	return[
        'body' => "コメントです。テキストテキストテキストテキストテキストテキスト。\n
        テキストテキストテキストテキストテキストテキスト"
	];
});
