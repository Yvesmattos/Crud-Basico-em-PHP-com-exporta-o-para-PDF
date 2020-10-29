<?php

class Conexao
{
    private static $dbNome = '1910478300070';
    private static $dbHost = 'localhost';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';

    private static $conn = null;

    public function __construct()
    {
    }

    public static function conectarDB()
    {
        if (self::$conn == null) {
            try {
                self::$conn =  new PDO(
                    "mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbNome, self::$dbUsuario,self::$dbSenha
                );
            } catch (PDOException $exception) {
                die($exception->getMessage());
            }
        }
        return self::$conn;
    }

    public static function desconectar()
    {
        self::$conn = null;
    }
}
