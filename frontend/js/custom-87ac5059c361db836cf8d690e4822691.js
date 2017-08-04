// (function($) {
//   $.expr[":"].onScreen = function(elem) {
//     var $window = $(window);
//     var viewport_top = $window.scrollTop();
//     var viewport_height = $window.height();
//     var viewport_bottom = viewport_top + viewport_height;
//     var $elem = $(elem);
//     var top = $elem.offset().top;
//     var height = $elem.height();
//     var bottom = top + height;

//     return (top >= viewport_top && top < viewport_bottom) ||
//            (bottom > viewport_top && bottom <= viewport_bottom) ||
//            (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom);
//   };
// })(jQuery);

// (function($) {
// jQuery(document).ready(function($) {

//   $( '.menu-2 li > ul' ).addClass('child-nav');
//              $( '.child-nav' ).before( '<button class="sub-menu-toggle" role="button" aria-pressed="false"><span class="plus">+</</button>' );

//             // Show/hide the navigation
//               $( '.sub-menu-toggle' ).on( 'click', function() {
//                 var $this = $( this );
//                 $this.toggleClass( 'activated' );
//                 $this.next( '.child-nav' ).slideToggle();

//             });




// $( ".dropdown_forjs" ).find('li').click(function() {

	
	
// var value = $(this).find('a').text();
// var datavalue = $(this).find('a').attr('dataval');
// $(this).parent('.dropdown_forjs').parent('.wrapper-dropdown-3_1forjs').find('.hideselect').val(datavalue);
// $(this).parent('.dropdown_forjs').parent('.wrapper-dropdown-3_1forjs').find('span').text(value);
// $(this).parent('.dropdown_forjs').parent('.wrapper-dropdown-3_1forjs').find('p').text(value);
// var subcata = $(this).parent(".dropdown_forjs").attr('datasubid');

// if(subcata != 'none')
// 	{
// $('#'+subcata).find('li').hide();
// $('#'+subcata).find('.cata'+datavalue).show();
// 	}

// });




// $( ".wrapper-demo_rightforjs" ).click(function() {

// $(this).find('.dropdown_forjs').toggle();

// });

// /*
// $( ".dropdown-menu" ).find('li').find('a').click(function() {


// var value = $(this).attr('dataval');


// $(this).parent('li').parent('.dropdown-menu').prev('button').html(value + ' <span class="caret caret_border"></span>');


// $(this).parent('li').parent('.dropdown-menu').prev('button').siblings('.hidemeval').val(value);


// });*/





//     //  // NProgress.inc();
//     // SidebarMenuEffects();

// 	 $('#opzzzyz').click(function(){
// 	  var $ul = $('#mobilemenu_extended_categories').slideUp(100);
//       var $ul = $('#mobilemenu_extended').toggle(300);
//     });
	
// 	/*2.php dropdown starts */
// 	function DropDown(el) {
// 				this.dd = el;
// 				this.placeholder = this.dd.children('span');
// 				this.values = this.dd.children('.hideselect');
// 				this.opts = this.dd.find('ul.dropdown > li');
// 				this.val = '';
// 				this.index = -1;
// 				this.initEvents();
// 			}
// 			DropDown.prototype = {
// 				initEvents : function() {
// 					var obj = this;

// 					obj.dd.on('click', function(event){
// 						$(this).toggleClass('active');
// 						return false;
// 					});

// 					obj.opts.on('click',function(){
// 						var opt = $(this);
// 						obj.val = opt.text();
// 						obj.index = opt.index();
// 						obj.placeholder.text(obj.val);
// 						obj.values.val(obj.val);

// 					});
// 				},
// 				getValue : function() {
// 					return this.val;
// 				},
// 				getIndex : function() {
// 					return this.index;
// 				}
// 			}

// 			$(function() {

// 				var dd = new DropDown( $('#dd') );

// 				$(document).click(function() {
// 					// all dropdowns
// 					$('.wrapper-dropdown-3').removeClass('active');
// 				});

// 			});
// 	/*2.php dropdown ends */



// 	/*3 dropdown starts */
// 	function DropDown2(asd) {
// 				this.ff = asd;
// 				this.placeholder = this.ff.children('span');
// 				this.opts = this.ff.find('ul.dropdown > li');
// 				this.val = '';
// 				this.index = -1;
// 				this.initEvents();
// 			}
// 			DropDown2.prototype = {
// 				initEvents : function() {
// 					var obj = this;

// 					obj.ff.on('click', function(event){
// 						$(this).toggleClass('active');
// 						return false;
// 					});

