<?php include 'header.php'; ?>
<?php include 'class/Alunos.php'; ?>
<?php include 'class/Turmas.php'; ?>
<?php include 'class/Matricula.php'; ?>

<div class="container-fluid">
    <div class="row col-md-6  mt-5 mx-4">
        <h1 class="col-md-9">Relatório</h1>
            <form action="chamada.php" method="post">
                <label class="mt-3" for="alunos">Escolha uma Turma</label>
                <select class="form-select" name="idturma" aria-label="Default select example">
                    <?php
                        $turma = new Turma();
                        $r = $turma->listarTurma();
                    
                        while ($dados=mysqli_fetch_array($r)){
                            $id = $dados['idturma'];
                            echo "<option value= $id>" .$dados['descricao'] .'</option>';
                        }       
                    ?>
                </select>   
                <button type="submit" class="btn btn-primary cadastrar mt-3 col-md-3">Gerar relatório</button>    
            </form>
        </div>
    </div>
</div>