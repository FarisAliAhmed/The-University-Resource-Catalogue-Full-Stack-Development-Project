<?php
require_once "../View/HeadFirstJavaResource_View.php";
?>

<?php
function LecturerComments($conn)
{
  $sql = "SELECT * FROM LecturerComments WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['Comments'];
    }
  }
}

function LecturerName($conn)
{
  $sql = "SELECT * FROM LecturerComments WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['LecturerName'];
    }
  }
}

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

function ResourceLocation($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceLocation'];
    }
  }
}

function ResourceLink($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceLink'];
    }
  }
}

function ResourcePrice($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourcePrice'];
    }
  }
}

function ResourceLocation2($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceLocation2'];
    }
  }
}

function ResourceLink2($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceLink2'];
    }
  }
}

function ResourcePrice2($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourcePrice2'];
    }
  }
}

function ResourceLocation3($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceLocation3'];
    }
  }
}

function ResourceLink3($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourceLink3'];
    }
  }
}

function ResourcePrice3($conn)
{
  $sql = "SELECT * FROM ResourceAcquisition WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['ResourcePrice3'];
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

function HeadFirstJavaLecturerName($conn)
{
  $sql = "SELECT * FROM LecturerComments WHERE ResourceTitle = 'Head First Java';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['LecturerName'];
    }
  }
}

function ReviewForm($conn)
{
  echo "<form method='POST' action='" . setReviewsHeadFirstJava($conn) . "'>
<input type = 'hidden' name ='ResourceTitle' value='Head First Java'>
<input type = 'hidden' name ='UserID' value='Anonymous'>
<input type = 'hidden' name ='Date' value='" . date('Y-m-d H:i:s') . "'>
<textarea name='Review'></textarea><br>
<button type='submit' name='reviewSubmit'>Submit Review</button>
<button type='submit' name='reviewCheck'><a style='text-decoration: none; color:white' href='../Controller/HeadFirstJavaReviews.php'>Check Reviews</button>
</form>";
}

?>