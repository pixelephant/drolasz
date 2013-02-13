<?php 
	foreach($documents as $document){
		echo $this->Html->link($document['Document']['name_hun'] . '<span> ' . $document['Document']['description_hun'] . '</span>', '/files/' . $document['Document']['file_hun'], array('escape' => false));
	} 
?>