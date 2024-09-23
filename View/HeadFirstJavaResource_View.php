<?php
include_once("../Model/dbAccess.php");
date_default_timezone_set('Europe/London');
include("../Controller/HeadfirstJavaResource.php");
include("../Model/Reviews.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>The Kingston University Resource Catalogue</title>
  <meta charset="utf-8">
  <meta name="author" content="KURC">
  <link rel="stylesheet" type="text/css" href="../View/css/HeadFirstJavaResource.css">

</head>

<body>

  <nav class="navbar">
    <a href="https://kunet.kingston.ac.uk/k1914403/FYP/Controller/LandingPage.php" class="nav-logo">KURC</a>
    <ul>
      <li><a href="javascript:history.back()">Back</a></li>
      <li><a href="https://kunet.kingston.ac.uk/k1914403/FYP/Controller/CoursePage.php">Courses</a></li>
      <li><a href="https://canvas.kingston.ac.uk/">Canvas</a></li>
    </ul>
  </nav>

  <div class="card-wrapper">
    <div class="card">
      <!-- left image side -->
      <div class="resource-img">
        <?php ResourceImage($conn); ?>
      </div>
      <!-- right information side -->
      <div class="resource-content">
        <h2 class="resource-title"><?php ResourceTitle($conn); ?></h2>
        <a class="resource-type"><?php ResourceType($conn); ?></a>


        <div class="uploader">
          <p class="uploaded-by">Uploaded by: </p>
          <p class="uploader-name"><?php LecturerName($conn); ?></p>
        </div>

        <div class="resource-details">
          <h2>Lecturer Comments: </h2>
          <p><?php LecturerComments($conn); ?></p>
          <ul>
            <li>Avaialble at:</li>
            <li><a href=<?php ResourceLink($conn); ?>> <?php ResourceLocation($conn); ?> </a> <span> <?php ResourcePrice($conn); ?></span></li>
            <li><a href=<?php ResourceLink2($conn); ?>> <?php ResourceLocation2($conn); ?> </a> <span><?php ResourcePrice2($conn); ?></span></li>
            <li><a href=<?php ResourceLink3($conn); ?>> <?php ResourceLocation3($conn); ?> </a> <span><?php ResourcePrice3($conn); ?></span></li>
          </ul>
          <h2>Leave a Review: </h2>
        </div>

        <?php ReviewForm($conn); ?>

      </div>

    </div>

  </div>


</body>

</html>