<?php
/**
 * formatuje retezec pro log progres baru, aby byl vzdy stejny a umel ho pak zpracovat JS
 *
 * @staticvar array $count
 * @param string $identificator oznaceni souboru pro ktery se retezec pripravuje (napr. nazev souboru)
 * @param string $text popisek o jaky progres se jedna
 * @param integer $count_all celkovy pocet kroku
 * @param integer $count_this cislo tohoto kroku
 * @return string
 *
 * @since 14.12.11 11:01
 * @author Vlahovic
 * @version 1.1
 *
 * @changed 1.1, Vlahovic, 15.12.11 10:28: predelano z puvodni funkcnosti, ktera odchytavala a formatovala buffer na funkci, ktera formatuje dodane parametry
 */
function log_progress($identificator,$text,$count_all,$count_this){
	$return=false;
	$text=trim($text);
	$count_all=intval($count_all);
	$count_this=intval($count_this);
	// chci jen neprazdne vystupy
	if($text && $count_all && $count_this){
		static $count=array();
		$json=array(
				'text'=>$text,
				'count_this'=>$count_this,
				'count_all'=>$count_all,
		);
		// pred kazdy, krom prvniho da odradkovani
		$return=(isset($count[$identificator]) ? "\r\n" : false).json_encode($json);
		$count[$identificator]=(isset($count[$identificator]) ? $count[$identificator]+1 : 1);
	}
	return $return;
}


/**
 *
 * @return type
 * @todo Vlahovic, 27.1.12 21:46: dat jako atribut hlavniho objektu - urcite se bude hodit i v php, js, ...
 */
function site_identificator(){
	return md5(mt_rand(0, 1000000000));
}
?>
