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
                <button onclick="location.href='./couponInsert.php'" id="insertbutton">優惠券上架</button>
                <style>
                    #insertbutton {
                        margin-left: 200px;
                        margin-top: 40px;
                        border-radius: 10px;
                        background-color: olivedrab;
                        color: aliceblue;
                        width: 10em;
                    }
                </style>
            </div>
            <div>
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 20px; margin-top:10px">期間內優惠券資訊</span><b></b></h3>
                <div class="coupon show">
                    <table id="coupon table" style="width:auto; margin:auto; margin-bottom: 40px">
                        <thead style="text-align:center;">
                            <tr style="text-align:center;">
                                <td style="width: 50px;">編號</td>
                                <td style="width: 150px;">優惠券類型</td>
                                <td style="width: 130px;">優惠券起始時間</td>
                                <td style="width: 130px;">優惠券結束時間</td>
                                <td style="width: 120px;">使用限制</td>
                                <td style="width: 130px;">優惠券折扣</td>
                                <td style="width: 300px;">優惠券描述</td>
                                <td style="width: 80px;">員工編號</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM COUPON WHERE (NOW() BETWEEN DATE(StartTime) and DATE_ADD(EndTime, INTERVAL 1 DAY))";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                            ?>
                                    <tr>
                                        <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                                        <td><?php echo $row['CouponID'];     ?></td>
                                        <td><?php switch (intval($row['CouponType'])) {
                                                case 1:
                                                    echo '免運費折扣';
                                                    break;
                                                case 2:
                                                    echo '季節性訂單折扣';
                                                    break;
                                                case 3:
                                                    echo '特殊節日商品折扣';
                                                    break;

                                                default:
                                                    break;
                                            }
                                            ?></td>
                                        <td><?php echo $row['StartTime'];    ?></td>
                                        <td><?php echo $row['EndTime'];      ?></td>
                                        <td><?php echo '&nbsp;&#78;&#84;&nbsp;' . $row['UsageLimit'] . '&nbsp;&#36;';   ?></td>
                                        <td><?php
                                            if ((int)$row['CouponType'] == 1) {
                                                echo '免運費';
                                            } else {
                                                echo '&nbsp;&#78;&#84;&nbsp;' . $row['Discount'] . '&nbsp;&#36;';
                                            }

                                            ?></td>
                                        <td><?php echo $row['Descriptions']; ?></td>
                                        <td><?php echo $row['StaffID'];      ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 20px; margin-top:10px">尚未開始優惠券資訊</span><b></b></h3>
                <div class="coupon show">
                    <table id="coupon table" style="width:auto; margin:auto; margin-bottom: 40px">
                        <thead style="text-align:center;">
                            <tr style="text-align:center;">
                                <td style="width: 50px;">編號</td>
                                <td style="width: 150px;">優惠券類型</td>
                                <td style="width: 130px;">優惠券起始時間</td>
                                <td style="width: 130px;">優惠券結束時間</td>
                                <td style="width: 120px;">使用限制</td>
                                <td style="width: 130px;">優惠券折扣</td>
                                <td style="width: 300px;">優惠券描述</td>
                                <td style="width: 80px;">員工編號</td>
                                <td style="width: 100px;">刪除優惠券</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM COUPON WHERE (NOW() <= DATE(StartTime))";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                            ?>

                                    <tr>
                                        <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                                        <td><?php echo $row['CouponID'];     ?></td>
                                        <td><?php switch (intval($row['CouponType'])) {
                                                case 1:
                                                    echo '免運費折扣';
                                                    break;
                                                case 2:
                                                    echo '季節性訂單折扣';
                                                    break;
                                                case 3:
                                                    echo '特殊節日商品折扣';
                                                    break;

                                                default:
                                                    break;
                                            }
                                            ?></td>
                                        <td><?php echo $row['StartTime'];    ?></td>
                                        <td><?php echo $row['EndTime'];      ?></td>
                                        <td><?php echo '&nbsp;&#78;&#84;&nbsp;' . $row['UsageLimit'] . '&nbsp;&#36;';   ?></td>
                                        <td><?php
                                            if ((int)$row['CouponType'] == 1) {
                                                echo '免運費';
                                            } else {
                                                echo '&nbsp;&#78;&#84;&nbsp;' . $row['Discount'] . '&nbsp;&#36;';
                                            }

                                            ?></td>
                                        <td><?php echo $row['Descriptions']; ?></td>
                                        <td><?php echo $row['StaffID'];      ?></td>
                                        <td>
                                            <form action="./couponDelete.php" name="Coupon" method="POST">
                                                <input type="hidden" name="CouponID" value="<?php echo $row['CouponID']; ?>">
                                                <input type="submit" name="submit" value="刪除" id="couoponDeleteButton">
                                            </form>
                                            <style>
                                                #couoponDeleteButton {
                                                    color: aliceblue;
                                                    font-size: 10px;
                                                    border-radius: 10px;
                                                    width: 60px;
                                                    height: 25px;
                                                    background-color: maroon;
                                                    /* margin-top: 10px; */
                                                }
                                            </style>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div>
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;margin-bottom: 20px; margin-top:10px">已結束優惠券資訊</span><b></b></h3>
                <div class="coupon show">
                    <table id="coupon table" style="width:auto; margin:auto; margin-bottom: 40px">
                        <thead style="text-align:center;">
                            <tr style="text-align:center;">
                                <td style="width: 50px;">編號</td>
                                <td style="width: 150px;">優惠券類型</td>
                                <td style="width: 130px;">優惠券起始時間</td>
                                <td style="width: 130px;">優惠券結束時間</td>
                                <td style="width: 120px;">使用限制</td>
                                <td style="width: 130px;">優惠券折扣</td>
                                <td style="width: 300px;">優惠券描述</td>
                                <td style="width: 80px;">員工編號</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM COUPON WHERE (NOW() >= DATE_ADD(EndTime, INTERVAL 1 DAY))";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                            ?>
                                    <tr>
                                        <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                                        <td><?php echo $row['CouponID'];     ?></td>
                                        <td><?php switch (intval($row['CouponType'])) {
                                                case 1:
                                                    echo '免運費折扣';
                                                    break;
                                                case 2:
                                                    echo '季節性訂單折扣';
                                                    break;
                                                case 3:
                                                    echo '特殊節日商品折扣';
                                                    break;

                                                default:
                                                    break;
                                            }
                                            ?></td>
                                        <td><?php echo $row['StartTime'];    ?></td>
                                        <td><?php echo $row['EndTime'];      ?></td>
                                        <td><?php echo '&nbsp;&#78;&#84;&nbsp;' . $row['UsageLimit'] . '&nbsp;&#36;';   ?></td>
                                        <td><?php
                                            if ((int)$row['CouponType'] == 1) {
                                                echo '免運費';
                                            } else {
                                                echo '&nbsp;&#78;&#84;&nbsp;' . $row['Discount'] . '&nbsp;&#36;';
                                            }

                                            ?></td>
                                        <td><?php echo $row['Descriptions']; ?></td>
                                        <td><?php echo $row['StaffID'];      ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <style>
                table {
                    margin-left: auto;
                    margin-right: auto;
                }

                td {
                    text-align: center;
                }

                tr:nth-of-type(even) td {
                    background-color: #f3f3f3;
                }
            </style>
        </main>


        <footer id="footer" class="footer-wrapper">

            <div class="absolute-footer dark medium-text-center text-center">
                氣在來二手車
            </div>

        </footer>

        <script type='text/javascript' src='http://sscars.com.tw/wp-includes/js/hoverIntent.min.js?ver=1.10.2' id='hoverIntent-js'></script>
        <script type='text/javascript' id='flatsome-js-js-extra'>
            var flatsomeVars = {
                "theme": {
                    "version": "3.16.1"
                },
                "ajaxurl": "http:\/\/sscars.com.tw\/wp-admin\/admin-ajax.php",
                "rtl": "",
                "sticky_height": "70",
                "assets_url": "http:\/\/sscars.com.tw\/wp-content\/themes\/flatsome\/assets\/js\/",
                "lightbox": {
                    "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
                    "close_btn_inside": false
                },
                "user": {
                    "can_edit_pages": false
                },
                "i18n": {
                    "mainMenu": "Main Menu",
                    "toggleButton": "Toggle"
                },
                "options": {
                    "cookie_notice_version": "1",
                    "swatches_layout": false,
                    "swatches_box_select_event": false,
                    "swatches_box_behavior_selected": false,
                    "swatches_box_update_urls": "1",
                    "swatches_box_reset": false,
                    "swatches_box_reset_extent": false,
                    "swatches_box_reset_time": 300,
                    "search_result_latency": "0"
                },
                "is_mini_cart_reveal": ""
            };
        </script>
        <script data-minify="1" type='text/javascript' src='http://sscars.com.tw/wp-content/cache/min/1/wp-content/themes/flatsome/assets/js/flatsome.js?ver=1671857224' id='flatsome-js-js'></script>

    </div>

    <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="312127815593772"></div>

</body>

</html>