<?php include 'header.php'?>

    <div class="container">
        <div class="geo-location-wrapper">
            <span class="btn geo-location"><i class="fa fa-map-marker"></i><span class="text">Ache sua Localização</span></span>
        </div>
    </div>

    <!-- Map -->
    <div id="map"></div>
    <!-- end Map -->

    <!-- Search Box -->
    <div class="search-box-wrapper">
        <div class="search-box-inner">
            <div class="container">
                <div class="search-box map">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#search-form-sale" data-toggle="tab"><i class="fa fa-university" aria-hidden="true"></i> IGREJAS</a></li>
                        <li><a href="#search-form-rent" data-toggle="tab"><i class="fa fa-black-tie" aria-hidden="true"></i> PASTORES</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="search-form-sale">
                            <form role="form" id="busca" class="form-map form-search clearfix" enctype="multpart/form_data">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <div id="the-basics">
                                                <label for="denominacao"></label>
                                                <input type="text" class="typeahead" name="denominacao_ID" id="denominacao_ID" placeholder="Denominação">
                                            </div>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" id="cidades" name="cidades">
                                               
                                                <option value="" selected="selected">Escolha seu Estado</option>
                                                    
                                                <option value="1" <?php echo set_select('cidades','AC')?> >AC</option>
                                                <option value="2" <?php echo set_select('cidades','AL')?> >AL</option>
                                                
                                            </select>
                                            
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select id="cidades" name="cidades">
                                                <option value="" selected="selected" onchange="cidades">Escolha um Estado Primeiro...</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="Bairro ou CEP">
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="Nome ou Cod.Ref">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Buscar Igrejas</button>
                                        </div><!-- /.form-group -->
                                    </div>
                                </div>
                            </form><!-- /#form-map -->
                        </div><!-- /#search-form-rent -->
                        <div class="tab-pane fade" id="search-form-rent">
                            <form role="form" id="form-map-rent" class="form-map form-search clearfix">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select name="form-rent-city">
                                                <option value="">Denominação</option>
                                                <option value="1">Assembléia de Deus</option>
                                                <option value="2">Assembléia de Deus Madureira</option>
                                                <option value="3">Batista</option>
                                                <option value="4">Deus é Amor</option>
                                                <option value="5">Presbiteriana</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select name="form-rent-district">
                                                <option value="">Estado</option>
                                                <option value="1">Acre</option>
                                                <option value="2">Amazonas</option>
                                                <option value="3">Alagoas</option>
                                                <option value="4">Bahia</option>
                                                <option value="5">Ceará</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select name="form-rent-property-type">
                                                <option value="">Cidade</option>
                                                <option value="1">Adamantina</option>
                                                <option value="2">Atibaia</option>
                                                <option value="3">Aparecida</option>
                                                <option value="4">Andradina</option>
                                                <option value="5">Águas Claras</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="Bairro ou CEP">
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" placeholder="Nome ou Cód.Ref">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Buscar Pastores</button>
                                        </div><!-- /.form-group -->
                                    </div>
                                </div>
                            </form><!-- /#form-map -->
                        </div><!-- /#search-form-sale -->
                    </div><!-- /.tab-content -->
                </div><!-- /.search-box -->
            </div><!-- /.container -->
        </div><!-- /.search-box-inner -->
    </div>
    <!-- end Search Box -->

    <!-- Page Content -->
    <div id="page-content">
        <section id="banner">
            <div class="block has-dark-background background-color-default-darker center text-banner">
                <div class="container">
                    <h1 class="no-bottom-margin no-border">Encontre uma Igreja ou Comunidade Evangélica mais próxima de sua Residência!</h1>
                </div>
            </div>
        </section><!-- /#banner -->
        <section id="our-services" class="block">
            <div class="container">
                <header class="section-title"><h2>Nossos Serviços</h2></header>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-folder"></i></figure>
                            <aside class="description">
                                <header><h3>Cadastre sua Igreja</h3></header>
                                <p>Faça parte do maior da cadastro de Igrejas do Brasil</p>
                                <a href="properties-listing.html" class="link-arrow">Leia Mais</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-users"></i></figure>
                            <aside class="description">
                                <header><h3>Anuncie em nosso site!</h3></header>
                                <p>Anuncie em nosso site e tenha um banner em destaque no site! </p>
                                <a href="agents-listing.html" class="link-arrow">Leia Mais</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-money"></i></figure>
                            <aside class="description">
                                <header><h3>Patrocinadores</h3></header>
                                <p>Seja um patrocinador e apareça em destaque!</p>
                                <a href="#" class="link-arrow">Leia Mais</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /#our-services -->
        <section id="price-drop" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>Eventos</h2>
                    <a href="properties-listing.html" class="link-arrow">Cadastre seu Evento</a>
                </header>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-06.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">Grátis</div>
                                        <h3>Encontro de Casais</h3>
                                        <figure>Av. Nações Unidas, 3333, São Paulo</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Data:</header>
                                            <figure>11/11/2016</figure>
                                        </li>
                                        <li>
                                            <header>Vagas:</header>
                                            <figure>111</figure>
                                        </li>
                                        <li>
                                            <header>Hora:</header>
                                            <figure>20:00</figure>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-04.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">Grátis</div>
                                        <h3>Encontro de Casais</h3>
                                        <figure>Av. Nações Unidas, 3333, São Paulo</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Data:</header>
                                            <figure>11/11/2016</figure>
                                        </li>
                                        <li>
                                            <header>Vagas:</header>
                                            <figure>111</figure>
                                        </li>
                                        <li>
                                            <header>Hora:</header>
                                            <figure>20:00</figure>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-07.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">Grátis</div>
                                        <h3>Encontro de Casais</h3>
                                        <figure>Av. Nações Unidas, 3333, São Paulo</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Data:</header>
                                            <figure>11/11/2016</figure>
                                        </li>
                                        <li>
                                            <header>Vagas:</header>
                                            <figure>111</figure>
                                        </li>
                                        <li>
                                            <header>Hora:</header>
                                            <figure>20:00</figure>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-08.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">Grátis</div>
                                        <h3>Encontro de Casais</h3>
                                        <figure>Av. Nações Unidas, 3333, São Paulo</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Data:</header>
                                            <figure>11/11/2016</figure>
                                        </li>
                                        <li>
                                            <header>Vagas:</header>
                                            <figure>111</figure>
                                        </li>
                                        <li>
                                            <header>Hora:</header>
                                            <figure>20:00</figure>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row-->
            </div><!-- /.container -->
        </section><!-- /#price-drop -->
        <aside id="advertising" class="block">
            <div class="container">
                <a href="submit.html">
                    <div class="banner">
                        <div class="wrapper">
                            <span class="title">Quer ter sua igreja cadastrada aqui?</span>
                            <span class="submit">Cadastre-se Agora! <i class="fa fa-plus-square"></i></span>
                        </div>
                    </div><!-- /.banner-->
                </a>
            </div>
        </aside><!-- /#adveritsing-->
        <section id="new-properties" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>Anúncios</h2>
                    <a href="properties-listing.html" class="link-arrow"> Quero Anunciar!</a>
                </header>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-09.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 11,000</div>
                                        <h3>3398 Lodgeville Road</h3>
                                        <figure>Golden Valley, MN 55427</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>2</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>2</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>0</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-03.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 38,000</div>
                                        <h3>2186 Rinehart Road</h3>
                                        <figure>Doral, FL 33178 </figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-06.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 325,000</div>
                                        <h3>3705 Brighton Circle Road</h3>
                                        <figure>Glenwood, MN 56334</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-01.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 16,000</div>
                                        <h3>362 Lynn Ogden Lane</h3>
                                        <figure>Galveston, TX 77550</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row-->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-02.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 18,000</div>
                                        <h3>2506 B Street</h3>
                                        <figure>New Brighton, MN 55112</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>280m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>2</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-12.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 136,000</div>
                                        <h3>3990 Late Avenue</h3>
                                        <figure>Kingfisher, OK 73750</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>30m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>0</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-05.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 12,680</div>
                                        <h3>297 Marie Street</h3>
                                        <figure>Towson, MD 21204 </figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="property-detail.html">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-10.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ 12,800</div>
                                        <h3>64 Timberbrook Lane</h3>
                                        <figure>Denver, CO 80202</figure>
                                    </div>
                                    <ul class="additional-info">
                                        <li>
                                            <header>Area:</header>
                                            <figure>240m<sup>2</sup></figure>
                                        </li>
                                        <li>
                                            <header>Beds:</header>
                                            <figure>3</figure>
                                        </li>
                                        <li>
                                            <header>Baths:</header>
                                            <figure>1</figure>
                                        </li>
                                        <li>
                                            <header>Garages:</header>
                                            <figure>1</figure>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div><!-- /.property -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row-->
            </div><!-- /.container-->
        </section><!-- /#new-properties-->
        <section id="testimonials" class="block">
            <div class="container">
                <header class="section-title"><h2>Versículos Bíblicos</h2></header>
                <div class="owl-carousel testimonials-carousel">
                    <blockquote class="testimonial">
                        <figure>
                            <div class="image">
                                <img alt="" src="assets/img/client-01.jpg">
                            </div>
                        </figure>
                        <aside class="cite">
                            <p>Por que Deus amou o mundo de tal maneira que deu seu único filho para que todo aquele que crê, não pereça, mas tenha a vida eterna</p>
                            <footer>João 3:16</footer>
                        </aside>
                    </blockquote>
                    <blockquote class="testimonial">
                        <figure>
                            <div class="image">
                                <img alt="" src="assets/img/client-01.jpg">
                            </div>
                        </figure>
                        <aside class="cite">
                            <p>O Senhor é meu Pastor e nada me faltará</p>
                            <footer>Salmos 23:1</footer>
                        </aside>
                    </blockquote>
                </div><!-- /.testimonials-carousel -->
            </div><!-- /.container -->
        </section><!-- /#testimonials -->
        <section id="partners" class="block">
            <div class="container">
                <header class="section-title"><h2>Nossos Parceiros</h2></header>
                <div class="logos">
                    <div class="logo"><a href=""><img src="assets/img/logo-partner-01.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="assets/img/logo-partner-02.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="assets/img/logo-partner-03.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="assets/img/logo-partner-04.png" alt=""></a></div>
                    <div class="logo"><a href=""><img src="assets/img/logo-partner-05.png" alt=""></a></div>
                </div>
            </div><!-- /.container -->
        </section><!-- /#partners -->
    </div>
    <!-- end Page Content -->
<?php include 'footer.php'?>