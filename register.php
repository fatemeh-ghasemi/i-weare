<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require './Includes/init.php' ;
if ( is_post () ) {

    $register = new Register() ;

    $fname    = get_post_data ( 'fname' ) ;
    $lname    = get_post_data ( 'lname' ) ;
    $email    = get_post_data ( 'email' ) ;
    $password = get_post_data ( 'password' ) ;
    $noerror  = true ;
    if ( empty ( $fname ) ) {
        add_flash_message ( "لطفا نام خود را وارد کنید ." ) ;
        $noerror = false ;
    }
    if ( empty ( $lname ) ) {
        add_flash_message ( "لطفا نام خانوادگی خود را وارد کنید. " ) ;
        $noerror = false ;
    }
    if ( empty ( $email ) ) {
        add_flash_message ( "لطفا ایمیل خود را وارد کنید. " ) ;
        $noerror = false ;
    }
    if ( empty ( $password ) ) {
        add_flash_message ( ". لطفا رمز عبور خود را وارد کنید" ) ;
        $noerror = false ;
    }
    if ( $noerror == FALSE ) {

        redirect ( $_SERVER[ 'PHP_SELF' ] ) ;
    }
    try {
        $register -> add_new_user ( $fname , $lname , $email , $password ) ;
        redirect ( "index.php" ) ;
    }
    catch ( Exception $e ) {
        if ( $e -> getCode () == 1062 ) {
            add_flash_message ( 'این ایمیل تکراری هست .' ) ;
            redirect ( $_SERVER[ 'PHP_SELF' ] ) ;
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="I-wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <!--fonts-->
        <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
        <!--//fonts-->
        <!-- start menu -->

        <!--//slider-script-->

        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });

        </script>	
        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- js -->
        <script src="js/bootstrap.js"></script>
        <!-- js -->

        <script src="js/simpleCart.min.js"></script>
        <!-- start menu -->
        <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
        <script>$(document).ready(function () {
                $(".memenu").memenu();
            });</script>	
        <!-- /start menu -->
    </head>
    <body> 
        <!--header-->
        <div class="header-info">
            <div class="container">
                <div class="header-top-in">

                    <ul class="support">
                        <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope"> </i>info@example.com</a></li>
                        <li><span><i class="glyphicon glyphicon-earphone tele-in"> </i>0 462 261 61 61</span></li>			
                    </ul>
                    <ul class=" support-right">
                        <li><a href="account.html"><i class="glyphicon glyphicon-user men"> </i>Login</a></li>
                        <li><a href="register.html"><i class="glyphicon glyphicon-lock tele"> </i>Create an Account</a></li>			
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>		
        <div class="header header5">
            <div class="header-top">

                <div class="header-bottom">
                    <div class="container">			
                        <div class="logo">
                            <h1><a href="index.html">I-<span>wear</span></a></h1>
                        </div>
                        <!---->

                        <div class="top-nav">
                            <ul class="memenu skyblue"><li  class="active"><a href="index.html">Home</a></li>
                                <li class="grid"><a href="#">Men</a>
                                    <div class="mepanel">
                                        <div class="row">
                                            <div class="col1 me-one">
                                                <h4>Shop</h4>
                                                <ul>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="product.html">Men</a></li>
                                                    <li><a href="product.html">Women</a></li>
                                                    <li><a href="product.html">Accessories</a></li>
                                                    <li><a href="product.html">Kids</a></li>
                                                    <li><a href="product.html">login</a></li>
                                                    <li><a href="product.html">Brands</a></li>
                                                    <li><a href="product.html">My Shopping Bag</a></li>
                                                </ul>
                                            </div>
                                            <div class="col1 me-one">
                                                <h4>Style Zone</h4>
                                                <ul>
                                                    <li><a href="product.html">Men</a></li>
                                                    <li><a href="product.html">Women</a></li>
                                                    <li><a href="product.html">Brands</a></li>
                                                    <li><a href="product.html">Kids</a></li>
                                                    <li><a href="product.html">Accessories</a></li>
                                                    <li><a href="product.html">Style Videos</a></li>
                                                </ul>	
                                            </div>
                                            <div class="col1 me-one">
                                                <h4>Popular Brands</h4>
                                                <ul>
                                                    <li><a href="product.html">Levis</a></li>
                                                    <li><a href="product.html">Persol</a></li>
                                                    <li><a href="product.html">Nike</a></li>
                                                    <li><a href="product.html">Edwin</a></li>
                                                    <li><a href="product.html">New Balance</a></li>
                                                    <li><a href="product.html">Jack & Jones</a></li>
                                                    <li><a href="product.html">Paul Smith</a></li>
                                                    <li><a href="product.html">Ray-Ban</a></li>
                                                    <li><a href="product.html">Wood Wood</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid"><a href="#">Women</a>
                                    <div class="mepanel">
                                        <div class="row">
                                            <div class="col1 me-one">
                                                <h4>Shop</h4>
                                                <ul>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="product.html">Men</a></li>
                                                    <li><a href="product.html">Women</a></li>
                                                    <li><a href="product.html">Accessories</a></li>
                                                    <li><a href="product.html">Kids</a></li>
                                                    <li><a href="product.html">login</a></li>
                                                    <li><a href="product.html">Brands</a></li>
                                                    <li><a href="product.html">My Shopping Bag</a></li>
                                                </ul>
                                            </div>
                                            <div class="col1 me-one">
                                                <h4>Style Zone</h4>
                                                <ul>
                                                    <li><a href="product.html">Men</a></li>
                                                    <li><a href="product.html">Women</a></li>
                                                    <li><a href="product.html">Brands</a></li>
                                                    <li><a href="product.html">Kids</a></li>
                                                    <li><a href="product.html">Accessories</a></li>
                                                    <li><a href="product.html">Style Videos</a></li>
                                                </ul>	
                                            </div>
                                            <div class="col1 me-one">
                                                <h4>Popular Brands</h4>
                                                <ul>
                                                    <li><a href="product.html">Levis</a></li>
                                                    <li><a href="product.html">Persol</a></li>
                                                    <li><a href="product.html">Nike</a></li>
                                                    <li><a href="product.html">Edwin</a></li>
                                                    <li><a href="product.html">New Balance</a></li>
                                                    <li><a href="product.html">Jack & Jones</a></li>
                                                    <li><a href="product.html">Paul Smith</a></li>
                                                    <li><a href="product.html">Ray-Ban</a></li>
                                                    <li><a href="product.html">Wood Wood</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid"><a href="#">Kids</a>
                                    <div class="mepanel">
                                        <div class="row">
                                            <div class="col1 me-one">
                                                <h4>Shop</h4>
                                                <ul>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="product.html">Men</a></li>
                                                    <li><a href="product.html">Women</a></li>
                                                    <li><a href="product.html">Accessories</a></li>
                                                    <li><a href="product.html">Kids</a></li>
                                                    <li><a href="product.html">login</a></li>
                                                    <li><a href="product.html">Brands</a></li>
                                                    <li><a href="product.html">My Shopping Bag</a></li>
                                                </ul>
                                            </div>
                                            <div class="col1 me-one">
                                                <h4>Style Zone</h4>
                                                <ul>
                                                    <li><a href="product.html">Men</a></li>
                                                    <li><a href="product.html">Women</a></li>
                                                    <li><a href="product.html">Brands</a></li>
                                                    <li><a href="product.html">Kids</a></li>
                                                    <li><a href="product.html">Accessories</a></li>
                                                    <li><a href="product.html">Style Videos</a></li>
                                                </ul>	
                                            </div>
                                            <div class="col1 me-one">
                                                <h4>Popular Brands</h4>
                                                <ul>
                                                    <li><a href="product.html">Levis</a></li>
                                                    <li><a href="product.html">Persol</a></li>
                                                    <li><a href="product.html">Nike</a></li>
                                                    <li><a href="product.html">Edwin</a></li>
                                                    <li><a href="product.html">New Balance</a></li>
                                                    <li><a href="product.html">Jack & Jones</a></li>
                                                    <li><a href="product.html">Paul Smith</a></li>
                                                    <li><a href="product.html">Ray-Ban</a></li>
                                                    <li><a href="product.html">Wood Wood</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid"><a href="typography.html">Typo</a>

                                </li>
                                <li class="grid"><a href="contact.html">Contact</a>

                                </li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <!---->
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3> <div class="total">
                                        <span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>
                                    <img src="images/cart2-2.png" alt=""/></h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="clearfix"> </div>
                        <!---->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>	
            <div class="clearfix"> </div>	
        </div>
        <!---->
        <div class="back">
            <h2>Register</h2>
        </div>
        <?php
//            $m=messages;
//            foreach ( $n as $m) {
//                echo "<div class='alert alert-warning'>" . $n . "</div>" ;
//            }

      //  var_dump (  $_SESSION['flash_messages']);
        ?>
        <div class="container">
            <div class="register">
                <h3>PERSONAL INFORMATION</h3>
                <form method="post" action=""> 


                    <div class="mation">
                        <div>
                            <span>First Name</span>
                            <input type="text" name="fname"> 
                        </div>
                        <div>
                            <span>Last Name</span>
                            <input type="text" name="lname"> 
                        </div>
                        <div>
                            <span>Email Address</span>
                            <input type="text" name="email">
                        </div>
                        <div>
                            <span>Password</span>
                            <input type="password" name="password">						 
                        </div>
                    </div>
                    <input type="submit" value="submit">
                </form>


            </div>
        </div>
        <!---->
        <div class="bottom-grid1">

            <div class="fit1">
                <h3>HAPPY SHOPPING</h3>
                <p>Lorem Ipsum sit amet consectuer adipiscing elit
                    sed diam nonummy nibh euismod</p>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!----> 
        <!---->
    </body>
</html>