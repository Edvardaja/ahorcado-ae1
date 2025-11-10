<?php session_start(); $p = $_SESSION['palabra'] ?? ''; session_destroy(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Has perdido</title>
</head>
<body>
  <h1>😞 ¡Ánimo!</h1>
  <p>Lo siento, has perdido. La palabra era: <b><?php echo htmlspecialchars($p); ?></b></p>
  <a href="index.php"><button>Intentarlo de nuevo</button></a>
</body>
</html>
