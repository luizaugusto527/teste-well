<?php
  
  class Conecta 
  {
     private  $servidor="localhost";  	// Endereço do servidor mySQL
     private $udb="root";				// Usuário do banco de dados (fornecido pelo provedor)
      private $senha="";				// Senha de acesso ao mySQL
      private $bdados="escola";			// Nome do banco de dados que se deseja acessar
      
      public function conectaBanco ()
      {
               
            set_time_limit(60);
        
            // Criando a conexão com a base de dados
            $con = mysqli_connect($this->servidor,$this->udb,$this->senha,$this->bdados);
        
            // Define a acentuação/tabela de caracteres na origem dos dados
            mysqli_query($con,"SET NAMES utf8");
        
            // Caso ocorra um erro, emite uma mensagem de falha
            if (mysqli_connect_errno()) {
                 echo "Falha na conexão com o mySQL: " . mysqli_connect_error();
            }
            else{
                return $con;
            }
        }
  }
?>