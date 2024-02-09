<?php
if (empty($namawebsite))
{die();}

$loadnamanya="";
if (!empty($_REQUEST["lihat"]))
{
$cekid=$_REQUEST["lihat"];

$muatgambar="box/photoexp/".@lihatisikolomtertentu("data_pioneerweb","username",@$cekid,"dataidutama_pioneer").".jpg";
  if (file_exists($muatgambar))
    {$muatgambar=$lokasiweb.$muatgambar;}
  else
    { $muatgambar="box/photoexp/".@$cekid.".jpg";
      if (($muatgambar!="")&&(file_exists($muatgambar)))
      {$muatgambar=$lokasiweb.$muatgambar;}
      else
      {$muatgambar=$lokasiweb."box/logoSN.png";}
    }
$cekid=@lihatisikolomtertentu("data_pioneerweb","username",@$cekid,"dataidutama_pioneer");
$loadnamanya=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$cekid,"nama_lengkap_pioneer");
$ceklvlakuns=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$cekid,"level_akun");
}
else
{ ?> <script>
jQuery(document).ready(function() {
//window.location.href='<?php echo $lokasiweb; ?>';
})
</script>
  <?php }; ?>
<br/><br/>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Lihat Anggota</h2>
<br/><br/>

<section style="<?php echo @(@$runonmobile==="mobile"?"margin-left: -21px !important;":""); ?>min-height:100px;" class="elementor-section elementor-top-section elementor-element elementor-element-4154f0d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4154f0d" data-element_type="section" id="testimonials" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2ea9101" data-id="2ea9101" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-ccff394 elementor-widget elementor-widget-heading" data-id="ccff394" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default"><br/></h3> </div>
</div>

<div class="elementor-element elementor-element-264ea78 elementor-widget elementor-widget-spacer" data-id="264ea78" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<?php 
if ($loadnamanya=="")
{ ?>
<script type="text/javascript">
  function cariindonganggotanya() {
jQuery.post('<?php echo $lokasiweb; ?>?docommand=dicaridicari', jQuery('#mencariprodukku').serialize(), function(hasilnya){
jQuery("#hasilemangkibao").html(hasilnya);
return false;
})
return false;
}
</script>
<form id="mencariprodukku" name="mencariprodukku" style="width: 99% !important;" onsubmit="return cariindonganggotanya(); return false;">
<?php
if (@count(@explode("Chrome",@$_SERVER['HTTP_USER_AGENT']))>1)
{ $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)<2)
{ ?>
<script src="<?php echo $lokasiweb; ?>speechRecognition.js"></script>
<button type="button" id="startaix" class="calactdanger" onclick="mulaiindong();" style="border:0;padding:8px !important;"><i title='Search Text By Voice' class='fas fa-microphone' style='cursor:pointer;'></i></button>
<?php }; }; ?>
<input type="text" placeholder="Silahkan Ketikan Nama Anggota" value="" name="searchingboxes" id="searchingboxes" required style="width:76%;margin-right: 7px;">
 <button type="submit" class="calactdanger" style="border:0;padding:8px !important;"><i title='Search Text' class='fas fa-search' style='cursor:pointer;'></i></button>

</form>
<br/><br/><div id="judulnofir"></div>
<br/><br/>
 <?php  echo "<div id='hasilemangkibao' style='width:100%;min-height:100px;text-align:center;margin-top:18px;'></div>";  }
