<?php include 'conecta.php'; ?>
<?php include 'header.php'; ?>
<?php include 'class/Alunos.php'; ?>

<?php
 if(isset($_POST['nome']) && isset($_POST['dtNascimento']) && isset($_POST['cpf']) ){
     $nome=$_POST['nome'];
     $dtNascimento=$_POST['dtNascimento'];
     $cpf=$_POST['cpf'];
     $aluno = new Aluno();
     $aluno->cadastrarAluno($nome,$dtNascimento, $cpf);
     $sucess = true;

 }
?>


<div class="container-fluid">
    <div class="row  mt-5 mx-4">
    <?php
    if(isset($sucess)){
        echo '<div class="alert alert-success col-md-4" role="alert class="sucess">
        Aluno cadastrado com sucesso!';
    }
    ?>
</div>
    <h1 class="col-md-9">Cadastrar Aluno</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form class="mx-4 mt-2" action="cadastraAluno.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="dtNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" min="1970-01-01" max="2050-12-31" name="dtNascimento" class="form-control" id="dtNascimento" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <button type="submit" class="btn btn-primary cadastrar">Cadastar</button>
                </scri>
            </form>
        </div>
    </div>
</div>