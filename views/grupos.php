<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>UPCLASS - Grupo</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="assets/img/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-Tile" content="assets/img/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/material.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
    <link href="<?php echo BASE; ?>assets/css/styles.css" rel="stylesheet">
</head>

<body>
    <!-- drawer+header -->
    <div class="layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="header mdl-layout__header grey-100 -text--grey-600">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Meu painel</span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
                    </div>
                </div>
                <div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="bottom-right-btn">
            <i class="material-icons">more_vert</i>
          </button>
                    <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="bottom-right-btn">
                    <li><a href="<?php echo BASE; ?>perfil" class="mdl-menu__item">Editar Perfil</a></li>
                        <li><a href="<?php echo BASE; ?>login/sair" class="mdl-menu__item">Sair</a></li>
                        <li class="mdl-menu__item">Suporte</li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="drawer mdl-layout__drawer blue-grey-900 -text--blue-grey-50 fixed">
            <header class="drawer-header">
                <img id="logo" src="<?php echo BASE; ?>assets/img/logos.png" alt="UPCLASS" class="logo-sm" href="www.upclass.com">
            </header>
            <nav class="navigation mdl-navigation">
                <div class="card">
                    <img src="<?php echo BASE; ?>assets/img/avatar_m.png" class="img-circle" alt="Mônica">
                    <h1>Mônica</h1>
                    <p class="title">Professora de matemática</p>
                    <p>Colégio Tiradentes</p>
                    <a href="#"><i class="fa fa-facebook link-social"></i></a>
                    <a href="#"><i class="fa fa-twitter link-social"></i></a>
                    <a href="#"><i class="fa fa-linkedin link-social"></i></a>
                </div>
                <div class="mdl-layout-spacer"></div>
                    <div id="mini-atalhos">
                        <div id="btn-acervo"><button id="btn-acervo" class="mini-atalho mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored-white">
  <i class="material-icons">home</i>
</button></div>
                        <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="btn-acervo">
                            Meu Painel</div>
                        <div id="btn-contatos"><button class="mini-atalho mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored-white">
  <i class="material-icons">supervisor_account</i>
