<?php 


$folder        = GSDATAOTHERPATH . '/massiveMenuExt/';
$filename      = $folder . 'menuext.json';
$chmod_mode    = 0755;
$folder_exists = file_exists($folder) || mkdir($folder, $chmod_mode);
$daterJson = @file_get_contents($filename);
$daterJsonNew = json_encode($daterJson);

 
;?>


<style>
.form-menuext{
    width:100%;
    display:flex;
    flex-direction: column;
    grid-gap:10px;
    border:solid 1px #ddd;
    background:#fafafa;
    padding:15px;
    margin-top:10px;
}

.form-menuext input,select{
    width:100%;
    padding:5px;
    margin-top:10px;
}

.newlink-menu{
list-style-type:none;
margin: 0 !important;
padding: 0;
border:solid 1px #ddd;
background:#fafafa;
}

.newlink-menu li{
    padding:15px;
    display:flex;
    align-items: center;
    justify-content:space-between;
}

.newlink-menu li:nth-child(2n){
background:#ddd;
}

#unicons{
  display:grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
  align-items: center;
  height:300px;
   overflow-y:scroll;
}

#unicons input[type="checkbox"]{
  margin: 0;
  padding: 0;
  all:revert;
}

 #unicons .uil{
   font-size:1.2rem;

 }

</style>



<h3><?php echo i18n_r('massiveAdmin/MENUEXTERNAL');?></h3>

<ul class="newlink-menu">

<?php   
$datee = @file_get_contents($filename);
$data = json_decode($datee,true);

if(file_exists($filename)){

foreach($data as $query){

$oldname = $query["name"];
$newname = str_replace(" ","",$query["name"]);
$newnamenew = strtolower($newname);


echo '<li><a href="'.$query["url"].'"><i class="'.$query["icon"].'"></i> '.$query["name"].'</a> <form action="#" method="POST"><button name="'.$newnamenew.'" style="background:red;border:none;color:#fff;font-size:1.2rem"><i class="uil uil-trash"></i></button></form></li>';

if(isset($_POST[$newnamenew])){
$datee = file_get_contents($filename);
$data = json_decode($datee,true);
unset($data[$oldname]);
$datee =json_encode($data);
file_put_contents($filename, $datee);
echo("<meta http-equiv='refresh' content='0'>");
};

};

}
;?>

</ul>



<form action="#" method="POST" class="form-menuext">


<div>
<label for=""><?php echo i18n_r('massiveAdmin/LINKNAME');?></label>
<input type="text" name="linkname" required>
</div>

<div>
<label for=""><?php echo i18n_r('massiveAdmin/LINKURL');?></label>
<input type="text" name="linkurl" required>
</div>

<div>
<label for=""><?php echo i18n_r('massiveAdmin/NEWWINDOW');?></label>
<select name="linkblank">
  <option value="_blank"><?php echo i18n_r('massiveAdmin/YES');?></option>
  <option value="_self"><?php echo i18n_r('massiveAdmin/NO');?></option>
</select>

</div>

<div>
<label for="" style="margin-bottom:20px"><?php echo i18n_r('massiveAdmin/LINKICON');?> </label>
 
<div id="unicons">
</div>




</div>

<div class="buttons-save">
    <input type="submit" style="width: 100%;
padding: 10px;
margin-top: 20px;
background: #000;
color: #fff;
border: none;
border-radius: 5px;" name="addnew" value="<?php echo i18n_r('massiveAdmin/ADDLINK');?>">
</div>


</form>

<script>

