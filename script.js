function enviarForm(){
  let page = "formulario.php";
  
  let nomeVar = $("#nome").val();
  console.log(nomeVar);
  
  let mailVar = $("#mail").val();
console.log(mailVar);


  let telVar = $("#tel").val();
console.log(telVar);


  let mensagemVar = $("#mensagem").val();
  console.log(mensagemVar);
  
  
  $.ajax({
      type: 'POST',
      dataType: 'html',
      url: page,
      data: { chaveNome: nomeVar, chaveEmail: mailVar, chaveTel: telVar, chaveMsn: mensagemVar },
      success: function(dados) {
          if (dados) {
            console.log(dados);
            
          } else {
            console.log(dados);

          }

      }

  });
}
$("#tel").mask('(00)0000#-0000');