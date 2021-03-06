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
                   <h1><?php echo $viewData['usuario_nome']; ?></h1>
                    <p class="title">Professor(a) de <?php echo $viewData['usuario_disciplina']; ?></p>
                    <p><?php echo $viewData['usuario_instituicao']; ?></p>
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook link-social"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter link-social"></i></a>
                    <a href="https://br.linkedin.com/"><i class="fa fa-linkedin link-social"></i></a>
                </div>
                <div class="mdl-layout-spacer"></div>
                    <div id="mini-atalhos">
                        <div id="btn-acervo"><button id="btn-acervo" class="mini-atalho mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored-white">
  <i class="material-icons">home</i>
</button></div>
                        <div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--top" for="btn-acervo">
                            Meu Painel</div>
                        <div><a href="<?php echo BASE; ?>" id="btn-contatos"><button class="mini-atalho mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored-white">
  <i class="material-icons">supervisor_account</i>
</a></button></div>
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
                            
                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-wide mdl-textfield mdl-js-textfield">
                                        <textarea id="texto-post" name="post" class="mdl-textfield__input" type="text" rows="3"></textarea>
                                        <label class="card-wide mdl-textfield__label" for="texto-post">Texto da publicação</label>
                                </form>
                               
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
                                <h2 class="mdl-card__title-text">Publicações no Grupo</h2>
                            </div>
                        </div>
                        <br>
                        <div id="posts-salvos" class="">
                            <div class="blog blog--blogpost card-wide mdl-cell mdl-cell--8-col">
                                <main class="mdl-layout__content">
                                    <div class="blog__posts mdl-grid">
                                        <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
                                         <?php foreach($acervo as $postitem)
                                          {
                                            $this->loadView('postitem', $postitem);
                                          }
                                          ?>
                                            <div class="mdl-card__title -text--grey-50">
                                                <h3>On the road again</h3>
                                            </div>
                                            <div class="-text--grey-700 mdl-card__supporting-text meta">
                                                <div class="minilogo"></div>
                                                <div>
                                                    <strong>The Newist</strong>
                                                    <span>2 days ago</span>
                                                </div>
                                                <div class="section-spacer"></div>
                                                <div class="meta__favorites">
                                                    425 <i class="material-icons" role="presentation">favorite</i>
                                                    <span class="visuallyhidden">favorites</span>
                                                </div>
                                            </div>
                                            <div class="-text--grey-700 mdl-card__supporting-text">
                                                <p>
                                                    Cillum ullamco eu cupidatat excepteur Lorem minim sint quis officia irure irure sint fugiat nostrud. Pariatur Lorem irure
                                                    excepteur Lorem non irure ea fugiat adipisicing esse nisi ullamco proident
                                                    sint. Consectetur qui quis cillum occaecat ullamco veniam et Lorem cupidatat
                                                    pariatur. Labore officia ex aliqua et occaecat velit dolor deserunt minim
                                                    velit mollit irure. Cillum cupidatat enim officia non velit officia labore.
                                                    Ut esse nisi voluptate et deserunt enim laborum qui magna sint sunt cillum.
                                                    Id exercitation labore sint ea labore adipisicing deserunt enim commodo
                                                    consectetur reprehenderit enim. Est anim nostrud quis non fugiat duis
                                                    cillum. Aliquip enim officia ad commodo id.
                                                </p>
                                            </div>
                                            <div class="-text--primary-contrast mdl-card__supporting-text comments">
                                                <form>
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                        <textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>
                                                        <label for="comment" class="mdl-textfield__label">Join the discussion</label>
                                                    </div>
                                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
 <i class="material-icons" role="presentation">check</i><span class="visuallyhidden">add comment</span>
 </button>
                                                </form>
                                                </form>
                                                <div class="comment -text--grey-700">
                                                    <header class="comment__header">
                                                        <img src="images/co1.jpg" class="comment__avatar">
                                                        <div class="comment__author">
                                                            <strong>James Splayd</strong>
                                                            <span>2 days ago</span>
                                                        </div>
                                                    </header>
                                                    <div class="comment__text">
                                                        In in culpa nulla elit esse. Ex cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat ad minim officia mollit
                                                        laborum magna dolor tempor cupidatat mollit. Est velit sit ad aliqua
                                                        ullamco laborum excepteur dolore proident incididunt in labore elit.
                                                    </div>
                                                    <nav class="comment__actions">
                                                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
 <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
 </button>
                                                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
 <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
 </button>
                                                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
 <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
 </button>
                                                    </nav>
                                                    <div class="comment__answers">
                                                        <div class="comment">
                                                            <header class="comment__header">
                                                                <img src="images/co2.jpg" class="comment__avatar">
                                                                <div class="comment__author">
                                                                    <strong>John Dufry</strong>
                                                                    <span>2 days ago</span>
                                                                </div>
                                                            </header>
                                                            <div class="comment__text">
                                                                Yep, agree!
                                                            </div>
                                                            <nav class="comment__actions">
                                                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
 <i class="material-icons" role="presentation">thumb_up</i><span class="visuallyhidden">like comment</span>
 </button>
                                                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
 <i class="material-icons" role="presentation">thumb_down</i><span class="visuallyhidden">dislike comment</span>
 </button>
                                                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
 <i class="material-icons" role="presentation">share</i><span class="visuallyhidden">share comment</span>
 </button>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
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