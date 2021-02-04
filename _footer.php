</main>

<footer>

    <div class="info">

        <a href="/" title="Ir para a página inicial."><i class="fas fa-fw fa-home"></i></a>
        <div>
            <?php echo $_C['copyright'] ?>
            <small>Todos os direitos reservados</small>
        </div>
        <a href="#top" title="ir para o topo desta página."><i class="fas fa-fw fa-arrow-alt-circle-up"></i></a>

    </div>

    <div class="menu">

        <!-- Menu de redes sociais -->
        <div class="social">
        
        <?php

            // Links das redes sociais
            $socials = array('facebook', 'youtube', 'twitter', 'instagram');
            $socialLinks = '';
            foreach($socials as $link) {
                if (isset($_C[$link])) {
                    $socialName = ucfirst($link);
                    $socialLinks .= "<a href=\"{$_C[$link]}\" target=\"_blank\" title=\"{$_C['SITENAME']} no {$socialName}.\">
                    <i class=\"fab fa-fw fa-{$link}-square\"></i>
                    <span>{$socialName}</span></a>\n";
                }
            }
            echo $socialLinks;
            ?>

        <!--    <a href="https://facebok.com/solight" target="_blank" title="Solight no Facebook."><i
                    class="fab fa-fw fa-facebook-square"></i><span>Facebook</span></a>
            <a href="https://youtube.com/solight" target="_blank" title="Solight no Youtube."><i
                    class="fab fa-fw fa-youtube-square"></i><span>Youtube</span></a>
            <a href="https://twitter.com/solight" target="_blank" title="Solight no Twitter."><i
                    class="fab fa-fw fa-twitter-square"></i><span>Twitter</span></a>
            <a href="https://instagram.com/solight" target="_blank" title="Solight no Instagram."><i
                    class="fab fa-fw fa-instagram-square"></i><span>Instagram</span></a> -->
        </div>

        <!-- Menu de acesso rápido -->
        <div class="tools">
            <a href="./sobre_site.php" title="Sobre este site."><i class="fas fa-fw fa-globe"></i><span>O Site</span></a>
            <a href="./sobre.php" title="Sobre o Empereza."><i class="fas fa-fw fa-building"></i><span>A
                    Solight</span></a>
            <a href="./contatos.php" title="Faça contato com a Empereza."><i class="fas fa-fw fa-mail-bulk"></i><span>Faça
                    Contato</span></a>
            <a href="./privacidade.php" title="Sobre sua privacidade."><i class="fas fa-fw fa-unlock-alt"></i><span>Privacidade</span></a>
        </div>

    </div>

</footer>

</div>

<!-- Popup dos cookies atendendo a LGPD -->

<div id="cookie-wrap">

<div id="cookie-msg">

    <div id="cookie-text">
        Usamos <strong>Cookies</strong> para que você tenha uma melhor experiência de navegação, mas,
        nenhuma informação sigilosa sobre você é armazenada.
    </div>
    <div id="cookie-buttons">
        <span id="countDown"></span>
        &rarr;
        <button id="cookie-acceps">Aceitar</button>
        <button id="cookie-more">Saber mais</button>
    </div>

</div>

</div>

<!-- Carga dos JavaScripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/global.js"></script>
<script src="/js/js.cookie.min.js"></script>
<?php echo $page_js ?>

</body>

</html>