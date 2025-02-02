<main class="container-fluid">

    <div class="row mb-5">

        <div class="col-1 mb-md-4 m-auto barra parar"></div>

        <div class="col-12 mb-3">
            
            <h1 class="mt-3 titulo pb-2 pb-md-5">Contactos</h1>

        </div>

        <div class="col-4 text-start ajuste_contactos">

            <div class="contactos_titulo mb-3">
                MORADA <br> <?= $contactos["morada"]; ?>
            </div>

            <div class="contactos_titulo mb-3">
                TELEFONE
                <div class="contactos_texto">(+351) <?= $contactos["telefone"]; ?></div>
            </div>

            <div class="contactos_titulo mb-3">
                FAX
                <div class="contactos_texto">(+351) <?= $contactos["fax"]; ?></div>
            </div>
            
            <div class="contactos_titulo mb-3">
                E-MAIL
                <div class="contactos_texto"> <?= $contactos["email"]; ?></div>
            </div>

        </div>

        <div class="col-7 text-start px-0 ms-4 caixa_form">

            <form action="">

                <div class="contactos_titulo text-uppercase">*Nome</div>
                <input class="ajuste_inputs ps-2 mb-3" type="text" name="nome" id="nome" placeholder="Insira aqui o seu nome" required autofocus>
            
                <div class="contactos_titulo text-uppercase">*e-mail</div>
                <input class="ajuste_inputs ps-2 mb-3" type="text" name="email" id="email" placeholder="Insira aqui o seu e-mail" required>

                <div class="contactos_titulo text-uppercase">*telefone</div>
                <input class="ajuste_inputs ps-2 mb-3" type="text" name="telefone" id="telefone" placeholder="Insira aqui o seu telefone" required>
                
                <div class="contactos_titulo text-uppercase">*assunto</div>
                <input class="ajuste_inputs ps-2 mb-3" type="text" name="assunto" id="assunto" placeholder="Insira aqui o assunto" required>

                
                <div class="contactos_titulo text-uppercase">*Mensagem</div>
                <input class="mensagem mb-3" name="mensagem" id="mensagem" placeholder="Insira aqui a sua mensagem">

                <div class="letras_miudas">* Campos de preenchimento obrigatório</div>

                <img class="float-end recaptcha mb-3" src="<?= $contactos["imagem"]; ?>" alt="reCAPTCHA">

                <div class="checkbox"><input type="checkbox" name="confirmar" id="confirmar"> <label for="confirmar" class="letras_miudas"> Quero receber uma cópia desta mensagem no meu e-mail.</label></div>
                <br>
                <input class="mt-4 ver_mais modelo_1 float-end text-uppercase mb-4" type="button" value="Enviar">

            </form>

        </div>

    </div>

</main>