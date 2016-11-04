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
                       echo "<h3>Olá Igreja</h3>";
                   }
                       else{
                           echo "Bem vindo Visitante!";
                          
                    }
                   
                   ?>  
                   <!-- <header><h3>Bem vindo, Igreja</h3></header> --> 
                    <aside>
                        <ul class="sidebar-navigation">
                            <li><a href="<?php echo base_url('cadastro') ?>"><i class="fa fa-user"></i><span>Dados Cadastrais</span></a></li>
                            <li><a href="<?php echo base_url('agenda') ?>"><i class="fa fa-calendar"></i><span>Agenda</span></a></li>
                            <li class="active"><a href="<?php echo base_url('alterar-plano') ?>"><i class="fa fa-trophy"></i><span>Alterar Planos</span></a></li>
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
                <div class="account-profile">
                    <div class="row"> 
                        <div class="col-md-9 col-sm-9">
                            <form role="form" id="form-account-profile" method="post" >           
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
                                        <td data-package="silver"><button type="button" class="btn btn-default small">Escolher</button></td>
                                       
                                    </tr>
                                    </tbody>
                                </table> 
                            </div><!-- /.submit-pricing -->
                        </section><!-- /#select-package -->
                                   
                                    <section id="social">
                                            <div class="form-group clearfix">
                                                <button type="submit" class="btn pull-right btn-default" id="account-submit">Salvar Alterações</button>
                                            </div><!-- /.form-group -->
                                            <div class="form-group clearfix">
                                                <button type="submit" class="btn pull-right btn-success" id="account-submit">Pagar com PagSeguro</button>
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