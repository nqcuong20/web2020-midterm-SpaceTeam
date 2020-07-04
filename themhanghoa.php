<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Thêm hoa</title>
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <script src="js/jquery/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="text-center text-uppercase">Thêm Sản Phẩm</h2>
            <div class="row">
                <div class="col-3 text-right">
                    Loại Sản Phẩm
                </div>
                <div class="col-9 form-group">
<?php
include_once("dbhelper.php");
$ds_loai_hoa =execute("SELECT maloai, tenloai From loai");
?>
                    <select name="LoaiHoa" class="form-control">
                        <?php
                        while($loai = mysqli_fetch_array($ds_loai_hoa)){
                            echo "<option value='{$loai['maloai']}'>{$loai['tenloai']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3 text-right">
                    Tên hoa
                </div>
                <div class="col-9">
                    <input name="TenSp" class="form-control" />
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3 text-right">
                    Giá bán
                </div>
                <div class="col-9">
                    <input name="GiaBan" type="number" class="form-control" />
                </div>
            </div>            
            <div class="row mb-1">
                <div class="col-3 text-right">
                    Hình
                </div>
                <div class="col-9 form-group">
                    <input type="file" name="Hinh" required class="form-control" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-primary">
                        Thêm
                    </button>
                    <button class="btn btn-danger" type="reset">
                        Nhập lại
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
<?php
if($_FILES["Hinh"]["error"] == 0)
{
	if(move_uploaded_file($_FILES["Hinh"]["tmp_name"], "Dienthoai/".$_FILES["Hinh"]["name"]))
    {
        $sql = "INSERT INTO hoanghoa(`tenhh`,`dongia`,`Hinh`,`loai`) VALUES('{$_REQUEST['LoaiHoa']}', '{$_REQUEST['TenHoa']}', '{$_REQUEST['GiaBan']}', '{$_REQUEST['ThanhPhan']}', '{$_FILES["Hinh"]["name"]}')";
        //echo $sql;
        DataProvider::ExecuteQuery($sql);
    }
}
?>
</html>