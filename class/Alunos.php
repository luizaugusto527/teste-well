<?php include 'class/Conecta.php' ?>
<?php
    class Aluno
    {
     
        public function cadastrarAluno($nome, $dtNascimento, $cpf)
        {
            $sql="insert into alunos (nome,dtNascimento,cpf) values ('$nome','$dtNascimento','$cpf')"; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            mysqli_query($con,$sql);
        }
        public function listarAluno()
        {
            $sql="select idaluno,nome from alunos"; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            $alunos = mysqli_query($con,$sql);

            return $alunos;
        }
    }
?>