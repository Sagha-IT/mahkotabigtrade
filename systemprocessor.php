<?php

// disini tempatnya fungsi untuk proses data
$getformsdata=$getformsdata2=$Namafile=$tmpName=$berat=$tipedata="";
if ((!empty($_REQUEST["formname"]))&&($_REQUEST["formname"]!=""))
	{$getformsdata=$_REQUEST["formname"];$getformsdata2=$getformsdata."file";
	if (!empty($_FILES[$getformsdata2]))
	{$Namafile = $_FILES[$getformsdata2]["name"];
	$tmpName  = $_FILES[$getformsdata2]["tmp_name"];
	$berat = $_FILES[$getformsdata2]["size"];
	$tipedata = $_FILES[$getformsdata2]["type"];}
	$getformsdata=str_replace("'", "&#39;", $_POST[$getformsdata]); //mengantisipasi pelamaran tanda petik satu agar tidak error saat menyimpan ke database atau fungsi lainnya
	};
$buatiddatabasepenyimpanandata="";
if ((empty($judulweb))||(empty($_REQUEST["docommand"])))
{header("location:./");die();} //proteksi file
switch ($_REQUEST["docommand"]) {

case "loadnextprodukpinetmart":
$errordong="<br/><div style='display:block !important;position:relative !important;width:100%;'>Tidak Ada data Untuk di Tampilkan</div><br/>";
if ((!empty($_REQUEST["whatnext"]))&&(intval($_REQUEST["whatnext"])>=0))
{
if (empty($_REQUEST["jeniskategori"]))
{die($errordong);}

if ($_REQUEST["jeniskategori"]=="bycustom")
{
if (empty($_POST["searchingboxes"]))
{die($errordong);}

  $querysql="select * from coredatas where corecategory like '%".@$_POST["searchingboxes"]."%' or corename like '%".@$_POST["searchingboxes"]."%' or coresubcats like '%".@$_POST["searchingboxes"]."%' order by waktuupdate desc";

if (@lihatisikolomtertentu("","","","coreurut",$querysql)=="")
{  $querysql="select a.*,b.* from coredatas a join data_pioneerweb b  on a.coresupplyby=b.dataidutama_pioneer where (b.nama_lengkap_pioneer like '%".@$_POST["searchingboxes"]."%' or b.alamat_kelurahan_domisili='".@$_POST["searchingboxes"]."' or b.alamat_kecamatan_domisili='".@$_POST["searchingboxes"]."' or b.alamat_kecamatan_domisili='".@$_POST["searchingboxes"]."' or b.alamat_kota_domisili='".@$_POST["searchingboxes"]."' )  and b.level_akun='vendor' order by waktuupdate desc ";

}

}
else
{$querysql="select * from coredatas where corecategory='".@$_REQUEST["jeniskategori"]."' order by waktuupdate desc";}


 $hitungtotal=intval($_REQUEST["whatnext"]);
$jmltotal=$hitungnext=0;$hitungnext=(intval($_REQUEST["whatnext"])-2);
$jmltotal=queryuniverse($querysql,"num");
$querysql=$querysql." limit ".$hitungtotal.",3"; 
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{
?> 
<?php while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ echo printouts(@$tampilkanperkolomdata["coreurut"]); $hitungtotal++; $hitungnext++; }; ?>

<script type="text/javascript">
    tempcluecount=<?php echo $hitungtotal; ?>;
</script>
<?php } else { die($errordong);
}
}
else
{die($errordong);}
break;

case "cekbenergk":
if ((!empty($_REQUEST["whatnext"]))&&(!empty($_REQUEST["fromwhat"])))
{ $doidenty=@substr(@$_REQUEST["fromwhat"],0,-1);

$muatdetails=@lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",$doidenty,"dataidutama_pioneer");
$muatdetails2=@lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",$doidenty,"status_koin_pi");
$muatdetails3=@lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",$doidenty,"status_pioneer");
$muatdetails=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$muatdetails,"nama_lengkap_pioneer");
if ($muatdetails!="")
{ $muatdetailsalert=$muatdetails; ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
<?php
 $getlist=@explode("||",$sourcekom);
if ($getlist!="")
{ ?>
        <?php for ($ilopx=0;$ilopx<count($getlist);$ilopx++) {
        $muatdetails="";
          if ($getlist[$ilopx]=="level_akun")
          {
            if ($muatdetails=="")
              {$muatdetails="penguna";}
          }
          else if ($getlist[$ilopx]=="gender_pioneer")
          {
            if ($muatdetails=="")
              {$muatdetails="pria";}
          }
     ?>
    jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
  <?php }; ?>

<?php
};
?>
    jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");


    alert("Nomor Komunitas <?php echo $doidenty; ?> sudah terdaftar sebagai <?php echo @$muatdetailsalert; ?>");

})
</script>
<?php
  die();
}

if (($muatdetails3!="")&&(@strtolower(@$muatdetails3)!="aktif"))
{ ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
<?php
 $getlist=@explode("||",$sourcekom);
if ($getlist!="")
{ ?>
        <?php for ($ilopx=0;$ilopx<count($getlist);$ilopx++) {
        $muatdetails="";
          if ($getlist[$ilopx]=="level_akun")
          {
            if ($muatdetails=="")
              {$muatdetails="penguna";}
          }
          else if ($getlist[$ilopx]=="gender_pioneer")
          {
            if ($muatdetails=="")
              {$muatdetails="pria";}
          }
     ?>
    jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
  <?php }; 
};
?>
    jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    alert("Member dengan Nomor Komunitas <?php echo $doidenty; ?> bernama: \n\n<?php echo @lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",$doidenty,"nama_lengkap_pioneer"); ?>  \n\nSudah tidak aktif lagi");
})
</script>
<?php
  die();
} 

/* if (($muatdetails2!="")&&(@strtolower(@$muatdetails2)!="ab"))
{ ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
<?php
 $getlist=@explode("||",$sourcekom);
if ($getlist!="")
{ ?>
        <?php for ($ilopx=0;$ilopx<count($getlist);$ilopx++) {
        $muatdetails="";
          if ($getlist[$ilopx]=="level_akun")
          {
            if ($muatdetails=="")
              {$muatdetails="penguna";}
          }
          else if ($getlist[$ilopx]=="gender_pioneer")
          {
            if ($muatdetails=="")
              {$muatdetails="pria";}
          }
     ?>
    jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
  <?php }; 
};
?>
    jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"]."nama_lengkap_pioneer"; ?>']").removeAttr("readonly");
    alert("Status Koin Pi dengan Nomor Komunitas <?php echo $doidenty; ?> bernama: \n\n<?php echo @lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",$doidenty,"nama_lengkap_pioneer"); ?>  \n\nbelum memenuhi syarat karena <?php echo @$muatdetails2; ?>");

})
</script>
<?php
  die();
} */

 $getlist=@explode("||",$sourcekom);
if ($getlist!="")
{ ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
        <?php for ($ilopx=0;$ilopx<count($getlist);$ilopx++) {
        $muatdetails=@lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",$doidenty,$getlist[$ilopx]);

          if ($getlist[$ilopx]=="level_akun")
          {
            if ($muatdetails=="")
              {$muatdetails="penguna";}
          }
          else if ($getlist[$ilopx]=="gender_pioneer")
          { if ($muatdetails=="")
              {$muatdetails="pria";}
          }
          else if ($getlist[$ilopx]=="nama_lengkap_pioneer")
          {
            if ($muatdetails!="")
              {
                 ?>
                jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").attr("readonly","readonly");
                jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").attr("readonly","readonly");
                jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").attr("readonly","readonly");
              <?php
          }
          else
          {
                 ?>

                jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").removeAttr("readonly");
                jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").removeAttr("readonly");
                jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").removeAttr("readonly");
              <?php
          }
        }
     ?>
    jQuery("input[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("select[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
    jQuery("textarea[cekricek='<?php echo $_REQUEST["whatnext"].$getlist[$ilopx]; ?>']").val("<?php echo @$muatdetails; ?>");
  <?php }; ?>
  })

</script>
<?php
}
}
else
{echo "";}
die();
break;

   case "doeditkomuterline":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}

$tabletarget="dataygdikomunitas"; $loadfromiddata="";

if (empty($_REQUEST["loadfromdata"]))
{$loadfromiddata="-";}
else
{$loadfromiddata=@$_REQUEST["loadfromdata"];}


if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(((@lihatisikolomtertentu("dataygdikomunitas","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}

?>

    <script type="text/javascript">
        
function recekidkoms(datatarget="") {
var getusernametodoold="";
var getusernametodo="";
if (datatarget=="")
{return false;}
getusernametodo=jQuery("#"+datatarget).val();
if (getusernametodo=="")
    {return false;}
getusernametodo=getdetectforinvalidsymb3(getusernametodo);
jQuery("#"+datatarget).val(getusernametodo);

getusernametodoold=jQuery("#"+datatarget+"old").val();

if (getusernametodo!=getusernametodoold)
    {            jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckidmember&angkarupiah='+getusernametodo+"x", function(data){
                if (data!="")
                {alert(data);jQuery("#"+datatarget).val("");jQuery("#"+datatarget).focus();}
            
            return false;
        });
}
return false;
}
        function lakukaneosaver() { 
var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=dokomssaver&formname=inputandataeoarea",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=produkku';
            return false;
            },
        });

return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukaneosaver(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<?php
$tabletarget="dataygdikomunitas"; 

$iloopform=0; $formsource=@explode("||",@$source7); $formsource=@explode("||",@$source7); $formsource2=@explode("||",@$source7);  $sourceukuran=@explode("||",@$sourceukuran7); $setformdisp="";
$iloopformend=@intval(@count($formsource))-1;
if ($formsource!="")
{ ?>

<?php for ($iloopform=0;$iloopform<$iloopformend;$iloopform++)
{ if (($iloopform==0))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';
if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}
}
?>

<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?> *</label><br/>
<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{ 
?>
<textarea class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{ if ($formsource[$iloopform]=="status_koin_pi")
{  $selectedstatuskoin=@explode("||","BLM KYC||KYC PENDING||PEND MIGRASI||AB");  $setstatsupply=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]) ?>
<select class="deweedycustom validate[required]" name="inputandataeoarea[]">
<?php for ($iloop=0;$iloop<@count($selectedstatuskoin);$iloop++)
    {echo '<option value="'.$selectedstatuskoin[$iloop].'" '.@(@$setstatsupply===$selectedstatuskoin[$iloop]?"selected":"").'>'.@ucwords(@expimpd($selectedstatuskoin[$iloop],"-"," ")).'</option>'; }
?>
</select>
<?php }
else if ($formsource[$iloopform]=="status_pioneer")
{  $selectedstatuskoin=@explode("||","aktif||tidak-aktif");  $setstatsupply=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]) ?>
<select class="deweedycustom validate[required]" name="inputandataeoarea[]">
<?php for ($iloop=0;$iloop<@count($selectedstatuskoin);$iloop++)
    {echo '<option value="'.$selectedstatuskoin[$iloop].'" '.@(@$setstatsupply===$selectedstatuskoin[$iloop]?"selected":"").'>'.@ucwords(@expimpd($selectedstatuskoin[$iloop],"-"," ")).'</option>'; }
?>
</select>
<?php }
else if ($formsource[$iloopform]=="level_akun")
{  $selectedstatuskoin=@explode("||","penguna||vendor||admin");  $setstatsupply=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]) ?>
<select class="deweedycustom validate[required]" name="inputandataeoarea[]">
<?php for ($iloop=0;$iloop<@count($selectedstatuskoin);$iloop++)
    {echo '<option value="'.$selectedstatuskoin[$iloop].'" '.@(@$setstatsupply===$selectedstatuskoin[$iloop]?"selected":"").'>'.@ucwords(@expimpd($selectedstatuskoin[$iloop],"-"," ")).'</option>'; }
?>
</select>
<?php }
else
{ if (@$formsource[$iloopform]=="nomor_komunitas") { ?> 

<input type="text" style="display: none;" readonly id='formrechekidkomold' class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php } ?>
<input type="text" <?php echo @$setformdisp; echo (@$formsource[$iloopform]==="nomor_komunitas"?" id='formrechekidkom'  onkeyup=\"recekidkoms('formrechekidkom');\"":"");   ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
};
}
?>
</div>
<?php
}
}
 ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="<?php echo $waktusebenernyawib; ?>" >
</div>
</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>

</form>
<?php
break;
case "dokomssaver":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}
$pesannya="";
$tabletarget="dataygdikomunitas"; 
$iloopform=0; $formsource=@explode("||",@$source7); $formsource=@explode("||",@$source7);   $sourceukuran=@explode("||",@$sourceukuran7); $setformdisp="";
if ($formsource!="")
{ if (($getformsdata[0]!="")&&($getformsdata[0]!="-"))
{ $setidtosave=@$getformsdata[0];
$query="update `".$tabletarget."` set ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform]."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$getformsdata[(@count($formsource)-1)]."' where ".$formsource[0]."='".$setidtosave."'";
 $queryx="update `data_pioneerweb` set status_pioneer='".@$getformsdata[1]."' where dataidutama_pioneer='".@$setidtosave."'";
@queryuniverse($queryx);
}
else
{ $setidtosave="user".@$getformsdata[2];
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=0;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `dibuatsaat`) VALUES ( '".$setidtosave."', ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform]."',";}
$query.=" '".$getformsdata[(@count($formsource)-1)]."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{
$pesannya="Berhasil Menyimpan Data Member Komunitas";
}
else
{$pesannya="Gagal Menyimpan Data Member Komunitas";}
}
die($pesannya);
break;
case "dosomethingunholykomuter":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}

$tjngmbr="box/photoexp/".@$_REQUEST["loadfromdata"].".jpg";
if (file_exists($tjngmbr))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("dataygdikomunitas","dataidutama_pioneer",@$_REQUEST["loadfromdata"],"nama_lengkap_pioneer");
$querysql="select * from databelanjaanpioner where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{
  if (@$tampilkanperkolomdata["foto_bukti_bayar"]!="")
  {$tjngmbr="box/buktiupbayar/".@$tampilkanperkolomdata["foto_bukti_bayar"];
  if (file_exists($tjngmbr))
  {unlink($tjngmbr);}
  }
}
@queryuniverse("delete from databelanjaanpioner where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ");
}
$querysql="delete from data_pioneerweb where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ";

@queryuniverse($querysql);

$querysql="delete from dataygdikomunitas where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ";

$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data member komunitas bernama: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data pioneer komunitas bernama: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;
   case "doeditberitanya":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}
$tabletarget="beberkanlisting"; $loadfromiddata="";
if (empty($_REQUEST["loadfromdata"]))
{$loadfromiddata="-";}
else
{$loadfromiddata=@$_REQUEST["loadfromdata"];}
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}
?>

    <script type="text/javascript">
        
        function lakukaneosaver() { 
var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doberitaansaver&formname=inputandataeoarea",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=produkku';
            return false;
            },
        });

return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukaneosaver(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<?php
$tabletarget="beberkanlisting"; 

$source6indo="beberkanurut||Judul Berita||Isi Berita||Jadikan Headline Hingga||beberkanpostedat||beberkanpostedby||beberkanmainimages";

$iloopform=0; $formsource=@explode("||",@$source3); $formsource=@explode("||",@$source6); $formsource2=@explode("||",@$source6indo);  $sourceukuran=@explode("||",@$sourceukuran6); $setformdisp="";
$iloopformend=@intval(@count($formsource))-3;
if ($formsource!="")
{ ?>
<div>
<label >Foto Berita *</label><br/>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" name="inputandataeoarea[]" value="<?php $proideas=@lihatisikolomtertentu($tabletarget,"beberkanurut",$loadfromiddata,"beberkanurut"); echo ($proideas===""?"-":$proideas); ?>" />
<?php $setstatfoto="required";
$proideas=@lihatisikolomtertentu($tabletarget,"beberkanurut",$loadfromiddata,"beberkanmainimages");
$proideas=($proideas===""?"-":$proideas);
$forbayar="box/beberkan/".@$proideas;
if (($forbayar!="")&&(file_exists($forbayar)))
{ $setstatfoto=""; ?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php };  ?> 
<input type="file" <?php echo $setstatfoto; ?> accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandataeoareafile" /><br/>
</div>
<?php for ($iloopform=1;$iloopform<$iloopformend;$iloopform++)
{ if (($iloopform==0))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';
if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}
}
?>

<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?> *</label><br/>
<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{ $dosetattr="beritaan||".$loadfromiddata."||".$formsource[$iloopform];$dosetattr2="beritaan__".$loadfromiddata."__".$formsource[$iloopform];
?>
<iframe id="editorboxfornews<?php echo $getpartz1; ?>" src="<?php echo $lokasiweb."plugin/summernoteindo/summernoteloader.php?"; ?>editfor=<?php echo $dosetattr; ?>" frameborder="0" style="border:0;width:100%;height: 324px !important;"></iframe>
<textarea id="maintextarea<?php echo @$dosetattr2; ?>" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{ if ($formsource[$iloopform]=="beberkanisiheadhingga")
{  ?>
<input type="date" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>"  >
<?php }
else
{ ?>
<input type="text" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
};
}
?>
</div>
<?php
}
}
if ($proideas!="-")
{ ?>
<div>
<label >Di Update Pada: <?php echo @date("d F Y H:i:s",@strtotime(@lihatisikolomtertentu($tabletarget,"beberkanurut",$loadfromiddata,"beberkanpostedat"))); ?></label><br/>
</div>
<?php }; ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="<?php echo $waktusebenernyawib; ?>" >
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="administrator" >
</div>
</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>

