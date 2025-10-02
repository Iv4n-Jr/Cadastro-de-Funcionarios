<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $sql = "DELETE FROM tb_funcionarios WHERE N_Registro = $id";
    $result = mysqli_query($conecta_db, $sql);

    if ($result) {
        // Redireciona de volta para listagem
        header("Location: listagem.php");
        exit;
    } else {
        echo "Erro ao excluir: " . mysqli_error($conecta_db);
    }
} else {
    echo "ID não informado!";
}
?>
