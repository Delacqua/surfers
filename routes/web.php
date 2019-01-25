<?php

//main
Route::get('/', 'IndexController@main' );


//Tutti i prodotti
Route::get('/produtos', 'ProductsController@lista' );
Route::get('/produtosJ', 'ProductsController@listaJson' );

//compra
Route::get('/buy', 'BuyController@buy')->where('id', '[0-9]+');
Route::get('/buy/{id}', 'BuyController@buyRoute')->where('id', '[0-9]+');


Route::get('/blog', function() {
    return 'blog';
});

Route::get('/team', function() {
    return 'team';
});

Route::get('/dealers', function() {
    return 'dealers';
});

// Email
Route::post('/mail/send', 'MailController@send');

// Test
Route::get('/instagram', 'IndexController@instagram');
Route::get('/instagram2', 'IndexController@instagram2');