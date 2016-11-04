<?php include 'header.php'?>
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contato</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-9 col-sm-9">
                        <section id="form">
                            <header><h3>Fale Conosco</h3></header>
                            <form role="form" id="form-contact" method="post"  class="clearfix">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-name">Seu nome<em>*</em></label>
                                            <input type="text" class="form-control" id="form-contact-name" name="form-contact-name" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-email">Seu Email<em>*</em></label>
                                            <input type="email" class="form-control" id="form-contact-email" name="form-contact-email" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form-contact-message">Sua Mensagem<em>*</em></label>
                                            <textarea class="form-control" id="form-contact-message" rows="8" name="form-contact-message" required></textarea>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="form-group clearfix">
                                    <button type="submit" class="btn pull-right btn-default" id="form-contact-submit">Enviar Mensagem</button>
                                </div><!-- /.form-group -->
                                <div id="form-status"></div>
                            </form><!-- /#form-contact -->
                            <p>Para maiores informações <strong>ligue:(11) 4328-2036</strong></p>
                            <p>De Segunda à Sexta das 08:00 às 18:00 hs.</p>
                        </section>
                    
                </div><!-- /.col-md-9 -->
                <!-- end Contact -->

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
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
   <?php include 'footer.php'?>