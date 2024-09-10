<?php

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$vars){
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

switch($_SERVER['REQUEST_URI']){
    case '/':
        $posts = [
            ['title' => 'Title 1', 'body' => 'some body 1'],
            ['title' => 'Title 2', 'body' => 'some body 2'],
            ['title' => 'Title 3', 'body' => 'some body 3'],
            ['title' => 'Title 4', 'body' => 'some body 4'],
          ];
        include 'views/index.php';
        break;
    case '/us':
        $posts = [
            ['title' => 'Title 5', 'body' => 'some body 5'],
            ['title' => 'Title 6', 'body' => 'some body 6'],
            ['title' => 'Title 7', 'body' => 'some body 7'],
            ['title' => 'Title 8', 'body' => 'some body 8'],
          ];
        include 'views/us.php';
        break;
    default:
        echo 'error 404: Page not found';
        break;
}

