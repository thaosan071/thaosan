<?php
include "config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$db= new Db();
$tau = new Tau();
$tuyen = new Tuyen();
$datatuyen = $tuyen->getAll();
?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from www.tooplate.com/templates/2093_flight/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 10:39:09 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->
    	<title>Travel and Tour</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">
        <link rel="Shortcut Icon" href="img/logo-i.png"  type="img/x-icon" /> 

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
    </head>

<body>
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">       
                            <img src="img/logo.png" alt="Flight Template">
                        </div>
                        <div class="tabs-content">
                            <h4>Choose Your Direction:</h4>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/Share-Source-Code-Website-189970988225280/">Find us on <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://youtube.com/">Our <em>YouTube</em> Channel<i class="fa fa-youtube"></i></a></li>
                                <li><a href="http://instagram.com/">Follow our <em>instagram</em><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="page-direction-button">
                            <a href="contact.html"><i class="fa fa-phone"></i>Contact Us Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Thông tin hành trình :</h4>
                                <form  action="detail.php" method="get">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label>Tuyến:</label>
                                                <select required name="tuyen" >
                                                    <?php 
                                                      foreach( $datatuyen as $t)
                                                        { 
                                                          ?>
                                                          <option value="<?php echo $t["maT"] ?>"><?php echo $t["TenT"] ?></option>
                                                         <?php
                                                        }
                                                    ?>
                                                </select>
                                            </fieldset>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label >Ngày đi:</label>
                                                <input name="ngaydi" type="date" class="form-control"  placeholder="Select date..." required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <fieldset>
                                                <label for="return">Ngày về:</label>
                                                <input name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                                            </fieldset>
                                        </div> -->
                                        <!-- <div class="col-md-6">
                                            <div class="radio-select">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="round">Khứ hồi</label>
                                                        <input type="radio" name="trip" id="round" value="round" required="required"onchange='this.form.()'>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="oneway">Một chiều</label>
                                                        <input type="radio" name="trip" id="oneway" value="one-way" required="required"onchange='this.form.()'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12">
                                            <fieldset>
                                                <button type="submit" class="btn btn-search">Tìm kiếm</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>







    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top">Back To Top</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/Share-Source-Code-Website-189970988225280/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <p>Copyright &copy; 2018 Flight Tour and Travel Company</p>
                </div>
            </div>
        </div>
    </footer>


    


    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
    <?php 
    if(isset($GET_['submit']))
    {
        $time= strtotime($GET_["ngaydi"]);
        $newformat = date('Y-m-d',$time);
        $id = Utils::getIndex("tuyen", "");
    }
    ?>
</body>

<!-- Mirrored from www.tooplate.com/templates/2093_flight/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 10:39:55 GMT -->
</html>