// 					obj.opts.on('click',function(){
// 						var opt = $(this);
// 						obj.val = opt.text();
// 						obj.index = opt.index();
// 						obj.placeholder.text(obj.val);
// 					});
// 				},
// 				getValue : function() {
// 					return this.val;
// 				},
// 				getIndex : function() {
// 					return this.index;
// 				}
// 			}

// 			$(function() {

// 				var ff = new DropDown2( $('#ff') );

// 				$(document).click(function() {
// 					// all dropdowns
// 					$('.wrapper-dropdown-3').removeClass('active');
// 				});

// 			});
// 	/*3 dropdown ends */







// 	$('.menu_btncontainer_m div').click(function(){
// 		$('.searchbarcotna').hide();
// 		/*menu toggle */
// 			if ($(this).hasClass('opns_men')) {
// 				$(this).removeClass('opns_men');
// 				$(this).addClass('opns_men_active');
// 				$('.menu_btncontainer_m').addClass('add_bodef');
// 			} else if($(this).hasClass('opns_men_active')){
// 				$(this).removeClass('opns_men_active');
// 				$(this).addClass('opns_men');
// 				$('.menu_btncontainer_m').removeClass('add_bodef');
// 			}

// 		/*menu toggle ends */
//       var $ul = $('.rightblacksmall_menu').toggle(500);
//     });

// 	$('.searchcontainer_m div').click(function(){
// 		$('.rightblacksmall_menu').hide();
// 		/*menu toggle */
// 			if ($(this).hasClass('seasrasch_masd')) {
// 				$(this).removeClass('seasrasch_masd');
// 				$(this).addClass('seasrasch_masd_active');
// 			} else if($(this).hasClass('seasrasch_masd_active')){
// 				$(this).removeClass('seasrasch_masd_active');
// 				$(this).addClass('seasrasch_masd');
// 			}

// 		/*menu toggle ends */
//       var $ul = $('.searchbarcotna').toggle(500);
//     });

// 	$('.brwsze_cat').click(function(){
//       $('.rightblacksmall_menu').hide();
// 		/*menu toggle */
// 			if ($(this).hasClass('seasrasch_masd')) {
// 				$(this).removeClass('seasrasch_masd');
// 				$(this).addClass('seasrasch_masd_active');
// 			} else if($(this).hasClass('seasrasch_masd_active')){
// 				$(this).removeClass('seasrasch_masd_active');
// 				$(this).addClass('seasrasch_masd');
// 			}

// 		/*menu toggle ends */
//       var $ul = $('.searchbarcotna').toggle(500);
//     });


//     $('.pagesidebar li.menu-item-has-children').click(function(){
//       var $ul = $(this).find('ul:first');
//       $ul.toggle(200);
//       $ul.addClass('active');
//     });
//     $('nav .menu-item').has('.sub-menu').each(function() {
//         if($(this).find('.megadrop').length > 0 ){
//       }else{
//           $(this).addClass('hasmenu');
//       }
//     });
    
//     $('.vbplogin').click(function(event) {
//       event.preventDefault();
//       $('#vibe_bp_login').fadeIn(300);
//       $('#vibe_bp_login').toggleClass('active');
//       event.stopPropagation();
//     });
//     $('#searchicon').click(function(event) {
//         $('#searchdiv').toggleClass('active');
//     });

//     $(document).mouseup(function (e) {
//         var container = $("#searchdiv");

//         if (!container.is(e.target) && container.has(e.target).length === 0) // ... nor a descendant of the container
//         {
//             container.hide();
//             container.removeClass('active');
//         }

//         container = $("#vibe_bp_login");

//         if (!container.is(e.target) && container.has(e.target).length === 0) // ... nor a descendant of the container
//         {
//             container.hide();
//         }

//     });


//     $('#headernotification').each(function() {
//       var cookieValue = $.cookie("closed");
//       if ((cookieValue !== null) && cookieValue == 'headernotification') {      
//         $(this).hide();
//       }
//       });

//       $('#widget-tabs a').click(function (e) {
//         e.preventDefault();
//         $(this).tab('show');
//       });

//     $('#footernotification').each(function() {
//       var cookieValue = $.cookie("closed");
//       if ((cookieValue !== null) && cookieValue == 'footernotification') {      
//         $(this).hide();
//       }
//       });
//     $('.close').click(function(){
//       var parent=$(this).parent().parent();
//       var id=parent.attr('id');
//       parent.hide(200);
//        $.cookie('closed', id, { expires: 2 ,path: '/'});
//     });

