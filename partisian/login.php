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
	<?php };  ?>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Selamat Datang, Silahkan Lakukan Login</h2>
<br/><br/>

<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 100% !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container afterloginboxes" style="<?php echo @(@$runonmobile==="mobile"?"margin-left: -10px !important;":"margin-left: -30px !important;"); ?>min-height:100px;">

<script>
function lakukanloginfromlogin() { 
            jQuery.post('<?php echo $lokasiweb; ?>?docommand=loginbro&formname=inputandatafromlogin',jQuery("#formdaftarinfromlogin").serialize(), function(data){
            if (data=="")
            {alert("Akun Tidak ditemukan, Silahkan Ulangi");return false;} 
            alert(data);
            if (data.substring(0, 5)!="Mohon")
            {window.location.href='<?php echo $lokasiweb; ?>?page=member-area';}
            return false;
        });
return false;
}
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ ?>
const Pixlog = window.Pi;
jQuery(document).ready(function() {

        Pixlog.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pixlog.authenticate(t, onIncompletePaymentFound).then(function(auth){
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
jQuery("#usernmboxfromloginboxs").val(globalusernamesz);
        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });
})
<?php }; ?>

</script>
<form class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinfromlogin" onsubmit="lakukanloginfromlogin(); return false;">
<div class="form-fields">
<label >Username *</label><br/>
<input type="text" class="deweedycustom validate[required]" id="usernmboxfromloginboxs" onkeyup="detectusn4low('usernmboxfromloginboxs');" placeholder="Username untuk Login saat pendaftaran *" value="" name="inputandatafromlogin[]" required> <br/>
<label >Password *</label><br/><input type="password" class="deweedycustom validate[required]" placeholder="Password untuk Login saat pendaftaran *" name="inputandatafromlogin[]" value="" required> <br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="Login" style="width:auto;margin-top:5px !important;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;margin-top:5px !important;"/> <input type="button" class="dt-btn dt-btn-m calact" value="Reset Password" onclick="pingpong('usernmboxfromloginboxs');" style="width:auto;margin-top:5px !important;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" value="Face Detection" onclick="loadxvideos('usernmboxfromloginboxs');" style="width:auto;margin-top:5px !important;"/>
</div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>
