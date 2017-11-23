<?php
include 'db_connect.php';
// include 'getvariable.php';

$new_gender              = "ชาย";
$new_age                 = "70 ปีขึ้นไป	";
$new_homeland            = "พิษณุโลก";
$new_career              = "รับราชการ";
$new_congenital_dis      = "มี";
$new_name_congenital_dis = "";
$new_body_movement       = "เดินได้ปกติ";
$new_saving              = "ไม่มี";
$new_travel              = "ครอบครัว";
$new_car                 = "รถส่วนตัว";
$new_traveltime          = "2 - 3 วัน";
$new_camp                = "รีสอร์ท";
$new_money               = "3,000 – 5,000 บาท";
$province                = '3';

// $new_gender              = "หญิง";
// $new_age                 = "50 - 60 ปี";
// $new_homeland            = "กำแพงเพชร";
// $new_career              = "ค้าขาย";
// $new_congenital_dis      = "ไม่มี";
// $new_name_congenital_dis = "";
// $new_body_movement       = "เดินได้ปกติ";
// $new_saving              = "มี";
// $new_travel              = "ครอบครัว";
// $new_car                 = "รถส่วนตัว";
// $new_traveltime          = "2 - 3 วัน";
// $new_camp                = "รีสอร์ท";
// $new_money               = "มากกว่า 5,000 บาท";
// $province                = '4';

// $new_gender              = "หญิง";
// $new_age                 = "50 - 60 ปี";
// $new_homeland            = "พิษณุโลก";
// $new_career              = "อื่นๆ";
// $new_congenital_dis      = "ไม่มี";
// $new_name_congenital_dis = "";
// $new_body_movement       = "เดินได้ปกติ";
// $new_saving              = "มี";
// $new_travel              = "แพคเกจท่องเที่ยว";
// $new_car                 = "รถส่วนตัว";
// $new_traveltime          = "2 - 3 วัน";
// $new_camp                = "โรงแรม";
// $new_money               = "1,000 - 3,000 บาท";
// $province                = '1';

// $new_gender              = "ชาย";
// $new_age                 = "50 - 60 ปี";
// $new_homeland            = "อุทัยธานี";
// $new_career              = "ค้าขาย";
// $new_congenital_dis      = "มี";
// $new_name_congenital_dis = "";
// $new_body_movement       = "เดินได้ปกติ";
// $new_saving              = "มี";
// $new_travel              = "ครอบครัว";
// $new_car                 = "รถส่วนตัว";
// $new_traveltime          = "2 - 3 วัน";
// $new_camp                = "รีสอร์ท";
// $new_money               = "มากกว่า 5,000 บาท";
// $province                = '1';

$oldcase_db = "SELECT * FROM oldcase ORDER BY `id` ASC ";
$key        = $conn->query($oldcase_db);
// $key->num_rows > 0;

$n1 = 0;
$t1 = "";

$n2 = 0;
$t2 = "";

$n3 = 0;
$t3 = "";

$n4 = 0;
$t4 = "";

