<?php
session_start();
session_destroy();//ending the session variables
// if (!isset($_SESSION['varun_vote'])) {
//     $_SESSION['varun_vote']=0;
// }

// if (!isset($_SESSION['thakur_vote'])) {
//     $_SESSION['thakur_vote']=0;
// }
// if($_SERVER['REQUEST_METHOD'] == "POST"){
// if (isset($_POST['selected'])) {
//     $selectedOption = $_POST['selected'];
//     if ($selectedOption ==  '1') {
//         ++$_SESSION['varun_vote'];
//         $count="varun=" . $_SESSION['varun_vote'];
//         header('Content-Type: application/json');
//         echo json_encode($count);
//     } elseif ($selectedOption == '2') {
//         ++$_SESSION['thakur_vote'];
//         $count=$_SESSION['thakur_vote'];
//         header('Content-Type: application/json');
//         echo json_encode($count);
//     }
//  }
// }
?>
