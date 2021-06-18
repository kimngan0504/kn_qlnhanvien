<?php
require_once('dbhelp.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Member</title>
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
                        <h2>Giao diện quản lý hồ sơ nhân viên</h2>
                        <form method="get">
					        <input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;width: 300px; margin-left: 40em; border: solid 1px;" placeholder="Tìm kiếm theo tên">
				        </form>
                        <table class="table-info" id="tb_info">
                            <thead>
                                <tr>
                                    <th style="width: 5%">Mã nhân viên</th>
                                    <th style="width: 25%">Họ và tên</th>
                                    <th style="width: 10%">Mã lương</th>
                                    <th style="width: 15%">Ngày sinh</th>
                                    <th style="width: 15%">Chức vụ</th>
                                    <th style="width: 10%">Giới tính</th>
                                                                      <!-- <th style="width: 20%">Hình ảnh</th> -->
                                    <th style="width: 20%">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                                if (isset($_GET['s']) && $_GET['s'] != '') {
                                    $sql = 'select * from nhanvien where hoten like "%'.$_GET['s'].'%"';
                                } else {
                                    $sql = 'select * from nhanvien';
                                } 
                                $nhanvienList = executeResult($sql);
                                //đổ dữ liệu ra
                                foreach($nhanvienList as $nv){
                                    
                                    echo'<tr>
                                    <td> '.$nv['manv'].'
                                    </td>
                                    <td> '.$nv['hoten'].'
                                    </td>
                                    <td> '.$nv['maluong'].'
                                    </td>
                                    <td> '.$nv['ngaysinh'].'
                                    </td> 
                                    <td> '.$nv['chucvu'].'
                                    </td>
                                    <td> '.$nv['gioitinh'].'
                                    </td>
                                     <div>
                                     
                                     <td>
                                        <button class="btn btn-danger" onclick="deleteStaff('.$nv['manv'].')">Xóa</button>                                        
                                        <button class="btn btn-warning" onclick=\'window.open("input.php?manv='.$nv['manv'].'","_self")\'>Sửa</button>
                                    </td>     
                                </div>     
                                </tr>';
                                }
                            ?> 
                            </tbody>
                        </table>
                        <button class="btn btn-success" onclick="window.open('input.php', '_self')">Thêm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
		function deleteStaff(manv) {
			option = confirm('Bạn có muốn xoá nhân viên này không')
			if(!option) {
				return;
			}

			console.log(manv)
			$.post('delete_staff.php', {
				'manv': manv
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
    

</body>

<!-- <script type="text/javascript">
    function show_form_delete2(z) {

        document.getElementById("delSP").style.display = "block";

        var myTab = document.getElementById('tb_info');
        var vitri = z.closest("tr").rowIndex;

        var objCells = myTab.rows.item(vitri).cells;
        var str = "";

        str = str + objCells.item(0).innerHTML;


        document.getElementById("del_id").value = str;

    }
    function show_form_delete(z) {

        document.getElementById("modul3").style.display = "block";

        var myTab = document.getElementById('tb_info');
        var vitri = z.closest("tr").rowIndex;

        var objCells = myTab.rows.item(vitri).cells;
        var str = "";

        str = str + objCells.item(0).innerHTML;
        document.getElementById("del_id").value = str;

    }

</script> -->
<!-- <script type="text/javascript" class="init">

    $(document).ready(function () {
        $('#tb_info').DataTable();
    });

</script> -->

</html>