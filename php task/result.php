<?php 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $f=$_POST['first'];
    $l=$_POST['last'];
    $m=$_POST['m_num'];
$output="first name= ".$f." last name=".$l." number=".$m;
// $output=[
//     'namefirst' => $f,
//     'namelast' => $l,
//     'phonenumber' => $m
// ]
echo json_encode($output); 
}
?>
