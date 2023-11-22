<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE,edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
<section class="myheader">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-md-2 ms-3"><i class="fa-solid fa-crown"></i>
                <h2>NHT FOOD</h2>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
            <div class="col-md-3 ">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fs-3 text-danger"><i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">Tư vấn hỗ trợ <br>
                                        <strong class="text-danger">0125647893</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fs-3 text-danger"><i class="fa-regular fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">Xin Chào <br>
                                    <a href="dangnhap.php"> <strong class="text-danger">Đăng nhập</strong></a>
                                    <a href="dangxuat.php"> <strong class="text-danger">Đăng xuất</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chỗ buton khi cần nhấn vào -->
                    <div class="col-md-2 ">
                        <div class="row">
                            <div class="col"> <a href="#" class=" position-relative">
                                    <span class="fs-4"> <i class="fa-regular fa-heart"></i></span>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        99+

                                    </span>
                                </a></div>
                                <div class="col"> <a href="#" class=" position-relative">
                                    <span class="fs-4"> <i name="cart"  id="cart-icon" class="fa-solid fa-bag-shopping"></i></span>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count">
                                        0

                                    </span>
                                </a>
                            </div>
                            <div class="col"> <a href="#" class=" position-relative">
                                    <span class="fs-4"> <i class="fa-solid fa-share-from-square"></i></span>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        9+

                                    </span>
                                </a></div>
        </div>
    </div>
</section>