</form>
<?php
break;
case "dosomethingunholyberita":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}
$pesannya="";
$tabletarget="beberkanlisting"; $loadfromiddata="";
$loadfromiddata=@$_REQUEST["loadfromdata"];
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(((@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="beberkanlisting"; 
$tjngmbr="box/beberkan/".@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$_REQUEST["loadfromdata"],"beberkanmainimages");
if ((@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$_REQUEST["loadfromdata"],"beberkanurut")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$_REQUEST["loadfromdata"],"beberkanjudul");

$querysql="delete from beberkanlisting where beberkanurut='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data berita: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data berita: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;
case "doberitaansaver":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}
$pesannya="";
$tabletarget="beberkanlisting"; $loadfromiddata="";
$loadfromiddata=@$getformsdata[0];
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}
$tabletarget="beberkanlisting"; 
$iloopform=0; $formsource=@explode("||",@$source6); $formsource=@explode("||",@$source6); $sourceukuran=@explode("||",@$sourceukuran6); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ if (($getformsdata[0]!="")&&($getformsdata[0]!="-"))
{
$setidtosave=@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$getformsdata[0],"beberkanmainimages");
 if (@$tmpName!="")
{
$tjngmbrold="box/beberkan/".@$setidtosave;
$setidtosave=@mengacakstring(md5($getformsdata[1]).md5($getformsdata[3]).md5($waktusebenernyawib),5).".jpg";}
$query="update `".$tabletarget."` set ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform]."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$setidtosave."' where ".$formsource[0]."='".@$getformsdata[0]."'";
}
else
{ $setidtosave=@mengacakstring(md5($getformsdata[1]).md5($getformsdata[3]).md5($waktusebenernyawib),5).".jpg";
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `beberkanmainimages`) VALUES ( ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform]."',";}
$query.=" '".$setidtosave."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{ 
$pesannya="Berhasil Menyimpan Data Berita";
 $tjngmbr="box/beberkan/".@$setidtosave;
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ 
if (@file_exists(@$tjngmbrold))
{@unlink($tjngmbrold);}
 if (@move_uploaded_file($tmpName, $tjngmbr))
{@compresszz($tjngmbr, $tjngmbr, 45,500,0);
  $pesannya=$pesannya." dan Foto Berita berhasil disimpan\n";}
 }
}
else
{ if (@$getformsdata[3]!=@$oldcat)
 {@rename($tjngmbrold,$tjngmbr);}
}
}
else
{$pesannya="Gagal Menyimpan Data Berita";}
}
die($pesannya);
break;
case "dosomethingunholyevent":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}
$pesannya="";
$tabletarget="mediaeo"; $loadfromiddata="";
$loadfromiddata=@$_REQUEST["loadfromdata"];
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(((@lihatisikolomtertentu("mediaeo","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="mediaeo"; 
$source4indo="kodeventz||Nama Event||Tagline Event||Lokasi Event||Waktu Event||Durasi Hari (apabila hanya di hari yang sama, isi dengan angka 0)||Detail Event||Maksud dan Tujuan||Sasaran Target||Manfaat||waktuupdate";
$tjngmbr="box/evegate/".@$_REQUEST["loadfromdata"].".jpg";
if ((@lihatisikolomtertentu("mediaeo","kodeventz",@$_REQUEST["loadfromdata"],"kodeventz")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@lihatisikolomtertentu("mediaeo","kodeventz",@$_REQUEST["loadfromdata"],"coresupplyby"),"nama_lengkap_pioneer");
$namapioneer=@lihatisikolomtertentu("mediaeo","kodeventz",@$_REQUEST["loadfromdata"],"namaeventz")." yang diselenggarakan oleh: ".($namapioneer===""?@$namapt:$namapioneer);

$querysql="delete from vouchermubukanvoucherku where kodeventz='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);

$querysql="delete from mediaeo where kodeventz='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data event: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data event: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;
case "dosomethingunholyvoucher":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}
$pesannya="";
$tabletarget="vouchermubukanvoucherku"; $loadfromiddata="";
$loadfromiddata=@$_REQUEST["loadfromdata"];
$namapioneer=@$_REQUEST["loadfromdata"];
$querysql="delete from vouchermubukanvoucherku where beberkankodevoucher='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data voucher: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data voucher: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;
case "doeosaver":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}
$pesannya="";
$tabletarget="mediaeo"; $loadfromiddata="";

$loadfromiddata=@$getformsdata[0];

if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(((@lihatisikolomtertentu("mediaeo","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="mediaeo"; 
$source4indo="kodeventz||Nama Event||Tagline Event||Lokasi Event||Waktu Event||Durasi Hari (apabila hanya di hari yang sama, isi dengan angka 0)||Detail Event||Maksud dan Tujuan||Sasaran Target||Manfaat||waktuupdate";

$iloopform=0; $formsource=@explode("||",@$source4); $formsource=@explode("||",@$source4); $formsource2=@explode("||",@$source4indo);  $sourceukuran=@explode("||",@$sourceukuran4); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ if (($getformsdata[0]!="")&&($getformsdata[0]!="-"))
{ $setidtosave=@$getformsdata[0];
$query="update `".$tabletarget."` set ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform]."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$getformsdata[(@count($formsource)-1)]."' where ".$formsource[0]."='".$setidtosave."'";
}
else
{ $setidtosave=mengacakstring(md5($getformsdata[2]).md5($getformsdata[3]).md5($getformsdata[4]).md5($getformsdata[5]).md5($waktusebenernyawib),5);
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=0;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `waktuupdate`) VALUES ( '".$setidtosave."', ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform]."',";}
$query.=" '".$getformsdata[(@count($formsource)-1)]."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{ 
$pesannya="Berhasil Menyimpan Data Event";
 $tjngmbr="box/evegate/".@$setidtosave.".jpg";
$tjngmbrold="box/evegate/".@$setidtosave.".jpg";
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ 
if (@file_exists(@$tjngmbrold))
{@unlink($tjngmbrold);}
 if (@move_uploaded_file($tmpName, $tjngmbr))
{@compresszz($tjngmbr, $tjngmbr, 45,500,0);
  $pesannya=$pesannya." dan Foto Event berhasil disimpan\n";}
 }
}
else
{ if (@$getformsdata[3]!=@$oldcat)
 {@rename($tjngmbrold,$tjngmbr);}
}
}
else
{$pesannya="Gagal Menyimpan Data Event";}
}
die($pesannya);
break;

   case "doeonya":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}

$tabletarget="mediaeo"; $loadfromiddata="";

if (empty($_REQUEST["loadfromdata"]))
{$loadfromiddata="-";}
else
{$loadfromiddata=@$_REQUEST["loadfromdata"];}


if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(((@lihatisikolomtertentu("mediaeo","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}

?>

    <script type="text/javascript">
        
        function lakukaneosaver() { 
var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doeosaver&formname=inputandataeoarea",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=produkku';
            return false;
            },
        });

return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukaneosaver(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<?php
$tabletarget="mediaeo"; 
$source4indo="kodeventz||Nama Event||Tagline Event||Lokasi Event||Waktu Event||Durasi Hari (apabila hanya di hari yang sama, isi dengan angka 0)||Detail Event||Maksud dan Tujuan||Sasaran Target||Manfaat||waktuupdate";

$iloopform=0; $formsource=@explode("||",@$source4); $formsource=@explode("||",@$source4); $formsource2=@explode("||",@$source4indo);  $sourceukuran=@explode("||",@$sourceukuran4); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ ?>
<div>
<label >Foto Event *</label><br/>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" name="inputandataeoarea[]" value="<?php $proideas=@lihatisikolomtertentu($tabletarget,"kodeventz",$loadfromiddata,"kodeventz"); echo ($proideas===""?"-":$proideas); ?>" />
<?php $setstatfoto="required";
$forbayar="box/evegate/".@$proideas.".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{ $setstatfoto=""; ?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php };  ?> 
<input type="file" <?php echo $setstatfoto; ?> accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandataeoareafile" /><br/>
</div>
<?php for ($iloopform=1;$iloopform<$iloopformend;$iloopform++)
{ if (($iloopform==0))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';
if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}
}
?>

<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?> *</label><br/>
<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{ $dosetattr="event||".$loadfromiddata."||".$formsource[$iloopform];$dosetattr2="event__".$loadfromiddata."__".$formsource[$iloopform];
?>
<iframe id="editorboxfornews<?php echo $getpartz1; ?>" src="<?php echo $lokasiweb."plugin/summernoteindo/summernoteloader.php?"; ?>editfor=<?php echo $dosetattr; ?>" frameborder="0" style="border:0;width:100%;height: 324px !important;"></iframe>
<textarea id="maintextarea<?php echo @$dosetattr2; ?>" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{ if ($formsource[$iloopform]=="waktueventz")
{  ?>
<input type="date" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>"  >
<?php }
else
{ ?>
<input type="text" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
};
}
?>
</div>
<?php
}
}
if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5))
{ ?>
<div>
<label >Di Selengarakan Oleh: *</label><br/>
<?php $setstatsupply=@lihatisikolomtertentu($tabletarget,"kodeventz",$loadfromiddata,"coresupplyby");
 ?> 
<select class="deweedycustom validate[required]" name="inputandataeoarea[]">
<?php echo '<option value="superuser" >'.$namapt.'</option>';
$querysql="select * from data_pioneerweb where level_akun!='penguna' ";
$countcek=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{$countcek++;
echo '<option value="'.$tampilkanperkolomdata["dataidutama_pioneer"].'" '.@(@$setstatsupply===$tampilkanperkolomdata["dataidutama_pioneer"]?"selected":"").'>'.$tampilkanperkolomdata["nama_lengkap_pioneer"].'</option>'; }
}

?>
</select>
</div>
<?php }
else
{ ?>
 <input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="<?php echo (@$deweedysaghakey1===mengacakstring("mbt2023forall",5)?"superuser":@$deweedysaghakey1); ?>" >    
<?php }; ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="<?php echo $waktusebenernyawib; ?>" >
</div>
</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>

</form>
<?php
break;

case "doeosavervoucher":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}
$pesannya="";
$tabletarget="vouchermubukanvoucherku"; $loadfromiddata="";

$loadfromiddata=@$getformsdata[0];

if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(((@lihatisikolomtertentu("vouchermubukanvoucherku","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="vouchermubukanvoucherku"; 


$iloopform=0; $formsource=@explode("||",@$source5); $formsource=@explode("||",@$source5); 
$sourceukuran=@explode("||",@$sourceukuran3); $setformdisp="";

$setidtosave=@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"beberkankodevoucher");

if ($formsource!="")
{ if (($setidtosave!="")&&($setidtosave!="-"))
{ $setidtosave=@$getformsdata[0];
$query="update `".$tabletarget."` set ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform]."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$getformsdata[(@count($formsource)-1)]."' where ".$formsource[0]."='".$setidtosave."'";
}
else
{ $setidtosave=@$getformsdata[0];
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=0;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `minimnya`) VALUES ( '".$setidtosave."', ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform]."',";}
$query.=" '".$getformsdata[(@count($formsource)-1)]."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{ 
$pesannya="Berhasil Menyimpan Data Voucher";
}
else
{$pesannya="Gagal Menyimpan Data Voucher";}
}
die($pesannya);
break;
case "batastimevoucher":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}
$newsid=@$_REQUEST["loadfromdata"];
$newsberlaku="";
$newsberlaku=@intval(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"durasievent"))+1;
$newsberlaku=@strtotime((@intval($newsberlaku)===0?@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktueventz"):@dapatkantanggaltujuan(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktueventz"),$newsberlaku)));
echo @date("Y-m-d",$newsberlaku);
die();
break;
   case "dokuponan":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{die("");}
$tabletarget="vouchermubukanvoucherku"; $loadfromiddata=$loadfromiddatax="";
if ((empty($_REQUEST["loadfromdata"]))||(@$_REQUEST["loadfromdata"]=="-"))
{$loadfromiddata=@substr(@md5($waktusebenernyawib),0,8); $loadfromiddatax="";}
else
{$loadfromiddata=$loadfromiddatax=@$_REQUEST["loadfromdata"];}
?>
    <script type="text/javascript">
        
function dobuatbataswaktu() { 
jQuery.get("<?php echo $lokasiweb; ?>?docommand=batastimevoucher&loadfromdata="+jQuery("#evethor").val(), function(hasilnya){
if (hasilnya!="")
  {jQuery("#tangalantargets").val(hasilnya);}
return false;
});
}
<?php
if ($loadfromiddatax==""){ ?>
jQuery(document).ready(function(){
  dobuatbataswaktu();
})
<?php }; ?>
        function lakukaneosavervoucher() { 
var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doeosavervoucher&formname=inputanareakuponan",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=produkku';
            return false;
            },
        });

return false;
}
    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukaneosavervoucher(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">

<div>
<label >Kode Voucher</label><br/>
<input type="text" readonly class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @$loadfromiddata; ?>" maxlength="8" >
</div>
<div>
<label >Untuk Event: *</label><br/>
<?php $setstatsupply=@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"kodeventz");
 ?> 
<select class="deweedycustom validate[required]" required name="inputanareakuponan[]" id="evethor" onchange="dobuatbataswaktu();">
<?php 
$querysql="select * from mediaeo where waktueventz > '".date("Y-m-d")."' ";
$countcek=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{$countcek++;
echo '<option value="'.$tampilkanperkolomdata["kodeventz"].'" '.@(@$setstatsupply===$tampilkanperkolomdata["kodeventz"]?"selected":"").'>'.$tampilkanperkolomdata["namaeventz"].'</option>'; }
}
else
{echo '<option value="" >Tidak Ada Data Event</option>';}

?>
</select>
</div>
<div>
<label >Diskon Sebesar</label><br/>
<input type="number" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"potongansebesar"); ?>" maxlength="2" >
</div>
<div>
<label >Kupon Berlaku Hingga</label><br/>
<input type="date" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"beberkanisiheadhingga"); ?>" id="tangalantargets" >
</div>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputanareakuponan[]" value="<?php echo $waktusebenernyawib; ?>" >
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"pioneerygklaim"); ?>" >

<div>
<label >Kuota Voucher</label><br/>
<input type="number" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"kuoatavoucher"); ?>" maxlength="3" >
</div>

<div>
<label >Voucher untuk Produk: *</label><br/>
<?php $setstatsupply=@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"idproduk");
 ?> 
<select class="deweedycustom validate[required]" required name="inputanareakuponan[]">
<?php 
$querysql="select * from coredatas ";
$countcek=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{$countcek++;
echo '<option value="'.$tampilkanperkolomdata["coreurut"].'" '.@(@$setstatsupply===$tampilkanperkolomdata["idproduk"]?"selected":"").'>'.$tampilkanperkolomdata["corename"].'</option>'; }
}
else
{echo '<option value="" >Tidak Ada Data Produk</option>';}

?>
</select>
</div>
<div>
<label >Minumum Belanja</label><br/>
<input type="number" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"minimnya"); ?>" maxlength="2" >
</div>

<div <?php echo (@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"pioneerygklaim")===""?"style='display:none;' ":""); ?>>
<label >Jumlah yang Klaim: <?php echo @count(@explode("||",@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"pioneerygklaim"))); ?></label><br/>
</div>

</div>
</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>
</form>
<?php
break;

case "loaddata2superdo":
if (empty($_REQUEST["nextclue"]))
{die();}

if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna")&&((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="vendor")))&&(@$_REQUEST["nextclue"]=="dataevent"))
{die("");}

if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(@$_REQUEST["nextclue"]=="datavoucher"))
{die("");}

?>
<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>
<span title='Reload' class='caleveact' style='cursor:pointer;padding:9px !important;'  onclick="doloadallmember();">
  <i class='fas fa-recycle'></i>
</span>

<span  title='Add New' class='caleve' style='cursor:pointer;padding:9px !important;'  onclick="doloadeachmember('-');">
  <i class='fas fa-plus'></i>
</span>


<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
<?php
$querysql="";
if (@$_REQUEST["nextclue"]=="datavoucher")
{ $colspander="10"; ?>
        <th width="1px">no</th>         <th width="25%">Kode Voucher</th>         <th width="50%" class="extrasetfordatatables">Nama Event</th> <th width="25%">Nama Produk</th>  <th width="25%" style="text-align: center;">Potongan</th><th width="25%" style="text-align: center;">Kuota</th><th width="25%" class="extrasetfordatatables" style="text-align: center;">Minimal<br/>Belanja</th><th width="25%" class="extrasetfordatatables" style="text-align: center;">Di Klaim</th><th width="25%" class="extrasetfordatatables" style="text-align: center;">Berlaku</th>   <th width="7%">aksi</th> 
<?php
}
else if (@$_REQUEST["nextclue"]=="datakomuter")
{ $colspander="7"; ?>
        <th width="1px">no</th>  <th width="1px">Id Komunitas</th>       <th width="50%">Nama Member</th>         <th width="25%" class="extrasetfordatatables">Status Koin Pi</th> <th width="1">Gender</th> <th width="1px">Level Akun</th>  <th width="7%">aksi</th> 
<?php
}
else if (@$_REQUEST["nextclue"]=="databeritaan")
{ $colspander="5"; ?>
        <th width="1px">no</th>         <th width="50%">Judul Berita</th>         <th width="25%" class="extrasetfordatatables">Headline Hingga</th> <th width="25%">Waktu Update</th>  <th width="7%">aksi</th> 
<?php
}
else
  { $colspander="5"; ?>
        <th width="1px">no</th>         
                         <th width="50%">Nama Event</th>         <th width="10%" class="extrasetfordatatables">Waktu Event</th>         <th width="10%" class="extrasetfordatatables">Durasi Event</th>       
        <?php if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5)) {$colspander="6"; echo '<th width="50%">Nama Penyelenggara</th>';  }; ?>
                                       <th width="7%">aksi</th> 
<?php
}

?>
</tr>
    </thead>
    <tbody>
<?php
if (@$_REQUEST["nextclue"]=="dataevent")
{
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{$querysql=" where coresupplyby='".@$deweedysaghakey1."' ";}

$querysql="select * from mediaeo ".@$querysql." order by waktueventz desc";
}
else if (@$_REQUEST["nextclue"]=="datakomuter")
{$querysql="select * from dataygdikomunitas order by nomor_komunitas asc";}
else if (@$_REQUEST["nextclue"]=="databeritaan")
{$querysql="select * from beberkanlisting order by beberkanpostedat desc";}
else
{$querysql="select *, count(kodeventz) as jumlahnya from vouchermubukanvoucherku group by beberkankodevoucher order by beberkanpostedat desc";}
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
  if (@$_REQUEST["nextclue"]=="datavoucher")
{ $getnamavendor=@lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"namaeventz");
$getnamavendor=($getnamavendor===""?"-":$getnamavendor);
?>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         <td width="25%" id="namaakunnya<?php echo $tampilkanperkolomdata["beberkankodevoucher"]; ?>"><?php echo $tampilkanperkolomdata["beberkankodevoucher"]; ?></td>       <td width="50%" class="extrasetfordatatables"><?php echo $getnamavendor; ?></td>  
        <td width="1px"><?php
$proidx=@$tampilkanperkolomdata["idproduk"];
echo @lihatdetailproduk($proidx,"corename");
$supby=@lihatdetailproduk($proidx,"coresupplyby");
$supby=($supby==="superuser"?@$namapt:"<span style='font-size:80% !important;'>".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$supby,"nama_lengkap_pioneer")."<br/>Kota / Kab: ".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$supby,"alamat_kota_domisili")."</span>")
          ?></td>  

<td width="25%" style="text-align: center;"><?php echo @$tampilkanperkolomdata["potongansebesar"]; ?> %</td><td width="25%" style="text-align: center;"><?php echo @$tampilkanperkolomdata["kuoatavoucher"]; ?></td><td width="25%" class="extrasetfordatatables" style="text-align: center;"><?php echo @$tampilkanperkolomdata["minimnya"]; ?></td><td width="25%" class="extrasetfordatatables" style="text-align: center;"><?php echo @count(@explode("||",@$tampilkanperkolomdata["pioneerygklaim"])); ?></td><td width="25%" class="extrasetfordatatables" style="text-align: center;"><?php echo @date("d F Y",@strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"])); ?></td>

               <td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["beberkankodevoucher"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["beberkankodevoucher"]."');\"></i>"; ?></td> 
      </tr>

<?php
}
else if (@$_REQUEST["nextclue"]=="datakomuter")
{ 
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>
        <td width="1px"><?php echo @$tampilkanperkolomdata["nomor_komunitas"]; ?></td>         
        <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidutama_pioneer"]; ?>"><?php echo @$tampilkanperkolomdata["nama_lengkap_pioneer"]; ?></td>         <td width="25%" class="extrasetfordatatables"><?php echo @$tampilkanperkolomdata["status_koin_pi"]; ?></td>         
                         <td width="1px"><?php echo @ucwords(@$tampilkanperkolomdata["gender_pioneer"]); ?></td>      
                         <td width="1px"><?php echo @ucwords(@$tampilkanperkolomdata["level_akun"]); ?></td>      
<td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["dataidutama_pioneer"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["dataidutama_pioneer"]."');\"></i>"; ?></td>
      </tr>
<?php
}
else if (@$_REQUEST["nextclue"]=="databeritaan")
{ 
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         
                         <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["beberkanurut"]; ?>"><?php echo @$tampilkanperkolomdata["beberkanjudul"]; ?></td>         <td width="25%" class="extrasetfordatatables"><?php echo @date("d F Y",@strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"])); ?></td>         <td width="25%" class="extrasetfordatatables"><?php echo @date("d F Y H:i:s",@strtotime(@$tampilkanperkolomdata["beberkanpostedat"])); ?></td>
<td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["beberkanurut"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["beberkanurut"]."');\"></i>"; ?></td>
      </tr>
<?php
}
else
{ $getnamavendor=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$tampilkanperkolomdata["coresupplyby"],"nama_lengkap_pioneer");
$getnamavendor=($getnamavendor===""?@$namapt:$getnamavendor); 
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         
                         <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["kodeventz"]; ?>"><?php echo @$tampilkanperkolomdata["namaeventz"]; ?></td>         <td width="10%" class="extrasetfordatatables"><?php echo @date("d F Y",@strtotime(@$tampilkanperkolomdata["waktueventz"])); ?></td>         <td width="10%" class="extrasetfordatatables"><?php echo @$tampilkanperkolomdata["durasievent"]; ?></td>       
        <?php if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5)) {$colspander="6"; echo '<td width="50%">'.@$getnamavendor.'</td>';  }; ?>
                                      
<td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["kodeventz"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["kodeventz"]."');\"></i>"; ?></td>
      </tr>
<?php
}
};
}
else
{echo '<tr><td colspan="'.$colspander.'">Tidak Ada Data</td></tr>';}
?>
    </tbody>
  </table>
