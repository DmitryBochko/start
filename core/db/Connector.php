<?php

class Connector
{
    public static function getConnection($config)
    {
        /*
        return new mysqli(
            $config['host'],
            $config['user'],
            $config['password'],
            $config['dbname']
        );
        */

        return new \PDO("{$config['type']}:host={$config['host']};dbname={$config['dbname']};", $config['user'], $config['password']);
    }
}