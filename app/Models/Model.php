<?php


abstract class Model
{
    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=dev_semanaphp',
            'danielhe4rt',
            ''
        );
    }

}