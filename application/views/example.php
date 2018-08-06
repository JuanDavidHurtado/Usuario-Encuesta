<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('examples/encuesta_')?>'>Encuesta</a> |
		<a href='<?php echo site_url('examples/usuario_')?>'>Usuario</a> |
		<a href='<?php echo site_url('examples/preguntaUno_')?>'>Pregunta 1</a> |
		<a href='<?php echo site_url('examples/preguntaDos_')?>'>Pregunta 2</a> |
		<a href='<?php echo site_url('examples/preguntaTres_')?>'>Pregunta 3</a> |
		<a href='<?php echo site_url('examples/preguntaCuatro_')?>'>Pregunta 4</a> |
		<a href='<?php echo site_url('examples/preguntaCinco_')?>'>Pregunta 5</a> |
		
		
		
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
