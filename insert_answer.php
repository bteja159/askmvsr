<?php
include "db.php";
$z = addslashes($_GET["a"]);
$sql = "INSERT INTO `as` (qid,a) VALUES ({$_GET["qid"]},'{$z}')";


echo $sql;

if (mysqli_query($conn, $sql)) {
    header("Location: .");
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   header("Location: oops.html");
}

mysqli_close($conn);




include "db.php";

$sql = "update qs set count=count+1 where id={$_GET["qid"]}";

if (mysqli_query($conn, $sql)) {
    header("Location: thank.html");
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   header("Location: oops.html");
}


mysqli_close($conn);

?>