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
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 20px; margin-top:40px">訂單狀態</span><b></b></h3>
                <div>
                    <table id="order-table" style="padding: 10px 10px 20px 10px; margin:auto; width:auto">
                        <thead style="text-align:center;">
                            <tr style="text-align:center;">
                                <td style="text-align:center; width: 50px ;">編號</td>
                                <td style="text-align:center; width: 100px;">訂單狀態</td>
                                <td style="text-align:center; width: 150px;">訂單成立時間</td>
                                <td style="text-align:center; width: 150px;">訂單運送時間</td>
                                <td style="text-align:center; width: 150px;">訂單抵達時間</td>
                                <td style="text-align:center; width: 300px;">訂單運送地址</td>
                                <td style="text-align:center; width: 100px;">支付方法</td>
                                <td style="text-align:center; width: 110px;">運費</td>
                                <td style="text-align:center; width: 110px;">訂單總額</td>
                                <td style="text-align:center; width: auto">查看訂單</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $OrderID = $_POST['OrderID'];
                            $sql = "SELECT * FROM ORDERS";
                            $result = mysqli_query($con, $sql);
                            // $data = mysqli_fetch_assoc($result);
                            foreach ($result as $data) {
                            ?>
                                <tr>
                                    <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
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
                                        ?></td>
                                    <td style="text-align:center"><?php echo $data['OrderDate'];     ?></td>
                                    <td style="text-align:center"><?php echo $data['ShipDate'];      ?></td>
                                    <td style="text-align:center"><?php echo $data['ArriveDate'];    ?></td>
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
                                    <td style="text-align:right"><?php echo '&nbsp;&#78;&#84;&nbsp;' . $data['ShipFee'] . '&nbsp;&#36;';       ?></td>
                                    <td style="text-align:right"><?php echo '&nbsp;&#78;&#84;&nbsp;' . $data['TotalPrice'] . '&nbsp;&#36;';    ?></td>
                                    <td style="text-align:center">
                                        <form action="orderDeal.php" name="Order" method="POST">
                                            <input type="hidden" name="OrderID" value="<?php echo $data['OrderID']; ?>">
                                            <input type="submit" name="submit" value="查看" id="orderCheckButton">
                                        </form>
                                        <style>
                                            #orderCheckButton {
                                                color: aliceblue;
                                                font-size: 10px;
                                                border-radius: 10px;
                                                width: 60px;
                                                height: 25px;
                                                background-color: navy;
                                                margin-top: 00px;
                                            }
                                        </style>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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