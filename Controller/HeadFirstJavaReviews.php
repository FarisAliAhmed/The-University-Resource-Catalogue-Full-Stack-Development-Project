<?php
require_once "../View/HeadFirstJavaReviews_View.php";
?>

<?php
function ResourceType($conn)
{
  $sql = "SELECT * FROM Resources WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceType'];
    }
  }
}

function ResourceTitle($conn)
{
  $sql = "SELECT * FROM Resources WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceTitle'];
    }
  }
}

function ResourceImage($conn)
{
  $sql = "SELECT * FROM Resources WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<img src="data:image;base64,' . base64_encode($row['ResourceImage']) . '" alt = "resource image">';
    }
  }
}

?>