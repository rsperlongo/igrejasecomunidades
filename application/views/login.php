<?php include 'header.php'?>
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Entrar</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1> Entrar ou Cadastrar</h1></header>
            <div class="row">
                <div class="col-md-6">
                    <h2>Ja possui cadastro?</h2>
                    <?php
                    echo validation_errors();
                    echo form_open(base_url("cadastrar/login"), array('id'=>'form_login')) . 
                         "<div class='form-group'>" . 
                            form_label('email', 'Email') . 
                            form_input(array('type'=>'email', 'id'=>'email', 'name'=>'email', 'class'=>'form-control', 'required')) . 
                         "</div>" .
                         "<div class='form-group'>"  . 
                         form_label('senha', 'Senha') . 
                         form_input(array('type'=>'password','id'=>'senha', 'name'=>'senha', 'class'=>'form-control', 'required')) . 
                         "</div>" .   
                         "<div class='form-group clearfix'>" .
                            form_submit('LoginSubmit', 'Entrar em minha conta', "class='btn pull-right btn-default'") .
                        "</div>" .
                        form_close();    
                    ?>
                    <!--<form role="form" id="form-create-account" method="post">
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" id="form-create-account-email" required>
                        </div>
                        <div class="form-group">
                            <label for="form-create-account-password">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control" id="form-create-account-password" required>
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Entrar em minha conta</button>
                        </div>
                    </form> -->
                    <hr>
                    <div class="center"><a href="#">Esqueci minha senha!</a></div>
                </div>
                
                <div class="col-md-6">
                <h2>Ainda não é cadastrado?</h2>
                    <p>Cadastre-se agora mesmo e tenha sua igreja e/ou comunidade no maior portal do brasil. São milhares cadastros reunidos em um único banco de dados, oferecendo uma descrição completa sobre sua igreja.</p>
                    <a  type="button" onclick="location.href='./cadastrar'" class="btn btn-success">Quero me cadastrar!</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
<?php include 'footer.php'?>