<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title><?php echo $title_for_layout?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de controle de availiação">
    <meta name="author" content="Gabriel Gnann, Welber Godoy, Sebastião">
    
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	
<?php
	echo $this->Html->css('style/estilo');
	echo $this->Html->script('jquery-2.1.3.min');
?>	
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php
    echo $this->Html->script('jquery.maskedinput');
?>
</head>
<body>

<?php
echo $this->element('menu');
?>
	
<div id="conteudo">
	
	
	<div class="container">
		<?php echo $content_for_layout ?>
	</div>
	
	
</div>

<?php
//echo $this->element('footer');
?>

</body>


<?php
	echo $this->Html->script('menu');
?>	

</html>