//      jQuery('#scrolltop a').click(function(event) {
//       event.preventDefault();
//       $('body,html').animate({
//               scrollTop: 0
//             }, 1200);
//             return false;
//     });
//     $('body').delegate('.woocommerce-error','click',function(event){
//       event.preventDefault();
//       $(this).fadeOut(200);
//     })
//     $('.tip').tooltip(); 
//     $('.nav-tabs li:first a').tab('show');


//     $('.course_description').on('click','#more_desc',function(event) {
//       event.preventDefault();
//         $(this).fadeOut('fast');
//         $('.full_desc').fadeIn('fast');
//     });

//     $('.course_description').on('click','#less_desc',function(event) {
//       event.preventDefault();
//         $('.full_desc').fadeOut('fast'); 
//         $('#more_desc').fadeIn('fast');
//     });

//     $('#signup_password, #account_password').each(function(){
//       var label;
//       var $this = $(this);
//       if($(this).hasClass('form_field')){
//         label =  $('label[for="signup_password"]');
//       }else{
//         label =  $('label[for="account_password"]');
//       }
//       $(this).keyup(function() {
        
//         if(label.find('span').length){ 
//           label.find('span').html((checkStrength($this.val(),label)));
//         }else{
//           label.append('<span>'+(checkStrength($this.val(),label))+'</span>');
//         }
//       });
//       function checkStrength(password,label) {
//         var strength = 0
//         if (password.length < 6) {
//         label.removeClass();
//         label.addClass('short');
//         return BP_DTheme.too_short
//         }
//         if (password.length > 7) strength += 1
//         // If password contains both lower and uppercase characters, increase strength value.
//         if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
//         // If it has numbers and characters, increase strength value.
//         if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
//         // If it has one special character, increase strength value.
//         if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
//         // If it has two special characters, increase strength value.
//         if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
//         // Calculated strength value, we can return messages
//         // If value is less than 2
//         if (strength < 2) {
//           label.removeClass();
//           label.addClass('weak');
//           return BP_DTheme.weak
//         } else if (strength == 2) {
//           label.removeClass();
//           label.addClass('good');
//           return BP_DTheme.good
//         } else {
//           label.removeClass()
//           label.addClass('strong')
//           return BP_DTheme.strong
//         }
//       }
//     });
// }); // END ready

// jQuery(document).ready(function($){  
//   if(jQuery().chosen) {
//   $('.form select').chosen({
//       allow_single_deselect: true,
//       disable_search_threshold: 8});

//   $('.chosen').chosen({
//       allow_single_deselect: true,
//       disable_search_threshold: 8});
//   }


//     $('.twitter_carousel').each(function(){
      
//   var $this = $(this);
//    $this.flexslider({
//     animation: "slide",
//     controlNav: false,
//     directionNav: false,
//     animationLoop: true,
//     slideshow: true,
//     prevText: "<i class='icon-arrow-1-left'></i>",
//     nextText: "<i class='icon-arrow-1-right'></i>",
//     start: function() {
//                $this.removeClass('loading');
//            }
//     });    
//   });
//   $('.certifications').flexslider({
//     animation: "slide",
//     controlNav: false,
//     directionNav: true,
//     animationLoop: true,
//     slideshow: false,
//     itemWidth: 212,
//     itemMargin:10,
//     maxItems:4,
//     minItems:1,
//     prevText: "<i class='icon-arrow-1-left'></i>",
//     nextText: "<i class='icon-arrow-1-right'></i>",
//   });
// });// END ready

// //* To be Removed in next update

// jQuery(document).ready(function($){  

//   $('.v_parallax_block').each(function(){
//       var $bgobj = $(this);
//       var i = parseInt($bgobj.attr('data-scroll'));
//       var rev = parseInt($bgobj.attr('data-rev'));
//       var ptop = $bgobj.parent().position().top;
//       var adjust = parseInt($bgobj.attr('data-adjust'));
//       var height = $bgobj.height();

//       var v_parallax_block_height = $bgobj.find('.parallax_content').height();
//       if(height<v_parallax_block_height)
//         height = v_parallax_block_height;


//       if(rev == 2){
        
//       }else{
//         var $parent = $bgobj.parent().parent();
//         if($parent.hasClass('stripe')){
//             $parent.css('height',height+'px');
//         }
//       }
      
