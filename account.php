<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
require './Includes/init.php' ;

if ( is_post () ) {
    $login    = new Login() ;
    $email    = get_post_data ( 'email' ) ;
    $password = get_post_data ( 'password' ) ;
      $noerror  = true ;
    if ( empty ( $email) ) {
        add_flash_message ( "لطفا ایمیل خود را وارد کنید ." ) ;
        $noerror = false ;
    }
    if ( empty ( $password ) ) {
        add_flash_message ( "لطفا رمزعبور خود را وارد کنید. " ) ;
        $noerror = false ;
    }
      if ( $noerror == FALSE ) {
        redirect ( $_SERVER[ 'PHP_SELF' ] ) ;
    }
    if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LdEAggUAAAAAKqEPYvM-02qZM6q7OkzP2cYpAKj";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {
          echo '<h2>Thanks for posting comment.</h2>';
        }
      if ( $login -> check ( $email , $password , $rememberme ) ) {
          redirect("index.php");
    }
    else {
        add_flash_message ( "ایمیل یا رمز عبور شما اشتباه هست . " ) ;
        redirect ( $_SERVER[ 'PHP_SELF' ] ) ;
    }   
}
?>
<html>
    <head>
        <title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Account :: w3layouts</title>
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
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- /start menu -->
    </head>
    <body> 
        <!--header-->	
        <div class="header-info">
            <div class="container">
                <div class="header-top-in">

                    <ul class="support">
                        <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope"> </i>info@example.com</a></li>
                        <li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>0 462 261 61 61</span></li>			
                    </ul>
                    <ul class=" support-right">
                        <li><a href="account.html"><i class="glyphicon glyphicon-user" class="men"> </i>Login</a></li>
                        <li><a href="register.html"><i class="glyphicon glyphicon-lock" class="tele"> </i>Create an Account</a></li>			
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
                            <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
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
            <h2>Login</h2>
        </div>
        <!---->
        <div class="container">
            <div class="account_grid">
                <div class=" login-right">
                    <h3>REGISTERED CUSTOMERS</h3>
                    <p>If you have an account with us, please log in.</p>
                    <form method="post" action="">
                        <div>
                            <span>Email Address</span>
                            <input type="text" name="email"> 
                        </div>
                        <div>
                            <span>Password</span>
                            <input type="password" name="password"> 
                        </div>
                        <a class="forgot" href="#">Forgot Your Password?</a>
                        <div class="g-recaptcha" data-sitekey="6LdEAggUAAAAAAjYyPtK1mFEJY_upg2qh8hmhBtK"></div>
                        <input type="submit" value="Login">
                    </form>
                </div>	
                <div class=" login-left">
                    <h3>NEW CUSTOMERS</h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a class="acount-btn" href="register.html">Create an Account</a>
                </div>

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
        <!---->
        <!---->
        <div class="footer">
            <div class="container">
                <div class="col-md-4 footer-top">
                    <h3>Quick Contact</h3>
                    <form>

                        <input type="text" value="ENTER YOUR NAME*" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'ENTER YOUR NAME*';
                                }">

                        <input type="text" value="ENTER YOUR EMAIL*" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'ENTER YOUR EMAIL*';
                                }">

                        <input type="text" value="ENTER YOUR PHONE" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'ENTER YOUR PHONE';
                                }">

                        <textarea cols="77" rows="6" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'ENTER YOUR MESSAGE*';
                                }">ENTER YOUR MESSAGE*</textarea>

                        <input type="submit" value="SEND MESSAGE" >

                    </form>

                </div>
                <div class="col-md-4 footer-middle">
                    <h3>Top Rated Products</h3>
                    <div class="product-go">
                        <div class="grid-product">
                            <h6><a href="#" >Fashion Combo Goggles</a></h6>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <span class=" price-in"><small>$70.00</small> $40.00</span>
                        </div>
                        <div class="fashion">
                            <a href="#"><img class="img-responsive " src="images/f1.jpg" alt="">
                                <p>SALE</p></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class="grid-product">
                            <h6><a href="#" >Classic Combo Goggles</a></h6>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <span class=" price-in"><small>$70.00</small> $40.00</span>
                        </div>
                        <div class="fashion">
                            <a href="#"><img class="img-responsive " src="images/f2.jpg" alt="">
                                <p class="new1">NEW</p></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class="grid-product">
                            <h6><a href="#" >sun Combo Goggles</a></h6>
                            <div class="rating">
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                                <span>☆</span>
                            </div>
                            <span class=" price-in"><small>$70.00</small> $40.00</span>
                        </div>
                        <div class="fashion">
                            <a href="#"><img class="img-responsive " src="images/f3.jpg" alt="">
                                <p class="new1">NEW</p></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                <div class="col-md-4 footer-bottom">
                    <h3>Get In Touch</h3>
                    <div class="logo-footer">
                        <ul class="social">
                            <li><a href="#"><i class="fb"> </i> </a></li>
                            <li><a href="#"><i class="rss"></i></a></li>
                            <li><a href="#"><i class="twitter"></i></a></li>
                            <li><a href="#"><i class="dribble"></i></a></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="indo">
                        <ul class="social-footer ">
                            <li><span><i class="glyphicon glyphicon-earphone"> </i>+62 226759804 </span></li>
                            <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope" class="mes"> </i>info@example.com</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-link" class="mes-in"> </i>http://example.com</a></li>
                        </ul>
                        <a href="#"><img src="images/pa.png" alt=""></a>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <p class="footer-class">Copyrights © 2015 I Wear. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
        <!---->
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