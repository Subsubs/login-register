<?php
class DatabaseIntergration
{

    private $host = "localhost:3307";
    private $username = "root";
    private $pwd = "";
    private $db = "login_register";
    private $statement;
    private $helper;

    private function connect()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;
            $this->helper = new PDO($dsn, $this->username, $this->pwd);
            $this->helper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->helper;
        } catch (PDOException $th) {
            die("Could not connect to the database" . $th->getMessage());
        }
    }

    public function php_prepare($sql)
    {
        return $this->statement = $this->connect()->prepare($sql);
    }

    public function php_data_handling($val, $param, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case $type == 1:
                    $type = PDO::PARAM_INT;
                    break;
                case $type == 2:
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        return $this->statement->bindParam($val, $param, $type);
    }

    public function php_execution()
    {
        return $this->statement->execute();
    }
    public function password_verification($request, $getPassword)
    {
        return password_verify($request, $getPassword);
    }
    public function php_row_checker()
    {
        return $this->statement->rowCount() > 0;
    }
    public function php_fetch_row()
    {
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
    public function cookies($cookieName, $token)
    {
        $cookie = array(
            'expires' => time() + 60 * 60 * 24 * 7,
            'path' => '/',
            'secure' => true,
            'httponly' => true,
            'samesite' => 'None'
        );
        setcookie($cookieName, $token, $cookie);
    }
    public function php_responses(
        $bool,
        $payload = null,
        $isArray
    ) {
        switch ($bool) {
            case $payload == "single":
                return json_encode($isArray, JSON_FORCE_OBJECT);
                break;
            case $payload == "normal":
                return json_encode($isArray);
                break;
        }
    }
}
