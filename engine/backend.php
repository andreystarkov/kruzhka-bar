<?
/* kruzhka-bar backend functions
   im@andreystarkov.ru */

include "sql-config.php";

function send_404()
{
    header('HTTP/1.x 404 Not Found');
    exit;
} 

function get_menu($owner){

	if ($owner != "all") { $query = "select * from k_menu where owner = '$owner' order by priority";
	
	} else { $query = "select * from k_menu order by priority"; } 

	$records = mysql_query($query) or die(mysql_error());

	while($row = mysql_fetch_array($records)){

		if(!empty($row['logo'])){ $img = "<div class='menu-logo' style='background:url(".$row['logo'].")'></div>"; } 

		if(!empty($row['owner'])){
		$content = $content."<div class='menu-item'>".$img."<b>".$row['name']."</b><p>".$row['desc']."</p>".
            "<div class='output tooltip-top' title='Выход'>".$row['output']."</div>".
            "<div class='cost tooltip-top' style=\"font-family: 'PT Sans'\">".$row['cost']." &#8399;</div></div>";
        }
	} 	
		
	return $content;
}

function get_full_part($owner){

	if($owner == "all") {
			 $sql = "select * from k_menu_parts order by id";
	} else { $sql = "select * from k_menu_parts where owner = '$owner' order by id"; }
	
	$recs = mysql_query($sql) or die(mysql_error());	

	while($row = mysql_fetch_array($recs)){

		$result = $result.get_menu($row['text_id']);
	}
	return $result;
}

// alot of shitcoding

function get_menu_part($owner){

	if($owner != "all") {
		$sql = "select * from k_menu_parts where text_id = '$owner' order by id";
	} else {
		$sql = "select * from k_menu_parts where owner = ''";
	}

	$recs = mysql_query($sql) or die(mysql_error());	

	while($row = mysql_fetch_array($recs)){
		if(empty($row['owner'])){
		?> 
		<div class="ac-item"> 

			<div class="ac-item-head gd-dark-1">
				<div class="ac-item-head-container"> 
					<div class="ac-heading">
		                <? echo $row['name']; ?>
		            </div>
		        </div>
		    </div>

	        <div class="ac-item-body">
	       	<? 	      
				$sql1 = "select * from k_menu_parts where owner = '".$row['text_id']."' order by id desc";
				$recs1 = mysql_query($sql1) or die(mysql_error());
			
				if(mysql_num_rows($recs1)>0) $istabs = 1;

				if($istabs){ echo "<div class='ac-item-content' style='overflow: hidden;'><div class='content'>"; } 
				else { echo "<div class='ac-item-content nano'><div class='content'>"; }
									
				if($istabs){ ?>

					<ul class="tabs gd-light-1">
				  		<? 
				  		$s = 0;

						while($row1 = mysql_fetch_array($recs1)){								
							?><li><a href="#<? echo $row1['text_id']; ?>"><? echo $row1['name']; ?></a></li> <?                                     
							$tab_content[$s] = $row1['text_id']; 
							$s++;
						}						
						?>
					</ul>

						<div class="tab_container">

							<? 
							// posting to each subtab

							for($i = 0; $i < count($tab_content); $i++){ 

								$f = get_menu($tab_content[$i]); ?>

								<div class="tab_content nano" id="<? echo $tab_content[$i]; ?>">
									<div class="content"><? echo $f; ?></div>
								</div>

							<? /* 
							<div class="tab_content nano active" id="#common-<? echo $tab_content[$i]; ?>">
							<div class="content">			    		                	
							<? echo get_full_part($owner); ?> 
							</div>			             	
							</div> */ ?>

							<? } ?>

						</div> 
			     <? } else {
	             echo get_menu($row['text_id']); } ?>

	              </div> <!-- .content -->
	            </div> 
	        </div> <!-- .ac-item-body -->
	        
		</div> <!-- end of accordion -->
		<?
		} // if !empty
	} // while($row = mysql_fetch_array($recs))
}



if(basename(__FILE__) == basename($_SERVER['PHP_SELF'])) send_404();

 
$db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database.");
mysql_select_db("$dbDatabase", $db) or die ("Couldn't select the database.");
 

mysql_query ("set character_set_client='utf8'");  
mysql_query ("set character_set_results='utf8'");  
mysql_query ("set collation_connection='utf8_general_ci'");
?>