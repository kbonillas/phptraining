<?php
session_start();
require_once("connect.php");
require_once("functions-new.php");
$loggedIn = $_SESSION['loggedin'] ?? "not logged in";
/*
this pulls the text from after 
the first / and sets it to an array
*/
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

/* 
this pulls the last item out of the uri array and sets
$thisPageName variable to that item
*/
$thisPageName = array_pop($uriSegments);

// this sets the pagename if none if provided in the url
if ($thisPageName == ""){
  $thisPageName = "index";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php // makeTitle($conn, $thisPageName); ?></title>
</head>
<body>
  <nav>
    <?php
      makeNav($conn, $loggedIn);
      echo "<p>" . $loggedIn . "</p>";
    ?>
  </nav>
  <section>
    <div>
        <?php
          // echo $thisPageName;
          makeContent($conn, $thisPageName);
        ?>
    </div>
  </section>
</body>
</html>