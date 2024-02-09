<?php
if (empty($namawebsite))
{die();}
?>
<script>
function sayahadirkeun(pionid="",eventid="")
{ if ((pionid=="")||(eventid==""))
    {return false;}
jQuery("#boxforloadqr").load("<?php echo $lokasiweb; ?>loadqr/claimevent.php?eventaries="+eventid+"&dinyatakan="+pionid);
jQuery("#boxforloadqr").show("slow");
}
</script>
<style type="text/css">
    #boxforloadqr {width: 100%;display: none;text-align: center;}
    #boxforloadqr img {width: 50%;height: auto;}
    .clipklab { width: 100%;
            display: block;
            white-space: pre-wrap;
            word-break: break-all;
            clip-path: polygon(75% 0, 100% 15%, 100% 60%, 100% 100%, 25% 100%, 0 85%, 0 0);
            margin-bottom:18px;
        }
            .clipklab img { width: 100%;height: auto;max-height: 333px !important;}
    .eventblocx {display: inline-flex;width: 28.5%;min-height: 100px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);}
.eventblocx table, .eventblocx tr td {position: relative;width: 98%;display: block;font-size: 100%;width:100% !important;border:0;}
.eventblocx li {position: relative;width: 98%;display: block;font-size: 100%;text-align: left !important;margin-bottom: 9px;}
.eventblocx h2 {position: relative;width: 98%;display: block;font-size: 100%;text-align: center;}
.eventblocx h3 {position: relative;width: 98%;display: block;font-size: 100%;text-align: center;border-bottom: 1px solid #eaeaea;padding: 6px 7px 11px 7px;width: 96%;margin-bottom: 5px;}
.eventblocx .readmore, .postfoot {margin: 13px 0 7px 7px;font-size: 69%;} .postfoot {border-top: 1px solid #eaeaea;padding: 8px 1px 4px 7px;text-align: right;} .postfoot span { margin-right: 9px; } .postfoot i {margin-right: 4px;}
        @media (min-width: 901px) and (max-width: 930px) {
            .eventblocx {width: 28.3% !important;}
        }
        @media (min-width: 0px) and (max-width: 900px) {
            .eventblocx {width: 100% !important;}
        }


        .blockwidth {display: inline-flex;width: 47%;min-height: 100px; padding: 4px 3px;margin: 12px 10px 20px 9px;vertical-align: top;}
        
        #buttonwa {padding: 3px 6px 7px 6px;border: 1px solid rgba(234,234,234,0.6);font-size: 90% !important;}
        
        @media (min-width: 751px) and (max-width: 990px) {
            .blockwidth {width: 44.7% !important;}
        }

        @media (min-width: 649px) and (max-width: 750px) {
            .blockwidth {width: 45% !important;}
        }

        @media (min-width: 0px) and (max-width: 648px) {
            .blockwidth {width: 96% !important;}
        }
</style>

<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Event</h2>
<br/><br/>

<section style="text-align: justify !important;" class="elementor-section elementor-top-section elementor-element elementor-element-1e9305f elementor-section-items-stretch elementor-section-height-min-height elementor-section-boxed elementor-section-height-default" data-id="1e9305f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<script type="text/javascript">
function opentheboxevents() {

if (jQuery("#boxofallevent").css("display")=="none")
    {jQuery("#boxofallevent").show("slow");}
else
    {jQuery("#boxofallevent").hide("slow");}

}

</script>
<div class="the7-icon-wrapper the7-elementor-widget" style="z-index:1;position: fixed;bottom:0;margin:0px 0 <?php echo @(@$runonmobile==="mobile"?"67px -5px !important;":"107px -27px !important;"); ?>font-size:40px !important;cursor: pointer;" onclick="opentheboxevents();"><i aria-hidden="true" class="fab fa-wpexplorer"></i></div> 

<div id="boxofallevent" style="display:none;position: fixed;bottom:0;z-index:4;background: rgba(250,250,250,0.95);box-shadow: 0 0 10px 1px rgba(133,3,130,0.6);width: 88vw !important;margin-left: -10px !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2bc84119" data-id="2bc84119" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-61ceeaca elementor-widget elementor-widget-theme-post-content" data-id="61ceeaca" data-element_type="widget" data-widget_type="theme-post-content.default">
<div class="elementor-widget-container">
<div data-elementor-type="wp-post" data-elementor-id="9761" class="elementor elementor-9761">
<section class="elementor-section elementor-top-section elementor-element elementor-element-dd53365 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd53365" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-caf360c" data-id="caf360c" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-439cd50 elementor-widget elementor-widget-heading" data-id="439cd50" data-element_type="widget" data-widget_type="heading.default">
<div style="margin-left: 0px !important;" class="elementor-widget-container">
    <span class="pigoldbutton" onclick="opentheboxevents();" style="cursor: pointer;padding:2px 7px;float:right;font-weight: bold;">close</span>
<h4 class="elementor-heading-title elementor-size-default">Daftar Event</h4> <br/><br/></div>
</div>
<div style="margin-left: -10px !important;width:101% !important;height:auto;max-height: 330px !important;overflow-x: hidden;overflow-y:auto !important;">
    <style type="text/css">
.custommenuellipsis ul {width: 90% !important; }
.custommenuellipsis li {width: 52% !important;}     
  .custommenuellipsis li a div {white-space: nowrap !important;padding:2px 4px 3px 4px;  
    overflow: hidden !important;  
    text-overflow: ellipsis !important;  
    -o-text-overflow: ellipsis !important;  
    -ms-text-overflow: ellipsis !important; 
    -moz-text-overflow: ellipsis !important;height:30px;width: 90% !important;color:#562a79 !important;}
    .custommenuellipsis li a:hover div {background:#fbb34a !important; }
    </style>

<?php
$querysql="select * from mediaeo order by waktueventz desc"; $hitungtotal=$jmltotal=0;
$jmltotal=queryuniverse($querysql,"num");
$querysql=$querysql." limit 0,3"; $hitungtotal=$jml=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{
?> <ul id="newsblocks" >
<?php   while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ 
$newsberlaku=@$tampilkanperkolomdata["durasievent"];
$newsberlaku=@strtotime((@intval($newsberlaku)===0?@$tampilkanperkolomdata["waktueventz"]:@dapatkantanggaltujuan(@$tampilkanperkolomdata["waktueventz"],$newsberlaku)));
if ($newsberlaku>=@strtotime(date("Y-m-d")))
{ ?><li><a href='<?php echo $lokasiweb; ?>?page=event&loadcontent=<?php echo @$tampilkanperkolomdata["kodeventz"]; ?>' data-level='1'>
<div id="<?php echo "onfirstlist".$hitungtotal; ?>" style="display: none !important;"><?php echo @$tampilkanperkolomdata["kodeventz"]; ?></div><div><?php echo @$tampilkanperkolomdata["namaeventz"]; ?></div>
</a></li>
<?php  };
$hitungtotal++;
}; ?>
</ul>
<?php } else {echo "No Event to show";}
if ($jmltotal>$hitungtotal)
{  ?>
<span id="buttonofadd" onclick="addnewsdatas();" style="cursor: pointer;">berita lainnya</span>
<?php }; ?>
<script>
var tempclue="";var tempcluecount=<?php echo $hitungtotal; ?>;
function addnewsdatas() {
   jQuery.get('<?php echo $lokasiweb; ?>?docommand=loadnexteos&loadpage=event&whatnext='+tempcluecount, function(data){
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
jQuery(document).ready(function() {

<?php
if (empty($_REQUEST["loadcontent"]))
{ ?>
var zupgirl=jQuery("#onfirstlist0").html();
<?php }
else
{echo 'var zupgirl="'.@$_REQUEST["loadcontent"].'";';} ?>
jQuery("#eventcontainers").load('<?php echo $lokasiweb; ?>?docommand=doreloadeventdata&loadcontent='+zupgirl);
})
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
<div style="margin-left: -18px !important;" class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default" style="text-align: center;" id="eventjuduls">

</h3><br/><br/> </div>
</div>
<div class="elementor-element elementor-element-04d0cc8 elementor-widget elementor-widget-spacer" data-id="04d0cc8" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div style=" <?php echo @(@$runonmobile==="mobile"?"width:111% !important;margin-left: -16px !important;":"width:87vw !important;margin-left: -18px !important;"); ?>min-height:10px;" id="eventcontainers">

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