$n5 = 0;
$t5 = "";
// เลือกที่คล้ายมากสุด
while ($row = $key->fetch_assoc()) {

	$mathtotal = 0;
	$id        = $row['id'];

	// $row['id_province'] == จังหวัดที่อยากไป

	if ($row['id_province'] == $province) {

		//row['tourism'] == 1 ตรวจสอบจังหวัดที่เคยไป
		if ($row['tourism'] == 1) {

			// เปรียบเทียบ ถ้าโรคประจำตัวและการเคลื่อนไหวร่างกายตรงกับข้อมูลใน db จะทำงาน
			if ($new_congenital_dis == $row['congenital_dis'] && $new_body_movement == $row['body_movement']) {

				// $row['appropriate'] == 4 || $row['appropriate'] == 5 ตรวจสอบความเหมาะสมเท่ากับ 4 หรือ 5 คะแนน
				if ($row['appropriate'] == 4 || $row['appropriate'] == 5) {

					// $row['facilities'] == 1 ตรวจสอบสิ่งอำนวยความสะดวก
					if ($row['facilities'] == 1) {

						if ($new_gender == $row['gender']) {
							$summath1 = 3;
							$mathtotal += $summath1;
							// echo $mathtotal;
						} else {
							$summath1 = 0;
							$mathtotal += $summath1;
							// echo $mathtotal;
						}
						if ($new_age == $row['age']) {
							$summath2 = 6.3;
							$mathtotal += $summath2;
							// echo $mathtotal;
						} else {
							$summath2 = 0;
							$mathtotal += $summath2;
							// echo $mathtotal;
						}
						if ($new_homeland == $row['homeland']) {
							$summath3 = 4;
							$mathtotal += $summath3;
							// echo $mathtotal;
						} else {
							$summath3 = 0;
							$mathtotal += $summath3;
							// echo $mathtotal;
						}
						if ($new_career == $row['career']) {
							$summath4 = 3.7;
							$mathtotal += $summath4;
							// echo $mathtotal;
						} else {
							$summath4 = 0;
							$mathtotal += $summath4;
							// echo $mathtotal;
						}
						if ($new_congenital_dis == $row['congenital_dis']) {
							$summath5 = 9;
							$mathtotal += $summath5;
							// echo $mathtotal;
						} else {
							$summath5 = 0;
							$mathtotal += $summath5;
							// echo $mathtotal;
						}
						if ($new_name_congenital_dis == $row['name_congenital_dis']) {
							$summath6 = 4;
							$mathtotal += $summath6;
							// echo $mathtotal;
						} else {
							$summath6 = 0;
							$mathtotal += $summath6;
							// echo $mathtotal;
						}
						if ($new_body_movement == $row['body_movement']) {
							$summath7 = 10;
							$mathtotal += $summath7;
							// echo $mathtotal;
						} else {
							$summath7 = 0;
							$mathtotal += $summath7;
							// echo $mathtotal;
						}
						if ($new_saving == $row['saving']) {
							$summath8 = 2.5;
							$mathtotal += $summath8;
							// echo $mathtotal;
						} else {
							$summath8 = 0;
							$mathtotal += $summath8;
							// echo $mathtotal;
						}
						if ($new_travel == $row['travel_form']) {
							$summath9 = 5;
							$mathtotal += $summath9;
							// echo $mathtotal;
						} else {
							$summath9 = 0;
							$mathtotal += $summath9;
							// echo $mathtotal;
						}
						if ($new_car == $row['vehicle']) {
							$summath10 = 6;
							$mathtotal += $summath10;
							// echo $mathtotal;
						} else {
							$summath10 = 0;
							$mathtotal += $summath10;
							// echo $mathtotal;
						}
						if ($new_traveltime == $row['travel_time']) {
							$summath11 = 5.5;
							$mathtotal += $summath11;
							// echo $mathtotal;
						} else {
							$summath11 = 0;
							$mathtotal += $summath11;
							// echo $mathtotal;
						}
						if ($new_camp == $row['camp']) {
							$summath12 = 6;
							$mathtotal += $summath12;
							// echo $mathtotal;
						} else {
							$summath12 = 0;
							$mathtotal += $summath12;
							// echo $mathtotal;
						}
						if ($new_money == $row['charges']) {
							$summath13 = 7;
							$mathtotal += $summath13;
							// echo $mathtotal;
						} else {
							$summath13 = 0;
							$mathtotal += $summath13;
							// echo $mathtotal;
						}
						if ($row['appropriate'] == 4) {
							$summath14 = 6;
							$mathtotal += $summath14;
							// echo $mathtotal;
						} else {
							$summath14 = 0;
							$mathtotal += $summath14;
							// echo $mathtotal;
						}
						if ($row['appropriate'] == 5) {
							$summath15 = 7.5;
							$mathtotal += $summath15;
							// echo $mathtotal;
						} else {
							$summath15 = 0;
							$mathtotal += $summath15;
							// echo $mathtotal;
						}
						if ($row['facilities'] == 1) {
							$summath16 = 8;
							$mathtotal += $summath16;
							// echo $mathtotal;
						} else {
							$summath16 = 0;
							$mathtotal += $summath16;
							// echo $mathtotal;
						}
					}
				}

			}

		}

	}

	// echo $id;
	// echo "<br>";

	// เปรียบเทียบค่าหลังจาก query
	if ($mathtotal >= $n1) {
		if ($mathtotal >= $n2) {
			if ($mathtotal >= $n3) {
				$n1 = $n2;
				$t1 = $t2;

				$n2 = $n3;
				$t2 = $t3;

				$n3 = $mathtotal;
				$t3 = $id;
			} else {
				$n1 = $n2;
				$t1 = $t2;

				$n2 = $mathtotal;
				$t2 = $id;
			}
		} else {
			$n1 = $mathtotal;
			$t1 = $id;
		}

	}

	// echo $row['travel_form'];
	// echo $row['location'];
}
echo $t3;
// โชว์คอลัมที่เลือก
// echo $t3;
echo '<br>';

