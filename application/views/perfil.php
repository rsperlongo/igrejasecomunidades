<?php include 'header.php'?>
<style>
    .anuncio-home {
        width: 105%;
        height: 300px;
        background-color: darkgrey;
    }
    
</style>
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Perfil da Igreja</a></li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/img/perfil1.jpg" class="img-responsive">
                </div>
                <!-- Agent Detail -->
                <div class="col-md-9 col-sm-9">
                    <section id="agent-detail">
                        <span class="actions pull-right">
                                <!--<a href="#" class="fa fa-print"></a>-->
                                <a href="#" class="bookmark" data-bookmark-state="empty"><span class="title-add">Adicionar aos favoritos</span><span class="title-added">Adicionado</span></a>
                            </span>
                        <header><h1>IGREJA PRESBITERIANA FORTALEZA<br><strong>Cidade:</strong> Fortaleza / CE</h1></header>
                        
                        <section id="agent-info">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <figure class="agency-image"><img alt="logo" src="assets/img/IPB-logo1.png"></figure>
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-6 col-sm-6">
                                    <h3>Informações de Contato</h3>
                                    <address>
                                        <h4>Cód. Referência: 12174</h4>
                                        <strong>Igreja Presbiteriana de Fortaleza</strong><br>
                                        Avenida Rio Branco, 555<br>
                                        Bairro: Jardim Eliane<br>
                                        CEP: 03577-010<br>
                                        Fortaleza-CE<br><br>
                                        
                                        <strong>Telefone:</strong> &nbsp;(11) 2742-4016<br>
                                        <strong>Email:</strong>&nbsp;<a href="mailto:ipb@ipb.org">ipb@ipb.org</a><br><br>
                                        
                                    </address>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">     
                                        <a href="#" type="button" class="btn btn-default"><i class="fa fa-globe" aria-hidden="true"></i> Visite o site</a>
                                    </div>
                                    <div class="form-group">   
                                        <a href="#" type="button" class="btn btn-default" data-toggle="modal" data-target="#meuModal"><i class="fa fa-heart-o" aria-hidden="true"></i>  Oração/Mensagem</a></div>
                                        <!-- Modal -->
                                <div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          </div>

                                      <div class="modal-body">
                                        <form class="form-group" method="post" action="#">  
                                        <label for="Nome"> Nome</label>   
                                        <input type="text" placeholder="Seu nome" required><br><br>
                                        <label for="Email"> Email</label>   
                                        <input type="email" placeholder="Seu email" required><br><br>
                                        <label for="Email"> Telefone</label>   
                                        <input type="tel" placeholder="Seu telefone com DDD"><br><br>
                                        <label for="mensagem">Mensagem</label>    
                                        <textarea class="form-control" placeholder="Mensagem ou Pedido de Oração">
                                        </textarea><br>    

                                        <button type="button" class="btn btn-success btn-lg btn-block"> Enviar Pedido/Mensagem</button><br>  
                                        </form>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                                <div id="social">
                                    <h3>Redes Sociais</h3>
                                        <div class="agent-social">
                                            <a href="#" class="fa fa-twitter btn btn-grey-dark"></a>
                                            <a href="#" class="fa fa-facebook btn btn-grey-dark"></a>
                                            <a href="#" class="fa fa-linkedin btn btn-grey-dark"></a>
                                        </div>
                                    </div><!-- /.block -->
                                </div> 
                            </div><!-- /.row -->
                            <div class="row">

                            </div><!-- /.row -->
                        </section><!-- /#agent-info -->
                        <hr class="thick">
                        <section id="agent-properties">
                            <header><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Programação Semanal</h2></header>
                            
                                 <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Dia</th>
                                          <th>Hora</th>
                                          <th>Programação</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Terça-Feira</td>
                                          <td>20:00</td>
                                          <td>Ensaios MILAD</td>
                                        </tr>

                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Quarta Feira</td>
                                          <td>19:30</td>
                                          <td>Culto de oração</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Quinta Feira</td>
                                          <td>08:00<br>
                                              14:00</td>
                                          <td>Grupo de oração MONOR<br>
                                              Multiministerio - Artesanato - MIDAS</td>
                                        </tr>

                                        <tr>
                                          <th scope="row">4</th>
                                          <td>Sábado</td>
                                          <td>10:00 as 17:00</td>
                                          <td>Ensaios MILAD</td>
                                        </tr>

                                        <tr>
                                          <th scope="row">5</th>
                                          <td>Domingo</td>
                                          <td>09:00<br>
                                              10:30<br>
                                              11:30<br>
                                              18:30
                                          </td>
                                          <td>EBD<br>
                                              Culto doutrinário<br>
                                              Ensaio coro misto - MILAD<br>
                                              Culto evangelistico e Louvor
                                          </td>
                                         </tr>

                                        </tbody>
                                      </table>
                          
                        </section><!-- Programação Semanal -->
                        <hr class="thick">

                        <section id="agents-listing">
                            <header><h2><i class="fa fa-black-tie" aria-hidden="true"></i> Pastores</h2></header>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="agent">
                                        <a href="agent-detail.html" class="agent-image"><img alt="" src="assets/img/FotoPastor.gif"></a>
                                        <div class="wrapper">
                                            <header><a href="agent-detail.html"><h2>PR. MARCELO GOMES LONGO / MÉRCIA LONGO</h2></a></header>
                                            <p>Pastor desde: 23/03/1996</p>
                                            <p>Natural de: Campos - RJ</p>
                                            <p><a class="btn icon-btn btn-info" href="#"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-primary"></span>Mais Informações</a></p>
                                        </div>
                                    </div><!-- /.agent -->
                                </div><!-- /.col-md-12 -->
                                <!-- Pastores -->
                                <div class="col-md-12">
                                    <div class="agent">
                                         <a href="agent-detail.html" class="agent-image"><img alt="" src="assets/img/FotoPastor.gif"></a>
                                        <div class="wrapper">
                                            <header><a href="agent-detail.html"><h2>PR. MARCELO GOMES LONGO / MÉRCIA LONGO</h2></a></header>
                                            <p>Pastor desde: 23/03/1996</p>
                                            <p>Natural de: Campos - RJ</p>
                                            <p><a class="btn icon-btn btn-info" href="#"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-primary"></span>Mais Informações</a></p>
                                        </div>
                                    </div><!-- /.agent -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </section><!-- /#agents-listing -->
                        <hr class="thick">
                        <section id="agents-listing">
                            <header><h2><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Agenda de Eventos</h2></header>
                            <p><a href="#"><i class="fa fa-check" aria-hidden="true"></i> (13/10/2016) Acampamento</a></p>
                            <p>Acampamento de Carnaval</p>
                            
                        </section>  
                         <hr class="thick">
                        <!-- Fotos -->
                        <div class="col-md-12">
                        <section id="property-gallery">
                            <header><h2><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Fotos</h2></header>
                            <div class="owl-carousel property-carousel">
                                <div class="property-slide">
                                    <a href="assets/img/properties/property-detail-01.jpg" class="image-popup">
                                        <div class="overlay"><h3>Front View</h3></div>
                                        <img alt="" src="assets/img/properties/property-detail-01.jpg">
                                    </a>
                                </div><!-- /.property-slide -->
                                <div class="property-slide">
                                    <a href="assets/img/properties/property-detail-02.jpg" class="image-popup">
                                        <div class="overlay"><h3>Bedroom</h3></div>
                                        <img alt="" src="assets/img/properties/property-detail-02.jpg">
                                    </a>
                                </div><!-- /.property-slide -->
                                <div class="property-slide">
                                    <a href="assets/img/properties/property-detail-03.jpg" class="image-popup">
                                        <div class="overlay"><h3>Bathroom</h3></div>
                                        <img alt="" src="assets/img/properties/property-detail-03.jpg">
                                    </a>
                                </div><!-- /.property-slide -->
                            </div><!-- /.property-carousel -->
                        </section>
                            <hr class="thick">
		                </div>
                         
                        <div class="row">
                            <div class="col-md-12">
                                <section id="agent-testimonials">
                                    <h2><i class="fa fa-video-camera" aria-hidden="true"></i> Vídeos</h2>
                                    <div class="col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9">
                                               <iframe class="embed-responsive-item" width="400" height="264" src="https://www.youtube.com/embed/wOzj2OI_KPU" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" width="400" height="264" src="https://www.youtube.com/embed/MEtiU2TjvFw" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    </div>
                                </section> 
                                
                            </div>
                           <!-- Mapa -->  
                            <div class="col-md-12">
                                <hr class="thick">
                                <section id="agent-testimonials">
                                    <h2><i class="fa fa-map-o" aria-hidden="true"></i> Localização</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7315.053720973225!2d-46.503024!3d-23.549514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce674f5ce50133%3A0xdce136a23bbe3712!2sR.+Mirasselva%2C+44+-+Cidade+L%C3%ADder%2C+S%C3%A3o+Paulo+-+SP%2C+03577-010%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1476810784709" 
                                         width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
                                    
                                </section>    
                            </div>
                            <!-- Anúncio -->
                            <div class="col-md-12">
                                <div class="anuncio-home">
                                    <h1>ANÚNCIO</h1>
                                </div>
                            </div>
                            
                        </div><!-- /.row -->
                    </section><!-- /#agent-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Agent Detail -->

                <!-- sidebar -->
                <div class="col-md-3 col-sm-3">
                    <section id="sidebar">
                        <aside id="edit-search">
                            <header><h3>Nova Busca de Igrejas</h3></header>
                            <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
                                <div class="form-group">
                                    <select name="type">
                                        <option value="">Denominação</option>
                                        <option value="1">Assembléia de Deus</option>
                                        <option value="2">Batista</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="country">
                                        <option value="">Estado</option>
                                        <option value="1">Acre</option>
                                        <option value="2">Alagoas</option>
                                        <option value="3">Bahia</option>
                                        <option value="4">Ceará</option>
                                        <option value="5">Espírito Santo</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="city">
                                        <option value="">Cidade</option>
                                        <option value="1">Andradina</option>
                                        <option value="2">Alagoinha</option>
                                        <option value="3">Águas Claras</option>
                                        <option value="4">Belo Horizonte</option>
                                        <option value="5">Blumenau</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Bairro ou CEP">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nome ou Cod.Ref">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Buscar Igrejas</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-map -->
                        </aside><!-- /#edit-search -->
                        <aside id="featured-properties">
                             <aside id="featured-properties">
                            <header><h3>Anúncios em Destaque</h3></header>
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-06.jpg">
                                    </div>
                                </a>
                                
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-09.jpg">
                                    </div>
                                </a>
                               
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-03.jpg">
                                    </div>
                                </a>
                                
                            </div><!-- /.property -->
                        </aside><!-- /#featured-properties -->
                        <aside id="our-guides">
                            <header><h3> Cadastre-se ou Login</h3></header>
                            <a href="cadastrar.php" class="universal-button">
                                <figure class="fa fa-user"></figure>
                                <span> Cadastre-se</span>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                            <a href="login.php" class="universal-button">
                                <figure class="fa fa-sign-in"></figure>
                                <span> Efetuar Login</span>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                        </aside><!-- /#our-guide -->
                    </div><!-- /.col-md-3 -->
                </section><!-- /#sidebar -->        
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
  <?php include 'footer.php'?>