<?php
/**
 * class Worker
 */
namespace App\Models;
use Core\Model;
use PDO;

class Department extends Model
{
    public function __construct()
	{
        parent::__construct();
	}

    public static function index() 
    {
        return self::query("SELECT * FROM departments ORDER BY id ASC")->fetchAll(PDO::FETCH_CLASS);
    }

    public static function store($options)
    {
        $sql = "INSERT INTO workers(name, dep_id)
                VALUES(:name, :dep_id)";
        $stmt = self::prepare($sql);
        $stmt->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $stmt->bindParam(':dep_id', $options['dep_id'], PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    public static function getById($id)
    {
        $stmt = self::prepare("SELECT * FROM users  WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }


}
