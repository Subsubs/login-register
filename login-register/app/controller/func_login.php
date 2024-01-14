<?php
spl_autoload_register('route_database');

interface ILogin
{
    public function login($data);
}

class Login extends DatabaseIntergration implements ILogin
{
    public function login($data)
    {
        $init = new Server();
        $queryable = new Queries();
        if ($init->adaptive_server()) {
            if ($this->php_prepare($queryable->signin_query())) {
                $this->php_data_handling("uname", $data['uname']);
                if ($this->php_execution()) {
                    if ($this->php_row_checker()) {
                        $get = $this->php_fetch_row();
                        $pass = $get['password'];
                        if ($this->password_verification($data['pass'], $pass)) {
                            echo $this->php_responses(
                                true,
                                "normal",
                                (object)[0 => array("key" => "success")]
                            );
                            $this->cookies('any_user', 'no-token-logic-as-of-now');
                        } else {
                            echo $this->php_responses(
                                true,
                                "normal",
                                (object)[0 => array("key" => "PASSWORD_INVALID")]
                            );
                        }
                    } else {
                        echo $this->php_responses(
                            true,
                            "normal",
                            (object)[0 => array("key" => "ACCOUNT_NOT_FOUND")]
                        );
                    }
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
