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
                                    
                                <form role="form" id="form-account-profile" method="post" >
                                        <div class="checkbox switch" id="agent-switch" data-agent-state="is-agent">
                                           
                                        </div>
                                        <section id="agency">
                                            <h3>Dados Cadastrais</h3>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <label for="account-agency">Denominação:</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="form-group">
                                                        <select name="account-agency" id="account-agency">
                                                            <option value="">Presbiteriana</option>
                                                            <option value="1">Batista</option>
                                                            
                                                        </select>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                        </section>
                                        <section id="contact">
                                     
                                            <dl class="contact-fields">
                                                <dt><label for="form-account-name">Nome da Igreja:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-name" name="form-account-name" required value="Igreja Presbiteriana Emanuel">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-phone">Endereço:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-phone" name="form-account-phone" value="Rua Padre Antonio, 345">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-email">Bairro:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Piedade">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="estado">Estado:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="CE">
                                                </div><!-- /.form-group --></dd>
                                                  <dt><label for="cidade">Cidade:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Fortaleza">
                                                </div><!-- /.form-group --></dd>
                                                 <dt><label for="form-account-email">Região:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Nordeste">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-email">Telefone:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="tel" class="form-control" id="form-account-email" name="form-account-phone" value="(85) 3254-2688">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-email">Pastor Responsável:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Rev. Hernandes Dias Lopes">
                                                </div><!-- /.form-group --></dd>
                                                 <dt><label for="form-account-email">Email:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="email" class="form-control" id="form-account-email" name="form-account-phone" value="igreja">
                                                </div><!-- /.form-group --></dd>
                                            </dl>
                                        </section>
                                        
                                        <section id="social">
                                        <h3>Redes Sociais e Site</h3>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                    <input type="text" class="form-control" id="account-social-twitter" name="account-social-twitter">
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                    <input type="text" class="form-control" id="account-social-facebook" name="account-social-facebook" >
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                                    <input type="text" class="form-control" id="account-social-pinterest" name="account-social-pinterest">
                                                </div>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                    <input type="text" class="form-control" id="website" name="website" placeholder="http://">
                                                </div>
                                            </div><!-- /.form-group -->
                                        </section>    
                                        <section id="about-me">
                                            <h3>Programação Semanal</h3>
                                            <div class="form-group">
                                                <label for="segunda">Segunda-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group -->
                                        <div class="form-group">
                                                <label for="segunda">Terça-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group --> 
                                            <div class="form-group">
                                                <label for="segunda">Quarta-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="segunda">Quinta-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group --> 
                                            <div class="form-group">
                                                <label for="segunda">Sexta-Feira</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="segunda">Sábado</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="segunda">Domingo</label>
                                                <textarea class="form-control" id="form-contact-agent-message" rows="5" name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                            </div><!-- /.form-group --> 
                                        </section>
                                        <section id="social">
                                            <div class="form-group clearfix">
                                                <button type="submit" class="btn pull-right btn-default" id="account-submit">Salvar Alterações</button>
                                            </div><!-- /.form-group -->
                                        </section>
                                    </form><!-- /#form-contact -->    
                                <?php
                                    
                                  /*  echo validation_errors();
                                    echo form_open(base_url('cadastro/salvar_alteracao_cadastro'), array('id'=>'form_cadastro','role'=>'form')) .  
                                    "<section id='agency'>" .   
                                        "<h3>Dados Cadastrais</h3>" . 
                                        "<div class='row'>" . 
                                            "<div class='col-md-4 col-sm-4'>" . 
                                            "<div id='the-basics'>" . 
                                                    form_hidden('id',$id) .
                                                    form_label('Denominação','denominacao') . 
                                                   
                                            "</div>" .
                                            "<div class='col-md-8 col-sm-8'>" .
                                                "<div class='form-group'>" . 
                                                    form_input(array('class'=>'typeahead','id'=>'denominacao','name'=>'denominacao','value'=>$id[0]->denominacao)) . 
                                                "</div>" .    
                                             "</div>" .
                                            "</div>" .
                                           "</section>" .
                                        "<section id='contact'>" .
                                        "<dl class='contact-fields'>" . 
                                        "<dt>" . form_label('Nome da Igreja','nome') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'nome','name'=>'nome','type'=>'text','value'=>$id[0]->nome)) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "<dt>" . form_label('CEP','cep') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'cep','name'=>'cep','type'=>'text','value'=>$igrejas[0]->cep)) .
                                        
                                            "</div>" .
                                            "</dd>" .   
                                        "<dt>" . form_label('Endereço','rua') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'rua','name'=>'rua','type'=>'text','value'=>$igrejas[0]->rua)) .
                                        
                                            "</div>" .
                                            "</dd>" .  
                                        "<dt>" . form_label('Bairro','bairro') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'bairro','name'=>'bairro','type'=>'text','value'=>$igrejas[0]->bairro)) .
                                        
                                            "</div>" .
                                            "</dd>" .   
                                        "<dt>" . form_label('Cidade','cidade') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'cidade','name'=>'cidade','type'=>'text','value'=>$igrejas[0]->cidade)) .
                                        
                                            "</div>" .
                                            "</dd>" .  
                                        "<dt>" . form_label('Estado','estado') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'estado','name'=>'estado','type'=>'text','value'=>$igrejas[0]->estado)) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "<dt>" . form_label('Telefones','telefones') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'telefones','name'=>'telefones','type'=>'text','value'=>$igrejas[0]->telefones)) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                         "<dt>" . form_label('Pastor Responsável','responsavel') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'responsavel','name'=>'responsavel','type'=>'text','value'=>$igrejas[0]->responsavel)) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "<dt>" . form_label('E-mail','email') . "</dt>" .
                                            "<dd><div class='form-group'>" . 
                                                form_input(array('class'=>'form-control','id'=>'email','name'=>'email','type'=>'email','value'=>$igrejas[0]->email)) .
                                        
                                            "</div>" .
                                            "</dd>" . 
                                        "</dl>" .
                                    "<section id='social'>" .
                                    heading('Redes Sociais', 3) . 
                                        "<div class='form-group'>" .
                                            "<div class='input-group'>" . 
                                                "<span class='input-group-addon'><i class='fa fa-twitter'></i></span>" . 
                                                    form_input(array('class'=>'form-control','id'=>'twitter','name'=>'twitter','type'=>'text','value'=>$igrejas[0]->twitter)) .
                                            "</div>" .
                                        "</div>" . 

                                        "<div class='form-group'>" .
                                            "<div class='input-group'>" . 
                                                "<span class='input-group-addon'><i class='fa fa-facebook'></i></span>" . 
                                                    form_input(array('class'=>'form-control','id'=>'facebook','name'=>'facebook','type'=>'text','value'=>$igrejas[0]->facebook)) .
                                            "</div>" .
                                        "</div>" . 

                                        "<div class='form-group'>" .
                                            "<div class='input-group'>" . 
                                                "<span class='input-group-addon'><i class='fa fa-globe'></i></span>" . 
                                                    form_input(array('class'=>'form-control','id'=>'site','name'=>'site','type'=>'text','value'=>$igrejas[0]->site)) .
                                            "</div>" .
                                        "</div>" . 
                                    "</section>"  . 
                                    "<section id='about-me'>" . 
                                    "<h3>Redes Sociais e Site</h3>" .  
                                       "<div class='form-group'>" . 
                                            form_label('Segunda-Feira','segunda') . 
                                            form_textarea(array('class'=>'form-control','id'=>'segunda','name'=>'segunda','rows'=>'5','value'=>$igrejas[0]->segunda)) . 
                                        "</div>" . 
                                        "<div class='form-group'>" . 
                                            form_label('Terça-Feira','terca') . 
                                            form_textarea(array('class'=>'form-control','id'=>'terca','name'=>'terca','rows'=>'5','value'=>$igrejas[0]->terca)) . 
                                        "</div>" . 
                                        "<div class='form-group'>" . 
                                            form_label('Quarta-Feira','quarta') . 
                                            form_textarea(array('class'=>'form-control','id'=>'quarta','name'=>'quarta','rows'=>'5','value'=>$igrejas[0]->quarta)) . 
                                        "</div>" .   
                                        "<div class='form-group'>" . 
                                            form_label('Quinta-Feira','quinta') . 
                                            form_textarea(array('class'=>'form-control','id'=>'quinta','name'=>'quinta','rows'=>'5','value'=>$igrejas[0]->quinta)) . 
                                        "</div>" .  
                                        "<div class='form-group'>" . 
                                            form_label('Sexta-Feira','sexta') . 
                                            form_textarea(array('class'=>'form-control','id'=>'sexta','name'=>'sexta','rows'=>'5','value'=>$igrejas[0]->sexta)) . 
                                        "</div>" .  
                                        "<div class='form-group'>" . 
                                            form_label('Sábado','sabado') . 
                                            form_textarea(array('class'=>'form-control','id'=>'sabado','name'=>'sabado','rows'=>'5','value'=>$igrejas[0]->sabado)) . 
                                        "</div>" . 
                                        "<div class='form-group'>" . 
                                            form_label('Domingo','domingo') . 
                                            form_textarea(array('class'=>'form-control','id'=>'domingo','name'=>'domingo','rows'=>'5','value'=>$igrejas[0]->domingo)) . 
                                        "</div>" . 
                                        "</section>" . 
                                        "<section id='social'>" .  
                                            "<div class='form-group clearfix'>" .
                                                form_submit('LoginSubmit', 'Salvar Alterações', "class='btn pull-right btn-default'") .
                                                            
                                            "</div>" .   
                                       "</section>" .
                                       form_close();     */         
                                ?>
                                <section id="change-password">
                                        <header><h2>Mude sua Senha</h2></header>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                              <?php
                                                echo form_open(base_url('cadastro/salvar_alteracao'), array('id'=>'form_cadastro')) . 
                                                    "<div class='form-group'>" . 
                                                        form_label('Senha Atual','senha') . 
                                                        form_input(array('class'=>'form-control','id'=>'senha','name'=>'senha','type'=>'password','value'=>$igrejas[0]->senha)) .
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
                    </section><!-- /#profile -->
                </div><!-- /.col-md-9 -->
                <!-- end My Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
<?php include 'footer.php'?>