const uniArray = [
'<i class="uil uil-0-plus"></i>',
'<i class="uil uil-10-plus"></i>',
'<i class="uil uil-12-plus"></i>',
'<i class="uil uil-13-plus"></i>',
'<i class="uil uil-16-plus"></i>',
'<i class="uil uil-17-plus"></i>',
'<i class="uil uil-18-plus"></i>',
'<i class="uil uil-21-plus"></i>',
'<i class="uil uil-3-plus"></i>',
'<i class="uil uil-500px"></i>',
'<i class="uil uil-6-plus"></i>',
'<i class="uil uil-abacus"></i>',
'<i class="uil uil-accessible-icon-alt"></i>',
'<i class="uil uil-adjust"></i>',
'<i class="uil uil-adjust-alt"></i>',
'<i class="uil uil-adjust-circle"></i>',
'<i class="uil uil-adjust-half"></i>',
'<i class="uil uil-adobe"></i>',
'<i class="uil uil-adobe-alt"></i>',
'<i class="uil uil-airplay"></i>',
'<i class="uil uil-align"></i>',
'<i class="uil uil-align-alt"></i>',
'<i class="uil uil-align-center"></i>',
'<i class="uil uil-align-center-alt"></i>',
'<i class="uil uil-align-center-h"></i>',
'<i class="uil uil-align-center-justify"></i>',
'<i class="uil uil-align-center-v"></i>',
'<i class="uil uil-align-justify"></i>',
'<i class="uil uil-align-left"></i>',
'<i class="uil uil-align-left-justify"></i>',
'<i class="uil uil-align-letter-right"></i>',
'<i class="uil uil-align-right"></i>',
'<i class="uil uil-align-right-justify"></i>',
'<i class="uil uil-amazon"></i>',
'<i class="uil uil-ambulance"></i>',
'<i class="uil uil-analysis"></i>',
'<i class="uil uil-analytics"></i>',
'<i class="uil uil-anchor"></i>',
'<i class="uil uil-android"></i>',
'<i class="uil uil-android-alt"></i>',
'<i class="uil uil-android-phone-slash"></i>',
'<i class="uil uil-angle-double-down"></i>',
'<i class="uil uil-angle-double-left"></i>',
'<i class="uil uil-angle-double-right"></i>',
'<i class="uil uil-angle-double-up"></i>',
'<i class="uil uil-angle-down"></i>',
'<i class="uil uil-angle-left"></i>',
'<i class="uil uil-angle-left-b"></i>',
'<i class="uil uil-angle-right"></i>',
'<i class="uil uil-angle-right-b"></i>',
'<i class="uil uil-angle-up"></i>',
'<i class="uil uil-angry"></i>',
'<i class="uil uil-ankh"></i>',
'<i class="uil uil-annoyed"></i>',
'<i class="uil uil-annoyed-alt"></i>',
'<i class="uil uil-apple"></i>',
'<i class="uil uil-apple-alt"></i>',
'<i class="uil uil-apps"></i>',
'<i class="uil uil-archive"></i>',
'<i class="uil uil-archive-alt"></i>',
'<i class="uil uil-archway"></i>',
'<i class="uil uil-arrow"></i>',
'<i class="uil uil-arrow-break"></i>',
'<i class="uil uil-arrow-circle-down"></i>',
'<i class="uil uil-arrow-circle-left"></i>',
'<i class="uil uil-arrow-circle-right"></i>',
'<i class="uil uil-arrow-circle-up"></i>',
'<i class="uil uil-arrow-compress-h"></i>',
'<i class="uil uil-arrow-down"></i>',
'<i class="uil uil-arrow-down-left"></i>',
'<i class="uil uil-arrow-down-right"></i>',
'<i class="uil uil-arrow-from-right"></i>',
'<i class="uil uil-arrow-from-top"></i>',
'<i class="uil uil-arrow-growth"></i>',
'<i class="uil uil-arrow-left"></i>',
'<i class="uil uil-arrow-random"></i>',
'<i class="uil uil-arrow-resize-diagonal"></i>',
'<i class="uil uil-arrow-right"></i>',
'<i class="uil uil-arrow-to-bottom"></i>',
'<i class="uil uil-arrow-to-right"></i>',
'<i class="uil uil-arrow-up"></i>',
'<i class="uil uil-arrow-up-left"></i>',
'<i class="uil uil-arrow-up-right"></i>',
'<i class="uil uil-arrows-h"></i>',
'<i class="uil uil-arrows-h-alt"></i>',
'<i class="uil uil-arrows-left-down"></i>',
'<i class="uil uil-arrows-maximize"></i>',
'<i class="uil uil-arrows-merge"></i>',
'<i class="uil uil-arrows-resize"></i>',
'<i class="uil uil-arrows-resize-h"></i>',
'<i class="uil uil-arrows-resize-v"></i>',
'<i class="uil uil-arrows-right-down"></i>',
'<i class="uil uil-arrows-shrink-h"></i>',
'<i class="uil uil-arrows-shrink-v"></i>',
'<i class="uil uil-arrows-up-right"></i>',
'<i class="uil uil-arrows-v"></i>',
'<i class="uil uil-arrows-v-alt"></i>',
'<i class="uil uil-assistive-listening-systems"></i>',
'<i class="uil uil-asterisk"></i>',
'<i class="uil uil-at"></i>',
'<i class="uil uil-atom"></i>',
'<i class="uil uil-auto-flash"></i>',
'<i class="uil uil-award"></i>',
'<i class="uil uil-award-alt"></i>',
'<i class="uil uil-baby-carriage"></i>',
'<i class="uil uil-backpack"></i>',
'<i class="uil uil-backspace"></i>',
'<i class="uil uil-backward"></i>',
'<i class="uil uil-bag"></i>',
'<i class="uil uil-bag-alt"></i>',
'<i class="uil uil-bag-slash"></i>',
'<i class="uil uil-balance-scale"></i>',
'<i class="uil uil-ban"></i>',
'<i class="uil uil-band-aid"></i>',
'<i class="uil uil-bars"></i>',
'<i class="uil uil-baseball-ball"></i>',
'<i class="uil uil-basketball"></i>',
'<i class="uil uil-basketball-hoop"></i>',
'<i class="uil uil-bath"></i>',
'<i class="uil uil-battery-bolt"></i>',
'<i class="uil uil-battery-empty"></i>',
'<i class="uil uil-bed"></i>',
'<i class="uil uil-bed-double"></i>',
'<i class="uil uil-behance"></i>',
'<i class="uil uil-behance-alt"></i>',
'<i class="uil uil-bell"></i>',
'<i class="uil uil-bell-school"></i>',
'<i class="uil uil-bell-slash"></i>',
'<i class="uil uil-bill"></i>',
'<i class="uil uil-bing"></i>',
'<i class="uil uil-bitcoin"></i>',
'<i class="uil uil-bitcoin-alt"></i>',
'<i class="uil uil-bitcoin-circle"></i>',
'<i class="uil uil-bitcoin-sign"></i>',
'<i class="uil uil-black-berry"></i>',
'<i class="uil uil-blogger"></i>',
'<i class="uil uil-blogger-alt"></i>',
'<i class="uil uil-bluetooth-b"></i>',
'<i class="uil uil-bold"></i>',
'<i class="uil uil-bolt"></i>',
'<i class="uil uil-bolt-alt"></i>',
'<i class="uil uil-bolt-slash"></i>',
'<i class="uil uil-book"></i>',
'<i class="uil uil-book-alt"></i>',
'<i class="uil uil-book-medical"></i>',
'<i class="uil uil-book-open"></i>', 
'<i class="uil uil-book-reader"></i>', 
'<i class="uil uil-bookmark"></i>', 
'<i class="uil uil-bookmark-full"></i>', 
'<i class="uil uil-books"></i>', 
'<i class="uil uil-boombox"></i>', 
'<i class="uil uil-border-alt"></i>',
'<i class="uil uil-border-bottom"></i>',
'<i class="uil uil-border-clear"></i>',
'<i class="uil uil-border-horizontal"></i>', 
'<i class="uil uil-border-inner"></i>',
'<i class="uil uil-border-left"></i>',
'<i class="uil uil-border-out"></i>',
'<i class="uil uil-border-right"></i>',
'<i class="uil uil-border-top"></i>',
'<i class="uil uil-border-vertical"></i>',
'<i class="uil uil-bowling-ball"></i>',
'<i class="uil uil-box"></i>',
'<i class="uil uil-brackets-curly"></i>',
'<i class="uil uil-brain"></i>',
'<i class="uil uil-briefcase"></i>', 
 '<i class="uil uil-briefcase-alt"></i>',
 
 '<i class="uil uil-bright"></i>',
 
 '<i class="uil uil-brightness"></i>',
 
 '<i class="uil uil-brightness-empty"></i>',
 
 '<i class="uil uil-brightness-half"></i>',
 
 '<i class="uil uil-brightness-low"></i>',
 
 '<i class="uil uil-brightness-minus"></i>',
 
 '<i class="uil uil-brightness-plus"></i>',
 
 '<i class="uil uil-bring-bottom"></i>',
 
 '<i class="uil uil-bring-front"></i>',
 
 '<i class="uil uil-browser"></i>',
 
 '<i class="uil uil-brush-alt"></i>',
 
 '<i class="uil uil-bug"></i>',
 
 '<i class="uil uil-building"></i>',
 
 '<i class="uil uil-bullseye"></i>',
 
 '<i class="uil uil-bus"></i>',
 
 '<i class="uil uil-bus-alt"></i>',
 
 '<i class="uil uil-bus-school"></i>',
 
 '<i class="uil uil-calculator"></i>',
 
 '<i class="uil uil-calculator-alt"></i>',
 
 '<i class="uil uil-calendar-alt"></i>',
 
 '<i class="uil uil-calendar-slash"></i>',
 
 '<i class="uil uil-calender"></i>',
 
 '<i class="uil uil-calling"></i>',
 
 '<i class="uil uil-camera"></i>',
 
 '<i class="uil uil-camera-change"></i>',
 
 '<i class="uil uil-camera-plus"></i>',
 
 '<i class="uil uil-camera-slash"></i>',
 
 '<i class="uil uil-cancel"></i>',
 
 '<i class="uil uil-capsule"></i>',
 
 '<i class="uil uil-capture"></i>',
 
 '<i class="uil uil-car"></i>',
 
 '<i class="uil uil-car-sideview"></i>',
 
 '<i class="uil uil-car-slash"></i>',
'​</i>',
 
 '<i class="uil uil-car-wash"></i>',
 
 '<i class="uil uil-card-atm"></i>',
 
 '<i class="uil uil-caret-right"></i>',
 
 '<i class="uil uil-cell"></i>',
 
 '<i class="uil uil-celsius"></i>',
 
 '<i class="uil uil-channel"></i>',
 
 '<i class="uil uil-channel-add"></i>',
 
 '<i class="uil uil-chart"></i>',
 
 '<i class="uil uil-chart-bar"></i>',
 
 '<i class="uil uil-chart-bar-alt"></i>',
 
 '<i class="uil uil-chart-down"></i>',
 
 '<i class="uil uil-chart-growth"></i>',
 
 '<i class="uil uil-chart-growth-alt"></i>',
 
 '<i class="uil uil-chart-line"></i>',
 
 '<i class="uil uil-chart-pie"></i>',
 
 '<i class="uil uil-chart-pie-alt"></i>',
 
 '<i class="uil uil-chat"></i>',
 
 '<i class="uil uil-chat-bubble-user"></i>',
 
 '<i class="uil uil-chat-info"></i>',
 
 '<i class="uil uil-check"></i>',
 
 '<i class="uil uil-check-circle"></i>',
 
 '<i class="uil uil-check-square"></i>',
 
 '<i class="uil uil-circle"></i>',
 
 '<i class="uil uil-circle-layer"></i>',
 
 '<i class="uil uil-circuit"></i>',
 
 '<i class="uil uil-clapper-board"></i>',
 
 '<i class="uil uil-clinic-medical"></i>',
 
 '<i class="uil uil-clipboard"></i>',
 
 '<i class="uil uil-clipboard-alt"></i>',
 
 '<i class="uil uil-clipboard-blank"></i>',
 
 '<i class="uil uil-clipboard-notes"></i>',
 
 '<i class="uil uil-clock"></i>',
 
 '<i class="uil uil-clock-eight"></i>',
 
 '<i class="uil uil-clock-five"></i>',
 
 '<i class="uil uil-clock-nine"></i>',
 
 '<i class="uil uil-clock-seven"></i>',
 
 '<i class="uil uil-clock-ten"></i>',
 
 '<i class="uil uil-clock-three"></i>',
 
 '<i class="uil uil-clock-two"></i>',
 
 '<i class="uil uil-closed-captioning"></i>',
 
 '<i class="uil uil-closed-captioning-slash"></i>',
 
 '<i class="uil uil-cloud"></i>',
 
 '<i class="uil uil-cloud-block"></i>',
 
 '<i class="uil uil-cloud-bookmark"></i>',
 
 '<i class="uil uil-cloud-check"></i>',
 
 '<i class="uil uil-cloud-computing"></i>',
 
 '<i class="uil uil-cloud-data-connection"></i>',
 
 '<i class="uil uil-cloud-database-tree"></i>',
 
 '<i class="uil uil-cloud-download"></i>',
 
 '<i class="uil uil-cloud-drizzle"></i>',
 
 '<i class="uil uil-cloud-exclamation"></i>',
 
 '<i class="uil uil-cloud-hail"></i>',
 
 '<i class="uil uil-cloud-heart"></i>',
 
 '<i class="uil uil-cloud-info"></i>',
 
 '<i class="uil uil-cloud-lock"></i>',
 
 '<i class="uil uil-cloud-meatball"></i>',
 
 '<i class="uil uil-cloud-moon"></i>',
 
 '<i class="uil uil-cloud-moon-hail"></i>',
 
 '<i class="uil uil-cloud-moon-meatball"></i>',
 
 '<i class="uil uil-cloud-moon-rain"></i>',
 
 '<i class="uil uil-cloud-moon-showers"></i>',
 
 '<i class="uil uil-cloud-question"></i>',
 
 '<i class="uil uil-cloud-rain"></i>',
 
 '<i class="uil uil-cloud-rain-sun"></i>',
 
 '<i class="uil uil-cloud-redo"></i>',
 
 '<i class="uil uil-cloud-share"></i>',
 
 '<i class="uil uil-cloud-shield"></i>',
 
 '<i class="uil uil-cloud-showers"></i>',
 
 '<i class="uil uil-cloud-showers-alt"></i>',
 
 '<i class="uil uil-cloud-showers-heavy"></i>',
 
 '<i class="uil uil-cloud-slash"></i>',
 
 '<i class="uil uil-cloud-sun"></i>',
 
 '<i class="uil uil-cloud-sun-hail"></i>',
 
 '<i class="uil uil-cloud-sun-meatball"></i>',
 
 '<i class="uil uil-cloud-sun-rain"></i>',
 
 '<i class="uil uil-cloud-sun-rain-alt"></i>',
 
 '<i class="uil uil-cloud-sun-tear"></i>',
 
 '<i class="uil uil-cloud-times"></i>',
 
 '<i class="uil uil-cloud-unlock"></i>',
 
 '<i class="uil uil-cloud-upload"></i>',
 
 '<i class="uil uil-cloud-wifi"></i>',
 
 '<i class="uil uil-cloud-wind"></i>',
 
 '<i class="uil uil-clouds"></i>',
 
 '<i class="uil uil-club"></i>',
 
 '<i class="uil uil-code-branch"></i>',
 
 '<i class="uil uil-coffee"></i>',
 
 '<i class="uil uil-cog"></i>',
 
 '<i class="uil uil-coins"></i>',
 
 '<i class="uil uil-columns"></i>',
 
 '<i class="uil uil-comment"></i>',
 
 '<i class="uil uil-comment-add"></i>',
 
 '<i class="uil uil-comment-alt"></i>',
 
 '<i class="uil uil-comment-alt-block"></i>',
 
 '<i class="uil uil-comment-alt-chart-lines"></i>',
 
 '<i class="uil uil-comment-alt-check"></i>',
 
 '<i class="uil uil-comment-alt-dots"></i>',
 
 '<i class="uil uil-comment-alt-download"></i>',
 
 '<i class="uil uil-comment-alt-edit"></i>',
 
 '<i class="uil uil-comment-alt-exclamation"></i>',
 
 '<i class="uil uil-comment-alt-heart"></i>',
 
 '<i class="uil uil-comment-alt-image"></i>',
 
 '<i class="uil uil-comment-alt-info"></i>',
 
 '<i class="uil uil-comment-alt-lines"></i>',
 
 '<i class="uil uil-comment-alt-lock"></i>',
 
 '<i class="uil uil-comment-alt-medical"></i>',
 
 '<i class="uil uil-comment-alt-message"></i>',
 
 '<i class="uil uil-comment-alt-notes"></i>',
 
 '<i class="uil uil-comment-alt-plus"></i>',
 
 '<i class="uil uil-comment-alt-question"></i>',
 
 '<i class="uil uil-comment-alt-redo"></i>',
 
 '<i class="uil uil-comment-alt-search"></i>',
 
 '<i class="uil uil-comment-alt-share"></i>',
 
 '<i class="uil uil-comment-alt-shield"></i>',
 
 '<i class="uil uil-comment-alt-slash"></i>',
 
 '<i class="uil uil-comment-alt-upload"></i>',
 
 '<i class="uil uil-comment-alt-verify"></i>',
 
 '<i class="uil uil-comment-block"></i>',
 
 '<i class="uil uil-comment-chart-line"></i>',
 
 '<i class="uil uil-comment-check"></i>',
 
 '<i class="uil uil-comment-dots"></i>',
 
 '<i class="uil uil-comment-download"></i>',
 
 '<i class="uil uil-comment-edit"></i>',
 
 '<i class="uil uil-comment-exclamation"></i>',
 
 '<i class="uil uil-comment-heart"></i>',
 
 '<i class="uil uil-comment-image"></i>',
 
 '<i class="uil uil-comment-info"></i>',
 
 '<i class="uil uil-comment-info-alt"></i>',
 
 '<i class="uil uil-comment-lines"></i>',
 
 '<i class="uil uil-comment-lock"></i>',
 
 '<i class="uil uil-comment-medical"></i>',
 
 '<i class="uil uil-comment-message"></i>',
 
 '<i class="uil uil-comment-notes"></i>',
 
 '<i class="uil uil-comment-plus"></i>',
 
 '<i class="uil uil-comment-question"></i>',
 
 '<i class="uil uil-comment-redo"></i>',
 
 '<i class="uil uil-comment-search"></i>',
 
 '<i class="uil uil-comment-share"></i>',
 
 '<i class="uil uil-comment-shield"></i>',
 
 '<i class="uil uil-comment-slash"></i>',
 
 '<i class="uil uil-comment-upload"></i>',
 
 '<i class="uil uil-comment-verify"></i>',
 
 '<i class="uil uil-comments"></i>',
 
 '<i class="uil uil-comments-alt"></i>',
 
 '<i class="uil uil-compact-disc"></i>',
 
 '<i class="uil uil-comparison"></i>',
 
 '<i class="uil uil-compass"></i>',
 
 '<i class="uil uil-compress"></i>',
 
 '<i class="uil uil-compress-alt"></i>',
 
 '<i class="uil uil-compress-alt-left"></i>',
 
 '<i class="uil uil-compress-arrows"></i>',
 
 '<i class="uil uil-compress-lines"></i>',
 
 '<i class="uil uil-compress-point"></i>',
 
 '<i class="uil uil-compress-v"></i>',
 
 '<i class="uil uil-confused"></i>',
 
 '<i class="uil uil-constructor"></i>',
 
 '<i class="uil uil-copy"></i>',
 
 '<i class="uil uil-copy-alt"></i>',
 
 '<i class="uil uil-copy-landscape"></i>',
 
 '<i class="uil uil-copyright"></i>',
 
 '<i class="uil uil-corner-down-left"></i>',
 
 '<i class="uil uil-corner-down-right"></i>',
 
 '<i class="uil uil-corner-down-right-alt"></i>',
 
 '<i class="uil uil-corner-left-down"></i>',
 
 '<i class="uil uil-corner-right-down"></i>',
 
 '<i class="uil uil-corner-up-left"></i>',
 
 '<i class="uil uil-corner-up-left-alt"></i>',
 
 '<i class="uil uil-corner-up-right"></i>',
 
 '<i class="uil uil-corner-up-right-alt"></i>',
 
 '<i class="uil uil-coronavirus"></i>',
 
 '<i class="uil uil-create-dashboard"></i>',
 
 '<i class="uil uil-creative-commons-pd"></i>',
 
 '<i class="uil uil-credit-card"></i>',
 
 '<i class="uil uil-credit-card-search"></i>',
 
 '<i class="uil uil-crockery"></i>',
 
 '<i class="uil uil-crop-alt"></i>',
 
 '<i class="uil uil-crop-alt-rotate-left"></i>',
 
 '<i class="uil uil-crop-alt-rotate-right"></i>',
 
 '<i class="uil uil-crosshair"></i>',
 
 '<i class="uil uil-crosshair-alt"></i>',
 
 '<i class="uil uil-crosshairs"></i>',
 
  
 '<i class="uil uil-cube"></i>',
 
 '<i class="uil uil-dashboard"></i>',
 
 '<i class="uil uil-data-sharing"></i>',
 
 '<i class="uil uil-database"></i>',
 
 '<i class="uil uil-database-alt"></i>',
 
 '<i class="uil uil-desert"></i>',
 
 '<i class="uil uil-desktop"></i>',
 
 '<i class="uil uil-desktop-alt"></i>',
 
 '<i class="uil uil-desktop-alt-slash"></i>',
 
 '<i class="uil uil-desktop-cloud-alt"></i>',
 
 '<i class="uil uil-desktop-slash"></i>',
 
 '<i class="uil uil-dialpad"></i>',
 
 '<i class="uil uil-dialpad-alt"></i>',
 
 '<i class="uil uil-diamond"></i>',
 
 '<i class="uil uil-diary"></i>',
 
 '<i class="uil uil-diary-alt"></i>',
 
 '<i class="uil uil-dice-five"></i>',
 
 '<i class="uil uil-dice-four"></i>',
 '<i class="uil uil-dice-one"></i>',
 '<i class="uil uil-dice-six"></i>',
 
 '<i class="uil uil-dice-three"></i>',
 
 '<i class="uil uil-dice-two"></i>',
 
 '<i class="uil uil-direction"></i>',
 
 '<i class="uil uil-directions"></i>',
 
  
 '<i class="uil uil-dizzy-meh"></i>',
 
 '<i class="uil uil-dna"></i>',
 
  
 '<i class="uil uil-document-info"></i>',
 
 '<i class="uil uil-document-layout-center"></i>',
 
 '<i class="uil uil-document-layout-left"></i>',
 
 '<i class="uil uil-document-layout-right"></i>',
 
 '<i class="uil uil-dollar-alt"></i>',
 
 '<i class="uil uil-dollar-sign"></i>',
 
 '<i class="uil uil-dollar-sign-alt"></i>',
 
 '<i class="uil uil-download-alt"></i>',
 
  
 '<i class="uil uil-dribbble"></i>',
 
 '<i class="uil uil-drill"></i>',
 
 '<i class="uil uil-dropbox"></i>',
 
 '<i class="uil uil-dumbbell"></i>',
 
 '<i class="uil uil-ear"></i>',
 
 '<i class="uil uil-edit"></i>',
 
 '<i class="uil uil-edit-alt"></i>',
 
 
 '<i class="uil uil-ellipsis-h"></i>',
 
 '<i class="uil uil-ellipsis-v"></i>',
 
 '<i class="uil uil-emoji"></i>',
 
 
 '<i class="uil uil-enter"></i>',
 
 '<i class="uil uil-envelope"></i>',
 
 '<i class="uil uil-envelope-add"></i>',
 
 '<i class="uil uil-envelope-alt"></i>',
 
 '<i class="uil uil-envelope-block"></i>',
 
 '<i class="uil uil-envelope-bookmark"></i>',
 
 '<i class="uil uil-envelope-check"></i>',
 
 '<i class="uil uil-envelope-download"></i>',
 
 '<i class="uil uil-envelope-download-alt"></i>',
 
 '<i class="uil uil-envelope-edit"></i>',
 
 '<i class="uil uil-envelope-exclamation"></i>',
 
 '<i class="uil uil-envelope-heart"></i>',
 
 '<i class="uil uil-envelope-info"></i>',
 
 '<i class="uil uil-envelope-lock"></i>',
 
 '<i class="uil uil-envelope-minus"></i>',
 
 '<i class="uil uil-envelope-open"></i>',
 
 '<i class="uil uil-envelope-question"></i>',
 
 '<i class="uil uil-envelope-receive"></i>',
 
 '<i class="uil uil-envelope-redo"></i>',
 
 '<i class="uil uil-envelope-search"></i>',
 
 '<i class="uil uil-envelope-send"></i>',
 
 '<i class="uil uil-envelope-share"></i>',
 
 '<i class="uil uil-envelope-shield"></i>',
 
 '<i class="uil uil-envelope-star"></i>',
 
 '<i class="uil uil-envelope-times"></i>',
 
 '<i class="uil uil-envelope-upload"></i>',
 
 '<i class="uil uil-envelope-upload-alt"></i>',
 
 '<i class="uil uil-envelopes"></i>',
 
 '<i class="uil uil-equal-circle"></i>',
 
  
 '<i class="uil uil-euro"></i>',
 
 '<i class="uil uil-euro-circle"></i>',
 
 '<i class="uil uil-exchange"></i>',
 
 '<i class="uil uil-exchange-alt"></i>',
 
  
 '<i class="uil uil-exclamation-circle"></i>',
 
 '<i class="uil uil-exclamation-octagon"></i>',
 
 '<i class="uil uil-exclamation-triangle"></i>',
 
 '<i class="uil uil-exclude"></i>',
 
 '<i class="uil uil-expand-alt"></i>',
 
 '<i class="uil uil-expand-arrows"></i>',
 
 '<i class="uil uil-expand-arrows-alt"></i>',
 
 '<i class="uil uil-expand-from-corner"></i>',
 
 '<i class="uil uil-expand-left"></i>',
 
 '<i class="uil uil-expand-right"></i>',
 
 '<i class="uil uil-export"></i>',
 
 '<i class="uil uil-exposure-alt"></i>',
 
 '<i class="uil uil-exposure-increase"></i>',
 
 '<i class="uil uil-external-link-alt"></i>',
 
 '<i class="uil uil-eye"></i>',
 
 '<i class="uil uil-eye-slash"></i>',
 
 '<i class="uil uil-facebook"></i>',
 
 '<i class="uil uil-facebook-f"></i>',
 
 '<i class="uil uil-facebook-messenger"></i>',
 
 '<i class="uil uil-facebook-messenger-alt"></i>',
 
 '<i class="uil uil-fahrenheit"></i>',
 
 '<i class="uil uil-fast-mail"></i>',
 
 '<i class="uil uil-fast-mail-alt"></i>',
 
 '<i class="uil uil-favorite"></i>',
 
 '<i class="uil uil-feedback"></i>',
 
  
 '<i class="uil uil-file"></i>',
 
 '<i class="uil uil-file-alt"></i>',
 
 '<i class="uil uil-file-blank"></i>',
 
 '<i class="uil uil-file-block-alt"></i>',
 
 '<i class="uil uil-file-bookmark-alt"></i>',
 
 '<i class="uil uil-file-check"></i>',
 
 '<i class="uil uil-file-check-alt"></i>',
 
 '<i class="uil uil-file-contract"></i>',
 
 '<i class="uil uil-file-contract-dollar"></i>',
 
 '<i class="uil uil-left-indent-alt"></i>',
 
 '<i class="uil uil-left-to-right-text-direction"></i>',
 
 
 
 '<i class="uil uil-life-ring"></i>',
 
 '<i class="uil uil-lightbulb"></i>',
 
 '<i class="uil uil-lightbulb-alt"></i>',
 
 '<i class="uil uil-line"></i>',
 
 '<i class="uil uil-line-alt"></i>',
 
 '<i class="uil uil-line-spacing"></i>',
 
 '<i class="uil uil-link"></i>',
 
 '<i class="uil uil-link-add"></i>',
 
 '<i class="uil uil-link-alt"></i>',
 
 '<i class="uil uil-link-broken"></i>',
 
 '<i class="uil uil-link-h"></i>',
 
 '<i class="uil uil-linkedin"></i>',
 
 '<i class="uil uil-linkedin-alt"></i>',
 
  
  
  
 '<i class="uil uil-list-ol-alt"></i>',
 
 '<i class="uil uil-list-ui-alt"></i>',
 
 '<i class="uil uil-list-ul"></i>',
 
 '<i class="uil uil-location-arrow"></i>',
 
 '<i class="uil uil-location-arrow-alt"></i>',
 
 '<i class="uil uil-location-pin-alt"></i>',
 
 '<i class="uil uil-location-point"></i>',
 
 '<i class="uil uil-lock"></i>',
 
 '<i class="uil uil-lock-access"></i>',
 
 '<i class="uil uil-lock-alt"></i>',
 
 '<i class="uil uil-lock-open-alt"></i>',
 
 '<i class="uil uil-lock-slash"></i>',
 
  
  
 '<i class="uil uil-luggage-cart"></i>',
 
 '<i class="uil uil-mailbox"></i>',
 
 '<i class="uil uil-mailbox-alt"></i>',
 
 '<i class="uil uil-map"></i>',
 
 '<i class="uil uil-map-marker"></i>',
 
 '<i class="uil uil-map-marker-alt"></i>',
 
 '<i class="uil uil-map-marker-edit"></i>',
 
 '<i class="uil uil-map-marker-info"></i>',
 
 '<i class="uil uil-map-marker-minus"></i>',
 
 '<i class="uil uil-map-marker-plus"></i>',
 
 '<i class="uil uil-map-marker-question"></i>',
 
 '<i class="uil uil-map-marker-shield"></i>',
 
 '<i class="uil uil-map-marker-slash"></i>',
 
 '<i class="uil uil-map-pin"></i>',
 
 '<i class="uil uil-map-pin-alt"></i>',
 
 '<i class="uil uil-mars"></i>',
 
 '<i class="uil uil-master-card"></i>',
 
 '<i class="uil uil-maximize-left"></i>',
 
 '<i class="uil uil-medal"></i>',
 
 '<i class="uil uil-medical-drip"></i>',
 
 '<i class="uil uil-medical-square"></i>',
 
 '<i class="uil uil-medical-square-full"></i>',
 
 '<i class="uil uil-medium-m"></i>',
 
 '<i class="uil uil-medkit"></i>',
 
 '<i class="uil uil-meeting-board"></i>',
 
 '<i class="uil uil-megaphone"></i>',
 
 '<i class="uil uil-meh"></i>',
 
 '<i class="uil uil-meh-alt"></i>',
 
 '<i class="uil uil-meh-closed-eye"></i>',
 
 '<i class="uil uil-message"></i>',
 
 '<i class="uil uil-metro"></i>',
 
 '<i class="uil uil-microphone"></i>',
 
 '<i class="uil uil-microphone-slash"></i>',
 
 '<i class="uil uil-microscope"></i>',
 
  
 '<i class="uil uil-minus"></i>',
 
 '<i class="uil uil-minus-circle"></i>',
 
 '<i class="uil uil-minus-path"></i>',
 
 '<i class="uil uil-minus-square"></i>',
 
 '<i class="uil uil-minus-square-full"></i>',
 
 '<i class="uil uil-missed-call"></i>',
 
 '<i class="uil uil-mobile-android"></i>',
 
 '<i class="uil uil-mobile-android-alt"></i>',
 
 '<i class="uil uil-mobile-vibrate"></i>',
 
 '<i class="uil uil-modem"></i>',
 
 '<i class="uil uil-money-bill"></i>',
 
 '<i class="uil uil-money-bill-slash"></i>',
 
 '<i class="uil uil-money-bill-stack"></i>',
 
 '<i class="uil uil-money-insert"></i>',
 
 '<i class="uil uil-money-stack"></i>',
 
 '<i class="uil uil-money-withdraw"></i>',
 
 '<i class="uil uil-money-withdrawal"></i>',
 
 '<i class="uil uil-moneybag"></i>',
 
 '<i class="uil uil-moneybag-alt"></i>',
 
 '<i class="uil uil-monitor"></i>',
 
 '<i class="uil uil-monitor-heart-rate"></i>',
 
 '<i class="uil uil-moon"></i>',
 
 '<i class="uil uil-moon-eclipse"></i>',
 
 '<i class="uil uil-moonset"></i>',
 
 '<i class="uil uil-mountains"></i>',
 
 '<i class="uil uil-mountains-sun"></i>',
 
 '<i class="uil uil-mouse"></i>',
 
 '<i class="uil uil-mouse-alt"></i>',
 
 
 '<i class="uil uil-repeat"></i>',
 
 '<i class="uil uil-restaurant"></i>',
 
 '<i class="uil uil-right-indent-alt"></i>',
 
 '<i class="uil uil-right-to-left-text-direction"></i>',
 
 '<i class="uil uil-robot"></i>',
 
 '<i class="uil uil-rocket"></i>',
 
 '<i class="uil uil-rope-way"></i>',
 
  
 '<i class="uil uil-rss"></i>',
 
 '<i class="uil uil-rss-alt"></i>',
 
 '<i class="uil uil-rss-interface"></i>',
 
 '<i class="uil uil-ruler"></i>',
 
 '<i class="uil uil-ruler-combined"></i>',
 
 '<i class="uil uil-rupee-sign"></i>',
 
 '<i class="uil uil-sad"></i>',
 
 '<i class="uil uil-sad-cry"></i>',
 
 '<i class="uil uil-sad-crying"></i>',
 
 '<i class="uil uil-sad-dizzy"></i>',
 
 '<i class="uil uil-sad-squint"></i>',
 
 '<i class="uil uil-sanitizer"></i>',
 
 '<i class="uil uil-sanitizer-alt"></i>',
 
 '<i class="uil uil-save"></i>',
 
 '<i class="uil uil-scaling-left"></i>',
 
 '<i class="uil uil-scaling-right"></i>',
 
 '<i class="uil uil-scenery"></i>',
 
 '<i class="uil uil-schedule"></i>',
 
 '<i class="uil uil-screw"></i>',
 
 '<i class="uil uil-scroll"></i>',
 
 '<i class="uil uil-scroll-h"></i>',
 
 '<i class="uil uil-search"></i>',
 
 '<i class="uil uil-search-alt"></i>',
 
 '<i class="uil uil-search-minus"></i>',
 
 '<i class="uil uil-search-plus"></i>',
 
 '<i class="uil uil-selfie"></i>',
 
 '<i class="uil uil-server"></i>',
 
 '<i class="uil uil-server-alt"></i>',
 
 '<i class="uil uil-server-connection"></i>',
 
 '<i class="uil uil-server-network"></i>',
 
 '<i class="uil uil-server-network-alt"></i>',
 
 '<i class="uil uil-servers"></i>',
 
 '<i class="uil uil-servicemark"></i>',
 
 '<i class="uil uil-setting"></i>',
 
 '<i class="uil uil-share"></i>',
 
 '<i class="uil uil-share-alt"></i>',
 
 '<i class="uil uil-shield"></i>',
 
 '<i class="uil uil-shield-check"></i>',
 
 '<i class="uil uil-shield-exclamation"></i>',
 
 '<i class="uil uil-shield-plus"></i>',
 
 '<i class="uil uil-shield-question"></i>',
 
 '<i class="uil uil-shield-slash"></i>',
 
 '<i class="uil uil-ship"></i>',
 
 '<i class="uil uil-shop"></i>',
 
 '<i class="uil uil-shopping-bag"></i>',
 
 '<i class="uil uil-shopping-basket"></i>',
 
 '<i class="uil uil-shopping-cart"></i>',
 
 '<i class="uil uil-shopping-cart-alt"></i>',
 
 '<i class="uil uil-shovel"></i>',
 
 '<i class="uil uil-shrink"></i>',
 
 '<i class="uil uil-shuffle"></i>',
 
 '<i class="uil uil-shutter"></i>',
 
 '<i class="uil uil-shutter-alt"></i>',
 
 '<i class="uil uil-sick"></i>',
 
 '<i class="uil uil-sigma"></i>',
 
 '<i class="uil uil-sign-alt"></i>',
 
 '<i class="uil uil-sign-in-alt"></i>',
 
 '<i class="uil uil-sign-left"></i>',
 
 '<i class="uil uil-sign-out-alt"></i>',
 
 '<i class="uil uil-sign-right"></i>',
 
 '<i class="uil uil-signal"></i>',
 
 '<i class="uil uil-signal-alt"></i>',
 
  
 '<i class="uil uil-signin"></i>',
  
 '<i class="uil uil-silence"></i>',
 
 '<i class="uil uil-silent-squint"></i>',
 
 '<i class="uil uil-sim-card"></i>',
 
 '<i class="uil uil-sitemap"></i>',
 
 '<i class="uil uil-skip-forward"></i>',
 
 '<i class="uil uil-skip-forward-alt"></i>',
 
 '<i class="uil uil-skip-forward-circle"></i>',
 
 '<i class="uil uil-skype"></i>',
 
 '<i class="uil uil-skype-alt"></i>',
 
 '<i class="uil uil-slack"></i>',
 
 '<i class="uil uil-slack-alt"></i>',
 
  
 '<i class="uil uil-sliders-v"></i>',
 
 '<i class="uil uil-sliders-v-alt"></i>',
 
 '<i class="uil uil-smile"></i>',
 
 '<i class="uil uil-smile-beam"></i>',
 
 '<i class="uil uil-smile-dizzy"></i>',
 
 '<i class="uil uil-smile-squint-wink"></i>',
 
 '<i class="uil uil-smile-squint-wink-alt"></i>',
 
 '<i class="uil uil-smile-wink"></i>',
 
 '<i class="uil uil-smile-wink-alt"></i>',
 
 '<i class="uil uil-snapchat-alt"></i>',
 
 '<i class="uil uil-snapchat-ghost"></i>',
 
 '<i class="uil uil-snapchat-square"></i>',
 
 '<i class="uil uil-snow-flake"></i>',
 
 '<i class="uil uil-snowflake"></i>',
 '<i class="uil uil-snowflake-alt"></i>',
 
 '<i class="uil uil-social-distancing"></i>',
 
 '<i class="uil uil-sort"></i>',
 
 '<i class="uil uil-sort-amount-down"></i>',
 
 '<i class="uil uil-sort-amount-up"></i>',
 
 '<i class="uil uil-sorting"></i>',
 
 '<i class="uil uil-space-key"></i>',
 
 '<i class="uil uil-spade"></i>',
 
 '<i class="uil uil-sperms"></i>',
 
 '<i class="uil uil-spin"></i>',
 
  
  
 '<i class="uil uil-square"></i>',
 
 '<i class="uil uil-square-full"></i>',
 
 '<i class="uil uil-square-shape"></i>',
 
 '<i class="uil uil-squint"></i>',
 
 '<i class="uil uil-star"></i>',
 
 '<i class="uil uil-star-half-alt"></i>',
 
 '<i class="uil uil-step-backward"></i>',
 
 '<i class="uil uil-step-backward-alt"></i>',
 
 '<i class="uil uil-step-backward-circle"></i>',
 
 '<i class="uil uil-step-forward"></i>',
 
 '<i class="uil uil-stethoscope"></i>',
 
 '<i class="uil uil-stethoscope-alt"></i>',
 
 '<i class="uil uil-stop-circle"></i>',
 
 '<i class="uil uil-stopwatch"></i>',
 
 '<i class="uil uil-stopwatch-slash"></i>',
 
 '<i class="uil uil-store"></i>',
 
 '<i class="uil uil-store-alt"></i>',
 
 '<i class="uil uil-store-slash"></i>',
 
 '<i class="uil uil-streering"></i>',
 
 '<i class="uil uil-stretcher"></i>',
 
 '<i class="uil uil-subject"></i>',
 
 '<i class="uil uil-subway"></i>',
 
 '<i class="uil uil-subway-alt"></i>',
 
 '<i class="uil uil-suitcase"></i>',
 
 '<i class="uil uil-suitcase-alt"></i>',
 
 '<i class="uil uil-sun"></i>',
 
 '<i class="uil uil-sunset"></i>',
 
 '<i class="uil uil-surprise"></i>',
 
 '<i class="uil uil-swatchbook"></i>',
 
 '<i class="uil uil-swiggy"></i>',
 
 '<i class="uil uil-swimmer"></i>',
 
 '<i class="uil uil-sync"></i>',
 
 '<i class="uil uil-sync-exclamation"></i>',
 
 '<i class="uil uil-sync-slash"></i>',
 
 '<i class="uil uil-syringe"></i>',
 
 '<i class="uil uil-table"></i>',
 
 '<i class="uil uil-table-tennis"></i>',
 
 '<i class="uil uil-tablet"></i>',
 
 '<i class="uil uil-tablets"></i>',
 
 '<i class="uil uil-tachometer-fast"></i>',
 
 '<i class="uil uil-tachometer-fast-alt"></i>',
 
 '<i class="uil uil-tag"></i>',
 
 '<i class="uil uil-tag-alt"></i>',
 
 '<i class="uil uil-tape"></i>',
 
 '<i class="uil uil-taxi"></i>',
 
 '<i class="uil uil-tear"></i>',
 
 '<i class="uil uil-telegram"></i>',
 
 '<i class="uil uil-telegram-alt"></i>',
 
 '<i class="uil uil-telescope"></i>',
 
 '<i class="uil uil-temperature"></i>',
 
 '<i class="uil uil-temperature-empty"></i>',
 
 '<i class="uil uil-temperature-half"></i>',
 
 '<i class="uil uil-temperature-minus"></i>',
 
 '<i class="uil uil-temperature-plus"></i>',
 
 '<i class="uil uil-temperature-quarter"></i>',
 
 '<i class="uil uil-temperature-three-quarter"></i>',
 
 '<i class="uil uil-tennis-ball"></i>',
 
 '<i class="uil uil-text"></i>',
 
 '<i class="uil uil-text-fields"></i>',
 
 '<i class="uil uil-text-size"></i>',
 
 '<i class="uil uil-text-strike-through"></i>',
 
 '<i class="uil uil-th"></i>',
 
 '<i class="uil uil-th-large"></i>',
 
 '<i class="uil uil-th-slash"></i>',
 
 '<i class="uil uil-thermometer"></i>',
 
 '<i class="uil uil-thumbs-down"></i>',
 
 '<i class="uil uil-thumbs-up"></i>',
 
 '<i class="uil uil-thunderstorm"></i>',
 
 '<i class="uil uil-thunderstorm-moon"></i>',
 
 '<i class="uil uil-thunderstorm-sun"></i>',
 
 '<i class="uil uil-ticket"></i>',
 
 '<i class="uil uil-times"></i>',
 
 '<i class="uil uil-times-circle"></i>',
 
 '<i class="uil uil-times-square"></i>',
 
 '<i class="uil uil-toggle-off"></i>',
 
 '<i class="uil uil-toggle-on"></i>',
 
 '<i class="uil uil-toilet-paper"></i>',
 
 '<i class="uil uil-top-arrow-from-top"></i>',
 
 '<i class="uil uil-top-arrow-to-top"></i>',
 
 '<i class="uil uil-tornado"></i>',
 
 '<i class="uil uil-trademark"></i>',
 
 '<i class="uil uil-trademark-circle"></i>',
 
 '<i class="uil uil-traffic-barrier"></i>',
 
 '<i class="uil uil-traffic-light"></i>',
 
 '<i class="uil uil-transaction"></i>',
 
 '<i class="uil uil-trash"></i>',
 
 '<i class="uil uil-trash-alt"></i>',
 
 '<i class="uil uil-trees"></i>',
 
 '<i class="uil uil-triangle"></i>',
 
 '<i class="uil uil-trophy"></i>',
 
 '<i class="uil uil-trowel"></i>',
 
 '<i class="uil uil-truck"></i>',
 
 '<i class="uil uil-truck-loading"></i>',
 
 '<i class="uil uil-tumblr"></i>',
 
 '<i class="uil uil-tumblr-alt"></i>',
 
 '<i class="uil uil-tumblr-square"></i>',
 
 '<i class="uil uil-tv-retro"></i>',
 
 '<i class="uil uil-tv-retro-slash"></i>',
 
 '<i class="uil uil-twitter"></i>',
 
 '<i class="uil uil-twitter-alt"></i>',
 
 '<i class="uil uil-umbrella"></i>',
 
 '<i class="uil uil-unamused"></i>',
 
 '<i class="uil uil-underline"></i>',
 
 '<i class="uil uil-university"></i>',
 
 '<i class="uil uil-unlock"></i>',
 
 '<i class="uil uil-unlock-alt"></i>',
 
 '<i class="uil uil-upload"></i>',
 
 '<i class="uil uil-upload-alt"></i>',
 
 '<i class="uil uil-usd-circle"></i>',
 
 '<i class="uil uil-usd-square"></i>',
 
 '<i class="uil uil-user"></i>',
 
 '<i class="uil uil-user-arrows"></i>',
 
 '<i class="uil uil-user-check"></i>',
 
 '<i class="uil uil-user-circle"></i>',
 
 '<i class="uil uil-user-exclamation"></i>',
 
 '<i class="uil uil-user-location"></i>',
 
 '<i class="uil uil-user-md"></i>',
 
 '<i class="uil uil-user-minus"></i>',
 
 '<i class="uil uil-user-nurse"></i>',
 
 '<i class="uil uil-user-plus"></i>',
 
 '<i class="uil uil-user-square"></i>',
 
 '<i class="uil uil-user-times"></i>',
 
 '<i class="uil uil-users-alt"></i>',
 
 '<i class="uil uil-utensils"></i>',
 
 '<i class="uil uil-utensils-alt"></i>',
 
 '<i class="uil uil-vector-square"></i>',
 
 '<i class="uil uil-vector-square-alt"></i>',
 
 '<i class="uil uil-venus"></i>',
 
 '<i class="uil uil-vertical-align-bottom"></i>',
 
 '<i class="uil uil-vertical-align-center"></i>',
 
 '<i class="uil uil-vertical-align-top"></i>',
 
 '<i class="uil uil-vertical-distribute-bottom"></i>',
 
 '<i class="uil uil-vertical-distribution-center"></i>',
 
 '<i class="uil uil-vertical-distribution-top"></i>',
 
 '<i class="uil uil-video"></i>',
 
  
 '<i class="uil uil-video-slash"></i>',
 
 '<i class="uil uil-virus-slash"></i>',
 
 '<i class="uil uil-visual-studio"></i>',
 
 '<i class="uil uil-vk"></i>',
 
 '<i class="uil uil-vk-alt"></i>',
 
 '<i class="uil uil-voicemail"></i>',
 
 '<i class="uil uil-voicemail-rectangle"></i>',
 
 '<i class="uil uil-volleyball"></i>',
 
 '<i class="uil uil-volume"></i>',
 
 '<i class="uil uil-volume-down"></i>',
 
 '<i class="uil uil-volume-mute"></i>',
 
 '<i class="uil uil-volume-off"></i>',
 
 '<i class="uil uil-volume-up"></i>',
 
 '<i class="uil uil-vuejs"></i>',
 
 '<i class="uil uil-vuejs-alt"></i>',
 
 '<i class="uil uil-wall"></i>',
 
 '<i class="uil uil-wallet"></i>',
 
 '<i class="uil uil-watch"></i>',
 
 '<i class="uil uil-watch-alt"></i>',
 
 '<i class="uil uil-water"></i>',
 
 '<i class="uil uil-water-drop-slash"></i>',
 
 '<i class="uil uil-water-glass"></i>',
 
 '<i class="uil uil-web-grid"></i>',
 
 '<i class="uil uil-web-grid-alt"></i>',
 
 '<i class="uil uil-web-section"></i>',
 
 '<i class="uil uil-web-section-alt"></i>',
 
 '<i class="uil uil-webcam"></i>',
 
 '<i class="uil uil-weight"></i>',
 
 '<i class="uil uil-whatsapp"></i>',
 
 '<i class="uil uil-whatsapp-alt"></i>',
 
 '<i class="uil uil-wheel-barrow"></i>',
 
 '<i class="uil uil-wheelchair"></i>',
 
 '<i class="uil uil-wheelchair-alt"></i>',
 
 '<i class="uil uil-wifi"></i>',
 
 '<i class="uil uil-wifi-router"></i>',
 
 '<i class="uil uil-wifi-slash"></i>',
 
 '<i class="uil uil-wind"></i>',
 
 '<i class="uil uil-wind-moon"></i>',
 
 '<i class="uil uil-wind-sun"></i>',
 
 '<i class="uil uil-window"></i>',
 
 '<i class="uil uil-window-grid"></i>',
 
 '<i class="uil uil-window-maximize"></i>',
 
 '<i class="uil uil-window-section"></i>',
 
 
 '<i class="uil uil-windsock"></i>',
 
 '<i class="uil uil-windy"></i>',
 
  
  
 '<i class="uil uil-wrap-text"></i>',
 
 '<i class="uil uil-wrench"></i>',
 
 '<i class="uil uil-x"></i>',
 
 '<i class="uil uil-x-add"></i>',
 '<i class="uil uil-yen"></i>',
 
 '<i class="uil uil-yen-circle"></i>',
 
 '<i class="uil uil-yin-yang"></i>',
 
 '<i class="uil uil-youtube"></i>',
];

