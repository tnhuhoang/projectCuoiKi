<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoa Cong Nghe Thong Tin TLU</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@1,500&display=swap" rel="stylesheet">
    
    
    
    
    <!-- //font -->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9b1d6678e4.js" crossorigin="anonymous"></script>
    <!-- //font awesome -->
    <!-- CSS only -->
    <!-- boostrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- //boostrap CDN -->

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- //my scc -->



    <!-- JS, Popper.js, and jQuery -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body onload="initialElement()">
    <!-- facebook plugin -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="ZZpvebDi"></script>
    <!-- facebook plugin -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm h-navbar" id="h-main-navbar">
                <header>
                    
                    <nav class="navbar navbar-expand-sm navbar-light">
                        <a class="navbar-brand h-nav-brand" href="#">
                            <img src="images/logo.jpg" alt="logo" class="img-fluid">  
                        </a>
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active dropdown h-nav-item">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dao Tao</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dao tao dai hoc</a>
                                        <a class="dropdown-item" href="#">Dao tao sau dai hoc</a>
                                        <a class="dropdown-item" href="#">Chuan dau ra</a>
                                        <a class="dropdown-item" href="#">Mo Hinh dao tao</a>
                                        <a class="dropdown-item" href="#">De Cuong mon Hoc</a>
                                    </div>
                                    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tuyen Sinh</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Sinh Vien</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Tai Lieu sinh vien</a>
                                        <a class="dropdown-item" href="#">To tu van hoc tap</a>
                                        <a class="dropdown-item" href="#">Bieu mau</a>
                                        <a class="dropdown-item" href="#">Luan van tot nghiep</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Cuu Sinh Vien</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Nghien cuu Khoa Hoc</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Cac de tai du an</a>
                                        <a class="dropdown-item" href="#">Thong tin seminar</a>
                                        <a class="dropdown-item" href="#">Cong trinh cong bo</a>
                                        <a class="dropdown-item" href="#">Cac phong thi nghiem</a>
                                    </div>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search"> -->
                                <a href="#" id="h-search-button" onclick="toggleSearch()"><i class="fas fa-search"></i></a>
                            </form>
                            <!-- seach box -->
                            <div class="h-search-slide" id="h-slide-search">
                                <div class="h-search-exit">
                                    <button class="h-exit-button" onclick="closeSearchBox()">&times</button>
                                </div>
                                <div class="h-search-box">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                        <a href="#" id="h-search-button"><i class="fas fa-search"></i></a>
                                    </form>
                                </div>
                                <div class="h-search-result">
                                    <div class="h-s-r-found">
                                        <p class="h-s-r-found-text">Ket Qua</p>
                                        <div>
                                            <a class="h-a" href="#">
                                                <img src="images/i3.jpg" class="img-fluid h-search-img" alt="">
                                                <h5>
                                                Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28
                                                </h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="h-a" href="#">
                                                <img src="images/i3.jpg" class="img-fluid h-search-img" alt="">
                                                <h5>
                                                Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28
                                                </h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="h-a" href="#">
                                                <img src="images/i3.jpg" class="img-fluid h-search-img" alt="">
                                                <h5>
                                                Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28
                                                </h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="h-s-r-not-found">
                                        <p class="h-s-text">K tim thay ket qua</p>
                                    </div>
                                </div>
                                <div class="h-search-recent">
                                    <p class="h-s-r-title">Gan day</p>
                                    <p class="h-s-r-text"><a href="#" class="h-a">- dao tao sinh vien</a></p>
                                    <p class="h-s-r-text"><a href="#" class="h-a">- tim viec</a></p>
                                </div>
                            </div>

                            <!-- //search box -->
                        </div>
                    </nav>

                </header>
            </div>
            
        </div>
        <div class= "row">
            <!-- slide show -->
            <div class="carousel slide carousel-fade" data-ride="carousel" id="main-carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active h-carousel-item" data-interval="4000">
                        <img class="d-block h-carousel-image" src="images/i1.jpg" alt="i1">
                    </div>
                    <div class="carousel-item h-carousel-item" data-interval="4000">
                        <img class="d-block h-carousel-image" src="images/i2.jpg" alt="i1">
                    </div>
                    <div class="carousel-item h-carousel-item" data-interval="4000">
                        <img class="d-block h-carousel-image" src="images/i3.jpg" alt="i1">  
                    </div>
                    <div class="carousel-item h-carousel-item" data-interval="4000">
                        <img class="d-block h-carousel-image" src="images/i4.jpg" alt="i1">  
                    </div>
                    <div class="carousel-item h-carousel-item" data-interval="4000">
                        <img class="d-block h-carousel-image" src="images/i5.jpg" alt="i1">  
                    </div>
                </div>
            
                <!-- controler -->
                <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    
                </a>
                <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    
                </a>
            </div>

        <!-- //slide show -->
        </div>
        <!-- main post -->
        <div class="row">
            
        </div>
        <div class="row bg-light h-main">
            <div class="container-fluid bg-light h-con-main">
                <div class="row">
                    
                    <div class="col-sm-3 h-left-sidebar h-main-card">
                        <div class="h-left-sidebar-top">
                            <h2 class="h-main-title">
                                Tin Tuc
                            </h2>
                            <ul>
                                <li class="h-li h-nav-side"><a href="#" class="h-a" >Trong truong</a></li>
                                <li class="h-li h-nav-side"><a href="#" class="h-a" >ngoai truong</a></li>
                                <li class="h-li h-nav-side"><a href="#" class="h-a" >Trong lop</a></li>
                                <li class="h-li h-nav-side"><a href="#" class="h-a" >ngoai lop</a></li>

                            </ul>
                        </div>
                        <div class="h-left-sidebar-bottom">
                            <h2 class="h-main-title">
                                Tin Tuc Noi Bat
                            </h2>
                            <div class="h-sidebar-post">
                                <a href="#" class="h-a" role="button" data-toggle="modal" data-target="#hSidebarModal">
                                    <div class="h-sidebar-post-img">
                                    <img src="images/i1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <h3>Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28</h3>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="hSidebarModal" data-backdrop="true" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Kết quả của đội tuyển Olympic Tin học sinh viên tại kỳ thi toàn quốc lần thứ 28</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="images/i1.jpg" class="img-fluid" alt="">
                                                <p>Olympic Tin học sinh viên Việt Nam là sáng kiến của hội tin học Việt Nam, Hội sinh viên Việt Nam và Bộ giáo dục và đào tạo nhằm động viên phong trào học tập tin học và khuyến khích các tài năng tin học trẻ. Bắt đầu từ năm 1992, kỳ thi đã được tổ chức định kỳ hàng năm với sự tham gia của đông đảo sinh viên các trường Đại học và Cao đẳng trong cả nước.