//       $(window).scroll(function(e) {
//           e.preventDefault();
//           var $window = jQuery(window);
//           var yPos = Math.round((($window.scrollTop())/i));
//           var coords;
//            if(rev != undefined){
//                if(rev == 2){
//                 yPos = Math.round((($window.scrollTop()-ptop)/i));
//                 $bgobj.parent().css('-webkit-transform', 'translateY('+yPos+'px)');
//                 $bgobj.parent().css('transform', 'translateY('+yPos+'px)');
//                }else if(rev == 1){
//                   yPos = yPos  - adjust;
//                   coords = '50% '+yPos+ 'px';
//                   $bgobj.css('background-position', coords);
//                 }else{
//                   yPos =  adjust - yPos;
//                   coords = '50% '+yPos + 'px';//console.log(coords);
//                   $bgobj.css('background-position', coords);
//                 }
//             }
//       }); 
//     });   
// });   
// //* To be Removed in next update

// //vibe_carousel flexslider direction horizontal  columns1
// jQuery(document).ready(function($){    
 

// //* To be Removed in next update
// $('section.stripe').each(function(){
//         var style = $(this).find('.v_column.stripe_container .v_module').attr('data-class');
//         if(style){style='stripe '+style;
//             $(this).find('.v_column.stripe .v_module').removeAttr('data-class');
//             $(this).attr('class',style);
//         }
//         var style = $(this).find('.v_column.stripe .v_module').attr('data-class');
//         if(style){style='stripe '+style;
//             $(this).find('.v_column.stripe .v_module').removeAttr('data-class');
//             $(this).attr('class',style);
//         }
//     });
// //* To be Removed in next update

// //WooCommerce payment expand fix
//  $('.payment_methods.methods >li').click(function(){
//     var $this = $(this);
//     $('.payment_methods.methods >li').find('div').hide(0,function(){$this.find('div').show(0);});
//  });

// function v_carousel_fx($this){
//     var direction,control,itemwidth,maxitem,minitem,scroll,vmargin;
//     direction=control=false;vmargin=margin=30;
//     scroll='horizontal';
//     $this.find('li.product').removeClass().addClass('product');
//     if($this.parent().hasClass('direction'))
//         direction = true;
//     else
//         direction = false;
//     if($this.parent().hasClass('control'))
//         control = true;
//     else
//         control = false;

//    if($this.parent().hasClass('columns1')){
//        itemwidth=true;
//        maxitem=1;
//        minitem=1;
//        margin=0;
//    }
       
       
//    if($this.parent().hasClass('columns2')){
//        itemwidth = 420;
//        maxitem=2;
//        minitem=2;
//    }
       
   
//    if($this.parent().hasClass('columns3')){
//        itemwidth=320;
//        maxitem=3;
//        minitem=2;
//    }
       
   
//    if($this.parent().hasClass('columns4')){
//        itemwidth=200;
//        maxitem=4;
//        minitem=2;
//    }
       
   
//    if($this.parent().hasClass('columns5')){
//        itemwidth=180;
//        maxitem=5;
//        minitem=2;
//    }
//    if($this.parent().hasClass('columns6')){
//        itemwidth=140;
//        maxitem=6;
//        minitem=2;
//    }
       
   
//     $this.flexslider({
//       animation: "slide",
//       selector: ".products > li", 
//       controlNav: control,
//       directionNav: direction,
//       animationLoop: false,
//       slideshow: false,
//       itemWidth: itemwidth,
//       itemMargin:margin,
//       maxItems:maxitem,
//       minItems:minitem,
//       prevText: "<i class='icon-arrow-1-left'></i>",
//       nextText: "<i class='icon-arrow-1-right'></i>",
//     });
//   }

//   $('.vibe_carousel.flexslider .woocommerce').each(function(){
//      var $this= $(this);
//      if($this.is(":visible")){
//         v_carousel_fx($this);
//      }
//   });

//   $('#prev_results a').on('click',function(event){
//       event.preventDefault();
//       $(this).toggleClass('show');
//       $('.prev_quiz_results').toggleClass('show');
//   });
// });


// jQuery(document).ready(function($){    
           
//     $('#filtercontainer').each(function(){

//       var $container = $('#filtercontainer'),
//           filters = {};
     
//       $container.isotope({
//         itemSelector : '.filteritem',
//       });
    

//       // filter buttons
//       $('.filters a').click(function(){
//         var $this = $(this);
//         // don't proceed if already selected
//         if ( $this.hasClass('active') ) {
//           return;
//         }
        
//         var $optionSet = $this.parents('.option-set');
//         // change selected class
//         $optionSet.find('.active').removeClass('active');
//         $this.addClass('active');
        