</div>
  <?php
break;

case "cekvoucheran":
$printerros="0|*|0";
if (!empty($_REQUEST["angkarupiah"]))
{ $angkarupiah=@explode("||",$_REQUEST["angkarupiah"]); 
if (count($angkarupiah)<3)
{die($printerros."|*|-");}
if (empty($deweedysaghakey1))
{die($printerros.(@$angkarupiah[2]===""?"|*|-":"|*|Karena Anda Belum Melakukan Login"));}
if (@$deweedysaghakey1==mengacakstring("pimartnet2023forhumanbeing",5))
{die($printerros."|*|Karena tidak berlaku untuk Super Admin");}
$querysql="select * from vouchermubukanvoucherku where idproduk='".$angkarupiah[0]."' and beberkankodevoucher='".$angkarupiah[2]."'  and pioneerygklaim like '%".$deweedysaghakey1."%'; "; $hitungtotal=0; $susunberita="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $minims=@intval(@$tampilkanperkolomdata["minimnya"]);
    $palingbanter=strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"]);
if (strtotime(date("Y-m-d"))>($palingbanter))
{ die($printerros."|*|Karena cuma berlaku hingga ".@date("d F Y",$palingbanter));}
else
{
if ($angkarupiah[1]<$minims)
{ die($printerros."|*|Karena minimum belanja sebanyak: ".@$minims);}
die(@intval(@$tampilkanperkolomdata["potongansebesar"])."|*|".@$minims."|*| ");
 }; };
};
}
die($printerros."|*|-");
break;



case "dokalulat":
if ((!empty($_REQUEST["angkarupiah"]))&&(intval($_REQUEST["angkarupiah"])>0))
{ $angkarupiah=intval($_REQUEST["angkarupiah"]); $datakurs=@ceksikurus();
echo "1 Dollar Hari ini (sumber Bank Indonesia) : Rp. ".@renominalvalues(@$datakurs)."<br/>";
echo "1 Pi (GCV / Global Consensus Value) Ke Dollar : ".@renominalvalues(@satupi)." $ <br/>";
$pitorupiah = $datakurs * $satupi;
echo "1 Pi (GCV / Global Consensus Value) Ke Rupiah : Rp. ".@renominalvalues(@$pitorupiah)." <br/>";
echo "<br/>Hasil Perhitungan Kalkulator Pi dari Angka Rupiah yang Anda Masukkan : <br/>Rp. ".@renominalvalues(@$angkarupiah)." adalah: <br/><br/>";
echo dohitunganpi($angkarupiah)." Pi ";
}
else
{echo "0";}
die();
break;

case "domodifcartker":
if (!empty($_REQUEST["isian"]))
{ 

$lihatisicart=$proidx=$prokat="";
if (@$deweedysaghakey4!="")
{$lihatisicart=@$deweedysaghakey4;
 $lihatisicart=@explode("|*-*|", @$lihatisicart);
for($iloop=0;$iloop<count($lihatisicart);$iloop++)
{ $proidx=@expimpd(@$lihatisicart[$iloop],"|*|","","3x");
$prokat=@lihatdetailproduk($proidx,"corecategory");
echo "<div class=\"isi\" id='cartboxreorder".md5(@$lihatisicart[$iloop])."'><input id='cartdata".md5(@$lihatisicart[$iloop])."' type='text' style='display:none;' value='".@$lihatisicart[$iloop]."'/> <img class='small' src='".$lokasiweb."box/catalogue/".$prokat."/".@lihatdetailproduk($proidx,"coreid").".jpg'/>  <span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"hapusinfromlist('".md5(@$lihatisicart[$iloop])."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doeditcarts('".md5(@$lihatisicart[$iloop])."','showme');\"></i> Beli: ".@expimpd(@$lihatisicart[$iloop],"|*|","","0x")." - Stok: ".@lihatdetailproduk($proidx,"corestockcount")."</span><span class=\"nomorin\">".($iloop+1)."</span>. ".@lihatdetailproduk($proidx,"corename")."<br/><div style='position:relative !important;'>".printouts(@$proidx,@$lihatisicart[$iloop])."</div></div>";
}
}
else
{echo "<div class='isi'>Keranjang Belanja Anda Kosong</div>";}
}
else
{echo "<div class='isi'>Keranjang Belanja Anda Kosong</div>";}
die();
break;

case "cariyoutube":
$dohijack = hijackyoutube(@$_REQUEST["searchingboxesvideo"]);
if ($dohijack!="")
{ $dohijack=@explode("||",$dohijack);
for ($lops=0;$lops<count($dohijack);$lops++)
{ ?>
<div class="blockvideolist" style="box-shadow:0px 0px 10px 1px rgba(133,3,130,0.8) !important;">
<iframe src="https://www.youtube.com/embed/<?php echo @$dohijack[$lops]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?php
}
}
else
  {echo "Video yang Anda cari tidak ada di channel youtube ".$namapt2;}

die();
break;

case "dostorekeranjang":
if (!empty($_REQUEST["isian"]))
{ 
if ($_REQUEST["isian"]=="kosong")
{@queryuniverse("delete from kantongdoraemon where l0gip4ddr3zz='".ceklogfroms."' ");die();}
  
$deweedysaghakey4=@lihatisikolomtertentu("kantongdoraemon","l0gip4ddr3zz",ceklogfroms,"isidoraemon");
if (@$deweedysaghakey4!="")
{$deweedysaghakey4=@$_REQUEST["isian"];
@queryuniverse("update `kantongdoraemon` set isidoraemon='".$deweedysaghakey4."' where l0gip4ddr3zz='".ceklogfroms."' ");
}
else
{$deweedysaghakey4=@$_REQUEST["isian"];
@queryuniverse("INSERT INTO `kantongdoraemon` (`isidoraemon`, `l0gip4ddr3zz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey4."', '".ceklogfroms."', '".$waktusebenernyawib."'); ");}

}
else
{echo "0";}
die();
break;

case "doregnewone":
$messagings=$gettepmid="";
$messagingsmail="";
if (!empty($_REQUEST["formname"]))
{ if (!empty($deweedysaghakey1))
{if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]!="formdaftar"))
{$gettepmid=@dosavethecoredatas($_REQUEST["formname"]."2","databelanjaanpioner",@$deweedysaghakey1);}
else
{
$gettepmid=@dosavethecoredatas($_REQUEST["formname"],"data_pioneerweb","");};
}
else
{$gettepmid=@dosavethecoredatas($_REQUEST["formname"],"data_pioneerweb","");}
if (substr($gettepmid,0,12)=="Proses Gagal")
{$messagings=$gettepmid;}
else
{
if ((empty($deweedysaghakey1))||(((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]=="formdaftar"))&&(!empty($deweedysaghakey1))))
{ $messagings=@expimpd($gettepmid,"||","","1x")."\n";
$gettepmid=@expimpd($gettepmid,"||","","0x");
$getformsdata2=$_REQUEST["formname"]."file";
$messagingsmail=@loaddoverifikasimail(@$gettepmid);
$messagings=$messagings.(@$messagingsmail===""?"":" dan ".@$messagingsmail." ");

  if (!empty($_FILES[$getformsdata2]))
  {
  $Namafile = $_FILES[$getformsdata2]["name"];
  $tmpName  = $_FILES[$getformsdata2]["tmp_name"];
  $berat = $_FILES[$getformsdata2]["size"];
  $tipedata = $_FILES[$getformsdata2]["type"];
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ $tjngmbr="box/photoexp/".@$gettepmid.".jpg";
if (file_exists($tjngmbr))
{unlink($tjngmbr);}
 if (@move_uploaded_file($tmpName, $tjngmbr))
{$messagings=$messagings." dan gambar Profile berhasil disimpan\n";
@compresszz($tjngmbr, $tjngmbr, 45,500,0);
}
else
{$messagings=$messagings." tapi gambar Profile gagal disimpan\n";}
}
else
{$messagings=$messagings." tapi Gambarnya Tidak diterima oleh sistem informasi kami karena bukan berformat jpg \n";}
};
}
if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]=="formdaftar"))
{
$setidtosave2=@expimpd(@$_POST[@$_REQUEST["formname"]][0],"||","","1x");
  $setidtosave=@expimpd(@$_POST[@$_REQUEST["formname"]][0],"||","","0x");

if ($setidtosave2!="")
{
  if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{ if ($deweedysaghakey1==$setidtosave)
{if ($deweedysaghakey3!=@$_POST[@$_REQUEST["formname"]][3])
{$deweedysaghakey3=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"password_untuk_login");
@queryuniverse("update `deweedysaghal0gg3r` set l0gp4zz='".$deweedysaghakey3."' where l0gip4ddr3zz='".ceklogfroms."' ");
}
if ($deweedysaghakey2!=@$_POST[@$_REQUEST["formname"]][(count(@$_POST[@$_REQUEST["formname"]])-2)])
{$deweedysaghakey2=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"level_akun");
@queryuniverse("update `deweedysaghal0gg3r` set l3v3lupz='".$deweedysaghakey2."' where l0gip4ddr3zz='".ceklogfroms."' ");
};}; }
die($messagings);
}
}
if (empty($deweedysaghakey1))
{$deweedysaghakey1=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"dataidutama_pioneer");
$deweedysaghakey2=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"level_akun");
$deweedysaghakey3=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"password_untuk_login");
@queryuniverse("INSERT INTO `deweedysaghal0gg3r` (`m4inl0gk3y`, `l3v3lupz`, `l0gp4zz`, `l0gip4ddr3zz`, `l0gst4tuz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey1."', '".$deweedysaghakey2."', '".$deweedysaghakey3."', '".ceklogfroms."', 'log1n', '".$waktusebenernyawib."'); ");
};

$messagings=$messagings."\n";
if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]!="formdaftar"))
{$gettepmid=dosavethecoredatas($_REQUEST["formname"]."2","databelanjaanpioner",$gettepmid);}
}
else
{$messagings="";}

if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]!="formdaftar"))
{ $messagingsmail=@kirimdatabelanjaa(@expimpd($gettepmid,"||","","0x"));
$messagings.="".@expimpd($gettepmid,"||","","1x")."\n"."\n".(@$messagingsmail===""?"":" dan ".@$messagingsmail." ")."\n"."\n";
$gettepmid=@expimpd($gettepmid,"||","","0x");
$getformsdata2=$_REQUEST["formname"]."2file";
  if (!empty($_FILES[$getformsdata2]))
  {
  $Namafile = @md5(@md5($_FILES[$getformsdata2]["name"]).@md5($waktusebenernyawib)).".jpg";
  $tmpName  = $_FILES[$getformsdata2]["tmp_name"];
  $berat = $_FILES[$getformsdata2]["size"];
  $tipedata = $_FILES[$getformsdata2]["type"];
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ 
  if (@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar")!="")
 {$tjngmbr="box/buktiupbayar/".@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar");
if ((@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);};
}
$tjngmbr="box/buktiupbayar/".$Namafile;
 if (@move_uploaded_file($tmpName, $tjngmbr))
{$messagings=$messagings." dan gambar Bukti Pembayaran berhasil disimpan\n";
$query="update `databelanjaanpioner` set foto_bukti_bayar='".$Namafile."' where dataidbelanjaan='".$gettepmid."'";
@compresszz($tjngmbr, $tjngmbr, 45,500,0);
@queryuniverse($query);
}
else
{$messagings=$messagings." tapi gambar Bukti Pembayaran gagal disimpan\n";}
}
else
{$messagings=$messagings." tapi Gambarnya Tidak diterima oleh sistem informasi kami karena bukan berformat jpg \n";}
};
}
else
{

if($runonmobile=="mobile")
{ $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{
$messagings=$messagings."|-|".$gettepmid;
}
}

};
};
}
}
else
{$messagings="Proses Gagal, Tidak ada Data untuk disimpan";}
die($messagings);
break;

case "resendemailverifi":
if (!empty($_REQUEST["whatnext"]))
{ echo @loaddoverifikasimail(@$_REQUEST["whatnext"]); }
die();
break;

case "dorenom":
if ((!empty($_REQUEST["angkarupiah"]))&&(intval($_REQUEST["angkarupiah"])>0))
{ $angkarupiah=intval($_REQUEST["angkarupiah"]);
echo @renominalvalues($angkarupiah);
}
else
{echo "0";}
die();
break;


case "doreloadeventdata":

if (empty($_REQUEST["loadcontent"]))
{ die(); }
else
{ $newsid=@$_REQUEST["loadcontent"]; };
$newsid=@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"kodeventz");
if ($newsid=="")
{$newsjudul="No Event to Show";}
$newsberlaku=@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"durasievent");
$newsberlaku=@strtotime((@intval($newsberlaku)===0?@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktueventz"):@dapatkantanggaltujuan(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktueventz"),$newsberlaku)));

if ($newsberlaku>=@strtotime(date("Y-m-d")))
{
$newsjudul=($newsid===""?"No Event to Show":@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"namaeventz"));
$newsjudul=$newsjudul."<br/><br/><span style='font-size:50% !important;'>Event : ".@date("d F Y",strtotime(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktueventz"))).(@intval(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"durasievent"))===0?"":" - ".@date("d F Y",$newsberlaku))."</span>";

$newsisi=($newsid===""?"":@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"keterbelakang"));
$tjngmbr=$addingdetails="";
if ($newsisi!="")
{$tjngmbr="box/evegate/".@$newsid.".jpg";
if (file_exists($tjngmbr))
{ $tjngmbr="<div class='clipklab'><img src='".$lokasiweb.$tjngmbr."' /></div>"; }
else
{$tjngmbr="";}

$addingdetails="<br/><table style='width:100%;'><tr><td><div class='eventblocx'><table style='width:100%;'><tr><td><h3>Maksud &amp; Tujuan</h3></td></tr><tr><td>".@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"ketermaksud")."</td></tr></table></div>";
$addingdetails.="<div class='eventblocx'><table style='width:100%;'><tr><td><h3>Sasaran</h3></td></tr><tr><td>".@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"ketersasar")."</td></tr></table></div>";
$addingdetails.="<div class='eventblocx'><table style='width:100%;'><tr><td><h3>Manfaat</h3></td></tr><tr><td>".@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"keterman")."</td></tr></table></div></td></tr></table>";
}
$newsisi=$tjngmbr.$newsisi.$addingdetails;
$newsisi=@expimpd($newsisi,"<li>",'<li><i aria-hidden="true" class="fas fa-check"></i> ');
$tombolhadirkeun=$cekhadirkeun=$susunulanghadirkeun="";
if ((!empty($deweedysaghakey1))&&(@lihatisikolomtertentu("dataygdikomunitas","dataidutama_pioneer",@$deweedysaghakey1,"dataidutama_pioneer")!=""))
{ if (@lihatisikolomtertentu("dataygdikomunitas","dataidutama_pioneer",@$deweedysaghakey1,"status_pioneer")=="aktif")
{ $cekhadirkeun=@lihatisikolomtertentu("","","","dataidutama_pioneer"," select * from pendaftareo where kodeventz='".@$newsid."' and dataidutama_pioneer='".@$deweedysaghakey1."'");
$pioneerygklaim=@lihatisikolomtertentu("dataygdikomunitas","dataidutama_pioneer",@$deweedysaghakey1,"dataidutama_pioneer");
$querysql="select * from vouchermubukanvoucherku where kodeventz='".@$newsid."' "; 
$jmltotal=queryuniverse($querysql,"num");
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{ while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{
$tombolhadirkeun=@lihatisikolomtertentu("","","","pioneerygklaim"," select * from vouchermubukanvoucherku where beberkankodevoucher='".@$tampilkanperkolomdata["beberkankodevoucher"]."' and pioneerygklaim like '%".@$deweedysaghakey1."%' ");
if (($tombolhadirkeun!="")&&($cekhadirkeun==""))
{ $tombolhadirkeun=@explode("||",$tombolhadirkeun);
for ($iloop=0;$iloop<count($tombolhadirkeun);$iloop++)
{ if ($tombolhadirkeun[$iloop]==@$pioneerygklaim)
{continue;};
  $susunulanghadirkeun.="||".$tombolhadirkeun[$iloop];}
$susunulanghadirkeun=@substr($susunulanghadirkeun, 2);
$query="update `vouchermubukanvoucherku` set pioneerygklaim='".$susunulanghadirkeun."' where beberkankodevoucher='".@$tampilkanperkolomdata["beberkankodevoucher"]."'";
@queryuniverse($query);
}
}; }
$hitungtotalkuota=@intval(@lihatisikolomtertentu("vouchermubukanvoucherku","kodeventz",@$newsid,"kuoatavoucher"));
$hitungsisavoucher=@count(@explode("||",@lihatisikolomtertentu("vouchermubukanvoucherku","kodeventz",@$newsid,"pioneerygklaim")));
if ($hitungsisavoucher<$hitungtotalkuota)
{ $cekhadirkeun=@lihatisikolomtertentu("","","","dataidutama_pioneer"," select * from pendaftareo where kodeventz='".@$newsid."' and dataidutama_pioneer='".@$deweedysaghakey1."'");
$tombolhadirkeun=@lihatisikolomtertentu("","","","pioneerygklaim"," select * from vouchermubukanvoucherku where kodeventz='".@$newsid."' and pioneerygklaim like '%".@$deweedysaghakey1."%' ");
if (($tombolhadirkeun=="")&&($cekhadirkeun==""))
{   $tombolhadirkeun="<div><p><span class=\"pigoldbutton\" onclick=\"sayahadirkeun('".@$deweedysaghakey1."','".@$newsid."');\" style=\"cursor: pointer;padding:2px 5px;\">Absensi Kehadiran</span></p>
<div id='boxforloadqr'></div>
</div>"; }
}
};
}
$gettidsup=@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"coresupplyby");
  if ($gettidsup!="superuser")
  { $gettidsup=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$gettidsup,"nama_lengkap_pioneer");  }
  else
  {$gettidsup=@$namapt;}
