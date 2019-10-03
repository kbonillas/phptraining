<?php
function makeNav($conn, $loggedIn){
    // this creates the navigation from the navigation table
      $sql = "SELECT pagename, pagetitle FROM test.navigation";
      $result = $conn->query($sql);
      echo "<ul>";
      while ( $row = $result->fetch_assoc() ) {
        echo "<li><a href='" . $row['pagename'] . "'>" .$row['pagetitle']. "</a></li>";
      }
      if ($loggedIn == "not logged in"){
        echo "<li><a href='login.php'>Log In</a></li>";
      }
    echo "</ul>";
} // end of makeNav function

function makeContent($conn, $thisPageName){
    /* 
    this creates the content from the content 
    table based on the supplied $thisPageName variable
    it will then loop through all the matching content
    records and export those individually 
    */
    $sql = "SELECT * FROM test.content WHERE pagename = '$thisPageName'";
    $result = $conn->query($sql);
   while( $row = $result->fetch_assoc() ) {
       echo $row['contenttitle'];
       echo $row['content'];
   }
} // end of makeContent function

function makeTitle($conn, $thisPageName){
    /* 
    this will echo out the current page title
    from the content table base on the page name
    in $thisPageName
    */
    $sql = "SELECT * FROM test.content WHERE pagename = '$thisPageName'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['pagename'];
} // end of makeTitle function