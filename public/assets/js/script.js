$(document).ready(function(){
    $('#form-login').find('input').on('keyup', function(e){
        if(e.keyCode == 13){
            $('#btn-login').trigger('click');
        }
    });

    $(document).on('click', '#btn-login', function(){
        var btn = $(this);
        var form = $('#form-login').serialize();
        var url = $('#form-login').attr('action');
        btn.html('<div class="spinner-border text-light" role="status"></div>');
        btn.prop('disabled', true);
        $('#form-login').find('input').prop('disabled', true);

        $.ajax({
            url: url,
            type: 'POST',
            data: form,
            success: (data) => {
                // console.log(data);

                window.location.href = data;
            },
            error: (err) => {
                // console.log(err);
                btn.html('ENTRAR');
                btn.prop('disabled', false);
                $('#form-login').find('input').prop('disabled', false);

                Swal.fire({
                    icon: 'error',
                    title: 'Email ou Senha invalidos'
                });
            }
        });
    });
});



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


function logout() {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Você tem certeza que gostaria de sair?',
        text: "Você podera voltar novamente mais tarde!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, eu vou sair!',
        cancelButtonText: 'Não, cancelar!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href="site-logout";
          swalWithBootstrapButtons.fire(
            'Ahhh!',
            'Volte mais tarde, você esta sendo deslogado!',
            'error'
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Oba',
            'Você decidiu ficar mais um pouco :)',
            'success'
          )
        }
      })
}
new GreenAudioPlayer('.gap-example');
new GreenAudioPlayer('.gap1-example');
new GreenAudioPlayer('.gap2-example');
new GreenAudioPlayer('.gap3-example');
new GreenAudioPlayer('.gap4-example');
