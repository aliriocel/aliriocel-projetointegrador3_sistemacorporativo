<?php

// Processa título da Página

if ($_C['TITLE'] == '') {
    $page_title = "{$_C['SITENAME']} .:. {$_C['SITESLOGAN']}";
} else {
    $page_title = "{$_C['SITENAME']} .:. {$_C['TITLE']}";
}

// Processa o link CSS da página

if ($_C['CSS'] == '') {
    $page_css = '';
} else {
    $page_css = "<link rel=\"stylesheet\" href=\"./css/{$_C['CSS']}\"/>\n\t";
}

// Processa o javaSrcript da página

if ($_C['JS'] == '') {
    $page_js = '';
} else {
    $page_js = "<script src\"./js/{$_C['JS']}\"></script>\n";
}


?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./logo02.ico" type="image/x-icon">
    <?php echo $page_css ?>
    <title><?php echo $page_title ?></title>
</head>

<body>

    <!-- Âncora para início da página -->
    <a id="top" name="top"></a>

    <!-- Enquadramento da página -->
    <div class="wrap">

        <header>
            <a href="./" title="<?php echo $_C['SITENAME'] ?> - Página inicial"><img src="./img/logo01.png" alt="Solight - Intranet"></a>
            <h1> <?php echo $_C['SITENAME'] ?> <small> <?php echo $_C['SITESLOGAN'] ?></small></h1>
        </header>

        <nav>
            <a href="./" title="Página inicial"><i class="fas fa-fw fa-home"></i><span>Início</span></a>
            <a href="./noticias.php" title="Notícias atualizadas"><i class="fas fa-fw fa-newspaper"></i><span>Notícias</span></a>
            <a href="./contatos.php" title="Faça contato conosco"><i class="fas fa-fw fa-mail-bulk"></i><span>Contatos</span></a>
            <a href="./sobre.php" title="Sobre a Solight"><i class="fas fa-fw fa-info-circle"></i><span>Sobre</span></a>
        </nav>

        <main>