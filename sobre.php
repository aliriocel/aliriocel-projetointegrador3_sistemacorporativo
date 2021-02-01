<?php

// Configuração global do site
require('./_config.php');

// Configurações desta página

// Título da Página
$_C['TITLE'] = 'Sobre';

// CSS desta página

$_C['CSS'] = 'sobre.css';

// JavaScript desta página

$_C['JS'] = '';

// Aqui entra o código PHP desta Página

// Aqui termina o código PHP desta Página

require('./_header.php');

?>

<aside>

    <h3>Sidebar</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident necessitatibus atque.</p>

</aside>

<article>


    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <h1 class="my-4">Sobre nós
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, 
            explicabo dolores ipsam aliquam inventore corrupti eveniet 
            quisquam quod totam laudantium repudiandae obcaecati ea consectetur 
            debitis velit facere nisi expedita vel?</p>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="my-4">Nosso Time</h2>
            </div>
            
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" 
                src="https://image.freepik.com/free-photo/portrait-smiling-young-man-eyewear_171337-4842.jpg" alt="">
                <h3>Carlos de Oliveira
                    <small>CEO</small>
                </h3>
            </div>

            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" 
                src="https://image.freepik.com/free-photo/cheerful-curly-business-girl-wearing-glasses_176420-206.jpg" alt="">
                <h3>Alessandra Pereira
                    <small>Gerente de Vendas</small>
                </h3>
            </div>

            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" 
                src="https://image.freepik.com/free-photo/confident-young-man_1098-20868.jpg" alt="">
                <h3>Alexandre Marques
                    <small>Engº de Produção</small>
                </h3>
            </div>

            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" 
                src="https://image.freepik.com/free-photo/portrait-cheerful-attractive-young-woman-longsleeve-standing-with-arms-crossed-smiling_295783-39.jpg" alt="">
                <h3>Carla Barbosa
                    <small>Gerente de Marketing</small>
                </h3>
            </div>
        </div>

    </div>
    <!-- /.container -->

</article>

<?php

require('./_footer.php');

?>