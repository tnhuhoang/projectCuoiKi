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
                    <span id="h-search-button" onclick="toggleSearch()"><i class="fas fa-search"></i></span>
                </form>
                <!-- seach box -->
                <?php include("searchBox.php") ?>

                <!-- //search box -->
            </div>
        </nav>

    </header>
</div>