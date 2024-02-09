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
	<?php }; ?>

  <?php if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna")
{ ?> <script>
jQuery(document).ready(function() {
window.location.href='<?php echo $lokasiweb; ?>?';
})
</script>
  <?php };  ?>
<div style='text-align:center;width:100%;display: none;' id="kotakkops"><img src="<?php echo $lokasiweb; ?>box/piquickresponse.png" style='width:94%;'/></div>
<div class="areapercetakan" style="display: none;"></div>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Pengaturan</h2>
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
}

function doloadeachmember(dataid="") {
if (dataid!="")
{jQuery("#forfocusbox").focus();jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
if (jQuery("#thecluefordata").val()=="dataevent")
{jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=doeonya&loadfromdata="+dataid);}
else if (jQuery("#thecluefordata").val()=="datakomuter")
{jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=doeditkomuterline&loadfromdata="+dataid);}
else if (jQuery("#thecluefordata").val()=="databeritaan")
{jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=doeditberitanya&loadfromdata="+dataid);}
else
{ 
 jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dokuponan&loadfromdata="+dataid);
}
}
}

function deleteaccounts(dataid="") {
if (dataid!="")
{

if (jQuery("#thecluefordata").val()=="dataevent")
{ var konfirmasi=confirm("Apakah Anda Yakin menghapus Event "+jQuery("#namaakunnya"+dataid).html()+" dan seluruh kode vouchernya ?");
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholyevent&loadfromdata="+dataid);}
}
else if (jQuery("#thecluefordata").val()=="datakomuter")
{ var konfirmasi=confirm("Apakah Anda Yakin menghapus Member Komunitas "+jQuery("#namaakunnya"+dataid).html()+" yang juga akan menghapus seluruh datanya di marketplace termasuk data yang dibelanjakan ?");
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholykomuter&loadfromdata="+dataid);}
}
else if (jQuery("#thecluefordata").val()=="databeritaan")
{ var konfirmasi=confirm("Apakah Anda Yakin menghapus Berita "+jQuery("#namaakunnya"+dataid).html()+"  ?");
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholyberita&loadfromdata="+dataid);}
}
else
{var konfirmasi=confirm("Apakah Anda Yakin menghapus Kode Voucher "+jQuery("#namaakunnya"+dataid).html()+" ?");
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholyvoucher&loadfromdata="+dataid);}
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
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>loadqr/?itcamefrom=yup&databelanjanya="+loadmynextcluex);
 
}

function doloadallmember() {


<?php
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna")) 
  { echo 'loadmynextclue=jQuery("#thecluefordata").val();'; }
else
  { echo 'loadmynextclue="dataevent";'; }
 ?>
    jQuery("#forfocusbox").focus();
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loaddata2superdo&nextclue="+loadmynextclue);
}

  jQuery(document).ready(function(){
    doloadallmember();
  })
</script>


<input type="text" id="forfocusbox" style="opacity: 0;position: absolute;z-index: -1;">
<?php
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna")) {
 ?>
 <select class="deweedycustom validate[required]" id="thecluefordata" onchange="doloadallmember();">
  <option value="dataevent">Data Event</option><option value="datavoucher">Data Voucher</option><option value="databeritaan">Data Berita</option><option value="datakomuter">Data Komunitas</option>
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
