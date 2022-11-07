<?php include 'header.php'; ?>
<?php include 'class/Alunos.php'; ?>
<?php include 'class/Turmas.php'; ?>
<?php include 'class/Matricula.php'; ?>


<?php
 if(isset($_POST['aluno']) && isset($_POST['dtMatricula']) && isset($_POST['turma']) ){
     $aluno=$_POST['aluno'];
     $dtMatricula=$_POST['dtMatricula'];
     $turma=$_POST['turma'];
     $r = new Turma();
     $vaga = $r->consultaVagas($turma);

     if ($vaga <= 0) {
        $falha = true;
        $sucess = false;
     }else{
         $matricula = new Matricula();
         $matricula->cadastrarMatricula($aluno,$dtMatricula, $turma);
         $sucess = true;
         $falha = false;
         $r->mudaVagas($turma);
     }

 }
?>

<div class="container-fluid">
    <div class="row  mt-5 mx-4">
    <?php
    if(isset($sucess) && $sucess == true){
        echo '<div class="alert alert-success col-md-4" role="alert class="sucess">
        Matricula efetuada com sucesso!';
    }
    if(isset($falha)  && $falha == true){
        echo '<div class="alert alert-danger col-md-4" role="alert class="sucess">
        Essa turma não possui vagas!';
    }
    ?>
</div>
    <h1 class="col-md-9">Matricula</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form class="mx-4 mt-2" action="cadastrarMatricula.php" method="post">
            <label for="alunos">Escolha um aluno</label>
            <select class="form-select" name="aluno" aria-label="Default select example">
                <?php
                    $aluno = new Aluno();
                    $r = $aluno->listarAluno();

                    while ($dados=mysqli_fetch_array($r)){
                        $id = $dados['idaluno'];
                        echo "<option value= $id>".$dados['nome'] .'</option>';
                    }       
                ?>
            </select>
            <label class="mt-3" for="alunos">Escolha uma Turma</label>
            <select class="form-select" name="turma" aria-label="Default select example">
                <?php
                    $turma = new Turma();
                    $r = $turma->listarTurma();
                
                    while ($dados=mysqli_fetch_array($r)){
                        $id = $dados['idturma'];
                        echo "<option value= $id>" .$dados['descricao'] .'</option>';
                    }       
                ?>
            </select>
                <label for="dtMatricula" class="form-label mt-3">Data de Matricula</label>
                <input type="date" min="1970-01-01" max="2050-12-31" name="dtMatricula" class="form-control" id="dtMatricula" required>    
                <button type="submit" class="btn btn-primary cadastrar mt-3">Cadastar</button>    
            </form>
        </div>
    </div>
</div>