function consultar(){


    retornoJson = "";
    var cep = document.getElementById('cep').value;
    console.log(cep);
  
      $.ajax({
  
          url:'https://viacep.com.br/ws/' + cep + '/json',
          type: 'get' , 
          data: {},
          Headers: {},
          
          success: function (data){
            retornoJson = data;
            if(retornoJson.error){
                alert ("CEP invalido, " + cep + "!" ); 
            } 
            else{

                document.getElementById('rua').value = retornoJson.logradouro;
                document.getElementById('bairro').value = retornoJson.bairro;
                document.getElementById('cidade').value = retornoJson.localidade;
                document.getElementById('uf').value = retornoJson.uf;
                console.log(retornoJson.logradouro, "\n", retornoJson.bairro, "\n", retornoJson.localidade, "\n", retornoJson.uf);
            }

          }
          

  
      }

      )
  }
  