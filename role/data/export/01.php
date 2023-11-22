<?php 

    require_once '../../../config/config.php';

    $stmt = $conn->query("SELECT * FROM vote01");

    $stmt->execute();
    date_default_timezone_set("America/New_York");
    $time = date("Y-m-d h:i:sa");
    $html='<table><tr><td>id</td><td>ids</td><td>time</td></tr>';

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $html.='<tr><td>'.$row['id'].'</td><td>'.$row['ids'].'</td><td>'.$row['time'].'</td><tr>';
    }
    $html.='</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=reportvoteno01.xls ');
    echo $html;
    echo "Download when ($time)";

?>