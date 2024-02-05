<?php
include 'database.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id = $_POST["idval"];
}
if ($id)
{
    $sql="delete from forminfo where id=$id";
    if(mysqli_query($conn,$sql))
    {
        echo "record details deleted";
    }
    else
    {
            echo "error here";
    }
}
else
{
    echo "id not present";
}

?>