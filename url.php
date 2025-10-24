<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>FormulárioCadatral</title>
  
</head>
<body>
     <h2>Formulário Notas 📒</h2>
     <form action="label.php" method="POST">
     <label>Nome do Aluno:</label><br>
     <input type="nome" name="Nome" required><br><br>
     <label>Idade:</label><br>
      <input type="idade" name="Idade" required><br><br>
      <label>Turma :</label><br>
      <input type="turma" name="Turma" required><br><br>
      <label>Nota I:</label><br>
      <input type="nota1" name="Nota1" required><br><br>
      <label>Nota II:</label><br>
      <input type="nota2" name="Nota2" required><br><br>
     <input type="submit" value="Enviar">
  
     </form>
     <?php
     if ($_SERVER["REQUEST_METHOD"]== "POST"){
          $nomeAluno= $_POST["Nome"];
          $idade= $_POST["Idade"];
          $turma= $_POST["Turma"];
          $nota1= $_POST["Nota1"];
          $nota2= $_POST["Nota2"]

     echo"<h3>📒Dados Recebidos(POST)</h3>";
     echo"Nome: $nomeAluno<br>";
     echo"Idade: $idade<br>";
     echo"Turma:$turma<br>";
     echo"Nota1:$nota1<br>";
     echo"Nota2:$nota2<br>";
     }
     ?>
     
</body>
</html>
