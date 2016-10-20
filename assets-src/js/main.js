$(function() {
  console.log( "ready!" );

  $('#test').click(function(){
		alert('Javascript and jQuery are working');
	});

	$('[data-toggle="offcanvas"]').click(function () {
	    $('.sidebar-offcanvas').toggleClass('active');
	    // alert('yes');
  });

  // $('[data-toggle="collapse"]').click(function () {
  // 		$('a.big-head').toggleClass('sneaky');
  // });

	$('#sidebar-toggle').click(function () {
		//alert('yas');
	});
		
});