$newspostedat=($newsid===""?"":$tombolhadirkeun."<p style='font-size:11px !important;'>Posted at: ".@date("d M Y -  H:i:s",@strtotime(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktuupdate")))." - Diadakan oleh: ".$gettidsup."</p>");
}
else
{$newspostedat=$newsisi=""; $newsjudul="Event Sudah Tidak Berlaku";}

if (!empty($_REQUEST["loadisinya"]))
{
echo $newsisi;
echo $newspostedat;
  die();
}
?>
<script type="text/javascript">jQuery(document).ready(function() {
jQuery("#eventjuduls").html("<?php echo $newsjudul; ?>");
jQuery("#eventcontainers").load('<?php echo $lokasiweb; ?>?docommand=doreloadeventdata&loadisinya=ya&loadcontent=<?php echo @$_REQUEST["loadcontent"]; ?>');
})

</script>

<?php
die();
break;


case "dorecheckusername":
if (!empty($_REQUEST["angkarupiah"]))
{ $angkarupiah=$_REQUEST["angkarupiah"];
$isloggin="";
if (!empty($deweedysaghakey1))
{$isloggin=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"username");}

if ($isloggin!=$angkarupiah)
{
if (@lihatisikolomtertentu("data_pioneerweb","username",@$angkarupiah,"username")!="")
{echo "Username : ".$angkarupiah." sudah ada, silahkan diubah";}

}

}
else
{echo "";}
die();
break;


case "dorecheckidmember":
if (!empty($_REQUEST["angkarupiah"]))
{ $angkarupiah=@substr($_REQUEST["angkarupiah"],0,-1);
$isloggin="";
if (!empty($deweedysaghakey1))
{$isloggin=@lihatisikolomtertentu("dataygdikomunitas","dataidutama_pioneer",@$deweedysaghakey1,"nomor_komunitas");}

if ($isloggin!=$angkarupiah)
{
if (@lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",@$angkarupiah,"nomor_komunitas")!="")
{echo "Nomor Komunitas : ".$angkarupiah." sudah ada, silahkan diubah";}
}
}
else
{echo "";}
die();
break;

case "loadnexteos":
if ((!empty($_REQUEST["whatnext"]))&&(intval($_REQUEST["whatnext"])>0))
{ $querysql="";

  $querysql="select * from mediaeo  order by waktueventz asc " ; $hitungtotal=intval($_REQUEST["whatnext"]);
$jmltotal=$hitungnext=0;$hitungnext=(intval($_REQUEST["whatnext"])-2);
$jmltotal=queryuniverse($querysql,"num");
$querysql=$querysql." limit ".$hitungtotal.",3"; 
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{
?> 
<?php while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ 
  $newsberlaku=@$tampilkanperkolomdata["durasievent"];
$newsberlaku=@strtotime((@intval($newsberlaku)===0?@$tampilkanperkolomdata["waktueventz"]:@dapatkantanggaltujuan(@$tampilkanperkolomdata["waktueventz"],$newsberlaku)));
if ($newsberlaku>=@strtotime(date("Y-m-d")))
{ ?><li id='toappended<?php echo $hitungnext; ?>' class="toappended"><a href='<?php echo $lokasiweb; ?>?page=event&loadcontent=<?php echo @$tampilkanperkolomdata["kodeventz"]; ?>' data-level='1'>
<div><?php echo @$tampilkanperkolomdata["namaeventz"]; ?></div>
</a></li>
<?php };
$hitungtotal++; $hitungnext++; 
}; ?>

<script type="text/javascript">
    tempcluecount=<?php echo $hitungtotal; ?>;
</script>
<?php } else {echo "";
}
}
break;

case "loadnextnews":
if ((!empty($_REQUEST["whatnext"]))&&(intval($_REQUEST["whatnext"])>0))
{$querysql="select * from beberkanlisting order by beberkanpostedat desc"; $hitungtotal=intval($_REQUEST["whatnext"]);
$jmltotal=$hitungnext=0;$hitungnext=(intval($_REQUEST["whatnext"])-2);
$jmltotal=queryuniverse($querysql,"num");
$querysql=$querysql." limit ".$hitungtotal.",3"; 
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{
?> 
<?php while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ 
?><li id='toappended<?php echo $hitungnext; ?>' class="toappended"><a href='<?php echo $lokasiweb; ?>?page=berita&loadcontent=<?php echo @$tampilkanperkolomdata["beberkanurut"]; ?>' data-level='1'>
<div><?php echo @$tampilkanperkolomdata["beberkanjudul"]; ?></div>
</a></li>
<?php $hitungtotal++; $hitungnext++; }; ?>

<script type="text/javascript">
    tempcluecount=<?php echo $hitungtotal; ?>;
</script>
<?php } else {echo "";
}
}
break;

     case "sendontanya":

$companynames=@$namapt;
$pembuat=@$alamatemail;
$judulsurat="E-Mail Pemberitahuan Ada yang bertanya di website ".$namawebsite;
$muatisiemail='<html>
<head><title>'.$judulsurat.'</title></head>
<body>
<div style="width:81%;text-align:center;margin:0px auto 27px auto;"><h1 style="font-weight:bold;margin-bottom:50px;text-shadow:0px 0px 1px #eaeaea; color:#00;">ARGYA Media Pro</h1>';
$muatisiemail.='Terima Kasih Anda telah mengunjungi website kami, dibawah ini adalah detail pertanyaan yand diajukan:
<div style="width:100%;border-top:1px solid #aaa;margin:9px auto;padding-top:9px;text-align:left;">
<div style="width:72%;margin:0 auto 9px auto;">
-. Nama : '.$getformsdata[0].'<br/><br/>-. No Telp : '.$getformsdata[1].'<br/><br/>-. Email : '.$getformsdata[2].'<br/><br/>-. Alamat : '.$getformsdata[3].'<br/><br/>-. Pertanyaan yang diajukan : '.$getformsdata[4].'<br/><br/></div>';
$muatisiemail.='<p>Demikian '.$judulsurat.' dibuat sebagai laporan kontak Anda dan staff kami akan segera menghubungi Anda melalui whatsapp</p><br/><br/>Bekasi, '.date("d F Y").' - '.$namawebsite.'</div></div></body></html>';
$mailit = @mailcreator($pembuat,"System Admin - ".$companynames,$judulsurat,$muatisiemail,@$alamatemail,"Team ".$namapt,"To","html");
$mailit = @mailcreator($pembuat,"System Admin - ".$companynames,$judulsurat,$muatisiemail,$getformsdata[2],$getformsdata[0],"To","html");
if ($mailit)
{die("Pertanyaan Berhasil dikirim, Staff kami akan segera memproses pertanyaan Anda");}
else  
{die("Pengiriman pertanyaan Gagal, silahkan dicoba di lain waktu");}

break;

case "loadmemberdataallbelanjaaan":
?>
<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>
<?php
$datasample1="";$dipilihnyabulan=$dipilihnyabulan2="";
if (!empty($_REQUEST["selectedmonth"]))
  {$dipilihnyabulan=@expimpd(@$_REQUEST["selectedmonth"],"-","","1x");$dipilihnyabulan2=@expimpd(@$_REQUEST["selectedmonth"],"-","","0x");}
else
{$dipilihnyabulan=date("m");$dipilihnyabulan2=date("Y");};
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna"))
{ if (!empty($_REQUEST["loadid"]))
{$datasample1=$_REQUEST["loadid"];
echo "<input type=\"button\" style=\"float:right !important;margin-left:5px;\" class=\"caleve\" onclick=\"doloadallmember('".$dipilihnyabulan."');\" value=\"Muat Keseluruhan\"/>";
}; }
?>
<span title='Reload' class='caleveact' style='cursor:pointer;padding:9px !important;float:right;'  onclick="milihdong(<?php echo "'".@$datasample1."'"; ?>);">
  <i class='fas fa-recycle'></i>
</span>
<select id="pilihanlaporan" onchange="milihdong(<?php echo "'".@$datasample1."'"; ?>);">
<?php
 $bulannya=explode("-", $nama2bulan); $ibulanx="";
for ($ibulan=1;$ibulan<count($bulannya);$ibulan++)
{  $ibulanx=($ibulan<10?"0":"").$ibulan;
echo "<option value=\"".$ibulanx."\" ".($ibulanx===$dipilihnyabulan?"selected":"").">Bulan: ".$bulannya[$ibulan]."</option>";
}
?>
</select>
<select id="pilihanlaporan2" onchange="milihdong(<?php echo "'".@$datasample1."'"; ?>);">
<?php
for ($tahuns=2022;$tahuns<=date("Y");$tahuns++)
{  
echo "<option value=\"".$tahuns."\" ".($tahuns===@intval(@$dipilihnyabulan2)?"selected":"").">".$tahuns."</option>";
}
$dipilihnyabulan=$dipilihnyabulan2."-".$dipilihnyabulan;
?>
</select>
<br/>
<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
        <th width="1px">no</th>
  <?php if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna") { ?>
    <th width="99%">Status Belanja</th>
        <th width="1px" class="extrasetfordatatables">Jumlah</th>
   <?php }
  else
    { ?><th width="40%">Nama Pioneer</th>
        <th width="1px" class="extrasetfordatatables">JK</th>
        <?php
        $loadstats=@explode("||",$allstatustrans);
        for ($iloop=0;$iloop<count($loadstats);$iloop++) {
        echo '<th width="25%">'.@expimpd($loadstats[$iloop],"-"," ").'</th>';
        }
      }; ?>
      </tr>
    </thead>
    <tbody>
<?php if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna"))
{ $colspanner=3+(@count($loadstats)); }
else
{$colspanner=3;}
if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")
{         @queryuniverse("CREATE TABLE tablesementara select a.coresupplyby,b.* from coredatas a join databelanjaanpioner b ON b.yang_dibeli LIKE CONCAT('%|*|', a.coreurut ,'%') where (a.coresupplyby = '".@$deweedysaghakey1."' or b.dataidutama_pioneer='".@$deweedysaghakey1."') and b.tanggal_belanja like '%".$dipilihnyabulan."-%' group by b.dataidbelanjaan order by b.dataidbelanjaan asc");}

$querysql="";
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna"))
{ if (!empty($_REQUEST["loadid"]))
{$querysql=" where dataidutama_pioneer='".@$_REQUEST["loadid"]."' ";}
$querysql="select * from data_pioneerweb ".$querysql." order by dibuatsaat desc";
}
else
{$querysql="select * from databelanjaanpioner where dataidutama_pioneer='".@$deweedysaghakey1."' group by 'dataidutama_pioneer' order by tanggal_belanja desc";}
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ 
?>
        <?php
        if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna"))
        { $urutkan++; ?>
        <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>
        <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidutama_pioneer"]; ?>"><?php echo $tampilkanperkolomdata["nama_lengkap_pioneer"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["gender_pioneer"]; ?></td>
        <?php
        $loadstats=@explode("||",$allstatustrans);
        for ($iloop=0;$iloop<count($loadstats);$iloop++) {

        $subquery=(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")==="vendor"?"tablesementara":"databelanjaanpioner");

        $subquery="select *, count(status_pembayaran) as jumlahnya from ".$subquery." where dataidutama_pioneer='".$tampilkanperkolomdata["dataidutama_pioneer"]."' and status_pembayaran='".$loadstats[$iloop]."' and tanggal_belanja like '%".$dipilihnyabulan."-%' group by status_pembayaran order by tanggal_belanja desc ;";

        $angker=@intval(@lihatisikolomtertentu("","","","jumlahnya",$subquery));
        echo '<td width="25%" style="text-align:center;">'.($angker===0?"":"<span style=\"cursor:pointer;\" onclick=\"muatdescnya('".$tampilkanperkolomdata["dataidutama_pioneer"]."','".$loadstats[$iloop]."','".$dipilihnyabulan."');\">").$angker.($angker===0?"":"</span>").'</td>';
        }; ?></tr><?php
        }
        else
          {         $loadstats=@explode("||",$allstatustrans);
        for ($iloop=0;$iloop<count($loadstats);$iloop++) {
          $urutkan++; echo "<tr>"; ?>
        
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td><td width="99%"><?php echo @expimpd($loadstats[$iloop],"-"," "); ?></td>
        <?php
        $subquery="select *, count(status_pembayaran) as jumlahnya from databelanjaanpioner where dataidutama_pioneer='".$tampilkanperkolomdata["dataidutama_pioneer"]."' and status_pembayaran='".$loadstats[$iloop]."' and tanggal_belanja like '%".$dipilihnyabulan."-%' group by status_pembayaran order by tanggal_belanja desc ;";

        $angker=@intval(@lihatisikolomtertentu("","","","jumlahnya",$subquery));
        echo '<td width="1px" style="text-align:center;">'.($angker===0?"":"<span style=\"cursor:pointer;\" onclick=\"muatdescnya('".$tampilkanperkolomdata["dataidutama_pioneer"]."','".$loadstats[$iloop]."','".$dipilihnyabulan."');\">").$angker.($angker===0?"":"</span>").'</td>'; echo "</tr>"; }
        }
        ?>

  
<?php
}
}
else
{echo '<tr><td colspan="'.$colspanner.'">Tidak Ada Data</td></tr>';}
if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")
{ @queryuniverse("drop table tablesementara"); }

?>

    </tbody>
  </table>
</div>
  <?php
break;

case "loadmemberdataallform":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="admin"))
{die("");}
?>
<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>
<span title='Reload' class='caleveact' style='cursor:pointer;padding:9px !important;'  onclick="doloadallmember();">
  <i class='fas fa-recycle'></i>
</span>

<span  title='Add New' class='caleve' style='cursor:pointer;padding:9px !important;'  onclick="doloadeachmember('-');">
  <i class='fas fa-plus'></i>
</span>

<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
        <th width="1px">no</th>
        <th width="50%">Nama Pioneer</th>
        <th width="25%" class="extrasetfordatatables">Username</th>
        <th width="1px" class="extrasetfordatatables">JK</th>
        <th width="1px" class="extrasetfordatatables">Telp</th>
        <th width="10%" class="extrasetfordatatables">Tipe</th>
        <th width="10%" class="extrasetfordatatables">status</th>
        <th width="7%">aksi</th>
      </tr>
    </thead>
    <tbody>
<?php
$querysql="select * from data_pioneerweb order by dibuatsaat desc";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>
        <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidutama_pioneer"]; ?>"><?php echo $tampilkanperkolomdata["nama_lengkap_pioneer"]; ?></td>
        <td width="25%" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["username"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["gender_pioneer"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["nomor_telpon_pioneer"]; ?></td>
        <td width="10%" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["level_akun"]; ?></td>
        <td width="10%" class="extrasetfordatatables"><?php echo @expimpd($tampilkanperkolomdata["status_pioneer"],"-"," "); ?></td>
        <td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["dataidutama_pioneer"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["dataidutama_pioneer"]."');\"></i>"; ?></td>
      </tr>

<?php
}
}
else
{echo '<tr><td colspan="8">Tidak Ada Data</td></tr>';}
?>

    </tbody>
  </table>
</div>
  <?php
break;

case "dosomethingunholybelanjaan":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="admin"))
{die("");}
if ((empty($_REQUEST["loadfromdata"]))||((!empty($_REQUEST["loadfromdata"]))&&((@$_REQUEST["loadfromdata"]=="a4e5bc9459c6eeaa9fb3f4902ca90845")||(@$_REQUEST["loadfromdata"]==@$deweedysaghakey1))))
{die("");}
$tjngmbr="box/buktiupbayar/".@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$_REQUEST["loadfromdata"],"foto_bukti_bayar");
if ((@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$_REQUEST["loadfromdata"],"foto_bukti_bayar")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$_REQUEST["loadfromdata"],"dataidutama_pioneer"),"nama_lengkap_pioneer");

$querysql="delete from databelanjaanpioner where dataidbelanjaan='".@$_REQUEST["loadfromdata"]."' ";

$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data belanja dari pioneer bernama: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data belanja dari  pioneer bernama: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;

case "waduhjanganlupa":
$messagings=$gettepmid=$messagingsmail="";
if (!empty($_REQUEST["dests"]))
{
$gettepmid=$_REQUEST["dests"];
$messagingsmail=@loadusrnameforforgot(@$gettepmid);
}
die($messagingsmail);
break;

case "kirimindependen":
$messagings=$gettepmid=$messagingsmail="";
if (!empty($_REQUEST["dests"]))
{
$gettepmid=$_REQUEST["dests"];
$gettepmid=(@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"dataidbelanjaan")===""?"":$gettepmid);
if ($gettepmid=="")
{die();}
$messagingsmail=@kirimdatabelanjaa(@$gettepmid);
}
die((@$_REQUEST["doitforkonfirmasi"]==="ya"?"Pembayaran Terkonfirmasi, Status Pembayaran Lunas, dan ":"").$messagingsmail);
break;

case "doupdatebelanjaan":
$messagings=$gettepmid=$messagingsmail="";
if (!empty($_REQUEST["formname"]))
{ if (!empty($deweedysaghakey1))
{
$gettepmid=@$_POST[$_REQUEST["formname"]][0];

$gettepmid=(@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"dataidbelanjaan")===""?"":$gettepmid);
if ($gettepmid=="")
{die();}
$messagingsmail=@kirimdatabelanjaa(@$gettepmid);
$gettepmid=@dosavethecoredatas($_REQUEST["formname"],"databelanjaanpioner",@$gettepmid);
}
else
{die();}

$messagings.="".@expimpd($gettepmid,"||","","1x")."\n"."\n".(@$messagingsmail===""?"":" dan ".@$messagingsmail." ")."\n"."\n";
$gettepmid=@expimpd($gettepmid,"||","","0x");
$getformsdata2=$_REQUEST["formname"]."file";
  if (!empty($_FILES[$getformsdata2]))
  {
  $Namafile = @md5(@md5($_FILES[$getformsdata2]["name"]).@md5($waktusebenernyawib)).".jpg";
  $tmpName  = $_FILES[$getformsdata2]["tmp_name"];
  $berat = $_FILES[$getformsdata2]["size"];
  $tipedata = $_FILES[$getformsdata2]["type"];
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ 
  if (@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar")!="")
 {$tjngmbr="box/buktiupbayar/".@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar");
if ((@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);};
}
$tjngmbr="box/buktiupbayar/".$Namafile;
 if (@move_uploaded_file($tmpName, $tjngmbr))
{$messagings=$messagings." dan gambar Bukti Pembayaran berhasil disimpan\n";
$query="update `databelanjaanpioner` set foto_bukti_bayar='".$Namafile."' where dataidbelanjaan='".$gettepmid."'";
@compresszz($tjngmbr, $tjngmbr, 45,500,0);
@queryuniverse($query);
}
else
{$messagings=$messagings." tapi gambar Bukti Pembayaran gagal disimpan\n";}
}
else
{$messagings=$messagings." tapi Gambarnya Tidak diterima oleh sistem informasi kami karena bukan berformat jpg \n";}
};
}

}
else
{$messagings="Proses Gagal, Tidak ada Data untuk disimpan";}
die($messagings);
break;


   case "loaddeliverdetails":
$tabletarget="databelanjaanpioner"; $loadfromiddata="";
$printerrors="<div style='padding:5px;'>No Data To Show &nbsp;".'<input type="button" class="caleveact" onclick="doloadallmember();" value="reload"/>'."</div>";
if (empty($_REQUEST["loadfromdata"]))
{die($printerrors);}
$loadfromiddata=@$_REQUEST["loadfromdata"];

if (@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"dataidbelanjaan")=="")
{die($printerrors);};

$loadfromiddatax=@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"dataidutama_pioneer");
if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$loadfromiddatax,"dataidutama_pioneer")=="")
{ $tjngmbr="box/buktiupbayar/".@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar");
if ((@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);}
$querysql="delete from databelanjaanpioner where dataidbelanjaan='".@$loadfromiddata."' ";
queryuniverse($querysql);
  die($printerrors);};
?>

<div id="boxofasalnya2" style='display:none !important;'>
<?php

$iloopform=0; $formsource=@explode("||",@$source1); $sourceukuran=@explode("||",@$sourceukuran1); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ for ($iloopform=0;$iloopform<$iloopformend;$iloopform++)
{
if (($iloopform==0)||($iloopform==1))
{$setformdisp=(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$loadfromiddatax,"level_akun")==="admin"?"":'style="display: none;" readonly');}
else
{$setformdisp=' required dochangeattr="form" ';

if (($iloopform>7)&&($iloopform<15))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.$iloopform.'" ';}

}
?>
<div <?php echo $setformdisp; ?>>
<label ><?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> *</label><br/>

<?php
if ($iloopform==6)
{    ?>

    <input type="email" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" value="<?php echo @lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==5)
{    ?>
<select class="deweedycustom validate[required]" name="inputandata[]">
        <option value="pria" >Pria</option>
    <option value="wanita" <?php echo @(@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,$formsource[$iloopform])==="wanita"?"selected":""); ?>>Wanita</option>
</select>
    <?php
}
else if ($iloopform==0)
{    ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="" name="inputandata[]" value="<?php echo (@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"dataidutama_pioneer")===""?"-":@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"dataidutama_pioneer")); ?>" >
    <?php
}
else if ($iloopform==3)
{    ?>
    <input type="password" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" value="<?php echo @lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==1)
{   if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$loadfromiddatax,"level_akun")=="admin") { ?>
<div>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom validate[required]" name="inputandata[]">
        <option value="tidak-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php @(@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"status_pioneer")==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="aktif" <?php @(@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"status_pioneer")==="aktif"?"selected":""); ?>>Aktif</option>
</select>
</div>
<?php } else { ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="" name="inputandata[]" value="<?php echo (@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"status_pioneer")===""?"unverified":@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"status_pioneer")); ?>" >
<?php }; 
}
else
{
    $ukuranforms=@intval($sourceukuran[$iloopform]);
    if ($ukuranforms>255)
    {
    ?>
    <textarea <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" ><?php echo @lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,$formsource[$iloopform]); ?></textarea>
    <?php
    }
    else
    {
    ?>
    <input type="text" class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" value="<?php echo @lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>">
    <?php
    }
}

?>
</div>
<?php
}
}
?>
<?php if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$loadfromiddatax,"level_akun")=="admin") { ?>
<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom validate[required]" name="inputandata[]">
        <option value="penguna" >User App</option>
    <option value="admin" <?php @(@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"level_akun")==="admin"?"selected":""); ?>>Admin</option>
</select>
</div>

