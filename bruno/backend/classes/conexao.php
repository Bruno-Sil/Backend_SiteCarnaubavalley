<?php


class Conexao
{
    private $host = "localhost";
    private $user = "root";
    private $senha = "";
    private $banco = "db_bruno";



    /**
     * Metodo caso queira mudar o banco antes de abrir uma conexao
     * @param string $banco
     *
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    /**
     * Metodo para abrir conexao com o banco
     * @return PDO|string
     */
    public function abrir()
    {
        try {
            $con = new PDO("mysql:host =" . $this->host . "; dbname=" . $this->banco, $this->user, $this->senha);
            return $con;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


}