<!DOCTYPE html>
<html>
<body>

<?php
$food = array("nasi padang", "bakso", "nasi kuning", "salad", "sushi");  
$snack = array("dimsum", "mochi", "burger", "kebab", "kentang");  
$drink = array("kopi", "air mineral", "es teh", "chatime", "es jeruk");  

echo "<table border='1'>";
echo "<tr><th>Food</th><th>Snack</th><th>Minuman</th></tr>";
for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>$food[$i]</td><td>$snack[$i]</td><td>$drink[$i]</td></tr>";
}
echo "</table>";
?>  

</body>
</html>
