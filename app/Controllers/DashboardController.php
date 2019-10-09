<?php
namespace App\Controllers;

use Core\{Controller, Helper};
use App\Models\Worker;
use App\Models\Department;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Workers List';
        $workers = (new Worker())->index();
        $this->view->render('index', compact('workers', 'title'));
    }

    public function create()
    {
        $title = 'Create Worker';
        $departments = (new Department())->index();
        $this->view->render('create', compact('title', 'departments'));
    }

    public function store()
    {
        $options['name'] = trim(strip_tags($_POST['name']));
        $options['dep_id'] = $_POST['dep_id'];
        (new Worker())->store($options);
        Helper::redirect('/');
    }
}
