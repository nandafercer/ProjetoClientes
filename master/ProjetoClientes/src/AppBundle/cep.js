$(document).ready( function() {
   $('#cep').blur(function(){
           $.ajax({
                url : 'consultar_cep.php', 
                type : 'POST', 
                data: 'cep=' + $('#cep').val(), 
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#rua').val(data.rua);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.cidade);
                        $('#uf').val(data.uf);
 
                        $('#numero').focus();
                    }
                }
           });
   return false;
   })
});