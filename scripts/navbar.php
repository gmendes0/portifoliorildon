<?php
	if($home == 'index.php'){
?>
		<script type="text/javascript" src="<?php echo $jquery; ?>"></script>
		<script type="text/javascript">
			
			$(window).on('scroll', function(){

				if($(window).scrollTop()){

					$('.menu, .top-i').addClass('sticky');


				}else{

					$('.menu, .top-i').removeClass('sticky');

				}

			})

		</script>
<?php
	}
?>

<div class="<?php echo $home == 'index.php' ? 'menu' : 'menu sticky'; ?>">

	<ul>
		
		<li><a href="<?php echo $home; ?>" class="active">Início</a></li>
		<li><a href="<?php echo $home=='index.php' ? 'aluno/gabriel/gabriel.php' : '../../aluno/gabriel/gabriel.php'; ?>">Gabriel</a></li>
		<li><a href="<?php echo $home=='index.php' ? 'aluno/higor/higor.php' : '../../aluno/higor/higor.php'; ?>">Higor</a></li>
		<li><a href="<?php echo $home=='index.php' ? 'aluno/lucas/lucas.php' : '../../aluno/lucas/lucas.php'; ?>">Lucas</a></li>

	</ul>

</div>