<?php
/**
 * PayrollController.php
 */

namespace App\Controllers;

use App\Models\Payroll;
use App\Models\Worker;
use App\Models\Department;
use Core\{Controller, Helper};

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
        
        if (isset($_POST) and !empty($_POST)) {
            $options['salary'] = trim(strip_tags($_POST['salary']));
            $options['worker_id'] = $worker->id;
            (new Payroll())->store($options);
            Helper::redirect('/payrolls');
        }
        $this->view->render('payrolls/create', compact('title', 'worker'));
    }
}