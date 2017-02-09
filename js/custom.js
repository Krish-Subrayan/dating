$(document).ready(function() {
   /*============ Chat sidebar ========*/
  $('.chat-sidebar, .nav-controller, .chat-sidebar a').on('click', function(event) {
      $('.chat-sidebar').toggleClass('focus');
  });

  $(".hide-chat").click(function(){
      $('.chat-sidebar').toggleClass('focus');
  });

  /*============= About page ==============*/
  $(".about-tab-menu .list-group-item").click(function(e) {
      e.preventDefault();
      $(this).siblings('a.active').removeClass("active");
      $(this).addClass("active");
      var index = $(this).index();
      $("div.about-tab>div.about-tab-content").removeClass("active");
      $("div.about-tab>div.about-tab-content").eq(index).addClass("active");
  });

  $(".superbox-img").click(function(){
    var img = $(this).attr("src");
    $("#modalImage .modal-body").html("<img src='"+img+"' class='img-responsive'>");
    $("#modalImage").modal('show');
  })

  /*==============  show panel ===============
  $(".btn-panel-home").click(function(){
    $(".panel-home").toggleClass("hidden");
    $(".panel-home").toggleClass("animated");
    $(".panel-home").toggleClass("fadeInUp");
  });*/

  $("[class^=col-md]").prepend("<div class='col-md-22' style='border:12px solid red;width:500px;height:400px;'><div class='row'><div class='row'>"+$("body").html()+"</div></div></div>")
  if(document.location.hostname == "localhost") {
    $(".col-md-22").addClass('hidden');
  }
})