<div <?php echo @$setformdisp; ?>>
<label >Waktu Update : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu("data_pioneerweb",$formsource[0],$loadfromiddatax,"dibuatsaat")));?> *</label><br/><br/>

</div>
<?php } else { ?>

<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata[]" value="penguna" >

<?php } ?>

<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata[]" value="<?php echo $waktusebenernyawib; ?>" >

<?php
if (empty($deweedysaghakey1))
{ ?>
<div>
<label >Foto Profil *</label><br/>
<?php
$forbayar="box/photoexp/".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$loadfromiddatax,"dataidutama_pioneer").".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{ $reqforphoto="";
?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php } else { $reqforphoto="required"; } ?>
<input type="file" <?php echo $reqforphoto; ?> accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandatafile" ><br/>
</div>
<?php }; ?>
</div>
<div id="boxofdefault2" style="display: none;">
<?php
$tabletarget="databelanjaanpioner"; 
$iloopform=0; $formsource=@explode("||",@$source2); $sourceukuran=@explode("||",@$sourceukuran2); $setformdisp="";
$iloopformend=@intval(@count($formsource))-5;
if ($formsource!="")
{ for ($iloopform=0;$iloopform<$iloopformend;$iloopform++)
{
if (($iloopform==0)||($iloopform==1)||($iloopform==($iloopformend-1)))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';

if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}
}
if (@$formsource[$iloopform]=="keterangan_belanjaan")
  {continue;}
?>
<?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"</div><div>":""); ?>
<div <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?>>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":"* "); ?></label><br/>

<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{
?>
<textarea <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{
?>
<input type="text" <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
}
?>
</div>
<?php
}
}
?>
</div>
    <script type="text/javascript">
        
        function lakukandaftar() { 

var formData = new FormData(jQuery("#formdaftarindaftar")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doupdatebelanjaan&formname=inputandatamemberarea",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            <?php $datasample1="";
            if ((!empty($_REQUEST["loadid"]))&&(!empty($_REQUEST["loadfor"]))&&(!empty($_REQUEST["selectedmonth"])))
            {$datasample1=@$_REQUEST["loadid"];echo "muatdescnya('".@$_REQUEST["loadid"]."','".@$_REQUEST["loadfor"]."','".@$_REQUEST["selectedmonth"]."');"; }
            else
            {echo "doloadallmember();"; } ?>
//            window.location.href='<?php echo $lokasiweb; ?>?page=produkku';
            return false;
            },
        });

return false;
}

    </script>

            <?php if ((!empty($_REQUEST["loadid"]))&&(!empty($_REQUEST["loadfor"]))&&(!empty($_REQUEST["selectedmonth"])))
            {echo '<div style="padding:8px;width: 100%;border-bottom:1px solid #cacaca;"><span style="float:right;">Status Pembayaran: '.@expimpd($_REQUEST["loadfor"],"-"," ").'</span>Nama Pioneer: '.@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$datasample1,"nama_lengkap_pioneer").'</div>'; }; ?>

<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarindaftar" onsubmit="lakukandaftar(); return false;">
<div class="form-fields">
<?php $tabletarget="databelanjaanpioner";$formsource=@explode("||",@$source2); $apastatusnyadibayar=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pembayaran"); ?>
<div style="<?php echo (@$apastatusnyadibayar==="belum-dibayar"?"":"display: none;"); ?>"><br/>
<select class="deweedycustom validate[required]" id="selectors2" onchange="<?php echo (@$apastatusnyadibayar==="belum-dibayar"?"showtujuanform2();":""); ?>">
        <option value="beda" >Tujuan Pengiriman Berbeda dengan domisili</option>
        <option value="sama" >Tujuan Pengiriman Sama dengan domisili</option>
</select>
<br/><br/>
</div>
<?php if (@$apastatusnyadibayar!="belum-dibayar")
{ ?> 
<script type="text/javascript">
  jQuery(document).ready(function() {

jQuery("#boxformtujuans2 input[forformaddress]").attr("readonly","readonly");
jQuery("#boxformtujuans2 textarea").attr("readonly","readonly");

  })
</script>
<?php }
?>

<div class="contentboxsforall" style="width:100%;min-height: 100px;">

<div id="boxformtujuans2">
<?php
$tabletarget="databelanjaanpioner"; 
$iloopform=0; $formsource=@explode("||",@$source2); $sourceukuran=@explode("||",@$sourceukuran2); $setformdisp="";
$iloopformend=@intval(@count($formsource))-5;
if ($formsource!="")
{ for ($iloopform=0;$iloopform<$iloopformend;$iloopform++)
{
if (($iloopform==0)||($iloopform==1)||($iloopform==($iloopformend-1)))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';

if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}

}
?>
<?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"</div><div>":""); ?>
<div <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?>>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":"* "); ?></label><br/>

<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{
?>
<textarea <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{
?>
<input type="text" <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
}
?>
</div>
<?php
}
}
?>
</div>
<textarea style="width: 100%;min-height: 100px;display: none;opacity: 0;" id="produkfikasi" name="inputandatamemberarea[]"><?php echo @lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$loadfromiddata,"yang_dibeli"); ?></textarea>
<script type="text/javascript">

  function dorecustomstats() {
 var tampungprodukfikasi = jQuery("#produkfikasi").val();
 tampungprodukfikasi=tampungprodukfikasi.split("|*-*|");

        var xlop=0;var xlop2=1; var xlop3=0;
        var akhirnya=tampungprodukfikasi.length;
      var buatsusunanpartai="";var buatsusunanpartaix=0;
for (xlop=0;xlop<akhirnya;xlop++)
      { 
        buatsusunanpartai=buatsusunanpartai+"|*-*|"+jexpimp(tampungprodukfikasi[xlop],"|*|","","0x")+"|*|"+jexpimp(tampungprodukfikasi[xlop],"|*|","","1x")+"|*|"+jexpimp(tampungprodukfikasi[xlop],"|*|","","2x")+"|*|"+jexpimp(tampungprodukfikasi[xlop],"|*|","","3x")+"|*|"+jQuery(".recustomstats").eq(xlop).val();
      }
if (buatsusunanpartai!="")
  {buatsusunanpartai=buatsusunanpartai.substring(5);
  }
  jQuery("#produkfikasi").val(buatsusunanpartai);
var xxlop=0;
var jumlahbarux=0;
var alltotalonrpx=0; 
var alltotalonpix=0; 
var kenaongkiranx=""; 
var kenaongkiranx2="";
var buatsusunanx="";var buatsusunanxlama=""; var susununtukdetailtransferx="";
buatsusunanx=jQuery("#produkfikasi").val();
var xxlop=0;
var jumlahbarux=0;
var alltotalonrpx=0; 
var alltotalonpix=0; 
var kenaongkiranx=""; 
var kenaongkiranx2="";
var buatsusunanx="";var buatsusunanxlama=""; var susununtukdetailtransferx="";
buatsusunanx=jQuery("#produkfikasi").val();
jQuery("#boxformtujuans2 input[forformaddress='form14']").attr("onkeyup","sioogoog2();");
jQuery("#boxformtujuans2 input[forformaddress='form14']").attr("onclick","sioogoog2();");
jQuery("#boxformtujuans2 input[forformaddress='form14']").attr("onfocus","sioogoog2();");
    buatsusunanx=jQuery("#produkfikasi").val();
    kenaongkiranx=jQuery("#pancingans").val(); 

if (buatsusunanx!="")
{ 
susununtukdetailtransferx=""; jumlahbarux=0; alltotalonpix=0; alltotalonrpx=0;
buatsusunanxlama=buatsusunanx;
buatsusunanx="";

buatsusunanxlama=buatsusunanxlama.split("|*-*|");

for (xxlop=0;xxlop<buatsusunanxlama.length;xxlop++)
{ jumlahbarux=jumlahbarux+parseFloat(jexpimp(buatsusunanxlama[xxlop],"|*|","","0x"));
alltotalonpix=alltotalonpix+parseFloat(jexpimp(buatsusunanxlama[xxlop],"|*|","","1x"));
alltotalonrpx=alltotalonrpx+parseFloat(jexpimp(buatsusunanxlama[xxlop],"|*|","","2x"));
}

alltotalonpix=jQuery("#oogpi2").val();
alltotalonrpx=jQuery("#oogrp2").val();

susununtukdetailtransferx="<input type='text' style=\"display:none;\" readonly id=\"barangkenaongkir\" value=\""+kenaongkiranx +"\"/>Total Produk dalam keranjang: "+jumlahbarux+"<br/>Total Produk yang dikenakan Ongkos Kirim: "+kenaongkiranx+" KG<br/>Ongkos Kirim per KG ke pulau: <span id=\"txtkenapulau\">-</span><br/>Total Ongkos Kirim: <span id=\"txtkenaoog\">-</span><br/>Total Bayar dalam Pi: <span id=\"txtnyedalampinet\">"+alltotalonpix+"</span> <input type=\"button\" class=\"dt-btn dt-btn-m pigoldbutton\" value=\"Copy\" style=\"width:auto;\" onclick=\"salinkeclipboard('bayarnyedalampinetinside');return false;\" /><input style=\"display:none;\" type='text' readonly id=\"bayarnyedalampinetinsidedefault\" value=\""+alltotalonpix +"\"/><input style=\"display:none;\" type='text' readonly id=\"bayarnyedalampinetinside\" value=\""+alltotalonpix +"\"/>"+"<br/>Total Bayar dalam Rp: <span id=\"kalaudirpkandefault\" style=\"display:none;\">"+alltotalonrpx+"</span><span id=\"kalaudirpkan\">"+alltotalonrpx+"</span>";
}
else
{susununtukdetailtransferx=""; jumlahbarux=0; alltotalonpix=0; alltotalonrpx=0;

}
jQuery("#detailforpay2").html(susununtukdetailtransferx);
sioogoog2();
}

</script>
<textarea id="pancingans" style="display:none;" readonly></textarea>
<textarea id="oogrp2" style="display:none;" readonly></textarea>
<textarea id="oogpi2" style="display:none;" readonly></textarea>
<?php
if (@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"dataidbelanjaan")!="")
{ ?>
<div>
<label >Waktu Belanja : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"tanggal_belanja")));?> </label><br/><br/>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"tanggal_belanja"); ?>" >
</div>

<div>
<label >Bukti Pembayaran *</label><br/>
<?php $setstatfoto="required";
$apastatusnyadibayar=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pembayaran");

if (@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar")!="")
{ $setstatfoto="";
$forbayardata=@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar");
$forbayar="box/buktiupbayar/".$forbayardata;
if (($forbayardata!="")&&(file_exists($forbayar)))
{ ?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php }
else {
if (@$apastatusnyadibayar!="belum-dibayar") 
  {echo "Pembayaran melalui PI-coin<br/>";}
} 
}; ?> 
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar"); ?>" >
<?php if (@$apastatusnyadibayar=="belum-dibayar") { ?>
  <script>
    function pymetodas() {
      if (jQuery("#paymethoda").val()=="bybot") {
        jQuery("#uploadbyrupiah").hide();jQuery("#bycoinnya").show();
      }
      else
      {
        jQuery("#bycoinnya").hide(); jQuery("#uploadbyrupiah").show();
      }
    }
  </script>
<select class="deweedycustom validate[required]" id="paymethoda" onchange="pymetodas();">
<option value="bycash">Bayar pakai Tunai</option><option value="bybot">Bayar pakai Pi-Coin</option>
</select>
<input type="file" id="uploadbyrupiah" accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandatamemberareafile" ><br/>
<div id="bycoinnya" style="display: none;">
<textarea id="datawalletx" style="width: 100%;min-height: 100px;" readonly><?php echo idwallettujuan; ?></textarea>
<div style="display: none;" id="boxforwallets"></div>
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']); $apakpakepibrowser="";
if (count($agenrahasiasaghaitx)>1)
{ ?>
<script>
function bukamywalletx() {
//  salinkeclipboard('bayarnyedalampinetinside');
if (jQuery("#bayarnyedalampinetinsidedefault").val()==jQuery("#bayarnyedalampinetinside").val())
{window.location.href='<?php echo $lokasiweb; ?>paitnya.php?paitx=<?php echo $loadfromiddata; ?>';}
else
{alert("Terdapat perubahan data yang menyebabkan perubahan data Ongkos Kirim, harap lakukan proses simpan data terlebih dahulu");}
}
</script>
 <input id="walletbuttons" type="button" class="dt-btn dt-btn-m caleveact" value="buka wallet" onclick="bukamywalletx();" style="width:auto;"/> atau
<?php }; ?> Bot Coin Pi
<img src="<?php echo $lokasiweb; ?>QR-Code.jpg" style="width:400px !important;height:auto !important;display: none !important;"/><br/>

    <iframe id="framingcheck" onfocus="sioogoog2();" onmouseover="sioogoog2();"  oncontextmenu="return false;" frameborder="0" style="width: 100%;height: 34px !important;overflow: hidden !important;" scrolling="no"></iframe>
<script type="text/javascript">
  function doreupbuktis() {
if (jQuery("#bayarnyedalampinetinsidedefault").val()==jQuery("#bayarnyedalampinetinside").val())
{    jQuery("#framingcheck").attr("src","cekaslinnya/index.php?loadfrom=<?php echo $loadfromiddata; ?>&dengai="+jQuery("#detailforpay2 #bayarnyedalampinetinside").val()); 
jQuery("#framingcheck").show();jQuery("#walletbuttons").show();
}
else
{jQuery("#framingcheck").hide();jQuery("#walletbuttons").hide();}

  }
  function testdriver(hasilnya="") {
    if (hasilnya=="valid")
    { jQuery("#framingcheck").hide();
     jQuery("#hasilceknya").val("<?php echo (@$apastatusnyadibayar==="belum-dibayar"?"lunas":""); ?>");
     
     jQuery("#ubahfungsisetelahsave").attr("type","button");jQuery("#ubahfungsisetelahsave").hide();jQuery("#ubahfungsisetelahsave2").hide();
       jQuery("#botredo").load("<?php echo $lokasiweb; ?>?docommand=kirimindependen&doitforkonfirmasi=ya&dests=<?php echo $loadfromiddata; ?>");
        jQuery("#botredo").show();

    }
  }
  function doshowbuktz() {
       jQuery("#botredo").load("cekaslinnya/uploadgambare.php?reloadimg=<?php echo $loadfromiddata; ?>");
        jQuery("#botredo").show();

  }
</script>
<div style="width: 100%;text-weight:bolder;margin:6px 0 !important;display: none;" id="botredo"></div>

</div>
<?php }; ?>
</div>
<div <?php echo @$setformdisp; ?>>
<label >Konfirmasi Pembayaran Pada : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"tanggal_konfirmasi_pembayaran")));?> *</label><br/><br/>
</div>


<?php } else { ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $waktusebenernyawib; ?>" >
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="" >    
<?php }; ?> 
</div>

<?php 
$apastatusnya=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pembayaran");
if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5)||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")&&(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"dataidutama_pioneer")!=@$deweedysaghakey1)))) { ?>
<div>
<label >Status Pembayaran</label><br/>
<?php
$pilihanopsi="lunas"; 
if ($apastatusnya=="belum-dibayar")
{$pilihanopsi=$apastatusnya."||".$pilihanopsi;}
if ($apastatusnya=="diterima")
{$pilihanopsi=$apastatusnya;}
$pilihanopsi=@explode("||",$pilihanopsi);
if ($apastatusnya!="diterima")
{ ?>
<select class="deweedycustom validate[required]" id="hasilceknya" name="inputandatamemberarea[]">
<?php for ($xlop=0;$xlop<count($pilihanopsi);$xlop++)
{
echo "<option value='".$pilihanopsi[$xlop]."' ".(@$apastatusnya===$pilihanopsi[$xlop]?"selected":"").">".@ucwords(@expimpd($pilihanopsi[$xlop],"-"," "))."</option>";
}; ?>
</select>
<?php }
else
{ ?> Produk Telah diterima pembeli <input type="text" style="display: none !important;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="diterima" > <?php }
?>
</div>
<?php } else { ?>
  <div id="ubahstatusnyatext">Status Pembayaran Anda: <?php echo (@$apastatusnya==="belum-dibayar"?"<br/>Anda Belum Membayar atau melakukan konfirmasi pembayaran<br/>":@ucwords(@expimpd($apastatusnya,"-"," "))."<br/>"); ?></div>
<input type="text" id="hasilceknya" style="display: none !important;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo (@$apastatusnya===""?"belum-dibayar":@$apastatusnya); ?>" >    
<?php } ?>




<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $waktusebenernyawib; ?>" >


<br/>
  <h3 style="border-bottom:1px solid #acacac;padding-bottom: 6px;margin-bottom: 6px;">Produk yang dibeli dalam data ini</h3>
<br/>
<div style="height: 250px;overflow-x: hidden;overflow-y: auto;">
<?php $buatdatanya="";
    $apayangdibeli=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$loadfromiddata,"yang_dibeli");
if ($apayangdibeli!="")
{$susununtukdetailtransfer=""; $jumlahbaru=$alltotalonpi=$alltotalonrp=$xlop=0;
$buatsusunanlama=$apayangdibeli;
$buatsusunanlama=@explode("|*-*|",$buatsusunanlama);
$getberat2in=0;$getperproberat=0;
for ($xlop=0;$xlop<count(@$buatsusunanlama);$xlop++)
{
$getkuceng=@lihatdetailproduk(@expimpd($buatsusunanlama[$xlop],"|*|","","3x"),"corecategory");

$isloggin=@lihatdetailproduk(@expimpd($buatsusunanlama[$xlop],"|*|","","3x"),"coresubcats");
if ($getkuceng=="kebutuhan-lainnya")
{ 
$isloggin=@explode("||", $isloggin); $isloggin=@intval(@$isloggin[(@count($isloggin)-1)]);
if ($isloggin<1)
{$isloggin=1;}
$getperproberat=$isloggin;
$getberat2in=$getberat2in+(@intval(@expimpd($buatsusunanlama[$xlop],"|*|","","0x"))*$isloggin);
}
else
{$getberat2in=$getberat2in+0;$getperproberat=0;}

if ($getkuceng=="kendaraan")
{ $judulez="Kendaraan"; }
else if ($getkuceng=="tour-dan-travel")
{ $judulez="Tiket"; }
else if ($getkuceng=="property")
{ $judulez="Property"; }
else
{ $judulez="Produk"; }

echo "Nama ".$judulez.": ".@lihatisikolomtertentu("coredatas","coreurut",@expimpd($buatsusunanlama[$xlop],"|*|","","3x"),"corename")."<br/>";
$supby=@lihatdetailproduk(@expimpd($buatsusunanlama[$xlop],"|*|","","3x"),"coresupplyby");
$supby=($supby==="superuser"?"":"Nama Vendor: ".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$supby,"nama_lengkap_pioneer")."<br/>Kota / Kab: ".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$supby,"alamat_kota_domisili")."<br/>");

echo $supby."Jumlah ".$judulez.": ".@expimpd(@$buatsusunanlama[$xlop],"|*|","","0x")."<br/>";
echo ($getkuceng==="kebutuhan-lainnya"?"Berat Satuan ".$judulez.": ".@$getperproberat." KG<br/>":"");
echo "Jumlah dalam Pi Coin: ".@expimpd(@$buatsusunanlama[$xlop],"|*|","","1x")."<br/>";
echo "Jumlah dalam Rupiah: ".@renominalvalues(@expimpd(@$buatsusunanlama[$xlop],"|*|","","2x"));
 $jumlahbaru=$jumlahbaru+intval(@expimpd($buatsusunanlama[$xlop],"|*|","","0x"));
$alltotalonpi=$alltotalonpi+@expimpd($buatsusunanlama[$xlop],"|*|","","1x");
$alltotalonrp=$alltotalonrp+@expimpd($buatsusunanlama[$xlop],"|*|","","2x");

