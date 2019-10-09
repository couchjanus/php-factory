<?php
/**
 * class Payroll
 */
namespace App\Models;
use Core\Model;
use PDO;

class Payroll extends Model
{
    public function __construct()
	{
        parent::__construct();
	}

    public static function index() 
    {
        return self::query("SELECT * FROM payrolls ORDER BY id ASC")->fetchAll(PDO::FETCH_CLASS);
    }
    
    public static function store($options)
    {
        $sql = "INSERT INTO payrolls(worker_id, salary)
                VALUES(:worker_id, :salary)";
        $stmt = self::prepare($sql);
        $stmt->bindParam(':salary', $options['salary'], PDO::PARAM_STR);
        $stmt->bindParam(':worker_id', $options['worker_id'], PDO::PARAM_INT);
        return $stmt->execute();
    }

}
