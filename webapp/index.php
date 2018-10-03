<?php

include_once 'includes/db.inc.php';
include_once 'includes/header.php';
include_once 'includes/landing_index.php';
include_once 'includes/footer.php';

if(isset($_POST["submit-comment"])){
  if(isset($_POST["comment"]) && is_string($_POST["comment"]) && (trim($_POST["comment"]) != "")){
    $comment = mysqli_real_escape_string($conn, htmlspecialchars($_POST["comment"]));
    $sql_query = "INSERT INTO comments (comment) VALUES (\"$comment\")";
    if(mysqli_query($conn, $sql_query)){
      echo "<h1 class=\"container\">Data inserted.</h1>";
    }else{
      mysqli_close($conn);
      exit("<h1 style=\"margin: 100px;\">Something went wrong :/</h1>");
    }
  }else{
    mysqli_close($conn);
    exit("<h1 style=\"margin: 100px;\">Something went wrong :/</h1>");
  }
  // SHOW COMMENTS
  $sql_query = "SELECT * FROM comments";
  if ($result = mysqli_query($conn, $sql_query)){
    echo "<h2 class=\"container\">Comments:</h2>";
    echo "<ul class=\"container\">";
    while($line = mysqli_fetch_assoc($result)){
      echo "<li>".htmlspecialchars($line["id"]).": ".htmlspecialchars($line["comment"])."</li>";
    }
    echo "</ul>";
  }else{
    mysqli_close($conn);
    exit("<h1 style=\"margin: 100px;\">Something went wrong :/</h1>");
  }
}else{
  mysqli_close($conn);
  exit();
}
mysqli_close($conn);