if ($apastatusnya!="belum-dibayar")
{$getstatbars=@expimpd($buatsusunanlama[$xlop],"|*|","","4x"); $getstatbars=($getstatbars===""?"-":$getstatbars);
$pilihanopsi="-";
if ($getkuceng=="kendaraan")
{ $pilihanopsi.="||pengurusan-surat-kendaraan||dalam-perjalanan"; }
else if ($getkuceng=="tour-dan-travel")
{ $pilihanopsi.="||pengurusan-berkas-tiket||telah-dikirimkan"; }
else if ($getkuceng=="property")
{ $pilihanopsi.="||pengurusan-IMB||sedang-dalam-pembangunan||menunggu-serah-terima"; }
else
{ $pilihanopsi.="||sedang-dipacking||dalam-perjalanan";  }
$pilihanopsi.="||diterima||tidak-diterima"; 
$apastatusnya=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pembayaran");
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5)||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin"))||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")&&(@lihatdetailproduk(@expimpd($buatsusunanlama[$xlop],"|*|","","3x"),"coresupplyby")!=@$deweedysaghakey1))) { ?>
<br/>
<label >Status <?php echo $judulez; ?></label><br/>
<?php

$pilihanopsi=@explode("||",$pilihanopsi);
if ($getstatbars!="diterima")
{ ?>
<select class="deweedycustom recustomstats validate[required]" onchange="dorecustomstats();">
<?php  echo "<option value='-'>-</option>"; for ($xlopx=1;$xlopx<count($pilihanopsi);$xlopx++)
{
echo "<option value='".$pilihanopsi[$xlopx]."' ".(@$getstatbars===$pilihanopsi[$xlopx]?"selected":"").">".@ucwords(@expimpd($pilihanopsi[$xlopx],"-"," "))."</option>";
}; ?>
</select>
<?php }
else
{ ?> Produk Telah diterima pembeli <input type="text" class="recustomstats" value="<?php echo @$getstatbars; ?>" style="display:none;"> <?php }
?>
<br/>
<?php } else { ?>
  <br/>Status <?php echo $judulez; ?>: <?php 

if (($getkuceng=="tour-dan-travel")&&($getstatbars=="telah-dikirimkan"))
{ $pilihanopsi="diterima||tidak-diterima";
$pilihanopsi=@explode("||",$pilihanopsi);
  ?>
<select class="deweedycustom recustomstats validate[required]" onchange="dorecustomstats();">
<?php  for ($xlop=0;$xlop<count($pilihanopsi);$xlop++)
{
echo "<option value='".$pilihanopsi[$xlop]."' ".(@$getstatbars===$pilihanopsi[$xlop]?"selected":"").">".@ucwords(@expimpd($pilihanopsi[$xlop],"-"," "))."</option>";
}; ?>
</select>
<?php }
else
{ ?> <input type="text" class="recustomstats" value="<?php echo @$getstatbars; ?>" style="display:none;"> <?php  echo (@$getstatbars==="-"?"-":@ucwords(@expimpd($getstatbars,"-"," "))."<br/>"); }l ?><br/>

<?php } 
}
else
{ ?> <input type="text" class="recustomstats" value="-" style="display:none;"> <?php }


echo "<br/><br/>";

}

$susununtukdetailtransfer.="<br/><br/></div><div style='width:100%;text-align:justify;border-top:1px solid #acacac;padding-top: 6px;margin-top: 6px'><div id=\"detailforpay2\">Total Barang yang dibeli: ".$jumlahbaru."<br/>Total Bayar dalam Pi: ".$alltotalonpi." <input type=\"button\" class=\"dt-btn dt-btn-m pigoldbutton\" value=\"Copy\" style=\"width:auto;\" onclick=\"salinkeclipboard('bayarnyedalampinetinside');return false;\" /><input type='text' style=\"display:none !important;\" readonly id=\"bayarnyedalampinetinside\" value=\"".$alltotalonpi."\"/><br/>Total Bayar dalam Rp: ".@renominalvalues($alltotalonrp)."</div>";
$buatdatanya.=$susununtukdetailtransfer;
echo $buatdatanya;
?>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery("#pancingans").val("<?php echo $getberat2in; ?>");
    jQuery("#oogpi2").val("<?php echo $alltotalonpi; ?>");
    jQuery("#oogrp2").val("<?php echo $alltotalonrp; ?>");

    dorecustomstats();
    sioogoog2();
    <?php if (@$apastatusnyadibayar=="belum-dibayar") { ?>
      doreupbuktis();cekfromtheinside="belumlunas";
    <?php }; ?>
  })
</script>
<?php }
else
  {echo "Tidak Ada Data<br/><br/>";}

?>

</div>


</div>

</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" id="ubahfungsisetelahsave" value="simpan" style="width:auto;"/> <input type="reset" id="ubahfungsisetelahsave2"  class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="<?php echo ($datasample1===""?"doloadallmember();":"muatdescnya('".@$_REQUEST["loadid"]."','".@$_REQUEST["loadfor"]."','".@$_REQUEST["selectedmonth"]."');"); ?>" value="kembali" style="width:auto;"/>



</form>
<?php
break;
case "walletopener":
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ ?> <iframe src="pi://wallet.pi" style="width:1% !important;height:1vh !important;opacity: 0;z-index: -1"/></iframe> <?php }
else
{}
die();
break;

case "dosomethingunholyproduk":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}

$tabletarget="coredatas"; $loadfromiddata="";

if (empty($_REQUEST["loadfromdata"]))
{die("No Data To Show");}
$loadfromiddata=@$_REQUEST["loadfromdata"];

if ((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")&&(@lihatisikolomtertentu("coredatas","coreurut",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))
{die("");}

$tjngmbr="box/catalogue/".@lihatisikolomtertentu("coredatas","coreurut",@$_REQUEST["loadfromdata"],"corecategory")."/".@lihatisikolomtertentu("coredatas","coreurut",@$_REQUEST["loadfromdata"],"coreid").".jpg";
if (file_exists($tjngmbr))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("coredatas","coreurut",@$_REQUEST["loadfromdata"],"coresupplyby");
$namapioneer=($namapioneer==="superuser"?"Super Admin":@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$namapioneer,"nama_lengkap_pioneer"));


$querysql="delete from coredatas where coreurut='".@$_REQUEST["loadfromdata"]."' ";

$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data Produk dari pioneer bernama: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data Produk dari  pioneer bernama: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;


case "doupdateproduck":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}
$pesannya="";
$tabletarget="coredatas"; $loadfromiddata="";

$loadfromiddata=@$getformsdata[0];

if (((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")&&(@lihatisikolomtertentu("coredatas","coreurut",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!=""))
{die("");}
$tabletarget="coredatas"; 
$source3indo="coreurut||coreid||Nama Produk||Kategori||Harga Dalam Rupiah||Detail Barang||Sub Kategori||Jumlah Stok||corebuybycount||coresupplyby||waktuupdate";
$oldcat=@$_POST["inputandataprodukareaoldcat"];
$iloopform=0; $formsource=@explode("||",@$source3); $formsource=@explode("||",@$source3); $formsource2=@explode("||",@$source3indo);  $sourceukuran=@explode("||",@$sourceukuran3); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ if (($getformsdata[0]!="")&&($getformsdata[0]!="-"))
{ $setidtosave=@$getformsdata[0];
$query="update `".$tabletarget."` set ";
for ($iloopform=2;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform]."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$getformsdata[(@count($formsource)-1)]."' where ".$formsource[0]."='".$setidtosave."'";
}
else
{ $setidtosave=mengacakstring(md5($getformsdata[2]).md5($getformsdata[3]).md5($getformsdata[4]).md5($getformsdata[5]).md5($waktusebenernyawib),5);
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `waktuupdate`) VALUES ( '".$setidtosave."', ";
for ($iloopform=2;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform]."',";}
$query.=" '".$getformsdata[(@count($formsource)-1)]."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{ 
$pesannya="Berhasil Menyimpan Data Produk";
$setidtosave=@lihatisikolomtertentu("coredatas","coreurut",$loadfromiddata,"coreid");
$proideas=$setidtosave;
$hitungdisimpan=0;
$getformsdata2="fotomultifile";
$pathzp2="./box/catalogue/".@$getformsdata[3]."/";
if (count($_FILES[$getformsdata2])>1)
{ for ($loop=0;$loop<count($_FILES[$getformsdata2]['name']);$loop++)
{ if (!empty($_FILES[$getformsdata2]['name'][$loop]))
  { $Namafile = $_FILES[$getformsdata2]["name"][$loop];
      $tmpName  = $_FILES[$getformsdata2]["tmp_name"][$loop];
      $berat = $_FILES[$getformsdata2]["size"][$loop];
      $tipedata = $_FILES[$getformsdata2]["type"][$loop];

    $setidtosave=$setidtosave."-".md5(md5($waktusebenernyawib).$Namafile).".jpg";
     $tjngmbr=$pathzp2.@$setidtosave;
    if (@$tmpName!="")
    {  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
        {  if (@move_uploaded_file($tmpName, $tjngmbr))
          {@compresszz($tjngmbr, $tjngmbr, 45,500,0);
          $hitungdisimpan=$hitungdisimpan+1;
          }
     }
    }
  }
}
}
else
{$loop=0;
    if (!empty($_FILES[$getformsdata2]['name'][$loop]))
    { $Namafile = $_FILES[$getformsdata2]["name"][$loop];
      $tmpName  = $_FILES[$getformsdata2]["tmp_name"][$loop];
      $berat = $_FILES[$getformsdata2]["size"][$loop];
      $tipedata = $_FILES[$getformsdata2]["type"][$loop];
      $setidtosave=$setidtosave."-".md5(md5($waktusebenernyawib).$Namafile).".jpg";
     $tjngmbr=$pathzp2.@$setidtosave;
    if (@$tmpName!="")
    {  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
    {  if (@move_uploaded_file($tmpName, $tjngmbr))
        {@compresszz($tjngmbr, $tjngmbr, 45,500,0);
        $hitungdisimpan=$hitungdisimpan+1;
        }
     }
    }
    }
}
if ($hitungdisimpan>1)
{$pesannya=$pesannya." dan Foto Produk berhasil disimpan\n";}
if (@$_POST["ygdihapusdarilist"]!="")
{ $datatohapusz=@explode("||",@$_POST["ygdihapusdarilist"]);
    for ($loop=1;$loop<count($datatohapusz);$loop++)
    {
        @unlink($pathzp2.$datatohapusz[$loop]);
    }
    $pesannya=$pesannya." dan Foto dalam list penghapusan berhasil dihapus\n";
}
if (@$oldcat!="")
{if (@$getformsdata[3]!=@$oldcat)
 {  $pathzp2next=$pathzp2;
$geturutan=$proideas; $geturutanukur=strlen($geturutan);
$pathzp2="./box/catalogue/".@$oldcat."/";
$isi_dirzp2 = @opendir($pathzp2) or die("Folder $pathzp2 tidak bisa dibuka");
while ($filezp2 = readdir($isi_dirzp2)) { 
$gettodelete=substr($filezp2, 0, 2);
if (($filezp2=="index.php")||($filezp2=="..")||($filezp2==".")||($filezp2==".DS_Store")||($filezp2==basename($_SERVER['PHP_SELF']))||($gettodelete=="._"))
{continue;};
if (substr($filezp2,0,$geturutanukur)!=$geturutan)
{continue;}
$tjngmbr=$pathzp2next.$filezp2;
$tjngmbrold=$pathzp2.$filezp2;
@rename($tjngmbrold,$tjngmbr);
};
closedir($isi_dirzp2);
 }
};
}
else
{$pesannya="Gagal Menyimpan Data Produk";}
}
die($pesannya);
break;

   case "produkparty":
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))
{die("");}

$tabletarget="coredatas"; $loadfromiddata="";

if (empty($_REQUEST["loadfromdata"]))
{$loadfromiddata="-";}
else
{$loadfromiddata=@$_REQUEST["loadfromdata"];}


if (((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")&&(@lihatisikolomtertentu("coredatas","coreurut",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!=""))
{die("");}

?>

    <script type="text/javascript">
        
        function lakukandaftar() { 

  if (jQuery("#selectorcorneto").val()=="kebutuhan-lainnya")
    {
if ((parseFloat(jQuery("#part2oflainnya").val())<1)||(jQuery("#part2oflainnya").val()=="")) {
  jQuery("#part2oflainnya").val("1"); addweightbarang();
}
    }
  else
    {jQuery("#boxetravanganza").hide();jQuery("#partalloflainnya").val(jQuery("#part1oflainnya").val());jQuery("#partalloflainnya").show();}

var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doupdateproduck&formname=inputandataprodukarea",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=produkku';
            return false;
            },
        });

return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukandaftar(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<?php
$tabletarget="coredatas"; 
$source3indo="coreurut||coreid||Nama Produk||Kategori||Harga Dalam Rupiah||Detail Barang||Sub Kategori||Jumlah Stok||corebuybycount||coresupplyby||waktuupdate";

$iloopform=0; $formsource=@explode("||",@$source3); $formsource=@explode("||",@$source3); $formsource2=@explode("||",@$source3indo);  $sourceukuran=@explode("||",@$sourceukuran3); $setformdisp="";
$iloopformend=@intval(@count($formsource))-3;
if ($formsource!="")
{ ?>
<div>
<label >Foto Produk *</label><br/>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" name="inputandataprodukareaoldcat" value="<?php $proideas=@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"corecategory"); echo ($proideas===""?"":$proideas); ?>" />
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" name="inputandataprodukarea[]" value="<?php $proideas=@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"coreurut"); echo ($proideas===""?"-":$proideas); ?>" />
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" name="inputandataprodukarea[]" value="<?php $proideas=@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"coreid"); echo ($proideas===""?"-":$proideas); ?>" />

    <style>
.blockvideolist {display: inline-flex;width: 28.5%;min-height: 10px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(218,37,28,0.9);}
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
        .addspans {cursor: pointer;}
</style>
<input type="text" style="display:none !important;" readonly class="deweedycustom validate[required]" id="ygdihapusdarilist" name="ygdihapusdarilist" value="" />

<script type="text/javascript">
function doundophotos(fileberikutnya="",bloknya="") {
var dapatnyafile2nya=jQuery("#ygdihapusdarilist").val();
dapatnyafile2nya=jexpimp(dapatnyafile2nya,"||"+fileberikutnya,"");
jQuery("#ygdihapusdarilist").val(dapatnyafile2nya);
jQuery("#undoblocks"+bloknya).hide();
jQuery("#blockfotoran"+bloknya).show("slow");
return false;
}
function doremovalphotos(fileberikutnya="",bloknya="") {
var dapatnyafile2nya=jQuery("#ygdihapusdarilist").val();
dapatnyafile2nya=dapatnyafile2nya+"||"+fileberikutnya;
jQuery("#ygdihapusdarilist").val(dapatnyafile2nya);
jQuery("#blockfotoran"+bloknya).hide("slow");
jQuery("#undoblocks"+bloknya).show();
return false;
}
var uruttotalboxup=0;
function pertambahanforoaspirasi() {

    jQuery(".addspans").eq(uruttotalboxup).append('<div class="addspans"><span class="caleveact" style="padding:4px 5px !important;width: auto !important;" onclick="pertambahanforoaspirasi();"><i class="fas fa-plus"></i></span> <span class="calactdanger" style="padding:4px 5px !important;width: auto !important;" onclick="penguranganforoaspirasi();"><i class="fas fa-minus"></i></span>&nbsp;<input type="file" multiple class="deweedycustom validate[required]" placeholder="" accept="image/jpeg" name="fotomultifile[]" style="width:81% !important;"/></div>');
    jQuery(".addspans").eq(uruttotalboxup).children(".calactdanger").hide();
    jQuery(".addspans").eq(uruttotalboxup).children(".caleveact").hide();
    uruttotalboxup=uruttotalboxup+1;
}
function penguranganforoaspirasi() {
    jQuery(".addspans").eq(uruttotalboxup).remove();
    uruttotalboxup=uruttotalboxup-1;
    jQuery(".addspans").eq(uruttotalboxup).children(".calactdanger").show();
    jQuery(".addspans").eq(uruttotalboxup).children(".caleveact").show();
}
</script>

<div style="position:relative !important;display: block !important;">
<?php $setstatfoto="required";
$loopforceks=0;
$geturutan=$proideas; $geturutanukur=strlen($geturutan);
$pathzp2="./box/catalogue/".@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"corecategory")."/";
$isi_dirzp2 = @opendir($pathzp2) or die("Folder $pathzp2 tidak bisa dibuka");
while ($filezp2 = readdir($isi_dirzp2)) { 
$gettodelete=substr($filezp2, 0, 2);
if (($filezp2=="index.php")||($filezp2=="..")||($filezp2==".")||($filezp2==".DS_Store")||($filezp2==basename($_SERVER['PHP_SELF']))||($gettodelete=="._"))
{continue;};
if (substr($filezp2,0,$geturutanukur)!=$geturutan)
{continue;}
$blokrand=md5($filezp2);
$loopforceks++;
?>
<div class="blockvideolist" style="box-shadow:0px 0px 10px 1px rgba(218,37,28,0.2) !important;text-align: center !important;">
<table id="blockfotoran<?php echo $blokrand; ?>" style="border:0;width: 100%;" cellpadding="0" cellspacing="0">
<tr><td style="width: 100%;"><img decoding="async" src="<?php echo $pathzp2.$filezp2; ?>" style="height: auto !important;width: 100% !important;"></td></tr>
<tr><td style="width: 100%;text-align: center;"><span style="cursor: pointer;padding:2px 5px !important;width: auto !important;height: auto !important;margin:0 auto !important;" class="calactdanger" onclick="doremovalphotos('<?php echo $filezp2; ?>','<?php echo $blokrand; ?>');">hapus</span></td></tr>
</table>
<span id="undoblocks<?php echo $blokrand; ?>" style="cursor: pointer;padding:2px 5px !important;width: auto !important;height: auto !important;display: none;margin:0 auto !important;" class="calactdanger" onclick="doundophotos('<?php echo $filezp2; ?>','<?php echo $blokrand; ?>');">batalkan</span>
</div>
<?php
};
closedir($isi_dirzp2);
if ($loopforceks>0) {
  $setstatfoto="";
}
?>
<div class="addspans"><span class="caleveact" style="padding:4px 5px !important;width: auto !important;" onclick="pertambahanforoaspirasi();"><i class="fas fa-plus"></i></span>&nbsp;<input type="file" <?php echo $setstatfoto; ?> multiple class="deweedycustom validate[required]" placeholder="" accept="image/jpeg" name="fotomultifile[]" style="width:90% !important;"/></div>
</div>

</div>

<?php for ($iloopform=2;$iloopform<$iloopformend;$iloopform++)
{ if (($iloopform==0)||($iloopform==1))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';
if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}
}
?>

