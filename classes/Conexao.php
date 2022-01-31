<?php
    class Conexao{
        public static function conectar(){

            $conexao = new PDO(
                //"mysql:host=fdb33.awardspace.net;
                //dbname=3976116_bdduhel"
                //,"3976116_bdduhel"
                //,"948/73eDu88)44"

                "mysql:host=localhost;
                dbname=bdduhel"
                ,"root"
                ,""
            );
    
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8");

            return $conexao;
        }
    }
?>