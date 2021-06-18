<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hệ thống bigC</title>
   <link rel="stylesheet" href="./assets/css/style.css">
   <link rel="stylesheet" href="./assets/css/responsive.css">

   <link rel="stylesheet" href="./assets/font/themify-icons/themify-icons.css">
   
   <script type="text/javascript" src="./assets/css/vendor/bootstrap.js"></script>
   <link rel="stylesheet" href="./assets/css/vendor/bootstrap.css">
	<link rel="stylesheet" href="./assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="../admin_member.php">
</head>
<body>
    <div id="main">

    <!-- begin header  -->
        <div id="header">
            <ul id="nav">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#theband">Giới thiệu</a></li>
                <li><a href="./login.html">Đăng nhập</a></li>
                <li><a href="#contact">Đăng ký</a></li>
                <li><a href="">
                    Thông tin khác
                    <i class="ti-angle-down"></i>
                </a>
                    <ul class="subnav">
                        <li><a href="#tour">Thông tin cửa hàng</a></li>
                        <li><a href="">Thông tin khách hàng</a></li>
                        <li><a href="">Thông tin sản phẩm</a></li>
                    </ul>
                </li>
            </ul>

            <div class="search-btn">
                <i class="search-icon ti-search"></i>
            </div>
            <div id="mobile-menu" class="menu-icon mobile-menu-btn">
                <i class="ti-menu"></i>
            </div>
        </div>
     <!-- finish header -->


    <!-- begin slider -->
        <div id="slider">
             <!-- <img src="https://www.w3schools.com/w3images/la.jpg" alt="" srcset="">" alt=""> -->
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="./assets/image/places/a1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>New York</h3>
                            <p>The atmosphere in New York is lorem ipsum.</p>
                        </div>
                        
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/image/places/a2.jpg" alt="Second slide">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago - A night we won't forget.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/image/places/a3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Los Angeles</h3>
                            <p>We had the best time playing at Venice Beach!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/image/places/a4.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Los Angeles</h3>
                            <p>We had the best time playing at Venice Beach!</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <style>
                .carousel-inner>.carousel-item>img{
                    width: 100%;
                    height: auto;
                }

            </style>
        </div>
    <!-- finish slider  -->


     <!-- begin content -->
        <div id="content">
        <!-- the band -->
            <div id="theband" class="content-section">
                <h2 class="section-heading"> GIỚI THIỆU NHÂN VIÊN</h2>
                <p class="section-sub-heading">Tự hào là nhân viên bigC</p>
                <p class="about-text"> Nhân viên bigC gồm những nhân viên có kỷ luật, trách nhiệm, có trình độ chuyên môn tốt. Trong quý qua đã lựa chọn 3 nhân viên tiêu biểu của cửa hàng, họ là những nhân viên chăm chỉ, nhiệt huyết trong công việc. BigC đã biểu dương và tặng thưởng</p>
                <div class="member-list">
                    <div class="image-item member-item">
                        <div class="member-name">1. Nguyễn Kim Ngân</div>
                        <img src="./assets/image/places/ảnh1.jpg" class="image-item" alt="Name">
                    </div>
                    <div class="image-item member-item">
                        <div class="member-name">2. Hoàng Ngọc Linh</div>
                        <img src="./assets/image/places/ảnh1.jpg" class="image-item" alt="Name">
                    </div>
                    <div class="image-item member-item">
                        <div class="member-name">3. Nguyễn Thu Trang</div>
                        <img src="./assets/image/places/ảnh1.jpg" class="image-item" alt="Name">
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        <!-- the tour -->
            <div id="tour" class="tour-section">

                <div class="content-section">
                    <h2 class="section-heading text-white">THÔNG TIN HỆ THỐNG BIGC</h2>
                    <!-- <p class="section-sub-heading text-white"></p>
                    <ul class="tickets-list">
                        <li>September <span class="sold-out text-white">Sold out</span></li>
                        <li>October <span class="sold-out text-white">Sold out</span></li>
                        <li>November <span class="quantity">3</span></li>
                    </ul> -->
                    
                    <div class="place-list">
                        <div class="place-item active">
                            <img src="./assets/image/places/b1.jpg" alt="" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">bigC Hà Đông</h3>
                                <p class="place-time">ngày 24, tháng 5, năm 2021</p>
                                <p class="place-ades">Thông tin khuyến mại của bigC Hà Đông.</p>
                                <div class="place-buy"><a href="">Xem thông tin</a></div>
                            </div>

                        </div>
                        <div class="place-item">
                            <img src="./assets/image/places/b2.jpg" alt="" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">bigC Thăng Long</h3>
                                <p class="place-time">ngày 24, tháng 5, năm 2021</p>
                                <p class="place-ades">Thông tin khuyến mại của bigC Thăng Long.</p>
                                <div class="place-buy"><a href="">Xem thông tin</a></div>
                            </div>
                            
                        </div>
                        <div class="place-item">
                            <img src="./assets/image/places/b1.jpg" alt="" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">bigC Lê Trọng Tấn</h3>
                                <p class="place-time">ngày 24, tháng 5, năm 2021</p>
                                <p class="place-ades">Thông tin khuyến mại của bigC Lê Trọng Tấn.</p>
                                <div class="place-buy"><a href="">Xem thông tin</a></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
            </div>


        <!-- contact  -->
            <div id="contact" class="content-section">
                <h2 class="section-heading">ĐĂNG KÝ</h2>
                <p class="section-sub-heading">Trở thành nhân viên chính thức của hệ thống bigC</p>
            
                <div class="row contact-content">
                    <div class="col col-half contact-info">
                        <p><i class="ti-location-pin">  Hà Nội, Việt Nam</i></p>
                        <p><i class="ti-mobile">  Phone: +00 151515</i></p>
                        <p><i class="ti-email">  Email: mail@mail.com</i></p>
                    
                    </div>
                    <div class="col col-half contact-from">
                        <from action="">
                            <div class="row">
                                <div class="col col-half">
                                    <input type="text" name="" placeholder="Họ và tên" required id="" class="from-control">
                                </div>
                                <div class="col col-half">
                                    <input type="email" name="" placeholder="Email" required id="" class="from-control">
                                </div>
                            
                            </div>
                            <div class="clearr"></div>
                            <div class="row">
                                <div class="col col-full">
                                    <input type="text" name="" placeholder="Mô tả bản thân:" required id="" class="from-row2">
                                </div>
                            </div>
                            <input class="place-buy pull-right" type="submit" value="GỬI">
                        </from>
                    </div>
                </div>
            </div>
        
            <!-- map  -->
            <div class="map-section">
                <img src="./assets/image/places/map.jpg" alt="map">
            </div>
                
        </div>
        <div id="footer">
            <div class="socials-list">
                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
                <a href=""><i class="ti-pinterest-alt"></i></a>
                <a href=""><i class="ti-twitter"></i></a>
                <a href=""><i class="ti-linkedin"></i></a>

            </div>
            <p class ="copy">Powered by<a href="">w3.css</a></p>
        </div>

    </div>
    <script>
        var header = document.getElementById('header');
        var mobileMenu = document.getElementById('mobile-menu');
        
       
    //    đóng mở mobile
        mobileMenu.onclick = function(){
            var isClosed= header.clientHeight=== 46;
            if(isClosed){
                header.style.height= 'auto';
            }else {
                header.style.height= null;
            }
        }
        var menuItems = document.querySelectorAll('#nav li a[href*="#"] ');
        for(var i = 0; i < menuItems.length; i++){
            var  menuItem= menuItems[i];
            
            menuItem.onclick= function(){
                header.style.height= null;
            }
        }
    </script>


</body>

</html>