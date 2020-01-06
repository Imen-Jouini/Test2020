<?php 
  $result = null;
  if (isset($_GET['submitted']))
    $result = 'Premier Exemple AJAX';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>AJAX</title>
</head>
<body>
    <h1>Formation AJAX</h1>
    <form>
      <button name="submitted">Cliquer</button>
    </form>
    
    <div id="section">
      <p> <?= $result ?></p>    
    </div>
</body>
</html>