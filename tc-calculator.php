<?php

$ldl2 = $_POST['ldl1'];
$hdl2 = $_POST['hdl1'];
$tri2 = $_POST['tri1'];

$tc = round($ldl2 + $hdl2 + $tri2/5);

$result = "<span>" . $tc . "</span>	 mg/dL ";

if ($tc >= 240) {
	$result .= "<b>สูง</b>";
} else if ($tc >= 200) {
	$result .= "<b>ค่อนข้างสูง</b>";
} else {
	$result .= "<b>ดีมาก</b>";
}

echo $result;

?>