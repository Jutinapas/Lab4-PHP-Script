$(document).ready(() => {

	$('.form').hide();

	$('.dropdown').on('click', event => {
		$('#intro').hide();
		$('#myDropdown').toggle();
	});

	$('#bmi-dropdown').on('click', event => {
		$('#intro').hide();
		$('.form').hide();
		$('#bmi-form').show();
	});

	$('#bmr-dropdown').on('click', event => {
		$('#intro').hide();
		$('.form').hide();
		$('#bmr-form').show();
	});

	$('#cc-dropdown').on('click', event => {
		$('#intro').hide();
		$('.form').hide();
		$('#tc-form').show();
	});
});

function calBMI() {
	var height = $('#bmi-height').val();
	var weight = $('#bmi-weight').val();
	var dataString = 'height1=' + height + '&weight1=' + weight;

	if (height == '' || weight == '' || height <= 0 || weight <= 0) {
		alert("ข้อมูลไม่ถูกต้อง");
	} else {
		$.ajax({
			type: "POST",
			url: "bmi-calculator.php",
			data: dataString,
			cache: false,
			success: function(response) {
				$('#bmi-result').html(response);
			}
		});
	}
	return false;
}

function calBMR() {
	var gender = $('input[name=gender]:checked').val();
	var height = $('#bmr-height').val();
	var weight = $('#bmr-weight').val();
	var age = $('#age').val()
	var rate = $('#rate option:selected').val();
	var dataString = 'gender1=' + gender + '&height1=' + height + '&weight1=' + weight + '&age1=' + age + '&rate1=' + rate;

	if (height == '' || weight == '' || age == '' || height <= 0 || weight <= 0 || age <= 0) {
		alert("ข้อมูลไม่ถูกต้อง");
	} else {
		$.ajax({
			type: "POST",
			url: "bmr-calculator.php",
			data: dataString,
			cache: false,
			success: function(response) {
				$('#bmr-result').html(response);
			}
		});
	}
	return false;
}

function calTC() {
	var ldl = $('#ldl').val();
	var hdl = $('#hdl').val();
	var tri = $('#tri').val()
	var dataString = 'ldl1=' + ldl + '&hdl1=' + hdl + '&tri1=' + tri;

	if (ldl == '' || hdl == '' || tri == '' || ldl <= 0 || hdl <= 0 || tri <= 0) {
		alert("ข้อมูลไม่ถูกต้อง");
	} else {
		$.ajax({
			type: "POST",
			url: "tc-calculator.php",
			data: dataString,
			cache: false,
			success: function(response) {
				$('#tc-result').html(response);
			}
		});
	}
	return false;
}