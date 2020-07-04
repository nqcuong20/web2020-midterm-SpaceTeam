<?php
    require_once ('dbhelper.php');
	$s_tenhh = $s_dongia = $s_loai = '';
if (!empty($_POST)) {
	if (isset($_POST['loai'])) {
		$s_loai = $_POST['loai'];
	}

	if (isset($_POST['tenhh'])) {
		$s_tenhh = $_POST['tenhh'];
	}

	if (isset($_POST['dongia'])) {
		$s_dongia = $_POST['dongia'];
	}

	if (isset($_POST['mahh'])) {
		$s_mahh = $_POST['mahh'];
	}
	
	// FIX LỖI KHI NGƯỜI DÙNG NHẬP SAI
	$s_loai = str_replace('\'', '\\\'', $s_loai);
	$s_tenhh      = str_replace('\'', '\\\'', $s_tenhh);
	$s_dongia  = str_replace('\'', '\\\'', $s_dongia);
	$s_mahh       = str_replace('\'', '\\\'', $s_mahh);
	// //////////////////////////////////////////////

	if ($s_mahh != '') {
		//update
		$sql = "update qlsp set tenhh = '$s_tenhh', dongia = '$s_dongia', loai = '$s_loai' where id = " .$s_mahh;
	} else {
		//insert
		$sql = "insert into qlsp(tenhh, dongia, loai) value ('$s_tenhh', '$s_dongia', '$s_loai')";
	}

	// echo $sql;
	execute($sql);
	header('Location: index.php');//LOAD LẠI TRANG QUAY VỀ TRANG CHỦ
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['mahh'];
	$sql         = 'select * from qlsp where mahh = '.$id;
	$List = executeResult($sql);
	if ($List != null && count($List) > 0) {
		$std        = $List[0];
		$s_tenhh = $std['tenhh'];
		$s_dongia      = $std['dongia'];
		$s_loai  = $std['loai'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="TH.css">
    <link rel="stylesheet" href="font/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm Sản Phẩm</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					
                <div class="form-group">
                      <label for="address">Tên Sản Phẩm</label>
                      <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input type="text" class="form-control" id="tenhh" name="tenhh" value="<?=$s_tenhh?>">
                    </div>
					<div class="form-group">
					  <label for="address">Đơn Giá</label>
					  <input type="text" class="form-control" id="dongia" name="dongia" value="<?=$s_dongia?>">
                    </div>
                    
                    <div class="form-group">
					  <label for="address">Loại</label>
					  <input type="text" class="form-control" id="loai" name="loai" value="<?=$s_loai?>">
                    </div>   
            <br>
            
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>

   

</body>
</html>