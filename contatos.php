<?php

// Configuração global do site
require('./_config.php');

// Configurações desta página

// Título da Página
$_C['TITLE'] = 'Faça contato';

// CSS desta página

$_C['CSS'] = 'contatos.css';

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


    <form name="form">

        <h1>Entre em contato</h1>

        <input type="text" id="nomeid" placeholder="Seu Nome" required="required" name="nome" />
        <label for="nome">Nome</label>

        <input type="tel" id="foneid" placeholder="(xx)xxxx-xxxx" name="fone" />
        <label for="fone">Telefone</label>

        <input type="email" id="emailid" placeholder="Seu E-mail" name="email" />
        <label for="email">Email</label>

        <textarea placeholder="Deixe sua opnião"></textarea>

        <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" />
    </form>

</article>


<?php

require('./_footer.php');

?>