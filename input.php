<?php

require_once ('dbhelp.php');

$s_hoten = $s_maluong = $s_ngaysinh =$s_chucvu=$s_gioitinh ='';

if (!empty($_POST)) {
	$s_id = '';
	if (isset($_POST['hoten'])) {
		$s_hoten = $_POST['hoten'];
	}

	if (isset($_POST['maluong'])) {
		$s_maluong = $_POST['maluong'];
	}

	if (isset($_POST['ngaysinh'])) {
		$s_ngaysinh = $_POST['ngaysinh'];
	}
	if (isset($_POST['chucvu'])) {
		$s_chucvu = $_POST['chucvu'];
	}
	if (isset($_POST['gioitinh'])) {
		$s_gioitinh = $_POST['gioitinh'];
	}

	if (isset($_POST['manv'])) {
		$s_id = $_POST['manv'];
	}
	require_once ('dbhelp.php');
	//sửa lại tránh bị tấn công bằng SQL injection
	$s_hoten= str_replace('\'', '\\\'', $s_hoten);
	$s_maluong      = str_replace('\'', '\\\'', $s_maluong);
	$s_ngaysinh  = str_replace('\'', '\\\'', $s_ngaysinh);
	$s_chucvu  = str_replace('\'', '\\\'', $s_chucvu);
	$s_gioitinh  = str_replace('\'', '\\\'', $s_gioitinh);
	$s_id = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//cập nhật
		$sql = "update nhanvien set hoten = '$s_hoten', maluong = '$s_maluong', ngaysinh = '$s_ngaysinh',chucvu = '$s_chucvu', gioitinh = '$s_gioitinh' where manv = ".$s_id;
	 } 
	 else {
	 	//chèn vào để sửa
	 	$sql = "insert into nhanvien(hoten,maluong,ngaysinh,chucvu,gioitinh) value ('$s_hoten', '$s_maluong', '$s_ngaysinh', '$s_chucvu', '$s_gioitinh')";
	}

	execute($sql);

	header('Location: admin_member.php');
	die();
}
	
	$id = '';
	if (isset($_GET['manv'])) {
		$id          = $_GET['manv'];
		$sql         = 'select * from nhanvien where manv = '.$id;
		$nhanvienList = executeResult($sql);// tra ve mot nhan vien
		if ($nhanvienList != null && count($nhanvienList) > 0) {// tim đc nhanvien va gán dữ lieu cho nó
			$nv        = $nhanvienList[0];
			$s_hoten = $nv['hoten'];
			$s_maluong      = $nv['maluong'];
			$s_ngaysinh  = $nv['ngaysinh'];
			$s_chucvu  = $nv['chucvu'];
			$s_gioitinh  = $nv['gioitinh'];
		} else {
			$id = '';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>quanlynhanvien</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="width: 700px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm nhân viên</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label for="hoten">Họ và tên:</label>
						<input type="number" name="manv" value="<?=$id?>" style="display:none;">
					    <input required="true" type="text" class="form-control" id="hoten" name="hoten" value="<?=$s_hoten?>">
					</div>
					<div class="form-group">
					  <label for="maluong">Mã lương:</label>
					  <input type="number" class="form-control" id="maluong" name="maluong" value="<?=$s_maluong?>">
					</div>
					<div class="form-group">
					  <label for="ngaysinh">Ngày sinh:</label>
					  <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="<?=$s_ngaysinh?>">
					</div>
					<div class="form-group">
					  <label for="chucvu">Chức vụ:</label>
					  <input type="text" class="form-control" id="chucvu" name="chucvu" value="<?=$s_chucvu?>">
					</div>
					<div class="form-group">
					  <label for="gioitinh">Giới tính:</label>
					  <input type="text" class="form-control" id="gioitinh" name="gioitinh" value="<?=$s_gioitinh?>">
					</div>
					<button class="btn btn-success">Lưu</button>
					<!-- khi ấn luu dữ liệu sẽ đổ trực tiếp trên trang này -->
				</form>
			</div>
		</div>
	</div>
</body>
</html>