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
                        Quản Lý Sản Phẩm
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
							
							<th>Mã Sản Phẩm</th>
							<th>Tên Hàng Hóa</th>
							<th>Đơn Giá</th>
							<th>Loại</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
                    //   ĐỔ DỮ LIỆU
                    $index = 1;
                    $sql = 'SELECT mahh,tenhh,dongia,tenloai,hinh FROM hanghoa inner join loai on hanghoa.loai=loai.maloai ';
                    $result= execute($sql);
                    // else ở trên rồi
                    $i=1;
                    while($row=mysqli_fetch_array($result)){
                    $gia=number_format($row["dongia"]);
                    $chuoi=<<<EOD
                    <tr>
                    <td>$i</td>
                    <td>{$row['mahh']}</td>
                    <td>{$row['tenhh']}</td>
                    <td>$gia</td>
                    <td><img src="Dienthoai/{$row['hinh']}"/> </td>
                    <td> <button class="btn btn-warning" onclick=\'window.open("input.php?id='.{$row['mahh']}.'","_self") \'">Edit</button></td>   
                    <td><button class="btn btn-danger" onclick="deleteStudent('.{$row['mahh']}.')">Delete</button></td>
                    </tr>
    EOD;
    echo $chuoi;
    $i++;


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