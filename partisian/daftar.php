<?php
if (empty($namawebsite))
{die();}
?>
<?php if (@$deweedysaghakey1!="")
{ ?> <script>
jQuery(document).ready(function() {
window.location.href='<?php echo $lokasiweb; ?>?page=member-area';
})
</script>
	<?php }; ?>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;width:96% !important;">Selamat Datang, Anda ingin bergabung?<br/>Silahkan isi form dibawah ini</h2>
<br/><br/>

<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container afterloginboxes" style="<?php echo @(@$runonmobile==="mobile"?"margin-left: -10px !important;":"margin-left: -30px !important;"); ?>min-height:100px;">


    <script type="text/javascript">
        
                <?php $formfrom="datadaftarfile"; ?>
        var donextboxdari<?php echo $formfrom; ?> = "";
        function lakukandaftar() { 

if (donextboxdari<?php echo $formfrom; ?>!="validgambarnya") {
if (donextboxdari<?php echo $formfrom; ?>=="tidakvalid") {
var konfirmasifotoz=confirm("Tidak terdeteksi Wajah di Gambar yang Anda pilih, pastikan foto Anda tidak blur dan posisi wajah terlihat.\n\nApakah Anda ingin melakukan deteksi ulang atau menganti foto Anda ?\n\n");
if (konfirmasifotoz)
  { jQuery("#forfocusuploadulang<?php echo $formfrom; ?>").focus();
    return false;
  }
  else
    {alert("Mungkin nantinya akan berdampak pada legalitas akun Anda, tapi Anda tetap bisa melanjutkan ke proses berikutnya");}
}
else if (donextboxdari<?php echo $formfrom; ?>=="kurangvalid") {
var konfirmasifotoz=confirm("Foto Gambar yang Anda pilih sudah tersimpan dengan user lain, pastikan Anda memakai foto yang benar-benar Anda.\n\nApakah Anda ingin melakukan deteksi ulang atau menganti foto Anda ?\n\n");
if (konfirmasifotoz)
  { jQuery("#forfocusuploadulang<?php echo $formfrom; ?>").focus();
    return false;
  }
  else
    {alert("Mungkin nantinya akan berdampak pada legalitas akun Anda, tapi Anda tetap bisa melanjutkan ke proses berikutnya");}
}
}


var formData = new FormData(jQuery("#formdaftarindaftar")[0]);
    formData.append("upload_file", true);
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doregnewone&formname=inputandatadaftar&metoz=formdaftar",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            window.location.href='<?php echo $lokasiweb; ?>';
            return false;
            },
        });

return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarindaftar" onsubmit="lakukandaftar(); return false;">
<div class="form-fields">
<?php
$tabletarget="data_pioneerweb"; $loadfromiddata="";
?>

<div>
<label >Id Komunitas</label><br/>
<input type="text" id='ondaftarboxforcek' class="deweedycustom validate[required]" placeholder="Silahkan Cek Nomor Komunitas" value="" onkeyup="cekkomica('ondaftarboxforcek');">
    </div>


<div id="boxofasalnya" >
<?php

$iloopform=0; $formsource=@explode("||",@$source1); $sourceukuran=@explode("||",@$sourceukuran1); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ for ($iloopform=0;$iloopform<$iloopformend;$iloopform++)
{
if (($iloopform==0)||($iloopform==1))
{$setformdisp=(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")==="admin"?"":'style="display: none;" readonly');}
else
{$setformdisp=' required dochangeattr="form" ';

if (($iloopform>7)&&($iloopform<15))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.$iloopform.'" ';}

}
$setformdisp=" cekricek='ondaftarboxforcek".$formsource[$iloopform]."' ".$setformdisp;

?>
<div <?php echo $setformdisp; ?>>
<label ><?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> *</label><br/>

<?php
if ($iloopform==6)
{    ?>

    <input type="email" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==5)
{    ?>
<select cekricek='ondaftarboxforcekgender_pioneer' required class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" name="inputandatadaftar[]">
        <option value="pria" >Pria</option>
    <option value="wanita" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform])==="wanita"?"selected":""); ?>>Wanita</option>