$result = mysqli_query($conn, "SELECT * FROM oldcase WHERE id = '$t3'");
mysqli_query($conn, "SET NAMES UTF8");
$a = mysqli_fetch_assoc($result);

echo $a['location'];
echo $a['id'];
$mathtotal = 0;

if ($new_gender == $a['gender']) {
	$point1 = 3.0;
	$mathtotal += $point1;
} else {
	$point1 = 0;
	$mathtotal += $point1;
}
if ($new_age == $a['age']) {
	$point2 = 6.3;
	$mathtotal += $point2;
} else {
	$point2 = 0;
	$mathtotal += $point2;
}
if ($new_homeland == $a['homeland']) {
	$point3 = 4.0;
	$mathtotal += $point3;
} else {
	$point3 = 0;
	$mathtotal += $point3;
}
if ($new_career == $a['career']) {
	$point4 = 3.7;
	$mathtotal += $point4;
} else {
	$point4 = 0;
	$mathtotal += $point4;
}
// if ($new_congenital_dis == $row['congenital_dis']) {
// 	$point5 = 9.0;
// 	$mathtotal += $point5;
// } else {
// 	$point5 = 0;
// 	$mathtotal += $point5;
// }
if ($new_name_congenital_dis == $a['name_congenital_dis']) {
	$point6 = 9.0;
	$mathtotal += $point6;
} else {
	$point6 = 0;
	$mathtotal += $point6;
}
if ($new_body_movement == $a['body_movement']) {
	$point7 = 10.0;
	$mathtotal += $point7;
} else {
	$point7 = 0;
	$mathtotal += $point7;
}
// if ($new_saving == $row['saving']) {
// 	$point8 = 10;
// 	$mathtotal += $point8;
// } else {
// 	$point8 = 0;
// 	$mathtotal += $point8;
// }
if ($new_travel == $a['travel_form']) {
	$point9 = 5.0;
	$mathtotal += $point9;
} else {
	$point9 = 0;
	$mathtotal += $point9;
}
if ($new_car == $a['vehicle']) {
	$point10 = 6.0;
	$mathtotal += $point10;
} else {
	$point10 = 0;
	$mathtotal += $point10;
}
if ($new_traveltime == $a['travel_time']) {
	$point11 = 5.5;
	$mathtotal += $point11;
} else {
	$point11 = 0;
	$mathtotal += $point11;
}
if ($new_camp == $a['camp']) {
	$point12 = 6.0;
	$mathtotal += $point12;
} else {
	$point12 = 0;
	$mathtotal += $point12;
}
if ($new_money == $a['charges']) {
	$point13 = 7.0;
	$mathtotal += $point13;
} else {
	$point13 = 0;
	$mathtotal += $point13;
}
if ($a['appropriate'] == 1) {
	$point14 = 7.5;
	$mathtotal += $point14;
} else {
	$point14 = 0;
	$mathtotal += $point14;
}
if ($a['facilities'] == 1) {
	$point15 = 8.0;
	$mathtotal += $point15;
} else {
	$point15 = 0;
	$mathtotal += $point15;
}

// if (isset($_POST['Size'])) {
// 	$	x = $New_Size;
// 	$y = $a['size'];
// 	$sum = 1 - (abs($x - $y) / 3);
// 	$point2 = $sum * 6;
// 	$mathtotal += $point2;
// }

// $sim3 = ($mathtotal / 120) * 100;
// }

?>