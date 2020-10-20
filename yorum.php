<?php include("panel/system/ayar.php"); ?>
<?php include("panel/system/fonksiyon.php"); ?>
<?php
	$isim 		= p('isim');
	$mesaj 		= p('mesaj');
	$derece 	= p('derece');
	$durum 		= "0";
	$urunid		= p('urunid');
	$ip			= ip();
	$t			= date("Y-m-d H:i:s");
	$tarih		= tarih($t);
	
	if(empty($isim) || empty($mesaj) || empty($derece)){
		echo  'Boş alan bıraktınız..Lütfen gerekli alanları doldurunuz.';
		}else{
		$yorumyap = Sorgu("INSERT INTO yorumlar SET
							adi		=	'$isim',
							urun_id	=	'$urunid',
							mesaj	=	'$mesaj',
							derece	=	'$derece',
							durum	=	'$durum',
							ip		=	'$ip',
							tarih	=	'$tarih'");	
		if($yorumyap){
			echo "Yorumunuz Başarıyla Alınmıştır.Yönetici onayladıktan sonra yayınlanacaktır..";
			}else{
			echo  'Hata oluştu.Tekrar deneyiniz.';	
			}
		}
	?>