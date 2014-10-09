<?
class sqlModel{
	public function getKeyDataArray($fetched_sqlResultArray,$bool_keyRequest,$bool_valueRequest){
		for( $i = 0 , $x = count( $fetched_sqlResultArray ) - 1 ; $i < $x; $i++ ) {				//Iterate for Array of 1st Result Loop
			for( $y = 0 , $z = count($fetched_sqlResultArray [ $i ] ); $y < $z ; $y++ ){		//Iterate for Array in Key from 2nd Loop
				$KEY_fetched_sqlResultArray[$i][$y] = key($fetched_sqlResultArray[$i]);
				next($fetched_sqlResultArray[$i]);
			}
		}
		if($bool_keyRequest == TRUE){
			return $KEY_fetched_sqlResultArray;			//Fetch Key ( Column name )
		}
		else {
			return $fetched_sqlResultArray;				//Fetch Value with corresponding KEY
		}
	}
	
	public function hiddenKeyValidation($key,$array_hiddenKey){		//Find Column that need to be showed or hidden
		$validate=1;
		for( $i = 0, $x = count($array_hiddenKey); $i < $x ; $i ++ ){
			if($array_hiddenKey[$i] == $key){
				$validate = 0;	
			}
		}
		if($validate == 0) return 'hidden';		//Hide
		if($validate == 1) return 'text';		//Show
	}
	
	public function getValueDataArray($fetched_sqlResultArray,$requestedKeyValue){
		for( $i = 0 , $x = count( $fetched_sqlResultArray ) - 1 ; $i < $x; $i++ ) {	
			$arrDatetime[] = $fetched_sqlResultArray[$i][$requestedKeyValue];
		}
		return $arrDatetime;
	}
	
	public static function convertDateTime_UNIXtoVIEW($datetimeRange,$date_OR_all){	//$requested ( could be date, or time -> if none = RETURN ALL
		if(is_array($datetimeRange)==1){
			for($i=0,$x=count($datetimeRange);$i<$x;$i++){
				$newdateTime[] = ($date_OR_all=='date')? date('d/m/Y',strtotime($datetimeRange[$i])) :  date('d/m/Y H:i:s',strtotime($datetimeRange[$i]));
			}
			return $newdateTime;
		}
		else {
			$newdateTime=($date_OR_all=='date')? date('d/m/Y',strtotime($datetimeRange[$i])) :  date('d/m/Y H:i:s',strtotime($datetimeRange[$i]));
			return $newdateTime;
		}
	}

	public static function convertDateTime_ANYtoANY($datetimeRange,$currentDateTimeFormat,$expectedDateTimeFormat){	//$datetimeRange -> DateTime Array or single entity 
		if(is_array($datetimeRange)==1){
			for($i=0,$x=count($datetimeRange);$i<$x;$i++){
				$oldDate=DateTime::createFromFormat($currentDateTimeFormat,$datetimeRange[$i]);
				$newDate[]=$oldDate->format($expectedDateTimeFormat);
			}
			return $newDate;
		}
		else {
			$oldDate=DateTime::createFromFormat($currentDateTimeFormat,$datetimeRange);
			//var_dump($datetimeRange);
			$newDate = $oldDate->format($expectedDateTimeFormat);
			return $newDate;
		}
	}
	
	public static function validateDate($date, $format = 'Y-m-d H:i:s'){
		$d = DateTime::createFromFormat($format, $date);
		return $d && $d->format($format) == $date;
	}
	
}



?>