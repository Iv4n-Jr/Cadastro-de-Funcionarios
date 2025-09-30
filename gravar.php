<?php
include 'conexao.php';

$N_Registro = $_POST["txt_n_registro"];
$Nome_Funcionario = $_POST["txt_nome_funcionario"];
$Data_admissao = $_POST["txt_data_admissao"];
$Cargo = $_POST["txt_Cargo"];
$QTDE_Salarios = $_POST["qtde_salarios"];
$Salario_bruto = $QTDE_Salarios * 1518.00;
$inss = 0.0;

// Calculo INSS

// Faixa 1: até R$ 1.412,00 – 7,5%
if ($Salario_bruto > 1412.00) {
    $inss += 1412.00 * 0.075;
} else {
    $inss += $Salario_bruto * 0.075;
}

// Faixa 2: R$ 1.412,01 até R$ 2.666,68 – 9%
if ($Salario_bruto > 2666.68) {
    $inss += (2666.68 - 1412.00) * 0.09;
} elseif ($Salario_bruto > 1412.00) {
    $inss += ($Salario_bruto - 1412.00) * 0.09;
}

// Faixa 3: R$ 2.666,69 até R$ 4.000,03 – 12%
if ($Salario_bruto > 4000.03) {
    $inss += (4000.03 - 2666.68) * 0.12;
} elseif ($Salario_bruto > 2666.68) {
    $inss += ($Salario_bruto - 2666.68) * 0.12;
}

// Faixa 4: R$ 4.000,04 até R$ 7.786,02 – 14%
if ($Salario_bruto > 4000.03) {
    $teto = 7786.02;
    $baseFaixa4 = min($Salario_bruto, $teto) - 4000.03;
    $inss += $baseFaixa4 * 0.14;
}

$salario_liquido = $Salario_bruto - $inss;

// consulta para verificar se já existe o Número do Registro
$sql = "SELECT * FROM tb_funcionarios WHERE N_Registro = '$N_Registro'";
$result = mysqli_query($conecta_db, $sql);

if (!$result) {
    die("Erro na consulta: " . mysqli_error($conecta_db));
}

if (mysqli_num_rows($result) > 0) {
    echo "<center>";
    echo "<hr>";
    echo "CONTA EXISTENTE!";
    echo "</hr>";	
} else {
    $insert = "INSERT INTO tb_funcionarios (N_Registro, Nome_Funcionario, Data_admissao, Cargo, QTDE_Salarios, Salario_bruto, INSS, Salario_liquito) VALUES ('$N_Registro', '$Nome_Funcionario', '$Data_admissao', '$Cargo', '$QTDE_Salarios', '$Salario_bruto', '$inss', '$salario_liquido')";
    if (mysqli_query($conecta_db, $insert)) {
        echo "<center>";
        echo "<hr>";
        echo "CONTA CADASTRADA";
        echo "</hr>"; 
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conecta_db);
    }
}
?>
