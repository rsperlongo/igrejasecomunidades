
  jQuery(document).ready(
  function()
  {
    /*
     * Chamamos aqui a função que vai controlar os campos.
     * Desta forma, caso você precise repetir o combo dinâmico
     * basta trocar os ID's dos SELECT's
     */
    comboDinamico("estado", "cidade", "bairro");
    // suposição de segundo bloco de selects
    // comboDinamico("pais_cliente", "estado_cliente", "cidade_cliente", "bairro_cliente");
  }
);

  /*
   * função para carregar uma lista dinâmica
   */
  comboDinamico = function(estado, cidade, bairro) {
    /*
     * Variáveis que precisamos pegar
     * Usamos getElementById() pois é assim que conseguiremos
     * passar o elemento por variável para jQuery
     */
   // var pais   = document.getElementById(pais);
    var estado = document.getElementById(estado);
    var cidade = document.getElementById(cidade);
    var bairro = document.getElementById(bairro);
    /*
     * Carregamos a lista automaticamente quando a página carrega
     */
  //  $(pais).load('localizacoes.php?tipo=pais');

    /*
     * Populamos o combo dos estados quando trocamos um valor no pais
     * Os próximos blocos serão similares quanto à validação pelo valor igual à zero
     */

    
        $(estado).load('localizacoes.php?tipo=estado&amp;pais=' + $(this).val());
     
 
    /*
     * Populamos o combo das cidades quando trocamos um valor no estado
     */

    $(estado).change(
    function() {
      if($(this).val() == 0) {
        alert('Você precisa informar o ESTADO!');
        $(this).focus();
      } else {
        $(cidade).load('localizacoes.php?tipo=cidade&amp;estado=' + $(this).val());
      }
    }
  );

    /*
     * Populamos o combo dos bairros quando trocamos um valor na cidade
     */
    $(cidade).change(
    function() {
      if($(this).val() == 0) {
        alert('Você precisa informar a CIDADE!');
        $(this).focus();
      } else {
        $(bairro).load('localizacoes.php?tipo=bairro&amp;cidade=' + escape($(this).val()));
      }
    }
  );

    /*
     * Uma validação simples só para garantir que não escolher um valor nulo
     */
    $(bairro).change(
    function() {
      if($(this).val() == 0) {
        alert('Você precisa informar o BAIRRO!');
        $(this).focus();
      } else {
        return true;
      }
    }
  );
  }


