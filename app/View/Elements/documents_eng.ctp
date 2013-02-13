<?php 
	foreach($documents as $document){
		echo $this->Html->link($document['Document']['name_eng'] . '<span> ' . $document['Document']['description_eng'] . '</span>', '/files/' . $document['Document']['file_eng'], array('escape' => false));
	} 
?>