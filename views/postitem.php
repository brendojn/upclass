<div class="postitem">
<div class="postitem_info">
		<strong><?php echo $nome ?> diz:</strong> 
	</div>
<?php if($tipo == 'foto'): ?>
	<center><img src="<?php echo BASE; ?>/assets/img/postagens/<?php echo $url; ?>" border="0" width="25%"  /></center>
	<?php endif; ?>
	<?php if($tipo == 'file'): ?>
	<a href="<?php echo BASE; ?>/assets/img/postagens/files/<?php echo $url; ?>" target="__blank" download>Download do Arquivo<br></a>
	<?php endif; ?>
	<div class="postitem_texto">
	
	<?php echo $texto ?>
	</div>
	
	
	<div class="postitem_botoes">
	<button class="btn btn-warning" onclick="displayComentario(this);return false;">Comentar</button>
	<div class= "postitem_comentario">
	<br/><br/>
	<input type="text" class="postitem_txt form-control">
 	<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" data-id="<?php echo $id; ?>" onclick="comentar(this);return false;">
  	Enviar Comentário
	</button>
	</div>
	</div>
	</div>