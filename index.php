<?php
require 'Database.php';
require 'Article.php';

$article = new Article();
$list=$article->getArticles();
require_once 'vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new Twig\Environment($loader, array('cache' => false));
echo $twig->render('posts.html.twig',array('list'=>$list));
