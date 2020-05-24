<?php

//Classe nao usada assim como a tabela
class Login
{
    private $id_login;
    private $email;
    private $senha;

    /**
     * @return mixed
     */
    public function getIdLogin()
    {
        return $this->id_login;
    }

    /**
     * @param mixed $id_login
     */
    public function setIdLogin($id_login)
    {
        $this->id_login = $id_login;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


}