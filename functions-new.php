<?php
function makeNav($conn){
      $sql = "SELECT pagename FROM test.content";
      $result = $conn->query($sql);
      echo "<ul>";
      while ( $row = $result->fetch_assoc() ) {
        echo "<li><a href='index.php?page=" . $row['pagename'] . "'>" .$row['pagename']. "</a></li>";
      }
      echo "</ul>";
    } // end of makeNav function

function makeContent($conn, $thisPageName){
    $sql = "SELECT * FROM test.content WHERE pagename = '$thisPageName'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "<p>" . $row['pagetitle'] . "</p>";
    echo "<p>" . $row['pagename'] . "</p>";
    echo $row['pagecontent'];
    } // end of makeContent function

function makeTitle($conn, $thisPageName){
    $sql = "SELECT * FROM test.content WHERE pagename = '$thisPageName'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['pagename'];
} // end of makeTitle function