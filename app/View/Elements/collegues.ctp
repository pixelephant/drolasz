<?php 
	foreach($collegues as $collegue){
		echo $this->Html->link('<h3>' . $collegue['Collegue']['name_' . $this->Session->read('Config.language')] . '</h3><h4>' . $collegue['Collegue']['title_' . $this->Session->read('Config.language')] . '</h4>', '/' . $lang . '/' . __('collegues_url') . '/' . $collegue['Collegue']['slug'], array('escape' => false));
	}
?>