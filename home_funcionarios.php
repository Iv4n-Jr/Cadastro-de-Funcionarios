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
        <fieldset style="text-align: left;">
        <div style="margin-top: 10px;">
        <label for="n_registro"><b>Nº REGISTRO</b></label>
        <input type="text" name="txt_n_registro" id="n_registro"><br>
        </div>
        <label for="nome_func"><b>Nome do Funcionário</b></label>
        <input type="text" name="txt_nome_funcionario" id="nome_func" style="width: 700px;">
        <label for="data_admissao"><b>Data de Admissão</b></label>
        <input type="date" name="txt_data_admissao" id="data_admissao"><br>
        </div>
        <div style="margin-top: 10px;">
        <label for="cargo"><b>Cargo</b></label>
        <select name="txt_Cargo" id="cargo">
            <option value="Auxiliar_Administrativo">Auxiliar Administrativo</option>
            <option value="Analista_Suporte">Analista de Suporte</option>
            <option value="Analista_Projetos">Analista de Projetos</option>
            <option value="Gerente_Projetos">Gerente de Projetos</option>
            <option value="Programador_Jr">Programador Jr</option>
            <option value="Analista_Sistemas">Analista de Sistemas</option>
        </select>
        <label for="quant_sal_min"><b>Quantidade de Salários Mínimos</b></label>
        <input type="number" name="qtde_salarios" id="quant_sal_min" min="1" max="500"><br>
        </div>
        <div style="text-align: center; margin-top: 10px;">
        <input type="submit" name="bt_incluir" value="Cadastrar" onclick="document.form1.action='gravar.php'">
        <a href="listagem.php">VISUALIZAR DEMONSTRATIVO DE PAGAMENTOS</a> 
        </div>
    </fieldset>
    </form>
</body>
</html>