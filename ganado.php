<?php session_start(); $p = $_SESSION['palabra'] ?? ''; session_destroy(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>¡Has ganado!</title>
</head>
<body>
  <h1>🎉 ¡Enhorabuena!</h1>
  <p>Has ganado 🙂 La palabra era: <b><?php echo htmlspecialchars($p); ?></b></p>
  <a href="index.php"><button>Jugar de nuevo</button></a>
</body>
</html>
