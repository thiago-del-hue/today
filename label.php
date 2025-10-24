<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>FormulárioCadatral</title>
      <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #83a4d4, #b6fbff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffffcc;
            backdrop-filter: blur(8px);
            border-radius: 12px;
            padding: 30px 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            width: 320px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        label {
            font-weight: 600;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: 0.3s;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.03);
        }

        @media (max-width: 400px) {
            form {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
 

</head>
<body>
     <h2>Formulário  De Notas 📒</h2>
     <form action="momy.php?campanha=voltaasaulas&versao=1.0" method="post">
     <label>Nome do Aluno:</label><br>
     <input type="nome" name="Nome" required><br><br>
     <label>Idade:</label><br>
      <input type="number" min="0" step="1" name="Idade" required><br><br>
      <label>Turma:</label><br>
      <input type="turma" name="Turma" required><br><br>
      <label>NotaI</label>
      <input type="number" name="Nota1" min="0" step="0.01" required><br><br>
      <label>NotaII</label>
      <input type="number" name="Nota2" min="0" step="0.01" required><br><br>
     <input type="submit" value="Media Final do Aluno">
  
     </form>
    
     
</body>
</html>
