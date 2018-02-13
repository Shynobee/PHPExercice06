<form action="algo.php" method="post">
    <input name="un" type="number">
    <input name="deux" type="number">
    <input type="submit" namespace="ok">
</form>

<?php 
$un = $_POST['un'];
$deux = $_POST['deux'];

if($un * $deux > 0) {
    echo('positive    ');
} elseif($un * $deux < 0) {
    echo('negative    ');
} elseif($un * $deux === 0) {
    echo('nul    ');
} else {
    echo('isNaN !?');
}
?>

<form action="algo.php" method="post">
    <input type="number" name="trois">
    <input type="submit" namespace="ok">
</form>
<?php
$trois = $_POST['trois'];

if($trois < 0) {
    echo('negative');
} elseif($trois > 0) {
    echo('positive');
} elseif($trois == 0) {
    echo('nul');
}
?>

<h3>Veuillez indiquer le nombre de copie</h3>
<form action="algo.php" method="post">
    <input type="number" name="quatre">
    <input type="submit" namespace="ok">
</form>

<?php 

$quatre = $_POST['quatre']; 
$results = NULL;
$stpalier = 0.1;
$ndpalier = 0.09;
$rdpalier = 0.08;

if($quatre <= 10) {
    $results = $quatre * $stpalier;
} elseif($quatre > 10 && $quatre <= 30) {
    $results = 10 * $stpalier + ($quatre - 10) * $ndpalier;
} elseif($quatre > 30) {
    $results = 10 * $stpalier + 20 * $ndpalier + ($quatre - 30) * $rdpalier;
} 
echo "Le prix total est :" . $results;

?>