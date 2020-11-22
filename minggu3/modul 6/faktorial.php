<!DOCTYPE html>
<?php
function faktorial($num)
{
    if ($num == 0) {
        return 1;
    } else {
        return $num * faktorial($num - 1);
    }
}
?>
<h1>Penghitungan Faktorial</h1>
<form method="post">
    <label>Bilangan: </label>
    <input type="number" name="bilangan" min="0">
    <button type="submit" name="kirim">submit</button>
</form><br>
<?php
if (isset($_POST['kirim'])) {
    $num = $_POST['bilangan'];
    echo "faktorial (" . $num . ") = " . faktorial($num);
}
?>