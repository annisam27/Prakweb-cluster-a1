<h1> menampilkan bilangan prima dari 1-50</h1>

<?php
for ($i = 1; $i < 50; $i++) {
    $a = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $a++;
        }
    }
    if ($a == 2) {
        echo $i . '<br>';
    }
}
?>