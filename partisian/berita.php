<?php
if (empty($namawebsite))
{die();}
?>
<?php $newsid=$newsisi=$newsjudul=$newspostedat="";
if (empty($_REQUEST["loadcontent"]))
{ $newsid=@lihatisikolomtertentu("","","","beberkanurut","select * from beberkanlisting order by beberkanpostedat desc"); }
else
{ $newsid=@intval($_REQUEST["loadcontent"]); };
$newsid=@lihatisikolomtertentu("beberkanlisting","beberkanurut",@intval($newsid),"beberkanurut");
$newsjudul=($newsid===""?"No News to Show":@lihatisikolomtertentu("beberkanlisting","beberkanurut",@intval($newsid),"beberkanjudul"));
$newsisi=($newsid===""?"":@lihatisikolomtertentu("beberkanlisting","beberkanurut",@intval($newsid),"beberkanisi"));
$newspostedat=($newsid===""?"":"<p style='font-size:11px !important;'>Posted at: ".@date("d M Y -  H:i:s",@strtotime(@lihatisikolomtertentu("beberkanlisting","beberkanurut",@intval($newsid),"beberkanpostedat")))." <br/>Posted by: ".@lihatisikolomtertentu("beberkanlisting","beberkanurut",@intval($newsid),"beberkanpostedby")."</span>");
?>

