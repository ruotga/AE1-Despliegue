<?php
session_start();
if(!isset($_SESSION['finished'])){
    session_abort();
    header('Location: index.php?reset=1');
    exit;
}
$won = $_SESSION['won'];
$secret = $_SESSION['secret'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <div class="result">
        <?php if ($won): ?>
        <h3>¡Correcto! El número era <?= htmlspecialchars($secret) ?>.</h3>
        <?php else: ?>
        <h3>¡Has perdido! El número era <?= htmlspecialchars($secret) ?>.</h3>
        <?php endif; ?>
        <p><a href="index.php?reset=1"><button>Jugar otra vez</button></a></p>
    </div>
</body>
</html>

<?php
    unset($_SESSION);
?>