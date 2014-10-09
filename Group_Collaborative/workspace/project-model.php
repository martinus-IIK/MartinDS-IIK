<?
class projectModel {
	public function projectKeyClassifier($key,$array_key){
		$classify='normal_value';
		for( $i = 0, $x = count($array_key); $i < $x ; $i ++ ){
			switch ($key) {
				case 'pro_startDate':
					$classify = 'datetime';
					break;
				case 'pro_endDate':
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