<style type="text/css">
	.elementor-heading-title {margin-bottom: 27px !important;color:#ac802a !important;}
</style>
<div class="the7-icon-wrapper the7-elementor-widget" style="z-index:1;position: fixed;bottom:0;margin:0px 0 <?php echo @(@$runonmobile==="mobile"?"67px -5px !important;":"107px -27px !important;"); ?>font-size:40px !important;cursor: pointer;" onclick="opentheboxevents();"><i aria-hidden="true" class="fab fa-wpexplorer"></i></div> 
<section class="elementor-section elementor-top-section elementor-element elementor-element-33577c1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="33577c1" data-element_type="section" id="about" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d86e0f3" data-id="d86e0f3" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-6fee9b8 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="6fee9b8" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default" style="color:#850382 !important;margin-bottom: 0px !important; text-align: center;">Berita</h2> </div>
</div>
<div class="elementor-element elementor-element-0f816d0 elementor-widget elementor-widget-spacer" data-id="0f816d0" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>



<script type="text/javascript">
function opentheboxevents() {

if (jQuery("#boxofallevent").css("display")=="none")
    {jQuery("#boxofallevent").show("slow");}
else
    {jQuery("#boxofallevent").hide("slow");}

}

</script>
 

<div id="boxofallevent" style="display:none;position: fixed;bottom:0;z-index:2;background: rgba(250,250,250,0.95);box-shadow: 0 0 10px 1px rgba(133,3,130,0.6);width: 88vw !important;margin-left: -10px !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2bc84119" data-id="2bc84119" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-61ceeaca elementor-widget elementor-widget-theme-post-content" data-id="61ceeaca" data-element_type="widget" data-widget_type="theme-post-content.default">
<div class="elementor-widget-container">
<div data-elementor-type="wp-post" data-elementor-id="9761" class="elementor elementor-9761">
<section class="elementor-section elementor-top-section elementor-element elementor-element-dd53365 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd53365" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-caf360c" data-id="caf360c" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-439cd50 elementor-widget elementor-widget-heading" data-id="439cd50" data-element_type="widget" data-widget_type="heading.default">
<div style="margin-left: -10px !important;" class="elementor-widget-container">
<h4 class="elementor-heading-title elementor-size-default">Daftar Berita</h4> </div>
</div>
<div class="elementor-element elementor-element-04d0cc8 elementor-widget elementor-widget-spacer" data-id="04d0cc8" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div style="margin-left: -10px !important;">
    <style type="text/css">
.custommenuellipsis ul {width: 90% !important; }
.custommenuellipsis li {width: 52% !important;}     
  .custommenuellipsis li a div {cursor:pointer;white-space: nowrap !important;padding:2px 4px 3px 4px;  
    overflow: hidden !important;  
    text-overflow: ellipsis !important;  
    -o-text-overflow: ellipsis !important;  
    -ms-text-overflow: ellipsis !important; 
    -moz-text-overflow: ellipsis !important;height:30px;width: 90% !important;color:#562a79 !important;}
    .custommenuellipsis li a:hover div {background:#fbb34a !important; }
    </style>

<?php
$querysql="select * from beberkanlisting order by beberkanpostedat desc"; $hitungtotal=$jmltotal=0;
$jmltotal=queryuniverse($querysql,"num");
$querysql=$querysql." limit 0,3"; $hitungtotal=$jml=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");if (($hasil)&&($jml))
{
?> <ul id="newsblocks">
<?php   while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ 
?><li><a  onclick="loadisian('<?php echo @$tampilkanperkolomdata["beberkanurut"]; ?>');" data-level='1'>
<div><?php echo @$tampilkanperkolomdata["beberkanjudul"]; ?></div>
</a></li>
<?php $hitungtotal++; }; ?>
</ul>
<?php } else {echo "No News to show";}
if ($jmltotal>$hitungtotal)
{  ?>
<span id="buttonofadd" onclick="addnewsdatas();" style="cursor: pointer;padding: 2px 4px;" class="calactdanger">berita lainnya</span>
<?php }; ?>
<script>
var tempclue="";var tempcluecount=<?php echo $hitungtotal; ?>;
function loadisian(nextone=0) {
if (nextone=="")
{return false;}
jQuery.get('<?php echo $lokasiweb; ?>?docommand=isinews&loadcontent='+nextone, function(data){
   if (data!="")
    {jQuery("#tempconsole").html(data);}
})

}
function addnewsdatas() {
   jQuery.get('<?php echo $lokasiweb; ?>?docommand=loadnextnews&whatnext='+tempcluecount, function(data){
   if (data=="")
    {jQuery("#buttonofadd").hide();return false;}
    if (tempclue=="")
    {   jQuery("#newsblocks li:last-child").append(data);
    tempclue=toappended+jQuery(".toappended").size();
    }
    else
    {
    tempclue=toappended+jQuery(".toappended").size();
    jQuery("#"+tempclue).append(data);
    
    }
    })
}
</script>


</div>
</div>
</div>
</div>
</section>


</div>
</div>
</div>
</div>
</div>


<section style="width:100% !important;text-align: justify !important;" class="elementor-section elementor-top-section elementor-element elementor-element-1e9305f elementor-section-items-stretch elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="1e9305f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2bc84119" data-id="2bc84119" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-61ceeaca elementor-widget elementor-widget-theme-post-content" data-id="61ceeaca" data-element_type="widget" data-widget_type="theme-post-content.default">
<div class="elementor-widget-container">
<div data-elementor-type="wp-post" data-elementor-id="9761" class="elementor elementor-9761">
<section class="elementor-section elementor-top-section elementor-element elementor-element-dd53365 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd53365" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-caf360c" data-id="caf360c" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-439cd50 elementor-widget elementor-widget-heading" data-id="439cd50" data-element_type="widget" data-widget_type="heading.default">
<div style="margin-left: -10px !important;" class="elementor-widget-container">

<?php
$proideas=@lihatisikolomtertentu("beberkanlisting","beberkanurut",$newsid,"beberkanmainimages");
$proideas=($proideas===""?"-":$proideas);
$forbayar="box/beberkan/".@$proideas;
if (($proideas!="-")&&(file_exists($forbayar)))
{  ?>
<div style="width: 100%;text-align: center;margin-bottom: 33px !important;" oncontextmenu="return false;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 81%;height: auto;margin: 0 auto;"/></div>
<?php };  ?> 

<h3 class="elementor-heading-title elementor-size-default" id="judulberitaexchange"><?php echo $newsjudul; ?></h3> </div>
</div>
<div class="elementor-element elementor-element-04d0cc8 elementor-widget elementor-widget-spacer" data-id="04d0cc8" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div style=" <?php echo @(@$runonmobile==="mobile"?"width:111% !important;margin-left: -16px !important;":"width:100vw !important;margin-left: -10px !important;"); ?>min-height:10px;" id="isiberitaexchange">
<?php echo $newsisi; ?>
<?php echo $newspostedat; ?>
</div>
</div>
</div>
</div>
</section>


</div>
</div>
</div>
</div>
</div>



</div>
</section>

</div>
</div>
</div>
</section>




