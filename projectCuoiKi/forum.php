<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum CSE TLU</title>
    <!-- Font -->
    <?php
        include("includes/fonts.php")
    ?> 
    <!-- //font -->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9b1d6678e4.js" crossorigin="anonymous"></script>
    <!-- //font awesome -->
    <!-- CSS only -->
    <!-- boostrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- //boostrap CDN -->

    <!-- my css -->
    <link rel="stylesheet" href="css/forum.css">
    <!-- //my scc -->



    <!-- JS, Popper.js, and jQuery -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row h-logo-row">
            <div class="col-sm-2">
                <div class="h-logo">
                    <a href="forum.php" class="h-a"><Span class="h-char-1">C</span><Span class="h-char-2">S</span><Span  class="h-char-3">E</Span></a>     
                </div>
            </div>
            <div class="col-sm h-user-row d-flex align-items-center">
                <div class="h-user">
                    <div class="h-u-panel">
                        <ul>
                            <li class="h-li">
                                <i class="fas fa-users"></i> Tai Khoan
                                <ul class="h-user-options"> 
                                    <li class="h-li">
                                        Dang nhap
                                    </li>
                                    <li class="h-li">
                                        Dang ki
                                    </li>
                                    <li class="h-li">
                                        Thong tin
                                    </li>
                                    <li class="h-li">
                                        Dang xuat
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-title-row">
            <div class="col-sm-10">
                CSE TLU FORUMS
            </div>  
        </div>
        <div class="row h-main-row bg-light" >
            <div class="container h-main-con">
                <div class="row h-main-row h-nav-top" >
                    <div ><i class="fas fa-home"></i><i class="fas fa-chevron-right"></i><span>Topic 1</span></div>
                </div>
                <div class="row h-main-row">
                    <div class="container-fluid h-topics-content-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="container-fluid">
                                    
                                    <div class="h-topics-title">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                Tuyen sinh
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                Tra loi
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                Thoi gian
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="container-fluid">
                                    
                                    <div class="h-t-c-dis">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-title"> Tuyen sinh
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                6 binh luan
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                16/7/2000
                                            </div>
                                        </div>
                                        <div class="row h-t-c-c">
                                        

                                            <a href="" class="h-a"><i class="far fa-thumbs-up"></i>
                                            <i class="fas fa-thumbs-up"></i>Thich</a>
                                            <span class="h-a h-reply"><i class="far fa-comments"></i> Tra Loi</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="h-comment-log">
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae placeat aspernatur odio hic eum deserunt dolores eaque labore necessitatibus sint ut quis nam, fugiat architecto neque alias tenetur eos natus.
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem voluptas corrupti, natus impedit veniam provident enim vitae, a est aliquam sed autem nisi quae repellat velit. Veritatis sequi accusantium similique.
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-input">
                                                        <form action="" class="form h-form">
                                                            
                                                            <input type="text" placeholder="your comment">
                                                            <button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <div class="h-t-c-dis">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-title"> Tuyen sinh
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                6 binh luan
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                16/7/2000
                                            </div>
                                        </div>
                                        <div class="row h-t-c-c">
                                        

                                            <a href="" class="h-a"><i class="far fa-thumbs-up"></i>
                                            <i class="fas fa-thumbs-up"></i>Thich</a>
                                            <span class="h-a h-reply"><i class="far fa-comments"></i> Tra Loi</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="h-comment-log">
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae placeat aspernatur odio hic eum deserunt dolores eaque labore necessitatibus sint ut quis nam, fugiat architecto neque alias tenetur eos natus.
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem voluptas corrupti, natus impedit veniam provident enim vitae, a est aliquam sed autem nisi quae repellat velit. Veritatis sequi accusantium similique.
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-input">
                                                        <form action="" class="form h-form">
                                                            
                                                            <input type="text" placeholder="your comment">
                                                            <button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <div class="h-t-c-dis">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-title"> Tuyen sinh
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                6 binh luan
                                            </div>
                                            <div class="col-sm-2 h-t-t-t">
                                                16/7/2000
                                            </div>
                                        </div>
                                        <div class="row h-t-c-c">
                                    
                                            <a href="" class="h-a"><i class="far fa-thumbs-up"></i>
                                            <i class="fas fa-thumbs-up"></i>Thich</a>
                                            <span role="button" data-toggle="modal" data-target="#replyModal" class="h-a h-reply"><i class="far fa-comments"></i> Tra Loi</span>
                                            <!-- Modal -->
                                            <div class="modal fade" id="replyModal" data-backdrop="true" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        
                                                        <div class="modal-body">
                                                            <ul class="nav nav-tabs">
                                                                <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#h-tabs-login">Login</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#h-tabs-register">Register</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                                                                </li>
                                                            </ul>

                                                            <!-- Tab panes -->
                                                            <div class="tab-content">
                                                                <div id="h-tabs-login" class="container tab-pane active"><br>
                                                                    <div class="h-tab-login-form">
                                                                        <h3>Login</h3>
                                                                        <form action="" > 
                                                                            <table>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><label for="username">Username</label></td>
                                                                                        <td><input type="text" id= "username" placeholder = "your username"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        
                                                                                        <td><label for="password">Password</label></td>
                                                                                        <td><input type="password" id= "password" placeholder = "your password"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        
                                                                                        <td></td>
                                                                                        <td><input type="checkbox" id="checkbox">
                                                                                            <label for="checkbox">Ghi nho dang nhap</label>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        
                                                                                        <td></td>
                                                                                        <td><button class="btn btn-primary" type="submit">Login</button></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>                                                   
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div id="h-tabs-register" class="container tab-pane fade"><br>
                                                                    <h3>Menu 1</h3>
                                                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                                </div>
                                                                <div id="menu2" class="container tab-pane fade"><br>
                                                                    <h3>Menu 2</h3>
                                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- //modal -->



                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="h-comment-log">
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae placeat aspernatur odio hic eum deserunt dolores eaque labore necessitatibus sint ut quis nam, fugiat architecto neque alias tenetur eos natus.
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem voluptas corrupti, natus impedit veniam provident enim vitae, a est aliquam sed autem nisi quae repellat velit. Veritatis sequi accusantium similique.
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-log-user">
                                                        <img src="images/i2.jpg" alt="" class="img-fluid h-user-img-comment"> User name
                                                    </div>
                                                    <div class="h-c-l-comment">
                                                        comment go here
                                                    </div>
                                                    <div class="h-comment-input">
                                                        <form action="" class="form h-form">
                                                            
                                                            <input type="text" placeholder="your comment">
                                                            <button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <div class="h-t-c-dis">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                Tuyen sinh
                                            </div>
                                            <div class="col-sm-3 h-t-t-t">
                                                Tra loi
                                            </div>
                                            <div class="col-sm-3 h-t-t-t">
                                                Thoi gian
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="h-t-c-dis">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                Tuyen sinh
                                            </div>
                                            <div class="col-sm-3 h-t-t-t">
                                                Tra loi
                                            </div>
                                            <div class="col-sm-3 h-t-t-t">
                                                Thoi gian
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="h-t-c-dis">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                Tuyen sinh
                                            </div>
                                            <div class="col-sm-3 h-t-t-t">
                                                Tra loi
                                            </div>
                                            <div class="col-sm-3 h-t-t-t">
                                                Thoi gian
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="h-side-bar">
                                    <div class="h-most-asked">
                                        <div class="h-m-a-title">
                                            <h4>Cac cau hoi noi bat</h4>
                                        </div>
                                        <div class="h-m-a-post">
                                            <h6>Tuyen sinh truc tuyen la nguy hiem cho tre em duoi 18 tuoi</h6>
                                            <p>16/7/2000</p>
                                        </div>
                                        <div class="h-m-a-post">
                                            <h6>Tuyen sinh truc tuyen la nguy hiem cho tre em duoi 18 tuoi</h6>
                                            <p>16/7/2000</p>
                                        </div>
                                        <div class="h-m-a-post">
                                            <h6>Tuyen sinh truc tuyen la nguy hiem cho tre em duoi 18 tuoi</h6>
                                            <p>16/7/2000</p>
                                        </div>
                                        <div class="h-m-a-post">
                                            <h6>Tuyen sinh truc tuyen la nguy hiem cho tre em duoi 18 tuoi</h6>
                                            <p>16/7/2000</p>
                                        </div>
                                        <div class="h-m-a-post">
                                            <h6>Tuyen sinh truc tuyen la nguy hiem cho tre em duoi 18 tuoi</h6>
                                            <p>16/7/2000</p>
                                        </div>
                                    </div>
                                    <div class="h-member">
                                        <div><a>So thanh vien: </a><span>111</span></div>
                                        <div><a>Tong so bai: </a><span>16</span></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row h-main-row">
                    <div class="container-fluid h-topics-content-title">
                        <div class="row">
                            <div class="col-sm-8">
                                
                            </div>
                            <div class="col-sm">
                                sdsd
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <script src="js/forum.js"></script>
</body>
</html>