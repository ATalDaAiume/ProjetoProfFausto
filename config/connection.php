<?php
    define("HOST", "localhost");
    define("PORT","3306");
    define("DB","projetoFausto");
    define("USER","root");
    define("PASS","");

    try{
        $pdo = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo `Erro ao se conectar com o banco de dados | ${e}`;
    }

?>