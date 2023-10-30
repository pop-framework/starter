<?php 
namespace App\Controller;

use Pop\Controller\AbstractController;

class DocController extends AbstractController
{
    public function index()
    {
        return $this->redirect("https://github.com");
    }
}