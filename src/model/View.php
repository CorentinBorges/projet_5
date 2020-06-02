<?php


namespace App\src\model;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View
{
    private $loader;
    private $vars;
    private $twig;

    /*public function __construct()
    {
        $this->vars = [];
        $this->loader = new FilesystemLoader(__DIR__.'/../../templates');
        $this->twig = new Environment($this->loader, array('cache' => 'public/cache'));//TODO: cache true for prod
    }

    public function render($page)
    {
        try {
            ob_start();
            echo $this->twig->render($page,$this->vars);
        }
        catch (\Exception $e) {
            echo "Le fichier demandé n'éxiste pas";
        }
    }

    public function addVar($key, $value)
    {
        $this->vars[$key] = $value;
    }*/
}