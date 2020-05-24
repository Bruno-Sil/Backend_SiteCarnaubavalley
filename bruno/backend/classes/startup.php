<?php


class Startup
{
    private $id;
    private $logo;
    private $nome;
    private $razao_social;
    private $cnpj;
    private $email;
    private $data_fundacao;
    private $telefone;
    private $descricao_curta;
    private $descricao;
    private $tags;
    private $modelo_negocio;
    private $publico_alvo;
    private $momento;
    private $segmento_pricipal;
    private $segmento_secundario;
    private $tamanho_time;
    private $faturamento_anual;
    private $website;
    private $linkedin;
    private $facebook;
    private $app_store;
    private $google_play;
    private $youtube;
    private $instagram;
    private $cep;
    private $numero;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $estado;
    private $endereco_principal;
    private $cargo_funcao;
    private $nivel_hieraquico;
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
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
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
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    /**
     * @param mixed $razao_social
     */
    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
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
    public function getDataFundacao()
    {
        return $this->data_fundacao;
    }

    /**
     * @param mixed $data_fundacao
     */
    public function setDataFundacao($data_fundacao)
    {
        $this->data_fundacao = $data_fundacao;
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
    public function getDescricaoCurta()
    {
        return $this->descricao_curta;
    }

    /**
     * @param mixed $descricao_curta
     */
    public function setDescricaoCurta($descricao_curta)
    {
        $this->descricao_curta = $descricao_curta;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getModeloNegocio()
    {
        return $this->modelo_negocio;
    }

    /**
     * @param mixed $modelo_negocio
     */
    public function setModeloNegocio($modelo_negocio)
    {
        $this->modelo_negocio = $modelo_negocio;
    }

    /**
     * @return mixed
     */
    public function getPublicoAlvo()
    {
        return $this->publico_alvo;
    }

    /**
     * @param mixed $publico_alvo
     */
    public function setPublicoAlvo($publico_alvo)
    {
        $this->publico_alvo = $publico_alvo;
    }

    /**
     * @return mixed
     */
    public function getMomento()
    {
        return $this->momento;
    }

    /**
     * @param mixed $momento
     */
    public function setMomento($momento)
    {
        $this->momento = $momento;
    }

    /**
     * @return mixed
     */
    public function getSegmentoPricipal()
    {
        return $this->segmento_pricipal;
    }

    /**
     * @param mixed $segmento_pricipal
     */
    public function setSegmentoPricipal($segmento_pricipal)
    {
        $this->segmento_pricipal = $segmento_pricipal;
    }

    /**
     * @return mixed
     */
    public function getSegmentoSecundario()
    {
        return $this->segmento_secundario;
    }

    /**
     * @param mixed $segmento_secundario
     */
    public function setSegmentoSecundario($segmento_secundario)
    {
        $this->segmento_secundario = $segmento_secundario;
    }

    /**
     * @return mixed
     */
    public function getTamanhoTime()
    {
        return $this->tamanho_time;
    }

    /**
     * @param mixed $tamanho_time
     */
    public function setTamanhoTime($tamanho_time)
    {
        $this->tamanho_time = $tamanho_time;
    }

    /**
     * @return mixed
     */
    public function getFaturamentoAnual()
    {
        return $this->faturamento_anual;
    }

    /**
     * @param mixed $faturamento_anual
     */
    public function setFaturamentoAnual($faturamento_anual)
    {
        $this->faturamento_anual = $faturamento_anual;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @param mixed $linkedin
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * @param mixed $app_store
     */
    public function setAppStore($app_store)
    {
        $this->app_store = $app_store;
    }

    /**
     * @return mixed
     */
    public function getGooglePlay()
    {
        return $this->google_play;
    }

    /**
     * @param mixed $google_play
     */
    public function setGooglePlay($google_play)
    {
        $this->google_play = $google_play;
    }

    /**
     * @return mixed
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * @param mixed $youtube
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;
    }

    /**
     * @return mixed
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * @param mixed $instagram
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
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
    public function getEnderecoPrincipal()
    {
        return $this->endereco_principal;
    }

    /**
     * @param mixed $endereco_principal
     */
    public function setEnderecoPrincipal($endereco_principal)
    {
        $this->endereco_principal = $endereco_principal;
    }

    /**
     * @return mixed
     */
    public function getCargoFuncao()
    {
        return $this->cargo_funcao;
    }

    /**
     * @param mixed $cargo_funcao
     */
    public function setCargoFuncao($cargo_funcao)
    {
        $this->cargo_funcao = $cargo_funcao;
    }

    /**
     * @return mixed
     */
    public function getNivelHieraquico()
    {
        return $this->nivel_hieraquico;
    }

    /**
     * @param mixed $nivel_hieraquico
     */
    public function setNivelHieraquico($nivel_hieraquico)
    {
        $this->nivel_hieraquico = $nivel_hieraquico;
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
     * Metodo para iniciar startup usado em conjunto com cadastrar pessoa
     * @param $conexao
     * @param $id_pessoa
     */
    public function startStartup($conexao,$id_pessoa){
        $query = "insert into empresa_startup(id_pessoa) values(?); ";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$id_pessoa]);

    }

    /**
     * Consulta uma startup e atribui os valores buscado ao objeto
     * @param $conexao
     * @param $id_pessoa
     */
    public function consultarStartup($conexao,$id_pessoa){
        $query = "select * from empresa_startup where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$id_pessoa]);
        $s = $stmt->fetch();
            $this->setLogo($s["logo"]);
            $this->setNome($s['nome']);
            $this->setRazaoSocial($s['razao_social']);
            $this->setCnpj($s['cnpj']);
            $this->setEmail($s['email']);
            $this->setDataFundacao($s['data_fundacao']);
            $this->setTelefone($s['telefone']);
            $this->setDescricaoCurta($s['descricao_curta']);
            $this->setDescricao($s['descricao']);
            $this->setTags($s['tags']);
            $this->setModeloNegocio($s['modelo_negocio']);
            $this->setPublicoAlvo($s['publico_alvo']);
            $this->setMomento($s['momento']);
            $this->setSegmentoPricipal($s['segmento_principal']);
            $this->setSegmentoSecundario($s['segmento_secundario']);
            $this->setTamanhoTime($s['tamanho_time']);
            $this->setFaturamentoAnual($s['faturamento_anual']);
            $this->setWebsite($s['website']);
            $this->setLinkedin($s['linkedin']);
            $this->setFacebook($s['facebook']);
            $this->setAppStore($s['app_store']);
            $this->setGooglePlay($s['google_play']);
            $this->setYoutube($s['youtube']);
            $this->setInstagram($s['instagram']);
            $this->setCep($s['cep']);
            $this->setNumero($s['numero']);
            $this->setLogradouro($s['logradouro']);
            $this->setComplemento($s['complemento']);
            $this->setBairro($s['bairro']);
            $this->setEstado($s['estado']);
            $this->setEnderecoPrincipal($s['endereco_principal']);
            $this->setCargoFuncao($s['cargo_funcao']);
            $this->setNivelHieraquico($s['nivel_hierarquico']);
    }

    /**
     * Apaga todas as fotos com mesmo nome da foto atual para nao da erro
     * @param $id_pessoa
     * @return bool
     */
    private function apagarFotos($id_pessoa){
        $pasta = "../uploads/empresa/";
        if (is_dir($pasta)) {
            $diretorio = dir($pasta);

            while ($arquivo = $diretorio->read()) {
                if ($arquivo != "." && $arquivo != "..") {
                    $nome = pathinfo($pasta.$arquivo,PATHINFO_FILENAME);
                    if($nome == strval($id_pessoa)){
                        unlink($pasta.$arquivo);
                    }

                }
            }
            $diretorio->close();
        }else{
            return false;
        }
    }

    /**
     * Faz upload de foto da startup
     * @param $foto
     * tipo file da foto
     * @param $pasta
     * @param $conexao
     * @param $id_pessoa
     */
    public function upload($foto, $pasta,$conexao,$id_pessoa)
    {
        $this->apagarFotos($id_pessoa);
        //pega extensao do arquivo
        $extensao_arq = pathinfo($foto['name'], PATHINFO_EXTENSION);
        //nome da foto é igual o id pessoa q ela pertence
        $novo_nome_arq = $id_pessoa;

        //altera o nome da arquivo, perdendo sua extensao
        $foto['name'] = $novo_nome_arq;
        $foto_final = $pasta . $foto['name'] . "." . $extensao_arq;
        $nome_foto = $foto['name'] . "." . $extensao_arq;
        //so concatenei a extensao pois o arquivo perdeu ela qnd mudei o nome dele
        if (move_uploaded_file($foto['tmp_name'], $foto_final)) {
            $this->nomeFoto($conexao,strval($nome_foto),$id_pessoa);
        } else {

        }


    }

    /**
     * Apos o upload faz alteração do nome da foto no banco
     * @param $conexao
     * @param $nome
     * @param $id_pessoa
     */
    private function nomeFoto($conexao,$nome,$id_pessoa){
        $query = "update empresa_startup set logo = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$nome,strval($id_pessoa)]);

    }

    /**
     * Consulta a foto no banco
     * @param $conexao
     * @param $id_pessoa
     */
    public function consultarLogo($conexao,$id_pessoa){
        $query = "select * from empresa_startup where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$id_pessoa]);
        $startup = $stmt->fetchAll();
        foreach ($startup as $s){
            $this->setLogo($s["logo"]);
        }
    }

    /**
     * Insere e altera os dados cadastrais
     * @param $conexao
     * @param $id_pessoa
     */
    public function alterarDadosGerais($conexao,$id_pessoa){
        $query = "update empresa_startup set nome = ?, razao_social = ?, cnpj = ?, email = ?, data_fundacao = ?, telefone = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getNome(),$this->getRazaoSocial(),$this->getCnpj(),$this->getEmail(),$this->getDataFundacao(),$this->getTelefone(),$id_pessoa]);
    }

    /**
     * Insere e altera descricao
     * @param $conexao
     * @param $id_pessoa
     */
    public function alterarDescricao($conexao,$id_pessoa){
        $query = "update empresa_startup set descricao_curta = ?, descricao = ?, tags = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getDescricaoCurta(),$this->getDescricao(),$this->getTags(),$id_pessoa]);
    }

    /**
     * Insere e altera dados
     * @param $conexao
     * @param $id_pessoa
     */
    public function alterarDados($conexao,$id_pessoa){
        $query = "update empresa_startup set modelo_negocio = ?,publico_alvo = ?, momento = ?, segmento_principal = ?, segmento_secundario = ?, tamanho_time = ?, faturamento_anual = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getModeloNegocio(),$this->getPublicoAlvo(),$this->getMomento(),$this->getSegmentoPricipal(),$this->getSegmentoSecundario(),$this->getTamanhoTime(),$this->getFaturamentoAnual(),$id_pessoa]);
    }

    /**
     * Insere e altera rede
     * @param $conexao
     * @param $id_pessoa
     */
    public function alterarRede($conexao,$id_pessoa){
        $query = "update empresa_startup set website = ?,linkedin = ?, facebook = ?, app_store = ?, google_play = ?, youtube = ?, instagram = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getWebsite(),$this->getLinkedin(),$this->getFacebook(),$this->getAppStore(),$this->getGooglePlay(),$this->getYoutube(),$this->getInstagram(),$id_pessoa]);
    }

    /**
     * alterar endereco
     * @param $conexao
     * @param $id_pessoa
     */
    public function alterarEndereco($conexao,$id_pessoa){
        $query = "update empresa_startup set cep = ?,numero = ?, logradouro = ?, complemento = ?, bairro = ?, estado = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getCep(),$this->getNumero(),$this->getLogradouro(),$this->getComplemento(),$this->getBairro(),$this->getEstado(),$id_pessoa]);
    }

    /**
     * alterar e inserir time
     * @param $conexao
     * @param $id_pessoa
     */
    public function alterarTime($conexao,$id_pessoa){
        $query = "update empresa_startup set cargo_funcao = ?,nivel_hierarquico = ? where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$this->getCargoFuncao(),$this->getNivelHieraquico(),$id_pessoa]);
    }

    /**
     * retorna todas a startups em json
     * @param $conexao
     * @return false|string
     */
    public function getAll($conexao){
        $query = "select * from empresa_startup;";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $startup = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($startup, JSON_PRETTY_PRINT);
    }

    /**
     * retorna uma startup json, com id pessoa
     * @param $conexao
     * @param $id_pessoa
     * @return false|string
     */
    public function getOne($conexao,$id_pessoa){
        $query = "select * from empresa_startup where id_pessoa = ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute([$id_pessoa]);
        $startup = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($startup, JSON_PRETTY_PRINT);
    }
    //campo estagio, cidade e tipo nao encotrados em tabela empresa startup
    //cidade virou estado,estagio virou cep e tipo virou cargo_funcao
    /**
     * Metodo de consulta por filtro, retorno em json
     * @param $conexao
     * @return false|string
     */
    public function filtro($conexao){
        $query = "select * from empresa_startup where (segmento_principal like ? or segmento_secundario like ?) and estado like ? and publico_alvo like ? and cep like ? and cargo_funcao like ?;";
        $stmt = $conexao->prepare($query);
        $stmt->execute(["%{$this->getSegmentoPricipal()}%","%{$this->getSegmentoSecundario()}%","%{$this->getEstado()}%","%{$this->getPublicoAlvo()}%","%{$this->getCep()}%","%{$this->getCargoFuncao()}%"]);
        $startup = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($startup,JSON_PRETTY_PRINT);

    }



}