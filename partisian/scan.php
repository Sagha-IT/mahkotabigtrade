<?php
if (empty($namawebsite))
{die();}
?>
<br/><br/>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">QR Scanner untuk COD</h2>
<br/>
<style type="text/css">
	ul li, ol li {list-style: none !important;}
</style>
<input type="text" id="forfocusboxx" style="opacity:0;width:1px;height:1px;">
<script type="text/javascript">
    	
        function lihathasils(todox="") {
        	jQuery("#forfocusboxx").focus();
        	if (todox=="")
        		{jQuery("#boxforesult").html("Pastikan Kamera Scanner diarahkan QR Code dengan benar");
        		  jQuery("#ulanginbuttons").hide();
        		}
        	else if (todox=="ulangins")
        		{ 
        		  jQuery("#iframereloaders").attr("src","<?php echo $lokasiweb; ?>scan/");
        		  jQuery("#iframereloaders").show();
        		  jQuery("#boxforesult").html("Pastikan Kamera Scanner diarahkan QR Code dengan benar");
        	      jQuery("#ulanginbuttons").hide();
        		}
        	else
        		{ jQuery("#iframereloaders").hide();
        		  jQuery("#iframereloaders").attr("src","");
        		  jQuery("#boxforesult").load(todox);
        	      jQuery("#ulanginbuttons").show();
        		}
        }

    </script>
<div class="elementor-widget-container" style="width: 93% !important;margin: 4px auto 18px !important;text-align:center;">
<iframe id="iframereloaders" src="<?php echo $lokasiweb; ?>scan/" style="width: 100%;height: 400px;border:0;" frameborder="0"></iframe>
    
</div>
<div id="boxforesult" style="width: 90% !important;margin: 9px auto !important;text-align:center;">Pastikan Kamera Scanner diarahkan QR Code dengan benar</div>
<div class="calact" onclick="lihathasils('ulangins');" id="ulanginbuttons" style="display:none;padding:3px 5px;">Ulangi</div>