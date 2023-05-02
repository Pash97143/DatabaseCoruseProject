<?php
include('db.php');
session_start();
// if $_SESSION['MemberID'];

if (!isset($_SESSION['MemberID']) || $_SESSION['loggedin'] == false) {
    header('Location:./homepage.php');
} else {
    $sq = sprintf("SELECT * FROM Member WHERE MemberID = %s", $_SESSION['MemberID']);
    $mem = mysqli_fetch_assoc(mysqli_query($con, $sq));
    if ((int)$mem['Authority'] == 3) {
        header('Location:./homepage.php');
    }
}
$OrderID = $_POST['OrderID'];

if (isset($_POST['IDchange']) && $_POST['IDchange'] != '') {
    $sqlc = sprintf("SELECT * FROM ORDERS WHERE OrderID = %s", $_POST['IDchange']);
    $resultc = mysqli_query($con, $sqlc);
    if (mysqli_num_rows($resultc) == 0) {
        $sql2 = sprintf("UPDATE ORDERS SET OrderID = %s WHERE OrderID = %s", $_POST['IDchange'], $OrderID);
        $result2 = mysqli_query($con, $sql2);
    }
}

if (isset($_POST['OrderDate']) && $_POST['OrderDate'] != '') {
    $sql2 = sprintf("UPDATE ORDERS SET OrderDate = '%s' WHERE OrderID = %s", $_POST['OrderDate'], $OrderID);
    $result2 = mysqli_query($con, $sql2);
}

if (isset($_POST['ShipDate']) && $_POST['ShipDate'] != '') {
    if ($_POST['ShipDate'] == 'NOW') {
        $sql2 = sprintf("UPDATE ORDERS SET ShipDate = NOW() WHERE OrderID = %s", $OrderID);
    } else {
        $sql2 = sprintf("UPDATE ORDERS SET ShipDate = '%s' WHERE OrderID = %s", $_POST['ShipDate'], $OrderID);
    }
    $result2 = mysqli_query($con, $sql2);
}

if (isset($_POST['ArriveDate']) && $_POST['ArriveDate'] != '') {
    if ($_POST['ArriveDate'] == 'NOW') {
        $sql2 = sprintf("UPDATE ORDERS SET ArriveDate = NOW() WHERE OrderID = %s", $OrderID);
    } else {
        $sql2 = sprintf("UPDATE ORDERS SET ArriveDate = '%s' WHERE OrderID = %s", $_POST['ArriveDate'], $OrderID);
    }
    $result2 = mysqli_query($con, $sql2);
}

if (isset($_POST['CompleteDate']) && $_POST['CompleteDate'] != '') {
    if ($_POST['CompleteDate'] == 'NOW') {
        $sql2 = sprintf("UPDATE ORDERS SET CompleteDate = NOW() WHERE OrderID = %s", $OrderID);
    } else {
        $sql2 = sprintf("UPDATE ORDERS SET CompleteDate = '%s' WHERE OrderID = %s", $_POST['CompleteDate'], $OrderID);
    }
    $result2 = mysqli_query($con, $sql2);
}

if (isset($_POST['Address']) && $_POST['Address'] != '') {
    $sql2 = sprintf("UPDATE ORDERS SET Address = '%s' WHERE OrderID = %s", $_POST['Address'], $OrderID);
    $result2 = mysqli_query($con, $sql2);
}

if (isset($_POST['PaymentMethod']) && $_POST['PaymentMethod'] != '') {
    $sql2 = sprintf("UPDATE ORDERS SET PaymentMethod = '%s' WHERE OrderID = %s", $_POST['PaymentMethod'], $OrderID);
    $result2 = mysqli_query($con, $sql2);
}

$sql = sprintf("SELECT * FROM ORDERS WHERE OrderID = %s", $OrderID);
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

