<?php include 'header.php'?>

    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Cadastro</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Escolha seu pacote</h1></header>
             <div class="alert alert-info" role="alert"> As informações contidas abaixo são básicas, podendo você completar essas e demais informação assim que seu cadastro for aprovado.</div>
            <div class="row">
                <!-- Submit-->
                <div class="col-md-9 col-sm-9">
                    <section id="submit" class="submit">
                        <section id="select-package">
                            <div class="table-responsive submit-pricing">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Seu Plano:</th>
                                        <th class="title">Free</th>
                                        <th class="title">Completo(Semestral)</th>
                                        <th class="title">Completo(Anual)</th>
                                      
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="prices">
                                        <td></td>
                                        <td>Grátis</td>
                                        <td>R$60</td>
                                        <td>R$100</td>
                                        
                                      
                                    </tr>
                                    <tr>
                                        <td>Endereço Completo</td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                      
                                    </tr>
                                        
                                    <tr>
                                        <td>Logotipo da Igreja</td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                      
                                    </tr>    
                                    <tr>
                                        <td>Imagens e Vídeos</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                      
                                    </tr>
                                    <tr>
                                        <td>Mapa de localização</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                         <td class="available"><i class="fa fa-check"></i></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Redes Sociais</td>
                                        <td class="available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                         <td class="available"><i class="fa fa-check"></i></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Links</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                         <td class="available"><i class="fa fa-check"></i></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Agenda Semanal</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                         <td class="available"><i class="fa fa-check"></i></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Dados do Pastor</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Missão(Histórico)</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Geolocalização</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        
                                    </tr>    
                                    <tr class="buttons">
                                        <td></td>
                                        <td class="package-selected" data-package="free"><button type="button" class="btn btn-default small">Escolher</button></td>
                                        <td data-package="silver"><button type="button" class="btn btn-default small">Escolher</button></td>
                                        <td data-package="gold"><button type="button" class="btn btn-default small">Escolher</button></td>
                                       
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.submit-pricing -->
                        </section><!-- /#select-package -->
                    </section><!-- /#submit -->
                </div><!-- /.col-md-9 -->
                <aside class="col-md-3 col-sm-3">
                    <div class="submit-step">
                        <figure class="step-number">1</figure>
                        <div class="description">
                            <h4>Escolha seu Plano</h4>
                            <p>Escolha um plano que melhor atenda às suas necessidades.<br>
                               Por padrão o plano Completo é selecionado, caso não alterar<br>
                               sua escolha    
                            </p>
                        </div>
                    </div><!-- /.submit-step -->
                </aside><!-- /.col-md-3 -->
            </div><!-- /.row -->
            <?php 
            echo validation_errors();
            echo form_open(base_url('adicionar/cadastrar'), array('id'=>'form_cadastro', 'class'=>'form-submit', 'role'=>'form')) . 
            "<div class='row'>" . 
               "<div class='block'>" . 
                    "<div class='col-md-9 col-sm-9'>" . 
                        "<section id='submit-form'>" . 
                            "<section id='basic-information'>" . 
                                "<header><h2>Informações Básicas</h2></header>" .
                                    "<div class='row'>" . 
                                        "<div class='col-md-12'>" . 
                                            "<div class='form-group'>" . 
                                                "<div id='the-basics'>" . 
                                                    form_label('Denominação','denominacao') . 
                                                    form_input(array('class'=>'typeahead','id'=>'denominacao','name'=>'denominacao','type'=>'text','placeholder'=>'Denominacao','Value'=>set_value('denominacao'))) . 
                                                "</div>" .  
                                                "<div class='form-group'>" . 
                                                    form_label('Nome da Igreja','nome') . 
                                                    form_input(array('class'=>'form-control','id'=>'nome','name'=>'nome','type'=>'text','placeholder'=>'Nome da Igreja','Value'=>set_value('nome'))) . 
                                                 "</div>" . 
                                                 "<div class='form-group'>" . 
                                                    form_label('CEP','cep') . 
                                                    form_input(array('class'=>'form-control','id'=>'cep','name'=>'cep','type'=>'text','placeholder'=>'CEP','Value'=>set_value('cep'))) . 
                                                    "<span>Não achou o CEP?</span>" . anchor("http://www.buscacep.correios.com.br/sistemas/buscacep/","Busca CEP") .  
                                                "</div>" . 
                                                "<div class='form-group'>" . 
                                                    form_label('Endereço','rua') .
                                                    form_input(array('class'=>'form-control','id'=>'rua','name'=>'rua','type'=>'text','placeholder'=>'Endereço','Value'=>set_value('rua'))) . 
                                                "</div>" .  
                                                "<div class='form-group'>" . 
                                                    form_label('Bairro','bairro') .
                                                    form_input(array('class'=>'form-control','id'=>'bairro','name'=>'bairro','type'=>'text','placeholder'=>'Bairro','Value'=>set_value('bairro'))) . 
                                                "</div>" . 
                                                "<div class='form-group'>" . 
                                                    form_label('Cidade','cidade') .
                                                    form_input(array('class'=>'form-control','id'=>'cidade','name'=>'cidade','type'=>'text','placeholder'=>'Cidade','Value'=>set_value('cidade'))) . 
                                                "</div>" . 
                                                "<div class='form-group'>" . 
                                                    form_label('Estado','estado') .
                                                    form_input(array('class'=>'form-control','id'=>'estado','name'=>'estado','type'=>'text','placeholder'=>'Estado','Value'=>set_value('estado'))) . 
                                                "</div>" . 
                                                
                                                "<div class='form-group'>" . 
                                                    form_label('Telefones','telefones') .
                                                    form_input(array('class'=>'form-control','id'=>'telefones','name'=>'telefones','type'=>'text','placeholder'=>'Número','Value'=>set_value('telefones'))) . 
                                                "</div>" . 
                                                "<div class='form-group'>" . 
                                                    form_label('Pastor Responsável','responsavel') .
                                                    form_input(array('class'=>'form-control','id'=>'responsavel','name'=>'responsavel','type'=>'text','placeholder'=>'Pastor Responsável','Value'=>set_value('responsavel'))) . 
                                                "</div>" . 
                                                "<section id='social'>" .
                                                heading('Redes Sociais', 3) . 
                                                "<div class='form-group'>" .
                                                    "<div class='input-group'>" . 
                                                        "<span class='input-group-addon'><i class='fa fa-twitter'></i></span>" . 
                                                            form_input(array('class'=>'form-control','id'=>'twitter','name'=>'twitter','type'=>'text','placeholder'=>'Twitter','Value'=>set_value('twitter'))) .
                                                    "</div>" .
                                                "</div>" . 
                                                
                                                "<div class='form-group'>" .
                                                    "<div class='input-group'>" . 
                                                        "<span class='input-group-addon'><i class='fa fa-facebook'></i></span>" . 
                                                            form_input(array('class'=>'form-control','id'=>'facebook','name'=>'facebook','type'=>'text','placeholder'=>'Facebook','Value'=>set_value('twitter'))) .
                                                    "</div>" .
                                                "</div>" . 
                                                
                                                "<div class='form-group'>" .
                                                    "<div class='input-group'>" . 
                                                        "<span class='input-group-addon'><i class='fa fa-globe'></i></span>" . 
                                                            form_input(array('class'=>'form-control','id'=>'site','name'=>'site','type'=>'text','placeholder'=>'http://','Value'=>set_value('site'))) .
                                                    "</div>" .
                                                "</div>" . 
                                                "<div class='form-group'>" . 
                                                    form_label('E-mail','email') .
                                                    form_input(array('class'=>'form-control','id'=>'email','name'=>'email','type'=>'email','placeholder'=>'E-mail','Value'=>set_value('email'))) . 
                                                "</div>" . 
                                                "<div class='form-group'>" . 
                                                    form_label('Senha','senha') .
                                                    form_input(array('class'=>'form-control','id'=>'senha','name'=>'senha','type'=>'password','placeholder'=>'Senha','Value'=>set_value('senha'))) . 
                                                "</div>" . 
                                            "</div>" . 
                                        "</div>" .
                                    "</section>"  .  
                                    "<div class='col-md-9 col-sm-9'>" . 
                                    "<div class='center'>" . 
                                        form_submit('LoginSubmit', 'Pagar com PagSeguro', "class='btn btn-default large'") .
                                        form_submit('LoginSubmit', 'Cadastrar', "class='btn btn-success large'") . 
                                        form_close();    
                                    "<figure class='note block'>Clicando em Pagar com PagSeguro você irá concordar com nossos" . anchor("termos", "Termos e Condições") . "</figure>" . 
                                    "</div>" .
                                    "</div>" 
            ?>
          
                               <br>
                               <br>    
                                
                                <section id="property-features" class="block">
                                    <section>
                                        <header><h2>Formas de Pagamento</h2></header>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">Depósito Bancário</div>
                                            <div class="panel-body">
                                                <p>Banco Itaú Ag. 0467</p>
                                                <p>C/C 69432-9</p>
                                                <p>Cidade Eventos Viag. Tur. Ltda.</p>
                                              </div>
                                        </div>
                                    </section>
                                </section>
                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">2</figure>
                                <div class="description">
                                    <h4>Preencha o formulário!</h4>
                                    <p>Digite as informações obrigatórias da sua Igreja.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                        
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">3</figure>
                                <div class="description">
                                    <h4>Confira suas informações e Cadastre-se</h4>
                                    <p>Você poderá efetuar o depósito em conta ou pagar com 
                                    PagSeguro </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div>
            </form><!-- /#form-submit -->
            <script>
                <script type="text/javascript">
$(document).ready(function(){
	$("#cep").mask("99.999-999");
});
</script>
            </script>
            <script type="text/javascript">
$(document).ready(function(){
    $('#cpf').mask('000.000.000-00', {reverse: true});
   // $('#cep').mask('00000-000', {reverse: true});
    $('#telefone').mask('(00)0000.00000', {reverse: true});
    $('#celular').mask('(00)0000.00000', {reverse: true});
    $('#data_nascimento').mask('00/00/0000', {reverse: true});
    $('#sexo').mask('A', {reverse: true});
    $("#cep").blur(function(){
         $.getJSON("https://viacep.com.br/ws/"+ $("#cep").val() +"/json", function(dados) {
            if (!("erro" in dados)) {
                $("#rua").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#estado").val(dados.uf);
                $("#numero").focus();
            }
            else {
                alert("CEP não encontrado.");
            }
        });
    }); 
});    
</script>
        </div><!-- /.container -->
    </div>
    
    <!-- end Page Content -->

   <?php include 'footer.php'?>