<?php 
namespace App\Controller;

use Pop\Controller\AbstractController;

class PopController extends AbstractController
{
    public function pop_simple()
    {
        return $this->render("pages/pop/simple");
    }

    public function pop_parameter($param)
    {
        return $this->render("pages/pop/parameter", [
            'pop_param' => $param
        ]);
    }
}