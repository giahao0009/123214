<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.png" />
    <title>BigShopOur</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="./assets/js/jquery.js"></script>
</head>

<body class="modal-open" id="body">
    <?php 
                include_once "connection.php";
                if(isset($_POST['submit'])){
                    $sql = "SELECT Username, Password
                            FROM account
                            WHERE Username = :username and Password = :password";
                    $param = array(
                        'username' => $_POST['user'],
                        'password' => $_POST['password']
                    );
                    if(Connection::ExecuteNonQuery($sql, $param) > 0){
                        $_SESSION["username"] = $_POST['user'];
                        $_SESSION["password"] = $_POST['password'];
                        header("Refresh: 0");
                    }else {
                        echo '<script>alert("Đăng nhập không thành công")</script>';
                        header("Refresh: 0");
                    }
                }
                else if (isset($_POST['submitRegiter'])){
                    $sql = "INSERT INTO account (Username, Password, Email, Phone)
                            VALUES (:username, :password, :email, :phone)";
                    $param = array(
                        "username" => $_POST['user'],
                        "password" => $_POST['password'],
                        "email" => $_POST['email'],
                        "phone" => $_POST['phone']
                    );
                    if (Connection::ExecuteNonQuery($sql, $param) > 0)
                    {
                        $_SESSION["username"] = $_POST['user'];
                        $_SESSION["password"] = $_POST['password'];
                        header("Refresh: 0");
                    }
                    else{
                        echo '<script>alert("Đăng ký thất bại")</script>';
                    }
                }
                else{
                ?>
    <div class="app">
        <header class="header rainbow-box">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li
                            class="header__navbar-item header__navbar-item--has-qr  header__navbar-item--separate  header__navbar-item--has--qr">
                            Sử dụng ứng dụng bằng điện thoại
                            <!-- Header QR code -->
                            <div class="header__qr">
                                <img src="./assets/img/QR_CODE.png" alt="QR Code" class="header_qr-img">
                                <div class="header__qr-apps">
                                    <a href="" class="header__qr-link">
                                        <img src="./assets/img/Google_play.png" alt="Google play"
                                            class="header__qr-download-img">
                                    </a>
                                    <a href="" class="header__qr-link">
                                        <img src="./assets/img/App_store.png" alt="App store"
                                            class="header__qr-download-img">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a href="https://www.facebook.com/" class="header__navbar-icon-link">
                                <i class=" header__navbar-icon fab fa-facebook-square"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="header__navbar-icon-link">
                                <i class=" header__navbar-icon fab fa-instagram-square"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <a href="./notification.php" class="header__navbar-item-link">
                                <i class=" header__navbar-icon fas fa-bell"></i>
                                Thông báo
                            </a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="./contact.php" class="header__navbar-item-link">
                                <i class=" header__navbar-icon fas fa-question-circle"></i>
                                Liên hệ</a>
                        </li>
                        <?php if (isset( $_SESSION["username"])){
                            
                            if(isset($_POST['logout'])){
                                session_destroy();
                                echo "<script>alert('Đăng xuất thành công')</script>";
                                header("Location: index.php");
                            }
                            echo '<li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">'. $_SESSION["username"]. '</li>';
                            echo '<li class="header__navbar-item"><form method ="POST"><button class="header__navbar-item header__navbar-item--strong" type="submit" style="outline: none; border: none; background: none;" name="logout">Đăng xuất </button><form></li>';
                        }else{?>
                        <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate"
                            id="myBtnRegister">Đăng
                            ký</li>
                        <li class="header__navbar-item header__navbar-item--strong" id="myBtnLogin">Đăng nhập</li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- Header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="index.php"><img src="./assets/img/logo.png" class="header__logo-img"></a>
                    </div>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm">
                        </div>
                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
                    <div class="header__cart">
                        <div class="hearder__cart-wrap">
                            <a href="./cart.php"><i class="header__cart-icon fas fa-shopping-cart"></i></a>
                            <div class="header__cart-list header__cart-list--no-cart">
                                <img src="./assets/img/empty_cart.jpg" alt="" class="header__cart-no-cart-img">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="header__bottom rainbow-box-bottom" id="myHeader">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-6 header__bottom-list" style="padding-left: 0px;">
                            <li class="header__bottom-list-item"><a href="index.php" style="text-decoration: none; color: var(--white-color);">Trang chủ</a></li>
                            <li class="header__bottom-list-item"><a href="aboutus.php" style="text-decoration: none; color: var(--white-color);">Về chúng tôi</a></li>
                            <li class="header__bottom-list-item"><a href="notification.php" style="text-decoration: none; color: var(--white-color);">Tin tức</a></li>
                            <li class="header__bottom-list-item"><a href="contact.php" style="text-decoration: none; color: var(--white-color);">Liên hệ</a></li>
                        </div>
                        <div class="grid__column-6">
                            <p class="text-right"><span style="font-size: 1.8rem; color: var(--white-color);"><i
                                        class="fas fa-phone" style="margin-left: 5px;"></i> Hotline: 1900 6750</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <script>

                window.onscroll = function () { myFunction() };

                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;

                function myFunction() {
                    if (window.pageYOffset > sticky) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                }
            </script>
        </header>
        
        <div class="wrapper-cart img-homepage" style="margin-top: 45px;">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-8 padding-border">
                        <div class="main-cart border-card" style="background-color: var(--white-color); margin-top: 20px;">
                            <h3 class="title-cart">Danh sách sản phẩm</h3>
                            <hr>
                            <table border="1px solid black" width="100%" cellspacing="0px">
                                <thead class="header__payment">
                                    <th>STT</th>
                                    <th>Mã Hàng</th>
                                    <th>Tên Hàng</th>
                                    <th>Số Lượng</th>
                                    <th>Đơn Giá</th>
                                    <th>Tổng tiền</th>
                                </thead>
                                <tbody>
                                    <td colspan="6"><img src="./assets/img/empty_cart.jpg" alt="hinhanhtrong" style="text-align: center;"></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="grid__column-2-4 padding-border">
                        <div class="support-cart border-card" style="background-color: var(--white-color); margin-top: 20px;">
                            <h3 class="title-cart">Thanh toán hóa đơn</h3>
                            <hr>
                            <div class="grid">
                                <div class="grid__row">
                                    <div class="grid__column-6">
                                        <p class="cart-info">Số hóa đơn:</p>
                                        <p class="cart-info"> sản phẩm:</p>
                                        <p class="cart-info">Tiền giao hàng:</p>
                                        <p class="cart-info">VAT (10%):</p>
                                    </div>
                                    <div class="grid__column-6">
                                        <p class="cart-info">Chưa có hóa đơn</p>
                                        <p class="cart-info">0</p>
                                        <p class="cart-info">0 vnđ</p>
                                        <p class="cart-info">0 vnđ</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="grid">
                                <div class="grid__row">
                                    <div class="grid__column-6">
                                        <p class="cart-total">Tổng tiền:</p>
                                    </div>
                                    <div class="grid__column-6">
                                        <p class="cart-total">0 vnđ</p>
                                    </div>
                                </div>
                            </div>
                            
                                <button class="btn-cart-buy">Thanh toán</button>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__text"><a href="" class="footer__text-link">CHÍNH SÁCH BẢO MẬT</a></h3>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__text"><a href="" class="footer__text-link">QUY CHẾ HOẠT ĐỘNG</a></h3>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__text"><a href="" class="footer__text-link">CHÍNH SÁCH VẬN CHUYỂN</a></h3>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__text"><a href="" class="footer__text-link">CHÍNH SÁCH HOÀN TIỀN</a></h3>
                    </div>
                </div>
                <div class="grid__row" style="text-align: right; margin-top: 15px;">
                    <div class="grid__column-6">
                        <img src="./assets/img/20150827110756-dadangky.png" alt="da-dang-ky-cong-thuong" width="25%">
                    </div>
                    <div class="grid__column-6" style="text-align: left;">
                        <img src="./assets/img/dathongbao1.png" alt="da-thong-bao-cong-thuong" width="25%">
                    </div>
                </div>
                <div class="footer__info">
                    <p>Cửa hàng quần áo BigShopOur</p>
                    <p>Địa chỉ: Tầng 28, Tòa nhà Landmark 81, 208 Nguyễn Hữu Cảnh, Phường 12, Quận Bình Thạnh, Thành Phố Hồ Chí Minh - Email: cskh@hotro.bigshopour.com</p>
                    <p>Mã số doanh nghiệp: 094800501258 do Sở Kế hoạch & Đầu tư TP Hồ Chí Minh cấp lần đầu ngày 08/12/2020</p>
                    <p>&copy 2020 - Bản quyền thuộc về cửa hàng BigShopOur</p>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal" id="myModalRegister">
            <div class="modal__overlay" id="closeTag"></div>
            <div class="modal__body">

                <!-- Register form -->
                <div class="auth-form">
                    <span class="close">&times;</span>
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký </h3>
                            <span class="auth-form__switch-btn" id="btnChangeLogin">Đăng nhập</span>
                        </div>
                        <form method="POST" name="formRegister" onsubmit="return validateFormRegister();">
                            <div class="auth-form__form">

                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Nhập tên tài khoản"
                                        name="user">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Mật khẩu"
                                        name="password">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu"
                                        name="pass-register-confirm">
                                </div>
                                <div class="auth-form__group">
                                    <input type="email" class="auth-form__input" placeholder="Nhập email của bạn"
                                        name="email">
                                </div>
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Nhập số điện thoại"
                                        name="phone">
                                </div>
                            </div>
                            <div class="auth-form__aside">
                                <p class="auth-form-policy-text">
                                    Bằng việc đăng ký, bạn đã đồng ý với BigShopOur về
                                    <a href="" class="auth-form__policy-text-link">Các điều khoản dịch vụ</a> &
                                    <a href="" class="auth-form__policy-text-link">Chính sách bảo mật</a>
                                </p>
                            </div>
                            <div class="auth-form__controls">
                                <button class="btn auth-form__controls-back .btn--normal" type="reset">Trở
                                    lại</button>
                                <button class="btn btn--primary" type="submit" name="submitRegiter">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                    <div class="auth-form__socials">
                        <a href="" class="btn btn--size-s btn--with-icon auth-form__socials--facebook">
                            <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                            <span class="auth-form__socials-title">Kết nối với Facebook</span>
                        </a>
                        <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fab fa-google"></i>
                            <span class="auth-form__socials-title">Kết nối với google</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal" id="myModalLogin">
            <div class="modal__overlay" id="closeTagLogin"></div>
            <div class="modal__body">
                <!-- Login form -->
                
                <div class="auth-form">
                    <span class="close">&times;</span>
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập </h3>
                            <span class="auth-form__switch-btn" id="btnChangeRegister">Đăng ký</span>
                        </div>
                        <form method="POST" name="formLogin" onsubmit="return validateFormLogin();">
                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input type="text" class="auth-form__input" placeholder="Nhập tên tài khoản"
                                        name="user">
                                </div>
                                <div class="auth-form__group">
                                    <input type="password" class="auth-form__input" placeholder="Mật khẩu"
                                        name="password">
                                </div>
                            </div>
                            <div class="auth-form__aside">
                                <div class="auth-form__help">
                                    <a href="" class="auth-form__help-link auth-form__help--forgot">Quên mật
                                        khẩu</a>
                                    <span class="auth-form__help-separate"></span>
                                    <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                                </div>
                            </div>
                            <div class="auth-form__controls">
                                <button class="btn auth-form__controls-back .btn--normal" type="reset" data->Trở lại</button>
                                <button class="btn btn--primary" type="submit" name="submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="auth-form__socials">
                        <a href="https://www.facebook.com/"
                            class="btn btn--size-s btn--with-icon auth-form__socials--facebook">
                            <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                            <span class="auth-form__socials-title">Kết nối với Facebook</span>
                        </a>
                        <a href="https://www.google.com/"
                            class="auth-form__socials--google btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fab fa-google"></i>
                            <span class="auth-form__socials-title">Kết nối vGoogle</span>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="./assets/js/slideshow.js"></script>
    <script src="./assets/js/validationform.js"></script>
    <?php } ?>
</body>

</html>