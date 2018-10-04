  <!-- Footer Section -->
<footer class="footer_section section_wrapper section_wrapper" >
    <div class="footer_top_section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-6 col-sm-6">
                    <div class="text_widget footer_widget">
                    <div class="footer_widget_title"><h2><?php echo $x=$lang[$lng]['haqqimizda']; ?></h2></div>
                 
                    <div class="footer_widget_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. 
                    </div>
                    </div><!--text_widget-->
                </div><!--col-xs-3-->

                <div class="col-md-6">
                    <div class="footer_widget f_right">
                        <div class="footer_widget_title"><h2><?php echo $x=$lang[$lng]['menu']; ?></h2></div>
                        <div class="footer_menu_item ">
                        <div class="row">
                            <div class="col-sm-6"> 
                                <ul>
                                    <li><a href="<?php echo $site_url."home/".$lng;?>"><?php echo $x=$lang[$lng]['home']; ?></a></li>
                                    <li><a href="<?php echo $site_url."olke/".$lng;?>"><?php echo $x=$lang[$lng]['olke']; ?></a></li>
                                    <li><a href="<?php echo $site_url."siyaset/".$lng;?>"><?php echo $x=$lang[$lng]['siyaset']; ?></a></li>
                                    <li><a href="<?php echo $site_url."sou_biznes/".$lng;?>"><?php echo $x=$lang[$lng]['sou_biznes']; ?></a></li>
                          
                                </ul>
                            </div><!--col-sm-6-->
                             <div class="col-sm-6"> 
                                <ul>
                                    <li><a href="<?php echo $site_url."kriminal/".$lng;?>"><?php echo $x=$lang[$lng]['kriminal']; ?></a></li>
                                    <li><a href="<?php echo $site_url."idman/".$lng;?>"><?php echo $x=$lang[$lng]['idman']; ?></a></li>
                                    <li><a href="<?php echo $site_url."maraqli/".$lng;?>"><?php echo $x=$lang[$lng]['maraqli']; ?></a></li>
                                </ul>
                            </div><!--col-sm-6-->

                        </div><!--row-->
                    </div><!--footer_menu_item-->
                    </div><!--footer_widget-->
                </div><!--col-xs-6-->

            </div><!--row-->
        </div><!--container-->
    </div><!--footer_top_section-->
    <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    
    <div class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                    </div><!--col-xs-3-->
                    <div class="col-md-4">
                        <div class="copyright">
                        <span title="Agha">© Copyright 2018 ----Agha</span>
                        </div>
                    </div><!--col-xs-6-->
                    <div class="col-md-3">
                    </div><!--col-xs-3-->
                </div><!--row-->
            </div><!--container-->
        </div><!--copyright-section-->
</footer>

</div> <!--main-wrapper-->
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo $site_url; ?>/assets/js/pagination.js"></script>
<script src="<?php echo $site_url; ?>assets/js/form.js"></script>
<script src="<?php echo $site_url;?>assets/js/jquery.min.js"></script>

<!-- Owl carousel -->
<script src="<?php echo $site_url;?>assets/js/owl.carousel.js"></script>

<!-- Bootstrap -->
<script src="<?php echo $site_url;?>assets/js/bootstrap.min.js"></script>

<!-- Theme Script File-->
<script src="<?php echo $site_url;?>assets/js/script.js"></script> 

<!-- Off Canvas Menu -->
<script src="<?php echo $site_url;?>assets/js/dcalendar.picker.js"></script>
<script src="<?php echo $site_url;?>assets/js/main.js"></script>
<script>
$('#demo').dcalendarpicker();
$('#calendar-demo').dcalendar(); //creates the calendar
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo $site_url;?>assets/js/jsslider.js"></script>
  <script type="text/javascript">
        var slider1;
        $(function(){
          slider1 = $('#banner_wrap').slider({
                'banItemClass': 'banner',
                'navItemClass': 'navLi',
                'navWrapClass': 'banner_nav',
                'perpage': 7,
                'effect': 'fade',
                'speed': 4000
            }).data('slider');
        });
        </script> 


<script src="<?php echo $site_url;?>assets/js/offcanvas.min.js"></script> 
<script>
    var zaman=setInterval(funksiya,1000);
    function funksiya(){
        var d=new Date();
        document.getElementById('hours').innerHTML=d.toLocaleTimeString();
    }
</script>
   
</body>
</html>