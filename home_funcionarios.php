<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
</head>
<body style="text-align: center;">
    <h1>Cadastro de Funcionários</h1>
    <form name="form1" method="post">
        <fieldset>
        <label for="">Nº REGISTRO</label><br>
        <input type="text" name="txt_n_registro"><br>
        <label for="">Nome do Funcionário</label><br>
        <input type="text" name="txt_nome_funcionario"><br>
        <label for="">Data de Admissão</label><br>
        <input type="date" name="txt_data_admissao"><br>
        <label for="">Cargo</label><br>
        <select name="txt_Cargo">
            <option value="Auxiliar_Administrativo">Auxiliar Administrativo</option>
            <option value="Analista_Suporte">Analista de Suporte</option>
            <option value="Analista_Projetos">Analista de Projetos</option>
            <option value="Gerente_Projetos">Gerente de Projetos</option>
            <option value="Programador_Jr">Programador Jr</option>
            <option value="Analista_Sistemas">Analista de Sistemas</option>
        </select><br>
        <label for="">Quantidade de Salários Mínimos</label><br>
        <input type="number" name="qtde_salarios"><br>
        <input type="submit" name="bt_incluir" value="Cadastrar" onclick="document.form1.action='gravar.php'">
        <a href="listagem.php">VISUALIZAR DEMONSTRATIVO DE PAGAMENTOS</a> 
    </fieldset>
    </form>
</body>
</html>