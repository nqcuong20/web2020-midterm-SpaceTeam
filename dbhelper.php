<?php
    
    require_once('config.php');

    // Insert, update, delete - > sử dụng function
    function execute($sql)
    {
        //create connection tới database
        $conn = mysqli_connect(HOST, USERNAME,PASSWORD,DATABASE);


        // QUERY
        $result=mysqli_query($conn,$sql);

        //dòng connection
        mysqli_close($conn);
        return $result;

    }

// sử dụng cho lệnh select = > kết quả trả về
    function executeResult($sql) {
        //create connection toi database
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    
        //query
        $resultset = mysqli_query($conn, $sql);
        $list      = [];
        while ($row = mysqli_fetch_array($resultset, 1)) {
            $list[] = $row;
        }
        //dong connection
        mysqli_close($conn);
    
        return $list;

    }
?>