<?php
function setReviewsHeadFirstJava($conn)
{
    if (isset($_POST['reviewSubmit'])) {
        $ResourceTitle = $_POST['ResourceTitle'];
        $UserID = $_POST['UserID'];
        $Date = $_POST['Date'];
        $Review = $_POST['Review'];
        if (empty($Review)) {
            alert("Please Enter a Review!");
        } else {
            $sql = "INSERT INTO Reviews (ResourceTitle, UserID, Date, Review) VALUES ('$ResourceTitle', '$UserID', '$Date', '$Review')";
            $result = $conn->query($sql);
        }
    }
}

function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

function getReviewsHeadFirstJava($conn)
{
    $sql = "SELECT * FROM Reviews WHERE ResourceTitle = 'Head First Java';";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment-box'><p>";
        echo $row['UserID'] . "<br>";
        echo $row['Date'] . "<br><br>";
        echo nl2br($row['Review']);
        echo "</p></div>";
    }
}
