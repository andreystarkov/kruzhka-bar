
function get_menu($owner){

	if ($owner != "all") { $query = "select * from k_menu where owner = '$owner'";
	
	} else { $query = "select * from k_menu"; } 

	$records = mysql_query($query) or die(mysql_error());

	while($row = mysql_fetch_array($records)){
		if(!empty($row['owner'])){
		$content = $content."<div class='menu-item'><b>".$row['name']."</b><p>".$row['desc']."</p>".
            "<div class='output tooltip-top' title='Выход (в граммах)'>".$row['output']." грамм</div>".
            "<div class='cost tooltip-top' title='Цена'>".$row['cost']." рублей</div></div>";
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

