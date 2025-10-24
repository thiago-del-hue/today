<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>FormulárioCadatral</title>
    <style>

     html, body {
          height: 100%;
          margin: 0;
          padding: 0;
     }

     body {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          background: linear-gradient(135deg, #6a11cb, #2575fc);
          background-attachment: fixed; /
          background-repeat: no-repeat;
          background-size: cover; /
          display: flex;
          justify-content: center;
          align-items: center;
          color: #333;
     }

     .container {
          background-color: rgba(255, 255, 255, 0.9);
          backdrop-filter: blur(10px);
          border-radius: 15px;
          box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
          padding: 40px 45px;
          width: 90%;
          max-width: 450px;
          text-align: center;
          animation: fadeIn 0.8s ease-in-out;
     }

     @keyframes fadeIn {
          from { opacity: 0; transform: translateY(-20px); }
          to { opacity: 1; transform: translateY(0); }
     }

     h2 {
          color: #2c3e50;
          margin-bottom: 20px;
     }

     .dados {
          text-align: left;
          margin-bottom: 20px;
          line-height: 1.6;
     }

     .aprovado {
          background-color: #d4edda;
          color: #155724;
          border: 1px solid #28a745;
          padding: 10px;
          border-radius: 6px;
          font-weight: bold;
          margin-bottom: 10px;
     }

     .reprovado {
          background-color: #f8d7da;
          color: #721c24;
          border: 1px solid #dc3545;
          padding: 10px;
          border-radius: 6px;
          font-weight: bold;
          margin-bottom: 10px;
     }

     .parametros {
          font-size: 14px;
          color: #444;
          background: #f4f4f4;
          padding: 8px;
          border-radius: 6px;
          margin-top: 15px;
     }

     footer {
          font-size: 12px;
          color: #555;
          margin-top: 20px;
          opacity: 0.7;
     }
</style>

</head>
<body>
      <?php
     if ($_SERVER["REQUEST_METHOD"]== "POST"){
          $nomeAluno= $_POST["Nome"];
          $idade= $_POST["Idade"];
          $turma= $_POST["Turma"];
          $nota1= $_POST["Nota1"];
          $nota2= $_POST["Nota2"];
          $media = ($nota1 + $nota2)/ 2;
            echo "Nome: $nomeAluno<br>";
            echo "Idade: $idade<br>";
            echo "Turma: $turma<br>";
            echo "Nota1: $nota1<br>";
            echo "Nota2: $nota2<br>";
     if ($media >= 6) {
        echo "Aluno aprovado! Média: $media <br>";
    } else {
        echo "Aluno reprovado! Média: $media<br>";
    }

}

    
     if(isset($_GET['campanha'])&& isset($_GET['versao'])){
          $campanha=$_GET['campanha'];
          $versao=$_GET['versao'];
          echo"$campanha<br>";
          echo"$versao<br>";
     }

     ?>
</body>
</html>