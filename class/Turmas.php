<?php 
 if (class_exists('Conecta')) {
    return;
 }else{
     include 'Conecta.php'; 
 }
 ?>
<?php
    class Turma
    {
     
        public function cadastrarTurma($desc, $ano, $vagas)
        {
            $sql="insert into turmas (descricao,ano,vagas) values ('$desc','$ano','$vagas')"; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            mysqli_query($con,$sql);
        }

        public function listarTurma()
        {
            $sql="select idturma,descricao from turmas"; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            $turmas = mysqli_query($con,$sql);

            return $turmas;
        }

        public function mudaVagas($id)
        {
           $vagaAtual = $this->consultaVagas($id);
           $novaVaga = $vagaAtual - 1;
           $sql="UPDATE turmas SET vagas = $novaVaga WHERE idturma = $id"; 
           $conexao = new Conecta();
           $con = $conexao->conectaBanco();
           mysqli_query($con,$sql);

        }

        public function consultaVagas($id)
        {
            $sql="select vagas from turmas where idturma = $id"; 
            $conexao = new Conecta();
            $con = $conexao->conectaBanco();
            $r = mysqli_query($con,$sql);
            $dados=mysqli_fetch_array($r);
            $vagaAtual = $dados['vagas'];

            return $vagaAtual;
        }
    }
?>