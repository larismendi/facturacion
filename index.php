<?php
$dato = array(
		'nombre'=>'Soluciones SwsNet C.A.',
		'rif'=>'J-31464226-0',
		'telefono'=>'(212)952.8282',
		'text'=>'Calle Chacaito, Edif. DOS, Piso 4, Ofic. 4-D, Urb. Bello Monte, Distrito Capital'
		);
/*$dato = array(
		'nombre'=>'Ecodrill C.A.',
		'rif'=>'J-29891369-0',
		'telefono'=>'(212)517.5393',
		'text'=>'Av. González Rincones, Quinta 1909, Ofic. PA02, Zona Industrial La Trinidad, Caracas'
		);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head profile="http://gmpg.org/xfn/11"> 
<title>Facturación</title> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<link rel="stylesheet" href="demo.css" type="text/css" media="all" />
<script src="js/jquery-1.4.3.min.js"></script>
<script src="js/tinybox.js"></script>
<script src="js/mojo.js"></script>
</head> 
<body>
<form id="facturar" class="form">
	<p class="name">
		<input type="text" name="lugar" id="lugar" value="Caracas" />
		<label for="lugar">Lugar</label>
	</p>
	<p class="email">
		<select type="text" name="dia" id="dia">
        	<?php for($i=1;$i<=31;$i++):?>
            <option value="<?=($i<10)?'0'.$i:$i?>"><?=($i<10)?'0'.$i:$i?></option>
            <?php endfor;?>
        </select>
        <select type="text" name="mes" id="mes">
        	<?php for($i=1;$i<=12;$i++):?>
            <option value="<?=($i<10)?'0'.$i:$i?>"><?=($i<10)?'0'.$i:$i?></option>
            <?php endfor;?>
        </select>
        <select type="text" class="anno" name="anno" id="anno">
        	<?php for($i=date('Y');$i>=2005;$i--):?>
            <option value="<?=$i?>"><?=$i?></option>
            <?php endfor;?>
        </select>
		<label for="fecha">Fecha</label>
	</p>
	<p class="nombre">
		<input type="text" name="nombre" id="nombre" value="<?=$dato['nombre']?>" />
		<label for="nombre">Nombre o Razón Social</label>
	</p>
    <p class="rif">
		<input type="text" name="rif" id="rif" value="<?=$dato['rif']?>" />
		<label for="rif">Rif</label>
	</p>
    <p class="telefono">
		<input type="text" name="telefono" id="telefono" value="<?=$dato['telefono']?>" />
		<label for="telefono">Teléfono</label>
	</p>
	<p class="text">
		<textarea name="text" id="text"><?=$dato['text']?></textarea>
	</p>    
    <p class="block">
        <ul class="col">
        	<li>N°</li>
            <li class="editable count1 count"></li>
            <li class="editable count2 count"></li>
            <li class="editable count3 count"></li>
            <li class="editable count4 count"></li>
            <li class="editable count5 count"></li>
            <li class="editable count6 count"></li>
            <li class="editable count7 count"></li>
            <li class="count"></li>
            <li class="count"></li>
        </ul>
        <ul class="col">
        	<li>Descripción</li>
            <li class="editable descr1 descr"></li>
            <li class="editable descr2 descr"></li>
            <li class="editable descr3 descr"></li>
            <li class="editable descr4 descr"></li>
            <li class="editable descr5 descr"></li>
            <li class="editable descr6 descr"></li>
            <li class="editable descr7 descr"></li>
            <li class="descr"></li>
            <li class="descr" style="text-align:right">IVA 12%   Sobre: </li>
        </ul>
        <ul class="col">
        	<li>Valor</li>
            <li class="editable unid1"></li>
            <li class="editable unid2"></li>
            <li class="editable unid3"></li>
            <li class="editable unid4"></li>
            <li class="editable unid5"></li>
            <li class="editable unid6"></li>
            <li class="editable unid7"></li>
            <li>Sub-Total:</li>
            <li class="subtot"></li>
        </ul>
        <ul class="col">
        	<li>Total</li>
            <li class="editable tot1 tot"></li>
            <li class="editable tot2 tot"></li>
            <li class="editable tot3 tot"></li>
            <li class="editable tot4 tot"></li>
            <li class="editable tot5 tot"></li>
            <li class="editable tot6 tot"></li>
            <li class="editable tot7 tot"></li>
            <li class="subtotT tot"></li>
            <li class="iva tot"></li>
            <li class="result tot"></li>
        </ul>
        <div style="clear: both;"></div>
    </p>    
	<p class="submit">
		<input type="submit" value="Facturar!!!" />
	</p>
    Alto 15 y Izq 17
</form>
</body>
</html>