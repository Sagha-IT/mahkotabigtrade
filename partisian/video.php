<?php
if (empty($namawebsite))
{die();}
?>
<br/><br/>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Video Terbaru <?php echo $namapt2; ?></h2>
<br/><br/><br/>

<div class="elementor-element elementor-element-5c94bc2 content-align-center icon-position-top icon-vertical-align-center icon-box-vertical-align-center elementor-widget elementor-widget-the7_icon_box_grid_widget" data-id="5c94bc2" data-element_type="widget" data-widget_type="the7_icon_box_grid_widget.default">
<div class="elementor-widget-container">

<style>
.blockvideolist {display: inline-flex;width: 28.5%;min-height: 10px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);}
.blockvideolist * {position: relative;width: 100%;display: block;font-size: 100%;}
.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.3);}
.blockvideolist isi div {font-size: 93%;padding: 6px 7px 6px 9px;width: 96%;}
.blockvideolist h2 {text-align: center;}
.blockvideolist h3 {text-align: center;border-bottom: 1px solid #eaeaea;padding: 6px 7px 11px 7px;width: 96%;margin-bottom: 5px;}
.blockvideolist .readmore, .postfoot {margin: 13px 0 7px 7px;font-size: 69%;} .postfoot {border-top: 1px solid #eaeaea;padding: 8px 1px 4px 7px;text-align: right;} .postfoot span { margin-right: 9px; } .postfoot i {margin-right: 4px;}
		@media (min-width: 901px) and (max-width: 930px) {
			 .blockvideolist {width: 28.3% !important;}
		}
		@media (min-width: 861px) and (max-width: 900px) {
			 .blockvideolist {width: 28% !important;}
		}
		@media (min-width: 841px) and (max-width: 860px) {
			 .blockvideolist {width: 27.5% !important;}
		}
		@media (min-width: 761px) and (max-width: 840px) {
			.blockvideolist {width: 44% !important;}
		}
		@media (min-width: 701px) and (max-width: 760px) {
			.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.5);} .blockvideolist {width: 43% !important;}
		}
		@media (min-width: 661px) and (max-width: 700px) {
			.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.5);} .blockvideolist {width: 43% !important;}
		}
		@media (min-width: 621px) and (max-width: 660px) {
			.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 42.5% !important;}
		}
		@media (min-width: 581px) and (max-width: 620px) {
			.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 42% !important;}
		}
		@media (min-width: 561px) and (max-width: 580px) {
			.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.);} .blockvideolist {width: 41.5% !important;}
		}
		@media (min-width: 451px) and (max-width: 560px) {
			.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 41% !important;}
		}
		@media (min-width: 0px) and (max-width: 450px) {
			.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 93% !important;} 
		}

		.blockvideowidth {display: inline-flex;width: 47%;min-height: 100px; padding: 4px 3px;margin: 12px 10px 20px 9px;vertical-align: top;}
</style>

<script type="text/javascript">
	function cariterbaruvideos() {
		jQuery("#searchingboxesvideo").val("");
		carivideos();
	}
	function carivideos() {
		jQuery("#boxallvids").html("<div id='notefortemp' style='display:block !important;position:relative !important;width:100%;background:url(<?php echo $lokasiweb; ?>/box/loadingbarberblue.gif) center no-repeat;height:44px;'>&nbsp;</div>");
jQuery.post('<?php echo $lokasiweb; ?>?docommand=cariyoutube', jQuery('#mencarivideo').serialize(), function(hasilnya){
jQuery("#boxallvids").html(hasilnya);
return false;
})
return false;
}
jQuery(document).ready(function() {
carivideos();
})
</script>
<form id="mencarivideo" name="mencarivideo" style="width: 98vw !important;" onsubmit="return carivideos(); return false;">
<input type="text" placeholder="Silahkan masukkan Keyword contoh: botim" value="" name="searchingboxesvideo" id="searchingboxesvideo" style="width:63%;margin-right: 7px;">
<input type="submit" class="pigoldbutton" style="border:0;" value="cari"> <input type="button" class="dt-btn dt-btn-m caleveact" onclick="cariterbaruvideos();" style="border:0;" value="terbaru">
</form>

<div id="boxallvids" style="width: 98vw !important;">

</div>

</div>

</div>