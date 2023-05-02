<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ./homepageIn.php");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>

<!DOCTYPE html>
<html lang="zh-TW" class="loading-site no-js">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="http://sscars.com.tw/xmlrpc.php" /> -->

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
                                <li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250 menu-item-design-default">
                                    <a href="./user.php" class="nav-top-link">會員及訂單資訊</a>
                                </li>
                                <li id="menu-item-501" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-49 current_page_item menu-item-501 active menu-item-design-default">
                                    <a href="homepage.php" aria-current="page" class="nav-top-link">二手車款</a>
                                </li>
                                <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58 menu-item-design-default">
                                    <?php
                                    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false) {
                                    ?><a href="./index.php" class="nav-top-link">登入</a>
                                    <?php
                                    } else {
                                    ?><a href="./logout.php" class="nav-top-link">登出</a>
                                    <?php
                                    }
                                    ?>
                                </li>
                                <li id="menu-item-1238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1238 menu-item-design-default">
                                    <a href="./shoppingCart.php" class="nav-top-link">購物車</a>
                                </li>
                                <li class="html header-button-1">
                                    <div class="header-button">
                                        <a href="./contact.php" class="button primary is-medium" style="border-radius:99px;">
                                            <span>聯絡我們賣車</span>
                                        </a>
                                    </div>
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



                    </div>

                </div>
            </div>
        </header>



        <main id="main" class="">


            <div id="content" role="main" class="content-area">

                <div class="header-search-form search-form html relative has-icon" style="margin: auto;width: 300px;">

                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                        <form method="post" class="searchform" action="login.php">
                            <div class="flex-row relative">
                                <div class="flex-col search-form-categories">
                                    帳號
                                </div>
                                <div class="flex-col flex-grow">
                                    <input type="text" name="Username" /><br /><br />
                                </div>
                                <div class="flex-col" style="width: 105px;">
                                </div>
                            </div>

                            <div class="flex-row relative">
                                <div class="flex-col search-form-categories">
                                    密碼
                                </div>
                                <div class="flex-col flex-grow">
                                    <input type="password" name="UPassword" /><br />
                                </div>
                                <div class="flex-col">
                                    <button style="margin: auto; color:aliceblue; border-width: 2px; border-color: gray; background-color: gray;">
                                        登入
                                    </button>
                                </div>
                                <div class="flex-col" style="width: 30px;">
                                </div>
                            </div>

                            <div class="flex-row relative">
                            </div>
                        </form>
                        <div>
                            <span><br><br></span>
                            <a href="register.php">還沒有帳號？現在就註冊！</a>
                        </div>

                    </div>
                    <span><br><br><br><br><br><br><br><br><br><br><br><br><br><br></span>
                </div>

        </main>

        <footer id="footer" class="footer-wrapper">

            <div class="absolute-footer dark medium-text-center text-center">
                氣在來二手車
            </div>

        </footer>


    </div>



    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1'
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="312127815593772"></div>

    <div id="login-form-popup" class="lightbox-content mfp-hide">
        <div class="woocommerce">
            <div class="woocommerce-notices-wrapper"></div>
            <div class="account-container lightbox-inner">


                <div class="account-login-inner">

                    <h3 class="uppercase">登入</h3>

                    <form class="woocommerce-form woocommerce-form-login login" method="post">


                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">使用者名稱 或 電子郵件&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" />
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">密碼&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                        </p>


                        <p class="form-row">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                <span>保持登入</span>
                            </label>
                            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="494ddd88f9" /><input type="hidden" name="_wp_http_referer" value="/car/" />
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="登入">登入</button>
                        </p>
                        <p class="woocommerce-LostPassword lost_password">
                            <a href="http://sscars.com.tw/my-account/lost-password/">忘記密碼？</a>
                        </p>


                    </form>
                </div>


            </div>

        </div>
    </div>
    <!-- <script type="text/javascript">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script> -->

    <!-- BG倒三角 -->
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

</body>

</html>