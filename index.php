<?php
require_once("connect.php");
require_once("functions-new.php");
$thisPageName = $_GET["page"] ?? "Home";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php makeTitle($conn, $thisPageName); ?></title>
</head>
<body>
  <nav>
    <?php
      makeNav($conn);
    ?>
  </nav>
  <section>
    <div>
        <?php
          makeContent($conn, $thisPageName);
        ?>
    </div>
  </section>
</body>
</html>