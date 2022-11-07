<?php include 'class/Conecta.php' ?>
<?php
    class Relatorio
    {
     
        public function chamada($idturma)
        {
            $sql = "select nome,DATE_FORMAT(dtNascimento,'%d/%m/%Y') as dtNascimento
            FROM alunos,matricula 
            WHERE matricula.idaluno = alunos.idaluno AND matricula.idturma = $idturma order by nome" ; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            $chamada = mysqli_query($con,$sql);

            return $chamada;
        }
    }
?>