<?php
include_once("dbhelper.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceTeam</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="TH.css">
    <link rel="stylesheet" href="font/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
<body>

        <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Quản lý thông tin sinh viên
                        <!-- FORM TÌM KIẾM -->
                        <form method="GET">
                            <!-- Thường dùng GET -->
                            <input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
                        </form>
                    </div>
                    <div class="panel-body">
                    <table class="table table-bordered">
					<thead>
                    <!-- Loại, Hàng Hóa, Khách Hàng, Hóa Đơn, Chi tiết Hóa đơn -->
						<tr>
							<th>STT</th>
							<th>Mã Sản Phẩm</th>
							<th>Tên Hàng Hóa</th>
							<th>Đơn Giá</th>
							<th>Hình</th>
							<th>Loại</th>
							
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
                    //   ĐỔ DỮ LIỆU
                    $index = 1;
                    $sql = 'SELECT mahh,tenhh,dongia,hinh,tenloai FROM hanghoa inner join loai on hanghoa.loai=loai.maloai';
                    // else ở trên rồi
                    $studentList = executeResult($sql);
                    foreach ($studentList as $std){
                            echo '
                            <tr>
                                <td>'.($index++).'</td>
                                <td>'.$std['mahh'].'</td>
                                <td>'.$std['tenhh'].'</td>
                                <td>'.$std['dongia'].'</td>
                                <td>'.$std['hinh'].'</td>
                                <td>'.$std['tenloai'].'</td>
                                <td> <button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['mahh'].'","_self") \'">Edit</button></td>
                                
                                <td><button class="btn btn-danger" onclick="deleteStudent('.$std['mahh'].')">Delete</button></td>
                            </tr>';
                        }
                      ?>
                    </tbody>
                    </div>
                </div>
        </div>
       
        
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
</body>
</html>