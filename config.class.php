<?php
	
/**
 * CLASSE DE CONFIGURAÇÃO
 */
class config
{
    private $absPath    = '/';
    private $baseUrl    = '/';
    private $baseCdn    = "/cdn/";

    private $db         = "class/database.class.php";

    private $header     = "inc/header.php";
    private $footer     = "inc/footer.php";
    
    public function __construct()
    {
        $this->absPath();
        $this->baseUrl();
        $this->baseCdn();

        $this->db();

        $this->header();
        $this->footer();
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
            define('BASECDN', $this->baseCdn);
        }
    }

    /** Caminho do arquivo de banco de dados **/
    private function db(){
        if(!defined('DB')){
            define('DB', ABSPATH . $this->db);
        }
    }

    /** Caminho do template do header **/
    private function header(){
        define('HEADER', ABSPATH . $this->header);
    }

    /** Caminho do template do footer **/
    private function footer(){
        define('FOOTER', ABSPATH . $this->footer);
    }
}

new config;

?>