if ($data['ShipDate'] == NULL || $data['ShipDate'] == '') {
    $sql2 = sprintf("UPDATE ORDERS SET OStatus = 1 WHERE OrderID = %s", $OrderID);
    $result2 = mysqli_query($con, $sql2);
} elseif ($data['ArriveDate'] == NULL || $data['ArriveDate'] == '') {
    $sql2 = sprintf("UPDATE ORDERS SET OStatus = 2 WHERE OrderID = %s", $OrderID);
    $result2 = mysqli_query($con, $sql2);
} elseif ($data['CompleteDate'] == NULL || $data['CompleteDate'] == '') {
    $sql2 = sprintf("UPDATE ORDERS SET OStatus = 3 WHERE OrderID = %s", $OrderID);
    $result2 = mysqli_query($con, $sql2);
} elseif ($data['CompleteDate'] != NULL && $data['CompleteDate'] != '') {
    $sql2 = sprintf("UPDATE ORDERS SET OStatus = 4 WHERE OrderID = %s", $OrderID);
    $result2 = mysqli_query($con, $sql2);
}


?>


<!DOCTYPE html>
<html lang="zh-TW" class="loading-site no-js">

<head>
    <meta charset="UTF-8" />

    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>二手車款 - 氣在來汽車商行</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <style id='wp-block-library-inline-css' type='text/css'>

    </style>
    <link data-minify="1" rel='stylesheet' id='font-awesome-official-css' href='http://sscars.com.tw/wp-content/cache/min/1/releases/v5.15.3/css/all.css?ver=1671857224' type='text/css' media='all' crossorigin="anonymous" />
    <link data-minify="1" rel='stylesheet' id='flatsome-main-css' href='http://sscars.com.tw/wp-content/cache/min/1/wp-content/themes/flatsome/assets/css/flatsome.css?ver=1671857224' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='flatsome-shop-css' href='http://sscars.com.tw/wp-content/cache/min/1/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=1671857224' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css' href='http://sscars.com.tw/wp-content/themes/flatsome-child/style.css?ver=3.0' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='prdctfltr-css' href='http://sscars.com.tw/wp-content/cache/min/1/wp-content/plugins/prdctfltr/includes/css/styles.css?ver=1671857224' type='text/css' media='all' />
    <link data-minify="1" rel='stylesheet' id='font-awesome-official-v4shim-css' href='http://sscars.com.tw/wp-content/cache/min/1/releases/v5.15.3/css/v4-shims.css?ver=1671857224' type='text/css' media='all' crossorigin="anonymous" />
</head>