<section class="mymainmenu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                                <a class="navbar-brand d-none" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                            <a class="nav-link text-white" aria-current="page" href="index.php">Trang chủ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" aria-current="page" href="list.php">Các Món Ăn
                                                Nổi Bật</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="gth.php">Giới Thiệu Về Chúng Tôi</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Các Bữa Ăn
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" aria-disabled="true">Tin tức</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" aria-disabled="true"></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" aria-disabled="true">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br><br><br>
<style>
</style>
<section class="new">
    <div class="new_dinner">
        <section class="three_post__home_1">
            <h2 class="title_dinner">
                SẢN PHẨM NỔI BẬT
            </h2>
            <center><h5><strong>BỮA SÁNG</strong></h5></center>
            <div class="three_post__inner_1">
                <div class="list_items_1">
                    <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
            </div>
        </section>
        <section class="three_post__home_1">
            <div class="three_post__inner_2">
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
<div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>

                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <div class="card__content" data-tag="Beef Stroganoff Recipes">
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
            </div>
        </section>
        <section class="new">
    <div class="new_dinner">
        <section class="three_post__home_1">
            <center><h5><strong>BỮA TRƯA</strong></h5></center>
            <div class="three_post__inner_1">
                <div class="list_items_1">
                    <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
            </div>
        </section>
        <section class="three_post__home_1">
            <div class="three_post__inner_2">
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
<div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>

                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <div class="card__content" data-tag="Beef Stroganoff Recipes">
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
            </div>
        </section>
        <section class="new">
    <div class="new_dinner">
        <section class="three_post__home_1">
            <center><h5><strong>BỮA TỐI</strong></h5></center>
            <div class="three_post__inner_1">
                <div class="list_items_1">
                    <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
            </div>
        </section>
        <section class="three_post__home_1">
            <div class="three_post__inner_2">
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
<div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>

                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
                <div class="list_items_1">
                <div class="food-box">
                        <div class="pic">
                            <img  class="food-img" src="images/212759_Kielbasa-with-Brussels-Sprouts-in-Mustard-Cream-Sauce_naples34102_4557692_original-4x3-1-776b4326f85d4b5089e8712bf94d41c5.webp" height="240px" width="360px" alt="">
                        </div>
                        <div class="card__content" data-tag="Beef Stroganoff Recipes">
                        <h2 class="food-title">Tên</h2>
                        <span class="food-price">199.000</span>
                        <ion-icon name="cart" class="add-cart"></ion-icon>
                        </div>
                </div>
            </div>
        </section>
        
        <section class="myfooter bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Dịch vụ</h4>
                    <ul class="itemlist">
                        <li><a href="https://tamnguyen.com.vn/Thiet-ke-website.html" title="Thiết kế website">Thiết kế
                                website</a></li>
                        <li><a href="https://tamnguyen.com.vn/Ten-mien-quoc-te.html"
                                title="Đăng ký tên miền quốc tế">Đăng ký tên miền quốc tế</a></li>
                        <li><a href="https://tamnguyen.com.vn/Ten-mien-viet-nam.html"
                                title="Đăng ký tên miền Việt Nam">Đăng ký tên miền Việt Nam</a></li>
                        <li><a href="https://tamnguyen.com.vn/linux-hosting.html" title="Dịch vụ Hosting">Dịch vụ
                                Hosting</a></li>
                        <li><a href="https://tamnguyen.com.vn/Du-an-website-da-thiet-ke.html" title="Khách hàng">Khách
                                hàng</a></li>
                        <li><a href="https://tamnguyen.com.vn/Mau-website.html" title="Mẫu website">Mẫu website</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Dịch vụ</h4>
                    <ul class="itemlist">
                        <li><a href="https://tamnguyen.com.vn/Thiet-ke-website.html" title="Thiết kế website">Thiết kế
                                website</a></li>
                        <li><a href="https://tamnguyen.com.vn/Ten-mien-quoc-te.html"
                                title="Đăng ký tên miền quốc tế">Đăng ký tên miền quốc tế</a></li>
                        <li><a href="https://tamnguyen.com.vn/Ten-mien-viet-nam.html"
                                title="Đăng ký tên miền Việt Nam">Đăng ký tên miền Việt Nam</a></li>
                        <li><a href="https://tamnguyen.com.vn/linux-hosting.html" title="Dịch vụ Hosting">Dịch vụ
                                Hosting</a></li>
                        <li><a href="https://tamnguyen.com.vn/Du-an-website-da-thiet-ke.html" title="Khách hàng">Khách
                                hàng</a></li>
                        <li><a href="https://tamnguyen.com.vn/Mau-website.html" title="Mẫu website">Mẫu website</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Dịch vụ</h4>
                    <ul class="itemlist">
                        <li><a href="https://tamnguyen.com.vn/Thiet-ke-website.html" title="Thiết kế website">Thiết kế
                                website</a></li>
                        <li><a href="https://tamnguyen.com.vn/Ten-mien-quoc-te.html"
                                title="Đăng ký tên miền quốc tế">Đăng ký tên miền quốc tế</a></li>
                        <li><a href="https://tamnguyen.com.vn/Ten-mien-viet-nam.html"
                                title="Đăng ký tên miền Việt Nam">Đăng ký tên miền Việt Nam</a></li>
                        <li><a href="https://tamnguyen.com.vn/linux-hosting.html" title="Dịch vụ Hosting">Dịch vụ
                                Hosting</a></li>
                        <li><a href="https://tamnguyen.com.vn/Du-an-website-da-thiet-ke.html" title="Khách hàng">Khách
                                hàng</a></li>
                        <li><a href="https://tamnguyen.com.vn/Mau-website.html" title="Mẫu website">Mẫu website</a></li>
                    </ul>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/Screenshot_2023-11-07_202913-removebg-preview.png" class="img-fluid" width="200px"
                        height="200px" alt="logo" <h4>NHT FOOD</h4>

                </div>
                <div class="col-md-6">
                    <h5>Nhận tin khuyến mãi</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text text-white bg-danger" id="basic-addon2">Đăng ký</span>
                    </div>
                    <div class="icon_footer">
                        <div class="wrappers">
                            <div class="icons facebooks">
                                <i class="fab fa-facebook-f"></i>
                                <span class="tooltips">3.9M</span>
                            </div>
                            <div class="icons githubs">
                                <i class="fab fa-github"></i>
                                <span class="tooltips">3.9M</span>
                            </div>
                            <div class="icons twitters">
                                <i class="fab fa-twitter"></i>
                                <span class="tooltips">3.9M</span>
                            </div>
                            <div class="icons instagrams">
                                <i class="fab fa-instagram"></i>
                                <span class="tooltips">3.9M</span>
                            </div>
                            <div class="icons youtubes">
                                <i class="fab fa-youtube"></i>
                                <span class="tooltips">3.9M</span>
                            </div>
                        </div> 
                    </div>

                    
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="clo-md-6"> @Bản quyền thuộc về NHT GROUP cấp bởi NHT</div>
            </div>
        </div>
    </section>
    <div class="nav_cart">
                                <div class="cart">
                                <div class="cart-title">Cart Items</div>
                                        <div class="cart-content">

                                        </div>
                                        
                                    <div class="total">
                                        <div class="total-title">Total</div>
                                        <div class="total-price">VNĐ</div>
                                    </div>

                                    <button class="btn-buy">Place Order</button>

                                    <ion-icon name="close" id="cart-close"></ion-icon>
                                </div>
                            </div>
        <script src="./view/js/app.js"></script>
    </div>
    </section>
    </body>
</html>
