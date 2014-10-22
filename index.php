<?php
/**
 * Created by PhpStorm.
 * User: Valentine R
 * Date: 22/10/2014
 * Time: 17:37
 */

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views'
]);

$twig = new Twig_Environment($loader, [
    //'cache' => null,
]);

$article = [
    'name' => 'My Stupid Article',
    'content' => 'Helloooo, it\'s my content !',
    'enabled' => true,
    'date' => new DateTime('now'),
];

echo $twig->render('article.html.twig', [
    'article' => $article,
]);