
<?php

$fruits = array('Banana', 'Orange', 'Mango', 'Apple', 'Strawberry');
$num_fruits = count($fruits);

echo "<ol>"; 

for ($i = 0; $i < $num_fruits; $i++) { 
    echo "<li>$fruits[$i]</li>"; 
}

echo "</ol>"; 

?>
