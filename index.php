<?php 
$todos = [
  'clean the house',
  'go to market'
];

$todo1 = new stdClass();
$todo1->text = 'clean the house';
$todo1->hello = 'hello';

$todo2 = new stdClass();
$todo2->text = 'go to market';

$todos = [$todo1, $todo2];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

  <h2>All todos</h2>
  <ul>
    <?php foreach($todos as $todo): ?>
      <li><?= $todo->text ?></li>
    <?php endforeach; ?>

  </ul>
  
</body>
</html>