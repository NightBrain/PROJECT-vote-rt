<?php
include("../../config/config.php");
?>

<?php
$sql = "SELECT COUNT(*) as vote01 FROM vote01";

$query = $conn->prepare($sql);

$query->execute();

while($fetch = $query->fetch()){
    $no1 = $fetch['vote01'];
 } 
// ================================================
$sql = "SELECT COUNT(*) as vote02 FROM vote02";

$query = $conn->prepare($sql);

$query->execute();

while($fetch = $query->fetch()){
    $no2 = $fetch['vote02'];
 } 
// ================================================
$sql = "SELECT COUNT(*) as vote03 FROM vote03";

$query = $conn->prepare($sql);

$query->execute();

while($fetch = $query->fetch()){
    $no3 = $fetch['vote03'];
 } 
// ================================================
$sql = "SELECT COUNT(*) as vote04 FROM vote04";

$query = $conn->prepare($sql);

$query->execute();

while($fetch = $query->fetch()){
    $no4 = $fetch['vote04'];
 } 
// ================================================
$sql = "SELECT COUNT(*) as nonee FROM nonee";

$query = $conn->prepare($sql);

$query->execute();

while($fetch = $query->fetch()){
    $none = $fetch['nonee'];
 } 
// Simulate real-time data updates
$data = [];
for ($i = 0; $i < 1; $i++) {
    $data[] = $no1;
    $data[] = $no2;
    $data[] = $no3;
    $data[] = $no4;
    $data[] = $none;
}

echo json_encode($data);
?>
