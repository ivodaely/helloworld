<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "connect.php";

if (isset($_POST['but_add'])) {
    $compid = $_GET['id'];

    if (isset($_POST['val'])) {
        $scaleQuestions = $_POST['qu']; // Array of scale questions
        $scaleValues = $_POST['val']; // Array of selected values

        foreach ($scaleQuestions as $qid => $question) {
            $value = $scaleValues[$qid];

            // Prepare and execute the INSERT query for scale questions
            $insertQuery = "INSERT INTO tr_feedback2 (compid, question, value) VALUES (?, ?, ?)";
            $stmt = $con->prepare($insertQuery);
            $stmt->bind_param("ssi", $compid, $question, $value);

            $stmt->execute();
        }

        $qx = "SELECT AVG(value) AS val FROM tr_feedback2 WHERE compid = ?";
        $stmt = $con->prepare($qx);
        $stmt->bind_param("s", $compid);
        $stmt->execute();
        $result = $stmt->get_result();
        $wx = $result->fetch_array();
        $rate = $wx['val'];

        $qup = "UPDATE tr_complaint SET rate = ? WHERE compid = ?";
        $stmt2 = $con->prepare($qup);
        $stmt2->bind_param("ss", $rate, $compid);
        $stmt2->execute();
    }

    // Handling essay questions
    if (isset($_POST['suggest'])) {
        $essayResponse = $_POST['suggest']; // Essay response

        // Prepare and execute the INSERT query for essay response
        $insertQuery = "INSERT INTO tr_feedback2 (compid, question, essay) VALUES (?, ?, ?)";
        $stmt = $con->prepare($insertQuery);
        $essayQuestion = "Essay Question"; // Provide a variable for the question
        $stmt->bind_param("sss", $compid, $essayQuestion, $essayResponse);

        $stmt->execute();
    }
}

header("Location: feedback_tq.php");
?>
