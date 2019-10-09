<?php
namespace App\Controllers;

use Core\Controller;

class PagesController extends Controller
{
    public function notFound()
    {
        $this->view->render('errors/404');
    }
}
