$( document ).ready(function() {
    // Hamburguer menu
    $(".menu-toggle").click(function() {
      $("nav").toggleClass("open");
      $(".hamburguer").toggleClass("open");
    });
    $(".nav-item").click(function() {
      $("nav").removeClass("open");
      $(".hamburguer").removeClass("open");
    });

    //Waypoints
    var itemIndex;

  });
  new GreenAudioPlayer('.gap-example');
  new GreenAudioPlayer('.gap1-example');
  new GreenAudioPlayer('.gap2-example');
  new GreenAudioPlayer('.gap3-example');
  new GreenAudioPlayer('.gap4-example');


