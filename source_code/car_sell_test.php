<?php 
include('car_sell_db.php');  //這是引入剛剛寫完，用來連線的.php
?>

<!DOCTYPE html>
<html lang="en">
<title>car_sell 測試</title>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php 
        $query = 'SELECT CarID, Brand, Model, Age, Price, Distance, LaunchDate FROM Car'; //搜尋 *(全部欄位) ，從 表course
        $result = mysqli_query($con,$query); //$con <<此變數來自引入的 db_cn.php
    ?>
    <div class="container">
        <table class="table table-sm table-bordered"style="text-align:center;">
            <thead style="text-align:center;">
                <tr style="text-align:center;">
                    <th>車輛編碼</th>
                    <th>車輛廠牌</th>
                    <th>車輛型號</th>
                    <th>車齡</th>
                    <th>車量價格</th>
                    <th>里程數</th>
                    <th>上架時間</th>
                </tr>
            </thead>
            <tbody>
			<!-- 大括號的上、下半部分 分別用 PHP 拆開 ，這樣中間就可以純用HTML語法-->
			<?php
				if(mysqli_num_rows($result) > 0)
				{
					foreach($result as $row)
					{
			?>
                        <tr>
                            <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                            <td><?php echo $row['CarID'];     ?></td> 
                            <td><?php echo $row['Brand'];     ?></td> 
                            <td><?php echo $row['Model'];     ?></td>
                            <td><?php echo $row['Age'];       ?></td>
                            <td><?php echo $row['Price'];     ?></td>
                            <td><?php echo $row['Distance'];  ?></td>
                            <td><?php echo $row['LaunchDate'];?></td>
                        </tr>
			<?php
				  }
				}
			?>
		    </tbody>
        </body>

</div>
