<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Recomended Books</h1>

  <?php 
    $books = [
      "Essentialism1",
      "Essentialism2",
      "Essentialism3"
    ];
  ?>
  <ul>
    <?php foreach($books as $book){
      echo "<li>$book</li>";
    } ?>
<br>
    <?php foreach($books as $book) : ?>
        <li><?php echo $book; ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>