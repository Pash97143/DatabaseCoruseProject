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

    <!--BG倒三角-->
    <script type='text/javascript' src='http://sscars.com.tw/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
    <script type='text/javascript' src='http://sscars.com.tw/wp-content/plugins/yith-woocommerce-catalog-mode-premium/assets/js/button-label-frontend.min.js?ver=2.16.0' id='ywctm-button-label-js'></script>
    <link rel="https://api.w.org/" href="http://sscars.com.tw/wp-json/" />
    <link rel="alternate" type="application/json" href="http://sscars.com.tw/wp-json/wp/v2/pages/49" />
    <link rel="alternate" type="application/json+oembed" href="http://sscars.com.tw/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsscars.com.tw%2Fcar%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://sscars.com.tw/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fsscars.com.tw%2Fcar%2F&#038;format=xml" />
    <meta name="generator" content="Site Kit by Google 1.84.0" />
    <!--BG倒三角-->

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


        <main id="main" class="">

            <div id="content" role="main" class="content-area">
                <div class="banner has-hover hide-for-small" id="banner-1198147113">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>

                        </div>

                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>

                            <div id="text-box-1012101058" class="text-box banner-layer x10 md-x10 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div data-animate="fadeInUp">
                                    <div class="text-box-content text text-shadow-1">

                                        <div class="text-inner text-center">


                                            <div id="text-3050004785" class="text">


                                                <h2><span style="font-size: 120%; letter-spacing: 8px;"><strong>二手車款</strong></span>
                                                </h2>
                                                <h4><span style="color: #fffd9c; letter-spacing: 8px; font-weight: 100;">選擇屬於您的愛車</span>
                                                </h4>

                                                <style>
                                                    #text-3050004785 {
                                                        text-align: center;
                                                        color: rgb(255, 255, 255);
                                                    }

                                                    #text-3050004785>* {
                                                        color: rgb(255, 255, 255);
                                                    }
                                                </style>
                                            </div>

                                            <div class="is-divider divider clearfix" style="max-width:48px;height:7px;background-color:rgb(255, 255, 255);">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <style>
                                    #text-box-1012101058 {
                                        width: 85%;
                                    }

                                    #text-box-1012101058 .text-box-content {
                                        font-size: 100%;
                                    }

                                    @media (min-width:550px) {
                                        #text-box-1012101058 {
                                            width: 60%;
                                        }
                                    }
                                </style>
                            </div>


                        </div>
                    </div>

                    <div class="height-fix is-invisible"><img width="1920" height="480" src="./image/homepage.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg2-2.jpg 1920w, http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg2-2-510x128.jpg 510w, http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg2-2-300x75.jpg 300w, http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg2-2-1024x256.jpg 1024w, http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg2-2-768x192.jpg 768w, http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg2-2-1536x384.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>

                    <style>
                        #banner-1198147113 .bg.bg-loaded {
                            background-image: url(http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg2-2.jpg);
                        }

                        #banner-1198147113 {
                            background-color: rgb(255, 255, 255);
                        }

                        #banner-1198147113 .bg {
                            background-position: 0% 100%;
                        }

                        #banner-1198147113 .ux-shape-divider--top svg {
                            height: 150px;
                            --divider-top-width: 100%;
                        }

                        #banner-1198147113 .ux-shape-divider--bottom svg {
                            height: 150px;
                            --divider-width: 100%;
                        }
                    </style>
                </div>




                <div class="banner has-hover show-for-small" id="banner-810290681">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>

                        </div>

                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>

                            <div id="text-box-1496027006" class="text-box banner-layer x0 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div data-animate="fadeInUp">
                                    <div class="text-box-content text text-shadow-1">

                                        <div class="text-inner text-center">


                                            <div id="text-1092333962" class="text">


                                                <h2><span style="font-size: 120%; letter-spacing: 8px;"><strong>二手車款</strong></span>
                                                </h2>
                                                <h4><span style="color: #fffd9c; letter-spacing: 8px; font-weight: 100;">選擇屬於您的愛車</span>
                                                </h4>

                                                <style>
                                                    #text-1092333962 {
                                                        text-align: center;
                                                        color: rgb(255, 255, 255);
                                                    }

                                                    #text-1092333962>* {
                                                        color: rgb(255, 255, 255);
                                                    }
                                                </style>
                                            </div>

                                            <div class="is-divider divider clearfix" style="max-width:48px;height:7px;background-color:rgb(255, 255, 255);">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <style>
                                    #text-box-1496027006 {
                                        width: 64%;
                                    }

                                    #text-box-1496027006 .text-box-content {
                                        font-size: 100%;
                                    }

                                    @media (min-width:550px) {
                                        #text-box-1496027006 {
                                            width: 60%;
                                        }
                                    }
                                </style>
                            </div>


                        </div>
                    </div>


                    <style>
                        #banner-810290681 {
                            padding-top: 357px;
                            background-color: rgb(255, 247, 231);
                        }

                        #banner-810290681 .bg.bg-loaded {
                            background-image: url(http://sscars.com.tw/wp-content/uploads/2021/05/二手車bg_m-2.jpg);
                        }

                        #banner-810290681 .bg {
                            background-position: 0% 100%;
                        }

                        #banner-810290681 .ux-shape-divider--top svg {
                            height: 150px;
                            --divider-top-width: 100%;
                        }

                        #banner-810290681 .ux-shape-divider--bottom svg {
                            height: 150px;
                            --divider-width: 100%;
                        }

                        @media (min-width:550px) {
                            #banner-810290681 {
                                padding-top: 25%;
                            }
                        }

                        @media (min-width:850px) {
                            #banner-810290681 {
                                padding-top: 500px;
                            }
                        }
                    </style>
                </div>


                <div id="gap-492706664" class="gap-element clearfix" style="display:block; height:auto;">

                    <style>
                        #gap-492706664 {
                            padding-top: 30px;
                        }
                    </style>
                </div>


                <section class="section" id="section_391630292">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>



                    <div class="section-content relative">
                        <div class="container section-title-container" style="margin-top:0px;margin-bottom:40px;">
                            <h1 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:140%;">在庫車輛</span><b></b></h1>
                        </div>

                        <div class="row" id="row-147999785">


                            <div id="col-2082197460" class="col small-12 large-12">
                                <div class="col-inner">



                                    <div class="woocommerce columns-3 ">
                                        <div class="prdctfltr_sc prdctfltr_sc_products prdctfltr_wcsc" data-id="prdctfltr-63a6c324b9e5f">


                                            <!-- container.html -->
                                            <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
                                                <?php
                                                // $s = $_GET['s'];
                                                if (!isset($_GET['s'])) {
                                                    $sql = "SELECT * FROM Car WHERE OrderID IS NULL";
                                                } else {
                                                    $sql = sprintf("SELECT * FROM Car WHERE OrderID IS NULL and Brand = '%s'", $_GET['s']);
                                                }

                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result) == 0) {
                                                    echo '查無廠牌為' . $_GET['s'] . '的車';
                                                ?> <a href="./homepage.php">
                                                        <button>點此返回首頁</button>
                                                    </a> <?php
                                                        } else {
                                                            foreach ($result as $data) {
                                                            ?>
                                                        <div class="product-small col has-hover product type-product post-14551 status-publish instock product_cat-color has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="col-inner">

                                                                <div class="badge-container absolute left top z-1">

                                                                </div>
                                                                <div class="product-small box ">
                                                                    <div class="box-image">
                                                                        <div class="image-fade_in_back">
                                                                            <a href="./car.php?CarID=<?php echo $data['CarID']; ?>" aria-label="<?php ?>">
                                                                                <img width="247" height="185" src="<?php echo $data['Image']; ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="<?php echo $data['Image']; ?>" sizes="(max-width: 247px) 100vw, 247px" />
                                                                            </a>
                                                                        </div>
                                                                        <div class="image-tools is-small top right show-on-hover">
                                                                        </div>
                                                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                                        </div>
                                                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                                        </div>
                                                                    </div>

                                                                    <div class="box-text box-text-products">
                                                                        <div class="title-wrapper">
                                                                            <p class="name product-title woocommerce-loop-product__title">
                                                                                <a href="./car.php?CarID=<?php echo $data['CarID']; ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                                    <?php echo 'ID: ' . $data['CarID'] . '<br>' . $data['Age'] . ' ' . $data['Brand'] . ' ' . $data['Model'] ?>
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="price-wrapper">
                                                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#78;&#84;&#36;</span>&nbsp;<?php echo $data['Price']; ?></bdi></span></span>
                                                                        </div>
                                                                        <p class="box-excerpt is-small">
                                                                        <h4 dir="auto">里程<?php echo (int)$data['Distance'] / 1000; ?>萬KM</h4>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <?php
                                                            }
                                                        }
                                                ?>
                                            </div>

                                            <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>



                        </div>

                    </div>


                    <style>
                        #section_391630292 {
                            padding-top: 30px;
                            padding-bottom: 30px;
                        }

                        #section_391630292 .ux-shape-divider--top svg {
                            height: 150px;
                            --divider-top-width: 100%;
                        }

                        #section_391630292 .ux-shape-divider--bottom svg {
                            height: 150px;
                            --divider-width: 100%;
                        }
                    </style>
                </section>




            </div>



        </main>>


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