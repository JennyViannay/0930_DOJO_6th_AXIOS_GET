<?php

namespace App\Controller;

class DefaultController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('index.html.twig');
    }
}