<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?> *</label><br/>
<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{
if ($formsource[$iloopform]=="coredetails")
{ ?>
  <script type="text/javascript">
    function doexchangesdatafordetailing() {
      jQuery("#coredetailingdestiny").val(jQuery("#coredetailing").html());
    }
 function catzswing() {
  if (jQuery("#selectorcorneto").val()=="kebutuhan-lainnya")
    {addweightbarang();jQuery("#partalloflainnya").hide();jQuery("#boxetravanganza").show();}
  else
    {jQuery("#boxetravanganza").hide();jQuery("#partalloflainnya").val(jQuery("#part1oflainnya").val());jQuery("#partalloflainnya").show();}
 }
  </script>
<div contenteditable="true" id="coredetailing" onkeyup="doexchangesdatafordetailing();" onblur="doexchangesdatafordetailing();" style="width:100%;height:259xpx;overflow-x: hidden;overflow-y:auto;border:1px solid #eaeaea;padding:5px;" class="deweedycustom">
<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>
</div>
<textarea id="coredetailingdestiny" readonly style="display: none;" class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataprodukarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{
if ($formsource[$iloopform]=="coresubcats") {
  $getpartzz=@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); $getpartzz1=@expimpd($getpartzz,"||","","0x"); $getpartzz2=@intval(@expimpd($getpartzz,"||","","1x"));
 ?>
<script>
function addweightbarang() {
if (parseFloat(jQuery("#part2oflainnya").val())<0) {
  jQuery("#part2oflainnya").val("0");
}
jQuery("#partalloflainnya").val(jQuery("#part1oflainnya").val()+"||"+jQuery("#part2oflainnya").val());
}
</script>
<textarea style="display: none;" class="deweedycustom validate[required]" id="partalloflainnya" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataprodukarea[]" ><?php echo @$getpartzz; ?></textarea>
<div id="boxetravanganza">
<textarea onkeyup="addweightbarang();" class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" id="part1oflainnya" ><?php echo @$getpartzz1; ?></textarea><br/>Satuan Berat dalam KG<br/>
<input onkeyup="addweightbarang();"  onchange="addweightbarang();" type="number" class="deweedycustom validate[required]" placeholder="Masukkan Satuan Beratnya" id="part2oflainnya" value="<?php echo @$getpartzz2; ?>" maxlength="4" >
</div>
<?php
} else { ?>
<textarea <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataprodukarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
};
}
else
{
if ($formsource[$iloopform]=="corecategory")
{
$icek=0;
$pathzp = "box/catalogue/";
echo '<select id="selectorcorneto" onchange="catzswing();" class="deweedycustom validate[required]" required name="inputandataprodukarea[]">';
$isi_dirzp = @opendir($pathzp) or die("Folder $pathzp tidak bisa dibuka");
while ($filezp = readdir($isi_dirzp)) {
$gettodelete=substr($filezp, 0, 2);
if (($filezp=="index.php")||($filezp=="..")||($filezp==".")||($filezp==".DS_Store")||($filezp==basename($_SERVER['PHP_SELF']))||($gettodelete=="._"))
{continue;};
$i = $i + 1;
if (count(explode("(", $filezp))>1)
{continue;}
 $pathzp2 = $pathzp.$filezp."/";
if (is_dir($pathzp2."/"))
{  echo '<option value="'.$filezp.'" '.@(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform])===$filezp?"selected":"").'>'.@ucwords(@expimpd($filezp,"-", " ")).'</option>'; $icek++;}
}
echo (@$icek===0?'<option value="" >Tidak Ada Data Kategori</option>':'')."</select>";
?>
<script>
jQuery(document).ready(function(){
catzswing();
})
</script>
<?php
}
else
{ ?>
<input type="text" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataprodukarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
};
}
?>
</div>
<?php
}
}

if (@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"corebuybycount")!="")
{ ?>
<div>
<label >Terjual Sebanyak : <?php echo @lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"corebuybycount");?> </label><br/><br/>
</div>
<div>
<label >Waktu Update Produk : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"waktuupdate")));?> *</label><br/><br/>
</div>
<?php }; ?> 
  <input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataprodukarea[]" value="<?php echo @intval(@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"corebuybycount")."x"); ?>" >    
<?php
if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5)||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="vendor"))
{ ?>
<div>
<label >Di Supply Oleh: *</label><br/>
<?php $setstatsupply=@lihatisikolomtertentu($tabletarget,"coreurut",$loadfromiddata,"coresupplyby");
 ?> 
<select class="deweedycustom validate[required]" name="inputandataprodukarea[]">
<?php
if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5)) 
  {echo '<option value="superuser" >Super User</option>';}
$querysql="select * from data_pioneerweb where level_akun='vendor' ";
$countcek=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{$countcek++;
echo '<option value="'.$tampilkanperkolomdata["dataidutama_pioneer"].'" '.@(@$setstatsupply===$tampilkanperkolomdata["dataidutama_pioneer"]?"selected":"").'>'.$tampilkanperkolomdata["nama_lengkap_pioneer"].'</option>'; }
}
else
{echo (@$deweedysaghakey1===@mengacakstring("mbt2023forall",5)?"":'<option value="superuser" >Tidak Ada Data Vendor</option>');};
?>
</select>
</div>
<?php }
else
{ ?>
 <input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataprodukarea[]" value="<?php echo (@$deweedysaghakey1===mengacakstring("mbt2023forall",5)?"superuser":@$deweedysaghakey1); ?>" >    
<?php }; ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataprodukarea[]" value="<?php echo $waktusebenernyawib; ?>" >
</div>
</div>

<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="button" onclick="doloadeachmember('<?php echo $loadfromiddata; ?>');" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>

</form>
<?php
break;

case "loaddata2pro":
if (empty($_REQUEST["nextclue"]))
{die();}
$datasample1=$datasample2=$dipilihnyabulan=$dipilihnyabulan2="";
if ((empty($_REQUEST["loadid"]))||(empty($_REQUEST["loadfor"])))
{
if ((@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna")&&((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="vendor")))&&(@$_REQUEST["nextclue"]=="dataproduk"))
{die("");}
}
else
{

$datasample1=@$_REQUEST["loadid"];$datasample2=@$_REQUEST["loadfor"];
if (!empty($_REQUEST["selectedmonth"]))
{$dipilihnyabulan=@expimpd(@$_REQUEST["selectedmonth"],"-","","1x");$dipilihnyabulan2=@expimpd(@$_REQUEST["selectedmonth"],"-","","0x");}
else
{$dipilihnyabulan=date("m");$dipilihnyabulan2=date("Y");};
$dipilihnyabulan=$dipilihnyabulan2."-".$dipilihnyabulan;
}
?>
<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>

<span title='Reload' class='caleveact' style='cursor:pointer;padding:6px 4px 6px 9px !important;'  onclick="<?php echo ($datasample1===""?"doloadallmember();":"muatdescnya('".$datasample1."','".$datasample2."','".$dipilihnyabulan."')"); ?>">
  <i class='fas fa-recycle'></i>
</span>
&nbsp;
<?php
  if (@$_REQUEST["nextclue"]=="dataproduk")
{ ?><span title='tambah data' class='caleve' style='cursor:pointer;padding:6px 4px 6px 9px !important;' onclick="doloadeachmember('-');">
  <i class='fas fa-plus'></i>

</span>
<?php if (@intval(queryuniverse("select * from coredatas","num"))>0) { ?>
  <script>
function executedown() {
if (jQuery("#classmild").val()=="-")
{jQuery("#finaldestinations").removeAttr("href");return false;}
jQuery("#finaldestinations").attr("href","<?php echo $lokasiweb; ?>pdfkeun/downdatapro.php?vendore="+jQuery("#classmild").val()+"&dengansiapah="+jQuery("#marlboro").val());
}
function  openorclosedownpdf() {
if (jQuery("#boxforprinterpdf").css("display")=="none")
  {jQuery("#boxforprinterpdf").show("slow");}
else
  {jQuery("#boxforprinterpdf").hide("slow");}
}  
  </script>

&nbsp; <span title='Download PDF' class='calactdanger' style='cursor:pointer;padding:6px 2px !important;' onclick="openorclosedownpdf();"><i class='fas fa-download' style='cursor:pointer;padding:9px !important;'></i></span>

<div id="boxforprinterpdf" style="width:98%;margin:8px auto; display: none;">
Vendor: <select class="deweedycustom validate[required]" id="classmild" onchange="executedown();">
<option value="-">Pilih Vendor</option>
<?php
$querysql="select * from data_pioneerweb where level_akun!='penguna' ";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ echo '<option value="'.$tampilkanperkolomdata["dataidutama_pioneer"].'">'.$tampilkanperkolomdata["nama_lengkap_pioneer"].'</option>'; }
}
?>
<option value="superuser">Super Admin</option>
</select> Kategori: <select class="deweedycustom validate[required]" id="marlboro" onchange="executedown();">
<option value="all">Seluruh Kategori</option>
<?php 
for ($iloop=0;$iloop<count($dataofcats);$iloop++)
{ echo '<option value="'.$dataofcats[$iloop].'">'.expimpd($dataofcats[$iloop],"-"," ").'</option>'; }
?>
</select>
<div id="domboxforpdf" style="display: none;"></div>
<a href="" id="finaldestinations" target="_blank"><span class="calactdanger"  onclick="executedown();" style='cursor:pointer;padding:9px !important;'><i title='Download PDF' class='fas fa-download'></i></span></a>
</div>

<?php };

 }
else
{ if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna"))
{ if (($datasample1!="")&&($datasample2!=""))
{echo "<input type=\"button\" class=\"calact\" onclick=\"doloadallmember('".$dipilihnyabulan."');\" value=\"Muat Keseluruhan Pioneer\"/> <input type=\"button\" class=\"caleve\" onclick=\"milihdong('".$datasample1."','".$dipilihnyabulan."');\" value=\"Muat Data Pioneer ini\"/>".'<div style="padding:8px;width: 100%;border-top:1px solid #cacaca;margin-top:8px;"><span style="float:right;">Status Pembayaran: '.@expimpd($datasample2,"-"," ").'</span>Nama Pioneer: '.@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$datasample1,"nama_lengkap_pioneer").'</div>';}
}
else
{
if (@$_REQUEST["aksesdari"]!="produkku")
{echo "<input type=\"button\" class=\"calact\" onclick=\"doloadallmember('".$dipilihnyabulan."');\" value=\"Muat Keseluruhan Status\"/>";}

}; } ?><br/>

<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
<?php
$querysql="";
if (@$_REQUEST["nextclue"]=="dataproduk")
{ $colspander="8"; ?>
        <th width="1px">no</th>         <th width="50%">Nama Barang</th>         <th width="25%" class="extrasetfordatatables">Kategori</th> <th width="25%" class="extrasetfordatatables">Sub Kategori</th>         <th width="1px" class="extrasetfordatatables">Harga<br/>(rupiah)</th>         <th width="1px">stok</th>         <th width="3px" class="extrasetfordatatables">Di Beli</th>         <?php echo @(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")==="vendor"?"":'<th width="35%">Nama Vendor</th>'); ?>         <th width="7%">aksi</th> 
<?php
}
else
  { $colspander="7"; ?>
        <th width="1px">no</th>         
        <?php 
        if (($datasample1=="")||($datasample2==""))
        { if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5)||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor"))) {$colspander="8"; echo '<th width="50%">Nama Pembeli</th>';  }
        else
        {$querysql=" where dataidutama_pioneer='".@$deweedysaghakey1."' "; };
        }
        else
        {$colspander="6";} ?>
                         <th width="60%">Alamat Tujuan Pengiriman</th>         <th width="10%" class="extrasetfordatatables">Jumlah Barang</th>         <th width="10%" class="extrasetfordatatables">Waktu Belanja</th>     

    <?php  if (($datasample1=="")||($datasample2==""))
          { ?><th width="10%" class="extrasetfordatatables">Status Pembayaran</th>  <?php }; ?>
              <th width="10%" class="extrasetfordatatables">Waktu Konfirmasi Pembayaran</th>              <th width="7%">aksi</th> 
<?php
}

?>
</tr>
    </thead>
    <tbody>
<?php
if (@$_REQUEST["nextclue"]=="dataproduk")
{
if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")
{$querysql=" where coresupplyby='".@$deweedysaghakey1."' ";}
else if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")
{$querysql=" where coresupplyby!='superuser' ";}
$querysql="select * from coredatas ".$querysql." order by waktuupdate desc";
}
else
{$querysql="select * from databelanjaanpioner ".@$querysql." order by tanggal_belanja desc";
$querysql=(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")==="vendor"?"select a.coresupplyby,b.* from coredatas a join databelanjaanpioner b ON b.yang_dibeli LIKE CONCAT('%%|*|', a.coreurut ,'%') where a.coresupplyby = '".@$deweedysaghakey1."' or b.dataidutama_pioneer='".@$deweedysaghakey1."' group by b.dataidbelanjaan order by b.dataidbelanjaan asc ":$querysql);}
$urutkan=0;

if (@$_REQUEST["nextclue"]!="dataproduk")
{ if (($datasample1!="")&&($datasample2!=""))
{$querysql="select * from databelanjaanpioner where dataidutama_pioneer='".@$datasample1."' and status_pembayaran='".@$datasample2."' and tanggal_belanja like '%".$dipilihnyabulan."-%' order by tanggal_belanja desc ";}
}

$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
  if (@$_REQUEST["nextclue"]=="dataproduk")
{ $getnamavendor=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$tampilkanperkolomdata["coresupplyby"],"nama_lengkap_pioneer");
$getnamavendor=($getnamavendor===""?"Super User":$getnamavendor);
?>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         
    <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["coreurut"]; ?>"><?php echo $tampilkanperkolomdata["corename"]; ?></td>
                 <td width="25%" class="extrasetfordatatables"><?php echo @ucwords(@expimpd($tampilkanperkolomdata["corecategory"],"-"," ")); ?></td> 
                 <td width="25%" class="extrasetfordatatables"><?php echo @ucwords(@expimpd(@expimpd(@$tampilkanperkolomdata["coresubcats"],"||","","0x"),"-"," ")); ?></td>         
                 <td width="1px" class="extrasetfordatatables"><?php echo @renominalvalues($tampilkanperkolomdata["corepriceinrupiah"]); ?></td>
                 <td width="1px"><?php echo $tampilkanperkolomdata["corestockcount"]; ?></td>         
                 <td width="3px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["corebuybycount"]; ?></td>         
                 <?php echo @(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")==="vendor"?"":'<td width="35%">'.@$getnamavendor."</td>"); ?>         
                <td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["coreurut"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["coreurut"]."');\"></i>"; ?></td>
      </tr>

<?php
}
else
{ $getidnya=$tampilkanperkolomdata["dataidbelanjaan"]; $cekstatusbayar=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"status_pembayaran");
    $apayangdibeli=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"yang_dibeli");
$jumlahbaru=$alltotalonpi=$alltotalonrp=$xlop=0;
if ($apayangdibeli!="")
{
$buatsusunanlama=$apayangdibeli;
$buatsusunanlama=@explode("|*-*|",$buatsusunanlama);

for ($xlop=0;$xlop<count(@$buatsusunanlama);$xlop++)
{
 $jumlahbaru=$jumlahbaru+intval(@expimpd($buatsusunanlama[$xlop],"|*|","","0x"));
$alltotalonpi=$alltotalonpi+intval(@expimpd($buatsusunanlama[$xlop],"|*|","","1x"));
$alltotalonrp=$alltotalonrp+intval(@expimpd($buatsusunanlama[$xlop],"|*|","","2x"));
}
}
$loadnamapioneer=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$tampilkanperkolomdata["dataidutama_pioneer"],"nama_lengkap_pioneer");
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?> <span style="display: none;" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidbelanjaan"]; ?>">Data Belanja dilist nomor urut <?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?> dengan nama pioneer: <?php echo $loadnamapioneer; ?></span></td>
        <?php if (($datasample1=="")||($datasample2==""))
          { if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5)||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor"))) { ?>
        <td width="50%"><?php echo $loadnamapioneer; ?></td>
      <?php }; }; ?>
        <td width="60%"><?php 
$iloopform=0; $formsource=@explode("||",@$source2); $sourceukuran=@explode("||",@$sourceukuran2); $setformdisp=$buatdatanya="";
    $iloopformend=@intval(@count($formsource))-4;
    if ($formsource!="")
    { for ($iloopform=2;$iloopform<$iloopformend;$iloopform++)
    { if (@$formsource[$iloopform]=="yang_dibeli")
        {continue;}
    $buatdatanya.=" ".@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,$formsource[$iloopform]).",";
    }
    $buatdatanya=substr($buatdatanya, 0, -1); echo $buatdatanya;
    }
    else
      {echo "-";}

         ?></td>
        <td width="10%" class="extrasetfordatatables" style="text-align: center;"><?php echo $jumlahbaru; ?></td>
        <td width="10%" class="extrasetfordatatables"><?php echo @date("d F Y H:i:s",@strtotime(@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"tanggal_belanja"))); ?></td>
        <?php  if (($datasample1=="")||($datasample2==""))
          { ?><td width="10%" class="extrasetfordatatables"><?php echo @ucwords(@expimpd(@$cekstatusbayar,"-"," ")); ?></td>  <?php }; ?>

        <td width="10%" class="extrasetfordatatables"><?php echo (@$cekstatusbayar==="lunas"?@date("d F Y H:i:s",@strtotime(@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"tanggal_konfirmasi_pembayaran"))):"-"); ?></td>
        <td width="7%"><?php echo (((@$cekstatusbayar==="lunas")&&(@$colspander==="7"))?"":"<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i>")." <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i>"."<br/> <i title='Lihat QR' class='fas fa-magic' style='cursor:pointer;' onclick=\"showtheqr('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i> <a style='color:#656871;' href='".$lokasiweb."pdfkeun/?databelanjanya=".$tampilkanperkolomdata["dataidbelanjaan"]."' target='_blank'> <i title='Download PDF' class='fas fa-download' style='cursor:pointer;'></i></a> <br/> <i title='Kirim Detail Ke Email' class='fas fa-mail-bulk' style='cursor:pointer;' onclick=\"kirimsatuanemail('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i>"; ?></td>
      </tr>

<?php
}
};
}
else
{echo '<tr><td colspan="'.$colspander.'">Tidak Ada Data</td></tr>';}

?>

    </tbody>
  </table>
</div>
  <?php
break;

case "dosomethingunholy":
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="admin"))
{die("");}
if ((empty($_REQUEST["loadfromdata"]))||((!empty($_REQUEST["loadfromdata"]))&&((@$_REQUEST["loadfromdata"]=="a4e5bc9459c6eeaa9fb3f4902ca90845")||(@$_REQUEST["loadfromdata"]==@$deweedysaghakey1))))
{die("");}
$tjngmbr="box/photoexp/".@$_REQUEST["loadfromdata"].".jpg";
if (file_exists($tjngmbr))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$_REQUEST["loadfromdata"],"nama_lengkap_pioneer");
$querysql="select * from databelanjaanpioner where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{
  if (@$tampilkanperkolomdata["foto_bukti_bayar"]!="")
  {$tjngmbr="box/buktiupbayar/".@$tampilkanperkolomdata["foto_bukti_bayar"];
  if (file_exists($tjngmbr))
  {unlink($tjngmbr);}
  }
}
queryuniverse("delete from databelanjaanpioner where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ");
}
$querysql="delete from data_pioneerweb where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ";

$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data pioneer bernama: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data pioneer bernama: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;


case "rotasikanfoto":
if (empty($_REQUEST["loadfromdata"]))
{die();}
$tabletarget="data_pioneerweb";
$loadfromiddata=@$_REQUEST["loadfromdata"];
if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer")=="")
  {die();}

$forbayar="box/photoexp/".@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer").".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{@rotasikan($forbayar, $forbayar, 45 );
?>
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery("#fotobooth<?php echo $loadfromiddata; ?>").attr("src","<?php echo $lokasiweb.$forbayar."?anticache=".strtotime($waktusebenernyawib); ?>");
  })
</script>
<?php
}

die();
break;

   case "loadmemberdataformid":
$tabletarget="data_pioneerweb"; $loadfromiddata="";
if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5))
{
if ((empty($_REQUEST["loadfromdata"]))||((!empty($_REQUEST["loadfromdata"]))&&(@$_REQUEST["loadfromdata"]=="a4e5bc9459c6eeaa9fb3f4902ca90845")))
{die("No Data To Show");}
}
if (empty($_REQUEST["loadfromdata"]))
{die("No Data To Show");}
$loadfromiddata=@$_REQUEST["loadfromdata"];
if ((@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer")=="")&&(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer")=="-"))
{die("No Data To Show");};

?>

    <script type="text/javascript">
        
        <?php $formfrom="datamemberareafile"; ?>
        var donextboxdari<?php echo $formfrom; ?> = "";
        function lakukandaftar() { 

if (donextboxdari<?php echo $formfrom; ?>=="tidakvalid") {
var konfirmasifotoz=confirm("Tidak terdeteksi Wajah di Gambar yang Anda pilih, pastikan foto Anda tidak blur dan posisi wajah terlihat.\n\nApakah Anda ingin melakukan deteksi ulang atau menganti foto Anda ?\n\n");
if (konfirmasifotoz)
  { jQuery("#forfocusuploadulang<?php echo $formfrom; ?>").focus();
    return false;
  }
  else
    {alert("Mungkin nantinya akan berdampak pada legalitas akun Anda, tapi Anda tetap bisa melanjutkan ke proses berikutnya");}
}

if (jQuery("#boxforpassz").val()=="")
{jQuery("#boxforpassz").val(jQuery("#oldpassbox").val());}
var formData = new FormData(jQuery("#formdaftarindaftar")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doregnewone&formname=inputandatamemberarea&metoz=formdaftar",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            window.location.href='<?php echo $lokasiweb; ?>?page=member-area';
            return false;
            },
        });

