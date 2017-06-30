$('.js-scroll').on('click', function(event) {
  event.preventDefault();

  var target = $(this).data('scrollTo');

  $('html, body').animate({

    scrollTop: $(target).offset().top
    
  }, 400);
});

$("#submitQuest").on('click', function(event){
	$("#questForm").show();
});