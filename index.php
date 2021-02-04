<?php

// Configuração global do site
require('./_config.php');

// Configurações desta página

// Título da Página
$_C['TITLE'] = '';

// CSS desta página

$_C['CSS'] = './index.css';

// JavaScript desta página

$_C['JS'] = '';

// Aqui entra o código PHP desta Página

// Variável com o HTML do conteúdo
$contHTML = '';

// Obtém os artigos do banco de dados

$sql = "SELECT `cont_id`, `cont_date` , `cont_image`, `cont_title`, `cont_preview` 
        FROM `content` 
        WHERE `cont_status` = 'ativo' 
        ORDER BY `cont_date` DESC";

$res = $conn->query($sql);

// Obter cada registro que veio do banco de dados

while ($cont = $res->fetch_assoc()) {

    $contHTML .= <<<HTML


<div class="artigo">

    <a href="/ler.php?{$cont['cont_id']}">
         <img src="{$cont['cont_image']}" alt="{$cont['cont_title']}"></a>
    <div>
        <h3><a href="/ler.php?{$cont['cont_id']}">{$cont['cont_title']}</a></h3>
        {$cont['cont_preview']}
    </div>

</div>

HTML;
}

// Aqui termina o código PHP desta Página

require('./_header.php');

?>

<aside>

    <h3>Sidebar</h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident necessitatibus atque.</p>

</aside>

<article>


    <h2>Artigos Recentes</h2>

    <?php echo $contHTML ?>


</article>

<?php

require('./_footer.php');

?>