//         // store filter value in object
//         // i.e. filters.color = 'red'
//         var group = $optionSet.attr('data-filter-group');
//         filters[ group ] = $this.attr('data-filter-value');
//         // convert object into array
//         var isoFilters = [];
//         for ( var prop in filters ) {
//           isoFilters.push( filters[ prop ] );
//         }
//         var selector = isoFilters.join('');
//         $container.isotope({ filter: selector });

//         return false;
//       });   
//     }); 
// });// END ready


// jQuery(document).ready(function($){
//   //inscroll menu
//   $('.inmenu').each(function(){
//       var inmenu_top = $('.inmenu').offset().top - 40;
//       var footer_top = $('footer').offset().top - Math.round($(window).height()/2) - 90;
//       $(window).scroll(function(){
//           var top=$(window).scrollTop();
//           if(top > inmenu_top && top < footer_top){
//             $('.inmenu').addClass('affix');
//           }else{
//             $('.inmenu').removeClass('affix');
//           }
//       });
//   });
// });// END ready


// jQuery(document).ready(function($) { 
//  // Cache selectors
//  var lastId;
//  var topMenu = $(".scrollmenu"); 
//  var topMenuHeight = 0;//topMenu.outerHeight()+15
//      // All list items
//  var menuItems = topMenu.find("a"),
//      // Anchors corresponding to menu items
//      scrollItems = menuItems.map(function(){
//        var item = $($(this).attr("href"));
       
//        if (item.length) { return item; }
//      });
  

//    // Bind click handler to menu items
//    // so we can get a fancy scroll animation
//   menuItems.click(function(e){
//     e.preventDefault();
//      var href = $(this).attr("href"),
//          offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;

//      $('html, body').stop().animate({ 
//          scrollTop: offsetTop
//      }, 800);
//     //return false;
//    });


//         $(window).scroll( function ()
//         {
//             var fromTop = $(this).scrollTop()+25;
//             var cur = scrollItems.map(function(){
//               if ($(this).offset().top < fromTop)
//                 return this;
//             });
//             cur = cur[cur.length-1];
//             var id = cur && cur.length ? cur[0].id : "";
//             if (lastId !== id) {
//                 lastId = id;
//                 menuItems
//                   .parent().removeClass("active");
//                   menuItems.filter("[href=#"+id+"]").parent().addClass("active");              
//                    }
                   
//                  // Animation function  
//                    $('.animate').filter(":onScreen").not('.load').each(function(i){ 
//                       var $this=$(this);
//                            var ind = i * 100;
//                            var docViewTop = $(window).scrollTop();
//                            var docViewBottom = docViewTop + $(window).height();
//                            var elemTop = $this.offset().top;      
//                                if (docViewBottom >= elemTop) { 
//                                    setTimeout(function(){ 
//                                         $this.addClass('load');
//                                     }, ind);
//                                    }      
//                        });
//                       //End function 
                   
//         });
// });// END ready



  
// //CHECKOUT FORM
// jQuery(document).ready(function ($) {
       
//     $('.minmax').click(function(event){
//         event.preventDefault();
//         $(this).parent().toggleClass('show');
//         $(this).find('i').toggleClass('icon-minus');
//     });
// });// END ready


// // ADD Question Form
// jQuery(document).ready(function($){ 
//   $( ".repeatablelist" ).each(function(){
//     $(this).sortable({ handle: '.sort_handle' }); 
//   });
//   $('.add_repeatable').click(function(){
//     var repeatablelist=$(this).parent().find('.repeatablelist');
//     var lastitem=$(this).parent().find('.repeatablelist li:last-child');
//     var cloneditem=lastitem.clone();
//     var name= cloneditem.find('.option_text').attr('rel-name');

//     cloneditem.find('.option_text').attr('name',name);
//     repeatablelist.append(cloneditem);
//   });
//   $('.print_results').click(function(event){
//       event.preventDefault();
//       $('.quiz_result').print();
//   });

// });// END ready

// jQuery(window).load(function($){
//      NProgress.done();
// });


// })(jQuery);



/* MINIFIED */


