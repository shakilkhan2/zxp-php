<?php
// for loop
for ($i = 1; $i <= 30; $i = $i * 3) {
    echo $i;
    if ($i < 30) {
        echo ", " . '<br>';
    }
}

for ($i= 10; $i >= 0; $i--) { 
    echo $i;
    if ($i >0) {
        # code...
        echo ', ' . '<br>';
    }
}

for ($i = 1; $i <= 191; $i += 2) {
    echo $i;
    if ($i < 191) {
        echo ', ' . '<br>';
    }
}


// while loop
$counter = 1;
while ($counter <= 5) {
    echo "Iteration $counter <br>";
    $counter++;
}




?>