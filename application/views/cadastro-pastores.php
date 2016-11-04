<?php include 'header.php'?>
    <!-- end Navigation -->
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li class="active">Cadastro de Pastores </li>
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
                       echo "<h3>Olá Igreja</h3>";
                   }
                       else{
                           echo "Bem vindo Visitante!";
                          
                    }
                   
                   ?>    
                 <!--   <header><h3>Bem vindo, Igreja</h3></header> -->
                    <aside>
                        <ul class="sidebar-navigation">
                            <li><a href="<?php echo base_url('cadastro') ?>"><i class="fa fa-user"></i><span>Dados Cadastrais</span></a></li>
                            <li><a href="<?php echo base_url('agenda') ?>"><i class="fa fa-calendar"></i><span>Agenda</span></a></li>
                            <li><a href="<?php echo base_url('alterar-plano') ?>"><i class="fa fa-trophy"></i><span>Alterar Planos</span></a></li>
                            <li><a href="<?php echo base_url('alterar-foto') ?>"><i class="fa fa-photo"></i><span>Cadastro de Fotos e Vídeos</span></a></li>
                            <li class="active"><a href="<?php echo base_url('cadastro-pastores')?>"><i class="fa fa-black-tie"></i><span>Cadastro de Pastores</span></a></li>
                            <li><a href="<?php echo base_url('logout')?>"><i class="fa fa-sign-out"></i><span>Logout</span></a></li> 
                        </ul>
                    </aside>
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="profile">
                        <header><h1>Dados Pessoais</h1></header>
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
                                            <label>
                                                Ativo?<input type="checkbox">
                                            </label>
                                        </div>
                                        <section id="agency">
                                            <h3>Dados Cadastrais</h3>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <label for="account-agency">Título:</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="form-group">
                                                        <select name="account-agency" id="account-agency">
                                                            <option value="">Pastor</option>
                                                            <option value="1">Missionário</option>
                                                            
                                                        </select>
                                                    </div><!-- /.form-group -->
                                                </div>
                                            </div>
                                        </section>
                                        <section id="contact">
                                     
                                            <dl class="contact-fields">
                                                <dt><label for="form-account-name">Nome:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-name" name="form-account-name" required value="Marcelo Gomes Longo / Mércia Longo">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-phone">Conhecido(a) como:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-phone" name="form-account-phone" value="Pr. Marcelo">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-email">Atuação desde:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="date" class="form-control" id="form-account-email" name="form-account-phone" value="dd/mm/aaaa">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="natural">Natural de:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="Campos - RJ">
                                                </div><!-- /.form-group --></dd>
                                                  <dt><label for="cidade">Faço Aniversário em:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="text" class="form-control" id="form-account-email" name="form-account-phone" value="">
                                                </div><!-- /.form-group --></dd>
                                                 <dt><label for="form-account-email">Email:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="email" class="form-control" id="form-account-email" name="form-account-phone" value="marcelo.mercia@uol.com.br">
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="denominação">Denominação:</label></dt>
                                                <dd><div class="form-group">
                                                    <select class="form-control">
                                                        <option value="1">Batista</option>
                                                        <option value="2">Presbiteriana</option>
                                                    </select>
                                                    </div></dd>
                                                <dt><label for="estado">Estado:</label></dt>
                                                <dd><div class="form-group">
                                                    <select class="form-control">
                                                        <option value="1">SP</option>
                                                        <option value="2">CE</option>
                                                    </select>
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="estado">Cidade:</label></dt>
                                                <dd><div class="form-group">
                                                    <select class="form-control">
                                                        <option value="1">São Paulo</option>
                                                        <option value="2">Fortaleza</option>
                                                    </select>
                                                </div><!-- /.form-group --></dd>
                                                 <dt><label for="form-account-email">Histórico Ministerial:</label></dt>
                                                <dd><div class="form-group">
                                                    <textarea class="form-control" value=""></textarea>
                                                </div><!-- /.form-group --></dd>
                                                <dt><label for="form-account-email">Time do coração:</label></dt>
                                                <dd><div class="form-group">
                                                    <input type="email" class="form-control" id="form-account-email" name="form-account-phone" value="O melhor do Brasil  P A L M E I R A S!!!!!">
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
                                        <section id="social">
                                            <div class="form-group clearfix">
                                                <button type="submit" class="btn pull-right btn-default" id="account-submit">Salvar Alterações</button>
                                            </div><!-- /.form-group -->
                                        </section>
                                    </form><!-- /#form-contact -->
                                    
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