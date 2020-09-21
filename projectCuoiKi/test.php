<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoa Cong Nghe Thong Tin TLU</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <!-- //font -->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9b1d6678e4.js" crossorigin="anonymous"></script>
    <!-- //font awesome -->
    <!-- CSS only -->
    <!-- boostrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- //boostrap CDN -->

    <!-- my css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- //my scc -->
    <style>
        .h-forum-slide{
            box-sizing: border-box;
            width: 90%;
            border: 1px solid black;
            margin: 20px auto;
            overflow: hidden;

        }
        .h-f-s-con{
            display: inline-block;
            box-sizing: border-box;
            background: aqua;
            border: 1px solid red;
            margin: 0 10px 0 10px;
        }
        .h-f-s-con img{
            border-radius: 5px;
        }


    </style>


    <!-- JS, Popper.js, and jQuery -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
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
                                                                    <a class="nav-link active" data-toggle="tab" href="#h-tab-login">Login</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="tab" href="#h-tab-register">Register</a>
                                                                </li>
                                                                
                                                            </ul>
                                                            <!-- Tab panes -->
                                                            <div class="tab-content">
                                                                <div id="h-tab-login" class="container tab-pane active" ><br>
                                                                    
                                                                    <div>
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
                                                                            <label for="checkbox">Ghi nho dang nhap</label></td>
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
                                                                <div id="h-tab-register" class="container tab-pane fade"><br>
                                                                <h3>Register</h3>
                                                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- //modal -->
            </div>
        </div>
                    
    
		
    </div>
    





    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- // slick carousel -->
        <!-- my js -->
        <!-- <script src="js/scripts.js"></script> -->
    <!-- //my js -->
    <script>
        $(document).ready(function(){
            $('.h-forum-slide').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,

        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }]
    });
          
});
// // forum slides
    </script>
</body>


</html>