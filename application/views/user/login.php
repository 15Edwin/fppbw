<!doctype html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, maximum-scale=1"> 
        <title>Print-in - Log In</title>         
        <link rel="icon" href="favicon.png" type="image/png"> 
        <link href="<?php echo base_url ('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url ('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url ('assets/css/linecons.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url ('assets/css/font-awesome.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url ('assets/css/responsive.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url ('assets/css/animate.css') ?>" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'> 
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'> 
        <!-- =======================================================
        Theme Name: Butterfly
        Theme URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
        ======================================================= -->         
        <script type="text/javascript" src="<?php echo base_url ('assets/js/jquery.1.8.3.min.js')?>"></script>       
        <script type="text/javascript" src="<?php echo base_url ('assets/js/bootstrap.js')?>"></script>         
        <script type="text/javascript" src="<?php echo base_url ('assets/js/jquery-scrolltofixed.js')?>"></script>   
        <script type="text/javascript" src="<?php echo base_url ('assets/js/jquery.easing.1.3.js')?>"></script>      
        <script type="text/javascript" src="<?php echo base_url ('assets/js/jquery.isotope.js')?>"></script>         
        <script type="text/javascript" src="<?php echo base_url ('assets/js/wow.js')?>"></script>         
        <script type="text/javascript" src="<?php echo base_url ('assets/js/classie.js')?>"></script>         
        <script type="text/javascript">
	    $(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)	
			});	
			
	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });
	
	  });
	  

		    });	
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>         
    </head>     
    <body> 
        <!--Header_section-->         
        <header style="padding-top:30px"> 
            <div class="container"> 
                <div class="header_section"> 
                    <div class="logo">
                        <a href="javascript:void(0)">
                            <img src="http://127.0.0.1/printpbw/assets/img/logob.png" alt="">
                        </a>
                    </div>                     
                    <nav class="nav" id="nav"> 
                        <ul> 
                            <li>
                                <a href="<?php echo site_url('Display/index')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Display/register')?>">Register</a>
                            </li>                             
                        </ul> 
                        <ul class="toggle"> 
                            <li>
                                <a href="<?php echo site_url('Display/index')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Display/register')?>">Register</a>
                            </li>                             
                        </ul>
                        <ul class="toggle"> 
                            <li>
                                <a href="<?php echo site_url('Display/index')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Display/register')?>">Register</a>
                            </li>                             
                        </ul> 
                        <ul class="toggle"> 
                            <li>
                                <a href="<?php echo site_url('Display/index')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Display/register')?>">Register</a>
                            </li>                             
                        </ul>                           
                    </nav>                     
                    <a class="res-nav_click animated wobble wow" href="javascript:void(0)"><i class="fa-bars"></i></a> 
                </div>                 
            </div>
            <div class="container">
</div>
            <div class="container">
                <div style="padding:20px;" class="text-center">
                    <div class="col-md-4"> 
</div>
                    <div class="col-md-4 text-center">
                        <div class="page-header"> 
                            <h1>Log In</h1> 
                        </div>
                        <form role="form" class="form-normal" method="post" action="<?php echo site_url('User/login')?>"> 
                            <div class="form-group" style="padding-left:30px;"> 
                                <label class="control-label " for="exampleInputEmail1">Email address</label>                                 
                                <div>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>                                 
                            </div>
                            
                            <div class="form-group" style="padding-left:30px;"> 
                                <label class="control-label " for="exampleInputPassword1">Password</label>                                 
                                <div>
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
                                </div>                                 
                            </div>                             
                            
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn">Log In</button>
                                </div>
                                <div>
                                    <p><br>
               Tidak Punya Akun ? &nbsp;<span><a href="<?php echo site_url('Display/register')?>">Register</a></span></p>
                                </div>
                            </div>                             
                        </form>                         
                    </div>
                    <div class="col-md-4"> 
</div>
                </div>
            </div>             
        </header>         
        <!--Header_section-->         
        <!--Top_content-->         
        <!--Top_content-->         
        <!--Service-->         
        <!--Service-->         
        <!--main-section-end-->         
        <!--new_portfolio-->         
        <!-- Portfolio -->         
        <!--/Portfolio -->         
        <!--new_portfolio-->         
        <!--
<section class="main-section paddind" id="Portfolio">
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
	</div>
    
    
</section>   

-->         
        <!--main-section client-part-end-->         
        <!--c-logo-part-end-->         
        <!--main-section team-end-->         
        <!--twitter-feed-end-->         
        <script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>         
        <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script>         
        <script type="text/javascript">
	$(window).load(function(){
		
		$('a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>         
        <script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
	var container = $('#portfolio-wrap');	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();		
	  	return false;
	});
		
		
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>         
        <script src="contactform/contactform.js"></script>         
    </body>     
</html>