uniArray.forEach(x=>{

const newX = x.slice(10,x.length-6);

document.querySelector('#unicons').insertAdjacentHTML('afterbegin',`<div style="display:flex;align-items:center;justify-content:space-between;border:solid 1px #ddd;padding:10px;"><input type="checkbox" name="linkicon" value="${newX}"><i class="${newX}"></i></div>`);

})




  </script>







<?php


if(isset($_POST['addnew'])){



 
 if ($folder_exists) {

    $datee = file_get_contents($filename);
    $data = json_decode($datee,true);
    $data[$_POST['linkname']]->name = $_POST['linkname'];
    $data[$_POST['linkname']]->url = $_POST['linkurl'];
    $data[$_POST['linkname']]->icon = $_POST['linkicon'];
    $data[$_POST['linkname']]->linkblank = $_POST['linkblank'];
    $datee =json_encode($data);

  file_put_contents($filename, $datee);
  echo("<meta http-equiv='refresh' content='0'>");
}


}



 ;?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" style="display:grid; width:100%;grid-template-columns:1fr auto; padding:10px;background:#fafafa;border:solid 1px #ddd;margin-top:20px;">
				<p style="margin:0;padding:0;"> <?php echo i18n_r("massiveAdmin/SUPPORT");?></p>
				<input type="hidden" name="cmd" value="_s-xclick" />
				<input type="hidden" name="hosted_button_id" value="KFZ9MCBUKB7GL" />
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
				<img alt="" border="0" src="https://www.paypal.com/en_PL/i/scr/pixel.gif" width="1" height="1" />
			</form>
