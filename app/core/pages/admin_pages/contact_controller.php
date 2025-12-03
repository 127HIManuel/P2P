<?php
if ($operation == "read") {
	$query = " select * from messages where id =:id limit 1";
	$result = query_one($query,['id'=>$id]);

	if($result) {
		$query = "update messages set status = 1 where id = :id limit 1";
		query_one($query,['id'=>$id]);
	}
}
if ($operation == "delete") {
	$query = " select * from messages where id =:id limit 1";
	$result = query_one($query,['id'=>$id]);
 	if(count($_POST)>0) {
 	          
 		if($result) {
            	
                $query = "delete from messages where id =:id limit 1";
      
                $row = query($query,['id'=>$result['id']] );

                

                echo'<script>
        			window.location.assign("'.ROOT.'admin/contact");
        			</script>';
            }
        }
}