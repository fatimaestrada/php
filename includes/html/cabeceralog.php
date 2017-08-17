<?php
	$nivel = $_SESSION['ses_nivel'];
?>

<nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Miller&Co</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
         <?php include $path_home."includes/html/menu_nivel_".$nivel.".php"; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li><a href="<?php echo $path_home.'cerrar_session.php';?>"><?php echo $_SESSION['ses_nombre']; ?> &nbsp;<i class="fa fa-sign-out fa-lg"></i>  </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<script>
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault();
			event.stopPropagation();
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});


</script>
<div class="modal fade" id="modal_error" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title" id="">Error</h4>
	  </div>
	  <div class="modal-body">
		  <span id="modal_error_mensaje" style="font-size:1em"></span>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
	  </div>
	</div>
  </div>
</div>
