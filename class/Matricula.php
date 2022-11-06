<?php 
 if (class_exists('Conecta')) {
    return;
 }else{
     include 'Conecta.php'; 
 }
 ?>
<?php
    class Matricula
    {
     
        public function cadastrarMatricula($aluno, $dtMatricula , $turma)
        {
            $sql="insert into matricula (idaluno,idturma,dtMatricula) values ('$aluno','$turma','$dtMatricula')"; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            mysqli_query($con,$sql);
        }

        public function listarMatricula()
        {
            $sql="select idturma,descricao from turmas"; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            $turmas = mysqli_query($con,$sql);

            return $turmas;
        }
    }
?>