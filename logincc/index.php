<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de login em HTML e CSS</title>
  <link rel="stylesheet" href="style.css"> 
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>

<body>

  <div class="wrapper">
    <form action="">
      <h1>Login</h1>

      <div class="input-box">
        <input type="text" placeholder="username" 
        required> <i class="bx bxs-user"></i>
      </div>
      
      <div class="input-box">
        <input type="password" 
        placeholder="Senha" required>
        <i class="bx bxs-lock-alt"></i>
      </div> 

      <div class="remmember-forgot">
        <label> <input type="checkbox">Lembrar Login</label>
        <a href="#">Esqueceu a senha?</a>
      </div>

      <button type="submit" class="btn">Login</button>

      <div class="register-link">
        <p>Não tem uma conta? <a 
          href="#"> Criar Conta </a></p>
      </div>

      <?php
        // Inclua o arquivo de conexão com o banco de dados
        include 'banco_P_Web.php';

    // Verifique se a conexão foi bem-sucedida
    if($db){
    // Prepare a consulta SQL para obter os dados
    $query = "SELECT username, password FROM users";

    // Execute a consulta SQL
    $result = $db->query($query);

    // Percorra cada linha do resultado
    while ($row = $result->fetchArray()) {
        echo "<tr>";
        echo "<td>". $row['username'] . "</td>";
        echo "<td>". $row['password']. "</td>";
        echo "</tr>";
        }
    } else {
         echo "Desculpe, não foi possível conectar ao banco de dados SQLite 'banco_P_Web'.";
        }
    ?>

     </form>
  </div>

</body>

</html>