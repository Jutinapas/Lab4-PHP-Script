<?php
$gender2 = $_POST['gender1'];
$height2 = $_POST['height1'];
$weight2 = $_POST['weight1'];
$age2 = $_POST['age1'];
$rate2 = $_POST['rate1'];

$bmr;

if ($gender2 == 'male') {
	$bmr = 66 + (13.7 * $weight2) + (5 * $height2) - (6.8 * $age2);
} else if ($gender2 == 'female') {
	$bmr = 665 + (9.6 * $weight2) + (1.8 * $height2) - (4.7 * $age2);
}

$mul;

switch ($rate2) {
	case 0:
		$mul = 1.2;
		break;
	case 1:
		$mul = 1.375;
		break;
	case 2:
		$mul = 1.55;
		break;
	case 3:
		$mul = 1.725;
		break;
	case 4:
		$mul = 1.9;
		break;
}

echo "BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต <span><b>" . round($bmr) . "</b></span> กิโลแคลอรี่ <br>";
echo "TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน <span><b>" . round($bmr * $mul) . "</b></span> กิโลแคลอรี่";

?>