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
      ["name" => "Book1", 
      "author" => "Mr. Capy", 
      "purchaseUrl" => "www.google1.com"],
      ["name" => "Book2", 
      "author" => "Mr. Capyy", 
      "purchaseUrl" => "www.google2.com"],
      ["name" => "Book3", 
      "author" => "Mr. Capyyy", 
      "purchaseUrl" => "www.google3.com"]
    ];
  ?>
  
  <ul>
    <?php foreach($books as $book) : ?>
      <li><a href="<?php echo $book["purchaseUrl"] ?>  ">
        <?php echo $book['name'] ?> (<?php echo $book["author"] ?>)
      </a><br>
    </li>
    <?php endforeach ?>
  </ul>
</body>
</html>