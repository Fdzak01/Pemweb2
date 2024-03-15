<?php  
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h1>Praktikum 1</h1>

<?php

$fruits = ["Banana","Avocado","Melon"];

echo $fruits[1];

echo "<ol>";
//looping dengan menggunakan foreach khusus untuk array dan mengaliaskan variabel sebelumnya
foreach($fruits as $fruit){
 echo "<li>" . $fruit . "</li>";
}
echo "</ol>"

?>
<?php require_once 'footer.html';
?>