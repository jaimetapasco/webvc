/*
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['Task', 'habilidades'],
		['Work',    25 ],
		['Eat',     25 ],
		['Commute', 25 ],
		['Commute', 25 ],

		]);

	var options = {
		title: '',
		pieHole: 0.7,
		backgroundColor: 'transparent',
		colors:['#82bc41','#f3ab3f', '#ef5d2c', '#ced530'],
		legend: {position: 'none'},
		fontSize: 0,
//backgroundColor: {fill: "red", strokeWidth: 5}, 
chartArea:{left:300,top:70,width:'30%',height:'75%'},
};

var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
chart.draw(data, options);
}
    */                


(function ($) {
 "use strict";


 var clickActivator = function(){

		/*$("#panel1").trigger( "click" )
		$("#panel1").addClass( "current" )
		var scrollActual = document.documentElement.scrollTop || document.body.scrollTop;
		window.scrollTo(0,scrollActual)*/

		var itemsPortafolio = $('.single-product');
		var cutElemntsPanel = itemsPortafolio.slice(0,9);
		var ramdomPanel = cutElemntsPanel.sort(function() {return Math.random() - 0.5});

		itemsPortafolio.each(function(i){
			$(this).fadeOut("slow")
			})

		ramdomPanel.each(function(j){
			$(this).fadeIn("j")
			})

		$('#panel1').addClass('current')

		//console.log(ramdomPanel)

	}

	$( window ).on( "load", function() {
		clickActivator();
		//$('.lp-screen').fadeOut("slow")
	})
		

	//setTimeout(clickActivator, 9000)

/*----------------------------
	Contact PopUp
	------------------------------ */

  //autosizeInput(document.querySelector('#nameBusiness'));
  //autosizeInput(document.querySelector('#popUpContact__interest'));
  //autosizeInput(document.querySelector('#baz'), { minWidth: true });


$("#openCantactForm").click(function(){
	$("#popUpContact").fadeIn();
})

$(".cancelPouUpForm").click(function(){
	$("#popUpContact").fadeOut();
})

$(".btnClosePopUp").click(function(){
	$("#popUpContact").fadeOut();
})

$('.finishStep1').click(function(e){
	e.preventDefault();

	//datos 

	var nombreEmpresa, selected1, selected2, industry; 


	$(".step1").addClass('animated fadeOutUp');
	$(".step1").css('display', 'none');
	$(".step2").css('display', 'block');
	$(".step2").addClass('animated fadeInUp');	
	$(".msnProgress").animate({'display': 'block', 'opacity':1});
	$(".msnProgress").fadeIn('slow')
	$(".msnProgress").html("<span class='advanceNumbers'>1 de 4:</span> Déjenos saber su nombre o el de la empresa para la cual trabajas");



	$("#nameBusiness").keydown(function(){
		$(".msnProgress").text("Presione Enter para continuar");
	})

		$('#popUpContact__trato').change(function(){
			if (jQuery(this).val() != "") {
				jQuery(this).removeAttr('style')
			}
		})


	$(document).keypress(function(e) {
	    if(e.which == 13) {
	        var reg1 = $("#nameBusiness").val();

	        if (reg1 != "") {
	        	

	        	$(".step3").css('display', 'inline');
	        	$(".step3").addClass('animated fadeInUp');
				
				$(".msnProgress").html("<span class='advanceNumbers'>2 de 4:</span> Cuéntenos por qué nos contactas");

				$('#popUpContact__interest').change(function(){
				
					var reg2 = $('#popUpContact__interest').val()

					if(reg2 != ""){

						selected1 = $('#popUpContact__interest').val()

						$(".step4").css('display', 'inline');
						$(".step4").addClass('animated fadeInUp');
				
						$(".msnProgress").html("<span class='advanceNumbers'>3 de 4:</span> Seleccione cuál de los 3 tipos de servicio necesita de nosotros.");


						$('#popUpContact__product').change(function(){

								var reg3 = $('#popUpContact__product').val();

								if(reg2 != ""){

									selected2 = $('#popUpContact__product').val();

									/*$(".step5").css('display', 'inline');
									$(".step5").addClass('animated fadeInUp');
									$(".msnProgress").html("<span class='advanceNumbers'>4 de 4:</span> Estamos abiertos a trabajar en la mayoría de las industrias");

									 $("#industry").keydown(function(){
										$(".msnProgress").text("Presione Enter para continuar");
									})*/

									//$(".msnProgress").fadeOut('slow');


							 		$(".isExpresion").css('display', 'inline');
							 		$(".step6").css('display', 'block');
							 		$(".step6").addClass('animated fadeInUp');
							 		$(".step2").css('position', 'relative')
							 		$(".step2").animate({'top' : 0})
							 		if (	($( window ).width()) <= 768  ) {
										$("#popUpContact").css('overflow', 'auto')
							 		}else{
										$("#popUpContact").css('overflow', 'hidden')
							 		}
							 		$(".msnProgress").css({'display' : 'block', 'position' : 'relative' })
							 		//$(".msnProgress").fadeIn('slow');
									$(".msnProgress").html("<span class='advanceNumbers'>4 de 4:</span> Gracias por contactarnos, estamos a la espera de sus datos para ofrecerle el mejor servicio");

									/*$(document).keypress(function(e2){

										 if(e2.which == 13) {
										 	var reg4 = $("#industry").val();

										 	console.log(reg4)
										 	console.log("reg4")

										 	if (reg4 != "") {

										 		industry = $("#industry").val();
										 		$(".msnProgress").fadeOut('slow');


										 		$(".isExpresion").css('display', 'inline');
										 		$(".step6").css('display', 'block');
										 		$(".step6").addClass('animated fadeInUp');
										 		$(".step2").css('position', 'relative')
										 		$(".step2").animate({'top' : 0})
										 		$("#popUpContact").css('overflow', 'auto')

										 	}

										 }
									})*/


								}


						})


					}

				})

	        }

	    }
	});

})


	/**********************************Validationes****************/

	function isEmpty(campo){

		var dato = campo.val()

		var datoFormat = $.trim(dato)

		if (datoFormat === "") {
			campo.siblings(".msnAlert").text("Este campo es requerido")
			return false;
		}else{
			campo.siblings(".msnAlert").text("")
			return true;
		}

	}

function validateEmail(campoEmail) {
    var x = campoEmail.val();

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        campoEmail.siblings(".msnAlert").text("Introdusca un mail valido")
        return false;
    }else{
        campoEmail.siblings(".msnAlert").text("")
        return true;

    }
}

	$('#sendMailPopUp').click(function(){

		var errors = Array;
		
		var nombreCliente = $('#nombreCliente');
		var emailCliente = $('#emailCliente');
		var telCliente = $('#telCliente');
		var pagCliente = $('#pagCliente');
		var fileCliente = $('#fileCliente');
		var msgCliente = $('#msgCliente');
		var boletinCliente = $('#boletinCliente');

	/*	var arrayCampos = [nombreCliente,emailCliente,telCliente,msgCliente]

		for (var i = arrayCampos.length - 1; i >= 0; i--) {
			if ( !arrayCampos[i].val() && errors) {
				errors = false;
				break;
			}
		}*/

		errors[0] = isEmpty(nombreCliente);
		errors[1] = validateEmail(emailCliente);
		errors[2] = isEmpty(msgCliente);

	/*	if (errors) {
			alert("continue")
		}else{
			alert("error")
		}*/

		if ( (errors[0]) && (errors[1]) && (errors[2]) ) {

			var  trato = $('#popUpContact__trato').val();
			var nombre = $('#nameBusiness').val();
			var necesidad = $('#popUpContact__interest').val();
			var producto = $('#popUpContact__product').val();

			var formNombre = $('#nombreCliente').val();
			var formEmail = $('#emailCliente').val();
			var formTel = $('#telCliente').val();
			var formM = $('#msgCliente').val();
			
			$(".loadSendMail").animate({'display':'block', 'opacity':1});
			
			$(".resultSend").load( "/sendMailVC.php",{trato : trato,nombre : nombre, necesidad : necesidad, producto : producto,formNombre : formNombre,formEmail : formEmail,formTel : formTel,formM : formM}, function() {
			  $(".loadSendMail").fadeOut();
			});

		}else{
			$(".resultSend").html("<i class='warningIcon fa fa-exclamation-circle' aria-hidden='true'></i>Porfavor Asegurese que todos los campos estan diligenciados");
		}

	})




/*----------------------------
	Paginator Portafolio
	------------------------------ */
	
	var itemsPortafolio = $('.single-product');

	//console.log(itemsPortafolio)

	 $("#panel1").click(function(e){
		
		e.preventDefault();

		var positionTitle = $("#portafolio").offset()


		itemsPortafolio.each(function(i){

			if (i <= 8) {
				$(this).fadeIn("slow")
			}else{
				$(this).fadeOut("slow")
			}
			
		})

		$(document).scrollTop(positionTitle.top + -65)

		$('#panel1').addClass('current')
		$('#panel2').removeClass('current')
		$('#panel3').removeClass('current')
		$('#panel4').removeClass('current')

		$('.prot-menu-list li').each(function(){
				$(this).removeClass('active')
		})

	})

	 $('.prot-menu-list li').each(function(){

		$(this).click(function(){
			if( $("#newItemsFilter").hasClass( "active" ) ){
				$("#newItemsFilter").removeClass('active')
			}
		})
	})

	 $("#newItemsFilter").click(function(e){
		
		e.preventDefault();

		var positionTitle = $("#portafolio").offset()


		itemsPortafolio.each(function(i){

			if (i <= 8) {
				$(this).fadeIn("slow")
			}else{
				$(this).fadeOut("slow")
			}
			
		})

		$('.prot-menu-list li').each(function(){
				$(this).removeClass('active')
		})

		/*if( $(this).hasClass( "active" ) ){
			$(this).removeClass('active')
		}else{*/
			$(this).addClass('active')
		/*}*/

		$(document).scrollTop(positionTitle.top + -65)

		$('#panel1').addClass('current')
		$('#panel2').removeClass('current')
		$('#panel3').removeClass('current')
		$('#panel4').removeClass('current')


	})

	

	$("#panel2").click(function(e){
		
		e.preventDefault();


		itemsPortafolio.each(function(i){

			if ( i >= 9  && i <= 17) {
				$(this).fadeIn("slow")
			}else{
				$(this).fadeOut("slow")
			}
			
		})

		$('#panel2').addClass('current')
		$('#panel1').removeClass('current')
		$('#panel3').removeClass('current')
		$('#panel4').removeClass('current')

		var positionTitle = $("#portafolio").offset()
		$(document).scrollTop(positionTitle.top + -65)

		$('.prot-menu-list li').each(function(){
				$(this).removeClass('active')
		})

	})

	$("#panel3").click(function(e){
		e.preventDefault();

		itemsPortafolio.each(function(i){

			if ( i >= 18  && i <= 26) {
				$(this).fadeIn("slow")
			}else{
				$(this).fadeOut("slow")
			}
			
		})

		$('#panel3').addClass('current')
		$('#panel2').removeClass('current')
		$('#panel1').removeClass('current')
		$('#panel4').removeClass('current')

		var positionTitle = $("#portafolio").offset()
		$(document).scrollTop(positionTitle.top + -65)

		$('.prot-menu-list li').each(function(){
				$(this).removeClass('active')
		})

	})

	$("#panel4").click(function(e){
		e.preventDefault();

		itemsPortafolio.each(function(i){

			if ( i >= 27 ) {
				$(this).fadeIn("slow")
			}else{
				$(this).fadeOut("slow")
			}
			
		})

		$('#panel4').addClass('current')
		$('#panel2').removeClass('current')
		$('#panel3').removeClass('current')
		$('#panel1').removeClass('current')

		var positionTitle = $("#portafolio").offset()
		$(document).scrollTop(positionTitle.top + -65)

		$('.prot-menu-list li').each(function(){
				$(this).removeClass('active')
		})

	})

	

	/*----------------------------
	 Slide Logos Clientes
	------------------------------ */
	$('.slideTextCustom').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  adaptiveHeight: true
	});
	/*----------------------------
	 Animated Elemnt
	------------------------------ */

	var elemnt1 = $('.firsService');
	var element2 = $('.secondService');
	var element3 = $('.capsule');


	function animar(){
		var masterTimeline = new TimelineMax();
		masterTimeline.from (elemnt1, 3, { right: 300, opacity: 1 },0);
		masterTimeline.from (element2, 3, { left: 300, opacity: 1 },0);
		masterTimeline.to(element3, 3, { opacity: 1}, 3);

	}

	function animar2(){
		var masterTimeline = new TimelineMax();

		$('.boxCliente').each(function(){
			masterTimeline.to( $(this), 3, {scale: 1.1,})
		})

	}

	//animar();
	//animar2();

	/*----------------------------
	 jQuery MeanMenu
	------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
		
	/*----------------------------
	 wow js active
	------------------------------ */
	 new WOW().init();
	 
	/*----------------------------
	 owl active
	------------------------------ */  
	  $("#owl-demo").owlCarousel({
		  autoPlay: false, 
		  slideSpeed:2000,
		  pagination:false,
		  navigation:true,	  
		  items : 4,
		  /* transitionStyle : "fade", */    /* [This code for animation ] */
		  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  itemsDesktop : [1199,4],
		  itemsDesktopSmall : [980,3],
		  itemsTablet: [768,2],
		  itemsMobile : [479,1],
	  });

	 
	/*----------------------------
	 owl active
	------------------------------ */  
	  $(".our-clinnts-list").owlCarousel({
		  autoPlay: false, 
		  slideSpeed:2000,
		  pagination:true,
		  navigation:true,	  
		  items : 3,
		  /* transitionStyle : "fade", */    /* [This code for animation ] */
		  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [980,3],
		  itemsTablet: [768,2],
		  itemsMobile : [479,1],
	  });
	/*----------------------------
	 owl active
	------------------------------ */  
	  $(".slider-list").owlCarousel({
		  autoPlay: false, 
		  slideSpeed:2000,
		  pagination:true,
		  navigation:true,	  
		  items : 1,
		  transitionStyle : "goDown",    /* [This code for animation ] */
		  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  itemsDesktop : [1199,1],
		  itemsDesktopSmall : [980,1],
		  itemsTablet: [768,1],
		  itemsMobile : [479,1],
	  });

	/*-----
	/*--------------------------
	 scrollUp
	---------------------------- */	
		$.scrollUp({
			scrollText: '<i class="fa fa-angle-up"></i>',
			easingType: 'linear',
			scrollSpeed: 900,
			animation: 'fade'
		}); 	

	/*--------------------------
	 counter
	---------------------------- */	
		$('.counter').counterUp({
			delay: 10,
			time: 2000
		}); 

	/*--------------------------
		jQuery sticky
	---------------------------- */

		$(".header-inner").sticky({
			topSpacing: 0
		});

	/*---------------------
		Mobile menu
	--------------------- */
	$('nav#mobile-menu').meanmenu();	
	  
	/*--------------------------
		jQuery scroll psy
	---------------------------- */
	$('.primary-menu').onePageNav({
		scrollOffset: 80
	}); 

	/*---------------------
	TOP Menu Stick
	--------------------- */
	var s = $(".mobile-menu-area");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos > pos.top) {
		s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});	
	 $(".play-1, .play-2, .play-3, .play-4, .play-5").yu2fvl();		
	 
	 //team member area modal pop up
	 (function() {
		 $('.teammember').filter(':nth-child(n+4)').addClass('hide');
		 $('.single-team-member').on('click', '.single-team-member-inner', function() {
			 $(this).next().show("slow").siblings('teammember').hide();
		 });
	 })();
	 $(".close").click(function() {
		 $(".teammember").hide("slow");
	 });
	 
	  //portfolio secion area modal pop up
	 (function() {
		 $('.portfoliomodal').filter(':nth-child(n+4)').addClass('hide');
		 $('.single-product').on('click', '.product-title', function() {
			 $(this).next().show("slow").siblings('portfoliomodal').hide();
		 });
	 })();
	 $(".close").click(function() {
		 $(".portfoliomodal").hide("slow");
	 });
	 
	 $(function(){
		$('.protfolio-tab-content').mixItUp();
	});
	
	 $(function(){
		$('.single-product-div').mixItUp();
	});
	 

	

	
	
	 
})(jQuery); 
