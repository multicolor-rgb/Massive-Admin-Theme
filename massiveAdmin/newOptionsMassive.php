
<style>

#imageTable tr td{
	display: flex;
	flex-direction:column;
align-items: center;
justify-content: center;
}

#imageTable .delconfirm {
    background: none;
    color: #111 !important;
    border: solid 1px #111;
    width: 100%;
    margin: 5px;
}


#imageTable .rename-massive-btn ,#imageTable .copy-massive-btn, #imageTable .download-massive-btn {
all:unset;
    background: none;
    color: #111 !important;
    border: solid 1px #111;
    width: 100%;
    margin: 5px;
	border-radius:5px;
	padding:3px;
	transition:all 250ms linear;
	cursor:pointer;
	font-size:19px !important;
}

#imageTable .rename-massive-btn:hover,#imageTable .copy-massive-btn:hover, #imageTable .download-massive-btn:hover{
	background:#000 !important;
	color:#fff !important;

}

 

.rename-fog{
	position:fixed;
	top:0;
	left:0;
	z-index:99;
	width:100%;
	height:100%;
	display:flex;
	align-items:center;
	justify-content:center;
	background:rgba(0,0,0,0.3);
}

.form-rename{
	width:300px;
	height:auto;
	display:flex;
	flex-direction:column;
	align-items:center;
	justify-content:center;
	background:#fff;
	padding:15px;
	padding-top:40px;	
	position:relative;

}

.form-rename input{
	width:100%;
	padding:15px;
	margin:10px;
}
.form-rename .submit{
width:250px;
}

.form-rename input{
	width:100%;
	padding:15px;
	margin:10px;
}

.hide-fog{
	display:none;
}

.close-rename-fog{

	background:#00162a;
	color:#fff;
width:250px;
padding:10px;
border-radius:5px;
background:#D94136;
border:none;
transition:all 250ms linear;
}

.close-rename-fog:hover{
background:#AA190F;
}

.massive-error{
	background:red;
	color:#fff;
	padding:10px;
	margin:10px 0;
	border-radius:5px;
	display:block;
}

.massive-done{
	background:green;
	color:#fff;
	padding:10px;
	margin:10px 0;
	border-radius:5px;
	display:block;
}





.All.folder  tr td{
	display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
	margin: 0;
padding: 0;
text-align: center !important;
width: 100% !important;
flex: 40px 1 0;
border: none;

}

.massive-folder-linker{
background:#00162a;
width:100%;
height:110px;
display:flex;
align-items:center;
justify-content:center;
transition:all 250ms linear;

}

.massive-folder-linker i{
color:#fff;
}


.All .delete{
	display:flex !important;
	flex-direction:row !important;	
}


.All.folder a:nth-child(2){
	margin-top: 26px;
margin-bottom: 10px;
}


#imageTable .delconfirm {
    background: none;
    color: #111 !important;
    border: solid 1px #111;
    width: 100%;
    margin: 5px;
    padding: 3px;
    display: block;
    padding: 3;
    padding: 3px;
    padding: 5px !important;
}


.All.folder:hover .massive-folder-linker{
background:#000409;
}


</style>




<div class="rename-fog hide-fog">
	<div class="form-rename">
<form  class="form-form-rename" action="#" method="post">

	<input type="text" name="rename-massive-hide" style="display:none">

	<input type="text" name="rename-massive">
	<input type="submit" name="save-rename-massive" class="submit" value="<?php echo i18n_r("massiveAdmin/RENAMEFILE") ;?>">
	<input type="submit" name="copy-rename-massive" class="submit" value="<?php echo i18n_r("massiveAdmin/COPYFILE") ;?>">
	<button class="close-rename-fog"><i class="uil uil-times"></i></button>

</form>
</div>
</div>



<script>


