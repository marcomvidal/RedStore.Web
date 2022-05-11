<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People!</title>
</head>
<body>
  <?php
    $dsn = "pgsql:host=db;dbname=RedStore";
    $options = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, 'postgres', 'postgres', $options);
    $statement = $pdo->query('SELECT * FROM person');
    $people = $statement->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <h1>People!</h1>
  <ul>
    <?php foreach ($people as $person): ?>
      <li><?= $person['name']; ?>
    <?php endforeach; ?>
    </ul>
</body>
</html>