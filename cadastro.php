<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta .name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/cadastro.css" />
    <title>Cadastro do Usuário</title>
  </head>
  <body>
    <form class="campoCadastro">
      <h2>Insira seus dados</h2>
      <div class="inputBox">
        <input type="text" name="nome" id="nome" class="nome formC" required>
        <label for="nome" class="labelInput">Nome Completo</label>
      </div>
      <div class="inputBox">
        <input type="email" name="emailC" id="email" class="emailC formC" required>
        <label for="email" class="labelInput">Seu email</label>
      </div>
      <div class="inputBox">
        <input type="password" name="senhaC" id="senha" class="senhaC formC" required>
        <label for="senha" class="labelInput">Sua senha</label>
      </div>
      <a href="index.html"
        ><input type="button" value="Cadastrar-se" class="btCadastro"
      /></a>
    </form>
    <script src="JS/script.js"></script>
  </body>
</html>
