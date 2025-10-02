<?php
include 'conexao.php';

if (!empty($_POST['busca_nome'])) {
    $busca = $_POST['busca_nome'];
    $sql = mysqli_query($conecta_db, "SELECT * FROM tb_funcionarios WHERE Nome_Funcionario LIKE '$busca%' ORDER BY Nome_Funcionario ASC");
} else {
    $sql = mysqli_query($conecta_db, "SELECT * FROM tb_funcionarios ORDER BY Nome_Funcionario ASC");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body style="text-align: center;">
    <h1>DEMONSTRATIVO DE RENDIMENTOS MENSAIS</h1>
    <center>
        <form name="form_lista" method="POST" action="listagem.php">
            <label>Digite um Nome: </label>
            <input type="text" name="busca_nome">
            <input type="submit" value="FILTRAR">
        </form>

        <table border="1" align="center">
            <tr>
                <th>Nº REGISTRO</th>
                <th>NOME DO FUNCIONARIO</th>
                <th>DATA ADMISSÃO</th>
                <th>CARGO</th>
                <th>SALÁRIO BRUTO</th>
                <th>INSS</th>
                <th>SALÁRIO LÍQUIDO</th>
                <th colspan="2">APAGAR</th>
            </tr>
            <tr>
               <?php 
                    while($linha = mysqli_fetch_assoc($sql)){
                    
               ?> 
               <td><?php echo $linha['N_Registro']; ?></td>
               <td><?php echo $linha['Nome_Funcionario']; ?></td>
               <td><?php echo $linha['Data_admissao']; ?></td>
                <td><?php echo $linha['Cargo']; ?></td>
                <td><?php echo "R$ ".number_format($linha['Salario_bruto'], 2, ',', '.'); ?></td>
                <td><?php echo "R$ ".number_format($linha['INSS'], 2, ',', '.'); ?></td>
                <td><?php echo "R$ ".number_format($linha['Salario_liquito'], 2, ',', '.'); ?></td>
               <td>
                <a href="excluir.php?id=<?php echo $linha['N_Registro']; ?>" onclick="return confirm('Tem certeza que deseja excluir este funcionário?');">
                <img src="deletar_usuario.png" alt="Deletar">
                </a>
               </td>
            <tr>

            <?php }
            echo "<br>";
            echo "<center>";
            echo "<a href=\"home_funcionarios.php\">RETORNAR</a>"

            ?>

        </table>
    </center>
</body>
</html>