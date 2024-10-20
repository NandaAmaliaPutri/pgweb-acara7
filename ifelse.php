<!DOCTYPE html>
<html>
<body>

<?php
// IF
// $t = 21;

// if ($t < 20) {
//   echo "SEMANGAT!";
// }


// IF ELSE
// $t = date("7");

// if ($t < "9") {
//   echo "Semangat";
// } else {
//   echo "SUKSES SELALU!";
// }


// IF ELSE IF
$t = date("21");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</body>
</html>
