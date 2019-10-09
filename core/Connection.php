<?php
/**
 * class Connection
 */
namespace Core;

use PDO;

class Connection
{
    const ERROR_UNABLE = 'ERROR: no database connection';

    protected static $instance;
    
    public static function connect($config)
    {
        if (null === static::$instance) {

            if (!isset($config['db']['driver'])) {
                $message = __METHOD__ . ' : ' 
                . self::ERROR_UNABLE . PHP_EOL;
                throw new Exception($message);
            }
            $dsn = self::makeDsn($config['db']);        
            try {
                static::$instance = new PDO(
                    $dsn,                                                                                       
                    $config['user'], 
                    $config['password'], 
                    [
                        PDO::ATTR_ERRMODE => $config['errmode']
                    ]
                );
            } catch (PDOException $e) {
                error_log($e->getMessage());
            }
        }
        
        return static::$instance;
    }
    
    protected function __construct()
    {
        
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
    
    protected static function makeDsn($config)
    {
        $dsn = $config['driver'] . ':';
        unset($config['driver']);
        
        foreach ($config as $key => $value) {
                $dsn .= $key . '=' . $value . ';';
        }
        return substr($dsn, 0, -1);
    }
}
