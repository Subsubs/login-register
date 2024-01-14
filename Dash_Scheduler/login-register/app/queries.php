<?php

class Queries
{
    public function signin_query()
    {
        $sql = "SELECT id, username, password FROM admin_credentials WHERE username=:uname";
        return $sql;
    }
    public function update_67($data)
    {
        $setClause = [];
        foreach ($data as $key => $value) {
            $setClause[] = "{$key}=:{$key}";
        }
        $setClauseString = implode(", ", $setClause);

        $sql = "UPDATE sched SET {$setClauseString} WHERE time=:time";
        return $sql;
    }
    public function update_addinfo($data)
    {
        $setClause = [];
        foreach ($data as $key => $value) {
            $setClause[] = "{$key}=:{$key}";
        }
        $setClauseString = implode(", ", $setClause);

        $sql = "UPDATE sched SET {$setClauseString} WHERE faculty_id=:faculty_id";
        return $sql;
    }
}

class Server
{
    public function adaptive_server()
    {
        return $_SERVER["REQUEST_METHOD"] == "POST";
    }
}
