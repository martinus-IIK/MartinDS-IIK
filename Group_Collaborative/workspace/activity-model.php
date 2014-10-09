<?
class activityModel {
	public function activityKeyClassifier($key,$array_key){
		$classify='normal_value';
		for( $i = 0, $x = count($array_key); $i < $x ; $i ++ ){
			switch ($key) {
				case 'act_dateTime':
					$classify = 'datetime';
					break;
				default:
					$classify = 'normal_value';
			}				
		}
		return $classify;
	}
	
}




?>