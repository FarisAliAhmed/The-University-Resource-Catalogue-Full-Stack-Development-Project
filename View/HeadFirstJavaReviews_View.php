<?php
include_once("../Model/dbAccess.php");
date_default_timezone_set('Europe/London');
include("../Controller/HeadfirstJavaReviews.php");
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

        <div class="resource-details">
          <div class="commentsection">
            <h1> Student Reviews </h1>
            <?php getReviewsHeadFirstJava($conn); ?>

          </div>

        </div>


      </div>

    </div>

  </div>


</body>

</html>