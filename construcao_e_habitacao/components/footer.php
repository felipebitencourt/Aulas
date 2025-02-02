<footer class="container-fluid p-0">

    <div class="row text-white home_contactos">

        <div class="col-1 mb-3 mb-lg-3 m-auto barra border-white"></div>

        <h1 class="col-12 pt-4 titulo">Contactos</h1>

        <div class="col-12 texto_contactos font_light mb-4">

            <div class="container-fluid">

                <div class="row d-flex justify-content-center">

                    <div class="col-12 col-lg-3 mb-4">
                        <img class="icone" src="public/imagens/tel.svg" alt="Telefone" width="75">
                        <br><br>
                        <?= $contactos["telefone"]; ?>
                    </div>

                    <div class="col-12 col-lg-3 mb-4">
                        <img class="icone" src="public/imagens/loc.svg" alt="Morada" width="75">
                        <br><br>
                        <?= $contactos["morada"]; ?>
                    </div>
                
                    <div class="col-12 col-lg-3">
                        <img class="icone" src="public/imagens/mail.svg" alt="Email" width="75">
                        <br><br>
                        <?= $contactos["email"]; ?>
                    </div>

                </div>

            </div>
        
        </div>

    </div>

    <div class="row">

        <div class="col-12 p-0">

            <iframe class="w-100 mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33994.878183213375!2d-8.629454039693924!3d41.13995894676662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464faa48c1ad3%3A0xa7ef83b483d74d7!2sCooperativa%20De%20Constru%C3%A7%C3%A3o%20E%20Habita%C3%A7%C3%A3o%20Santo%20Ant%C3%B3nio%20Das%20Antas%20Crl!5e0!3m2!1spt-BR!2spt!4v1731259861655!5m2!1spt-BR!2spt" height="573" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </div>

    <div class="row text-white home_siga">

        <div class="col-12 font_light mb-3">

            <img class="mb-4 margin_face icone" src="public/imagens/facebook.svg" alt="Facebook" width="100">

            <a href="<?= $contactos["facebook"]; ?>" class="text-decoration-none text-white" target="_blank">
                <p class="mt-1 texto_siga">Siga-nos no Facebook</p>
            </a>

        </div>

        <hr class="barra_siga p-0 m-0">

        <div class="col-12 d-flex justify-content-md-end my-md-3">

            <nav class="navbar d-none d-md-inline-block navbar-expand-lg navbar_footer">

                <div class="container-fluid text-uppercase">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-lg-0">

                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "home") ? "active" : ""; ?> font_light p-0 pb-3" aria-current="page" href="index.php">Home</a></li>
                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "quem_somos") ? "active" : ""; ?> font_light p-0 pb-3" href="quem_somos.php">Quem Somos</a></li>
                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "socios") ? "active" : ""; ?> font_light p-0 pb-3" href="socios.php">Sócios</a></li>
                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "noticias") ? "active" : ""; ?> font_light p-0 pb-3" href="noticias.php">Notícias</a></li>
                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "destaques" || $pagina_atual == "destaque_especifico") ? "active" : ""; ?> font_light p-0 pb-3" href="destaques.php">Destaques</a></li>
                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "empreendimentos") ? "active" : ""; ?> font_light p-0 pb-3" onclick="abrirMenu()" href="#">Empreendimentos</a></li>
                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "centro_ferias") ? "active" : ""; ?> font_light p-0 pb-3" href="centro_ferias.php">Centro de Férias</a></li>
                            <li class="nav-item pe-3"><a class="nav-link <?= ($pagina_atual == "contactos") ? "active" : ""; ?> font_light p-0 pb-3" href="contactos.php">Contactos</a></li>

                        </ul>

                    </div>

                </div>

            </nav>

        </div>

        <p class="copyright text-start mb-lg-0 pb-0">
            Copyright &copy; <?= date("Y"); ?> <a href="https://codemaster.pt/" class="text-decoration-none text-white" target="_blank">Grupo MediaMaster</a>. Todos os direitos reservados.
        </p>

    </div>

</footer>

</body>
</html>