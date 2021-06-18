<?php
require_once('dbhelp.php');
$s_hoten = $s_maluong = $s_luongcb =$s_ngaycong=$s_lamthem =$s_phucap  =$s_thuong =$s_kyluat=$s_tongluong='';
// lấy dữ liệu từ form
if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['hoten'])) {
		$s_hoten = $_POST['hoten'];
	}

	if (isset($_POST['maluong'])) {
		$s_maluong = $_POST['maluong'];
	}

	if (isset($_POST['luongcb'])) {
		$s_luongcb = $_POST['luongcb'];
	}
	if (isset($_POST['ngaycong'])) {
		$s_ngaycong = $_POST['ngaycong'];
	}
	if (isset($_POST['lamthem'])) {
		$s_lamthem = $_POST['lamthem'];
	}
    if (isset($_POST['phucap'])) {
		$s_phucap = $_POST['phucap'];
	}
    if (isset($_POST['thuong'])) {
		$s_thuong = $_POST['thuong'];
	}
    if (isset($_POST['kyluat'])) {
		$s_kyluat = $_POST['kyluat'];
	}

	if (isset($_POST['manv'])) {
		$s_id = $_POST['manv'];
	}
	require_once ('dbhelp.php');

	if ($s_id != '') {
		//cập nhật
		$sql = "update nhanvien set hoten = '$s_hoten', maluong = '$s_maluong', luongcb = '$s_luongcb',ngaycong = '$s_ngaycong', lamthem = '$s_lamthem' , phucap = '$s_phucap',thuong = '$s_thuong', kyluat = '$s_kyluat' where manv = ".$s_id;
	 } 
	execute($sql);
	header('Location: ql_luong.php');
	die();
}
        date_default_timezone_set('Asia/Ho_Chi_Minh'); // lấy thời gian của việt nam
        $day = date("d"); // lấy ngày hôm nay
        $month = date("m"); // lấy tháng hôm nay
        $year=date("y");
         $id = '';
        if (isset($_GET['manv'])) {
            $id          = $_GET['manv'];
            $sql         = 'select * from nhanvien where manv = '.$id;
            $nhanvienList = executeResult($sql);// tra ve mot nhan vien
            if ($nhanvienList != null && count($nhanvienList) > 0) {// tim đc nhanvien va gán dữ lieu cho nó
                $nv        = $nhanvienList[0];
                $s_hoten = $nv['hoten'];
                
                $s_maluong= $nv['maluong'];
                $s_luongcb  = $nv['luongcb'];
                $s_ngaycong = $nv['ngaycong'];
                $s_lamthem = $nv['lamthem'];
                $s_phucap  = $nv['phucap'];
                $s_thuong  = $nv['thuong'];
                $s_kyluat  = $nv['kyluat'];
               $s_tongluong=round(($s_luongcb/26)* $s_ngaycong+ ($s_lamthem*40000)+ $s_phucap+$s_thuong-$s_kyluat);
              
            } else {
                $id = '';
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Member</title>
    <script type="text/javascript" src="vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="${pageContext.request.contextPath}/Css/admin_product.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="./admin_mem.css">

</head>

<body>
    <div class="display-container size-header">
        <div class="display-container title-header">
            <a href="./login.html" style="color: #fff;text-decoration: none">
                <form><i class="fas fa-arrow-left"></i>Quay lại</form>
            </a>

        </div>

    </div>
    <div class="display-container">

        <div class="sidebar display-container">
            <ul>
                <li><a href="./admin_member.php">
                        <form>Quản lý hồ sơ nhân viên</form>
                    </a></li>
                <li><a href="./ql_luong.php">
                        <form>Quản lý lương</form>
                    </a></li>
            </ul>
        </div>

        <div class="content display-container">
            <div>
                <div class="list-info-member display-container">
                    <div>
                        <h2>Giao diện quản lý lương</h2>
                        <form method="post">
                            <div class="container">
                            <!-- submit du lieu len form -->
                            <div class="row" style="display: inline-flex;justify-content: space-around;">
                                <div class="col-sm-4" style="margin: 0 16px;">
                                    <div class="form-group">

                                        <label for="hoten">Họ tên:</label>
                                        <input type="number" name="manv" value="<?=$id?>" style="display:none;">
					                    <input required="true" type="text" class="form-control" id="hoten" name="hoten" value="<?=$s_hoten?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="maluong">Mã lương:</label>
                                    <input type="number" class="form-control" id="maluong" name="maluong" value="<?=$s_maluong?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="luongcb">Lương CB:</label>
                                    <input type="number" class="form-control" id="luongcb" name="luongcb" value="<?=$s_luongcb?>" >
                                    </div>
                                    <div class="form-group">
                                    <label for="phucap">Phụ cấp:</label>
                                    <input type="number" class="form-control" id="phucap" name="phucap" value="<?=$nv['phucap']?>">
                                    </div>
                                    
                                </div>   
                                <div class="col-sm-4" style="margin: 0 16px;">
                                    <div class="form-group">
                                        <label for="thuong">Thưởng:</label>
                                        <input type="number" class="form-control" id="thuong" name="thuong" value="<?=$nv['thuong']?>">

                                    </div>
                                    <div class="form-group">
                                    <label for="kyluat">Kỷ luật:</label>
                                    <input type="number" class="form-control" id="kyluat" name="kyluat"value="<?=$nv['kyluat']?>">

                                    </div>
                                    <div class="form-group">
                                    <label for="lamthem">Số giờ làm thêm:</label>
                                    <input type="number" class="form-control" id="lamthem" name="lamthem"value="<?=$nv['lamthem']?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="ngaycong">Số ngày công:</label>
                                    <input type="number" class="form-control" id="ngaycong" name="ngaycong"value="<?=$nv['ngaycong']?>">
                                    </div>
                                </div>   
                                <div class="col-sm-4" style="margin-left:16px;">
                                <div class="form-group">
                                    <label for="thang">Tháng:</label>
                                    <input type="text" class="form-control" id="thang" name="thang" value="<?=$month?>"style="cursor:pointer;"disabled>
                                    </div>
                                    <div class="form-group">
                                    <label for="nam">Năm:</label>
                                    <input type="text" class="form-control" id="nam" name="nam"value="<?=$year?>"style="cursor:pointer;"disabled >
                                    </div>
                                    <div class="form-group">
                                    <label for="tongluong">Tổng lương:</label>
                                    <input type="number" class="form-control" id="tongluong" name="tongluong"value="<?=$s_tongluong?>" style="cursor:pointer;"disabled>
                                    </div>
                                     <button class="btn btn-success">Lưu</button>

                                </div>   
                            </div>
                                <style>
                                input[type=text], input[type=password] {
                                        width: 160px;
                                        padding: 2px 8px;
                                        margin: 8px 0;
                                        display: inline;
                                        border: 1px solid;
                                        box-sizing: border-box;
                                       
                                    }
                                </style>
                            </div>
				        </form>

                        <table class="table-info" id="tb_info">
                            <thead>
                                <tr>
                                    <th style="width: 9%">Mã nhân viên</th>
                                    <th style="width: 18%">Họ và tên</th>
                                    <th style="width: 8%">Mã lương</th>
                                    <th style="width: 10%">Lương cơ bản</th>
                                    <th style="width: 10%">Số ngày công</th>
                                    <th style="width: 10%">Số giờ làm thêm</th>
                                                                      <!-- <th style="width: 20%">Hình ảnh</th> -->
                                    <th style="width: 10%">Phụ cấp</th>
                                    <th style="width: 10%">Thưởng</th>
                                    <th style="width: 5%">Kỷ luật</th>
                                    <th style="width: 10%">Tổng lương</th>

                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                                
                                $sql = 'select * from nhanvien';
                                
                                $nhanvienList = executeResult($sql);  
                                //đổ dữ liệu ra
                                $tongluong= '';
                                foreach($nhanvienList as $nv){
                                    // Lương = (lương cơ bản/26) * số ngày công + số giờ làm thêm * 40000
                                    // + phụ cấp chức vụ + Phụ cấp khác + Thưởng – Kỷ luật
                                    $tongluong=round(($nv['luongcb']/26)* $nv['ngaycong']+ ($nv['lamthem']*40000)+ $nv['phucap']+$nv['thuong']-$nv['kyluat']);
                                    echo'<tr>
                                    <td> '.$nv['manv'].'
                                    </td>
                                    <td> '.$nv['hoten'].'
                                    </td>
                                    <td> '.$nv['maluong'].'
                                    </td>
                                    <td> '.$nv['luongcb'].'
                                    </td> 
                                    <td> '.$nv['ngaycong'].'
                                    </td>
                                    <td> '.$nv['lamthem'].'
                                    </td>
                                    <td> '.$nv['phucap'].'
                                    </td>
                                    <td> '.$nv['thuong'].'
                                    </td>
                                    <td> '.$nv['kyluat'].'
                                    </td>
                                    <td> '.$tongluong.'
                                    </td>
                                     <div>
                                     
                                     <td>                                       
                                        <button class="btn btn-warning" onclick=\'window.open("ql_luong.php?manv='.$nv['manv'].'","_self")\'>Sửa</button>
                                    </td>
                                    
                                    
                                    </div>
                                   
                                    </tr>';
                                }
                            ?> 
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>

 <!-- Lương = (lương cơ bản/26) * số ngày công + số giờ làm thêm * 40000
  + phụ cấp chức vụ + Phụ cấp khác + Thưởng – Kỷ luật -->