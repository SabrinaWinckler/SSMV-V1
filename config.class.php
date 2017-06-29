<?php
	
/**
 * CLASSE DE CONFIGURAÇÃO
 */
class Config
{
    private $absPath        = '/ssmv/';
    private $baseUrl        = '/ssmv/';
    private $baseCdn        = "/cdn/";
    private $basePainel     = "/painel/";

    private $db             = "class/database.class.php";

    // private $header         = "inc/header.php";
    // private $footer         = "inc/footer.php";

    private $autor;
    private $descricao;
    
    public function __construct()
    {
        $this->absPath();
        $this->baseUrl();
        $this->baseCdn();
        $this->basePainel();

        $this->db();

        // $this->header();
        // $this->footer();
    }

    /** Caminho absoluto para a pasta do sistema **/
    private function absPath(){
        if(!defined('ABSPATH')){
            define('ABSPATH', dirname(__FILE__) . $this->absPath);
        }
    }

    /** Caminho no server para o sistema **/
    private function baseUrl(){
        if(!defined('BASEURL')){
            define('BASEURL', $this->baseUrl);
        }
    }

    /** Caminho no server para midias **/
    private function baseCdn(){
        if(!defined('BASECDN')){
            define('BASECDN', $this->baseUrl . $this->baseCdn);
        }
    }

    /** Caminho do arquivo de banco de dados **/
    private function db(){
        if(!defined('DB')){
            define('DB', $this->baseUrl . $this->db);
        }
    }

    // /** Caminho do template do header **/
    // private function header(){
    //     define('HEADER', ABSPATH . $this->header);
    // }

    // /** Caminho do template do footer **/
    // private function footer(){
    //     define('FOOTER', ABSPATH . $this->footer);
    // }

    private function basePainel(){
        if(!defined('BASEPAINEL')){
            define('BASEPAINEL', $this->basePainel);
        }
    }

    public function autor(){
        return "RP1 - Grupo 2 - Engenharia de Software - UNIPAMPA";
    }

    public function descricao(){
        return "Unindo tecnologia e solidariedade para melhorar vidas!";
    }
}

$config = new Config;

?>