<?php

$height2 = $_POST['height1'] / 100;
$weight2 = $_POST['weight1'];

$bmi = round($weight2/pow($height2, 2), 2);

$result = "ดัชนีมวลกาย = <span>" . $bmi . "</span>";

if ($bmi >= 40) {
	$result .= " <b>โรคอ้วนขั้นสูงสุด</b>";
} else if ($bmi >= 35) {
	$result .= " <b>โรคอ้วนระดับ2</b> คุณเสี่ยงต่อการเกิดโรคที่มากับความอ้วน หากคุณมีเส้นรอบเอวมากกว่าเกณฑ์ปกติคุณจะเสี่ยงต่อการเกิดโรคสูง คุณต้องควบคุมอาหาร และออกกำลังกายอย่างจริงจัง";
} else if ($bmi >= 28.5) {
	$result .= " <b>โรคอ้วนระดับ1</b> และหากคุณมีเส้นรอบเอวมากกว่า 90 ซม.(ชาย) 80 ซม.(หญิง) คุณจะมีโอกาศเกิดโรคความดัน เบาหวานสูง จำเป็นต้องควบคุมอาหาร และออกกำลังกาย";
} else if ($bmi >= 23.5) {
	$result .= " <b>น้ำหนักเกิน</b> หากคุณมีกรรมพันธ์เป็นโรคเบาหวานหรือไขมันในเลือดสูงต้องพยายามลดน้ำหนักให้ดัชนีมวลกายต่ำกว่า 23";
} else if ($bmi >= 18.5) {
	$result .= " <b>น้ำหนักปกติ</b> และมีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย อุบัติการณ์ของโรคเบาหวาน ความดันโลหิตสูงต่ำกว่าผู้ที่อ้วนกว่านี้";
} else {
	$result .= " <b>น้ำหนักน้อยเกินไป</b> ซึ่งอาจจะเกิดจากนักกีฬาที่ออกกำลังกายมาก และได้รับสารอาหารไม่เพียงพอ วิธีแก้ไขต้องรับประทานอาหารที่มีคุณภาพ และมีปริมาณพลังงานเพียงพอ และออกกำลังกายอย่างเหมาะสม";
}

echo $result;

?>