if(window.location.indexOf('?type=carousel')<-1){

	window.onload = function(){
	const imageTableTd = document.querySelectorAll('#imageTable .All');



	imageTableTd.forEach(e=>{
		if(e.querySelector('.imgthumb img')!==null){
			const name =  e.querySelector('#imageTable .All .imgthumb img').getAttribute('src');
			console.log(name);



if(e.querySelector('.delete .delconfirm')!==null){

const deleteBtn = e.querySelector('.delete .delconfirm');
const renameBtn = document.createElement('button');
renameBtn.classList.add('rename-massive-btn');
renameBtn.innerHTML = "  <i class='uil uil-folder'></i>";
deleteBtn.insertAdjacentElement('afterend',renameBtn);

const copyBtn = document.createElement('button');
copyBtn.classList.add('copy-massive-btn');
copyBtn.innerHTML = "  <i class='uil uil-copy-alt'></i>";
deleteBtn.insertAdjacentElement('afterend',copyBtn);

const downloadBtn = document.createElement('a');
downloadBtn.classList.add('download-massive-btn');
downloadBtn.setAttribute('href',name);
downloadBtn.setAttribute('download',name);
downloadBtn.innerHTML = " <i class='uil uil-download-alt'></i>";
deleteBtn.insertAdjacentElement('afterend',downloadBtn);


renameBtn.addEventListener('click',()=>{
document.querySelector('.rename-fog').classList.remove('hide-fog');
document.querySelector('input[name="rename-massive-hide"]').value = name.substr('16');
document.querySelector('input[name="rename-massive"]').value = name.substr('16');
document.querySelector('input[name="save-rename-massive"]').style.display="block";
document.querySelector('input[name="copy-rename-massive"]').style.display="none";
});

copyBtn.addEventListener('click',()=>{
document.querySelector('.rename-fog').classList.remove('hide-fog');
document.querySelector('input[name="rename-massive-hide"]').value = name.substr('16');
document.querySelector('input[name="rename-massive"]').value = name.substr('16');
document.querySelector('input[name="save-rename-massive"]').style.display="none";
document.querySelector('input[name="copy-rename-massive"]').style.display="block";
});



};
}});



const closeRename = document.querySelector('.close-rename-fog');

closeRename.addEventListener('click',(e)=>{
e.preventDefault();
	document.querySelector('.rename-fog').classList.add('hide-fog');


});


	};




if(document.querySelector('.All.folder')!==null){

	document.querySelectorAll('.All.folder').forEach(e=>{

const linker = e.querySelector('a').getAttribute('href');
e.querySelector('img').insertAdjacentHTML('beforebegin','<a href="'+linker+'" class="massive-folder-linker"><i class="uil uil-folder-open"></i></a>');

e.querySelector('img').remove();
e.querySelector('.imgthumb').remove();



});};




};

</script>


<?php 



if(isset($_POST['save-rename-massive'])){

	$oldDirMassive = '../data/uploads/'.$_POST['rename-massive-hide'];
	$newDirMassive = '../data/uploads/'.$_POST['rename-massive'];
	
	$afterNewDir = preg_replace('/\s+/', '-', $newDirMassive);

	
	
	rename($oldDirMassive,$afterNewDir);
	echo'<div class="massive-done">'.i18n_r("massiveAdmin/FILENOW").$afterNewDir.'</div>';

	echo("<meta http-equiv='refresh' content='1'>");
}



if(isset($_POST['copy-rename-massive'])){
	$fileIsHere = i18n_r("massiveAdmin/INFOERROR");

	$oldDirMassive = '../data/uploads/'.$_POST['rename-massive-hide'];
	$newDirMassive = '../data/uploads/'.$_POST['rename-massive'];
	
	$afterNewDir = preg_replace('/\s+/', '-', $newDirMassive);

	if(file_exists($afterNewDir)== 'true'){
		echo'<div class="massive-error">'.$fileIsHere.'</div>';
	}else{
		copy($oldDirMassive,$afterNewDir);
		echo("<meta http-equiv='refresh' content='1'>");
		echo'<div class="massive-done">'.i18n_r("massiveAdmin/INFOCOPY").$afterNewDir.'</div>';
	}
	
};




?>