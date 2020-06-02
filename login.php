<?php
    include_once 'cabecalho.html';
?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
        </div>
        </header>
        <!--login-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Para continuar preencha as informações abaixo!</h3>
                    
                </div>
                <form action="usuarioControleLogin.php" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" name="fNome" type="text" placeholder="Nome de usuário *" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" name="fSenha" type="password" placeholder="Senha *" required="required" data-validation-required-message="Por favor sua senha!" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" value="Entrar"/>
                    </div>
                </form>
            </div>
        </section>
        <?php
        include_once 'rodape.html';
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>-->
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
