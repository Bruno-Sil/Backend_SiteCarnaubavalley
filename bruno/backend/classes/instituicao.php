<?php


class Instituicao
{
    private $id;
    private $tipo;
    private $nome;
    private $endereco;
    private $complemento;
    private $estado;
    private $cidade;
    private $bairro;
    private $cep;
    private $telefone;
    private $email;
    private $login;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
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
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
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
     * Metodo de cadastro de instuição
     * @param $conexao
     * recebe uma conexao do banco
     * @param $id_pessoa
     * necessario id da pessoa
     */
    public function cadastrar($conexao,$id_pessoa){
        $query = "insert into instituicao(tipo,nome,endereco,complemento,estado,cidade,bairro,cep,telefone,email,id_pessoa) values(?,?,?,?,?,?,?,?,?,?,?);";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getTipo(),$this->getNome(),$this->getEndereco(),$this->getComplemento(),$this->getEstado(),$this->getCidade(),$this->getBairro(),$this->getCep(),$this->getTelefone(),$this->getEmail(),$id_pessoa]);

    }

    /**
     * Metodo de buscar uma insttuição ou id
     * @param $conexao
     * @param $id_pessoa
     * @param string $tipo
     * escolha o tipo de retorno
     * @return int|mixed
     */
    public function getInstituicao($conexao,$id_pessoa,$tipo = "id"){
        $query = "select * from pessoa where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$id_pessoa]);
        $instituicao = $stmt->fetchAll();
        $id = 0;
        #caso tipo for 'id' ela retorna o id
        if ($tipo == "id"){
            foreach ($instituicao as $i){
                $id = $i["id"];
            }
            return $id;
            //caso tipo for igual instituicao ela retorna um objeto
        }else if($tipo == "instituicao") {
            return $instituicao;
        }
    }

    /**
     * Faz uma alteraão em instituição
     * @param $conexao
     * @param $id_pessoa
     */
    public function alterar($conexao,$id_pessoa){
        $this->setId($this->getInstituicao($conexao,$id_pessoa));
        $query = "update instituicao set tipo = ?,nome = ?,endereco = ?,complemento = ?,estado = ?,cidade = ?,bairro = ?,cep =?,telefone = ?,email = ? where id_pessoa = ? and id = ?);";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getTipo(),$this->getNome(),$this->getEndereco(),$this->getComplemento(),$this->getEstado(),$this->getCidade(),$this->getBairro(),$this->getCep(),$this->getTelefone(),$this->getEmail(), $id_pessoa,$this->getId()]);
    }

    /**
     * Consultar uma institução retorno em json para api
     * @param $conexao
     * @return false|string
     */
    public function consultar($conexao){
        $query = "select * from instituicao;";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $instituicao = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($instituicao, JSON_PRETTY_PRINT);
    }
}