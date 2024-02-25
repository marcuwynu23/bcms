<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function () {
		return view('home/index');
});
$routes->resource('home');
$routes->resource('book');
$routes->post("book/search", "Book::search");
$routes->resource('about');
$routes->resource('account');

