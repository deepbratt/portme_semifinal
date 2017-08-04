        <footer id="footer" class="light-footer">
            <div class="sub-footer ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <form class="form-inline form-subscribe">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-suscribe" type="button">SUBSCRIBE</button>
                                    </span>
                                </div><!-- /input-group -->

                            </form>
                        </div>
				
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="footer-social hi-icon-effect-8">
                                <li><a href="#" class="hi-icon glyphicon-facebook"></a></li>
                                <li><a href="#" class="hi-icon glyphicon-twitter"></a></li>
                                <li><a href="#" class="hi-icon glyphicon-linkedin"></a></li>
                                <li><a href="#" class="hi-icon glyphicon-google"></a></li>
                            </ul>
							
                        </div>
                    </div><!-- End Container -->
                </div><!-- End Sub Footer -->
            </div>
            <div class="footer-bottom ptb-20 paraxify">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 copyright">
                            &COPY; Port me. All Rights are Reserved.
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 footer-logo text-center">
                            <img src="images/LOGO/banner_logo.png" alt="logo" style="">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 back-to-top">
                            <a href="#top" id="back-top"><span class="ti-arrow-circle-up"></span></a>
                        </div>
                    </div>
                </div><!-- End Container -->
            </div><!-- End Bottom Footer -->
        </footer>
		
		 <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Modenizer JS -->
        <script src="js/modernizr-custom.js"></script>
        <!-- Bootsvav Menu -->
        <script src="js/bootsnav.js" type="text/javascript"></script>
        <!-- Parallax -->
        <script src="js/paraxify.min.js" type="text/javascript"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
		 <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Modenizer JS -->
        <script src="js/modernizr-custom.js"></script>
        <!-- Bootsvav Menu -->
        <script src="js/bootsnav.js" type="text/javascript"></script>
        <!-- Parallax -->
        <script src="js/paraxify.min.js" type="text/javascript"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
        <!-- ==============================================
                ** STYLE SWITCHER-ONLY FOR DEMO PURPOSE**
        =============================================== -->
      
       
        <!--Style Switcher Script-->
        <script src="js/style-switcher.js"></script>
		<script src="js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
		 <script src="js/jquery.matchHeight-min.js"></script>
	<script type="text/javascript">
    function switchClass(i) {
	   var lis = $('#home-news > div');
	   lis.eq(i).removeClass('home_header_on');
	   lis.eq(i).removeClass('home_header_out');
		lis.eq(i = ++i % lis.length).addClass('home_header_on');
		lis.eq(i = ++i % lis.length).addClass('home_header_out');
		setTimeout(function() {
			switchClass(i);
		}, 3500);
	}

	$(window).load(function() {
	   switchClass(-1);
	});
    
    
  </script>
  <script>
		if ($(window).width() > 767) {
				var winH = $(window).height(); $('.section_top').css('height',winH);
			  }else {
				$('.section_top').css('height','auto');
			  }
			  $(window).resize(function() {
				if ($(window).width() > 767) {
				var winH = $(window).height(); $('.section_top').css('height',winH);
				}else {
				  $('.section_top').css('height','auto');
				}
			  });
			
			  // Header top scrolled down
			  $('.bounce').on('click',function() {
				$('html,body').animate({
				  scrollTop: $("#whtscoch").offset().top},
				  1200);
			  });
			  
			  
			  
			  
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
		</script>
		
    
        <!--End Style Switcher-->