<?php
if (empty($namawebsite))
{die();}
?>
<?php if (@$deweedysaghakey1=="")
{ ?> <script>
jQuery(document).ready(function() {
window.location.href='<?php echo $lokasiweb; ?>?page=login';
})
</script>
	<?php };
  ?>
<div style='text-align:center;width:100%;display: none;' id="kotakkops"><img src="<?php echo $lokasiweb; ?>box/piquickresponse.png" style='width:94%;'/></div>
<div class="areapercetakan" style="display: none;"></div>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Daftar Produk</h2>
<br/><br/>

<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 100% !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container afterloginboxes" style="<?php echo @(@$runonmobile==="mobile"?"margin-left: -10px !important;":"margin-left: -30px !important;"); ?>min-height:100px;">
<script>
  var loadmynextclue="";


function showtujuanform2() {
if (jQuery("#selectors2").val()=="sama")
{
lakukanlooping=0;
for (lakukanlooping=8;lakukanlooping<=14;lakukanlooping++)
{ 
jQuery("#boxformtujuans2 textarea[forformaddress='form"+lakukanlooping+"']").val(jQuery("#boxofasalnya2 textarea[forformaddress='form"+lakukanlooping+"']").val());
jQuery("#boxformtujuans2 input[forformaddress='form"+lakukanlooping+"']").val(jQuery("#boxofasalnya2 input[forformaddress='form"+lakukanlooping+"']").val());
}
}
else
{
lakukanlooping=0;
for (lakukanlooping=8;lakukanlooping<=14;lakukanlooping++)
{ 
jQuery("#boxformtujuans2 textarea[forformaddress='form"+lakukanlooping+"']").val(jQuery("#boxofdefault2 textarea[forformaddress='form"+lakukanlooping+"']").val());
jQuery("#boxformtujuans2 input[forformaddress='form"+lakukanlooping+"']").val(jQuery("#boxofdefault2 input[forformaddress='form"+lakukanlooping+"']").val());
}
}
sioogoog2();
}

function doloadeachmember(dataid="") {
if (dataid!="")
{jQuery("#forfocusbox").focus();jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
if (jQuery("#thecluefordata").val()!="dataproduk")
{jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loaddeliverdetails&loadfromdata="+dataid);}
else
{ 
 jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=produkparty&loadfromdata="+dataid);
}
}
}
function openbyulrlink(dataid="") {
if (dataid!="")
{jQuery("#forfocusbox").focus();jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
  jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loaddeliverdetails&loadfromdata="+dataid);
}
}

function deleteaccounts(dataid="") {
if (dataid!="")
{

if (jQuery("#thecluefordata").val()!="dataproduk")
{ var konfirmasi=confirm("Apakah Anda Yakin menghapus Belanjaan "+jQuery("#namaakunnya"+dataid).html());
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholybelanjaan&loadfromdata="+dataid);}
}
else
{var konfirmasi=confirm("Apakah Anda Yakin menghapus Produk: "+jQuery("#namaakunnya"+dataid).html());
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholyproduk&loadfromdata="+dataid);};
};
}
}

function doreverify(dataid="") {
if (dataid!="")
{ jQuery.get('<?php echo $lokasiweb; ?>?docommand=resendemailverifi&whatnext='+dataid, function(hasilnya){
if (hasilnya!="")
  {alert(hasilnya);}
})
}
}

function showtheqr(loadmynextcluex="") {
if (loadmynextcluex=="")
  {return false;}
jQuery("#forfocusbox").focus();
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>loadqr/?itcamefrom=yup&databelanjanya="+loadmynextcluex);
}
function kirimsatuanemail(loadbel="") {
if (loadbel=="")
  {return false;}
 jQuery.get('<?php echo $lokasiweb; ?>?docommand=kirimindependen&dests='+loadbel, function(hasilnya){
if (hasilnya!="")
  {alert(hasilnya);}
})
}

function doloadallmember() {

<?php
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna")) 
  { echo 'loadmynextclue=jQuery("#thecluefordata").val();'; }
else
  { echo 'loadmynextclue="databelanja";'; }
 ?>
    jQuery("#forfocusbox").focus();
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loaddata2pro&aksesdari=produkku&nextclue="+loadmynextclue);
}

  jQuery(document).ready(function(){
    <?php if (!empty($_REQUEST["lihat"]))
    {echo "openbyulrlink('".@$_REQUEST["lihat"]."')"; }
    else
    {echo "doloadallmember();";} ?>
    
  })
</script>


<input type="text" id="forfocusbox" style="opacity: 0;position: absolute;z-index: -1;">
<?php
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna")) {
 ?>
 <select class="deweedycustom validate[required]" id="thecluefordata" onchange="doloadallmember();">
  <option value="databelanja">Data Belanja</option><option value="dataproduk">Data Produk</option>
 </select>
<?php } ?>

<div id="loadboxfordatas" style="width:100% !important;min-height: 100px;background: #fff;box-shadow: 0 0 10px 1px rgba(123,123,123,0.1);">
<?php
?>
</div>

</div>



</div>
</div>
</div>
</div>
</section>
