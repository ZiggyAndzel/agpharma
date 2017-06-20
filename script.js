$(document).ready(function() {
	
	if($(window).width() < 768) {
		console.log("mobile");
	} 
	else {
		$(window).scroll(function () {
			console.log("desktop");
			if ($(this).scrollTop() > 400) {
				$('.navbar').addClass('nav-fixed');
			}
			else if ($(this).scrollTop() <= 400) {
				$('.navbar').removeClass('nav-fixed');
			}
		});
		
		$('#main-slogan-title').waypoint(function() {
			$('#main-slogan-title').addClass('fadeInLeft').addClass('delay-1');
		}, { offset: '90%'});
		
		$('#main-slogan-bt-1').waypoint(function() {
			$('#main-slogan-bt-1').addClass('fadeInLeft').addClass('delay-3');
		}, { offset: '90%'});
		
		$('#main-slogan-bt-2').waypoint(function() {
			$('#main-slogan-bt-2').addClass('fadeInLeft').addClass('delay-2');
		}, { offset: '90%'});
		
		$('.our-offer').waypoint(function() {
			$('.our-offer').addClass('fadeInLeft');
		}, { offset: '80%'});
		
		$('#useful-things').waypoint(function() {
			$('#useful-things').addClass('fadeInRight');
		}, { offset: '80%'});
		
		$('#useful-list').waypoint(function() {
			$('#useful-list').addClass('fadeInRight').addClass('delay-1');
		}, { offset: '80%'});
		
		$('.bt-order').waypoint(function() {
			$('.bt-order').addClass('fadeInRight').addClass('delay-2');
		}, { offset: '80%'});
		
		$('.bt-list').waypoint(function() {
			$('.bt-list').addClass('fadeInRight').addClass('delay-3');
		}, { offset: '80%'});
		
		$('#tab-1').waypoint(function() {
			$('#tab-1').addClass('fadeInDown');
		}, { offset: '80%'});
		
		$('#tab-2').waypoint(function() {
			$('#tab-2').addClass('fadeInDown').addClass('delay-1');
		}, { offset: '80%'});
		
		$('#tab-3').waypoint(function() {
			$('#tab-3').addClass('fadeInDown').addClass('delay-2');
		}, { offset: '80%'});
		
		$('#tab-4').waypoint(function() {
			$('#tab-4').addClass('fadeInDown').addClass('delay-3');
		}, { offset: '80%'});
		
		$('#tab-5').waypoint(function() {
			$('#tab-5').addClass('fadeInDown').addClass('delay-4');
		}, { offset: '80%'});
		
		$('#tab-6').waypoint(function() {
			$('#tab-6').addClass('fadeInDown').addClass('delay-5');
		}, { offset: '80%'});
		
		$('#macro-pic').waypoint(function() {
			$('#macro-pic').addClass('fadeInLeft');
		}, { offset: '80%'});
		
		$('#pros').waypoint(function() {
			$('#pros').addClass('fadeInRight');
		}, { offset: '80%'});
		
		$('#how-it-works').waypoint(function() {
			$('#how-it-works').addClass('fadeIn');
		}, { offset: '80%'});
		
		$('#company-info').waypoint(function() {
			$('#company-info').addClass('fadeInLeft');
		}, { offset: '80%'});
		
		$('#shortcut-title').waypoint(function() {
			$('#shortcut-title').addClass('fadeInRight');
		}, { offset: '80%'});
		
		$('#short-1').waypoint(function() {
			$('#short-1').addClass('fadeInRight').addClass('delay-1');
		}, { offset: '100%'});
		
		$('#short-2').waypoint(function() {
			$('#short-2').addClass('fadeInRight').addClass('delay-2');
		}, { offset: '100%'});
		
		$('#short-3').waypoint(function() {
			$('#short-3').addClass('fadeInRight').addClass('delay-3');
		}, { offset: '100%'});
		
		$('#short-4').waypoint(function() {
			$('#short-4').addClass('fadeInRight').addClass('delay-4');
		}, { offset: '100%'});
		
		$('#short-5').waypoint(function() {
			$('#short-5').addClass('fadeInRight').addClass('delay-5');
		}, { offset: '100%'});
	};
	
	$('.product-list .nav .active h3').addClass('tile-active');
	$('.product-list .tile a').click(function(){
		$('.product-list .nav-link h3').removeClass('tile-active');
        $(this).parent().find('h3').addClass('tile-active');
    });
	
	$('.order-form .nav-item:first-of-type').addClass('active');	
	$('.order-form .nav-item').click(function(){
		$('.order-form .nav-item').removeClass('active');
        $(this).addClass('active');
    });
	
	$("#product-amount").change(function() {
		var min = parseInt($(this).attr('min'));
		if ($(this).val() < min) {
			$(this).val(min);
		};    
    });
	
	var option = '';
	var autoimmunologia = ["R34-112 - Rapid Strep A Test Disk [20 szt.]",
						   "R90-112 - Rapid Influenza A/B Test Panel [20 szt.]",
						   "222001A - NADAL® Strep A Test (test kasetowy) [20 szt.]",
						   "312003 - NADAL® CrP (test kasetowy) [20 szt.]",
						   "311003 - NADAL® CrP (test zanurzeniowy) [20 szt.]",
						   "481015 - NADAL® Rota-Adenovirus Test (test kasetowy) [10 szt.]",
						   "252001 - NADAL® Mononukleose Test (test kasetowy) [20 szt.]",
						   "322003N-30 - NADAL® Tuberkulose IgG/IgM-Test (test kasetowy) [30 szt.]",
						   "491009 - NADAL® RSV-Adeno [20 szt.]",
						   "491005 - NADAL® RSV (test kasetowy) [20 szt.]",
						   "491003N-25 - NADAL® RSV (test zanurzeniowy) [25 szt.]",
						   "491000 - NADAL® RSV plus (test zanurzeniowy) [10 szt.]",
						   "600002N-30 - NADAL® RF - Test (test zanurzeniowy) [30 szt.]"];
	var kardiologia = ["282003 - NADAL® Cardiac Combo (test kasetowy) [5 szt.]",
					   "R22-112 - One Step cTnI Advanced Test Disk [30 szt.]"];
	var ginekologia = ["611003N-10 - NADAL® Gonorrhö (rzeżączka) (test kasetowy) [10 szt.]",
					   "212005 - InstAlert® Chlamydia Test [20 szt.]",
					   "1120001 - NADAL® Candida Albicans [20 szt.]",
					   "431001N-10 - NADAL® PROM Test (test zanurzeniowy) [20 szt.]",
					   "431001N-20 - NADAL® PROM Test (test zanurzeniowy) [10 szt.]",
					   "1130001 - NADAL® HSV 1 i 2 (test kasetowy) [20 szt.]",
					   "232001 - NADAL® Strep B Test (test kasetowy) [20 szt.]",
					   "840003N-10 - NADAL® Trichomonas vaginalis (test kasetowy) [10 szt.]",
					   "194001 - Adjuva pH-Control [50 szt.]",
					   "R66-112 - Rapid Strep B Test Disk [20 szt.]"];
	var onkologia = ["602002 - Keul-o-test PSA K [20 szt.]",
					 "262001 - NADAL® H.pylori przeciwciała (test kasetowy) [20 szt.]",
					 "262002 - NADAL® H.pylori antygen (test kasetowy) [20 szt.]",
					 "272001 - NADAL® FOB Test (test kasetowy) [20 szt.]",
					 "272004 - Urządzenie do pobierania kału [20 szt.]",
					 "GP 102 - Test Urazowy suchy [50 szt.]"];
	var drugtests = ["R153-1000 - One Step Multi-Drug Test Kit [10 szt.]"];
	var alergie = ["R14-116 - One Step IgE Test Disk [30 szt.]"];
	
	for (var i=0;i<autoimmunologia.length;i++){
		option += '<option value="'+ autoimmunologia[i] + '">' + autoimmunologia[i] + '</option>';
	};
	$('#product-selection').append(option);
	
	$('#1').click(function(){
		$('#product-selection').empty();
		for (var i=0;i<autoimmunologia.length;i++){
			$('<option/>').val(autoimmunologia[i]).html(autoimmunologia[i]).appendTo('#product-selection');
		}
	});
	
	$('#2').click(function(){
		$('#product-selection').empty();
		for (var i=0;i<kardiologia.length;i++){
			$('<option/>').val(kardiologia[i]).html(kardiologia[i]).appendTo('#product-selection');
		}
	});
	
	$('#3').click(function(){
		$('#product-selection').empty();
		for (var i=0;i<ginekologia.length;i++){
			$('<option/>').val(ginekologia[i]).html(ginekologia[i]).appendTo('#product-selection');
		}
	});
	
	$('#4').click(function(){
		$('#product-selection').empty();
		for (var i=0;i<onkologia.length;i++){
			$('<option/>').val(onkologia[i]).html(onkologia[i]).appendTo('#product-selection');
		}
	});
	
	$('#5').click(function(){
		$('#product-selection').empty();
		for (var i=0;i<drugtests.length;i++){
			$('<option/>').val(drugtests[i]).html(drugtests[i]).appendTo('#product-selection');
		}
	});
	
	$('#6').click(function(){
		$('#product-selection').empty();
		for (var i=0;i<alergie.length;i++){
			$('<option/>').val(alergie[i]).html(alergie[i]).appendTo('#product-selection');
		}
	});
	
	$('#add-product').click(function() {
		var product = $('#product-selection').val();
		var quantity = $('#product-amount').val();
		$('#product-list').append('<li>' + product + ' - ' + ' x' + quantity + '<i class="rmv fa fa-times"></i></li>' + '&#013');
		$(".rmv").click(function(){
			$(this).parent('li').remove();
		});
	});
	
	$('#submit').click(function(){    
		$('#txtData').val($('#txtData').val() + $('#product-list').text());
	});
});