global $sql, $link_class, $page;
$sql -> db_Select('links', '*', "link_category = 1 and link_name NOT REGEXP('submenu') and link_name NOT REGEXP('child') and link_class IN (".USERCLASS_LIST.") ORDER BY link_order ASC");
$navigation = "<!-- ul shortcode by William Moffett for more information visit e107.net -->
		<ul id='navigation'>";

$r="0";
while($row = $sql -> db_Fetch()){
	if(!$link_class || check_class($link_class) || ($link_class==254 && USER)){
		extract($row);
		if(!preg_match("#(http:|mailto:|ftp:)#",$link_url)){ $link_url = e_BASE.$link_url; }
		if(strpos($link_url, "e107_plugins") !== FALSE){ $link_url = e_BASE.$link_url; }
		if(strpos($link_url, e_PAGE) !== FALSE){ $ulclass = 'onpage'; define("LINKPARENT" , $link_id); } else { $ulclass = 'offpage'; }
		if(eregi('forum.php', $link_url)){
			if(eregi('forum_viewforum', e_PAGE) || eregi('forum_viewtopic', e_PAGE)){
 				$ulclass = 'onpage'; 
				define("LINKPARENT" , $link_id);
		  	}
		}
		switch ($link_open) { 
			case 1:
				$link_append = " onclick=\"window.open('$link_url'); return false;\"";
				break; 
			case 2:
			   $link_append = " target=\"_parent\"";
				break;
			case 3:
			   $link_append = " target=\"_top\"";
				break;
			default:
			   unset($link_append);
		}
		$navigation .= "<li><a class='$ulclass' ".($link_description ? " title = '$link_description' " : "title = 'add a text description to this link' ")." href='".$link_url."' accesskey='".$r."' ".$link_append.">".LINKSTART."$link_name".LINKEND."</a></li>";
	$r++;
	}
}
$navigation .= "</ul>\n";
return $navigation;
  	

	
