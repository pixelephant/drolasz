<?php 
	foreach($collegues as $collegue){
		echo $this->Html->link('<h3>' . $collegue['Collegue']['name_eng'] . '</h3><h4>' . $collegue['Collegue']['title_eng'] . '<h4>', $lang . '/collegues/' . $collegue['Collegue']['slug'], array('escape' => false));
	}
?>