</select>
    <?php
}
else if ($iloopform==0)
{    ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="" name="inputandatadaftar[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")===""?"-":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")); ?>" >
    <?php
}
else if ($iloopform==3)
{    ?>
    <input type="password" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==1)
{   if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")=="admin") { ?>
<div>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" name="inputandatadaftar[]">
        <option value="non-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="aktif" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="aktif"?"selected":""); ?>>Aktif</option>
</select>
</div>
<?php } else { ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="" name="inputandatadaftar[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")===""?"unverified":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")); ?>" >
<?php }; 
}
else
{
    $ukuranforms=@intval($sourceukuran[$iloopform]);
    if ($ukuranforms>255)
    {
    ?>
    <textarea <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
    <?php
    }
    else
    {
    ?>
    <input type="text" <?php echo $setformdisp." ".($iloopform===2?"id='formusernamefordaftar' "." onkeyup=\"recekusernames('formusernamefordaftar');\" ":""); ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatadaftar[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>">
    <?php
    }
}

?>
</div>
<?php
}
}
?>
<?php if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")=="admin") { ?>
<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom <?php echo $formsource[$iloopform]."boxesdaftar"; ?> validate[required]" name="inputandatadaftar[]">
        <option value="penguna" >User App</option>
    <option value="admin" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="admin"?"selected":""); ?>>Admin</option>
</select>
</div>

<div <?php echo @$setformdisp; ?>>
<label >Waktu Update : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dibuatsaat")));?> *</label><br/><br/>

</div>
<?php } else { ?>

<input type="text"  cekricek='ondaftarboxforceklevel_akun' style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatadaftar[]" value="penguna" >

<?php } ?>

<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatadaftar[]" value="<?php echo $waktusebenernyawib; ?>" >

<?php
if (@$deweedysaghakey1=="")
{ ?>

<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ ?>
<script>
const Pix2 = window.Pi;
jQuery(document).ready(function() {

        Pix.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pix2.authenticate(t, onIncompletePaymentFound).then(function(auth){
         globalusernamesz=auth.user.username;
          jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+globalusernamesz, function(data){
          
          if (data!="")
          {
             globalusernamesztukformdaftar=""; 
           }
          else
          {globalusernamesztukformdaftar=globalusernamesz;            
           globalusernamesz="";}
          })
jQuery(".usernameboxesdaftar").val(globalusernamesztukformdaftar);
        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });
})
</script>
<?php }; ?>
<div>
<label >Foto Profil *</label><br/>
<?php
$forbayar="box/photoexp/".@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer").".jpg";
if (file_exists($forbayar))
{ $reqforphoto="";
?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php } else { $reqforphoto="required"; } ?>

<?php if (file_exists("saghafotodetection.php"))
{ echo "<div style=\"width:98% !important;position:relative !important;display:block;z-index:3;min-height:0 !important;height:auto !important;\">"; 
$formfrom="datadaftarfile";
require ('saghafotodetection.php');
echo "</div>";
}
else
{ ?> <input type="file" <?php echo $reqforphoto; ?> accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandatadaftarfile" ><br/> <?php }; ?>

</div>
<?php }; ?>
</div>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="daftar" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/>

<div class="pemetaankoordinat">

<input type="text" style="display: none;" readonly class="deweedycustom dampaklat validate[required]" placeholder="" name="dampaklat">
<input type="text" style="display: none;" readonly class="deweedycustom dampaklong validate[required]" placeholder="" name="dampaklong">

<input type="button" class="dt-btn dt-btn-m calactdanger" value="Kota / Kabupaten dan Kode Pos sesuai Peta" style="width:auto;" onclick="aturulangkodepos('.kode_pos_domisiliboxesdaftar','.alamat_kota_domisiliboxesdaftar');" />
<br/><br/>

<label>Titik Lokasi Anda Saat ini di Peta</label><br/>


<iframe id="justmeusos" scrolling="no" frameborder="0" style="width:98vw !important;background: transparent !important;" oncontextmenu="return false;" /></iframe>
</div>
</form>
<script type="text/javascript">
 var lattenyadaftar="";
function buatdatadaftarkodepos() {
if (latz!="") {    
if (jQuery(".kode_pos_domisiliboxesdaftar").val()=="")
{jQuery(".kode_pos_domisiliboxesdaftar").val(kodezpecahan);}
if (jQuery(".alamat_kota_domisiliboxesdaftar").val()=="")
{jQuery(".alamat_kota_domisiliboxesdaftar").val(kitishippecahan);}
if ((lattenyadaftar=="")||(lattenyadaftar!=latz))
{jQuery("#justmeusos").attr("src","<?php echo $lokasiweb; ?>buatbuatin.php?dimanatuh=" + latz + "||" + longz+"&fromframes=justmeusos");
lattenyadaftar=latz;
jQuery(".dampaklat").val(latz); jQuery(".dampaklong").val(longz);
}
jQuery(".pemetaankoordinat").show();
}
else
{ jQuery(".pemetaankoordinat").hide(); }
setTimeout("buatdatadaftarkodepos()", 1000);
}
 jQuery(document).ready(function(){
buatdatadaftarkodepos();
 })   
</script>



</div>
</div>
</div>
</div>
</div>
</section>
