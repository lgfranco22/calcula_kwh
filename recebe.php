<?php
if(isset($_POST['wh']) && !empty($_POST['wh']) 
    && (isset($_POST['hrdia']) && !empty($_POST['hrdia']))
        && (isset($_POST['diames']) && !empty($_POST['diames']))
            && (isset($_POST['precowh']) && !empty($_POST['precowh']))
    )
{
    $wh = $_POST['wh'];
    $hd = $_POST['hrdia'];
    $dm = $_POST['diames'];
    $pk = $_POST['precowh'];

    number_format(2765.123234, 2, ",", "");

    $re = $wh * $hd * $dm * $pk;
    $fin = $re / 1000;
    echo "O valor gasto é de R$: ".number_format($fin, 2, ',','.');
}
?>