return false;
}
function rotatata(datanya="")
{ if (datanya=="")
{return false;}
jQuery("#dumpboxforfotos").load("<?php echo $lokasiweb; ?>?docommand=rotasikanfoto&loadfromdata="+datanya);
return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarindaftar" onsubmit="lakukandaftar(); return false;">
<div class="form-fields">

<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<div class="blocklist">
<table class="forformdata" cellpadding="0" cellspacing="0">
<tr><td>
  <div id="dumpboxforfotos" style="display:none;"></div>
<?php
$welcomeword=""; $mustfilled='class="deweedycustom validate[required]" placeholder="Kosongkan apabila tidak mau di ganti" ';
if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin"))
{ if (@$_REQUEST["loadfromdata"]=="-"){ $mustfilled='class="deweedycustom validate[required]" required placeholder="Masukkan Password Untuk User" ';
?>
<label >Id Komunitas</label>
<input type="text" id='boxforeditz' class="deweedycustom validate[required]" placeholder="Silahkan Cek Nomor Komunitas" value="" onkeyup="cekkomica('boxforeditz');">
</td></tr>
<?php }; ?>
<tr><td>
<?php  $welcomeword="Pioneer";}
else
{$welcomeword="Anda";}
$forbayar="box/photoexp/".@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer").".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{ $reqforphoto="";
?>
<img id="fotobooth<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer"); ?>" src="<?php echo $lokasiweb.$forbayar."?anticache=".strtotime($waktusebenernyawib); ?>" style="width: 100% !important;height: auto;margin: 0 auto;"/>
<span class="deweedycustom calactdanger" style="text-align: center;cursor: pointer;" onclick="rotatata('<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer"); ?>');">rotasi foto</span>
<?php } else {$reqforphoto="required"; echo "Tidak Ada Foto<br/> silahkan upload Foto ".$welcomeword;}; ?>
</td></tr>
<tr><td>

<?php if (file_exists("saghafotodetection.php"))
{ echo "<div style=\"width:98% !important;position:relative !important;display:block;z-index:3;min-height:0 !important;height:auto !important;\">"; 
$formfrom="datamemberareafile";
require ('saghafotodetection.php');
echo "</div>";
}
else
{ ?> <input type="file" <?php echo $reqforphoto; ?> accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandatamemberareafile" > <?php }; ?>

<input type="text" cekricek='boxforeditzdataidutama_pioneer' style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $loadfromiddata.($loadfromiddata==="-"?"":"||oldpassbox"); ?>" >
</td></tr>

<tr style="<?php echo ($welcomeword==="Anda"?"":"");?>"><td>
<?php $pioneerstaz=@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"status_pioneer"); ?>
<label >Status Akun <?php echo @(@$pioneerstaz==="unverified"?": <br/>".$welcomeword." Belum Verifikasi E-Mail":($deweedysaghakey1===mengacakstring("mbt2023forall",5)?"":": ".@(@ucwords(@expimpd($pioneerstaz,"-"," "))))); ?></label><br/>
<?php 
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{ ?>
  
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $pioneerstaz; ?>" />
<?php if ($pioneerstaz=="unverified") { ?>
<input type="button" class="dt-btn dt-btn-m pigoldbutton" value="Verifikasi E-Mail" style="width:auto;" onclick="doreverify('<?php echo $loadfromiddata; ?>');return false;" />
<br/>
<br/>
<?php };
}
else
{ if ($pioneerstaz=="unverified") { ?>
<input type="button" class="dt-btn dt-btn-m pigoldbutton" value="Verifikasi E-Mail" style="width:auto;" onclick="doreverify('<?php echo $loadfromiddata; ?>');return false;" />
<br/>
<br/>
<?php };
 ?>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="tidak-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php echo @(@$pioneerstaz==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="aktif" <?php echo @(@$pioneerstaz==="aktif"?"selected":""); ?>>Aktif</option>
</select>
<?php }; ?>
</td></tr>
<tr><td>
<label >Username *</label>

    <input type="text"  required id='formusernamefordaftarold' style="display: none;" readonly class="deweedycustom usrofmemberakunold validate[required]" placeholder="Username" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>" maxlength="100"/>


    <input type="text"  required id='formusernamefordaftar' onkeyup="recekusernames('formusernamefordaftar');"  class="deweedycustom usrofmemberakun validate[required]" placeholder="Username" name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>" maxlength="100"/>

    </td></tr>
<tr><td>
<label >Password Untuk Login *</label>

    <input type="password" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="Password Untuk Login" id="oldpassbox" name="oldpassbox" value="<?php echo @@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"password_untuk_login"); ?>" >

    <input type="password" <?php echo $mustfilled; ?> id="boxforpassz" name="inputandatamemberarea[]" value="" />
    </td></tr>




</table>
</div>

<div class="blocklistbig">
<table class="forformdata" cellpadding="0" cellspacing="0">
<?php
$iloopform=0; $formsource=@explode("||",@$source1); $sourceukuran=@explode("||",@$sourceukuran1); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ for ($iloopform=4;$iloopform<$iloopformend;$iloopform++)
{
if (($iloopform==0)||($iloopform==1))
{$setformdisp=(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")==="admin"?"":'style="display: none;" readonly');}
else
{$setformdisp=' required dochangeattr="form" ';

if (($iloopform>7)&&($iloopform<15))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.$iloopform.'" ';}

}

$setformdisp=" cekricek='boxforeditz".$formsource[$iloopform]."' ".$setformdisp;
?>
<tr><td <?php echo $setformdisp; ?>>
<label ><?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> *</label><br/>

<?php
if ($iloopform==6)
{ $setformdispx=(@$pioneerstaz==="unverified"?"":"readonly");    ?>

    <input type="email" <?php echo $setformdispx; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==5)
{    ?>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="pria" >Pria</option>
    <option value="wanita" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform])==="wanita"?"selected":""); ?>>Wanita</option>
</select>
    <?php
}
else if ($iloopform==0)
{    ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")===""?"-":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")); ?>" >
    <?php
}
else if ($iloopform==3)
{    ?>
    <input type="password" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==1)
{   if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")) { ?>
<div>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="tidak-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="aktif" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="aktif"?"selected":""); ?>>Aktif</option>
</select>
</div>
<?php } else { ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")===""?"unverified":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")); ?>" >
<?php }; 
}
else
{
    $ukuranforms=@intval($sourceukuran[$iloopform]);
    if ($ukuranforms>255)
    {
    ?>
    <textarea <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
    <?php
    }
    else
    { if (@$iloopform===2) { ?> 
<input type="text" style="display: none;" readonly id='formrechekidkomold' class="deweedycustom validate[required]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php } ?>
    <input type="text" <?php echo $setformdisp." ".($iloopform===2?"id='formusernamefordaftar' "." onkeyup=\"recekusernames('formusernamefordaftar');\" ":""); ?> class="deweedycustom <?php echo @$formsource[$iloopform]."boxesofformmemberarea"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>">
    <?php
    }
}

?>
</td></tr>
<?php
}
}
?>
<?php if ((@$deweedysaghakey1==mengacakstring("mbt2023forall",5))||(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$deweedysaghakey1,"level_akun")=="admin")) { ?>
<tr><td <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="penguna" >User App</option>
    <option value="vendor" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="vendor"?"selected":""); ?>>Vendor</option>
    <option value="admin" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="admin"?"selected":""); ?>>Admin</option>
</select>
</td></tr>
<?php
if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")!="") { ?>
<tr><td <?php echo @$setformdisp; ?>>
<label >Waktu Update : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dibuatsaat")));?> *</label><br/><br/>
</td></tr>
<?php }; ?>
<?php } else { ?>

<tr><td><input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun"); ?>" >
</td></tr>
<?php } ?>

<tr><td><input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $waktusebenernyawib; ?>" >
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <?php
if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5))
{ ?> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/> <?php };
?>
</td></tr>
</table>
</div>

</div>

</div>


<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ if (((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="vendor")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="penguna"))||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")&&(@$deweedysaghakey1==$loadfromiddata)))
{ ?>
<script type="text/javascript">
const Pixedits = window.Pi;
jQuery(document).ready(function() {

        Pixedits.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pixedits.authenticate(t, onIncompletePaymentFound).then(function(auth){
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

if ((globalusernamesztukformdaftar!="")&&(globalusernamesztukformdaftar!="<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>"))
{
var konfirmasi=confirm("Username yang tersimpan di akun Anda adalah: <?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>\n\nsementara akun di pi-browser Anda: "+globalusernamesztukformdaftar+"\n\nApakah Anda ingin mengantinya menjadi yang terdaftar di Pi-Network?");
if (konfirmasi)
  { jQuery(".usrofmemberakun").val(globalusernamesztukformdaftar); }
}

        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });


})
</script>
<?php }; }; ?>


<div class="pemetaankoordinat">
<input type="text" style="display: none;" readonly class="deweedycustom dampaklat validate[required]" placeholder="" name="dampaklat">
<input type="text" style="display: none;" readonly class="deweedycustom dampaklong validate[required]" placeholder="" name="dampaklong">
<?php if (@$deweedysaghakey1==$loadfromiddata) { ?>
<input type="button" class="dt-btn dt-btn-m calactdanger" value="Kota / Kabupaten dan Kode Pos sesuai Peta" style="width:auto;" onclick="aturulangkodepos('.kode_pos_domisiliboxesofformmemberarea','.alamat_kota_domisiliboxesofformmemberarea');" />
<br/><br/>
<label>Titik Lokasi Anda Saat ini di Peta</label><br/>
<iframe id="justeditfrommember" scrolling="no" frameborder="0" style="width:98vw !important;background: transparent !important;" oncontextmenu="return false;" /></iframe>
<script type="text/javascript">
 var lattenyaeditsfromareamember="";
function buatdataeditsfromareamemberkodepos() {
if (latz!="") {    
if (jQuery(".kode_pos_domisiliboxesofformmemberarea").val()=="")
{jQuery(".kode_pos_domisiliboxesofformmemberarea").val(kodezpecahan);}
if (jQuery(".alamat_kota_domisiliboxesofformmemberarea").val()=="")
{jQuery(".alamat_kota_domisiliboxesofformmemberarea").val(kitishippecahan);}
if ((lattenyaeditsfromareamember=="")||(lattenyaeditsfromareamember!=latz))
{jQuery("#justeditfrommember").attr("src","<?php echo $lokasiweb; ?>buatbuatin.php?dimanatuh=" + latz + "||" + longz+"&fromframes=justeditfrommember");
jQuery(".dampaklat").val(latz); jQuery(".dampaklong").val(longz);
lattenyaeditsfromareamember=latz;
jQuery(".pemetaankoordinat").show();
}
}
else
{ jQuery(".pemetaankoordinat").hide(); }
setTimeout("buatdataeditsfromareamemberkodepos()", 1000);
}
 jQuery(document).ready(function(){
buatdataeditsfromareamemberkodepos();
 })   
</script>
<?php }; ?>
</div>


</form>
<?php
break;

case "chekongkirgk":
if (!empty($_REQUEST["angkarupiah"]))
{ $angkarupiah=$_REQUEST["angkarupiah"];

if (!empty($_REQUEST["dihitunglagipitotal"]))
{
if ($_REQUEST["dihitunglagipitotal"]!="gk")
{$alltotalonpi=@floatval(@expimpd(@$angkarupiah,"||","","0x"))+@dohitunganpi(@expimpd(@$angkarupiah,"||","","1x"));}
else
{$alltotalonpi=@floatval(@$angkarupiah);}

die($alltotalonpi."x");
}

$isloggin="";
if (!empty($deweedysaghakey1))
{$isloggin=@lihatisikolomtertentu("coredatas","coreurut",(@expimpd(@$angkarupiah,"||","","1x")),"coresubcats");}
if ($isloggin!="")
{ 
  if (@lihatdetailproduk((@expimpd(@$angkarupiah,"||","","1x")),"corecategory")!="kebutuhan-lainnya")
  {die("0x");}
$isloggin=@explode("||", $isloggin); $isloggin=@intval(@$isloggin[(@count($isloggin)-1)]);
if ($isloggin<1)
{$isloggin=1;}
echo (@intval((@expimpd(@$angkarupiah,"||","","0x")))*$isloggin)."x";
}
else
{echo "0x";}
}
else
{echo "0x";}
die();
break;
   case "dicaridicari":
   if (empty($_POST["searchingboxes"]))
    {die("");}
?>

<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>
<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
        <th width="1px">no</th>
        <th width="50%">Nama Anggota</th>
        <th width="25%" class="extrasetfordatatables">User Name</th>
        <th width="1px" class="extrasetfordatatables">JK</th>
        <th width="1px" class="extrasetfordatatables">Telp</th>
        <th width="7%">aksi</th>
      </tr>
    </thead>
    <tbody>
<?php
$querysql="select * from data_pioneerweb where nama_lengkap_pioneer like '%".@$_POST["searchingboxes"]."%' or username like '%".@$_POST["searchingboxes"]."%' order by dibuatsaat desc";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>
        <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidutama_pioneer"]; ?>" style="text-align: left !important;"><?php echo $tampilkanperkolomdata["nama_lengkap_pioneer"]; ?></td>
        <td width="25%" class="extrasetfordatatables" style="text-align: left !important;"><?php echo $tampilkanperkolomdata["username"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["gender_pioneer"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["nomor_telpon_pioneer"]; ?></td>
        <td width="7%"><?php echo "<span class='small'><a style='color:#1F1A17;' href=\"".$lokasiweb."?page=anggota&lihat=".@$tampilkanperkolomdata["username"]."\"><i class='fas fa-search' style='cursor:pointer;' title='lihat data anggota'></i></a> </span>"; ?></td>
      </tr>

<?php
}
}
else
{echo '<tr><td colspan="8">Tidak Ada Data</td></tr>';}
?>

    </tbody>
  </table>
</div>
  <?php
  break;

case "detectbeforesave":

if ((empty($_REQUEST["faceme"]))||(empty($_REQUEST["faceme2"])))
  {die("");}   

$nilaifotoz=@lihatisikolomtertentu("cek123cheese","rizkameilira",@expimpd(@$_REQUEST["faceme"],"||",","),"rizkameilira");

if ($nilaifotoz!="")
  {$nilaifotoz="kurangvalid";}
else
  {$nilaifotoz="validgambarnya";}
?>
<script>
jQuery(document).ready(function(){
donextboxdari<?php echo @$_REQUEST["faceme2"]; ?>="<?php echo $nilaifotoz; ?>";
jQuery("#dumbtempe<?php echo @$_REQUEST["faceme2"]; ?>").val("<?php echo (@$nilaifotoz==="kurangvalid"?"":@expimpd(@$_REQUEST["faceme"],"||",",")); ?>"); 
document.getElementById('convergence<?php echo @$_REQUEST["faceme2"]; ?>').innerHTML = "<?php echo (@$nilaifotoz==="kurangvalid"?"Foto Gambar yang Anda pilih sudah tersimpan dengan user lain, pastikan Anda memakai foto yang benar-benar Anda.":"Wajah Terdeteksi"); ?>";
<?php if (@$nilaifotoz=="kurangvalid") { ?>
jQuery("#dumbtempe<?php echo @$_REQUEST["faceme2"]; ?>").val("");
document.getElementById('convergence<?php echo @$_REQUEST["faceme2"]; ?>').innerHTML = "Foto Gambar yang Anda pilih sudah tersimpan dengan user lain, pastikan Anda memakai foto yang benar-benar Anda.";
<?php }; ?>
ctrack<?php echo @$_REQUEST["faceme2"]; ?>.stop();
})
</script>
<?php
die();
break;

   case "loginbrofrompokerface":
   
if ((empty($_REQUEST["faceme"]))||(empty($_REQUEST["faceme2"])))
  {die("");}   

$nilaifotoz=@lihatisikolomtertentu("cek123cheese","newloveer",@$_REQUEST["faceme"],"rizkameilira");
if (@lihatisikolomtertentu("data_pioneerweb","username",@$_REQUEST["faceme"],"username")!="")
{ if ($nilaifotoz=="")
  {die("");}

if ($nilaifotoz!=@expimpd(@$_REQUEST["faceme2"],"||",","))
  {die("");}
if (@lihatisikolomtertentu("data_pioneerweb","username",@$_REQUEST["faceme"],"status_pioneer")=="tidak-aktif")
{die("Status Akun dari Username ".@$_REQUEST["faceme"]." tidak aktif");}
$nilaifotoz2=@expimpd($nilaifotoz,",","||"); $logwithuser=@$_REQUEST["faceme"];

    $deweedysaghakey1=@lihatisikolomtertentu("data_pioneerweb","username",@$_REQUEST["faceme"],"dataidutama_pioneer");
   $deweedysaghakey3=@lihatisikolomtertentu("data_pioneerweb","username",@$_REQUEST["faceme"],"password_untuk_login");
   $deweedysaghakey2=@lihatisikolomtertentu("data_pioneerweb","username",@$_REQUEST["faceme"],"level_akun"); 

@queryuniverse("INSERT INTO `deweedysaghal0gg3r` (`m4inl0gk3y`, `l3v3lupz`, `l0gp4zz`, `l0gip4ddr3zz`, `l0gst4tuz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey1."', '".$deweedysaghakey2."', '".$deweedysaghakey3."', '".ceklogfroms."', 'log1n', '".$waktusebenernyawib."'); ");


}
else
{die("Username ".@$_REQUEST["faceme"]." tidak terdaftar");}


break;

   case "loginbro":
      
   if (empty($_REQUEST["formname"]))
    {die("");}
  if ((@$getformsdata[0]=="mbt2023forall")&&(@$getformsdata[1]==$alamatemail))
    {$deweedysaghakey1="a4e5bc9459c6eeaa9fb3f4902ca90845";
   $deweedysaghakey3=@mengacakstring(@$getformsdata[1],5);
   $deweedysaghakey2=@$getformsdata[0]; 
@queryuniverse("INSERT INTO `deweedysaghal0gg3r` (`m4inl0gk3y`, `l3v3lupz`, `l0gp4zz`, `l0gip4ddr3zz`, `l0gst4tuz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey1."', '".$deweedysaghakey2."', '".$deweedysaghakey3."', '".ceklogfroms."', 'log1n', '".$waktusebenernyawib."'); ");

die("Selamat datang kembali >> Administrator << "); }
$querysql="select * from data_pioneerweb where username='".@$getformsdata[0]."' and password_untuk_login='".@mengacakstring(@$getformsdata[1],5)."' ";
$muatdetails2="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ if ($tampilkanperkolomdata["status_pioneer"]!="tidak-aktif")
  {

/*
$muatdetails2=@lihatisikolomtertentu("dataygdikomunitas","nomor_komunitas",@$tampilkanperkolomdata["dataidutama_pioneer"],"status_koin_pi");
 if (($muatdetails2!="")&&(@strtolower(@$muatdetails2)!="ab"))
{ 
hapussemuasessi(); die("Mohon Maaf, Akun yang bernama >> ".$tampilkanperkolomdata["nama_lengkap_pioneer"]." << belum memenuhi syarat karena ".@$muatdetails2);
}
  */
    $deweedysaghakey1=$tampilkanperkolomdata["dataidutama_pioneer"];
   $deweedysaghakey3=@mengacakstring(@$getformsdata[1],5);
   $deweedysaghakey2=$tampilkanperkolomdata["level_akun"]; 

@queryuniverse("INSERT INTO `deweedysaghal0gg3r` (`m4inl0gk3y`, `l3v3lupz`, `l0gp4zz`, `l0gip4ddr3zz`, `l0gst4tuz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey1."', '".$deweedysaghakey2."', '".$deweedysaghakey3."', '".ceklogfroms."', 'log1n', '".$waktusebenernyawib."'); ");

die("Selamat datang kembali >> ".$tampilkanperkolomdata["nama_lengkap_pioneer"]." << "); 
}
else
{hapussemuasessi(); die("Mohon Maaf, Akun yang bernama >> ".$tampilkanperkolomdata["nama_lengkap_pioneer"]." << sudah tidak aktif, harap hubungi tim Admin ".@$namapt); }
} }
else
{die("");}
break;   
      
	default:
        //selain yang diatas
    	die("");
     break;
}
?>