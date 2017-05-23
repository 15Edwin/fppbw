<!doctype html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, maximum-scale=1"> 
        <title>Print-in - Halaman Cetak</title>         
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
                                <a href="<?php echo site_url('User/showDashboard1')?>">Dashboard</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('User/logout')?>">Log Out</a>
                            </li>                             
                        </ul>
                        <ul class="toggle"> 
                            <li>
                                <a href="<?php echo site_url('Display/index')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('User/showDashboard1')?>">Dashboard</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('User/logout')?>">Log Out</a>
                            </li>                             
                        </ul>                         
                    </nav>                     
                    <a class="res-nav_click animated wobble wow" href="javascript:void(0)"><i class="fa-bars"></i></a> 
                </div>                 
            </div>
            <div class="container" style="padding:20px;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Hello <?php echo $this->session->userdata('nama')?>!</h2>
                        <h3></h3>
                        <h3>Apa yang ingin anda cetak hari ini ?</h3> 
                    </div>
                </div>
                <div class="row" style="padding:50px">
                    <div class="col-md-6 text-left">
                        <h3>FORMULIR CETAK</h3> 
                        <p><br></p>
                        <form role="form" method="post" action="<?php echo site_url('User/cetak')?>" enctype="multipart/form-data"> 
                            <div class="form-group"> 
                                <label class="control-label" for="exampleInputEmail1">Ukuran &nbsp;Kertas</label>
                                <select class="form-control" id="ukurankertas" name="ukuran_krts"> 
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="A3">A3</option>                                     
                                    <option value="A4">A4</option>                                     
                                    <option value="A5">A5</option>                                     
                                </select>                                 
                            </div>                             
                            <div class="form-group"> 
                                <label class="control-label" for="exampleInputPassword1">Warna</label>
                                <select class="form-control" id="warna" name="warna"> 
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>                                     
                                </select>                                 
                            </div>
                            <div class="form-group"> 
                                <label class="control-label" for="formInput57">Jumlah Copy</label>
                                <input type="text" class="form-control" id="jumlahhalaman" placeholder="Jumlah copy" required name="jumlah_copy">
                            </div>
                            <div class="form-group"> 
                                <label class="control-label" for="formInput71">Tanggal Pengambilan</label>
                                <input type="date" class="form-control" id="tanggal" placeholder="Placeholder text" required name="tgl_ambil">
                            </div>
                            <div class="form-group"> 
                                <label class="control-label" for="exampleInputEmail1">Waktu Pengambilan</label>
                                <select class="form-control" id="waktupengambilan" name="waktu"> 
                                    <option value="06.00">06.00</option>
                                    <option value="10.00">10.00</option>                     
                                    <option value="16.00">16.00</option>
                                    <option value="20.00">20.00</option>                                     
                                </select>                                 
                            </div>
                            <div class="form-group"> 
                                <label class="control-label" for="formInput65">Pesan Tambahan</label>
                                <input type="text" class="form-control" id="pesantambahan" placeholder="Pesan" name="pesan">
                            </div>                             
                            <div class="form-group"> 
                                <label class="control-label" for="exampleInputFile">File input</label>                                 
                                <input type="file" id="uploadFile" name="userfile" size="20" required> 
                                <p class="help-block">File Upload Maks 15MB</p>
                            </div>
                            <input type="hidden" name="is_submit" value="1" />                             
                            <button type="submit" class="btn" name="submit" value="Submit">Submit</button>                             
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="http://www.mycareerworks.org/wp-content/uploads/2017/04/businesswoman.png" /> 
                    </div>
                </div>
            </div>             
        </header>         
        <!--Header_section-->                  
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
			if you don't want to Use the easing effects:
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