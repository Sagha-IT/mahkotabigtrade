<?php
//die('<h1 style="width: 100%;padding-top: 20%;text-align: center;">We Are Now Upgrading Our Server, Please Come back soon</h1>');
//die(phpinfo());
//echo phpinfo();
//die();

/* email gmail
email: bsusejahtera@gmail.com
password: BSUSjahtera+19112022rw06
*/
if (!(session_start()))
{ session_start(); }
/* if (file_exists(".htaccess"))
{unlink(".htaccess");}
*/

$agenrahasiasaghait=$_SERVER['HTTP_USER_AGENT'];
if (!empty($_REQUEST["cekagensi"]))
  {die($_SERVER['HTTP_USER_AGENT']);}
/* 
1 pi = 314159 dolar
1 dolar = 14795 rupiah / 0.0000032 pi
1 pi = 4653041264 rupiah
Superuser login: No Telp: mbt2023forall
password mengunakan email setting seperti $alamatemail di atas
*/
//$alamatemail="widyansyah@deweedyweb.com";
$hubungikami1=explode("||","Nama||Nomor Telp||Alamat||Pertanyaan Anda||Negara||Jam kerja : Senin - Jumat | ");  
$hubungikami2=explode("||","Nama Anda||Masukkan Nomor Telepon tanpa 'nol' di nomor pertama. Contoh: ||Alamat Anda||Pertanyaan Anda||-");   
$judulmail=explode("||","E-Mail notifikasi bahwa seseorang telah mengisi formulir kontak kami dari situs web||Terima kasih telah mengunjungi situs web kami, di bawah ini adalah rincian pertanyaan yang diajukan||Pada akhirnya ini||dibuat sebagai laporan kontak Anda dan staf kami akan segera menghubungi Anda melalui whatsapp");
$thebutton=explode("||","kirim||ulangi||hapus||muat ulang||batal||kirim lewat whatsapp||tambah||cari||tutup");
$errormessage=explode("||","akun tidak ditemukan||terjadi kesalahan, silahkan ulangi lagi||Anda Sudah Log Out dari system");
$welcomemessage7=explode("||","Selamat datang kembali||Selamat datang, silahkan login||Proses Berhasil||Login Sebagai||Pengunjung||Selamat datang di Laman Spesial Anggota||Menu Laman Anggota||Gambarnya Sudah diterima oleh sistem informasi kami||Gambarnya Gagal diterima oleh sistem informasi kami||Gambarnya Tidak diterima oleh sistem informasi kami karena bukan berformat jpg");
$headfields2=explode("||","DN||LN||L||P||Tidak ada data yang bisa ditampilkan||Cari berdasarkan||Semua||Laki-Laki||Perempuan||-||-||Dalam Negeri||Luar Negeri||Tempat Lahir||Tanggal Lahir||Lihat Gambar||Tutup Gambar||print pencarian||print semua||-||(103.02 dan 13 Februari 2018)||Tanggal Verifikasi Tahunan Terakhir||Tanggal||Lampiran surat||Nomor||Pilih Berkas untuk menambahkan foto||Apakah Anda yakin ingin menghapus data ini||Apakah Anda yakin untuk menghapus gambar ini||Paspor sudah ada, silahkan diganti||Username sudah ada, silahkan diganti||Biarkan kosong apabila tidak ingin mengganti password");
$headfields3=explode("||","Nama Pelaut||Paspor||Sign On||Sign Off||Status||Aksi");
$newseditor=explode("||","Judul Berita untuk Versi Indonesia||Isi Berita untuk Versi Indonesia||Jadikan Headline hingga||Gambar Utama||Diposkan pada:||Diposkan Oleh:||hapus gambar utama saat ini");
$newseditor2="Berita Utama: ";$newseditor3="Tidak Ada Artikel"; $newseditor4="Artikel Kami lainnya";
$vistcount=explode("||","Jumlah Pengunjung Kami:||Hari ini:||Bulan Ini:||Tahun ini:");
if (file_exists("systemfunction.php"))
{require ('systemfunction.php');}
else
{die("Mohon Maaf, Website saya saat ini sedang dalam perbaikan, silahkan datang lagi dilain waktu");}
$pesannya="";
if (!empty($_REQUEST["mailconfirm"]))
{ 
$querykonf="update `data_pioneerweb` set status_pioneer='aktif' where dataidutama_pioneer='".@$_REQUEST["mailconfirm"]."'";
@queryuniverse($querykonf);
  $hasilkonfirm=(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$_REQUEST["mailconfirm"],"status_pioneer")==="aktif"?"E-Mail Berhasil dikonfirmasi":"Gagal Verifikasi E-Mail karena Data Pioneer Tidak ditemukan");
?>
<script>
alert("<?php echo $hasilkonfirm; ?>");
window.location.href='<?php echo $lokasiweb; ?>?page=login';
</script>
<?php
die();
}
if (!empty($_REQUEST["resetorresister"]))
{ 
if (empty($_REQUEST["twistedtransistor"]))
{ ?>
<script>
alert("Proses Gagal");
window.location.href='<?php echo $lokasiweb; ?>?page=login';
</script>
<?php
die(); }
$saveneonepass=@mengacakstring(@$_REQUEST["twistedtransistor"],5);
$querykonf="update `data_pioneerweb` set password_untuk_login='".$saveneonepass."' where dataidutama_pioneer='".@$_REQUEST["resetorresister"]."'";
@queryuniverse($querykonf);
  $hasilkonfirm="Password Anda Telah Berhasil di Ganti";
?>
<script>
alert("<?php echo $hasilkonfirm; ?>");
window.location.href='<?php echo $lokasiweb; ?>?page=login';
</script>
<?php
die();
}

$pathzp = "./miyaryona/";
$isi_dirzp = @opendir($pathzp);
if (!($isi_dirzp))
{die("Wajib Hati2, ada yang mencoba meretas");}
$loopscans=$loopnumber=0;
while ($filezpx = readdir($isi_dirzp)) {
$gettodelete=substr($filezpx, 0, 2);
if (($filezpx=="index.php")||($filezpx=="..")||($filezpx==".")||($filezpx==".DS_Store")||($gettodelete=="._"))
{continue;};
@unlink($pathzp.$filezpx);
}
if ((@$deweedysaghakey1!="")&&(@$deweedysaghakey1!=mengacakstring("mbt2023forall",5)))
{
$forbayar="box/photoexp/".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$deweedysaghakey1,"dataidutama_pioneer").".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{

ini_set('memory_limit', -1);
$image_path=$forbayar; $coffe_mug_path="./openmapsz/forcombinemark.png";
$image_path_temp=$pathzp.@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$deweedysaghakey1,"dataidutama_pioneer").".jpg";

@compresszz($image_path, $image_path_temp, 100,25,25 );
$tujuannyahasil=$pathzp.@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$deweedysaghakey1,"dataidutama_pioneer").'.png';
  $image = imagecreatefromstring(file_get_contents($coffe_mug_path));
  $coffe_mug= imagecreatefromstring(file_get_contents($image_path_temp));
@unlink($tujuannyahasil);
//$outputImage = imagecreatetruecolor(25, 41);
  // merge the two
//imagecopymerge(    GdImage $dst_image,  GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct ):
@unlink($image_path_temp);
  imagecopymerge($image, $coffe_mug, 0, 0, 0, 0, 25, 24, 100);

imagesavealpha($image, true);
$color = imagecolorallocatealpha($image, 0, 0, 0, 127);
imagefill($image, 0, 0, $color);
  imagepng($image, $tujuannyahasil);
  imagedestroy($image);
};
}

$webwa="https://".$webwa."/send?phone=62".$nohp."&text=Terima%20kasih%20telah%20menghubungi%20kami%20Mahkota%20Big%20Trade.%0AAdmin%20akan%20segera%20merespon%20pesan%20Anda.%0AJika%20ada%20yang%20ingin%20ditanyakan,%20langsung%20saja%20tuliskan%20di%20bawah,%20ya...%0ATerima%20kasih";

$sekarangdimana="home";
if (!empty($_REQUEST["page"]))
{$sekarangdimana=$_REQUEST["page"];}

$susunberita="";
if ($sekarangdimana!="berita")
{$querysql="select * from beberkanlisting order by beberkanisiheadhingga asc"; $hitungtotal=0; $susunberita="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $kodz=@$tampilkanperkolomdata["beberkanurut"];
    $palingbanter=strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"]);
if (strtotime(date("Y-m-d"))>($palingbanter))
{ queryuniverse("update beberkanlisting set beberkanisiheadhingga='' where beberkanurut='".@$kodz."' ");}
else
{$susunberita.="&nbsp;<a href='".$lokasiweb."?page=berita&loadcontent=".@$kodz."' style='text-decoration:none;'>".@$tampilkanperkolomdata["beberkanjudul"]."</a>&nbsp;-";
 }; }
if ($susunberita!="")
    {$susunberita="Headline News: ".@substr($susunberita, 0,-1);}
};
}


?>
<!DOCTYPE html>
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" class="no-js">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="theme-color" content="#850382" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<script type="text/javascript">
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var originalAddEventListener = EventTarget.prototype.addEventListener,
                    oldWidth = window.innerWidth;

                EventTarget.prototype.addEventListener = function (eventName, eventHandler, useCapture) {
                    if (eventName === "resize") {
                        originalAddEventListener.call(this, eventName, function (event) {
                            if (oldWidth === window.innerWidth) {
                                return;
                            }
                            oldWidth = window.innerWidth;
                            if (eventHandler.handleEvent) {
                                eventHandler.handleEvent.call(this, event);
                            }
                            else {
                                eventHandler.call(this, event);
                            };
                        }, useCapture);
                    }
                    else {
                        originalAddEventListener.call(this, eventName, eventHandler, useCapture);
                    };
                };
            };
        </script>
<title><?php echo $judulweb; ?></title>
<meta name='robots' content='max-image-preview:large' />
<script id="the7-cloudflare-mobile-menu-fix">
        document.addEventListener("DOMContentLoaded", function(event) {
            var mobileMenuImages = document.body.querySelectorAll("#mobile-menu img");
            var brandingImages = document.body.querySelectorAll(".branding img");
            var slideshowImages = document.body.querySelectorAll("#main-slideshow img");

            Array.prototype.forEach.call(mobileMenuImages, function (el) {
                el.setAttribute("data-cfstyle", el.getAttribute("style"));
            });
            Array.prototype.forEach.call(brandingImages, function (el) {
                el.setAttribute("style", "");
            });
            Array.prototype.forEach.call(slideshowImages, function (el) {
                if (!el.getAttribute("src") && el.getAttribute("data-cfsrc")) {
                    el.setAttribute("src", el.getAttribute("data-cfsrc"));
                }
            });
        });
    </script>
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='<?php echo $lokasiweb; ?>plugin/wc-blocks-vendors-style.css?ver=8.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='<?php echo $lokasiweb; ?>plugin/wc-blocks-style.css?ver=8.5.2' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='elementor-icons-css' href='https://the7.io/business-advisors/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css' href='<?php echo $lokasiweb; ?>plugin/custom-frontend-legacy.min.css?ver=3.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='<?php echo $lokasiweb; ?>plugin/custom-frontend.min.css?ver=1668779602' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2888-css' href='<?php echo $lokasiweb; ?>plugin/post-2888.css?ver=1668779602' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='<?php echo $lokasiweb; ?>plugin/custom-pro-frontend.min.css?ver=1668779602' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='<?php echo $lokasiweb; ?>plugin/global.css?ver=1668779602' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-4-css' href='<?php echo $lokasiweb; ?>plugin/post-4.css?ver=1668779812' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2900-css' href='<?php echo $lokasiweb; ?>plugin/post-2900.css?ver=1668779602' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-752-css' href='<?php echo $lokasiweb; ?>plugin/post-752.css?ver=1668779602' type='text/css' media='all' />
<link rel='stylesheet' id='dt-main-css' href='<?php echo $lokasiweb; ?>plugin/main.min.css?ver=11.2.0-b11181424' type='text/css' media='all' />

<style id='dt-main-inline-css' type='text/css'>
body #load {
  display: block;
  height: 100%;
  overflow: hidden;
  position: fixed;
  width: 100%;
  z-index: 9901;
  opacity: 1;
  visibility: visible;
  transition: all .35s ease-out;
}
.load-wrap {
  width: 100%;
  height: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  text-align: center;
  display: -ms-flexbox;
  display: -ms-flex;
  display: flex;
  -ms-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-flow: column wrap;
  flex-flow: column wrap;
  -ms-flex-pack: center;
  -ms-justify-content: center;
  justify-content: center;
}
.load-wrap > svg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
#load {
  background: var(--the7-elementor-beautiful-loading-bg,#ffffff);
  --the7-beautiful-spinner-color2: var(--the7-beautiful-spinner-color,rgba(0,0,0,0.12));
}

</style>
<link rel='stylesheet' id='the7-custom-scrollbar-css' href='<?php echo lokasiprogram; ?>plugin/custom-scrollbar.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-core-css' href='<?php echo $lokasiweb; ?>plugin/post-type.min.css?ver=2.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css' href='<?php echo $lokasiweb; ?>plugin/custom-frontend-legacy.min.css?ver=3.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='<?php echo $lokasiweb; ?>plugin/custom-frontend.min.css?ver=1668778153' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2888-css' href='<?php echo $lokasiweb; ?>plugin/post-2888.css?ver=1668778153' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='<?php echo $lokasiweb; ?>plugin/custom-pro-frontend.min.css?ver=1668778153' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='<?php echo $lokasiweb; ?>plugin/global.css?ver=1668778153' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-4-css' href='<?php echo $lokasiweb; ?>plugin/post-4.css?ver=1668778153' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2900-css' href='<?php echo $lokasiweb; ?>plugin/post-2900.css?ver=1668778153' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-752-css' href='<?php echo $lokasiweb; ?>plugin/post-752.css?ver=1668778154' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-8312-css' href='<?php echo $lokasiweb; ?>plugin/post-8312.css?ver=1668778154' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-4761-css' href='<?php echo $lokasiweb; ?>plugin/post-4761.css?ver=1668778154' type='text/css' media='all' />

