<?php


namespace App\src\model;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View
{
    private $loader;
    private $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__.'/../../templates');
        $this->twig = new Environment($this->loader, array('cache' => false));
    }

    public function render($page,$data=[])
    {
        try {
            ob_start();
            echo $this->twig->render($page,$data);
        }
        catch (\Exception $e) {
            echo "Le fichier demandé n'éxiste pas";
        }
    }
}