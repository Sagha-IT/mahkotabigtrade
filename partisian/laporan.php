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
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Laporan</h2>
<br/><br/>

<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 100% !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container afterloginboxes" style="<?php echo @(@$runonmobile==="mobile"?"margin-left: -10px !important;":"margin-left: -30px !important;"); ?>min-height:100px;">
<script>
  var globaldatas1 = "";
  var globaldatas2 = "";
  var globaldatas3 = "";
function doloadeachmember(dataid="") {
if (dataid!="")
{jQuery("#forfocusbox").focus();jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");

jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loaddeliverdetails&loadfromdata="+dataid+"&loadid="+globaldatas1+"&loadfor="+globaldatas2+"&selectedmonth="+globaldatas3);

}
}

function deleteaccounts(dataid="") {
if (dataid!="")
{ var konfirmasi=confirm("Apakah Anda Yakin menghapus Belanjaan "+jQuery("#namaakunnya"+dataid).html());
if (konfirmasi)
  {jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=dosomethingunholybelanjaan&loadfromdata="+dataid);}
};
}

function doreverify(dataid="") {
if (dataid!="")
{ jQuery.get('<?php echo $lokasiweb; ?>?docommand=resendemailverifi&whatnext='+dataid, function(hasilnya){
if (hasilnya!="")
  {alert(hasilnya);}
})
}
}

  function milihdong(data1="",databulans="") {
    jQuery("#forfocusbox").focus();
    if (data1=="")
    {var databulans=jQuery("#pilihanlaporan2").val()+"-"+jQuery("#pilihanlaporan").val();}
    jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
    jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loadmemberdataallbelanjaaan&selectedmonth="+databulans+"&loadid="+data1);
  }
function muatdescnya(data1="",data2="",data3="") {
  if ((data1=="")||(data2==""))
    {return false;}
    var databulans=jQuery("#pilihanlaporan2").val()+"-"+jQuery("#pilihanlaporan").val();
    if (data3!="")
      {databulans=data3;}
 globaldatas1 = data1;
 globaldatas2 = data2;
 globaldatas3 = databulans;
jQuery("#forfocusbox").focus();
    jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
    jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loaddata2pro&nextclue=databelanja&loadid="+globaldatas1+"&loadfor="+globaldatas2+"&selectedmonth="+globaldatas3);
}
function showtheqr(loadmynextcluex="") {
if (loadmynextcluex=="")
  {return false;}
jQuery("#forfocusbox").focus();
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>loadqr/?itcamefrom=yup&databelanjanya="+loadmynextcluex);
 
}
function doloadallmember(databulans="") {
  jQuery("#forfocusbox").focus();
jQuery("#loadboxfordatas").html("<div style='width:100%;text-align:center;padding-top:13px;'>Sedang Memuat...</div>");
jQuery("#loadboxfordatas").load("<?php echo $lokasiweb; ?>?docommand=loadmemberdataallbelanjaaan&selectedmonth="+databulans);
}
</script>
<input type="text" id="forfocusbox" style="opacity: 0;position: absolute;z-index: -1;">
<div id="loadboxfordatas" style="width:100% !important;min-height: 100px;background: #fff;box-shadow: 0 0 10px 1px rgba(123,123,123,0.1);">
<script type="text/javascript">
  jQuery(document).ready(function(){
    <?php $directfrom="";
    if (!empty($_REQUEST["pilihdari"]))
    { if (@count(@explode("-",@$_REQUEST["pilihdari"]))>1)
      {
        if (@intval(@date("Y",strtotime(@expimpd(@$_REQUEST["pilihdari"],"-","","0x"))))>1970)
        {
          if ((@intval(@expimpd(@$_REQUEST["pilihdari"],"-","","1x"))>0)&&(@intval(@expimpd(@$_REQUEST["pilihdari"],"-","","1x"))<13))
          {
            $directfrom=@$_REQUEST["pilihdari"];
          }

        }
      }
     }
     ?>
    doloadallmember("<?php echo $directfrom; ?>");
  })
</script>
</div>

</div>
</div>
</div>
</div>
</div>
</section>
