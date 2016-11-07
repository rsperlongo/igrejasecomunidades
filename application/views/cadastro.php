<?php include 'header.php'?>
    <!-- end Navigation -->
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li class="active">Cadastro </li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                <section id="sidebar">
                   <?php
                   if(NULL != $this->session->userdata('logado')){
                       echo "<h3>Seja Bem vindo(a) Igreja</h3>";
                   }
                       else{
                           echo "Bem vindo Visitante!";
                          
                    }
                   
                   ?> 
                   <!-- <header><h3>Bem vindo, Igreja</h3></header> -->
                    <aside>
                        <ul class="sidebar-navigation">
                            <li class="active"><a href="<?php echo base_url('cadastro') ?>"><i class="fa fa-user"></i><span>Dados Cadastrais</span></a></li>
                            <li><a href="<?php echo base_url('agenda') ?>"><i class="fa fa-calendar"></i><span>Agenda</span></a></li>
                            <li><a href="<?php echo base_url('alterar-plano') ?>"><i class="fa fa-trophy"></i><span>Alterar Planos</span></a></li>
                            <li><a href="<?php echo base_url('alterar-foto') ?>"><i class="fa fa-photo"></i><span>Cadastro de Fotos e Vídeos</span></a></li>
                            <li><a href="<?php echo base_url('cadastro-pastores')?>"><i class="fa fa-black-tie"></i><span>Cadastro de Pastores</span></a></li>
                            <li><a href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i><span>Logout</span></a></li> 
                        </ul>
                    </aside>
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="profile">
                        <header><h1>Dados Cadastrais</h1></header>
                        <div class="account-profile">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/img/agent-01.jpg">
                                </div>
                                
                               <div class="col-md-9 col-sm-9"> 
                                    <p>Imagem PNG ou JPG, JPEG</p>  
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                <span class="fileinput-filename"> </span>
                                        </div>
                                        <span class="input-group-addon btn default btn-file">
                                        <span class="fileinput-new"> Escolher Arquivo </span>
                                        <span class="fileinput-exists"> Alterar </span>
                                            <input type="file" name="..."> </span>
                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                                    </div>
                                </div>
                                    
                            <!--        <form role="form" id="form-account-profile" method="post" action="<?php //base_url('cadastro/salvar_alteracao_cadastro')?>" enctype="multpart/form-data" >
                                        <div class="checkbox switch" id="agent-switch" data-agent-state="is-agent">
                                           
                                        </div>
                                        <section id="agency">
                                            <h3>Dados Cadastrais</h3>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <label for="denominacao">Denominação:</label>
                                                </div>
                                                    <div class="col-md-8 col-sm-8">
                                                        <div id="the-basics">
                                                            <input type="text" class="typeahead" name="denominacao" id="denominacao" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="contact">
                                     
                                            <dl class="contact-fields">
                                                <dt><label for="form-account-name">Nome da Igreja:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-name" name="form-account-name" required value="Igreja Presbiteriana Emanuel">
                                                </div></dd>
                                                <dt><label for="form-account-phone">CEP:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="cep" name="cep" value="Rua Padre Antonio, 345">
                                                </div></dd>
                                                <dt><label for="form-account-email">rua:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="rua" name="rua" value="Piedade">
                                                </div></dd>
                                                <dt><label for="estado">Estado:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="CE">
                                                </div></dd>
                                                  <dt><label for="cidade">Cidade:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Fortaleza">
                                                </div></dd>
                                                 <dt><label for="form-account-email">Região:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Nordeste">
                                                </div></dd>
                                                <dt><label for="form-account-email">Telefone:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="tel" class="form-control" id="form-account-email" name="form-account-phone" value="(85) 3254-2688">
                                                </div></dd>
                                                <dt><label for="form-account-email">Pastor Responsável:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Rev. Hernandes Dias Lopes">
                                                </div></dd>
                                                 <dt><label for="form-account-email">Email:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="email" class="form-control" id="form-account-email" name="form-account-phone" value="igreja">
                                                </div></dd>
                                            </dl>
                                        </section>
                                        
                                        <section id="social">
                                        <h3>Redes Sociais e Site</h3>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                    <input type="text" class="form-control" id="account-social-twitter" name="account-social-twitter">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                    <input type="text" class="form-control" id="account-social-facebook" name="account-social-facebook" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                                    <input type="text" class="form-control" id="account-social-pinterest" name="account-social-pinterest">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                    <input type="text" class="form-control" id="website" name="website" placeholder="http://">
                                                </div>
                                            </div>
                                        </section>    
                                        <section id="about-me">
                                            <h3>Programação Semanal</h3>
                                            <div class="form-group">
                                                <label for="segunda">Segunda-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div>
                                        <div class="form-group">
                                                <label for="segunda">Terça-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="segunda">Quarta-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="segunda">Quinta-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="segunda">Sexta-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="segunda">Sábado</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="segunda">Domingo</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div>
                                        </section>
                                        <section id="social">
                                            <div class="form-group clearfix">
                                                
                                                <button type="submit" class="btn pull-right btn-default" id="account-submit" value="salvar">Salvar Alterações</button>
                                            </div>
                                           
                                        </section>
                                 </form> -->        
                                <?php
                                
                                echo validation_errors();
                                echo form_open(base_url('cadastro/salvar_alteracao_cadastro'), array('id'=>'form_cadastro')) . 
                                    "<div class='checkbox switch' id='agent-switch' data-agent-state='is-agent'>" . 
                                           
                                        "</div>" . 
                                    "<section id='agency'>" .   
                                        "<h3>Dados Cadastrais</h3>" . 
                                        "<div class='row'>" . 
                                            "<div class='col-md-4 col-sm-4'>" . 
                                            "<div id='the-basics'>" . 
                                                    form_label('Denominação','denominacao') . 
                                            "</div>" .
                                            "</div>" .
                                            "<div class='col-md-8 col-sm-8'>" .
                                                "<div class='form-group'>" . 
                                                  //  form_hidden('id', md5($igrejas[0]->id)) .
                                                    form_input(array('class'=>'typeahead','id'=>'denominacao','name'=>'denominacao_ID[0]', 'value'=> set_value('denominacao_ID'))) . 
                                                "</div>" .    
                                             "</div>" .
                                             "</div>" .
                                           "</section>" .
                                        "<section id='contact'>" .
                                        "<dl class='contact-fields'>" . 
                                        "<dt>" . form_label('Nome da Igreja','nome') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'nome','name'=>'nome[0]','type'=>'text','value'=> set_value('nome'))) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "<dt>" . form_label('CEP','cep') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'cep','name'=>'cep[0]','type'=>'text','value'=> set_value('cep'))) .
                                        
                                            "</div>" .
                                            "</dd>" .   
                                        "<dt>" . form_label('Endereço','rua') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'rua','name'=>'rua[0]','type'=>'text','value'=> set_value('rua[0]'))) .
                                        
                                            "</div>" .
                                            "</dd>" .  
                                        "<dt>" . form_label('Bairro','bairro') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'bairro','name'=>'bairro[0]','type'=>'text','value'=> set_value('bairro[0]'))) .
                                        
                                            "</div>" .
                                            "</dd>" .   
                                        "<dt>" . form_label('Cidade','cidade') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'cidade','name'=>'cidade_ID[0]','type'=>'text','value'=> set_value('cidade[0]'))) .
                                        
                                            "</div>" .
                                            "</dd>" .  
                                        "<dt>" . form_label('Estado','estado') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'estado','name'=>'cidade[0]','type'=>'text','value'=> set_value('estado[0]'))) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "<dt>" . form_label('Telefones','telefones') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'telefones','name'=>'telefones[0]','type'=>'text','value'=> set_value('telefones[0]'))) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                         "<dt>" . form_label('Pastor Responsável','responsavel') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'responsavel','name'=>'responsavel[0]','type'=>'text','value'=> set_value('responsavel[0]'))) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "<dt>" . form_label('E-mail','email') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'email','name'=>'email[0]','type'=>'email','value'=> set_value('email[0]'))) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "</dl>" .
                                    "<section id='social'>" .
                                    heading('Redes Sociais', 3) . 
                                        "<div class='form-group'>" .
                                            "<div class='input-group'>" . 
                                                "<span class='input-group-addon'><i class='fa fa-twitter'></i></span>" . 
                                                    form_input(array('class'=>'form-control','id'=>'twitter','name'=>'twitter[0]','type'=>'text','value'=> set_value('twitter[0]'))) .
                                            "</div>" .
                                        "</div>" . 

                                        "<div class='form-group'>" .
                                            "<div class='input-group'>" . 
                                                "<span class='input-group-addon'><i class='fa fa-facebook'></i></span>" . 
                                                    form_input(array('class'=>'form-control','id'=>'facebook','name'=>'facebook[0]','type'=>'text','value'=>set_value('facebook[0]'))) .
                                            "</div>" .
                                        "</div>" . 

                                        "<div class='form-group'>" .
                                            "<div class='input-group'>" . 
                                                "<span class='input-group-addon'><i class='fa fa-globe'></i></span>" . 
                                                    form_input(array('class'=>'form-control','id'=>'site','name'=>'site[0]','type'=>'text','value'=>set_value('site[0]'))) .
                                            "</div>" .
                                        "</div>" . 
                                    "</section>"  . 
                                    "<section id='about-me'>" . 
                                    "<h3>Programação Semanal</h3>" .  
                                       "<div class='form-group'>" . 
                                            form_label('Segunda-Feira','segunda') . 
                                            form_textarea(array('class'=>'form-control','id'=>'segunda','name'=>'segunda[0]','rows'=>'5','value'=>set_value('segunda[0]'))) . 
                                        "</div>" . 
                                        "<div class='form-group'>" . 
                                            form_label('Terça-Feira','terca') . 
                                            form_textarea(array('class'=>'form-control','id'=>'terca','name'=>'terca[0]','rows'=>'5','value'=>set_value('terca[0]'))) . 
                                        "</div>" . 
                                        "<div class='form-group'>" . 
                                            form_label('Quarta-Feira','quarta') . 
                                            form_textarea(array('class'=>'form-control','id'=>'quarta','name'=>'quarta[0]','rows'=>'5','value'=>set_value('quarta[0]'))) . 
                                        "</div>" .   
                                        "<div class='form-group'>" . 
                                            form_label('Quinta-Feira','quinta') . 
                                            form_textarea(array('class'=>'form-control','id'=>'quinta','name'=>'quinta[0]','rows'=>'5','value'=>set_value('quinta[0]'))) . 
                                        "</div>" .  
                                        "<div class='form-group'>" . 
                                            form_label('Sexta-Feira','sexta') . 
                                            form_textarea(array('class'=>'form-control','id'=>'sexta','name'=>'sexta[0]','rows'=>'5','value'=>set_value('sexta[0]'))) . 
                                        "</div>" .  
                                        "<div class='form-group'>" . 
                                            form_label('Sábado','sabado') . 
                                            form_textarea(array('class'=>'form-control','id'=>'sabado','name'=>'sabado[0]','rows'=>'5','value'=>set_value('sabado[0]'))) . 
                                        "</div>" . 
                                        "<div class='form-group'>" . 
                                            form_label('Domingo','domingo') . 
                                            form_textarea(array('class'=>'form-control','id'=>'domingo','name'=>'domingo[0]','rows'=>'5','value'=>set_value('domingo[0]'))) . 
                                        "</div>" . 
                                        "</section>" . 
                                        "<section id='social'>" .  
                                            "<div class='form-group clearfix'>" .
                                                form_submit('LoginSubmit', 'Salvar Alterações', "class='btn pull-right btn-default'") .
                                                            
                                            "</div>" .   
                                       "</section>" .
                                       form_close();            
                                ?>
                                <section id="change-password">
                                        <header><h2>Mude sua Senha</h2></header>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                              <?php
                                                echo form_open(base_url('cadastro/salvar_alteracao'), array('id'=>'form_cadastro')) . 
                                                    "<div class='form-group'>" . 
                                                        form_label('Senha Atual','senha') . 
                                                        form_input(array('class'=>'form-control','id'=>'senha','name'=>'senha','type'=>'password','value'=>set_value('senha'))) .
                                                    "</div>" .   
                                                    "<div class='form-group'>" . 
                                                        form_label('Nova Senha','novasenha') . 
                                                        form_input(array('class'=>'form-control','id'=>'novasenha','name'=>'novasenha','type'=>'password','Value'=>  set_value('novasenha'))) .
                                                    "</div>" . 
                                                    "<div class='form-group'>" . 
                                                        form_label('Confirmar Senha','confirmarsenha') . 
                                                        form_input(array('class'=>'form-control','id'=>'confirmarsenha','name'=>'confirmarsenha','type'=>'password','Value'=>  set_value('confirmarsenha'))) .
                                                    "</div>" .
                                                    "<div class='form-group clearfix'>" .
                                                        form_submit('LoginSubmit', 'Alterar Senha', "class='btn btn-default'") .
                                                    "</div>" .
                                                    "</div>" .    
                                                    form_close();      
                                                        
                                                        
                                              ?>  
                                              <!--  <form role="form" id="form-account-password" method="post" >
                                                    <div class="form-group">
                                                        <label for="form-account-password-current">Senha Atual</label>
                                                        <input type="password" class="form-control" id="form-account-password-current" name="form-account-password-current">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form-account-password-new">Nova Senha</label>
                                                        <input type="password" class="form-control" id="form-account-password-new" name="form-account-password-new">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="form-account-password-confirm-new">Confirme Nova Senha</label>
                                                        <input type="password" class="form-control" id="form-account-password-confirm-new" name="form-account-password-confirm-new">
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <button type="submit" class="btn btn-default" id="form-account-password-submit">Alterar Senha</button>
                                                    </div>
                                                </form>  -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <strong>Dica:</strong>
                                                <p>Evite colocar datas de aniversário, senhas em sequências (ex.12345). Use caracteres especiais juntos letras e números.
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                    
                                    
                                
                                    
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.row -->
                        </div><!-- /.account-profile -->
                    
    <!-- end Page Content -->
<?php include 'footer.php'?>