else
  { $tabletarget="data_pioneerweb"; $loadfromiddata=$cekid; ?>

<div class="contentboxsforall" style="width:100%;min-height: 100px;margin-top: -55px !important;">
<div class="blocklist">
<table class="forformdata" cellpadding="0" cellspacing="0">
<tr><td>
<img src="<?php echo $muatgambar; ?>" decoding="async" style="width: 100% !important;height: auto;margin: 0 auto;"/>
</td></tr>

<tr><td style="height: auto !important;">
<b >Username: </b><?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?><br/>

<?php
$source1indo="dataidutama_pioneer||status_akun||username||password_untuk_login||nama_lengkap||gender||email||nomor_telpon||alamat_domisili||nomor_rt_/_rw||nomor_rw||alamat_kelurahan_domisili||alamat_kecamatan_domisili||alamat_kota_domisili||kode_pos_domisili||id_wallet||level_akun||dibuatsaat";
$iloopform=0; $formsource=@explode("||",@$source1); $formsource2=@explode("||",@$source1indo); $sourceukuran=@explode("||",@$sourceukuran1); $setformdisp="";
if ($formsource!="")
{ for ($iloopform=4;$iloopform<7;$iloopform++)
{
$datalevelup=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun");
?>
<br/>
<?php
if ($formsource[$iloopform]=="id_wallet")
{
 }
 else
  { ?>
<b ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," ")); ?></b> <?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?><br/>
  <?php }

?>

<?php
}
}
?>

</table>
</div>
<div class="blocklistbig">
<table class="forformdata" cellpadding="0" cellspacing="0" style="border:0 !important;margin-top: -23px !important;">
<?php
$iloopform=0; $formsource=@explode("||",@$source1); $formsource2=@explode("||",@$source1indo); $sourceukuran=@explode("||",@$sourceukuran1); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ for ($iloopform=7;$iloopform<$iloopformend;$iloopform++)
{
$datalevelup=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun");
?>
<tr><td>
<?php
if (($formsource[$iloopform]=="id_wallet")||($formsource[$iloopform]=="alamat_rw_domisili"))
{
 }
 else
  { ?>
<br/>
<b ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," ")); ?></b> <br/><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]).($formsource[$iloopform]==="alamat_rt_domisili"?" / ".@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"alamat_rw_domisili"):""); ?>
  <?php }

?>
</td></tr>
<?php
}
}
?>
<tr><td><br/><b>Status Keanggotaan</b><br/><?php echo (@$datalevelup==="penguna"?"Anggota":@$datalevelup); ?></td></tr>
</table>
</div>
</div>
<?php if (@$datalevelup!="penguna") { ?>
<br/>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;width: 97% !important;margin:36px 0 27px 0 !important;">Data Produk dari Anggota</h2>
<br/><br/>

<style>
.saghacordion{ -webkit-transition:all .5s ease-in-out !important;-moz-transition:all .5s ease-in-out  !important;cursor:pointer !important; }
.motomobiblocker h3 {text-align: left !important;padding-left:18px !important;}
.catmobieicon {display: block !important;position: absolute !important;margin:2px 0 9px -18px !important;}
.hideonmobileload {display: none !important;}
</style>
<script type="text/javascript">

function doopenpile(datapile="") {

jQuery(".saghacordion .catmobieicon").removeClass("fa-minus");
jQuery(".saghacordion .catmobieicon").addClass("fa-plus");
jQuery(".saghacordion .markernya").addClass("hideonmobileload");
jQuery(".saghacordion .boxuntuktombollihat").removeClass("hideonmobileload");

if (datapile!="") {
jQuery(".boxpileof"+datapile+" .boxuntuktombollihat").addClass("hideonmobileload");
jQuery(".boxpileof"+datapile+" .markernya").removeClass("hideonmobileload");
jQuery(".boxpileof"+datapile+" .catmobieicon").addClass("fa-minus");
jQuery(".boxpileof"+datapile+" .catmobieicon").removeClass("fa-plus");
}

}
</script>


<div class="contentboxsforall" style="width:100%;min-height: 100px;margin-top: 5px !important;">

<?php
$querysql="select * from coredatas where coresupplyby='".@$loadfromiddata."' order by waktuupdate desc";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{
?> 
<?php while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $runonmobile="mobile"; echo printouts(@$tampilkanperkolomdata["coreurut"]); }; 
} else { echo "Tidak Ada data Produk dari Anggota ini"; }; ?>
</div>
<?php }; ?>
  <?php
   }; ?>
</div>
</div>
</div>
</section>