<?php
/**
 * PayrollController.php
 */

namespace App\Controllers;

use App\Models\Payroll;
use App\Models\Worker;
use App\Models\Department;
use Core\Controller;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls = (new Payroll())->index();
        $title = 'Payrolls List Page';
        $this->view->render('payrolls/index', compact('payrolls', 'title'));
    }

    public function create($vars)
    {
        extract($vars);
        $title = 'Create Payroll';
        $instance = new Worker();
        $worker = $instance->getById($id);
        $this->view->render('payrolls/create', compact('title', 'worker'));
    }

//     $options['name'] = trim(strip_tags($_POST['name']));
//     $options['email'] = trim(strip_tags($_POST['email']));
//     $options['password'] = trim(strip_tags($_POST['password']));
//     $options['role_id'] = (int) $_POST['role_id'];
//     $options['status'] = $_POST['status'];
//     $instance->update($id, $options);
//     Helper::redirect('/admin/users');
// }
// $user = $instance->getById($id);
// $title = 'Admin User Edit Page ';
// $roles = (new Role())->index();
// $this->view->render('admin/users/edit', compact('user', 'title', 'roles'), 'admin');


    public function store()
    {
        $options['name'] = trim(strip_tags($_POST['worker_id']));
        $options['email'] = trim(strip_tags($_POST['salary']));
        (new Payroll())->store($options);
        Helper::redirect('/payrolls');
    }

}