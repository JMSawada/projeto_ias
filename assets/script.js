$(document).ready(function() {
  $('#form-cadastro').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
      url: 'salvar_site.php',
      method: 'POST',
      data: $(this).serialize(),
      dataType: 'json',
      success: function(res) {
        if (res.sucesso) {
          $('#mensagem').css('color', 'green').text('✅ Site cadastrado com sucesso!');
          $('#form-cadastro')[0].reset();
        } else {
          $('#mensagem').css('color', 'red').text('❌ Erro: ' + res.mensagem);
        }
      },
      error: function() {
        $('#mensagem').css('color', 'red').text('Erro ao se comunicar com o servidor.');
      }
    });
  });
});
