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
<style>
  p {
    text-align: justify; /* Căn đều hai bên lề */
    max-width: 1000px; /* Đặt chiều rộng tối đa để tránh lớn quá trên màn hình rộng */
    margin-left: auto; /* Tự động căn lề trái */
    margin-right: auto; /* Tự động căn lề phải */
    padding: 10px; /* Thêm padding nếu cần thiết */
  }
</style>    
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
                                            <a class="nav-link text-white" href="#">Giới Thiệu Về Chúng Tôi</a>
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
<br><br><br><br>
<center><h1><strong>GIỚI THIỆU</strong></h1></center>
<p>
Chào mừng quý khách đến với <strong>NHT FOOD</strong> - Nơi khám phá hương vị đặc trưng của ẩm thực đường phố Việt Nam!
<br>
<strong>NHT FOOD</strong> tự hào là địa điểm lý tưởng dành cho những người yêu thích và đam mê đặc sản ẩm thực đường phố. Chúng tôi cam kết mang đến cho quý khách trải nghiệm ẩm thực tuyệt vời nhất với những món ngon độc đáo, pha trộn đúng chất nguyên liệu và hương vị truyền thống.
<br>
<center><img src="images/banner1.jpg" width="800px"></center>
<br>
<p>
Với không gian ấm cúng và thoải mái, <strong>NHT FOOD</strong> là địa điểm lý tưởng để bạn thư giãn và tận hưởng bữa ăn ngon bên gia đình và bạn bè. Bếp nhà hàng chúng tôi luôn tuân thủ các quy trình an toàn vệ sinh thực phẩm, từng bước chế biến để đảm bảo bạn nhận được những món ăn tươi ngon và an toàn nhất.
<br>
Chúng tôi tự tin mang đến hương vị chân thật, đậm đà của ẩm thực đường phố Việt Nam, từ những chiếc bánh mì phô mai thơm béo, đến những quả bún riêu tươi ngon, hay những tô phở nồng hổi đậm đà. Bạn sẽ không chỉ thưởng thức đồ ăn ngon, mà còn trải nghiệm sự ấm áp, gần gũi như ở nhà.
<br>
<center><img src="images/banner3.webp" width="800px"></center>
<br>
<p>
<strong>NHT FOOD</strong> không chỉ là địa điểm để thưởng thức ẩm thực mà còn là nơi để cảm nhận và lan tỏa tình yêu thương qua những bữa ăn ngon. Chúng tôi luôn lắng nghe ý kiến của khách hàng để không ngừng cải tiến và hoàn thiện dịch vụ, mang đến trải nghiệm tốt nhất cho mọi thực khách.
<br>
Hãy đến và trải nghiệm không gian ẩm thực độc đáo tại NHT FOOD - nơi quy tụ những hương vị tinh tế, đặc trưng của đường phố Việt Nam. Chúng tôi tin rằng, sau mỗi bữa ăn, quý khách sẽ mang theo những kí ức ngon lành và hạnh phúc.
<br>
<strong>NHT FOOD</strong> không chỉ là nhà hàng, mà là một hành trình mang đến cho bạn trải nghiệm ẩm thực tinh tế và sâu sắc, đưa bạn đến gần hơn với những hương vị truyền thống, đồng thời cũng là không gian tận hưởng niềm vui của sự gặp gỡ và chia sẻ.
<br>
Tại đây, chúng tôi tận hưởng việc sáng tạo và biến tấu các món ăn đường phố quen thuộc thành những tác phẩm nghệ thuật ẩm thực, giữ nguyên bản chất truyền thống và đồng thời thêm vào đó một chút hiện đại, đưa hương vị lên một tầm cao mới.
<br>
Đội ngũ đầu bếp tài năng của chúng tôi luôn chọn lựa những nguyên liệu tươi ngon nhất, kết hợp với kỹ thuật chế biến hàng đầu, để mang đến cho thực khách những bữa ăn không chỉ ngon miệng mà còn làm cho bạn nhớ mãi.
<br>
Không gian ấm cúng và thoải mái tại NHT FOOD là nơi lý tưởng để bạn thư giãn cùng gia đình và bạn bè. Bạn sẽ cảm nhận được sự gần gũi, như là một buổi tụ tập thân mật, nơi tình bạn và hương vị hòa quyện.
<br>
Chúng tôi tin rằng, <strong>NHT FOOD</strong> không chỉ là điểm đến để thưởng thức đặc sản, mà còn là nơi để trải nghiệm những câu chuyện, những ký ức qua từng khẩu phần ẩm thực đặc sắc. Hãy đồng hành cùng chúng tôi, để mỗi bữa ăn tại NHT FOOD trở thành một hành trình ẩm thực đầy ý nghĩa và khám phá!
</p>
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
    </body>
</html>
