<?php
include "db.php";

//profanity filter
$badwords = file('badwords');
print_r($badwords);
   foreach ($badwords as $k)
    {
echo "<br> k= {$k} q={$_GET["q"]}<br>";
$pattern = '/'.substr($k, 0, -2).'/i';
echo "<br>{$pattern}<br>";
        if(preg_match($pattern,$_GET["q"])) {
        	header("Location: cantaccept.html");
               die();
        }
    }


$z=addslashes($_GET["q"]);
$sql = "INSERT INTO qs (q) VALUES ('{$z}')";

if (mysqli_query($conn, $sql)) {
    header("Location: qsubmitted.html");
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   header("Location: oops.html");
}


mysqli_close($conn);
?>	