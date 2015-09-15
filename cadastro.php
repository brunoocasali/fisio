<?php 
    require_once "conexao.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="cadastro">
  <form method="post" action="?go=cadastrar">
    <table>
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome" class="txt" maxlength="15"/></td>
      </tr>
      <tr>
        <td><input type="submit" value="Cadastrar" id="btnCad"></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
<?php

if(@$_GET['go'] == 'cadastrar'){
    $nome = $_POST['nome'];
 
    if(empty($nome)){
        echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
    } else{
        $query1 = mysql_num_rows(mysql_query("SELECT * FROM CADASTRO WHERE NOME = '$nome'"));
    
        if($query1[0] == 1){
        echo "<script>alert('Já existe!'); history.back();</script>";
    } else {
            mysql_query("insert into cadastro (nome) values ('$nome')");
            echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=cadastro.php'>";
        }
    }
}
?>