<?php
  require_once "connexionDB.php";
 
  if (isset($_POST['query'])) {
      $query = "SELECT * FROM users WHERE nom LIKE '%{$_POST['query']}%' LIMIT 10";
      $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {
        echo $res['nom']. "<br/>";
      }
    } else {
      echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          Aucun résultat
      </div>
      ";
    }
  }
?>
