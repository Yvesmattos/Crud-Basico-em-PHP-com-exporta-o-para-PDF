<?php

require 'config/connection.php';
class Jogo
{

    public static function cadastrarDados($dados)
    {
        try {
            $pdo = Conexao::conectarDB();
            $sql = "INSERT INTO jogos (nome, genero, plataforma, players, midia) VALUES (?, ?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->bindValue(1, $dados["nome"]);
            $q->bindValue(2, $dados["genero"]);
            $q->bindValue(3, $dados["plataforma"]);
            $q->bindValue(4, $dados["jogabilidade"]);
            $q->bindValue(5, $dados["midia"]);
            if ($q->execute()) {
                return true;
            }
            Conexao::desconectar();
            return false;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public static function find($id)
    {
        try {
            $pdo = Conexao::conectarDB();
            $sql = "SELECT * FROM jogos WHERE idJogos=$id";
            $q = $pdo->prepare($sql);

            if ($q->execute()) {
                if ($q->rowCount() > 0) {
                    $resultado = $q->fetchObject('Jogo');
                    if ($resultado) {
                        return $resultado;
                    }
                }
            }
            return false;
            Conexao::desconectar();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public static function alterar($jogo)
    {
        try {
            $pdo = Conexao::conectarDB();
            $sql = "UPDATE jogos SET nome=?, genero=?, plataforma=?, players=?, midia=? where idjogos=?";
            $q = $pdo->prepare($sql);
            $q->bindValue(1, $jogo["nome"]);
            $q->bindValue(2, $jogo["genero"]);
            $q->bindValue(3, $jogo["plataforma"]);
            $q->bindValue(4, $jogo["jogabilidade"]);
            $q->bindValue(5, $jogo["midia"]);
            $q->bindValue(6, $jogo["id"]);
            
            
            if ($q->execute()) {
                return true;
            }
            Conexao::desconectar();
            return false;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public static function findAll()
    {
        try {
            $pdo = Conexao::conectarDB();
            $sql = "SELECT * FROM jogos";
            $q = $pdo->prepare($sql);
            $result  = array();
            if ($q->execute()) {
                while ($rs = $q->fetchObject(Jogo::class)) {
                    $result[] = $rs;
                }
            }
            if (count($result) > 0) {
                return $result;
            }
            return false;
            Conexao::desconectar();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public static function destroy($id)
    {
        try {
            $pdo = Conexao::conectarDB();
            $sql = "DELETE FROM jogos WHERE idJogos=$id";
            $q = $pdo->prepare($sql);

            if ($q->execute()) {
                return true;
            }
            Conexao::desconectar();
            return false;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
