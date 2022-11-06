<?php include 'header.php'; ?>
<?php include 'class/Relatorio.php'; ?>

<?php
 if(isset($_POST['idturma'])){
     $idturma=$_POST['idturma'];
     $relatorio = new Relatorio();
     $chamada = $relatorio->chamada($idturma);
        
 }
?>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<div class="container-fluid text-center">
    <h3 class="mt-4">Relatório de chamadas</h3>
    <div class="row d-flex justify-content-center mt-4">
        <table class="col-md-6">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Chamada</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(isset($chamada))
            {
                while ($dados=mysqli_fetch_array($chamada))
                {
                $nome = $dados['nome'];
                $dataNascimento = $dados['dtNascimento'];
                echo "<tr>";
                echo "<td>";
                echo $nome;
                echo "</td>";
                echo "<td>";
                echo $dataNascimento;
                echo "</td>";
                echo "<td>";
                echo "</td>";
                echo "</tr>";
                    
                }       

            }         
        ?>
            </tbody>
        </table>
    </div>
</div>