<?php
include_once("../Model/dbAccess.php");
include("../Controller/HeadFirstJavaResources.php");
include("../Controller/Prog3Resources.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>The Kingston University Resource Catalogue</title>
    <meta charset="utf-8">
    <meta name="author" content="KURC">
    <link rel="stylesheet" type="text/css" href="../View/css/Prog3Resources.css">

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
    <div class="resources">
        <div class="container">
            <h1 class="module-title">Programming III Resources</h1>

            <div class="resource-items">

                <!-- Resource 1 -->
                <div class="resource">
                    <div class="resource-content">
                        <div class="resource-img">
                            <a href="HeadFirstJavaResource.php">
                                <img src="../View/css/images/HeadFirstJava.jpg" alt="resource image">
                        </div>
                    </div>

                    <div class="resource-info">
                        <div class="resource-info-top">
                            <h2 class="resource-type">Textbook</h2>
                        </div>
                        <a href="#" class="resource-name">Head First Java</a>
                        <p class="uploaded-by">Uploaded by</p>
                        <p class="uploaded-by">Faris Ahmed</p>
                    </div>

                    <div class="banner-info">
                        <h2 class="resource-type-banner">Textbook</h2>
                    </div>
                </div>
                <!-- Resource 1 -->

                <!-- Resource 2 -->
                <div class="resource">
                    <div class="resource-content">
                        <div class="resource-img">
                            <img src="../View/css/images/1200px-Apache_NetBeans_Logo.png" alt="product image">
                        </div>
                    </div>

                    <div class="resource-info">
                        <div class="resource-info-top">
                            <h2 class="resource-type">Software</h2>
                        </div>
                        <a href="#" class="resource-name">NetBeans</a>
                        <p class="uploaded-by">Uploaded by</p>
                        <p class="uploaded-by">Faris Ahmed</p>
                    </div>

                    <div class="banner-info">
                        <h2 class="resource-type-banner">Software</h2>
                    </div>
                </div>
                <!-- Resource 2 -->

                <!-- Resource 3 -->
                <div class="resource">
                    <div class="resource-content">
                        <div class="resource-img">
                            <img src="../View/css/images/Visual_Studio_Code_1.35_icon.png" alt="product image">
                        </div>
                    </div>

                    <div class="resource-info">
                        <div class="resource-info-top">
                            <h2 class="resource-type">Software</h2>
                        </div>
                        <a href="#" class="resource-name">Visual Studio Code</a>
                        <p class="uploaded-by">Uploaded by</p>
                        <p class="uploaded-by">Faris Ahmed</p>
                    </div>

                    <div class="banner-info">
                        <h2 class="resource-type-banner">Software</h2>
                    </div>
                </div>
                <!-- Resource 3 -->

                <!-- Resource 4 -->
                <div class="resource">
                    <div class="resource-content">
                        <div class="resource-img">
                            <img src="../View/css/images/1024px-Github-desktop-logo-symbol.png" alt="product image">
                        </div>
                    </div>

                    <div class="resource-info">
                        <div class="resource-info-top">
                            <h2 class="resource-type">Software</h2>
                        </div>
                        <a href="#" class="resource-name">GitHub Desktop</a>
                        <p class="uploaded-by">Uploaded by</p>
                        <p class="uploaded-by">Faris Ahmed</p>
                    </div>

                    <div class="banner-info">
                        <h2 class="resource-type-banner">Software</h2>
                    </div>
                </div>
                <!-- Resource 4 -->

            </div>
        </div>
    </div>
</body>

</html>