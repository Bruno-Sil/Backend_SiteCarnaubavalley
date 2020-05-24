<?php

class Pessoa
{
    private $id_pessoa;
    private $nome_completo;
    private $foto;
    private $sexo;
    private $data_nascimento;
    private $telefone_whatsapp;
    private $estado;
    private $cidade;
    private $categoria;
    private $email;
    private $confirmacao_email;
    private $senha;
    private $confirmacao_senha;
    private $login;


    /**
     * @return mixed
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * @param mixed $id_pessoa
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
    }

    /**
     * @return mixed
     */
    public function getNomeCompleto()
    {
        return $this->nome_completo;
    }

    /**
     * @param mixed $nome_completo
     */
    public function setNomeCompleto($nome_completo)
    {
        $this->nome_completo = $nome_completo;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $data = strtotime($data_nascimento);
        $this->data_nascimento = date('Y/m/d', $data);
    }

    /**
     * @return mixed
     */
    public function getTelefoneWhatsapp()
    {
        return $this->telefone_whatsapp;
    }

    /**
     * @param mixed $telefone_whatsapp
     */
    public function setTelefoneWhatsapp($telefone_whatsapp)
    {
        $this->telefone_whatsapp = $telefone_whatsapp;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
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
    public function getConfirmacaoEmail()
    {
        return $this->confirmacao_email;
    }

    /**
     * @param mixed $confirmacao_email
     */
    public function setConfirmacaoEmail($confirmacao_email)
    {
        $this->confirmacao_email = $confirmacao_email;
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

    /**
     * @return mixed
     */
    public function getConfirmacaoSenha()
    {
        return $this->confirmacao_senha;
    }

    /**
     * @param mixed $confirmacao_senha
     */
    public function setConfirmacaoSenha($confirmacao_senha)
    {
        $this->confirmacao_senha = $confirmacao_senha;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Realiza upload de foto do usuario
     * @param $foto
     * tipo file
     * @param $pasta
     * local para guardar a foto
     * @param $conexao
     */
    public function upload($foto, $pasta,$conexao)
    {
        //pega extensao do arquivo
        $extensao_arq = pathinfo($foto['name'], PATHINFO_EXTENSION);
        //a foto recebe o nome do valor do campo id_pessoa
        $novo_nome_arq = $this->getIdPessoa();

        //altera o nome da arquivo, perdendo sua extensao
        $foto['name'] = $novo_nome_arq;
        //caminho final da foto
        $foto_final = $pasta . $foto['name'] . "." . $extensao_arq;
        //cria o nome final da foto
        $nome_foto = $foto['name'] . "." . $extensao_arq;
        //so concatenei a extensao pois o arquivo perdeu ela qnd mudei o nome dele
        if (move_uploaded_file($foto['tmp_name'], $foto_final)) {
            $this->nomeFoto($conexao,strval($nome_foto));
        } else {

        }


    }

    /**
     * Apos upload ser feito, esse metodo realiza uma alteraão na tabela pessoa colcando o nome da foto
     * @param $conexao
     * @param $nome
     */
    private function nomeFoto($conexao,$nome){
        $query = "update pessoa set foto = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$nome,strval($this->getIdPessoa())]);

    }

    /**
     * Cadastrar pessoa
     * @param $conexao
     * @return mixed
     */
    public function cadastrar($conexao)
    {
        $query = "insert into pessoa(nome_completo,sexo,data_nascimento,telefone_whatsapp,estado,cidade,categoria,email,confirmacao_email,senha,confirmacao_senha) values(?,?,?,?,?,?,?,?,?,?,?);";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getNomeCompleto(), $this->getSexo(), $this->getDataNascimento(), $this->getTelefoneWhatsapp(), $this->getEstado(), $this->getCidade(), $this->getCategoria(), $this->getEmail(), $this->getConfirmacaoEmail(), $this->getSenha(), $this->getConfirmacaoSenha()]);

        return $conexao->lastInsertId();
    }

    /**
     * altera uma pessoa
     * @param $conexao
     */
    public function alterar($conexao){
        $this->setIdPessoa($this->getPessoa($conexao,$this->getEmail(),$this->getSenha()));
        $query = "update pessoa set = nome_completo = ?,sexo = ?,data_nascimento = ?,telefone_whatsapp = ?,estado = ?,cidade = ?,categoria,email = ?,confirmacao_email = ?,senha = ?,confirmacao_senha = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getNomeCompleto(), $this->getSexo(), $this->getDataNascimento(), $this->getTelefoneWhatsapp(), $this->getEstado(), $this->getCidade(), $this->getCategoria(), $this->getEmail(), $this->getConfirmacaoEmail(), $this->getSenha(), $this->getConfirmacaoSenha(),$this->getIdPessoa()]);
    }

    /**
     * Metodo de consulta retorna um objeto pessoa ou um id
     * @param $conexao
     * @param $email
     * @param $senha
     * @param string $tipo
     * @return int|mixed
     */
    public function getPessoa($conexao,$email,$senha,$tipo = "id"){
        $query = "select * from pessoa where email = ? and senha = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$email,$senha]);
        $pessoa = $stmt->fetchAll();
        $id = 0;
        //tipo id retorna id
        if ($tipo == "id"){
            foreach ($pessoa as $p){
                $id = $p["id_pessoa"];
            }
            return $id;
            //tipo pessoa retorna um objeto pessoa
        }else if($tipo == "pessoa") {
            return $pessoa;
        }
    }

    /**
     * Retorna json, cosulta pessoas
     * @param $conexao
     * @return false|string
     */
    public function consultar($conexao){
        $query = "select * from pessoa;";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $pessoa = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($pessoa,JSON_PRETTY_PRINT);
    }

}