<?php 
namespace App\Controller;

use Pop\Controller\AbstractController;

class PopController extends AbstractController
{
    public function index()
    {
        $project_dir = "";
        
        return $this->render("pages/pop/index", [
            'project_dir' => $project_dir,
        ]);
    }
}