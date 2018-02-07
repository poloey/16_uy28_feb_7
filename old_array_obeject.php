<?php
$todos = [
  "go to market",
  "clean the house"
];

$todo1 = new stdClass();
$todo1->text = 'go to market';
$todo1->complete = true;
$todo2 = new stdClass();
$todo2->text = 'clean the house';
$todo2->complete = false;
$todos = [$todo1, $todo2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <style>
    .mark {
      text-decoration: line-through;
    }
  </style>
</head>
<body class="bg-info">
  <div class="container bg-light p-5 mt-5">
    <h2>All todos</h2>
    <?php for($i = 0; $i < count($todos); $i++): ?>
      <li class="list-group-item mb-2 <?php echo $todos[$i]->complete ? 'mark' : ''; ?>"><?php echo $todos[$i]->text ?></li>
    <?php endfor; ?>
  </div>
</body>
</html>



