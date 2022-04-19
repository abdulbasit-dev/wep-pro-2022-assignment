<?php

$routes = [];

route('/', function () {
    include_once "./views/contact.php";
});

route('/contacts', function () {
    include_once "./views/contact.php";
});

route('/array-doc', function () {
    include_once "./views/array-doc.php";
});

route('/string-doc', function () {
    include_once "./views/string-doc.php";
});

route('/login', function () {
    include_once "./login.php";
});

route('/signup', function () {
    include_once  "./signup.php";
});

route('/404', function () {
    echo "Page not found";
});

function route(string $path, callable $callback)
{
    global $routes;
    $routes[$path] = $callback;
}