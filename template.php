<?php

// Configuração global do site
require('./_config.php');

// Configurações desta página

// Título da Página
$_C ['TITLE'] = 'Faça contato';

// CSS desta página

$_C['CSS'] = 'template.css';

// JavaScript desta página

$_C['JS'] = 'template.js';

// Aqui entra o código PHP desta Página

// Aqui termina o código PHP desta Página

require('./_header.php');

?>

            <aside>

                <h3>Sidebar</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident necessitatibus atque.</p>

            </aside>

            <article>

                <h2>Título da Página</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus numquam debitis quis doloremque
                    illo ab dolorem sed, ducimus reprehenderit? Culpa nulla tempora numquam quo quae explicabo harum
                    possimus cum porro?</p>
                <picture>
                    <img class="flush" src="https://picsum.photos/400/300" alt="Imagem aleatória">
                </picture>
                <p><a href="/">Link de teste</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut ex voluptatibus, quibusdam,
                    consectetur neque enim iure aliquid cum dolore alias error facere deserunt quos itaque dolorem
                    inventore officiis fugit.</p>

            </article>

<?php

require('./_footer.php');

?>

