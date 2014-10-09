<?
class contentModel extends generalModel{
	function userVerification($user_id){
		//WIP
		
	}
	function changePage($activePage){
		global $dbserver, $dbuser, $dbpassword, $dbschema;
		global $userRolesLevel;
		
		$sql = 'SELECT menu_url from tb_m_menu A JOIN tb_m_groupmenu B ON A.m_groupMenu_id=B.groupmenu_id WHERE B.gro_name='."'$activePage'";
		
		$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
			 
		if(!$sqlResultPage = $db->query( $sql )){
			die('There was an error running the query [' . $db->error . ']');
		}
		
		$num_rows=$sqlResultPage->num_rows;
		
		if ($num_rows == 0){
			die('Error! Couldn\'t Enumerate Menu URL !');
		}
		elseif ($num_rows > 1){
			die('Error! Couldn\'t Enumerate Menu URL !');
		}
		$db->close();
		
		$page = $sqlResultPage->fetch_row();
		
		$sqlResultPage->free();
		
		return $page[0];
	}
}

?>