</button></div>
                        <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="btn-contatos">
                            Contatos
                        </div>
                
            </nav>
            </div>
            <!-- /drawer+header -->
                        <main class="mdl-layout__content grey-100">
                <div class="mdl-grid">
                    <!-- div corpo -->
                <div id="corpo" class="mdl-grid">
                    <!-- post-bar -->
                    <div id="post-bar" class="mdl-cell mdl-cell--8-col">
                        <div class="card-wide mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Postar</h2>
                            </div>
                            <div class="mdl-card-body">
                                <form action="#">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <input class="mdl-textfield__input" type="text" id="titulo-post">
                                        <label class="mdl-textfield__label" for="titulo-post">Título</label>
                                    </div>
                                </form>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-wide mdl-textfield mdl-js-textfield">
                                        <textarea id="texto-post" name="post" class="mdl-textfield__input" type="text" rows="3"></textarea>
                                        <label class="card-wide mdl-textfield__label" for="texto-post">Texto da publicação</label>
                                </form>
                                </div>
                                <!-- ADICIONAR ICON ATTACH>COLLAPSE>EXIBIR TIPOS DE ANEXOS>COLLAPSE>EXIBIR BOTÃO PRA UPLOAD COPIAR JS DO HTML DE LOGIN-->
                                <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                                    <div class="mdl-tabs__tab-bar">
                                        <a href="#img-panel" class="mdl-tabs__tab">
                                            <i class="material-icons">collections</i>
                                        </a>
                                        <a href="#file-panel" class="mdl-tabs__tab">
                                            <i class="material-icons">insert_drive_file</i>
                                        </a>
                                        <a href="#youtube-panel" class="mdl-tabs__tab">
                                            <i class="material-icons">video_library</i>
                                        </a>
                                    </div>
                                    <div class="mdl-tabs__panel" id="img-panel">
                                        <input type="file" class="filestyle" data-input="false" data-buttonText=" Anexar" data-iconName="glyphicon glyphicon-inbox"
                                            name="file"><br/>
                                    </div>
                                    <div class="mdl-tabs__panel" id="file-panel">
                                        <input type="file" class="filestyle" data-input="false" data-buttonText=" Anexar" data-iconName="glyphicon glyphicon-inbox"
                                            name="file"><br/>
                                    </div>
                                    <div class="mdl-tabs__panel" id="youtube-panel">
                                        <input type="file" class="filestyle" data-input="false" data-buttonText=" Anexar" data-iconName="glyphicon glyphicon-inbox"
                                            name="file"><br/>
                                    </div>
                                </div>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                    <a id="btn-publicar" type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect btn-success" value="Enviar">Publicar</a>
                                </div>
                        </div>
                    <br>
                    <!-- /post-bar -->
                        <div class="card-wide mdl-card just-title mdl-shadow--2dp">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Publicações salvas</h2>
                            </div>
                        </div>
                        <br>
                        <div id="posts-salvos" class="mdl-grid">
                            <div class="mdl-cell mdl-cell--2-col card-event mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__supporting-text mdl-card--expand">
                                    <p>Título do post<br>Autor</p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a onclick="eventDialog();" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-tabs__tab show-modal">Ler</a>
                                    <dialog class="mdl-dialog  text-modal__border" id="event-panel">
                                        <div class="mdl-dialog__content text-modal">
                                            <div class="content white content -text--grey-800">
                                                <div class="crumbs -text--grey-500">
                                                    Google &gt; Material Design Lite &gt; How to install MDL
                                                </div>
                                                <h3>How to install MDL</h3>
                                                <p>
                                                    Cillum dolor esse sit incididunt velit eiusmod magna ad nostrud officia aute dolor dolor. Magna esse ullamco pariatur adipisicing
                                                    consectetur eu commodo officia. Ex cillum consequat mollit minim elit
                                                    est deserunt occaecat nisi amet. Quis aliqua nostrud Lorem occaecat sunt.
                                                    Eiusmod quis amet ullamco aliquip dolore ut incididunt duis adipisicing.
                                                    Elit consequat nisi eiusmod aute ipsum sunt veniam do est. Occaecat mollit
                                                    aliquip ut proident consectetur amet ex dolore consectetur aliqua elit.
                                                </p>
                                                <p>
                                                    Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute
                                                    id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi
                                                    sint consequat aliqua. Ex proident labore et laborum tempor fugiat sint
                                                    magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris
                                                    fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis
                                                    fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui
                                                    do. Labore ullamco et minim proident est laborum mollit ad labore deserunt
                                                    ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit
                                                    eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim
                                                    reprehenderit proident aute ad consectetur eiusmod.
                                                </p>
                                            </div>
                                            <div class="mdl-card__menu">
                                                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect close">
      <i class="material-icons">close</i>
    </button>
                                            </div>
                                        </div>
                                    </dialog>
                                    <div class="mdl-layout-spacer"></div>
                                    <button id="menu-top-right1" class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="menu-top-right1">
                                        <li class="mdl-menu__item">Indicar para amigo</li>
                                        <li class="mdl-menu__item">Republicar no feed</li>
                                        <li class="mdl-menu__item">Remover desta lista</li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                                                        <div class="mdl-cell mdl-cell--2-col card-event mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__supporting-text mdl-card--expand">
                                    <p>Título do post<br>Autor</p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a onclick="eventDialog();" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-tabs__tab show-modal">Ler</a>
                                    <dialog class="mdl-dialog  text-modal__border" id="event-panel">
                                        <div class="mdl-dialog__content text-modal">
                                            <div class="content white content -text--grey-800">
                                                <div class="crumbs -text--grey-500">
                                                    Google &gt; Material Design Lite &gt; How to install MDL
                                                </div>
                                                <h3>How to install MDL</h3>
                                                <p>
                                                    Cillum dolor esse sit incididunt velit eiusmod magna ad nostrud officia aute dolor dolor. Magna esse ullamco pariatur adipisicing
                                                    consectetur eu commodo officia. Ex cillum consequat mollit minim elit
                                                    est deserunt occaecat nisi amet. Quis aliqua nostrud Lorem occaecat sunt.
                                                    Eiusmod quis amet ullamco aliquip dolore ut incididunt duis adipisicing.
                                                    Elit consequat nisi eiusmod aute ipsum sunt veniam do est. Occaecat mollit
                                                    aliquip ut proident consectetur amet ex dolore consectetur aliqua elit.
                                                </p>
                                                <p>
                                                    Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute
                                                    id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi
                                                    sint consequat aliqua. Ex proident labore et laborum tempor fugiat sint
                                                    magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris
                                                    fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis
                                                    fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui
                                                    do. Labore ullamco et minim proident est laborum mollit ad labore deserunt
                                                    ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit
                                                    eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim
                                                    reprehenderit proident aute ad consectetur eiusmod.
                                                </p>
                                            </div>
                                            <div class="mdl-card__menu">
                                                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect close">
      <i class="material-icons">close</i>
    </button>
                                            </div>
                                        </div>
                                    </dialog>
                                    <div class="mdl-layout-spacer"></div>
                                    <button id="menu-top-right1" class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="menu-top-right1">
                                        <li class="mdl-menu__item">Indicar para amigo</li>
                                        <li class="mdl-menu__item">Republicar no feed</li>
                                        <li class="mdl-menu__item">Remover desta lista</li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                                                        <div class="mdl-cell mdl-cell--2-col card-event mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__supporting-text mdl-card--expand">
                                    <p>Título do post<br>Autor</p>
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a onclick="eventDialog();" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-tabs__tab show-modal">Ler</a>
                                    <dialog class="mdl-dialog  text-modal__border" id="event-panel">
                                        <div class="mdl-dialog__content text-modal">
                                            <div class="content white content -text--grey-800">
                                                <div class="crumbs -text--grey-500">
                                                    Google &gt; Material Design Lite &gt; How to install MDL
                                                </div>
                                                <h3>How to install MDL</h3>
                                                <p>
                                                    Cillum dolor esse sit incididunt velit eiusmod magna ad nostrud officia aute dolor dolor. Magna esse ullamco pariatur adipisicing
                                                    consectetur eu commodo officia. Ex cillum consequat mollit minim elit
                                                    est deserunt occaecat nisi amet. Quis aliqua nostrud Lorem occaecat sunt.
                                                    Eiusmod quis amet ullamco aliquip dolore ut incididunt duis adipisicing.
                                                    Elit consequat nisi eiusmod aute ipsum sunt veniam do est. Occaecat mollit
                                                    aliquip ut proident consectetur amet ex dolore consectetur aliqua elit.
                                                </p>
                                                <p>
                                                    Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute
                                                    id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi
                                                    sint consequat aliqua. Ex proident labore et laborum tempor fugiat sint
                                                    magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris
                                                    fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis
                                                    fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui
                                                    do. Labore ullamco et minim proident est laborum mollit ad labore deserunt
                                                    ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit
                                                    eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim
                                                    reprehenderit proident aute ad consectetur eiusmod.
                                                </p>
                                            </div>
                                            <div class="mdl-card__menu">
                                                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect close">
      <i class="material-icons">close</i>
    </button>
                                            </div>
                                        </div>
                                    </dialog>
                                    <div class="mdl-layout-spacer"></div>
                                    <button id="menu-top-right1" class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="menu-top-right1">
                                        <li class="mdl-menu__item">Indicar para amigo</li>
                                        <li class="mdl-menu__item">Republicar no feed</li>
                                        <li class="mdl-menu__item">Remover desta lista</li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <!-- Paineis à direita -->
                    <div id="aside" class="mdl-cell mdl-cell--4-col">
                        <div id="notificacoes-box" class="mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title">
                                <h4 class="mdl-card__title-text">Novidades na sua rede</h4>
                            </div>
                            <div class="mdl-list">
                                <a href="#" class="mdl-navigation__link mdl-list__item">Como lidar com a violência na escola?</a>
                                <a href="#" class="mdl-navigation__link mdl-list__item">Técnicas de memorização para alunos</a>
                                <a href="#" class="mdl-navigation__link mdl-list__item">Trigonometria divertida</a>
                            </div>
                        </div><br>

                        <!-- Pedidos de contatos -->
                        <div class="mdl-card mdl-shadow--2dp" id="pedidos-contato">
                            <div class="mdl-card__title">
                                <h4 class="mdl-card__title-text">Solicitações pendentes</h4>
                            </div>
                            <div panel class="mdl-list">
                            </div>
                        </div><br>
                        <!-- !Pedidos de contatos -->
                        <!-- Sugestões de contatos -->
                        <div class="mdl-card mdl-shadow--2dp" id="sugestoes-contatos">
                            <div class="mdl-card__title">
                                <h4 class="mdl-card__title-text">Sugestões de contatos</h4>
                            </div>
                            <div class="mdl-list">
                                <span class="mdl-chip mdl-chip--contact mdl-chip--deletable">
 <img class="mdl-chip__contact" src="<?php echo BASE; ?>assets/img/user.jpg"></img>
 <span class="mdl-chip__text">Adrienne</span>
                                <a href="#" class="mdl-chip__action"><i class="material-icons">add</i></a>
                                
                            </div>
                        </div>
                        <!-- !Sugestões de contatos -->
                    </div>
                    <!-- !Paineis à direita -->
                                    </div>
        </div>
        </main>
    </div>

      <script src="<?php echo BASE; ?>assets/js/script.js"></script>
    <script src="<?php echo BASE; ?>assets/js/material.js"></script>
    <script src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo BASE; ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo BASE; ?>assets/js/bootstrap-filestyle.min.js"></script>
</body>

</html>