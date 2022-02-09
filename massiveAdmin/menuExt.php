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


echo '<li><a href="'.$query["url"].'">'.$query["icon"].' '.$query["name"].'</a> <form action="#" method="POST"><button name="'.$newnamenew.'" style="background:red;border:none;color:#fff;font-size:1.2rem"><i class="uil uil-trash"></i></button></form></li>';

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
<input type="text" name="linkname">
</div>

<div>
<label for=""><?php echo i18n_r('massiveAdmin/LINKURL');?></label>
<input type="text" name="linkurl">
</div>

<div>
<label for=""><?php echo i18n_r('massiveAdmin/NEWWINDOW');?></label>
<select name="linkblank">
  <option value="_blank"><?php echo i18n_r('massiveAdmin/YES');?></option>
  <option value="_self"><?php echo i18n_r('massiveAdmin/NO');?></option>
</select>

</div>

<div>
<label for=""><?php echo i18n_r('massiveAdmin/LINKICON');?> <a href="https://iconscout.com/unicons/explore/line" target="_blank"><?php echo i18n_r('massiveAdmin/MOREICONS');?></a></label>
<input type="text" placeholder='example <i class="uil uil-apple"></i>' name="linkicon">
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