(function(a){a.expr[":"].onScreen=function(g){var e=a(window);var j=e.scrollTop();var c=e.height();var f=j+c;var d=a(g);var h=d.offset().top;var i=d.height();var b=h+i;return(h>=j&&h<f)||(b>j&&b<=f)||(i>c&&h<=j&&b>=f);};})(jQuery);(function(a){jQuery(document).ready(function(c){c(".menu-2 li > ul").addClass("child-nav");c(".child-nav").before('<button class="sub-menu-toggle" role="button" aria-pressed="false"><span class="plus">+</</button>');c(".sub-menu-toggle").on("click",function(){var e=c(this);e.toggleClass("activated");e.next(".child-nav").slideToggle();});c(".dropdown_forjs").find("li").click(function(){var g=c(this).find("a").text();var e=c(this).find("a").attr("dataval");c(this).parent(".dropdown_forjs").parent(".wrapper-dropdown-3_1forjs").find(".hideselect").val(e);c(this).parent(".dropdown_forjs").parent(".wrapper-dropdown-3_1forjs").find("span").text(g);c(this).parent(".dropdown_forjs").parent(".wrapper-dropdown-3_1forjs").find("p").text(g);var f=c(this).parent(".dropdown_forjs").attr("datasubid");if(f!="none"){c("#"+f).find("li").hide();c("#"+f).find(".cata"+e).show();}});c(".wrapper-demo_rightforjs").click(function(){c(this).find(".dropdown_forjs").toggle();});c("#opzzzyz").click(function(){var e=c("#mobilemenu_extended_categories").slideUp(100);var e=c("#mobilemenu_extended").toggle(300);});function d(e){this.dd=e;this.placeholder=this.dd.children("span");this.values=this.dd.children(".hideselect");this.opts=this.dd.find("ul.dropdown > li");this.val="";this.index=-1;this.initEvents();}d.prototype={initEvents:function(){var e=this;e.dd.on("click",function(f){c(this).toggleClass("active");return false;});e.opts.on("click",function(){var f=c(this);e.val=f.text();e.index=f.index();e.placeholder.text(e.val);e.values.val(e.val);});},getValue:function(){return this.val;},getIndex:function(){return this.index;}};c(function(){var e=new d(c("#dd"));c(document).click(function(){c(".wrapper-dropdown-3").removeClass("active");});});function b(e){this.ff=e;this.placeholder=this.ff.children("span");this.opts=this.ff.find("ul.dropdown > li");this.val="";this.index=-1;this.initEvents();}b.prototype={initEvents:function(){var e=this;e.ff.on("click",function(f){c(this).toggleClass("active");return false;});e.opts.on("click",function(){var f=c(this);e.val=f.text();e.index=f.index();e.placeholder.text(e.val);});},getValue:function(){return this.val;},getIndex:function(){return this.index;}};c(function(){var e=new b(c("#ff"));c(document).click(function(){c(".wrapper-dropdown-3").removeClass("active");});});c(".menu_btncontainer_m div").click(function(){c(".searchbarcotna").hide();if(c(this).hasClass("opns_men")){c(this).removeClass("opns_men");c(this).addClass("opns_men_active");c(".menu_btncontainer_m").addClass("add_bodef");}else{if(c(this).hasClass("opns_men_active")){c(this).removeClass("opns_men_active");c(this).addClass("opns_men");c(".menu_btncontainer_m").removeClass("add_bodef");}}var e=c(".rightblacksmall_menu").toggle(500);});c(".searchcontainer_m div").click(function(){c(".rightblacksmall_menu").hide();if(c(this).hasClass("seasrasch_masd")){c(this).removeClass("seasrasch_masd");c(this).addClass("seasrasch_masd_active");}else{if(c(this).hasClass("seasrasch_masd_active")){c(this).removeClass("seasrasch_masd_active");c(this).addClass("seasrasch_masd");}}var e=c(".searchbarcotna").toggle(500);});c(".brwsze_cat").click(function(){c(".rightblacksmall_menu").hide();if(c(this).hasClass("seasrasch_masd")){c(this).removeClass("seasrasch_masd");c(this).addClass("seasrasch_masd_active");}else{if(c(this).hasClass("seasrasch_masd_active")){c(this).removeClass("seasrasch_masd_active");c(this).addClass("seasrasch_masd");}}var e=c(".searchbarcotna").toggle(500);});c(".pagesidebar li.menu-item-has-children").click(function(){var e=c(this).find("ul:first");e.toggle(200);e.addClass("active");});c("nav .menu-item").has(".sub-menu").each(function(){if(c(this).find(".megadrop").length>0){}else{c(this).addClass("hasmenu");}});c(".vbplogin").click(function(e){e.preventDefault();c("#vibe_bp_login").fadeIn(300);c("#vibe_bp_login").toggleClass("active");e.stopPropagation();});c("#searchicon").click(function(e){c("#searchdiv").toggleClass("active");});c(document).mouseup(function(g){var f=c("#searchdiv");if(!f.is(g.target)&&f.has(g.target).length===0){f.hide();f.removeClass("active");}f=c("#vibe_bp_login");if(!f.is(g.target)&&f.has(g.target).length===0){f.hide();}});c("#headernotification").each(function(){var e=c.cookie("closed");if((e!==null)&&e=="headernotification"){c(this).hide();}});c("#widget-tabs a").click(function(f){f.preventDefault();c(this).tab("show");});c("#footernotification").each(function(){var e=c.cookie("closed");if((e!==null)&&e=="footernotification"){c(this).hide();}});c(".close").click(function(){var e=c(this).parent().parent();var f=e.attr("id");e.hide(200);c.cookie("closed",f,{expires:2,path:"/"});});jQuery("#scrolltop a").click(function(e){e.preventDefault();c("body,html").animate({scrollTop:0},1200);return false;});c("body").delegate(".woocommerce-error","click",function(e){e.preventDefault();c(this).fadeOut(200);});c(".tip").tooltip();c(".nav-tabs li:first a").tab("show");c(".course_description").on("click","#more_desc",function(e){e.preventDefault();c(this).fadeOut("fast");c(".full_desc").fadeIn("fast");});c(".course_description").on("click","#less_desc",function(e){e.preventDefault();c(".full_desc").fadeOut("fast");c("#more_desc").fadeIn("fast");});c("#signup_password, #account_password").each(function(){var e;var g=c(this);if(c(this).hasClass("form_field")){e=c('label[for="signup_password"]');}else{e=c('label[for="account_password"]');}c(this).keyup(function(){if(e.find("span").length){e.find("span").html((f(g.val(),e)));}else{e.append("<span>"+(f(g.val(),e))+"</span>");}});function f(i,h){var j=0;if(i.length<6){h.removeClass();h.addClass("short");return BP_DTheme.too_short;}if(i.length>7){j+=1;}if(i.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)){j+=1;}if(i.match(/([a-zA-Z])/)&&i.match(/([0-9])/)){j+=1;}if(i.match(/([!,%,&,@,#,$,^,*,?,_,~])/)){j+=1;}if(i.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)){j+=1;}if(j<2){h.removeClass();h.addClass("weak");return BP_DTheme.weak;}else{if(j==2){h.removeClass();h.addClass("good");return BP_DTheme.good;}else{h.removeClass();h.addClass("strong");return BP_DTheme.strong;}}}});});jQuery(document).ready(function(b){if(jQuery().chosen){b(".form select").chosen({allow_single_deselect:true,disable_search_threshold:8});b(".chosen").chosen({allow_single_deselect:true,disable_search_threshold:8});}b(".twitter_carousel").each(function(){var c=b(this);c.flexslider({animation:"slide",controlNav:false,directionNav:false,animationLoop:true,slideshow:true,prevText:"<i class='icon-arrow-1-left'></i>",nextText:"<i class='icon-arrow-1-right'></i>",start:function(){c.removeClass("loading");}});});b(".certifications").flexslider({animation:"slide",controlNav:false,directionNav:true,animationLoop:true,slideshow:false,itemWidth:212,itemMargin:10,maxItems:4,minItems:1,prevText:"<i class='icon-arrow-1-left'></i>",nextText:"<i class='icon-arrow-1-right'></i>"});});jQuery(document).ready(function(b){b(".v_parallax_block").each(function(){var k=b(this);var f=parseInt(k.attr("data-scroll"));var d=parseInt(k.attr("data-rev"));var e=k.parent().position().top;var j=parseInt(k.attr("data-adjust"));var c=k.height();var g=k.find(".parallax_content").height();if(c<g){c=g;}if(d==2){}else{var h=k.parent().parent();if(h.hasClass("stripe")){h.css("height",c+"px");}}b(window).scroll(function(m){m.preventDefault();var n=jQuery(window);var i=Math.round(((n.scrollTop())/f));var l;if(d!=undefined){if(d==2){i=Math.round(((n.scrollTop()-e)/f));k.parent().css("-webkit-transform","translateY("+i+"px)");k.parent().css("transform","translateY("+i+"px)");}else{if(d==1){i=i-j;l="50% "+i+"px";k.css("background-position",l);}else{i=j-i;l="50% "+i+"px";k.css("background-position",l);}}}});});});jQuery(document).ready(function(c){c("section.stripe").each(function(){var d=c(this).find(".v_column.stripe_container .v_module").attr("data-class");if(d){d="stripe "+d;c(this).find(".v_column.stripe .v_module").removeAttr("data-class");c(this).attr("class",d);}var d=c(this).find(".v_column.stripe .v_module").attr("data-class");if(d){d="stripe "+d;c(this).find(".v_column.stripe .v_module").removeAttr("data-class");c(this).attr("class",d);}});c(".payment_methods.methods >li").click(function(){var d=c(this);c(".payment_methods.methods >li").find("div").hide(0,function(){d.find("div").show(0);});});function b(k){var j,i,g,h,f,e,d;j=i=false;d=margin=30;e="horizontal";k.find("li.product").removeClass().addClass("product");if(k.parent().hasClass("direction")){j=true;}else{j=false;}if(k.parent().hasClass("control")){i=true;}else{i=false;}if(k.parent().hasClass("columns1")){g=true;h=1;f=1;margin=0;}if(k.parent().hasClass("columns2")){g=420;h=2;f=2;}if(k.parent().hasClass("columns3")){g=320;h=3;f=2;}if(k.parent().hasClass("columns4")){g=200;h=4;f=2;}if(k.parent().hasClass("columns5")){g=180;h=5;f=2;}if(k.parent().hasClass("columns6")){g=140;h=6;f=2;}k.flexslider({animation:"slide",selector:".products > li",controlNav:i,directionNav:j,animationLoop:false,slideshow:false,itemWidth:g,itemMargin:margin,maxItems:h,minItems:f,prevText:"<i class='icon-arrow-1-left'></i>",nextText:"<i class='icon-arrow-1-right'></i>"});}c(".vibe_carousel.flexslider .woocommerce").each(function(){var d=c(this);if(d.is(":visible")){b(d);}});c("#prev_results a").on("click",function(d){d.preventDefault();c(this).toggleClass("show");c(".prev_quiz_results").toggleClass("show");});});jQuery(document).ready(function(b){b("#filtercontainer").each(function(){var d=b("#filtercontainer"),c={};d.isotope({itemSelector:".filteritem"});b(".filters a").click(function(){var i=b(this);if(i.hasClass("active")){return;}var g=i.parents(".option-set");g.find(".active").removeClass("active");i.addClass("active");var h=g.attr("data-filter-group");c[h]=i.attr("data-filter-value");var f=[];for(var j in c){f.push(c[j]);}var e=f.join("");d.isotope({filter:e});return false;});});});jQuery(document).ready(function(b){b(".inmenu").each(function(){var c=b(".inmenu").offset().top-40;var d=b("footer").offset().top-Math.round(b(window).height()/2)-90;b(window).scroll(function(){var e=b(window).scrollTop();if(e>c&&e<d){b(".inmenu").addClass("affix");}else{b(".inmenu").removeClass("affix");}});});});jQuery(document).ready(function(e){var f;var d=e(".scrollmenu");var g=0;var c=d.find("a"),b=c.map(function(){var h=e(e(this).attr("href"));if(h.length){return h;}});c.click(function(j){j.preventDefault();var h=e(this).attr("href"),i=h==="#"?0:e(h).offset().top-g+1;e("html, body").stop().animate({scrollTop:i},800);});e(window).scroll(function(){var h=e(this).scrollTop()+25;var i=b.map(function(){if(e(this).offset().top<h){return this;}});i=i[i.length-1];var j=i&&i.length?i[0].id:"";if(f!==j){f=j;c.parent().removeClass("active");c.filter("[href=#"+j+"]").parent().addClass("active");}e(".animate").filter(":onScreen").not(".load").each(function(l){var o=e(this);var m=l*100;var p=e(window).scrollTop();var n=p+e(window).height();var k=o.offset().top;if(n>=k){setTimeout(function(){o.addClass("load");},m);}});});});jQuery(document).ready(function(b){b(".minmax").click(function(c){c.preventDefault();b(this).parent().toggleClass("show");b(this).find("i").toggleClass("icon-minus");});});jQuery(document).ready(function(b){b(".repeatablelist").each(function(){b(this).sortable({handle:".sort_handle"});});b(".add_repeatable").click(function(){var e=b(this).parent().find(".repeatablelist");var f=b(this).parent().find(".repeatablelist li:last-child");var c=f.clone();var d=c.find(".option_text").attr("rel-name");c.find(".option_text").attr("name",d);e.append(c);});b(".print_results").click(function(c){c.preventDefault();b(".quiz_result").print();});});jQuery(window).load(function(b){NProgress.done();});})(jQuery);








