/*
 * --------------------------------------------------------------------
 * In-place editing system
 * by Siddharth S, www.ssiddharth.com, hello@ssiddharth.com
 * for Net Tuts, www.net.tutsplus.com
 * Version: 1.0, 20.09.2009 	
 * --------------------------------------------------------------------
 */
$(document).ready(function() 
{
	var oldText, newText;
  	$(".editable").hover(function(){
			$(this).addClass("editHover");
		}, 
		function(){
			$(this).removeClass("editHover");
		}
	);
  
  	$(".editable").bind("dblclick", replaceHTML);
	
	$(".count1").bind("change", function(){ $(".tot1").text( $(".count1 input.editBox").val() * $(".unid1").text() ); });
	$(".unid1").bind("change", function(){ $(".tot1").text( $(".count1").text()* $(".unid1 input.editBox").val() ); });

	$(".count2").bind("change", function(){ $(".tot2").text( $(".count2 input.editBox").val() * $(".unid2").text() ); });
	$(".unid2").bind("change", function(){ $(".tot2").text( $(".count2").text()* $(".unid2 input.editBox").val() ); });
	
	$(".count3").bind("change", function(){ $(".tot3").text( $(".count3 input.editBox").val() * $(".unid3").text() ); });
	$(".unid3").bind("change", function(){ $(".tot3").text( $(".count3").text()* $(".unid3 input.editBox").val() ); });
	
	$(".count4").bind("change", function(){ $(".tot4").text( $(".count4 input.editBox").val() * $(".unid4").text() ); });
	$(".unid4").bind("change", function(){ $(".tot4").text( $(".count4").text()* $(".unid4 input.editBox").val() ); });
	
	$(".count5").bind("change", function(){ $(".tot5").text( $(".count5 input.editBox").val() * $(".unid5").text() ); });
	$(".unid5").bind("change", function(){ $(".tot5").text( $(".count5").text()* $(".unid5 input.editBox").val() ); });
	
	$(".count6").bind("change", function(){ $(".tot6").text( $(".count6 input.editBox").val() * $(".unid6").text() ); });
	$(".unid6").bind("change", function(){ $(".tot6").text( $(".count6").text()* $(".unid6 input.editBox").val() ); });
	
	$(".count7").bind("change", function(){ $(".tot7").text( $(".count7 input.editBox").val() * $(".unid7").text() ); });
	$(".unid7").bind("change", function(){ $(".tot7").text( $(".count7").text()* $(".unid7 input.editBox").val() ); });
	
	$(".count1, .count2, .count3, .count4, .count5, .count6, .count7, .unid1, .unid2, .unid3, .unid4, .unid5, .unid6, .unid7").bind("change", function(){
		$(".subtot").text( $(".tot1").text()*1 + $(".tot2").text()*1 + $(".tot3").text()*1 + $(".tot4").text()*1 + $(".tot5").text()*1 + $(".tot6").text()*1 + $(".tot7").text()*1 );
		$(".subtotT").text( $(".tot1").text()*1 + $(".tot2").text()*1 + $(".tot3").text()*1 + $(".tot4").text()*1 + $(".tot5").text()*1 + $(".tot6").text()*1 + $(".tot7").text()*1);
		$(".iva").text( parseFloat( $(".subtotT").text() * 12 / 100 ).toFixed(2) );
		$(".result").text( parseFloat( $(".subtot").text()*1 +  $(".iva").text()*1 ).toFixed(2) );
	});	
		
	$(".btnSave").live("click", function() {
		if ($.browser.mozilla && $.browser.version >= "1.8" ){
			newText = $(this).siblings("form")
						 .children(".editBox")
						 .val().replace(/"/g, "&quot;");
		}else{
			newText = $(this).siblings("input")
						 .val().replace(/"/g, "&quot;");
		}
			
		$(this).parent()
			   .html(newText)
			   .removeClass("noPad")
			   .bind("dblclick", replaceHTML);
	}); 
	
	$(".btnDiscard").live("click", function() {
		$(this).parent()
			   .html(oldText)
			   .removeClass("noPad")
			   .bind("dblclick", replaceHTML);
	}); 
	
	function replaceHTML(){
		oldText = $(this).html()
						 .replace(/"/g, "&quot;");
		$(this).addClass("noPad")
			   .html("")
			   .html("<form><input type=\"text\" class=\"editBox\" value=\"" + oldText + "\" /></form><a href=\"#\" class=\"btnSave\">Guardar</a> <a href=\"#\" class=\"btnDiscard\">Cancelar</a>")
			   .unbind('dblclick', replaceHTML);			
	}
	
	$('#facturar').submit(function(){
		TINY.box.show({iframe:'http://localhost/facturacion/factura.php?lugar='+$('#lugar').val()+'&dia='+$('#dia').val()+'&mes='+$('#mes').val()+'&anno='+$('#anno').val()+'&nombre='+$('#nombre').val()+'&rif='+$('#rif').val()+'&telefono='+$('#telefono').val()+'&text='+$('#text').val()
		+'&count1='+$('.count1').text()+'&count2='+$('.count2').text()+'&count3='+$('.count3').text()+'&count4='+$('.count4').text()+'&count5='+$('.count5').text()+'&count6='+$('.count6').text()+'&count7='+$('.count7').text()
		+'&descr1='+$('.descr1').text()+'&descr2='+$('.descr2').text()+'&descr3='+$('.descr3').text()+'&descr4='+$('.descr4').text()+'&descr5='+$('.descr5').text()+'&descr6='+$('.descr6').text()+'&descr7='+$('.descr7').text()
		+'&unid1='+$('.unid1').text()+'&unid2='+$('.unid2').text()+'&unid3='+$('.unid3').text()+'&unid4='+$('.unid4').text()+'&unid5='+$('.unid5').text()+'&unid6='+$('.unid6').text()+'&unid7='+$('.unid7').text()
		+'&tot1='+$('.tot1').text()+'&tot2='+$('.tot2').text()+'&tot3='+$('.tot3').text()+'&tot4='+$('.tot4').text()+'&tot5='+$('.tot5').text()+'&tot6='+$('.tot6').text()+'&tot7='+$('.tot7').text()
		+'&subtot='+$('.subtot').text()+'&subtotT='+$('.subtotT').text()+'&iva='+$('.iva').text()+'&result='+$('.result').text(),boxid:'frameless',width:750,height:450,fixed:false,maskid:'bluemask',maskopacity:40});
		return false;
	});
		
});