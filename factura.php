<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facturación</title>
<script src="js/jquery-1.4.3.min.js"></script>
<script>
$(document).ready(function() {
	$('ul#tools').prepend('<li class="print"><a href="#print">Print</a></li>');
	$('ul#tools li.print a').click(function() {
	 	$('ul#tools').hide();
		window.print();
		return false;
	});
});
</script>
</head>

<body style="color:#003">
<ul id="tools"></ul>
<div style="margin-left:8px"><br style="height:10px"/>
	<table width="235" border="0" style="margin-left:600px;margin-bottom:4px;margin-top:15px">
    	<tr>
			<td width="103"><?=$_GET['lugar']?></td>
            <td width="122"><?=$_GET['dia']?>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?=$_GET['mes']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$_GET['anno']?></td>
        </tr>
    </table>
    <table style="margin-left:100px; margin-bottom:8px; width:700px">
   	  <tr>
        	<td width="83%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$_GET['nombre']?></td>
            <td width="17%"><?=$_GET['rif']?></td>
        </tr>
    </table>
    <table style="margin-left:60px; margin-bottom:30px; width:750px">
        <tr>
        	<td width="87%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$_GET['text']?></td>
            <td width="13%"><?=$_GET['telefono']?></td>
        </tr>
    </table>
    <table style="margin-left:10px; width:800px">
    	<tr>
        	<td width="9%"><?=$_GET['count1']?>&nbsp;</td>
            <td width="72%">&nbsp;&nbsp;&nbsp;<?=$_GET['descr1']?></td>
            <td width="13%"><?=$_GET['unid1']?></td>
            <td width="6%"><?=$_GET['tot1']?></td>
        </tr>
        <tr>
        	<td width="9%"><?=$_GET['count2']?>&nbsp;</td>
            <td width="72%">&nbsp;&nbsp;&nbsp;<?=$_GET['descr2']?></td>
            <td width="13%"><?=$_GET['unid2']?></td>
            <td width="6%"><?=$_GET['tot2']?></td>
        </tr>
        <tr>
        	<td width="9%"><?=$_GET['count3']?>&nbsp;</td>
            <td width="72%">&nbsp;&nbsp;&nbsp;<?=$_GET['descr3']?></td>
            <td width="13%"><?=$_GET['unid3']?></td>
            <td width="6%"><?=$_GET['tot3']?></td>
        </tr>
        <tr>
        	<td width="9%"><?=$_GET['count4']?>&nbsp;</td>
            <td width="72%">&nbsp;&nbsp;&nbsp;<?=$_GET['descr4']?></td>
            <td width="13%"><?=$_GET['unid4']?></td>
            <td width="6%"><?=$_GET['tot4']?></td>
        </tr>
        <tr>
        	<td width="9%"><?=$_GET['count5']?>&nbsp;</td>
            <td width="72%">&nbsp;&nbsp;&nbsp;<?=$_GET['descr5']?></td>
            <td width="13%"><?=$_GET['unid5']?></td>
            <td width="6%"><?=$_GET['tot5']?></td>
        </tr>
        <tr>
        	<td width="9%"><?=$_GET['count6']?>&nbsp;</td>
            <td width="72%">&nbsp;&nbsp;&nbsp;<?=$_GET['descr6']?></td>
            <td width="13%"><?=$_GET['unid6']?></td>
            <td width="6%"><?=$_GET['tot6']?></td>
        </tr>
    </table>
    <table width="804" style="margin-left:20px;margin-top:8px;width:800px">
        <tr>
        	<td width="8%" height="28">&nbsp;</td>
            <td width="69%">&nbsp;</td>
            <td width="16%">&nbsp;</td>
            <td width="7%"><?=$_GET['subtotT']?></td>
        </tr>
        <tr>
        	<td width="8%" height="31">&nbsp;</td>
            <td width="69%" style="text-align:right">12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;</td>
            <td width="16%"><?=str_replace('.',',',$_GET['subtot'])?></td>
            <td width="7%"><?=str_replace('.',',',$_GET['iva'])?></td>
        </tr>
        <tr>
        	<td width="8%" height="26">&nbsp;</td>
            <td width="69%">&nbsp;</td>
            <td width="16%">&nbsp;</td>
            <td width="7%" valign="top"><?=str_replace('.',',',$_GET['result'])?></td>
        </tr>
    </table>
</div>
</body>
</html>