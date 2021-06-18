<?php
if (isset($_POST['manv'])) {
	$id = $_POST['manv'];

	require_once ('dbhelp.php');
	$sql = 'delete from nhanvien where manv = '.$id;
	execute($sql);

	echo 'Xoá nhân viên thành công';
}