Từ năm 2006, Việt Nam chính thức tổ chức Kỳ thi lập trình viên sinh viên quốc tế ACM/ICPC ( ACM International Collegiate Programming Contess) khu vực Châu Á. Từ năm 2007, Olympic Tin học sinh viên Việt Nam đã kết nối tổ chức cùng thời điểm với kỳ thi ACM/ICPC thành một Hội thi tin học cho sinh viên Việt nam và khu vực Châu Á. Quy mô và phạm vi của kỳ thi được mở rộng.

Năm 2019, kỳ thi Olympic Tin học sinh viên toàn quốc có sự tham dự của hơn 700 sinh viên công nghệ thông tin xuất sắc đến từ 100 trường ĐH, CĐ từ khắp mọi miền trên cả nước và 17 đội tuyển quốc tế đến từ các nước Nhật Bản, Hàn Quốc, Singapore, Trung Quốc, Indonesia, Myanmar... Trong đó, có các đội tuyển đến từ các trường mạnh và nổi tiếng trong lĩnh vực CNTT như Pekin University, ĐH Quốc gia Kyoto, ĐH Korea, ĐH Quốc gia Singapore, ĐH Quốc gia Indonesia.

Đội tuyển Olympic Tin học Trường Đại học Thủy lợi gồm 7 sinh viên do thầy Trương Xuân Nam làm trưởng đoàn đã dự thi 3 nội dung: Chuyên tin học, Không chuyên tin học (dành cho sinh viên không chuyên ngành CNTT và sinh viên năm nhất ngành CNTT) và ICPC khu vực châu Á. Đây là lần đầu tiên Nhà trường tham dự thi kỳ thi ICPC.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- //modal -->
                                

                                <div class="h-sidebar-post-content">
                                    
                                    
                                    <a href="#" class="h-a">Xem chi tiet <i class="fas fa-greater-than"></i></a>
                                </div>
                                
                            </div>
                            <div class="h-sidebar-post">
                                <a href="" class="h-a">
                                    <div class="h-sidebar-post-img">
                                    <img src="images/i1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <h3>Title</h3>
                                </a>
                                    <div class="h-sidebar-post-content">
                                    
                                    
                                    <a href="#" class="h-a">Xem chi tiet <i class="fas fa-greater-than"></i></a>
                                </div>
                                
                            </div>
                            <div class="h-sidebar-post">
                                <a href="" class="h-a">
                                    <div class="h-sidebar-post-img">
                                    <img src="images/i1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <h3>Title</h3>
                                </a>
                                    <div class="h-sidebar-post-content">
                                    
                                    
                                    <a href="#" class="h-a">Xem chi tiet <i class="fas fa-greater-than"></i></a>
                                </div>
                                
                            </div>
                            <div class="h-sidebar-post">
                                <a href="" class="h-a">
                                    <div class="h-sidebar-post-img">
                                    <img src="images/i1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <h3>Title</h3>
                                </a>
                                    <div class="h-sidebar-post-content">
                                    
                                    
                                    <a href="#" class="h-a">Xem chi tiet <i class="fas fa-greater-than"></i></a>
                                </div>
                                
                            </div>


                        </div>
                        
                        




                    </div>







                    <div class="col-sm-6 h-main-content h-main-card">
                        <h2 class="h-main-title">
                            Tin Moi Nhat
                        </h2>
                        <div class="h-main-con-post">
                            <div class="h-con-post">
                                <div class="h-main-post-img">
                                    <img src="images/i1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="h-post-content">
                                    <p>16/7/2000</p>
                                    <h3>Title</h3>
                                    <p class="h-post-description">
                                        description go here
                                    </p>
                                </div>
                            </div>
                            <div class="h-post-break">
                                
                            </div>
                            <!-- post -->
                            <div class="h-con-post">
                                <div class="h-main-post-img">
                                    <img src="images/i1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="h-post-content">
                                    <p>16/7/2000</p>
                                    <h3>Title</h3>
                                    <p class="h-post-description">
                                        description go here
                                    </p>
                                </div>
                            </div>
                            <div class="h-post-break">
                                
                            </div>
                            <!-- //post -->
                            <!-- post -->
                            <div class="h-con-post">
                                <div class="h-main-post-img">
                                    <img src="images/i1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="h-post-content">
                                    <p>16/7/2000</p>
                                    <h3>Title</h3>
                                    <p class="h-post-description">
                                        description go here
                                    </p>
                                </div>
                            </div>
                            <div class="h-post-break">
                                
                            </div>
                            <!-- //post -->
                        </div>
                        
                        
                    </div>
                    <div class="col-sm-3 h-right-sidebar h-main-card">
                        <h2 class="h-main-title">
                            Thong Bao
                        </h2>
                        <div class="h-right-sidebar-content">
                            <p class="h-right-sidebar-content-date">16/7/2000</p>
                            <h4>Tổ chức Cuộc thi “Sinh viên với ý tưởng khởi nghiệp” năm 2020Title</h4>
                        </div>
                        <div class="h-right-sidebar-content">
                            <p class="h-right-sidebar-content-date">16/7/2000</p>
                            <h4>Thông báo Về việc điều chỉnh kế hoạch chi tiết Lễ tốt nghiệp Đại học chính quy học kỳ 1 năm học 2019 - 2020</h4>
                        </div>
                        <div class="h-right-sidebar-content">
                            <p class="h-right-sidebar-content-date">16/7/2000</p>
                            <h4>CÔNG TY SMARTOSC TÌM KIẾM THỰC TẬP SINH TÀI NĂNG (PHP/ TESTER)</h4>
                        </div>
                        <div class="h-right-sidebar-content">
                            <p class="h-right-sidebar-content-date">16/7/2000</p>
                            <h4>CÔNG TY SMARTOSC TÌM KIẾM THỰC TẬP SINH TÀI NĂNG (PHP/ TESTER)</h4>
                        </div>
                        <div class="h-right-sidebar-content">
                            <p class="h-right-sidebar-content-date">16/7/2000</p>
                            <h4>CÔNG TY SMARTOSC TÌM KIẾM THỰC TẬP SINH TÀI NĂNG (PHP/ TESTER)</h4>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- image nav -->
            <div class="row h-img-nav-con bg-light">
                <div class="col-sm-6 h-img-nav-left">
                    <div class="container-fluid h-i-n-l-con">
                        <div class="row">
                            <div class="col-sm">
                                <div class="h-img-nav-content">
                                    <img src="images/i2.jpg" class="img-fluid">
                                    <a href="#" class="h-a"><div class="h-img-nav-title">
                                        Anh khoa CNTT
                                    </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-6 h-img-nav-right">
                    <div class="container-fluid h-i-n-r-con">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="h-img-nav-content">
                                    <img src="images/i2.jpg" class="img-fluid">
                                    <a href="#" class="h-a"><div class="h-img-nav-title">
                                        Loi chao mung
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="h-img-nav-content">
                                    <img src="images/i2.jpg" class="img-fluid">
                                    <a href="#" class="h-a"><div class="h-img-nav-title">
                                        Giang vien
                                    </div></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="h-img-nav-content">
                                    <img src="images/i2.jpg" class="img-fluid">
                                    <a href="#" class="h-a"><div class="h-img-nav-title">
                                        Nghien cuu khoa hoc
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="h-img-nav-content">
                                    <img src="images/i2.jpg" class="img-fluid">
                                    <a href="#" class="h-a"><div class="h-img-nav-title">
                                        Dao tao
                                    </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- //image nav -->

        </div>
        <!-- //main post -->
        
        <!-- footer -->
        <div class="row h-footer" >
            <div class="col-sm-3">
                <div class="h-footer-address">
                    <h5>Khoa cong nghe thong tin</h5>
                    <div class="h-f-a-detail">
                        <h6>Dia chi</h6>
                        <p>TẦNG 2 NHÀ C1, 175 TÂY SƠN, QUẬN ĐỐNG ĐA, THÀNH PHỐ HÀ NỘI</p>
                    </div>
                    <div class="h-f-a-detail">
                        <h6>Dien thoai</h6>
                        <p>(04) 35632211</p>
                    </div>
                    <div class="h-f-a-detail">
                        <h6>Fax</h6>
                        <p>(04) 3563 3351</p>
                    </div>
                    <div class="h-f-a-detail">
                        <h6>Email</h6>
                        <p>vpkcntt@tlu.edu.vn</p>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-3">
                <ul class="h-footer-nav">
                    <li class="h-li"><a href="#" class="h-a">Mo hinh dao tao</a></li>
                    <li class="h-li"><a href="#" class="h-a">Dao tao dai hoc</a></li>
                    <li class="h-li"><a href="#" class="h-a">Dinh Huong nganh nghe</a></li>
                    <li class="h-li"><a href="#" class="h-a">Dao tao sau dai hoc</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="h-footer-nav">
                    <li class="h-li"><a href="#" class="h-a">Cong nghe phan mem</a></li>
                    <li class="h-li"><a href="#" class="h-a">He thong thong tin</a></li>
                    <li class="h-li"><a href="#" class="h-a">Khoa hoc may tinh</a></li>
                    <li class="h-li"><a href="#" class="h-a">Ky thuat may tinh va mang</a></li>
                    <li class="h-li"><a href="#" class="h-a">Toan hoc</a></li>
                    <li class="h-li"><a href="#" class="h-a">Trung tam tin hoc</a></li>
                </ul>
            </div>
            <div class="col-sm-3 h-fb-plugin">
                <!-- facebook fanpage -->
                <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn/" data-tabs="event" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn/">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
                <!-- //facebook fanpage -->
            </div>
        </div>
        <div class="row h-footer-copyright">
            <div class="col-sm-9 h-f-c-title">
                <h6>Copyright &copy 2020 CSE TLU. All rights reserved.</h6>
            </div>
            <div class="col-sm-3">
                <div class="h-contact-icon"><a href="#"><i class="fa fa-facebook"></i></a></div>
                <div class="h-contact-icon"><a href="#"><i class="fa fa-youtube"></i></a></div>
                <div class="h-contact-icon"><a href="#"><i class="fa fa-twitter"></i></a></div>
            </div>
        </div>
        <!-- //footer -->
    </div>
    




    <!-- my js -->
    <script src="js/scripts.js"></script>
    <!-- //my js -->

    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- // slick carousel -->
</body>


</html>