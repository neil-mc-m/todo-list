<?php


class DatabaseConnection
{
    private string $username = 'php-user';
    private string $password = 'J_g]6!uv]@XHUmf8';
    private string $database = 'todo_list';

    public function getConnection(): mysqli|bool
    {
        return mysqli_connect('localhost', $this->username, $this->password, $this->database);
    }
}
