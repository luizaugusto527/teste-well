<?php include 'header.php'; ?>
<?php include 'class/Turmas.php'; ?>

<?php
 if(isset($_POST['desc']) && isset($_POST['ano']) && isset($_POST['vagas']) ){
     $desc=$_POST['desc'];
     $ano=$_POST['ano'];
     $vagas=$_POST['vagas'];
     $turma = new Turma();
     $turma->cadastrarTurma($desc,$ano, $vagas);
     $sucess = true;

 }
?>


<div class="container-fluid">
    <div class="row  mt-5 mx-4">
    <?php
    if(isset($sucess)){
        echo '<div class="alert alert-success col-md-4" role="alert class="sucess">
        Turma cadastrada com sucesso!';
    }
    ?>
</div>
    <h1 class="col-md-9">Cadastrar Turma</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form class="mx-4 mt-2" action="cadastrarTurma.php" method="post">
                <div class="mb-3">
                    <label for="desc" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="desc" name="desc" required>
                </div>
                <div class="mb-3">
                    <label for="ano" class="form-label">Ano</label>
                    <input type="number" min="1970" max="2050" name="ano" class="form-control" id="ano" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="vagas">Vagas</label>
                    <input type="number" class="form-control" id="vagas" name="vagas" required>
                </div>
                <button type="submit" class="btn btn-primary cadastrar">Cadastar</button>
                </scri>
            </form>
        </div>
    </div>
</div>