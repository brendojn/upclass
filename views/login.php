<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>UpClass - Portal do Professor</title>
<link rel="stylesheet" href="assets/layout/css/bootstrap.min.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/layout/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="assets/layout/css/animate.min.css" type="text/css">
<link rel="stylesheet" href="assets/layout/css/creative.css" type="text/css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>

<body id="page-top">
<?php if(!empty($erro)): ?>
<script type="text/javascript">alert('<?php echo $erro; ?>');</script>
<?php endif ?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">UpClass</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a class="page-scroll" href="#about">Sobre</a> </li>
        <li> <a class="page-scroll" href="#services">Recursos</a> </li>
        <li> <a class="page-scroll" href="#contact">Contato</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<header>
  <div class="header-content">
    <div class="header-content-inner">
      <img id="logo" src="assets/img/logo.png" alt="UPCLASS" class="logo-bg" href="www.upclass.com">
      <hr>
      <p>Suas aulas ainda mais incríveis!</p>
      <a href="#" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" data-target="#myModal2">Cadastro</a>
      <a href="#" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" data-target="#myModal">Login</a>
       </div>
  </div>
</header>
<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading">A melhor plataforma para tornar <br>as suas aulas ainda mais incríveis!</h2>
        <hr class="light">
        <p class="text-faded">Conecte-se com outros professores, discuta metodologias <br>e aprenda novas técnicas para aplicar em sala!</p><br>
        <a href="#" class="btn btn-default btn-xl" data-toggle="modal" data-target="#myModal2">Se interessou? Então cadastre-se!</a> </div>
    </div>
  </div>
</section>
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Principais recursos</h2>
        <hr class="primary">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 text-center">
        <div class="service-box"> <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
          <h3>Materiais de primeira!</h3>
          <p class="text-muted">Os melhores conteúdos são sempre colocados em destaque para que você veja primeiro.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
        <div class="service-box"> <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
          <h3>Sempre Atualizado!</h3>
          <p class="text-muted">Estamos sempre adicionando novos recursos e atualizando de acordo com as necessidades dos educadores.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 text-center">
        <div class="service-box"> <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
          <h3>Compartilhe seu conhecimento!</h3>
          <p class="text-muted">Publique dicas e técnicas didáticas e torne-se referência na sua área!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<aside class="bg-dark">
  <div class="container text-center">
    <div class="call-to-action">
      <h2>Com todos esse recursos...</h2>
      <a href="#" class="btn btn-default btn-xl wow tada" data-toggle="modal" data-target="#myModal2">Porque não se cadastrar?</a> </div>
  </div>
</aside>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading">Dúvidas ou Sugestões?</h2>
        <hr class="primary">
        <p>Entre em contato!</p>
      </div>
      <div class="col-lg-4 col-lg-offset-2 text-center"> <i class="fa fa-phone fa-3x wow bounceIn"></i>
        <p>(31)0000-0000</p>
      </div>
      <div class="col-lg-4 text-center"> <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
        <p><a href="mailto:contato@upclass.com">contato@upclass.com</a></p>
      </div>
    </div>
  </div>
</section>

<!--Tela de Login-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="text-center"><img src="assets/img/logos.png" class="logo-60"></h2><br>
      </div>
      <div class="modal-body row">
        <h6 class="text-center">Preencha os campos abaixo para o Login</h6>

        <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="<?php echo BASE.'login'; ?>" method="post">
        <input type="hidden" name="action" value="login" />
          <div class="form-group">
            <input type="email" class="form-control input-lg" placeholder="Email" name="email" id="email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Senha" name="senha" id="senha "required>
          </div>
          <div class="form-group">
              <input class="btn btn-danger btn-lg btn-block" type="submit" value="Logar-se">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Fim da Tela de Login--> 

<!--Tela de Cadastro-->
<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h2 class="text-center"><img src="assets/img/logos.png" class="logo-60"></h2><br>
      </div>
      <div class="modal-body row">
        <h6 class="text-center">Preencha os campos abaixo para se cadastrar</h6>
        <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0"  action="<?php echo BASE.'login'; ?>" method="post">
          <input type="hidden" name="action" value="cadastrar" />
          <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Nome" name="nome" id="nome" required maxlength="80">
          </div>
          <div class="form-group">
            <input type="email" class="form-control input-lg" placeholder="Email" name="email" id="email" required maxlength="60">
          </div>
           <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Disciplina" name="disciplina" id="disciplina" required maxlength="80">
          </div>
           <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Instituição" name="instituicao" id="instituicao" required maxlength="80">
          </div>
             <div class="form-group">
             <textarea class="form-control" rows="5" id="comment" placeholder="Metodologia(opcional)" name="metodologia" id="metodologia"></textarea>
             </div>
          <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Senha" name="senha" id="senha" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Confime a Senha" name="csenha" id="csenha" required>
          </div>
          <div class="form-group">
              <input class="btn btn-danger btn-lg btn-block" type="submit" name="NEW_usuario" value="Cadastrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--Fim da Tela de Cadastro-->
<script>
    var password = document.getElementById("senha")
  , confirm_password = document.getElementById("csenha");
function validatePassword(){
  if(password.value !== confirm_password.value) {
    confirm_password.setCustomValidity("Senha de confirmação não corresponde a senha.");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>


<script src="assets/layout/js/jquery.js"></script> 
<script src="assets/layout/js/bootstrap.min.js"></script> 
<script src="assets/layout/js/jquery.easing.min.js"></script> 
<script src="assets/layout/js/jquery.fittext.js"></script> 
<script src="assets/layout/js/wow.min.js"></script> 
<script src="assets/layout/js/creative.js"></script>
</body>
</html>