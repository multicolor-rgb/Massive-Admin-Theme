<?php 

$filename = GSDATAOTHERPATH.'/massiveadmin/massiveOption.json';
$datee = @file_get_contents($filename);
$data = json_decode($datee);


 

 		if( $data->maintence == 'yes'){

			echo'<script>console.log("yes")</script>';
			
			echo'
				<style>
					.maintenceOn{
						position:fixed;
						top:0;
						left:0;
						width:100%;
						height:100vh;
						display:flex;
						align-items:center;
						justify-content:center;
						background:#fff;
						z-index:997;
					}
					.maintenceOn span{
						font-size:2rem;
						color:#111;
						text-align:center;
					}
				</style>
			';
			echo'<div class="maintenceOn"><span>'.$data->maintencecontent.'</span></div>';
		}else{
			};

    ?>