<body>


    <div id="wrapper">


        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="masthead" class="header-main ">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                        <!-- Logo -->
                        <div id="logo">

                            <!-- Header logo -->
                            <a href="homepage.php" title="氣在來汽車商行 - 堅持車況透明化、實車實圖實價、絕不調整里程數。" rel="home">
                                <img width="92" height="37" src="logo.png" class="header_logo header-logo" alt="氣在來汽車商行" /><img width="92" height="37" src="logo.png" class="header-logo-dark" alt="氣在來汽車商行" /></a>
                        </div>




                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-spacing-large nav-uppercase">

                                <li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-49 current_page_item menu-item-501 active menu-item-design-default">
                                    <a href="./homepage.php" aria-current="page" class="nav-top-link">二手車款</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./staff.php" aria-current="page" class="nav-top-link">使用者資訊</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./statistic.php" aria-current="page" class="nav-top-link">報表統計</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./orders.php" class="nav-top-link">訂單資訊處理</a>
                                </li>

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./cars.php" class="nav-top-link">車輛相關</a>
                                </li>

                                <!-- <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./carInsert.php" class="nav-top-link">車輛上架</a>
                                </li>

                                <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./carDelete.php" class="nav-top-link">車輛下架</a>
                                </li> -->

                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./coupons.php" class="nav-top-link">優惠券相關</a>
                                </li>

                                <!-- <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./couponInsert.php" class="nav-top-link">優惠券上架</a>
                                </li>

                                <li id="menu-item-1250"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./couponDelete.php" class="nav-top-link">優惠券下架</a>
                                </li> -->

                                <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 menu-item-design-default">
                                    <a href="./logout.php" class="nav-top-link">登出</a>
                                </li>

                                <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                                    <div class="header-button"> <a href="#" aria-label="搜尋" class="icon button circle is-outline is-small">
                                            <!-- <i class="icon-search"></i> -->
                                            Search
                                        </a>
                                    </div>
                                    <ul class="nav-dropdown nav-dropdown-default">
                                        <li class="header-search-form search-form html relative has-icon">
                                            <div class="header-search-form-wrapper">
                                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                                    <form role="search" method="get" class="searchform" action="./homepage.php">
                                                        <div class="flex-row relative">
                                                            <div class="flex-col flex-grow">
                                                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">搜尋關鍵字:</label>
                                                                <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="請輸入廠牌名稱&hellip;" value="" name="s" />
                                                            </div>
                                                            <div class="flex-col">
                                                                <button type="submit" value="搜尋" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                                    搜尋廠牌
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="live-search-results text-left z-top"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </div>

                        <!-- Mobile Right Elements -->


                    </div>

                </div>
            </div>
        </header>


        <main id="main">
            <div>

            </div>
            <div>
                <div>
                    <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 20px; margin-top:40px">訂單狀態</span><b></b></h3>

                    <form action="orderDelete.php" name="Order" method="POST">
                        <input type="hidden" name="OrderID" value="<?php echo $OrderID; ?>">
                        <input type="submit" name="submit" value="刪除" id="orderDeleteButton">
                    </form>
                    <style>
                        #orderDeleteButton {
                            margin-left: 48%;
                            color: aliceblue;
                            font-size: 13px;
                            border-radius: 10px;
                            width: 80px;
                            height: 40px;
                            background-color: maroon;
                            /* margin-top: 10px; */
                        }
                    </style>
                    <div>
                        <table id="order-table" style="padding: 10px 10px 20px 10px; margin:auto; width:auto">
                            <thead style="text-align:center;">
                                <tr style="text-align:center;">
                                    <!-- <td style="text-align:center; width: 50px ;"></td> -->
                                    <td style="text-align:center; width: 50px ;">編號</td>
                                    <td style="text-align:center; width: 100px;">訂單狀態</td>
                                    <td style="text-align:center; width: 140px;">訂單成立時間</td>
                                    <td style="text-align:center; width: 140px;">訂單運送時間</td>
                                    <td style="text-align:center; width: 140px;">訂單抵達時間</td>
                                    <td style="text-align:center; width: 140px;">訂單完成時間</td>
                                    <td style="text-align:center; width: 300px;">訂單運送地址</td>
                                    <td style="text-align:center; width: 100px;">支付方法</td>
                                    <td style="text-align:center; width: 90px;">運費</td>
                                    <td style="text-align:center; width: 90px;">訂單總額</td>
                                    <!-- <td style="text-align:center; width: auto">刪除訂單</td> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $sql = sprintf("SELECT * FROM ORDERS WHERE OrderID = %s", $OrderID);
                                $result = mysqli_query($con, $sql);
                                $data = mysqli_fetch_assoc($result);
                                ?>
                                <tr class="2rows">
                                    <!-- <td style="text-align: center;color: darkblue; width:100px; background-color:antiquewhite">訂單狀態</td> -->
                                    <td style="text-align:center"><?php echo $data['OrderID'];       ?></td>
                                    <td style="text-align:center">
                                        <?php
                                        switch (intval($data['OStatus'])) {
                                            case 1:
                                                echo '訂單已成立';
                                                break;
                                            case 2:
                                                echo '訂單運送中';
                                                break;
                                            case 3:
                                                echo '訂單已抵達';
                                                break;
                                            case 4:
                                                echo '訂單已完成';
                                                break;
                                            default:
                                                break;
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align:center">
                                        <?php echo $data['OrderDate']; ?>
                                    </td>
                                    <td style="text-align:center">
                                        <?php
                                        if ($data['ShipDate'] != NULL && $data['ShipDate'] != '') {
                                            echo $data['ShipDate'];
                                        } else {
                                            echo '--';
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align:center">
                                        <?php
                                        if ($data['ArriveDate'] != NULL && $data['ArriveDate'] != '') {
                                            echo $data['ArriveDate'];
                                        } else {
                                            echo '--';
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align:center">
                                        <?php
                                        if ($data['CompleteDate'] != NULL && $data['CompleteDate'] != '') {
                                            echo $data['CompleteDate'];
                                        } else {
                                            echo '--';
                                        }
                                        ?>
                                    </td>
                                    <td style="text-align:center"><?php echo $data['Address'];       ?></td>
                                    <td style="text-align:center">
                                        <?php switch (intval($data['PaymentMethod'])) {
                                            case 1:
                                                echo '現金付款';
                                                break;
                                            case 2:
                                                echo '信用卡付款';
                                                break;
                                            case 3:
                                                echo '分期付款';
                                                break;
                                            default:
                                                break;
                                        } ?></td>
                                    <td style="text-align:center" rowspan="2"><?php echo '&nbsp;&#78;&#84;&nbsp;' . $data['ShipFee'] . '&nbsp;&#36;';       ?></td>
                                    <td style="text-align:center" rowspan="2"><?php echo '&nbsp;&#78;&#84;&nbsp;' . $data['TotalPrice'] . '&nbsp;&#36;';    ?></td>

                                </tr>

                                <?php
                                if ($data['OStatus'] != 4) {
                                ?><tr class="3row">

                                        <!-- <td style="text-align: center;color: darkblue; width:100px; background-color:antiquewhite">訂單改動</td> -->
                                        <td style="text-align:center"><input type="text" name="IDchange" form="orderChange" style="height: 25px; margin:auto"></td>
                                        <td style="text-align:center">
                                            <!-- <?php if ($data['ArriveDate'] != NULL && $data['ArriveDate'] != '' && $data['OStatus'] == 3) {
                                                    ?>
                                            <select name="OStatus" id="" style="height: 25px; margin:auto" form="orderChange">
                                                <option value="" selected></option>
                                                <option value="done">訂單已完成</option>
                                            </select>
                                        <?php
                                                    } else {
                                                        echo '--';
                                                    } ?> -->
                                        </td>
                                        <td style="text-align:center">
                                            <input type="datetime-local" name="OrderDate" form="orderChange" style="height: 25px; margin:auto">
                                        </td>
                                        <td style="text-align:center">
                                            <?php
                                            if ($data['ShipDate'] != NULL && $data['ShipDate'] != '') {
                                            ?>
                                                <input type="datetime-local" name="ShipDate" form="orderChange" style="height: 25px; margin:auto">
                                            <?php
                                            } else {
                                            ?>
                                                <select name="ShipDate" id="" style="height: 25px; margin:auto" form="orderChange">
                                                    <option value="" selected></option>
                                                    <option value="NOW">訂單運送中</option>
                                                </select>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align:center">
                                            <?php
                                            if ($data['ShipDate'] == NULL || $data['ShipDate'] == '') {
                                                echo '--';
                                            } elseif ($data['ArriveDate'] != NULL && $data['ArriveDate'] != '') {
                                            ?>
                                                <input type="datetime-local" name="ArriveDate" form="orderChange" style="height: 25px; margin:auto">
                                            <?php
                                            } else {
                                            ?>
                                                <select name="ArriveDate" id="" style="height: 25px; margin:auto" form="orderChange">
                                                    <option value="" selected></option>
                                                    <option value="NOW">訂單已抵達</option>
                                                </select>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align:center">
                                            <?php
                                            if ($data['ArriveDate'] == NULL || $data['ArriveDate'] == '') {
                                                echo '--';
                                            } elseif ($data['CompleteDate'] != NULL && $data['CompleteDate'] != '') {
                                            ?>
                                                <input type="datetime-local" name="CompleteDate" form="orderChange" style="height: 25px; margin:auto">
                                            <?php
                                            } else {
                                            ?>
                                                <select name="CompleteDate" id="" style="height: 25px; margin:auto" form="orderChange">
                                                    <option value="" selected></option>
                                                    <option value="NOW">訂單已完成</option>
                                                </select>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align:center"><input type="text" name="Address" form="orderChange" style="height: 25px; margin:auto"></td>
                                        <td style="text-align:center">
                                            <select name="PaymentMethod" form="orderChange" style="height: 25px; margin:auto">
                                                <option value="" selected></option>
                                                <option value="1">現金付款</option>
                                                <option value="2">信用卡付款</option>
                                                <option value="3">分期付款</option>
                                            </select>
                                        </td>



                                    </tr>

                                <?php
                                } ?>
                            </tbody>
                        </table>
                        <?php
                        if ($data['OStatus'] != 4) {
                        ?>
                            <form action="orderDeal.php" id="orderChange" method="POST">
                                <input type="hidden" name="OrderID" value="<?php echo $OrderID; ?>">
                                <input type="submit" value="更動" id="change-order-button">
                            </form>
                            <style>
                                #change-order-button {
                                    border-radius: 10px;
                                    margin-top: -100px;
                                    margin-left: 48%;
                                    width: 80px;
                                    height: 40px;
                                    margin-top: 0px;
                                    background-color: dodgerblue;
                                    color: aliceblue;
                                }
                            </style>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 20px; margin-top:10px">訂單內容</span><b></b></h3>
                <div>
                    <table id="car-table" style="padding: 10px 10px 20px 10px; margin:auto; width:1000px">
                        <thead style="text-align:center;">
                            <tr style="text-align:center;">
                                <td style="width: 80px ;">車輛編號</td>
                                <td style="width: 140px;">車輛廠牌</td>
                                <td style="width: 300px;">車輛款式</td>
                                <td style="width: 90px">生產年份</td>
                                <td style="width: 110px">行駛距離</td>
                                <td style="width: 130px">原始價格</td>
                                <td style="width: 130px">折扣後價格</td>
                                <td style="width: 130px">查看車輛</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2 = sprintf("SELECT * FROM Car WHERE OrderID = %s", $OrderID);
                            $result2 = mysqli_query($con, $sql2);

                            foreach ($result2 as $data2) {
                            ?>
                                <tr>
                                    <td><?php echo $data2['CarID']; ?></td>
                                    <td><?php echo $data2['Brand']; ?></td>
                                    <td><?php echo $data2['Model']; ?></td>
                                    <td><?php echo $data2['Age'] . ' 年'; ?></td>
                                    <td><?php echo $data2['Distance'] . ' 公里';   ?></td>
                                    <td><?php echo '&nbsp;&#78;&#84;&nbsp;' . $data2['Price'] . '&nbsp;&#36;'; ?></td>
                                    <td><?php
                                        if ($data2['CouponID'] != NULL) {
                                            $sql3 = sprintf("SELECT * FROM Coupon WHERE CouponID = %s", $data2['CouponID']);
                                            $result3 = mysqli_query($con, $sql3);
                                            $data3 = mysqli_fetch_assoc($result3);
                                            echo '&nbsp;&#78;&#84;&nbsp;' . strval(intval($data2['Price']) - intval($data3['Discount'])) . '&nbsp;&#36;';
                                        } else {
                                            echo '&nbsp;&#78;&#84;&nbsp;' . $data2['Price'] . '&nbsp;&#36;';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <form action="./carStaff.php" name="Car" method="POST">
                                            <input type="hidden" name="CarID" value="<?php echo $data2['CarID']; ?>">
                                            <input type="submit" name="submit" value="查看" id="carOrderButton">
                                        </form>
                                        <style>
                                            #carOrderButton {
                                                color: aliceblue;
                                                font-size: 10px;
                                                border-radius: 10px;
                                                width: 60px;
                                                height: 25px;
                                                background-color: darkblue;
                                                margin-top: 10px;
                                            }
                                        </style>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <style>
                    table {
                        margin-left: auto;
                        margin-right: auto;
                    }

                    tr:nth-of-type(even) td {
                        background-color: #f3f3f3;
                    }
                </style>
            </div>
        </main>


        <footer id="footer" class="footer-wrapper">

            <div class="absolute-footer dark medium-text-center text-center">
                氣在來二手車
            </div>

        </footer>
    </div>

    <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="312127815593772"></div>

</body>

</html>