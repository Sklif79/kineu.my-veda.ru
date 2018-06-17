<?
if($_POST['dest']){
	session_start();
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 	
	// удаление товара
	if($_POST['dest']=='del'){
		$id=$_POST['id'];
		$_SESSION['LUAKOL']-=$_SESSION['LU'][$id]['KOLCH'];
		unset($_SESSION['LU'][$id]);?>
	<input type="hidden" id='LUIAKOL' kolch="<?=$_SESSION['LUAKOL']?>" >
	<?}
	//редактирование товара
	if($_POST['dest']=='red'){
		$id=$_POST['id'];
		$tekol=$_SESSION['LU'][$id]['KOLCH'];
		$pkt=$_POST['kol'];
		if($pkt!=$tekol){
			if($tekol>$pkt){
				$razn=$tekol-$pkt;
				$_SESSION['LUAKOL']-=$razn;
			}else{
				$razn=$pkt-$tekol;
				$_SESSION['LUAKOL']+=$razn;
			}
		}
		$_SESSION['LU'][$id]['KOLCH']=$pkt;
	}
}
?>