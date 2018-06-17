<?
if($_POST['LUI']){
	session_start();
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 	
	$all_kol=0;
	$kolt=explode('#',$_POST['LUI']);
	$zapiss=count($kolt);
	$zapiss--;
	$all_kol=$_SESSION['LUAKOL'];//общее количиcтво товаров
	for ($i=0; $i < $zapiss; $i++) { 
		$dan_str=explode('~',$kolt[$i]);
		$kolch=$dan_str[0];
		$id=$dan_str[1];
		$all_kol+=$kolch;
		if($_SESSION['LU'][$id]){
			$_SESSION['LU'][$id]['KOLCH']+=$kolch;
			?>
			<input type="hidden" id='otvtsr_<?=$id?>' kolch="<?=$_SESSION['LU'][$id]['KOLCH']?>" idtvr='<?=$id?>'>
			<?
		}else{
				$url=$dan_str[2];
				$src=$dan_str[3];
				$name=$dan_str[4];
				$namb=$dan_str[5];

				$_SESSION['LU'][$id] = array('ID' => $id ,'URL' => $url ,'SRC' => $src ,'NAME' => $name ,'NAMB' => $namb ,'KOLCH' => $kolch);
		
		?>
			<input type="hidden" id='otvtsr_<?=$id?>' kolch="<?=$_SESSION['LU'][$id]['KOLCH']?>" idtvr='<?=$id?>'>
			<?
		}
	}  
	$_SESSION['LUAKOL']=$all_kol;
	?>
	<input type="hidden" id='LUIAKOL' kolch="<?=$_SESSION['LUAKOL']?>" >
	<? 
}
?>