<?php
spl_autoload_register('route_database');

interface IScheduler
{
    public function Insertion67($data);
    public function AdditionalInfoUpdate($data);
}

class Scheduler extends DatabaseIntergration implements IScheduler
{
    public function Insertion67($data)
    {
        $init = new Server();
        $queryable = new Queries();
        if ($init->adaptive_server()) {
            if ($this->php_prepare($queryable->update_67($data))) {
                foreach ($data as $key => $value) {
                    $this->php_data_handling($key, $value);
                }
                if ($this->php_execution()) {
                    echo $this->php_responses(
                        true,
                        "normal",
                        (object)[0 => array("key" => "success")]
                    );
                }
            }
        }
    }
    public function AdditionalInfoUpdate($data)
    {
        $init = new Server();
        $queryable = new Queries();
        if ($init->adaptive_server()) {
            if ($this->php_prepare($queryable->update_addinfo($data))) {
                foreach ($data as $key => $value) {
                    $this->php_data_handling($key, $value);
                }
                if ($this->php_execution()) {
                    echo $this->php_responses(
                        true,
                        "normal",
                        (object)[0 => array("key" => "success")]
                    );
                }
            }
        }
    }
}


function route_database()
{
    include_once "../db.php";
    include_once "../queries.php";
}