<link rel='stylesheet' id='the7-css-vars-css' href='https://the7.io/business-advisors/wp-content/uploads/sites/72/the7-css/css-vars.css?ver=ca9ce2d7c76c' type='text/css' media='all' />
<link rel='stylesheet' id='dt-custom-css' href='https://the7.io/business-advisors/wp-content/uploads/sites/72/the7-css/custom.css?ver=ca9ce2d7c76c' type='text/css' media='all' />
<link rel='stylesheet' id='wc-dt-custom-css' href='https://the7.io/business-advisors/wp-content/uploads/sites/72/the7-css/compatibility/wc-dt-custom.css?ver=ca9ce2d7c76c' type='text/css' media='all' />
<link rel='stylesheet' id='dt-media-css' href='https://the7.io/business-advisors/wp-content/uploads/sites/72/the7-css/media.css?ver=ca9ce2d7c76c' type='text/css' media='all' />
<link rel='stylesheet' id='the7-elements-albums-portfolio-css' href='https://the7.io/business-advisors/wp-content/uploads/sites/72/the7-css/the7-elements-albums-portfolio.css?ver=ca9ce2d7c76c' type='text/css' media='all' />
<link rel='stylesheet' id='the7-elements-css' href='https://the7.io/business-advisors/wp-content/uploads/sites/72/the7-css/post-type-dynamic.css?ver=ca9ce2d7c76c' type='text/css' media='all' />
<link rel='stylesheet' id='dt-demostand-plugin-styles-css' href='<?php echo lokasiprogram; ?>plugin/public.css?ver=2.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='style-css' href='https://the7.io/business-advisors/wp-content/themes/dt-the7/style.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-elementor-global-css' href='<?php echo $lokasiweb; ?>plugin/elementor-global.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Noto+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-the7-feather-css' href='https://the7.io/business-advisors/wp-content/uploads/sites/72/elementor/custom-icons/the7-feather/style.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://the7.io/business-advisors/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://the7.io/business-advisors/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css' href='https://the7.io/business-advisors/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/jquery.min.js.download?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/jquery-migrate.min.js.download?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' id='dt-above-fold-js-extra'>
/* <![CDATA[ */
var dtLocal = {"themeUrl":"https:\/\/the7.io\/business-advisors\/wp-content\/themes\/dt-the7","passText":"To view this protected post, enter the password below:","moreButtonText":{"loading":"Loading...","loadMore":"Load more"},"postID":"4","ajaxurl":"https:\/\/the7.io\/business-advisors\/wp-admin\/admin-ajax.php","REST":{"baseUrl":"https:\/\/the7.io\/business-advisors\/wp-json\/the7\/v1","endpoints":{"sendMail":"\/send-mail"}},"contactMessages":{"required":"One or more fields have an error. Please check and try again.","terms":"Please accept the privacy policy.","fillTheCaptchaError":"Please, fill the captcha."},"captchaSiteKey":"","ajaxNonce":"de228ecdfe","pageData":{"type":"page","template":"page","layout":null},"themeSettings":{"smoothScroll":"off","lazyLoading":false,"accentColor":{"mode":"solid","color":"#999999"},"desktopHeader":{"height":""},"ToggleCaptionEnabled":"disabled","ToggleCaption":"Navigation","floatingHeader":{"showAfter":94,"showMenu":false,"height":64,"logo":{"showLogo":true,"html":"","url":"https:\/\/the7.io\/business-advisors\/"}},"topLine":{"floatingTopLine":{"logo":{"showLogo":false,"html":""}}},"mobileHeader":{"firstSwitchPoint":1150,"secondSwitchPoint":600,"firstSwitchPointHeight":60,"secondSwitchPointHeight":50,"mobileToggleCaptionEnabled":"right","mobileToggleCaption":"Menu"},"stickyMobileHeaderFirstSwitch":{"logo":{"html":""}},"stickyMobileHeaderSecondSwitch":{"logo":{"html":""}},"content":{"textColor":"#666666","headerColor":"#000000"},"sidebar":{"switchPoint":992},"boxedWidth":"1280px","stripes":{"stripe1":{"textColor":"#787d85","headerColor":"#3b3f4a"},"stripe2":{"textColor":"#8b9199","headerColor":"#ffffff"},"stripe3":{"textColor":"#ffffff","headerColor":"#ffffff"}}},"wcCartFragmentHash":"acbd719cef834b76f8533bee1ec19918","elementor":{"settings":{"container_width":1350}}};
var dtShare = {"shareButtonText":{"facebook":"Share on Facebook","twitter":"Tweet","pinterest":"Pin it","linkedin":"Share on Linkedin","whatsapp":"Share on Whatsapp"},"overlayOpacity":"90"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/above-the-fold.min.js.download?ver=11.1.1-b10311455' id='dt-above-fold-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/woocommerce.min.js.download?ver=11.1.2' id='dt-woocommerce-js'></script>
<link rel="https://api.w.org/" href="https://the7.io/business-advisors/wp-json/" />
<link rel="alternate" type="application/json" href="https://the7.io/business-advisors/wp-json/wp/v2/pages/4" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://the7.io/business-advisors/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="Sagha IT" />
<link rel="canonical" href="<?php echo $lokasiweb; ?>" />
<link rel='shortlink' href='<?php echo $lokasiweb; ?>' />
<link rel="alternate" type="application/json+oembed" href="https://the7.io/business-advisors/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthe7.io%2Fbusiness-advisors%2F" />
<meta property="og:site_name" content="<?php echo $judulweb; ?>" />
<meta property="og:title" content="<?php echo $judulweb; ?>" />
<meta property="og:description" content="<?php echo @$deskripsi; ?>" />
<meta property="og:url" content="<?php echo $lokasiweb;?> " />
<meta property="og:type" content="website" />
<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><script type="text/javascript" id="the7-loader-script">
document.addEventListener("DOMContentLoaded", function(event) {
  var load = document.getElementById("load");
  if(!load.classList.contains('loader-removed')){
    var removeLoading = setTimeout(function() {
      load.className += " loader-removed";
    }, 300);
  }
});
</script>
<link rel="icon" href="<?php echo $lokasiweb; ?>logo-mbt.png" sizes="32x32" />
<link rel="icon" href="<?php echo $lokasiweb; ?>logo-mbt.png" sizes="192x192" />
<link rel="apple-touch-icon" href="<?php echo $lokasiweb; ?>logo-mbt.png" />
<meta name="msapplication-TileImage" content="<?php echo $lokasiweb; ?>logo-mbt.png" />
<link rel="preload" href="/business-advisors/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=8.5.2" as="style"><link rel="preload" href="/business-advisors/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=8.5.2" as="style"><link rel="preload" href="/business-advisors/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/custom-frontend-legacy.min.css?ver=3.7.8" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/custom-frontend.min.css?ver=1667383435" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/post-2888.css?ver=1667383435" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/custom-pro-frontend.min.css?ver=1667383435" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/global.css?ver=1667383435" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/post-4.css?ver=1667383436" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/post-2900.css?ver=1667383436" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/elementor/css/post-752.css?ver=1667383437" as="style"><link rel="preload" href="/business-advisors/wp-content/themes/dt-the7/css/main.min.css?ver=11.1.1-b10311455" as="style"><link rel="preload" href="/business-advisors/wp-content/themes/dt-the7/lib/custom-scrollbar/custom-scrollbar.min.css?ver=11.1.1-b10311455" as="style"><link rel="preload" href="/business-advisors/wp-content/plugins/dt-the7-core/assets/css/post-type.min.css?ver=2.7.1" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/the7-css/css-vars.css?ver=ca9ce2d7c76c" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/the7-css/custom.css?ver=ca9ce2d7c76c" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/the7-css/compatibility/wc-dt-custom.css?ver=ca9ce2d7c76c" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/the7-css/media.css?ver=ca9ce2d7c76c" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/the7-css/the7-elements-albums-portfolio.css?ver=ca9ce2d7c76c" as="style"><link rel="preload" href="/business-advisors/wp-content/uploads/sites/72/the7-css/post-type-dynamic.css?ver=ca9ce2d7c76c" as="style"><link rel="preload" href="/business-advisors/wp-content/plugins/dt-demostand/assets/public.css?ver=2.3.3" as="style"><style id='the7-custom-inline-css' type='text/css'>
.sub-nav .menu-item i.fa,
.sub-nav .menu-item i.fas,
.sub-nav .menu-item i.far,
.sub-nav .menu-item i.fab {
  text-align: center;
  width: 1.25em;
}
.elementor-heading-title,.elementor-icon,.box-heading {color:#850382 !important;}
footer * {color:#fff !important;}
  footer h2, b, i, u { color:#850382 !important;text-shadow: 2px 0 #fff, -2px 0 #fff, 0 2px #fff, 0 -2px #fff,
             1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff; }
.specialsection {background:rgba(133,3,130,0.8) !important;color:#fff !important;}
.specialsection .elementor-heading-title {color:#850382 !important;text-shadow: 2px 0 #fff, -2px 0 #fff, 0 2px #fff, 0 -2px #fff,
             1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;letter-spacing: 1.1px;}
footer  .costumeblock .elementor-icon {background-color:#850382 !important;box-shadow: 0px 0 10px 1px rgba(255,255,255,0.8);}
.actlinked,.actlinked .open-button,.actlinked .desktop-menu-icon,nav *:hover {color:#850382 !important;}
}
.elementor-form .elementor-field {color:#850382 !important;}
.graybutton {background: #818A91 !important;color: #fff !important;}
.graybutton:hover {background: #000 !important;color: #fff !important;}
.bigtaber {width:95%;height:auto;padding:7px;margin:0 auto 20px auto;border-radius:7px;-webkit-transition:all .5s ease-in-out ;-moz-transition:all .5s ease-in-out ;box-shadow:0 0 13px 1px #eee;}
.bigtaber:last-child {margin-bottom: 0;}
.bigtaber .tabhead {font-size: 123%;font-weight: bolder;letter-spacing: 1.1;cursor: pointer;}
.bigtaber .tabhead span {float:right;font-size:81%;}
.bigtaber .tabcontent {min-height: 50px;background:#fff;color:#000;display: none;padding:5px 5px 18px 5px;border:1px solid #0078a5;border-top:0;margin: 9px 0px 1px 0;border-radius:0 0 7px 7px;}
.btnpager {padding:1px 7px !important;line-height:0px !important;height:30px !important;font-size:90% !important;}
.calact {background: -moz-linear-gradient(top, #00adee 0%, #0078a5 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00adee), color-stop(100%,#0078a5)) !important;
background: -webkit-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
background: -o-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
background: -ms-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00adee', endColorstr='#0078a5',GradientType=0 ) !important;
background: linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
color:#fff !important;}
.calact:hover,.calactnow {background: -moz-linear-gradient(top, #2693bc 0%, #0f84b0 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2693bc), color-stop(100%,#0f84b0)) !important;
background: -webkit-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
background: -o-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
background: -ms-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2693bc', endColorstr='#0f84b0',GradientType=0 ) !important;
background: linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
color:#fff !important;}
.caleveact {background: -moz-linear-gradient(top, #60C480 0%, #3A7650 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#60C480), color-stop(100%,#3A7650)) !important;
background: -webkit-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
background: -o-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
background: -ms-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#60C480', endColorstr='#3A7650',GradientType=0 ) !important;
background: linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
color:#fff !important;cursor: pointer;}
.caleve {background: -webkit-gradient(linear, left top, left bottom, from(#dfe12b), to(#b8b92c)) !important;background: -moz-linear-gradient(top, #dfe12b, #b8b92c) !important;filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dfe12b, endColorstr=#b8b92c)' !important;-ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dfe12b, endColorstr=#b8b92c)' !important;background-image: -o-linear-gradient(270deg,rgb(255,255,0),rgb(218,220,29)) !important;color:#fff !important;cursor: pointer;}
.caleveact:hover {background: -moz-linear-gradient(top, #00b342 0%, #009737 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b342), color-stop(100%,#009737)) !important;
background: -webkit-linear-gradient(top, #00b342 0%,#009737 100%) !important;
background: -o-linear-gradient(top, #00b342 0%,#009737 100%) !important;
background: -ms-linear-gradient(top, #00b342 0%,#009737 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b342', endColorstr='#009737',GradientType=0 ) !important;
background: linear-gradient(top, #00b342 0%,#009737 100%) !important;
color:#fff !important;cursor: pointer;}
.caleve:hover {background: -webkit-gradient(linear, left top, left bottom, from(#dadb49), to(#c9cb00)) !important;background: -moz-linear-gradient(top, #dadb49, #c9cb00) !important;filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dadb49, endColorstr=#c9cb00)' !important;-ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dadb49, endColorstr=#c9cb00)' !important;background-image: -o-linear-gradient(270deg,rgb(255,255,0),rgb(218,220,29)) !important;color:#fff !important;cursor: pointer;}
.calactdanger {background: -moz-linear-gradient(top, #ee0000 0%, #a5002f 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ee0000), color-stop(100%,#a5002f)) !important;
background: -webkit-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
background: -o-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
background: -ms-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ee0000', endColorstr='#a5002f',GradientType=0 ) !important;
background: linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
color:#fff !important;}
.calactdanger:hover {background: -moz-linear-gradient(top, #bc2634 0%, #b00f31 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bc2634), color-stop(100%,#b00f31)) !important;
background: -webkit-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
background: -o-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
background: -ms-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bc2634', endColorstr='#b00f31',GradientType=0 ) !important;
background: linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
color:#fff !important;}
.pigoldbutton {background: -moz-linear-gradient(top, #fcb34c 0%, #df8301 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcb34c), color-stop(100%,#df8301)) !important;
background: -webkit-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
background: -o-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
background: -ms-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcb34c', endColorstr='#df8301',GradientType=0 ) !important;
background: linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
color:#fff !important;cursor: pointer;}
.pigoldbutton:hover {background: -moz-linear-gradient(top, #df8301 0%, #df8301 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#df8301), color-stop(100%,#df8301)) !important;
background: -webkit-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
background: -o-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
background: -ms-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#df8301', endColorstr='#df8301',GradientType=0 ) !important;
background: linear-gradient(top, #df8301 0%,#df8301 100%) !important;
color:#fff !important;cursor: pointer;}

.caleve .harian-number {color:#000;}
.calact .harian-number,.caleve .harian-number,.caleveact .harian-number {background:transparent;}
.table-stripped th,.table-stripped thead th, .table-stripped thead td, .table-stripped td {border:1px solid #dadada !important;padding:5px 7px 5px 5px !important;vertical-align: top !important;}
.boxbuatan h5 {margin-bottom: 4px;font-weight: bolder;}

@media (min-width: 720px) {
.newage {width:80%;}  .thecontetsz .uvc-main-heading * {font-size: 152% !important;}
.afterloginboxes {width: 103% !important;}
}
@media (min-width: 0px) and (max-width: 720px) {
.newage {width:98%;} #tadinyax,#tadinya {width: 100% !important;float:none !important;}
.afterloginboxes {width: 83vw !important;}
}
@media (min-width: 0px) and (max-width: 666px) {
.extrasetfordatatables {display: none !important;}
}

.newage {height: auto;}
@media (min-width: 975px) {
.colbuatan2 {padding-left:23px;}
.colbuatan {padding:0 !important;}
.colbuatan select {width:100% !important;}
.colbuatan2 select,.colbuatan2 input[type="text"] {width:105% !important;}
.boxbuatan {margin-top: 0 !important;} .boxbr {display: block !important;}
.boxbr2 {display: none !important;}
}
@media (min-width: 0px) and (max-width: 974px) {
.boxbuatan {margin-top: 45px !important;}
.colbuatan2,.colbuatan {padding:0 !important;}
.colbuatan select,.colbuatan2 select,.colbuatan2 input[type="text"] {width:100% !important;}
 .boxbr {display: none !important;}
}
@media (min-width: 992px) {
.mainlinker {margin-left: 39% !important;}
}
@media (min-width: 0px) and (max-width: 991px) {
 .mainlinker {margin-left: 0 !important;}
}
.dt-contact-form input[type="text"],.dt-contact-form input[type="password"],.dt-contact-form input[type="email"],.dt-contact-form input[type="number"],.dt-contact-form input[type="date"],.dt-contact-form input[type="time"],.dt-contact-form textarea,.dt-contact-form select {width:98% !important;padding:3px 4px !important;}
input[type="button"],input[type="submit"],input[type="reset"] {border:0px;}
.tablejudul td {width:45px !important;border:0 !important;text-align: left !important;padding: 2px 5px !important;}
.deweedycustom {margin:4px 0 13px 0 !important;} 

.tableuntukdicetak {width: 100%;}
.tableuntukdicetak th,.tableuntukdicetak td  {vertical-align: top;padding:15px 9px;border-left:1px solid #000;color:#000;background: #fff;border-top: 1px solid #000;}
.tableuntukdicetak th:last-child,.tableuntukdicetak td:last-child  {border-right: 1px solid #000;width: 75%;}
.tableuntukdicetak tr:last-child td {border-bottom: 1px solid #000; }
.tableuntukdicetak th {background: var(--grad3) !important;padding:3px 8px;width: auto;}
.tableuntukdicetak .smallline {width: 0 !important;text-align: center;}


@media print{ .kotakisian2 {margin:4px 0 9px 0px;width:auto !important;height:30px;padding:5px;background: #fff;color:#000;border:0;} .detailbuttonfor {display: none;}
p:last-child {border-bottom:0px !important;}
ul,ol {margin:0 !important;}
.cetakankotak {border-bottom:1px solid #000;margin:0 auto 18px auto;padding-bottom:13px;width:96%;}
.cetakankotaklast {border:0;}
label {text-transform: capitalize;}

@page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 3mm;  /* this affects the margin in the printer settings */
        page-break-after: avoid;
            
        }
body {margin: 0px;}
}

    .judulberanimasibsus {  background: -moz-linear-gradient(left, #850382, 0.4, #850382, 0.5, #850382, 0.6, #850382, #850382); 
  background: -webkit-gradient(linear,left top,right top,color-stop(0, #850382),color-stop(0.4, #850382),color-stop(0.5, #000),color-stop(0.6, #850382),color-stop(1, #850382)); 
color:#850382;  
  -moz-background-clip: text;
  -webkit-background-clip: text;
  
  -moz-text-fill-color: transparent;
  -webkit-text-fill-color: transparent;
  -webkit-transition:all 2.5s ease-in-out ;-moz-transition:all 2.5s ease-in-out ;
  
  font-weight: bolder;
  text-shadow: none;
  padding: 0;
  width: auto;
  -webkit-animation:slidetounlock 7s infinite;
  -webkit-text-size-adjust: none; margin: 0 !important;}

@-webkit-keyframes slidetounlock {
  0% {
    background-position: -720px 0;
  }
  100%{
    background-position: 720px 0;
  }
}

@media (min-width: 991px) {
.judulontopone {font-size:  95% !important;}
}
@media (min-width: 0px) and (max-width: 990px) {
 .judulontopone {font-size: 81%  !important;}
}
</style>
<script>
var lakukanlooping=0;
function jexpimp(data1,exps,imps="",indexin="deweedy")
{ if (data1=="")
{return "";}
var doextract=data1;doextract=doextract.split(exps);
if (indexin=="array")
{return doextract;}
if (indexin!="deweedy")
{indexin=parseFloat(indexin);indexin=Math.round(indexin);
 if (doextract[indexin]!="")
{ return doextract[indexin]; }
else
{ return "";}; }
else
{doextract=doextract.join(imps);
return doextract;}
}
function reverseString(str="") {
if (str=="")
  {return "";}
    // Step 1. Use the split() method to return a new array
    var splitString = str.split(""); // var splitString = "hello".split("");
    // ["h", "e", "l", "l", "o"]
 
    // Step 2. Use the reverse() method to reverse the new created array
    var reverseArray = splitString.reverse(); // var reverseArray = ["h", "e", "l", "l", "o"].reverse();
    // ["o", "l", "l", "e", "h"]
 
    // Step 3. Use the join() method to join all elements of the array into a string
    var joinArray = reverseArray.join(""); // var joinArray = ["o", "l", "l", "e", "h"].join("");
    // "olleh"
    
    //Step 4. Return the reversed string
    return joinArray; // "olleh"
}
function getdetectforinvalidsymb(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-| |-|:|-|/|-|;|-|?|-|"+'"';
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function getdetectforinvalidsymb2(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-| |-|,|-|:|-|/|-|;|-|?|-|"+'"|-|'+'|';
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function getdetectforinvalidsymb3(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-| |-|.|-|,|-|:|-|/|-|;|-|?|-|"+'"|-|'+'|';
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function periksaform(variablenya,namakotaknya) {
if ((variablenya=="")||(namakotaknya==""))
{return "lewati";}
var dapatkanisiformnya=jQuery("#"+namakotaknya).val();
 if (jexpimp(variablenya,"^","","1")=="isnan")
{ if (dapatkanisiformnya=="")
  {return "hanyafokus";}
  else
  if (isNaN(dapatkanisiformnya))
  {return "kosongkanisiform";}
  else
  if (dapatkanisiformnya<1)
  {return "kosongkanisiform";}
  else
  {return "lewati";}
}
else
if (jexpimp(variablenya,"^","","1")=="mails")
{ if (dapatkanisiformnya=="")
{return "hanyafokus";}
else
{cekemail(dapatkanisiformnya);
if (emvalid==false)
{emvalid=true;return "kosongkanisiform";}
else
{emvalid=true;return "lewati";};}; }
else
if (jexpimp(variablenya,"^","","1")=="none")
{ if (dapatkanisiformnya=="")
{return "hanyafokus";}
else 
{return "lewati";}
}
else
{return "lewati";}
}
function aturulangtinggiiframe(idiframe,tinggitujuan) {
if ((idiframe=="")||(tinggitujuan==""))
{return false;}
jQuery("#"+idiframe).attr("height",(parseFloat(tinggitujuan)+9)+"px");
}
function formatRupiah(angka="", target="", prefix) {
  if (angka=="")
  {return "";}
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  if (target=="")
  {return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";}
  else
  {jQuery("#"+target).val(prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "");
  return false;}
}

function lakukanpengiriman(tujuan="",todo="") {
var tricky = "";
if ((tujuan=="")||(todo==""))
{return false;}
if (todo=="get")
{jQuery.get("<?php echo $lokasiweb; ?>"+tujuan, function(hasilnya){
if (hasilnya!="")
  {jQuery("#"+todo).html(hasilnya);}
return false;
});}
else
{
tricky = todo.split("-");
tricky = "?formname=formisian"+tujuan+"&"+tricky[0]+"="+tricky[1];
var formData = new FormData(jQuery('#'+tujuan)[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>"+tricky,
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            jQuery("#tempconsole").html(hasilnya);
            return false;
            },
        });
}

return false;
}

</script> 
<style>

  .tablejudul td {width:45px !important;border:0 !important;text-align: left !important;padding: 2px 5px !important;}
.deweedycustom {margin:4px 0 13px 0 !important;width:100% !important;} 

.tableuntukdicetak {width: 100%;}
.tableuntukdicetak th,.tableuntukdicetak td  {vertical-align: top;padding:15px 9px;border-left:1px solid #000;color:#000;background: #fff;border-top: 1px solid #000;}
.tableuntukdicetak th:last-child,.tableuntukdicetak td:last-child  {border-right: 1px solid #000;width: 75%;}
.tableuntukdicetak tr:last-child td {border-bottom: 1px solid #000; }

.blocklist {display: inline-flex;width: 28.5%;min-height: 198px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);background: #fff !important;}
.blocklistbig {width:63%;display: inline-flex;min-height: 198px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);background: #fff !important;}
.blocklist *:not(canvas),.blocklist * *:not(canvas) {position: relative;width: 100%;display: block;font-size: 100%;}
.blocklist style,.blocklist script {position: absolute !important;width: 100%;display: none !important;font-size: 100%;}
.blocklist table {font-size: 93%;padding: 6px 7px 6px 9px;width: 99% !important;border:0;position: relative;}
.blocklist table td {border:0;width: 100% !important;}
table.forformdata {width: 100% !important;}
table.forformdata td {border: 0 !important;}
.blocklist img {width: 100px !important;}
.blocklist img.antisepticsfotosz {width:100% !important;height: auto !important;}
.blocklist h2 {text-align: center;}
.blocklist h3 {text-align: center;border-bottom: 1px solid #eaeaea;padding: 6px 7px 11px 7px;width: 96%;margin-bottom: 5px;}
.boxforpay {width:104% !important;text-align: left;border-top: 1px solid #eaeaea;padding: 11px 7px 6px 7px;width: 96%;margin: 5px 0 0 -10px;}
.blocklist .readmore, .postfoot {margin: 13px 0 7px 0px;font-size: 69%;} .postfoot {border-top: 1px solid #eaeaea;padding: 8px 1px 4px 7px;text-align: right;position: absolute;} .postfoot span { margin-right: 9px; } .postfoot i {margin-right: 4px;}
        @media (min-width: 1110px) {
            .blocklist {width: 30% !important;} .blocklistbig {width:63%;}
        }

        @media (min-width: 790px) and (max-width: 1110px) {
            .blocklist {width: 44.4% !important;} .contentboxsforall .blocklist {width: 30% !important;} .blocklistbig {width:63%;}
        }

        @media (min-width: 0px) and (max-width: 790px) {
            .blocklist,.blocklistbig {width: 97% !important;} 
        }



@media print{ .kotakisian2 {margin:4px 0 9px 0px;width:auto !important;height:30px;padding:5px;background: #fff;color:#000;border:0;}
p:last-child {border-bottom:0px !important;}
ul,ol {margin:0 !important;}
.cetakankotak {border-bottom:1px solid #000;margin:0 auto 18px auto;padding-bottom:13px;width:96%;}
.cetakankotaklast {border:0;}
label {text-transform: capitalize;}

@page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }
body {margin: 0px;}
}
    :root {
        <?php for ($iloop=2;$iloop<=9;$iloop++)
        {echo "--purpletrans".$iloop."0:rgba(86,42,121,0.".$iloop.");";};
        ?>
    }
.dt-contact-form input,.dt-contact-form textarea,.dt-contact-form select {color:#850382 !important;}
button, input[type="button"], input[type="submit"], input[type="reset"] {padding:4px 7px !important;color: #fff !important;}
#datatables th {text-transform: capitalize !important;}
</style>
<script type="text/javascript" src="<?php echo $lokasiweb; ?>jquery.PrintArea.js"></script>
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ ?> <link rel=preconnect href="sdk.minepi.com"crossorigin>
 <script src="https://sdk.minepi.com/pi-sdk.js"></script> <?php }; ?>

<link rel="stylesheet" id="elementor-post-12396-css" href="<?php echo $lokasiweb; ?>plugin/dataTables/css/jquery.dataTables.min.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo $lokasiweb; ?>plugin/dataTables/js/jquery.dataTables.min.js"></script>
<link rel='stylesheet' href='<?php echo $lokasiweb; ?>plugin/saghatheme/sagha4mbttemplate1.css' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo $lokasiweb; ?>plugin/saghatheme/sagha4mbttemplate2.css' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo $lokasiweb; ?>plugin/saghatheme/sagha4mbtfonts.css' type='text/css' media='all' />

</head>
<body id="the7-body" class="home page-template page-template-elementor_header_footer page page-id-4 wp-custom-logo wp-embed-responsive theme-dt-the7 the7-core-ver-2.7.1 woocommerce-no-js dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-close-right-caption  fade-thin-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-11.1.1-b10311455 elementor-default elementor-template-full-width elementor-clear-template elementor-kit-2888 elementor-page elementor-page-4" onoffline="klooff();" ononline="kloonlagi();" >

    <form id="testtts" style="display: none !important;">
    <textarea class="txt"></textarea>
    <div>
      <label for="rate">Rate</label><input type="range" min="0.5" max="2" value="0.5" step="0.1" id="rate">
      <div class="rate-value">1</div>
      <div class="clearfix"></div>
    </div>
    <div>
      <label for="pitch">Pitch</label><input type="range" min="0" max="2" value="0.9" step="0.1" id="pitch">
      <div class="pitch-value">1</div>
      <div class="clearfix"></div>
    </div>
    <select></select>
    <div class="controls">
      <button id="play" type="submit">Play</button>
    </div>
    </form>
    <script src="<?php echo $lokasiweb; ?>ucapkannn.js"></script>
<div id="aireloaders">

</div>
<style>
.pemetaankoordinat{margin-top:13px;padding-top:9px;border-top:1px solid #eaeaea;display: none;}
</style>
<script type="text/javascript">
 var globalusernamesz="";
 var globalusernamesztukformdaftar="";

var latz="<?php echo @expimpd(@lihatisikolomtertentu("nowilovemiyaryona","newloveer",@$deweedysaghakey1,"iwannakissher"),"**","","0x"); ?>"; 
var longz="<?php echo @expimpd(@lihatisikolomtertentu("nowilovemiyaryona","newloveer",@$deweedysaghakey1,"iwannakissher"),"**","","1x"); ?>";
var kodezpecahan="";
var kitishippecahan="";

function aturulangkodepos(boxofkodepos="",boxofcityname="") {
if ((boxofkodepos=="")||(boxofcityname==""))
{return false;}
if (latz!="") {
jQuery(boxofkodepos).val(kodezpecahan);
jQuery(boxofcityname).val(kitishippecahan);
}
}
function magicinmybones(bonlat="",bonlong="") {
if ((bonlat=="")||(bonlong==""))
{
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
return false;}
//jQuery("#justmeusos").attr("src","<?php echo $lokasiweb; ?>testmaps.php?dimanatuh=" + bonez.coords.latitude + "||" + bonez.coords.longitude);
jQuery.ajax({
  headers: { 'x-my-custom-header': 'localhost' },
crossDomain: true,
   dataType: 'jsonp',
              type: "GET",
              url: "https://api.opencagedata.com/geocode/v1/json?q="+bonlat+"+"+bonlong+"&key=03c48dae07364cabb7f121d8c1519492&no_annotations=1&language=en", 
              
              success: function(data){
                  if (data.status.code==200)
                  {
                      if (data.total_results>=1)
                      {
//                          jQuery("#addr").html(data.results[0].formatted);
                          kodezpecahan=data.results[0].formatted; kodezpecahan=kodezpecahan.split(","); kodezpecahan=kodezpecahan[(parseFloat(kodezpecahan.length)-3)];
                          kitishippecahan=kodezpecahan.split(" "); kitishippecahan=kitishippecahan[(parseFloat(kitishippecahan.length)-1)];
                          kitishippecahan=kodezpecahan.split(kitishippecahan); kitishippecahan=kitishippecahan.join("");
                          kodezpecahan=kodezpecahan.split(kitishippecahan); kodezpecahan=kodezpecahan.join("");

                     if (isNaN(kodezpecahan)) {
                          kodezpecahan=data.results[0].formatted;
                           kodezpecahan=kodezpecahan.split(","); kodezpecahan=kodezpecahan[(parseFloat(kodezpecahan.length)-2)];
                          kitishippecahan=kodezpecahan.split(" "); kitishippecahan=kitishippecahan[(parseFloat(kitishippecahan.length)-1)];
                          kitishippecahan=kodezpecahan.split(kitishippecahan); kitishippecahan=kitishippecahan.join("");
                          kodezpecahan=kodezpecahan.split(kitishippecahan); kodezpecahan=kodezpecahan.join("");    
                      }


  //                        jQuery("#addr").html(jQuery("#addr").html()+"<br/>"+kodezpecahan+" "+kitishippecahan);
                      }
                      else
                      {
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
alert("Terjadi Kegagalan Mendeteksi Lokasi Anda");
  //                        jQuery("#addr").html("Alamat tidak diketahui");
                      }
                  }
                  else
                  {
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
alert("Terjadi Kegagalan Mendeteksi Lokasi Anda");
    //                  jQuery("#addr").html("Alamat tidak diketahui");
                  }
              },
              error: function(xhr, err){
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
alert("Terjadi Kegagalan Mendeteksi Lokasi Anda, saat ini fitur ini sedang diperbaiki");
//                  jQuery("#addr").html("Masih Error");
              }
          });
}
function dapetinnihlokz() {
<?php $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)<2)
{ ?>    
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(tamp1ilinlokz);
setTimeout("dapetinnihlokz()", 1000);
  } else { 
alert("Pastikan pendeteksian lokasi di izinkan");
  }
<?php } else { ?> magicinmybones(latz,longz); <?php } ?>
}
function tamp1ilinlokz(bonez) {
if (latz==bonez.coords.latitude)
{return false;}
latz=bonez.coords.latitude; 
longz=bonez.coords.longitude;
magicinmybones(latz,longz);
}
jQuery(document).ready(function(){
dapetinnihlokz();
alert("Warning!!! Your data almost reach maximum quota and server would be locked when reach maximum quota");
})
<?php
if (empty($deweedysaghakey1))
{ ?>function detectusn4low(boxtobox="") {
var tampungzuser="";
if (boxtobox=="")
{return false;}
if (jQuery("#"+boxtobox).val()=="")
{return false;}
tampungzuser=getdetectforinvalidsymb2(jQuery("#"+boxtobox).val());
jQuery("#"+boxtobox).val(tampungzuser);
}

function loadxvideos(boxtobox="") {
var tampungzuser="";
if (boxtobox=="")
{return false;}
if (boxtobox=="parentreloadedbecauseitslogin")
{
window.location.href='<?php echo $lokasiweb; ?>?page=member-area';
return false;    
}
if (jQuery("#"+boxtobox).val()=="")
{ alert("Masukkan username terlebih dahulu"); jQuery("#"+boxtobox).focus();
return false;}
tampungzuser=getdetectforinvalidsymb3(jQuery("#"+boxtobox).val());
jQuery("#boxforxvideos").attr("src","<?php echo $lokasiweb; ?>saghatracez.php?outofbox="+tampungzuser);
jQuery("#boxforxvideos").show();
jQuery("#focusforfacedet"+boxtobox).focus();
jQuery("#"+boxtobox).val(tampungzuser);
jQuery("#imgfrontdesk").hide();
}

<?php }; ?>

const Pi = window.Pi;
jQuery(document).ready(function() {
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ ?>
        Pi.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pi.authenticate(t, onIncompletePaymentFound).then(function(auth){
         globalusernamesz=auth.user.username;
          jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+globalusernamesz, function(data){
          
          if (data!="")
          {
            <?php
            if ((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="vendor")&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="penguna"))
            { ?>
            globalusernamesz="";
            <?php }; ?>
             globalusernamesztukformdaftar=""; 
           }
          else
          {globalusernamesztukformdaftar=globalusernamesz;            
           globalusernamesz="";}
          })
          if (globalusernamesz!="")
          {jQuery("#globalpathforusernames").val(globalusernamesz);}
          else
            {jQuery("#globalpathforusernames").val(globalusernamesztukformdaftar);}
        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });
<?php }; ?>
        jQuery("#aireloaders").load("<?php echo $lokasiweb; ?>speechRecognition.php?nextpart=welcomes&parttwo=<?php echo $sekarangdimana; ?>");
})
</script>
<input type="text" value="" id="globalpathforusernames" style="display:none;">
  <script type="text/javascript">
var kataumumnya="";
var kataumumnyawel="";
var globaltransisitext = "";
var cekkeamanannya="";
var carimencarilaporan="";
var ketahunselain="";
var datadates = new Date();
var daydates = "<?php echo date("d"); ?>";
var monthdates = "<?php echo date("m"); ?>";
var yeardates = "<?php echo date("Y"); ?>";
var hrdates = datadates.getHours();
var mindates = datadates.getMinutes();
var secdates = datadates.getSeconds();

    function ucapkeuenn() {
<?php if (($sekarangdimana=="beranda")||($sekarangdimana=="home")) { ?>
jQuery('#testtts textarea[class="txt"]').val(kataumumnya);
jQuery("#testtts").submit();
<?php }; ?>
}

    function ucaphasilnya() {
        mulaiindongwelcomes();
        kataumumnya=kataumumnya+globaltransisitext;
suarakansekarang();
}
async function suarakansekarang() {
    let all = kataumumnya;

    sentences = all.split(',');

    for (i = 0; i < sentences.length; i++) {
      await getNextAudio(sentences[i]);
    }

    async function getNextAudio(sentence) {
      console.log(sentence);
      let audio = new SpeechSynthesisUtterance(sentence);
      window.speechSynthesis.speak(audio);

      return new Promise(resolve => {
        audio.onend = resolve;
      });
    } 
  } 
    jQuery(document).ready(function() {
      if (jQuery('#testtts select').find(':selected').attr('data-lang')=="id-ID") {
 <?php $tabletarget="data_pioneerweb";
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{ if (!empty($deweedysaghakey1))
{ if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",@$deweedysaghakey1,"status_pioneer")=="unverified") { ?>
cekkeamanannya="Maaf, Silahkan lakukan Proses Verifikasi Akun Anda Terlebih Dahulu, Anda dapat kembali melakukan Check Out belanja Anda setelah status akun Anda Aktif";
<?php }
};
}
else
{ ?>cekkeamanannya="Maaf, Super Admin tidak diperbolehkan Melakukan Pembelanjaan";
 <?php }; ?>

              <?php
        if (@count(@explode("Chrome",@$_SERVER['HTTP_USER_AGENT']))>1)
        { ?> 
        kataumumnyawel="<?php echo (@$deweedysaghakey1===""?"":"halo ".(@$deweedysaghakey1===mengacakstring("pimartnet2023forhumanbeing",5)?"Super Admin":@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"nama_lengkap_pioneer")).","); ?>selamat datang di Mahkota Big Trade";
         kataumumnya=kataumumnyawel+", ada yang bisa saya bantu?";
        <?php }
        else { ?>  kataumumnya="Selamat datang di Mahkota Big Trade, Maaf, Anda menggunakan perangkat lunak yang tidak mendukung untuk mendengar perintah suara Anda, jadi saya akan menggunakan bantuan teks, jadi ada yang bisa saya bantu?";
        <?php } ?>

      }
      else
      {
<?php $tabletarget="data_pioneerweb";
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{ if (!empty($deweedysaghakey1))
{ if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",@$deweedysaghakey1,"status_pioneer")=="unverified") { ?>
cekkeamanannya="Sorry, please carry out your account verification process first, you can check out your shopping again after your account status is active.";
<?php }
}
}
else
{ ?>cekkeamanannya="Sorry, Super Admin are not allowed to make purchases";
 <?php }; ?>
      <?php
        if (@count(@explode("Chrome",@$_SERVER['HTTP_USER_AGENT']))>1)
        { ?> 
        kataumumnyawel="<?php echo (@$deweedysaghakey1===""?"":"Hello ".(@$deweedysaghakey1===mengacakstring("pimartnet2023forhumanbeing",5)?"Super Admin":@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"nama_lengkap_pioneer")).","); ?>Welcome to  Mahkota Big Trade";
         kataumumnya=kataumumnyawel+", how can I help you?";
        <?php }
        else { ?>  kataumumnya="Welcome to  Mahkota Big Trade, I'm Sorry, You're using unsupported software to hear your voice command, so i gonna use text helper, so how can I help you?";
        <?php } ?>

      }
      jQuery('#testtts textarea[class="txt"]').val(kataumumnya);
    })


  </script>

<script>
function klooff() {
jQuery("#globalbigbox").hide();
jQuery("#untukoffaja").show("slow");
}
function kloonlagi() {
jQuery("#untukoffaja").hide();
jQuery("#globalbigbox").show();
}
</script>
<div id="untukoffaja" style="display:none;margin:0 !important;padding:0 !important;clear:both;"><h1 style="width:100%;padding-top:13vh;text-align:center;">Koneksi Internet Anda terputus atau sedang tidak stabil</h1></div>
<div id="globalbigbox" style="margin:0 !important;padding:0 !important;clear:both;">
<div style="opacity:0;position:absolute;z-index: -9;"><?php echo $judulweb; ?> </div>
<div id="tempconsole" style="display:none;position:absolute;z-index:-9;"></div>
<?php $tabletarget="data_pioneerweb"; ?>
<style type="text/css">
    .lingkarankecil2 {
      background: #9D359B; 
      border-radius:80% !important;
      padding:1px 7px;
      border:1px solid #fff;
      width: auto !important;height:auto !important;cursor: pointer;
      display: inline-flex !important;color:#fff;
    }
    .lingkarankecil2:hover, .lingkarankecil2act {
      border:1px solid #F8AD42;color:#F8AD42;
    }
  </style>

<script>
var tempclue="";var tempcluecount=0;
var globaldataof=""; var bycustomassign="";

function pingpong(loadbel="") {
if (loadbel=="")
  {return false;}
if (getdetectforinvalidsymb2(jQuery("#"+loadbel).val())=="")
  {return false;}
 jQuery.get('<?php echo $lokasiweb; ?>?docommand=waduhjanganlupa&dests='+getdetectforinvalidsymb2(jQuery("#"+loadbel).val()), function(hasilnya){
if (hasilnya!="")
  {alert(hasilnya);}
})
jQuery("#"+loadbel).val(getdetectforinvalidsymb2(jQuery("#"+loadbel).val()));
}

function cekkomica(cekfor="") {
  if (cekfor=="") {
    return false;
  }
  var ceklagidah="";
  ceklagidah=getdetectforinvalidsymb3(jQuery("#"+cekfor).val());
  jQuery("#"+cekfor).val(ceklagidah);
  jQuery("#tempconsole").load('<?php echo $lokasiweb; ?>?docommand=cekbenergk&fromwhat='+ceklagidah+'x&whatnext='+cekfor);
}

    function dopictexhange(tagers="",tagers2="") {
      jQuery("#topdesk"+tagers).children("#mainboxfor"+tagers).attr("src",jQuery(".imgfor"+tagers2).attr("src"));
      jQuery(".button"+tagers).removeClass("lingkarankecil2act"); jQuery(".button"+tagers2).addClass("lingkarankecil2act");
    }


function selectorofcategory(dataof="") {
  
seedetailsof();
if (dataof=="")
{
 jQuery("#boxofshowcats").hide("slow");
jQuery("#contentforcats").html("");
jQuery("#pilihancats").show("slow");
tempcluecount=0;
}
else
{ jQuery("#pilihancats").hide("slow"); 
    jQuery("#buttonofadd").hide();
if (dataof!="loadmore")
{globaldataof=dataof;jQuery("#foronfocus").focus();}
else
{jQuery("#foronfocus2").focus();}
if (globaldataof=="")
{jQuery("#boxofshowcats").hide("slow");
jQuery("#contentforcats").html("");
jQuery("#pilihancats").show("slow");}
jQuery("#contentforcats").append("<div id='notefortemp' style='display:block !important;position:relative !important;width:100%;background:url(<?php echo $lokasiweb; ?>/box/loadingbarberblue.gif) center no-repeat;height:44px;'>&nbsp;</div>");
if ((globaldataof!="bycustom")||( (dataof=="loadmore") && (bycustomassign!="bycustom") ))
{jQuery("#judulforcats").html(jexpimp(globaldataof,"-"," "));
jQuery.get('<?php echo $lokasiweb; ?>?docommand=loadnextprodukpinetmart&whatnext='+tempcluecount+'x&jeniskategori='+globaldataof, function(hasilnya){
if (hasilnya=="<br/><div style='display:block !important;position:relative !important;width:100%;'>Tidak Ada data Untuk di Tampilkan</div><br/>")
    {jQuery("#buttonofadd").hide("slow");}
else
    {jQuery("#buttonofadd").show("slow");}

if (tempcluecount==0)
{jQuery("#contentforcats").html(hasilnya);}
else
{jQuery("#contentforcats").append(hasilnya);
jQuery("#notefortemp").remove();
}
})
bycustomassign="bykat";
}
else
{
if (dataof!="loadmore")
{tempcluecount=0;}
bycustomassign="bycustom";

bycustomassign="bycustom";
jQuery("#judulforcats").html("pencarian kostum<br/><br/>Keyword: "+jQuery("#searchingboxes").val());

jQuery.post('<?php echo $lokasiweb; ?>?docommand=loadnextprodukpinetmart&whatnext='+tempcluecount+'x&jeniskategori=bycustom', jQuery('#mencariprodukku').serialize(), function(hasilnya){
if (hasilnya=="<br/><div style='display:block !important;position:relative !important;width:100%;'>Tidak Ada data Untuk di Tampilkan</div><br/>")
    {jQuery("#buttonofadd").hide("slow");}
else
    {jQuery("#buttonofadd").show("slow");}

if (tempcluecount==0)
{jQuery("#contentforcats").html(hasilnya);}
else
{jQuery("#contentforcats").append(hasilnya);jQuery("#notefortemp").remove();}
})

}

jQuery("#boxofshowcats").show("slow");
return false;
}

}

var getkotakpi=0;
var getkotakrpnya=0;
var vouchergetkotakpi=0;
var vouchergetkotakrpnya=0;
var vouchergetminim=0;
var voucherdipotong=0;
function ceknowvoucher (dataid="",totalbyrpi="",totalbyrrp="",jumlahbeli="") {
if ((dataid=="")||(totalbyrpi=="")||(totalbyrrp=="")||(jumlahbeli==""))
 {return false;}
if ((jQuery("#hahpakevoucher"+dataid)=="")||(jQuery("#formbelanja"+dataid+" .bovoucher")==""))
{ jQuery("#formbelanja"+dataid+" .bodetailvoucher").hide(); return false; }
var cekkebenerannya = jQuery("#formbelanja"+dataid+" .boxidtosave").val()+"||"+jumlahbeli+"||"+jQuery("#formbelanja"+dataid+" .bovoucher").val();
var hasildetailnya = "";
jQuery.get('<?php echo $lokasiweb; ?>?docommand=cekvoucheran&angkarupiah='+cekkebenerannya, function(hasilnya){
vouchergetkotakpi=0;
vouchergetkotakrpnya=0;
voucherdipotong=parseFloat(jexpimp(hasilnya,"|*|","","0x"));
vouchergetminim=parseFloat(jexpimp(hasilnya,"|*|","","1x"));
hasildetailnya=jexpimp(hasilnya,"|*|","","2x");
if ((hasildetailnya!="")&&(hasildetailnya!="-"))
{jQuery("#formbelanja"+dataid+" .bodetailvoucher").show();}
else
{jQuery("#formbelanja"+dataid+" .bodetailvoucher").hide();}
if ((voucherdipotong>0)&&(jumlahbeli>=vouchergetminim))
{ vouchergetkotakpi=((totalbyrpi*voucherdipotong)/100);
vouchergetkotakrpnya=((totalbyrrp*voucherdipotong)/100);
jQuery("#formbelanja"+dataid+" .bodetailvoucher").html("Diskon sebesar "+voucherdipotong+"% untuk produk ini<br/>");
getkotakpi=getkotakpi-vouchergetkotakpi;
getkotakrpnya=getkotakrpnya-vouchergetkotakrpnya;
}
else
{jQuery("#formbelanja"+dataid+" .bodetailvoucher").html("Kode Voucher Tidak Berlaku "+hasildetailnya+"<br/>");
vouchergetkotakpi=0;
vouchergetkotakrpnya=0;
getkotakpi=getkotakpi-vouchergetkotakpi;
getkotakrpnya=getkotakrpnya-vouchergetkotakrpnya;
 return false;}
})
}

function hitungtotalan (dataid="") {
if (dataid=="")
 {return false;}

getkotakpi=jQuery("#pi"+dataid).val();
getkotakrpnya=jQuery("#rpnya"+dataid).val();

var getjumlahstok=parseFloat(jQuery("#stoknya"+dataid).val());
var getkotakjumlah=parseFloat(jQuery("#belinya"+dataid).val());

if ((isNaN(getkotakjumlah))||(getkotakjumlah<1))
{jQuery("#belinya"+dataid).val("");jQuery("#addtocart"+dataid).hide("slow");jQuery("#bayarnyadisplay"+dataid).html("");return false;}

if (getkotakjumlah>getjumlahstok)
{getkotakjumlah=getjumlahstok;
jQuery("#belinya"+dataid).val(getkotakjumlah);
}
getkotakpi=getkotakpi*getkotakjumlah;
getkotakrpnya=getkotakrpnya*getkotakjumlah;
ceknowvoucher(dataid,getkotakpi,getkotakrpnya,getkotakjumlah);
jQuery("#bayarnyarp"+dataid).val(getkotakrpnya);
jQuery("#bayarnyadisplay"+dataid).html("<div style='display:block !important;position:relative !important;width:100%;background:url(<?php echo $lokasiweb; ?>/box/loadingbarberblue.gif) center no-repeat;height:44px;'>&nbsp;</div>");
jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorenom&angkarupiah='+getkotakrpnya+"x", function(hasilnya){
getkotakrpnya=hasilnya;
jQuery("#bayarnyadisplay"+dataid).html(getkotakpi+" Pi<br/>Rp. "+getkotakrpnya);
jQuery("#addtocart"+dataid).show("slow");
})
jQuery("#bayarnya"+dataid).val(getkotakpi);
}
function seedetailsof(dataidof="") {
if (dataidof=="")
{ jQuery("#boxdetailforpro").hide();
jQuery("#contentforcats").show("slow");
}
else
{
jQuery("#contentforcats").hide();
jQuery("#detailforpro").html("<div style='width:99%;!important;text-align:center;'>"+jQuery("#topdesk"+dataidof).html()+"</div>");
jQuery("#detailforpro").append("<br/>"+jQuery("#fulldesk"+dataidof).html()+"<br/><br/>"+'<div class="onbox" style="height: 7vh !important;">&nbsp;<br/></div>');
 jQuery("#boxdetailforpro").show("slow");
}

}
var buatsusunan="";
var buatsusunanlama="";
var xlop=0; var kuranginstoks=0; var jumlahbaru=0; var jumlaholddetect=0;  var detectedindex=0;

function doaddtocart(idtosaves=""){
    if (idtosaves=="")
        {return false;}
jumlahbaru=0; jumlaholddetect=0;
buatsusunan=jQuery("#keranjangbelanjaan").val();
   if ((!(isNaN(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val())))&&(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val()!="")&&(parseFloat(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val())>0))
    {

if (buatsusunan!="")
{buatsusunanlama=buatsusunan;
buatsusunan="";
buatsusunanlama=buatsusunanlama.split("|*-*|");

for (xlop=0;xlop<buatsusunanlama.length;xlop++)
{ jumlahbaru=parseFloat(jexpimp(buatsusunanlama[xlop],"|*|","","0x"));
if (parseFloat(jexpimp(buatsusunanlama[xlop],"|*|","","3x"))==parseFloat(jQuery("#formbelanja"+idtosaves+" .boxidtosave").val()))
{
    kuranginstoks=parseFloat(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val());
    jumlahbaru=jumlahbaru+parseFloat(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val());
jumlaholddetect=jumlahbaru; detectedindex=xlop;

    }
else
{buatsusunan=buatsusunan+"|*-*|"+buatsusunanlama[xlop];
jumlahbaru=parseFloat(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val());
kuranginstoks=jumlahbaru;
}
}


}
else
{
jumlahbaru=parseFloat(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val());
kuranginstoks=jumlahbaru;
}
if (jumlaholddetect!=0)
{
    jumlahbaru=jumlaholddetect;
         buatsusunan=buatsusunan+"|*-*|"+jumlahbaru+"|*|"+(parseFloat(jexpimp(buatsusunanlama[detectedindex],"|*|","","1x"))+parseFloat(jQuery("#formbelanja"+idtosaves+" .bayarpakepi").val()))+"|*|"+(parseFloat(jexpimp(buatsusunanlama[detectedindex],"|*|","","2x"))+parseFloat(jQuery("#formbelanja"+idtosaves+" .bayarpakerp").val()))+"|*|"+jQuery("#formbelanja"+idtosaves+" .boxidtosave").val();

}
else
{     buatsusunan=buatsusunan+"|*-*|"+jumlahbaru+"|*|"+jQuery("#formbelanja"+idtosaves+" .bayarpakepi").val()+"|*|"+jQuery("#formbelanja"+idtosaves+" .bayarpakerp").val()+"|*|"+jQuery("#formbelanja"+idtosaves+" .boxidtosave").val();
}

        kuranginstoks=parseFloat(jQuery("#formbelanja"+idtosaves+" .stokers").val())-kuranginstoks;
        if (kuranginstoks<0)
            {kuranginstoks=0;}
        jQuery("#formbelanja"+idtosaves+" .stokers").val(kuranginstoks); jQuery("#formbelanja"+idtosaves+" .postfoot").html("Stok: "+kuranginstoks);
        jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val("");
        jQuery("#addtocart"+idtosaves).hide("slow");jQuery("#bayarnyadisplay"+idtosaves).html("");
     }

 if (buatsusunan!="")
    { if (buatsusunan.substring(0, 5)=="|*-*|")
        {buatsusunan=buatsusunan.substring(5, buatsusunan.length);}
    }

jQuery.get('<?php echo $lokasiweb; ?>?docommand=dostorekeranjang&isian='+buatsusunan, function(hasilnya){

})
jQuery("#keranjangbelanjaan").val(buatsusunan);
doreloadkeranjang();
}
function doshowformcheck() {
<?php $tabletarget="data_pioneerweb";
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{
if (!empty($deweedysaghakey1))
{ if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",@$deweedysaghakey1,"status_pioneer")=="unverified") { ?>
alert("Maaf, Silahkan lakukan Proses Verifikasi Akun Anda Terlebih Dahulu, Anda dapat kembali melakukan Check Out belanja Anda setelah status akun Anda Aktif");
return false;
<?php }
};
}
else
{ ?> alert("Maaf, Super Admin tidak diperbolehkan Melakukan Pembelanjaan");
return false;
 <?php }; ?>
buatsusunan=jQuery("#keranjangbelanjaan").val();
if (buatsusunan=="")
{jQuery("#keranjangzforpro").html("<div class='isi'>Keranjang Belanja Anda Kosong</div>");
jQuery("#boxformancek").hide();    
jQuery("#boxbarangan").show("slow");
return false;
}

 doreloadkeranjang("showform");   
}
function salinkeclipboard(namakotak="") {
  if (namakotak=="")
    {return false;}
  var copyText = document.getElementById(namakotak);

  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  if ((namakotak=="datawallet")||(namakotak=="datawalletx"))
  {alert("Id Wallet <?php echo $namapt; ?> berhasil disalin ke clipboard");}
  else
  {alert("Berhasil disalin ke clipboard");}
}

function seekeranjangzsof(todo="") {
    
if (todo=="")
{jQuery("#boxkeranjangzforpro").hide("slow");}
else
{ doreloadkeranjang();
    jQuery("#boxkeranjangzforpro").show("slow");}
}
function doeditcarts(dataid="",metode="")
{ 
if (dataid=="")
{return false;}

if (metode=="")
{jQuery(".boxdatacorefor"+dataid).hide("slow");}
else
{jQuery(".boxdatacorefor"+dataid).show("slow");}
}
var lakukanlooping=0; var llops=0;
     function hapusinfromlist(ids="") {
        if (ids=="")
            {return false;}
buatsusunan=jQuery("#keranjangbelanjaan").val();
if (buatsusunan=="")
{return false;}

buatsusunanlama=buatsusunan;
buatsusunan="";
buatsusunanlama=buatsusunanlama.split("|*-*|");

for (xlop=0;xlop<buatsusunanlama.length;xlop++)
{ jumlahbaru=parseFloat(jexpimp(buatsusunanlama[xlop],"|*|","","0x"));
if (buatsusunanlama[xlop]!=jQuery("#cartdata"+ids).val())
{buatsusunan=buatsusunan+"|*-*|"+buatsusunanlama[xlop];
}
}

 if (buatsusunan!="")
    { if (buatsusunan.substring(0, 5)=="|*-*|")
        {buatsusunan=buatsusunan.substring(5, buatsusunan.length);}
    }
    else
    {buatsusunan="kosong";}

jQuery.get('<?php echo $lokasiweb; ?>?docommand=dostorekeranjang&isian='+buatsusunan, function(hasilnya){

})
if (buatsusunan=="kosong")
    {buatsusunan="";}

jQuery("#keranjangbelanjaan").val(buatsusunan);

jQuery("#cartboxreorder"+ids).remove();
jQuery(".boxdatacorefor"+ids).remove();
         lakukanlooping=0;
  llops=1;
for (lakukanlooping=0;lakukanlooping<=jQuery(".isi").length;lakukanlooping++)
{ jQuery(".isi .nomorin").eq(lakukanlooping).html(llops);
llops=llops+1;
}
doreloadkeranjang();
}

function doubahtocart(idtosaves="",ids=""){
    if ((idtosaves=="")||(idtosaves==""))
        {return false;}
jumlahbaru=0; jumlaholddetect=0;
buatsusunan=jQuery("#keranjangbelanjaan").val();
   if ((!(isNaN(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val())))&&(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val()!="")&&(parseFloat(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val())>0))
    {

if (buatsusunan!="")
{buatsusunanlama=buatsusunan;
buatsusunan="";
buatsusunanlama=buatsusunanlama.split("|*-*|");

for (xlop=0;xlop<buatsusunanlama.length;xlop++)
{ jumlahbaru=parseFloat(jexpimp(buatsusunanlama[xlop],"|*|","","0x"));
if (buatsusunanlama[xlop]!=jQuery("#cartdata"+ids).val())
{buatsusunan=buatsusunan+"|*-*|"+buatsusunanlama[xlop];
}
}
}
jumlahbaru=parseFloat(jQuery("#formbelanja"+idtosaves+" .boxjumlahtosave").val());
kuranginstoks=jumlahbaru;


buatsusunan=buatsusunan+"|*-*|"+jumlahbaru+"|*|"+jQuery("#formbelanja"+idtosaves+" .bayarpakepi").val()+"|*|"+jQuery("#formbelanja"+idtosaves+" .bayarpakerp").val()+"|*|"+jQuery("#formbelanja"+idtosaves+" .boxidtosave").val();

     }

 if (buatsusunan!="")
    { if (buatsusunan.substring(0, 5)=="|*-*|")
        {buatsusunan=buatsusunan.substring(5, buatsusunan.length);}
    }

jQuery.get('<?php echo $lokasiweb; ?>?docommand=dostorekeranjang&isian='+buatsusunan, function(hasilnya){

})
jQuery("#keranjangbelanjaan").val(buatsusunan);
doreloadkeranjang();
}
function recekusernames(datatarget="") {
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
    {
            jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+getusernametodo, function(data){
                if (data!="")
                {alert(data);jQuery("#"+datatarget).val("");jQuery("#"+datatarget).focus();}
            
            return false;
        });
}
return false;
}
var rpsebelumoog=0;
var pisebelumoog=0;

function perbaikitotalpi(angkane="") {
  jQuery.get('<?php echo $lokasiweb; ?>?docommand=chekongkirgk&dihitunglagipitotal=gk&angkarupiah='+(parseFloat(angkane)), function(hasilnyaxongs){
    
    pisebelumoog=parseFloat(hasilnyaxongs);
  })
}
function sioogoog() {
var metodedata=jQuery("#boxformtujuans input[forformaddress='form14']").val(); var tempegoreng=""; 
var hitungoog=jQuery("#detailforpay #barangkenaongkir").val();
var apakodeposnya="<?php echo $dataoog1; ?>";apakodeposnya=apakodeposnya.split("**");
var berapapun="<?php echo $dataoog2; ?>";berapapun=berapapun.split("**");
var daerahe="<?php echo $dataoog3; ?>";daerahe=daerahe.split("**");
rpsebelumoog=parseFloat(jQuery("#detailforpay #kalaudirpkandefault").html());
perbaikitotalpi(parseFloat(jQuery("#detailforpay #bayarnyedalampinetdefault").val())+"x");
if ((metodedata=="")||(isNaN(metodedata))) {
jQuery("#detailforpay #kalaudirpkan").html(rpsebelumoog);
jQuery("#detailforpay #bayarnyedalampinet").val(pisebelumoog);
jQuery("#detailforpay #txtkenaoog").html("0");
jQuery("#detailforpay #txtnyedalampinet").html(pisebelumoog);
jQuery("#detailforpay #txtkenapulau").html("-");
return false;
}
for (xlop=0;xlop<apakodeposnya.length;xlop++)
{ tempegoreng=apakodeposnya[xlop];
if (tempegoreng.split(metodedata.substring(0, 1)).length>1)
{
jQuery("#detailforpay #txtkenapulau").html(daerahe[xlop]+" = "+parseFloat(berapapun[xlop]));
hitungoog=parseFloat(hitungoog)*parseFloat(berapapun[xlop]);jQuery("#detailforpay #txtkenaoog").html(hitungoog);
jQuery("#detailforpay #kalaudirpkan").html((parseFloat(rpsebelumoog))+hitungoog);

jQuery.get('<?php echo $lokasiweb; ?>?docommand=chekongkirgk&dihitunglagipitotal=ceklagidah&angkarupiah='+(parseFloat(pisebelumoog))+"||"+hitungoog, function(hasilnyaxongs){
kenaongkiran=kenaongkiran+parseFloat(hasilnyaxongs);
jQuery("#detailforpay #txtnyedalampinet").html((parseFloat(hasilnyaxongs)));
jQuery("#detailforpay #bayarnyedalampinet").val((parseFloat(hasilnyaxongs)));
})
break;}
}
if (hitungoog==0) {
jQuery("#detailforpay #txtkenapulau").html("-");
jQuery("#detailforpay #kalaudirpkan").html(rpsebelumoog);
jQuery("#detailforpay #txtnyedalampinet").html(pisebelumoog);
jQuery("#detailforpay #bayarnyedalampinet").val(pisebelumoog);
jQuery("#detailforpay #txtkenaoog").html("0");
}
}
var cekfromtheinside="";
function sioogoog2() {
var rpsebelumoog2=0;
var pisebelumoog2=0;
var metodedata=jQuery("#boxformtujuans2 input[forformaddress='form14']").val(); var tempegoreng=""; 
var hitungoog=jQuery("#detailforpay2 #barangkenaongkir").val();
var apakodeposnya="<?php echo $dataoog1; ?>";apakodeposnya=apakodeposnya.split("**");
var berapapun="<?php echo $dataoog2; ?>";berapapun=berapapun.split("**");
var daerahe="<?php echo $dataoog3; ?>";daerahe=daerahe.split("**");
rpsebelumoog2=parseFloat(jQuery("#oogrp2").val());
pisebelumoog2=parseFloat(jQuery("#oogpi2").val());

if ((metodedata=="")||(isNaN(metodedata))) {
jQuery("#detailforpay2 #kalaudirpkan").html(rpsebelumoog2);
jQuery("#detailforpay2 #bayarnyedalampinetinside").val(pisebelumoog2);
jQuery("#detailforpay2 #txtkenaoog").html("0");
jQuery("#detailforpay2 #txtnyedalampinet").html(pisebelumoog2);
jQuery("#detailforpay2 #txtkenapulau").html("-");
return false;
}
for (xlop=0;xlop<apakodeposnya.length;xlop++)
{ tempegoreng=apakodeposnya[xlop];
if (tempegoreng.split(metodedata.substring(0, 1)).length>1)
{
jQuery("#detailforpay2 #txtkenapulau").html(daerahe[xlop]+" = "+parseFloat(berapapun[xlop]));
hitungoog=parseFloat(hitungoog)*parseFloat(berapapun[xlop]);jQuery("#detailforpay2 #txtkenaoog").html(hitungoog);
jQuery("#detailforpay2 #kalaudirpkan").html((parseFloat(rpsebelumoog2))+hitungoog);

jQuery.get('<?php echo $lokasiweb; ?>?docommand=chekongkirgk&dihitunglagipitotal=ceklagidah&angkarupiah='+(parseFloat(pisebelumoog2))+"||"+hitungoog, function(hasilnyaxongs){
kenaongkiran=kenaongkiran+parseFloat(hasilnyaxongs);
jQuery("#detailforpay2 #txtnyedalampinet").html((parseFloat(hasilnyaxongs)));
jQuery("#detailforpay2 #bayarnyedalampinetinside").val((parseFloat(hasilnyaxongs)));
})
break;}
}
if (hitungoog==0) {
jQuery("#detailforpay2 #txtkenapulau").html("-");
jQuery("#detailforpay2 #kalaudirpkan").html(rpsebelumoog2);
jQuery("#detailforpay2 #txtnyedalampinet").html(pisebelumoog2);
jQuery("#detailforpay2 #bayarnyedalampinetinside").val(pisebelumoog2);
jQuery("#detailforpay2 #txtkenaoog").html("0");
}
if (cekfromtheinside!="")
{doreupbuktis();}
}

var susununtukdetailtransfer=""; var alltotalonpi=0; var alltotalonrp=0; var kenaongkiran=0;
function doreloadkeranjang(metode="") {
buatsusunan=jQuery("#keranjangbelanjaan").val();
jQuery("#boxformtujuans input[forformaddress='form14']").attr("onkeyup","sioogoog();");
jQuery("#boxformtujuans input[forformaddress='form14']").attr("onblur","sioogoog();");
jQuery("#keranjangzforpro").html("<div style='display:block !important;position:relative !important;width:100%;background:url(<?php echo $lokasiweb; ?>/box/loadingbarberblue.gif) center no-repeat;height:44px;'>&nbsp;</div>");

    jQuery.get('<?php echo $lokasiweb; ?>?docommand=domodifcartker&isian=muatin', function(hasilnya){
if (hasilnya!="<div class='isi'>Keranjang Belanja Anda Kosong</div>")
{        jQuery("#cartimg2").show();jQuery("#cartimg1").hide();}
else
{jQuery("#cartimg2").hide();jQuery("#cartimg1").show();}
jQuery("#keranjangzforpro").html(hasilnya);
})
    buatsusunan=jQuery("#keranjangbelanjaan").val();

if (buatsusunan!="")
{
susununtukdetailtransfer=""; jumlahbaru=0; alltotalonpi=0; alltotalonrp=0;
buatsusunanlama=buatsusunan;
buatsusunan="";
buatsusunanlama=buatsusunanlama.split("|*-*|");

for (xlop=0;xlop<buatsusunanlama.length;xlop++)
{ jumlahbaru=jumlahbaru+parseFloat(jexpimp(buatsusunanlama[xlop],"|*|","","0x"));
alltotalonpi=alltotalonpi+parseFloat(jexpimp(buatsusunanlama[xlop],"|*|","","1x"));
alltotalonrp=alltotalonrp+parseFloat(jexpimp(buatsusunanlama[xlop],"|*|","","2x"));

jQuery.get('<?php echo $lokasiweb; ?>?docommand=chekongkirgk&angkarupiah='+jexpimp(buatsusunanlama[xlop],"|*|","","0x")+"||"+jexpimp(buatsusunanlama[xlop],"|*|","","3x"), function(hasilnyaxongs){
kenaongkiran=kenaongkiran+parseFloat(hasilnyaxongs);
})


}
if (alltotalonpi>0) {
  if (alltotalonpi.length>7)
{alltotalonpi = parseFloat(alltotalonpi).toFixed(7);}
}
susununtukdetailtransfer="<input type='text' style=\"display:none;\" readonly id=\"barangkenaongkir\" value=\""+kenaongkiran +"\"/>Total Produk dalam keranjang: "+jumlahbaru+"<br/>Total Produk yang dikenakan Ongkos Kirim: "+kenaongkiran+" KG<br/>Ongkos Kirim per KG ke pulau: <span id=\"txtkenapulau\">-</span><br/>Total Ongkos Kirim: <span id=\"txtkenaoog\">-</span><br/>Total Bayar dalam Pi: <span id=\"txtnyedalampinet\">"+alltotalonpi+"</span> <input type=\"button\" class=\"dt-btn dt-btn-m pigoldbutton\" value=\"Copy\" style=\"width:auto;\" onclick=\"salinkeclipboard('bayarnyedalampinet');return false;\" /><input style=\"display:none;\" type='text' readonly id=\"bayarnyedalampinetdefault\" value=\""+alltotalonpi +"\"/><input style=\"display:none;\" type='text' readonly id=\"bayarnyedalampinet\" value=\""+alltotalonpi +"\"/>"+"<br/>Total Bayar dalam Rp: <span id=\"kalaudirpkandefault\" style=\"display:none;\">"+alltotalonrp+"</span><span id=\"kalaudirpkan\">"+alltotalonrp+"</span>";
}
else
{susununtukdetailtransfer=""; jumlahbaru=0; alltotalonpi=0; alltotalonrp=0;
jQuery("#keranjangzforpro").html("<div class='isi'>Keranjang Belanja Anda Kosong</div>");
jQuery("#boxformancek").hide();    
jQuery("#boxbarangan").show("slow");
}
jQuery("#detailforpay").html(susununtukdetailtransfer);
sioogoog();
if (metode=="showform")
{jQuery("#boxbarangan").hide();
jQuery("#boxformancek").show("slow");    
return false;
}
jQuery("#boxformancek").hide();    
jQuery("#boxbarangan").show("slow");

}

</script>
  
<?php
$displaygambar1=$displaygambar2="";
if (!empty($deweedysaghakey4))
{$displaygambar1="display: none;";$displaygambar2="";

}
else
{$displaygambar1="";$displaygambar2="display: none;";}
?>

<?php
if(preg_match('/android.+mobile|BB7|BB07|touch|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$agenrahasiasaghait)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($agenrahasiasaghait,0,4)))
{ }
else
{ ?>
<div id="cartbuttons" style="width:41px;min-height: 9px;position: fixed;z-index: 999;bottom:0;cursor: pointer;margin:0px 0 41px 0px;" onclick="seekeranjangzsof('now');">
<img src="<?php echo $lokasiweb; ?>box/keranjangbelanjaanbg2.png" style="width:100%;height: auto;<?php echo $displaygambar1; ?>" id="cartimg1"/>
<img src="<?php echo $lokasiweb; ?>box/keranjangbelanjaanbg.png" style="width:100%;height: auto;<?php echo $displaygambar2; ?>" id="cartimg2"/>
</div>
<?php };
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)<2) {
 ?>
<div id="aibuttons" style="<?php echo (@$_REQUEST["launchfor"]==="desktop"?"display:none !important;":""); ?>width:41px;min-height: 9px;position: fixed;z-index: 99999;bottom:0;cursor: pointer;margin:0px 0 0px 3px;" onclick="ucaphasilnya();">
<img src="<?php echo $lokasiweb; ?>logoAI.png" style="width:100%;height: auto;"/>
</div>
<?php }; ?>
<div id="boxdetailforpro" class="bigboxes" style="display: none !important;">
<div style="width: 100%;text-align: center;"><span class="pigoldbutton" onclick="seedetailsof();" style="cursor: pointer;padding:2px 7px;float:right;font-weight: bold;">X</span>
<h2 style="color:#fff;text-shadow: 0 0 1px #feb64a;margin-bottom: 27px;">Detail Produk</h2>
</div>

<div id="detailforpro" class="onbox" style="background: rgba(255,255,255,0.93);">
</div>

</div>


<div id="boxkeranjangzforpro" class="bigboxes" style="display: none !important;">

<div style="width: 100%;text-align: center;position: fixed;z-index: 9;"><span id="showformcek" class="caleveact" onclick="doshowformcheck();" style="cursor: pointer;padding:2px 7px;float:right;font-weight: bold;">check out</span> <span class="calact" onclick="doreloadkeranjang();" style="cursor: pointer;padding:2px 7px;float:right;font-weight: bold;">muat ulang</span> <span class="pigoldbutton" onclick="seekeranjangzsof();" style="cursor: pointer;padding:2px 7px;float:right;font-weight: bold;">X</span>
</div>
<div style="width: 100%;height: 99px;text-align: center;"><h2 style="color:#fff;text-shadow: 0 0 1px #feb64a;margin: 27px 0;">Isi Keranjang Belanja Anda</h2></div>
<div class="onbox"  id="boxformancek" style="display:none !important;background: #fff;">
    <script type="text/javascript">
        
             <?php $formfrom="datafile"; ?>
        var donextboxdari<?php echo $formfrom; ?> = "";
        function lakukanbelanja() { 
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

<?php $tabletarget="data_pioneerweb";
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{
if (!empty($deweedysaghakey1))
{ if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",@$deweedysaghakey1,"status_pioneer")=="unverified") { ?>
alert("Maaf, Silahkan lakukan Proses Verifikasi Akun Anda Terlebih Dahulu, Anda dapat kembali melakukan Check Out belanja Anda setelah status akun Anda Aktif");
return false;
<?php }
};
}
else
{ ?> alert("Maaf, Super Admin tidak diperbolehkan Melakukan Pembelanjaan");
return false;
 <?php }; ?>
var konfirmasi=confirm("apakah anda yakin, anda telah mengisi seluruh kolom formulir dengan benar");
if (konfirmasi)
  {
        if (jQuery('#testtts select').find(':selected').attr('data-lang')=="id-ID") {
        kataumumnya=",terima kasih, harap tunggu hingga proses menyimpan data berhasil";
        }
        else
        {kataumumnya=",Thank you, please wait until the data saving process is successful";};
suarakansekarang();
var formData = new FormData(jQuery("#formdaftarinbelanja")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doregnewone&formname=inputandata&metoz=fromorder",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
<?php
if($runonmobile=="mobile")
{ $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ ?> alert(jexpimp(hasilnya,"|-|","","0x")); window.location.href='<?php echo $lokasiweb; ?>paitnya.php?paitx='+jexpimp(hasilnya,"|-|","","1x");  <?php }
else
{ ?> alert(hasilnya); window.location.href='<?php echo $lokasiweb; ?>'; <?php };
 }
else
{ ?> alert(hasilnya); window.location.href='<?php echo $lokasiweb; ?>';
<?php }; ?>
            return false;
            },
        });

return false;
}
return false;
}
    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinbelanja" onsubmit="lakukanbelanja(); return false;">
<?php
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{
?>
<div class="form-fields">
<?php
$tabletarget="data_pioneerweb"; $loadfromiddata="";

if (!empty($deweedysaghakey1))
{ $loadfromiddata=(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",@$deweedysaghakey1,"dataidutama_pioneer")===""?"":@$deweedysaghakey1);
}
?>

<div <?php echo ($loadfromiddata===""?"":"style='display:none !important;'"); ?>>
<label >Id Komunitas</label><br/>
<input type="text" id='boxforcek' class="deweedycustom validate[required]" placeholder="Silahkan Cek Nomor Komunitas" value="" onkeyup="cekkomica('boxforcek');">
    </div>

<div id="boxofasalnya" <?php echo ($loadfromiddata===""?"":"style='display:none !important;'"); ?>>
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
$setformdisp=" cekricek='boxforcek".$formsource[$iloopform]."' ".$setformdisp;
?>
<div <?php echo $setformdisp; ?>>
<label ><?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> *</label><br/>

<?php
if ($iloopform==6)
{    ?>

    <input type="email" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==5)
{    ?>
<select cekricek='boxforcekgender_pioneer' required class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" name="inputandata[]">
        <option value="pria" >Pria</option>
    <option value="wanita" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform])==="wanita"?"selected":""); ?>>Wanita</option>
</select>
    <?php
}
else if ($iloopform==0)
{    ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="" name="inputandata[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")===""?"-":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")); ?>" >
    <?php
}
else if ($iloopform==3)
{    ?>
    <input type="password" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==1)
{   if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")=="admin") { ?>
<div>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" name="inputandata[]">
        <option value="non-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="aktif" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="aktif"?"selected":""); ?>>Aktif</option>
</select>
</div>
<?php } else { ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="" name="inputandata[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")===""?"unverified":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")); ?>" >
<?php }; 
}
else
{
    $ukuranforms=@intval($sourceukuran[$iloopform]);
    if ($ukuranforms>255)
    {
    ?>
    <textarea <?php echo $setformdisp; ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
    <?php
    }
    else
    {
    ?>
    <input type="text" <?php echo $setformdisp." ".($iloopform===2?"id='formusernameforbelanja' "." onkeyup=\"recekusernames('formusernameforbelanja');\" ":""); ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>">
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
<select class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" name="inputandata[]">
        <option value="penguna" >User App</option>
    <option value="admin" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="admin"?"selected":""); ?>>Admin</option>
</select>
</div>

<div <?php echo @$setformdisp; ?>>
<label >Waktu Update : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dibuatsaat")));?> *</label><br/><br/>

</div>
<?php } else { ?>

<input type="text" cekricek='boxforceklevel_akun' style="display: none;" readonly class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="" name="inputandata[]" value="penguna" >

<?php } ?>

<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata[]" value="<?php echo $waktusebenernyawib; ?>" >

<?php
if (@$deweedysaghakey1=="")
{ ?>

<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);
if (count($agenrahasiasaghaitx)>1)
{ ?>
<script>

const Pixx = window.Pi;
jQuery(document).ready(function() {

        Pixx.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pixx.authenticate(t, onIncompletePaymentFound).then(function(auth){
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
jQuery(".usernameboxes").val(globalusernamesztukformdaftar);
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
$formfrom="datafile";
require ('saghafotodetection.php');
echo "</div>";
}
else
{ ?> <input type="file" <?php echo $reqforphoto; ?> accept="image/jpeg" class="deweedycustom myfotoboxes validate[required]" placeholder="" name="inputandatafile" ><br/> <?php }; ?>

<div class="pemetaankoordinat">
<input type="text" style="display: none;" readonly class="deweedycustom dampaklat validate[required]" placeholder="" name="dampaklat">
<input type="text" style="display: none;" readonly class="deweedycustom dampaklong validate[required]" placeholder="" name="dampaklong">
<input type="button" class="dt-btn dt-btn-m calactdanger" value="Kota / Kabupaten dan Kode Pos sesuai Peta" style="width:auto;" onclick="aturulangkodepos('.kode_pos_domisiliboxes','.alamat_kota_domisiliboxes');" />
<br/><br/>
<label>Titik Lokasi Anda Saat ini di Peta</label><br/>

<iframe id="justawalan" scrolling="no" frameborder="0" style="width:98vw !important;background: transparent !important;" oncontextmenu="return false;" /></iframe>
</div>
<script type="text/javascript">
 var lattenyaawalanbelanja="";
function buatdataawalanbelanjakodepos() {
if (latz!="") {    
if (jQuery(".kode_pos_domisiliboxes").val()=="")
{jQuery(".kode_pos_domisiliboxes").val(kodezpecahan);}
if (jQuery(".alamat_kota_domisiliboxes").val()=="")
{jQuery(".alamat_kota_domisiliboxes").val(kitishippecahan);}
if ((lattenyaawalanbelanja=="")||(lattenyaawalanbelanja!=latz))
{jQuery("#justawalan").attr("src","<?php echo $lokasiweb; ?>buatbuatin.php?dimanatuh=" + latz + "||" + longz+"&fromframes=justawalan");
jQuery(".dampaklat").val(latz); jQuery(".dampaklong").val(longz);
lattenyaawalanbelanja=latz;
jQuery(".pemetaankoordinat").show();
}
}
else
{ jQuery(".pemetaankoordinat").hide(); }
setTimeout("buatdataawalanbelanjakodepos()", 1000);
}
 jQuery(document).ready(function(){
buatdataawalanbelanjakodepos();
 })   
</script>

</div>
<?php }; ?>
</div>

<div><br/>
<select class="deweedycustom validate[required]" name="inputandata[]" id="selectors" onchange="showtujuanform();">
        <option value="beda" >Tujuan Pengiriman Berbeda dengan domisili</option>
        <option value="sama" >Tujuan Pengiriman Sama dengan domisili</option>
</select>
<br/><br/>
</div>

<script>
function showtujuanform() {
if (jQuery("#selectors").val()=="sama")
{
lakukanlooping=0;
for (lakukanlooping=8;lakukanlooping<=14;lakukanlooping++)
{ 
jQuery("#boxformtujuans textarea[forformaddress='form"+lakukanlooping+"']").val(jQuery("#boxofasalnya textarea[forformaddress='form"+lakukanlooping+"']").val());
jQuery("#boxformtujuans input[forformaddress='form"+lakukanlooping+"']").val(jQuery("#boxofasalnya input[forformaddress='form"+lakukanlooping+"']").val());
}

jQuery("#boxformtujuans").hide("slow");
jQuery("#boxformtujuans input[dochangeattr='form']").removeAttr("required");
jQuery("#boxformtujuans textarea[dochangeattr='form']").removeAttr("required");
}
else
{
jQuery("#boxformtujuans textarea[dochangeattr='form']").attr("required", "required");
jQuery("#boxformtujuans input[dochangeattr='form']").attr("required", "required");
jQuery("#boxformtujuans textarea[dochangeattr='form']").val("");
jQuery("#boxformtujuans input[dochangeattr='form']").val("");
jQuery("#boxformtujuans").show("slow");}
sioogoog();
}
</script>
<div id="boxformtujuans">
<?php
$tabletarget="databelanjaanpioner"; $loadfromiddata="";
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
<textarea <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata2[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{
?>
<input type="text" <?php echo (@$formsource[$iloopform]==="keterangan_belanjaan"?"":$setformdisp); ?> class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Wallet Address yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandata2[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
}
?>
</div>
<?php
}
}
?>
</div>
<textarea id="keranjangbelanjaan" style="width: 100%;min-height: 100px;display:none;opacity: 0;" name="inputandata2[]"><?php echo @$deweedysaghakey4; ?></textarea>

<?php
if (@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"dataidbelanjaan")!="")
{ ?>
<div <?php echo @$setformdisp; ?>>
<label >Waktu Belanja : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"tanggal_belanja")));?> *</label><br/><br/>
<input type="text" style="display: none;" readonly class="deweedycustom <?php echo $formsource[$iloopform]."boxes"; ?> validate[required]" placeholder="" name="inputandata2[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"tanggal_belanja"); ?>" >
</div>

<div>
<label >Foto Bukti Pembayaran *</label><br/>
<?php
if (@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar")!="")
{
$forbayar="box/buktiupbayar/".@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar");
if (file_exists($forbayar))
{ ?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php }; 
}; ?> 
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata2[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar"); ?>" >    
<input type="file" accept="image/jpeg" required class="deweedycustom validate[required]" placeholder="" name="inputandata2file" ><br/>
</div>
<div <?php echo @$setformdisp; ?>>
<label >Konfirmasi Pembayaran Pada : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"tanggal_konfirmasi_pembayaran")));?> *</label><br/><br/>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata2[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pembayaran")===""?"belum-dibayar":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pembayaran")); ?>" >    
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata2[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"tanggal_konfirmasi_pembayaran")===""?$waktusebenernyawib:@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"tanggal_konfirmasi_pembayaran")); ?>" >
</div>


<?php } else { ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata2[]" value="<?php echo $waktusebenernyawib; ?>" >
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata2[]" value="" >    
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata2[]" value="belum-dibayar" >    
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandata2[]" value="<?php echo $waktusebenernyawib; ?>" >
<?php }; ?> 
</div>
<br/><br/>
<div id="detailforpay">

</div>

<div><br/><br/>
<label>Silahkan Lakukan Transfer Pi Testnet ke Wallet Testnet <?php echo $namapt; ?> <input type="button" class="dt-btn dt-btn-m pigoldbutton" value="Copy" style="width:auto;" onclick="salinkeclipboard('datawallet');return false;" /> </label><br/>

<textarea id="datawallet" style="width: 100%;min-height: 100px;" readonly><?php echo idwallettujuan; ?></textarea>

</div>

<input type="submit" class="dt-btn dt-btn-m caleveact" value="Order" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" value="Keranjang" style="width:auto;" onclick="doreloadkeranjang();return false;" />
<?php }
else
    {echo "<div style='width:100%;min-height:10px;padding-top:13px;'><h1>Super Admin tidak bisa berbelanja</h1></div>";} ?>
</form>

<div class="onbox" style="height: 7vh !important;">&nbsp;<br/></div>

</div>

<div class="onbox" id="boxbarangan">

<style>
.bigboxes {width: 100% !important;background:var(--purpletrans90);min-height: 100vh;margin:0px;padding:0;overflow-x:hidden !important;overflow-y:auto !important;position: fixed;z-index: 9999;display: none;}
.bigboxes .onbox {width: 91% !important;min-height: 27px;padding:0 8px 5px 8px;margin: 0 0 0 4vw !important;position: absolute !important;}
#keranjangzforpro { width: 85% !important;padding:3px 7px;min-height: 10px;margin:0 auto;background:rgba(255,255,255,0.85);box-shadow: 0 0 10px 1px rgba(254,182,74,0.8); }
#keranjangzforpro .isi {padding: 4px 7px;border-bottom:1px dashed #000; }
#keranjangzforpro .isi:last-child {border-bottom: 0;} #keranjangzforpro .isi img.small {float:right;margin-right:3px;height: 25px;width: auto;}
#keranjangzforpro .isi span.small {float:right;margin-right: 9px;margin-left: 9px;font-size:80% !important; }
</style>
<div id="keranjangzforpro">

<?php
$lihatisicart=$proidx=$prokat="";
if (!empty($deweedysaghakey4))
{$lihatisicart=$deweedysaghakey4;
 $lihatisicart=@explode("|*-*|", @$lihatisicart);
for($iloop=0;$iloop<count($lihatisicart);$iloop++)
{ $proidx=@expimpd(@$lihatisicart[$iloop],"|*|","","3x");
$prokat=@lihatdetailproduk($proidx,"corecategory");
echo "<div class=\"isi\" id='cartboxreorder".md5(@$lihatisicart[$iloop])."'><input id='cartdata".md5(@$lihatisicart[$iloop])."' type='text' style='display:none;' value='".@$lihatisicart[$iloop]."'/> <img class='small' src='".$lokasiweb."box/catalogue/".$prokat."/".@lihatdetailproduk($proidx,"coreid").".jpg'/>  <span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"hapusinfromlist('".md5(@$lihatisicart[$iloop])."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doeditcarts('".md5(@$lihatisicart[$iloop])."','showme');\"></i> Beli: ".@expimpd(@$lihatisicart[$iloop],"|*|","","0x")." - Stok: ".@lihatdetailproduk($proidx,"corestockcount")."</span><span class=\"nomorin\">".($iloop+1)."</span>. ".@lihatdetailproduk($proidx,"corename")."<br/><div style='position:relative !important;'>".printouts(@$proidx,@$lihatisicart[$iloop])."</div></div>";
}
}
?>

</div>


<div class="onbox" style="height: 7vh !important;">&nbsp;<br/></div>
</div>

</div>


<script type="text/javascript">
    jQuery(document).ready(function(){
//        Pi.init({ version: "2.0", sandbox: true, }); tuk mengarah ke frasasandi
//        alert("This Website is still under construction");
//navigator.clipboard.readText().then(text => alert("copied text: " + text));
    })
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){
<?php
if ($runonmobile!="mobile") { ?>
    document.body.addEventListener("keydown", function(event) {
  if (event.code == "F12") {
    document.location='<?php echo $lokasiweb; ?>protection.php';
    event.preventDefault();
  }
  if (event.getModifierState("Control")  && event.code == "KeyU") {
    document.location='<?php echo $lokasiweb; ?>protection.php';
    event.preventDefault();
  }
  if (event.getModifierState("Control") && event.getModifierState("Shift") && event.code == "KeyI") {
    document.location='<?php echo $lokasiweb; ?>protection.php';
    event.preventDefault();
  }
});
   jQuery(document).bind("contextmenu",function(e) {
     e.preventDefault();
});
 <?php }; ?>
})
  </script>
<?php

if(preg_match('/android.+mobile|BB7|BB07|touch|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$agenrahasiasaghait)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($agenrahasiasaghait,0,4)))
{ require ("mobiverse/index.php"); }
else
{
?>  
<div id="load" class="spinner-loader">
<div class="load-wrap"><style type="text/css">
    [class*="the7-spinner-animate-"]{
        animation: spinner-animation 1s cubic-bezier(1,1,1,1) infinite;
        x:46.5px;
        y:40px;
        width:7px;
        height:20px;
        fill:var(--the7-beautiful-spinner-color2);
        opacity: 0.2;
    }
    .the7-spinner-animate-2{
        animation-delay: 0.083s;
    }
    .the7-spinner-animate-3{
        animation-delay: 0.166s;
    }
    .the7-spinner-animate-4{
         animation-delay: 0.25s;
    }
    .the7-spinner-animate-5{
         animation-delay: 0.33s;
    }
    .the7-spinner-animate-6{
         animation-delay: 0.416s;
    }
    .the7-spinner-animate-7{
         animation-delay: 0.5s;
    }
    .the7-spinner-animate-8{
         animation-delay: 0.58s;
    }
    .the7-spinner-animate-9{
         animation-delay: 0.666s;
    }
    .the7-spinner-animate-10{
         animation-delay: 0.75s;
    }
    .the7-spinner-animate-11{
        animation-delay: 0.83s;
    }
    .the7-spinner-animate-12{
        animation-delay: 0.916s;
    }
    @keyframes spinner-animation{
        from {
            opacity: 1;
        }
        to{
            opacity: 0;
        }
    }
</style>
<svg width="75px" height="75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
<rect class="the7-spinner-animate-1" rx="5" ry="5" transform="rotate(0 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-2" rx="5" ry="5" transform="rotate(30 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-3" rx="5" ry="5" transform="rotate(60 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-4" rx="5" ry="5" transform="rotate(90 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-5" rx="5" ry="5" transform="rotate(120 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-6" rx="5" ry="5" transform="rotate(150 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-7" rx="5" ry="5" transform="rotate(180 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-8" rx="5" ry="5" transform="rotate(210 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-9" rx="5" ry="5" transform="rotate(240 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-10" rx="5" ry="5" transform="rotate(270 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-11" rx="5" ry="5" transform="rotate(300 50 50) translate(0 -30)"></rect>
<rect class="the7-spinner-animate-12" rx="5" ry="5" transform="rotate(330 50 50) translate(0 -30)"></rect>
</svg></div>
</div>
<div id="page">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<div data-elementor-type="header" data-elementor-id="2900" class="elementor elementor-2900 elementor-location-header">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-b9cb677 the7-e-sticky-row-yes the7-e-sticky-effect-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b9cb677" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;the7_sticky_row&quot;:&quot;yes&quot;,&quot;the7_sticky_effects&quot;:&quot;yes&quot;,&quot;the7_sticky_effects_offset&quot;:60,&quot;the7_sticky_row_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;the7_sticky_row_offset&quot;:0,&quot;the7_sticky_effects_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b6bb7a9" data-id="b6bb7a9" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">

<section class="elementor-section elementor-inner-section elementor-element elementor-element-34fae8e elementor-section-height-min-height elementor-section-content-middle the7-e-sticky-effect-yes elementor-section-boxed elementor-section-height-default" data-id="34fae8e" data-element_type="section" data-settings="{&quot;the7_sticky_effects&quot;:&quot;yes&quot;,&quot;the7_sticky_effects_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;the7_sticky_effects_offset&quot;:0}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-40 elementor-inner-column elementor-element elementor-element-f24d215" data-id="f24d215" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-21243f6 the7-img-sticky-size-effect-yes elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="21243f6" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<a href="<?php echo $lokasiweb; ?>" class="judulberanimasibsus judulontopone">
<img style="width:auto !important;height:7vh !important;margin-right:7px;" src="<?php echo $lokasiweb; ?>logo-mbt.png" class="attachment-full size-full" alt="" loading="lazy" /> <?php echo $namapt; ?> </a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9c739ab" data-id="9c739ab" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap" >
<div style="float:right !important;right:0 !important;position: absolute !important;" class="elementor-element elementor-element-29ef1c0 items-decoration-yes sub-icon_align-side toggle-align-right sub-menu-position-tablet-justify sub-menu-position-mobile-justify toggle-align-mobile-right decoration-align-text mob-menu-popup parent-item-clickable-yes horizontal-menu--dropdown-tablet decoration-align%s-left decoration-position-bottom decoration-left-to-right sub-menu-position-left dt-sub-menu_align-left sub-icon_position-right elementor-widget elementor-widget-the7_horizontal-menu" data-id="29ef1c0" data-element_type="widget" data-settings="{&quot;dropdown_type&quot;:&quot;popup&quot;,&quot;parent_is_clickable&quot;:&quot;yes&quot;,&quot;dropdown&quot;:&quot;tablet&quot;}" data-widget_type="the7_horizontal-menu.default">
<div class="elementor-widget-container">
<div class="horizontal-menu-wrap"><a class="horizontal-menu-toggle hidden-on-load" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjQ3NjEiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D"><span class="right menu-toggle-icons" aria-hidden="true" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><g> <path d="M1.5,12.8c5.6,0,12.1,0,17.7,0c0.8,0,2.6,0,3.4,0c1,0,1-1.5,0-1.5c-5.6,0-12.1,0-17.7,0c-0.8,0-2.6,0-3.4,0   C0.5,11.2,0.5,12.8,1.5,12.8L1.5,12.8z"></path></g><g> <path d="M1.5,5.8c5.6,0,12.1,0,17.7,0c0.8,0,2.6,0,3.4,0c1,0,1-1.5,0-1.5c-5.6,0-12.1,0-17.7,0c-0.8,0-2.6,0-3.4,0   C0.5,4.2,0.5,5.8,1.5,5.8L1.5,5.8z"></path></g><g> <path d="M1.5,19.8c5.6,0,12.1,0,17.7,0c0.8,0,2.6,0,3.4,0c1,0,1-1.5,0-1.5c-5.6,0-12.1,0-17.7,0c-0.8,0-2.6,0-3.4,0   C0.5,18.2,0.5,19.8,1.5,19.8L1.5,19.8z"></path></g></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><path d="M20,18.9c-2.2-2.2-4.5-4.5-6.9-6.9c1.6-1.6,3.1-3.1,4.5-4.5c0.6-0.6,1.8-1.8,2.4-2.4c0.7-0.7-0.4-1.7-1.1-1.1  c-2.2,2.2-4.5,4.5-6.9,6.9c-1.6-1.6-3.1-3.1-4.5-4.5C6.9,5.9,5.7,4.6,5.1,4C4.4,3.4,3.4,4.4,4,5.1c2.2,2.2,4.5,4.5,6.9,6.9  c-1.6,1.6-3.1,3.1-4.5,4.5c-0.6,0.6-1.8,1.8-2.4,2.4c-0.7,0.7,0.4,1.7,1.1,1.1c2.2-2.2,4.5-4.5,6.9-6.9c1.6,1.6,3.1,3.1,4.5,4.5  c0.6,0.6,1.8,1.8,2.4,2.4C19.6,20.6,20.6,19.6,20,18.9z"></path></svg></span></a><nav class="dt-nav-menu-horizontal--main dt-nav-menu-horizontal__container justify-content-end widget-divider-">

<ul class="dt-nav-menu-horizontal d-flex flex-row justify-content-end">
<?php $buatsubmenu=$actnow1=$actnow2=$submenuid=$allmenus=$cetakmenu=$cetakmenu2=$cetaktempend="";
if (!empty($deweedysaghakey1))
{ $allmenus="member-area||produkku||event||anggota||laporan";
$cetaktempend='<li class="menu-item menu-item-type-post_type menu-item-object-page depth-0  " role="presentation" menupart="mainpart"><a href="'.$lokasiweb.'?metode=logout" data-level="1" role="menuitem"><span class="item-content"><span class="menu-item-text  "><span class="menu-text ">Log Out</span></span></a></li>';
if (@$deweedysaghakey1==mengacakstring("mbt2023forall",5))
 {$allmenus.="||pengaturan";}
}
else
{$allmenus="about||event||video||berita||anggota||daftar";}

$buatmenuweb=explode("||","home||".$allmenus);
if (!empty($_REQUEST["loadcontent"]))
{$submenuid=$_REQUEST["loadcontent"];}
for ($imenu=0;$imenu<count($buatmenuweb);$imenu++)
{ $actnow1=(@$buatmenuweb[$imenu]===$sekarangdimana?" current-menu-item current_page_item act actlinked ":(@expimpd(@$buatmenuweb[$imenu],"^^","","0x")===$sekarangdimana?"  current-menu-item current_page_item act actlinked ":""));
if (count(explode("^^",$buatmenuweb[$imenu]))<2)
{$cetaktemp='<li class="menu-item menu-item-type-post_type menu-item-object-page depth-0  '.$actnow1.'" role="presentation" menupart="mainpart"><a href="'.$lokasiweb."?page=".$buatmenuweb[$imenu].'" data-level="1" role="menuitem"><span class="item-content"><span class="menu-item-text  "><span class="menu-text '.$actnow1.'">'.ucwords(expimpd(@$buatmenuweb[$imenu],"-"," ")).'</span></span></a></li>'; $cetakmenu2.=$cetaktemp; $cetakmenu.=$cetaktemp; }
else
{  $buatsubmenu=explode("^^",$buatmenuweb[$imenu]);
$cetakmenu.='<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-children depth-0 '.$actnow1.'" role="presentation" menupart="mainpart"><a href="'.$lokasiweb."?page=".$buatsubmenu[$imenu].'" data-level="1" role="menuitem"><span class="item-content"><span class="menu-item-text  "><span class="menu-text '.$actnow1.'">'.ucwords(expimpd(@$buatsubmenu[0],"-"," ")).'</span></span><span class="submenu-indicator"><i aria-hidden="true" class="desktop-menu-icon fas fa-caret-down"></i><span class="submenu-mob-indicator"></span></span></span></a><ul class="the7-e-sub-nav horizontal-sub-nav">';
$cetakmenu2.='<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-children depth-0 '.$actnow1.'" role="presentation" menupart="mainpart"><a href="'.$lokasiweb."?page=".$buatsubmenu[$imenu].'" data-level="1" role="menuitem"><span class="item-content"><span class="menu-item-text  "><span class="menu-text '.$actnow1.'">'.ucwords(expimpd(@$buatsubmenu[0],"-"," ")).'</span></span></span><span class="right next-level-button" data-icon="fas fa-caret-up"><i aria-hidden="true" class="open-button fas fa-caret-down"></i> <i aria-hidden="true" class="icon-active fas fa-caret-up"></i></span></a><ul class="vertical-sub-nav hover-style-bg">';
$buatsubmenu=$buatsubmenu[1];
$actnow2=(@$buatsubmenu===$sekarangdimana?" current-menu-item current_page_item act actlinked ":(@expimpd(@$buatmenuweb[$imenu],"^^","","0x")===$sekarangdimana?"  current-menu-item current_page_item act actlinked ":""));
if (count(explode("|^|",$buatsubmenu))<2)
{ $actnow2=(@$buatsubmenu===$submenuid?" current-menu-item current_page_item act actlinked ":"");
$cetaktemp.='<li class="menu-item menu-item-type-post_type menu-item-object-page depth-1  '.$actnow2.'" ><a href="'.$lokasiweb."?page=".@expimpd(@$buatmenuweb[$imenu],"^^","","0x")."&loadcontent=".@$buatsubmenu.'" data-level="2" ><span class="item-content"><span class="menu-item-text  "><span class="menu-text '.$actnow2.'">'.ucwords(expimpd(@$buatsubmenu,"-"," ")).'</span></span></a></li>';
$cetakmenu2.=$cetaktemp; $cetakmenu.=$cetaktemp; }
else
{ $buatsubmenu=explode("|^|",$buatsubmenu);
for ($imenu2=0;$imenu2<count($buatsubmenu);$imenu2++)
{
$actnow2=(@$buatsubmenu[$imenu2]===$submenuid?" current-menu-item current_page_item act actlinked ":"");
$cetaktemp='<li class="menu-item menu-item-type-post_type menu-item-object-page depth-1  '.$actnow2.'" ><a href="'.$lokasiweb."?page=".@expimpd(@$buatmenuweb[$imenu],"^^","","0x")."&loadcontent=".@$buatsubmenu[$imenu2].'" data-level="2" ><span class="item-content"><span class="menu-item-text  "><span class="menu-text '.$actnow2.'">'.ucwords(expimpd(@$buatsubmenu[$imenu2],"-"," ")).'</span></span></a></li>'; 
$cetakmenu2.=$cetaktemp; $cetakmenu.=$cetaktemp;
 }
}
$cetakmenu.='</ul></li>'; $cetakmenu2.='</ul></li>';
}
}
$cetaktemp=$cetaktempend;
$cetakmenu2.=$cetaktemp; $cetakmenu.=$cetaktemp;
echo $cetakmenu;


?>

 </ul></nav></div> </div>
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
</div>
</div>
</section>
<?php if ((@$susunberita!="")&&((empty($_REQUEST["loadcontent"]))||(@$_REQUEST["loadcontent"]!="berita"))) { ?>
    <style>
    .headlinenewsz * {color:#fff !important;}
    </style>
<marquee class="headlinenewsz" style="background: #850382;width:100%;padding:5px 0;color:#fff;margin-bottom: -9px !important;" behaviour="scroll" direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
<?php echo @$susunberita; ?>
</marquee>
<?php }; ?>

</div>
</div>
<div id="main" class="sidebar-none sidebar-divider-off">
<div class="main-gradient"></div>
<div class="wf-wrap">
<div class="wf-container-main">
<div id="content" class="content" role="main">
<div data-elementor-type="wp-page" data-elementor-id="4" class="elementor elementor-4">
<div class="elementor-inner">
<div class="elementor-section-wrap">
<?php
if ((!empty($_GET["page"])) && (@$_GET["page"]!="home"))
{
?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-be2b6a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="be2b6a5" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55f2e1e" data-id="55f2e1e" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">

<div class="elementor-element elementor-element-5c94bc2 content-align-center icon-position-top icon-vertical-align-center icon-box-vertical-align-center elementor-widget elementor-widget-the7_icon_box_grid_widget" data-id="5c94bc2" data-element_type="widget" data-widget_type="the7_icon_box_grid_widget.default">
<div class="elementor-widget-container">
<div class="the7-box-grid-wrapper the7-elementor-widget loading-effect-none the7_icon_box_grid_widget-5c94bc2" style="color:#000 !important;">

<?php
 if (file_exists("partisian/".$_GET["page"].".php"))
{require ("partisian/".$_GET["page"].".php");}
else
{echo "Maaf, laman <b>".$_GET["page"]."</b> belum dibuat";};
?>
</div>

 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php
 }
else
{
 ?>
<section class="specialsection elementor-section elementor-top-section elementor-element elementor-element-b887c4d elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b887c4d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bba0a82" data-id="bba0a82" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-fedf0b1 elementor-widget-tablet__width-inherit elementor-widget elementor-widget-heading" data-id="fedf0b1" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h4 class="elementor-heading-title elementor-size-default">Selamat datang di website resmi</h4> </div>
</div>
<div class="elementor-element elementor-element-b43965e elementor-widget elementor-widget-spacer" data-id="b43965e" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-790fc26 elementor-widget elementor-widget-heading" data-id="790fc26" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default"><?php echo $namapt2; ?></h2> </div>
</div>
<div class="elementor-element elementor-element-aef214c elementor-widget elementor-widget-spacer" data-id="aef214c" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>


<div class="elementor-element elementor-element-6eb46a8 elementor-widget elementor-widget-spacer" data-id="6eb46a8" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b8fba03" data-id="b8fba03" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-70acc65 elementor-widget__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-image" data-id="70acc65" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img id="sourceframe" src="<?php echo $lokasiweb; ?>box/lambangfront.jpg" />

 </div>
</div>
</div>
<div class="elementor-element elementor-element-b4b824f elementor-widget__width-initial elementor-widget-mobile__width-auto elementor-absolute e-transform e-transform elementor-widget elementor-widget-image" data-id="b4b824f" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_transform_translateX_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-18,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-18,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.6,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img  style="filter: brightness(0.2) sepia(1) hue-rotate(80deg) saturate(5);" src="https://the7.io/business-advisors/wp-content/uploads/sites/72/2022/10/sqr012-col1.svg"/> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-be2b6a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="be2b6a5" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55f2e1e" data-id="55f2e1e" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-1d87d7e elementor-widget elementor-widget-heading" data-id="1d87d7e" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="box-description"><p>Seiring dengan pertumbuhan ekonomi di Indonesia yang mulai menggeliat bangkit setelah melewati masa pandemi, dan masyarakatnya yang mulai mengupayakan kembali untuk memenuhi kebutuhan akan perumahan dan kendaraan bermotor, maka kami <b>PT. Mahkota Bogor Timur</b> ikut berpartisipasi ambil bagian menjadi agen penyalur dan penyedia barang dan jasa untuk menjawab kebutuhan tersebut.</p>
<p><b>PT. Mahkota Bogor Timur</b> adalah perusahaan yang bergerak dalam bidang agen penyedia dan penyalur barang dan jasa, seperti properti dan kendaraan bermotor. Kami berawal dari sebuah komunitas pada tahun 2022, yang kemudian mendirikan perusahaan PT. Mahkota Bogor Timur pada bulan April 2023. Beralamat di Jl. Raya Narogong No. 5 RT. 003 RW. 005 Cileungsi Kidul, Cileungsi, Bogor - Jawa Barat.</p>
<p>Kami yakin bahwa dengan melalui usaha ini dapat memperkuat dan mengembangkan hubungan bisnis yang saling menguntungkan dan suasana yang kondusif dengan pelanggan, maupun mitra kami di seluruh wilayah Republik Indonesia, khususnya wilayah Bogor dan Jawa Barat.</p>

<p>Dan Akhirnya, selamat berbelanja di <b>Mahkota Big Trade</b> yang merupakan marketplace dari <b>PT. Mahkota Bogor Timur</b></p>
<img style="display: inline-grid;width:40% !important;height: auto !important;margin:9px auto 7px auto !important;" src="<?php echo $lokasiweb; ?>box/paywithpi.jpg" />
</div>
 </div>
</div>


</div>
</div>
</div>
</div>
</div>
</section>



<section style="color:#000 !important;" class="specialsection elementor-section elementor-top-section elementor-element elementor-element-b887c4d elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b887c4d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0c395a0" data-id="0c395a0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-37d8273 elementor-widget elementor-widget-heading" data-id="37d8273" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">

<input type="text" id="foronfocus" style="width: 0;opacity: 0;z-index: -999;" />

<section class="elementor-section elementor-top-section elementor-element elementor-element-b885f3c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b885f3c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13f7f1b" data-id="13f7f1b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div id="pilihancats" class="elementor-element elementor-element-ff135d7 content-align-center icon-position-top icon-vertical-align-center icon-box-vertical-align-top elementor-widget elementor-widget-the7_icon_box_grid_widget" data-id="ff135d7" data-element_type="widget" data-widget_type="the7_icon_box_grid_widget.default">
<div class="elementor-widget-container" style="width:100% !important;">

<form id="mencariprodukku" name="mencariprodukku" style="margin-left:-59px;width: 96vw !important;" onsubmit="return selectorofcategory('bycustom'); return false;">
<?php
if (@count(@explode("Chrome",@$_SERVER['HTTP_USER_AGENT']))>1)
{ ?>
<div id="aireloaderscaribarang"></div>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#aireloaderscaribarang").load("<?php echo $lokasiweb; ?>speechRecognition.php");
    })
</script>
<div id="judulnofir"></div>
<button type="button" id="startaix" class="pigoldbutton" onclick="mulaiindong();" style="border:0;padding:8px !important;"><i title='Search Text By Voice' class='fas fa-microphone' style='cursor:pointer;'></i></button>
<?php }; ?>
<input type="text" placeholder="Silahkan Ketikan Nama Produk atau Sub Kategori (contoh: mobil sport, jasa, pakaian, kapal)" value="" name="searchingboxes" id="searchingboxes" required style="width:76%;margin-right: 7px;">
 <button type="submit" class="pigoldbutton" style="border:0;padding:8px !important;"><i title='Search Text' class='fas fa-search' style='cursor:pointer;'></i></button>
</form>
<br/>
<h3 style="width: 100%;text-align: center;color:#fff;">Atau Klik Pilihan Kategori dibawah ini</h3><br/>

<?php
$detailofcats=explode("||","Dapatkan pilihan terbaik untuk liburan dan perjalanan Anda dengan klik di sini||Miliki Hunian yang Berkualitas dan Berkelas di sini||Temukan Kendaraan Impian Anda dengan klik di sini||Penuhi Kebutuhan Anda Lainnya di sini");

for ($iloop=0;$iloop<count($dataofcats);$iloop++)
{
?>
<div style="cursor:pointer;" onclick="selectorofcategory('<?php echo $dataofcats[$iloop]; ?>');" class="blocklist">

<table style="width: 100%;" cellspacing="0" cellpadding="0">
  <tr><td style="width: 100%;text-align: center !important;">
  <img src="<?php echo $lokasiweb ?>box/catalogue/<?php echo $dataofcats[$iloop]; ?>.png" style="width:50% !important;height: 150px;margin: 0 auto !important;"/>
</td></tr><tr><td style="width: 100%;">
<h2 style="font-size: 123% !important;"><?php echo ucwords(expimpd($dataofcats[$iloop],"-"," ")); ?> </h2>
</td></tr><tr><td style="width: 100%;"><div class="box-description"><?php echo $detailofcats[$iloop]; ?>.</div></td></tr>
</table>

 </div>

<?php
}
?>

 </div>
</div>

<div id="boxofshowcats" style="display: none;color:#000 !important;" class="elementor-element elementor-element-ff135d7 content-align-center icon-position-top icon-vertical-align-center icon-box-vertical-align-top elementor-widget elementor-widget-the7_icon_box_grid_widget" data-element_type="widget" data-widget_type="the7_icon_box_grid_widget.default">
<div class="elementor-widget-container">
<div class="the7-box-grid-wrapper the7-elementor-widget loading-effect-none the7_icon_box_grid_widget-ff135d7"> 
<div class="dt-css-grid" style="width: 100% !important;min-height: 100px;">
<div style="width: 85vw !important;">
<h2 class="elementor-heading-title elementor-size-default" id="judulforcats" style="text-align: center;width: 100% !important;text-transform: capitalize !important;">Kebutuhan Harian</h2>


<div id="contentforcats" style="width: 101% !important;min-height: 100px;margin:40px 0 18px 0;">

</div>
<input type="text" id="foronfocus2" style="width: 0;opacity: 0;z-index: -999;" />

<div style="width: 100%;margin-top: 27px;text-align: center;">
<span id="buttonofadd" class="caleveact" onclick="selectorofcategory('loadmore');" style="cursor: pointer;padding:2px 5px;">Lebih Banyak</span>    
<span class="pigoldbutton" onclick="selectorofcategory();" style="cursor: pointer;padding:2px 5px;">Kembali Ke Kategori</span>
</div>

</div>
</div>
</div> </div>
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
</div>
</section>



<section class="elementor-section elementor-top-section elementor-element elementor-element-8522ef6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8522ef6" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0c395a0" data-id="0c395a0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-37d8273 elementor-widget elementor-widget-heading" data-id="37d8273" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Brand yang sudah bergabung</h3> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-5a2ab31 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5a2ab31" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55071df" data-id="55071df" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">


<marquee style="width: 100%" direction="left" >

<?php
$pathzp = "box/brandingz/";
$isi_dirzp = @opendir($pathzp);
if (!($isi_dirzp))
{die("Folder $pathzp tidak bisa dibuka");}
$loopscans=$loopnumber=0;
while ($filezp = readdir($isi_dirzp)) {

$scanallfile = scandir($pathzp);
$filezpx=$scanallfile[$loopnumber];
$gettodelete=substr($filezpx, 0, 2);
$loopnumber=$loopnumber+1;
if (($filezpx=="index.php")||($filezpx=="..")||($filezpx==".")||($filezpx==".DS_Store")||($gettodelete=="._"))
{continue;};

?>

 <img style="width: auto;height: 123px !important;" src="<?php echo $lokasiweb.$pathzp.$filezpx; ?>" />


<?php 
}
closedir($isi_dirzp);
?>
</marquee>

</div>
</div>
</div>
</div>
</div>
</section>
<?php }; ?>


</div>
</div>
</div>
</div>
</div>
</div>
</div>

<footer id="footer" class="footer solid-bg elementor-footer">
<div class="wf-wrap">
<div class="wf-container-footer">
<div class="wf-container">
<div data-elementor-type="footer" data-elementor-id="752" class="elementor elementor-752 elementor-location-footer">
<div class="elementor-section-wrap">
<section style="background:rgba(133,3,130,0.8) !important;" class="elementor-section elementor-top-section elementor-element elementor-element-68523834 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="68523834" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7df1c0f0" data-id="7df1c0f0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-9d317da elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9d317da" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="costumeblock elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-adae421" data-id="adae421" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-98dc773 elementor-widget elementor-widget-image" data-id="98dc773" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<input type="text" id="focusforfacedetusernmboxfrombottomloginboxs" style="width:0;height: 0;opacity: 0;position: absolute;z-index: -1;" />
<iframe id="boxforxvideos" style="width:100% !important;height: 350px;overflow: hidden !important;display: none !important;" scrolling="no" frameborder="0"></iframe>
  <img id="imgfrontdesk" src="<?php echo $lokasiweb;?>logo-mbt.png" style="width: 100%;height: auto;"/>

 </div>
</div>
</div>
<div class="elementor-element elementor-element-30820be elementor-widget elementor-widget-spacer" data-id="30820be" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-e78efb9 elementor-widget elementor-widget-text-editor" data-id="e78efb9" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<?php
if (!empty($deweedysaghakey1))
{ ?>
<div style="width:100%;text-align: center;"><a href="<?php echo $lokasiweb?>?page=about">Tentang MBT</a> | <a href="<?php echo $lokasiweb?>?page=anggota">Anggota</a> | <a href="<?php echo $lokasiweb?>?page=scan">QR Scan</a> | <a href="<?php echo $lokasiweb?>?page=event">Event</a> | <a href="<?php echo $lokasiweb?>?page=video">Video</a> | <a href="<?php echo $lokasiweb?>?page=tos">TOS</a> | <a href="<?php echo $lokasiweb?>?page=berita">Berita</a></div>
<?php }
else
{ ?>
<input type="text" id="focusforfacedetusernmboxfromloginboxs" style="width:0;height: 0;opacity: 0;position: absolute;z-index: -1;" />
<script>
function lakukanloginfromloginfront() { 
            jQuery.post('<?php echo $lokasiweb; ?>?docommand=loginbro&formname=inputandatafromloginfront',jQuery("#formdaftarinfromloginfront").serialize(), function(data){
            if (data=="")
            {alert("Akun Tidak ditemukan, Silahkan Ulangi");return false;} 
            alert(data);
            if (data.substring(0, 5)!="Mohon")
            {window.location.href='<?php echo $lokasiweb; ?>?page=member-area';}
            return false;
        });
return false;
}
</script>
<form class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinfromloginfront" onsubmit="lakukanloginfromloginfront(); return false;">
<div class="form-fields">
<label >Username *</label><br/>
<input type="text" class="deweedycustom validate[required]" id="usernmboxfrombottomloginboxs" onkeyup="detectusn4low('usernmboxfrombottomloginboxs');" placeholder="Username untuk Login saat pendaftaran *" value="" name="inputandatafromloginfront[]" required> <br/>
<label >Password *</label><br/><input type="password" class="deweedycustom validate[required]" placeholder="Password untuk Login saat pendaftaran *" name="inputandatafromloginfront[]" value="" required> <br/>

<input type="submit" class="dt-btn dt-btn-m caleveact" value="Login" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/>  <input type="button" class="dt-btn dt-btn-m calact" value="Reset Password" onclick="pingpong('usernmboxfrombottomloginboxs');" style="width:auto;"/>
</div><br/>
 <input type="button" class="dt-btn dt-btn-m calactdanger" value="Face Detection" onclick="loadxvideos('usernmboxfrombottomloginboxs');" style="width:auto;"/>
</form>

<?php }; ?>
 </div>

</div>
</div>

</div>
</div>
</div>
<div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-e6358a7" data-id="e6358a7" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-0f19e2e elementor-widget elementor-widget-heading" data-id="0f19e2e" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 >Lokasi Kami</h2> </div>
</div>
<div class="elementor-element elementor-element-e42e805 elementor-widget elementor-widget-spacer" data-id="e42e805" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-88a2729 dt-nav-menu_align-left dt-sub-menu_align-left elementor-widget elementor-widget-the7_nav-menu" data-id="88a2729" data-element_type="widget" data-settings="{&quot;submenu_display&quot;:&quot;always&quot;}" data-widget_type="the7_nav-menu.default">
<div class="elementor-widget-container">

<iframe src="<?php echo @$themaps; ?>" style="border:0;width:100%;height:300px;box-shadow:0px 0px 10px 1px rgba(255,255,255,0.8);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



 </div>
</div>

<div class="elementor-element elementor-element-dcdda06 elementor-widget elementor-widget-spacer" data-id="dcdda06" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-d55077c content-align-left icon-position-left icon-vertical-align-start elementor-widget elementor-widget-the7_icon_box_widget" data-id="d55077c" data-element_type="widget" data-widget_type="the7_icon_box_widget.default">
<div class="elementor-widget-container">
<div class="the7-box-wrapper the7-elementor-widget the7_icon_box_widget-d55077c"> <div class="box-content-wrapper">
<a class="elementor-icon-div"> <div class="elementor-icon">
<i aria-hidden="true" class="feather feather-phone"></i> </div>
</a> <div class="box-content">
<h4 class="box-heading" style="color:#fff !important;">
<a href="<?php echo $webwa; ?>"> 0<?php echo $nohp; ?> </a> <span style="font-size: 90% !important;">- Whatsapp Only</span> 
<?php
if (empty($deweedysaghakey1))
{ ?> | <a href="<?php echo $lokasiweb?>?page=tos">TOS</a> <?php }; ?> </h4>

</div>
</div>
</div> </div>
</div>
<div class="elementor-element elementor-element-dcdda06 elementor-widget elementor-widget-spacer" data-id="dcdda06" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-60af18f content-align-left icon-position-left icon-vertical-align-start elementor-widget elementor-widget-the7_icon_box_widget" data-id="60af18f" data-element_type="widget" data-widget_type="the7_icon_box_widget.default">
<div class="elementor-widget-container">
<div class="the7-box-wrapper the7-elementor-widget the7_icon_box_widget-60af18f"> <div class="box-content-wrapper">
<a class="elementor-icon-div"> <div class="elementor-icon">
<i aria-hidden="true" class="feather feather-map-pin"></i> </div>
</a> <div class="box-content">
<h4 class="box-heading">
<a> <?php echo $alamat; ?> </a> </h4>
</div>
</div>
</div> </div>
</div>

<div class="elementor-element elementor-element-ec16741 elementor-widget elementor-widget-spacer" data-id="ec16741" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="costumeblock elementor-element elementor-element-bb77327 elementor-widget__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="bb77327" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<div class="the7-icon-wrapper the7-elementor-widget"><a class="elementor-icon" href="#"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></div> </div>
</div>
<div class="costumeblock elementor-element elementor-element-43ce659 elementor-widget__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="43ce659" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<div class="the7-icon-wrapper the7-elementor-widget"><a class="elementor-icon" href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a></div> </div>
</div>
<div class="costumeblock elementor-element elementor-element-754c10c elementor-widget__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="754c10c" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<div class="the7-icon-wrapper the7-elementor-widget"><a class="elementor-icon" href="https://www.youtube.com/@pionirchannelbotim/"><i aria-hidden="true" class="fab fa-youtube"></i></a></div> </div>
</div>
<div class="costumeblock elementor-element elementor-element-754c10c elementor-widget__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="754c10c" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<div class="the7-icon-wrapper the7-elementor-widget"><a class="elementor-icon" href="mailto:<?php echo $mailz; ?>"><i aria-hidden="true" class="fab feather feather-mail"></i></a></div> </div>
</div>
<div class="costumeblock elementor-element elementor-element-ab50695 elementor-widget__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="ab50695" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<div class="the7-icon-wrapper the7-elementor-widget"><a class="elementor-icon" href="#"><i aria-hidden="true" class="fab fa-instagram"></i></a></div> </div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>
<div class="elementor-element elementor-element-f2fe294 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f2fe294" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
</div>
</div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-bc3caa9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bc3caa9" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d1600a3" data-id="d1600a3" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-3514acd elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="3514acd" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default" style="color:#fff !important;">&copy; Copyright | <?php echo $namapt; ?> | <?php
if (date("Y")<=2023)
{echo "2023";} 
else
{echo "2023 - ".date("Y");}
 ?>. All rights reserved.</div> </div>
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
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</footer>
<a href="#" class="scroll-top scroll-top-elementor-icon"> <i style="filter: brightness(0.2) sepia(1) hue-rotate(80deg) saturate(5);" aria-hidden="true" class="feather feather-arrow-up"></i> <span class="screen-reader-text">Go to Top</span>
</a>
</div>

<div class="demo-overlay"></div>

<div data-elementor-type="popup" data-elementor-id="4761" class="elementor elementor-4761 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInRight&quot;,&quot;exit_animation&quot;:&quot;fadeInRight&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.4,&quot;sizes&quot;:[]},&quot;timing&quot;:[]}">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-4a9cc7c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a9cc7c" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-386f72ea" data-id="386f72ea" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div style="width: 125.6% !important;margin-left: -18px !important;" class="elementor-widget-wrap">
<div class="elementor-element elementor-element-3e63782 elementor-widget elementor-widget-spacer" data-id="3e63782" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div style="margin:-13px 0 10px 0;height: 36px;padding-left:56px;background: url('<?php echo $lokasiweb;?>logo-mbt.png') no-repeat;background-size: auto 100%  !important;"><h4 style="color:#850382;"><?php echo $namapt2; ?></h4> </div>
</div>
</div>

<div class="elementor-element elementor-element-a0f1620 widget-divider-yes dt-nav-menu_align-left dt-sub-menu_align-left elementor-widget elementor-widget-the7_nav-menu" data-id="a0f1620" data-element_type="widget" data-settings="{&quot;submenu_display&quot;:&quot;on_click&quot;}" data-widget_type="the7_nav-menu.default">
<div class="elementor-widget-container">
<nav class="dt-nav-menu--main dt-nav-menu__container dt-sub-menu-display-on_click dt-icon-align-side dt-icon-position-right dt-sub-icon-position-right dt-sub-icon-align-with_text"><ul class="dt-nav-menu">
<?php echo $cetakmenu2; ?>

<li>
<?php
if (empty($deweedysaghakey1))
{ ?>
<script>
function lakukanloginfromloginfrontsidemenu() { 
            jQuery.post('<?php echo $lokasiweb; ?>?docommand=loginbro&formname=inputandatafromloginfrontsidemenu',jQuery("#formdaftarinfromloginfrontsidemenu").serialize(), function(data){
            if (data=="")
            {alert("Akun Tidak ditemukan, Silahkan Ulangi");return false;} 
            alert(data);
            if (data.substring(0, 5)!="Mohon")
            {window.location.href='<?php echo $lokasiweb; ?>?page=member-area';}
            return false;
        });
return false;
}

</script>
<div style="display: block !important;width: 100% !important; "><h4 style="border-bottom: 1px dashed #acacac; margin-bottom: 13px;">Punya akun? silahkan login</h4>
<form class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinfromloginfrontsidemenu" onsubmit="lakukanloginfromloginfrontsidemenu(); return false;">
<div class="form-fields">
<label >Username *</label><br/>
<input type="text" class="deweedycustom validate[required]" placeholder="Username untuk Login saat pendaftaran *" value="" name="inputandatafromloginfrontsidemenu[]" required> <br/>
<label >Password *</label><br/><input type="password" class="deweedycustom validate[required]" placeholder="Password untuk Login saat pendaftaran *" name="inputandatafromloginfrontsidemenu[]" value="" required> <br/>

<input type="submit" class="dt-btn dt-btn-m caleveact" value="Login" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/>
</div>
</form>
</div>
<?php }; ?>
</li>

 </ul></nav>



  </div>
</div>
<div class="elementor-element elementor-element-6758de3 elementor-widget elementor-widget-spacer" data-id="6758de3" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>

<div class="elementor-element elementor-element-f2801d0 elementor-widget__width-auto dt-menu-cart--items-indicator-plain elementor-widget elementor-widget-the7-woocommerce-menu-cart" data-id="f2801d0" data-element_type="widget" data-settings="{&quot;popup_action_adding_product&quot;:&quot;yes&quot;}" data-widget_type="the7-woocommerce-menu-cart.default">
<div class="elementor-widget-container">
<div class="dt-menu-cart__toggle dt-empty-cart has-popup">

<span class="dt-cart-content">
<span class="dt-cart-title"><a class="elementor-icon" href="<?php echo $themaps; ?>" target="_blank"><i aria-hidden="true" class="fab feather feather-map-pin"></i></a>&nbsp; <a class="elementor-icon" href="<?php echo $webwa; ?>"><i aria-hidden="true" class="fab fa-whatsapp"></i> </a>&nbsp;&nbsp; <a class="elementor-icon" href="https://www.youtube.com/@pionirchannelbotim/"><i aria-hidden="true" class="fab fa-youtube"></i></a>&nbsp;&nbsp; <a class="elementor-icon" href="mailto:<?php echo $mailz; ?>"><i aria-hidden="true" class="fab feather feather-mail"></i></a></span>

</span>
</div>
</div>
</div>

<div class="elementor-element elementor-element-53502fc elementor-widget elementor-widget-spacer" data-id="53502fc" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<script type="text/javascript">
    (function () {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
    })();
  </script>
<link rel='stylesheet' id='the7-icon-box-widget-css' href='<?php echo $lokasiweb; ?>plugin/the7-icon-box-widget.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-woocommerce-menu-cart-css' href='<?php echo $lokasiweb; ?>plugin/the7-woocommerce-menu-cart.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7_horizontal-menu-css' href='<?php echo $lokasiweb; ?>plugin/the7-horizontal-menu-widget.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-icon-box-grid-widget-css' href='<?php echo $lokasiweb; ?>plugin/the7-icon-box-grid-widget.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-carousel-text-and-icon-widget-css' href='<?php echo $lokasiweb; ?>plugin/the7-carousel-text-and-icon-widget.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-icon-widget-css' href='<?php echo $lokasiweb; ?>plugin/the7-icon-widget.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-vertical-menu-widget-css' href='<?php echo $lokasiweb; ?>plugin/the7-vertical-menu-widget.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='the7-woocommerce-e-cart-css' href='<?php echo $lokasiweb; ?>plugin/the7-woocommerce-cart.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css' href='<?php echo $lokasiweb; ?>plugin/animations.min.css?ver=3.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='the7-e-sticky-effect-css' href='<?php echo $lokasiweb; ?>plugin/the7-sticky-effects.min.css?ver=11.1.1-b10311455' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/main.min.js.download?ver=11.1.1-b10311455' id='dt-main-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/jquery.blockUI.min.js.download?ver=2.7.0-wc.7.0.1' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/business-advisors\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/business-advisors\/?wc-ajax=%%endpoint%%&elementor_page_id=4","i18n_view_cart":"View cart","cart_url":"https:\/\/the7.io\/business-advisors\/shop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/add-to-cart.min.js.download?ver=7.0.1' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/js.cookie.min.js.download?ver=2.1.4-wc.7.0.1' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/business-advisors\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/business-advisors\/?wc-ajax=%%endpoint%%&elementor_page_id=4"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/woocommerce2.min.js.download?ver=7.0.1' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/business-advisors\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/business-advisors\/?wc-ajax=%%endpoint%%&elementor_page_id=4","cart_hash_key":"wc_cart_hash_6e04a9831329d1b45c8e1fb84c2aefc9","fragment_name":"wc_fragments_6e04a9831329d1b45c8e1fb84c2aefc9","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/cart-fragments.min.js.download?ver=7.0.1' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/legacy.min.js.download?ver=11.1.1-b10311455' id='dt-legacy-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/jquery-mousewheel.min.js.download?ver=11.1.1-b10311455' id='jquery-mousewheel-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/custom-scrollbar.min.js.download?ver=11.1.1-b10311455' id='the7-custom-scrollbar-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/post-type.min.js.download?ver=2.7.1' id='the7-core-js'></script>
<script type='text/javascript' id='dt-demostand-plugin-script-js-extra'>
/* <![CDATA[ */
var dtDemostand = {"cookiePath":"\/","skinURI":{"key":"dt_demo_skin"},"transport":"get","skin":"skin11r","layout":"wide","header":"left","frontPageUrl":"https:\/\/the7.io\/business-advisors\/"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/public-min.js.download?ver=2.3.3' id='dt-demostand-plugin-script-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/frontend-common.min.js.download?ver=11.1.1-b10311455' id='the7-elementor-frontend-common-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/the7-woocommerce-menu-cart.min.js.download?ver=11.1.1-b10311455' id='the7-woocommerce-menu-cart-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/the7-horizontal-menu.min.js.download?ver=11.1.1-b10311455' id='the7_horizontal-menu-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/the7-vertical-menu.min.js.download?ver=11.1.1-b10311455' id='the7_nav-menu-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/the7-woocommerce-cart.min.js.download?ver=11.1.1-b10311455' id='the7-woocommerce-e-cart-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/webpack-pro.runtime.min.js.download?ver=3.7.3' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/webpack.runtime.min.js.download?ver=3.7.8' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/frontend-modules.min.js.download?ver=3.7.8' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/regenerator-runtime.min.js.download?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/wp-polyfill.min.js.download?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/hooks.min.js.download?ver=c6d64f2cb8f5c6bb49caca37f8828ce3' id='wp-hooks-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/i18n.min.js.download?ver=ebee46757c6a411e38fd079a7ac71d94' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/the7.io\/business-advisors\/wp-admin\/admin-ajax.php","nonce":"123bce55d6","urls":{"assets":"https:\/\/the7.io\/business-advisors\/wp-content\/plugins\/pro-elements\/assets\/","rest":"https:\/\/the7.io\/business-advisors\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/the7.io\/business-advisors\/shop\/cart\/","checkout_page_url":"https:\/\/the7.io\/business-advisors\/shop\/checkout\/","fragments_nonce":"99478f2399"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/the7.io\/business-advisors\/wp-content\/plugins\/pro-elements\/modules\/lottie\/assets\/animations\/default.js.downloadon"}};
</script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/frontend.min.js.download?ver=3.7.3' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/waypoints.min.js.download?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/ui/core.min.js.download?ver=1.13.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/swiper.min.js.download?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/share-link.min.js.download?ver=3.7.8' id='share-link-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/dialog.min.js.download?ver=4.9.0' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1101,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1100,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.7.8","is_static":false,"experimentalFeatures":{"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/the7.io\/business-advisors\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"viewport_tablet":1100,"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":4,"title":"The7%3A%20Business%20Advisors%20%E2%80%93%20The7%20Theme%20Demo","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/frontend2.min.js.download?ver=3.7.8' id='elementor-frontend-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/preloaded-elements-handlers.min.js.download?ver=3.7.3' id='pro-preloaded-elements-handlers-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/preloaded-modules.min.js.download?ver=3.7.8' id='preloaded-modules-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/jquery.sticky.min.js.download?ver=3.7.3' id='e-sticky-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/jquery-sticky.min.js.download?ver=11.1.1-b10311455' id='the7-e-sticky-js'></script>
<script type='text/javascript' src='<?php echo lokasiprogram; ?>plugin/sticky-effects.min.js.download?ver=11.1.1-b10311455' id='the7-e-sticky-effect-js'></script>
<div class="the7-e-mini-cart-template">
<div class="the7-e-woo-cart-fragment the7-e-woo-cart-fragment-content the7-e-woo-cart-content the7-e-woo-cart-status-cart-empty"></div> <div class="the7-e-woo-cart-fragment the7-e-woo-cart-fragment-subtotal">
</div>
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
<div class="pswp__bg"></div>
<div class="pswp__scroll-wrap">
<div class="pswp__container">
<div class="pswp__item"></div>
<div class="pswp__item"></div>
<div class="pswp__item"></div>
</div>
<div class="pswp__ui pswp__ui--hidden">
<div class="pswp__top-bar">
<div class="pswp__counter"></div>
<button class="pswp__button pswp__button--close" title="Close (Esc)" aria-label="Close (Esc)"></button>
<button class="pswp__button pswp__button--share" title="Share" aria-label="Share"></button>
<button class="pswp__button pswp__button--fs" title="Toggle fullscreen" aria-label="Toggle fullscreen"></button>
<button class="pswp__button pswp__button--zoom" title="Zoom in/out" aria-label="Zoom in/out"></button>
<div class="pswp__preloader">
<div class="pswp__preloader__icn">
<div class="pswp__preloader__cut">
<div class="pswp__preloader__donut"></div>
</div>
</div>
</div>
</div>
<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
<div class="pswp__share-tooltip"></div>
</div>
<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)" aria-label="Previous (arrow left)">
</button>
<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)" aria-label="Next (arrow right)">
</button>
<div class="pswp__caption">
<div class="pswp__caption__center"></div>
</div>
</div>
</div>
</div>
<?php }; ?>
</div>
</body>
</html>
