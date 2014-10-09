<?php
class navModel{
	public function getNavList(){
		global $dbserver, $dbuser, $dbpassword, $dbschema;
		global $userRolesLevel;
		$sql='
		SELECT 
			menu_id,
			m_groupMenu_id,
			menu_heading,
			menu_parameter,
			menu_description,
			gro_name,
			gro_description
		from
			tb_m_menu as A
				JOIN
			tb_m_groupmenu as B ON A.m_groupMenu_id = B.groupmenu_id
		WHERE
			A.m_dbroles_id <='."'$userRolesLevel'".' 
				AND B.m_menu_id = A.menu_id
		ORDER BY B.groupmenu_id ASC';
		

		$db = new MySQLi($dbserver, $dbuser,$dbpassword,$dbschema); if($db->connect_errno > 0 ){ die('Unable to connect to database ['.$db->connect_errno.']'); }
		
		if(!$sqlResultMenu = $db->query( $sql )){
			die('There was an error running the query [' . $db->error . ']');
		}
		
		$num_rows=$sqlResultMenu->num_rows;
		
		if ($num_rows == 0){
			die('Error! Couldn\'t Enumerate Menu List. MENU WILL NOT SHOW !');
			exit;
		}
		
		$db->close();
		for ($arrMenu = array (); $row = $sqlResultMenu->fetch_assoc(); $arrMenu[] = $row);	
		$sqlResultMenu->free();
		return $arrMenu;
	}
	
	public function getNavActive($currentPage,$currentLink){
		if($currentPage === $currentLink ){
			echo 'style="background:rgba(255,153,51,1.00);color:red;"';
		}
	}
	
	public function getNavDescription ($currentPage, $currentLink){
		
	}
}

?>