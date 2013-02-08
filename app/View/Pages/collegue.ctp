<?php echo $this->Html->image($collegue['Collegue']['image'], array('alt' => $collegue['Collegue']['name_' . $this->Session->read('Config.language')])) ?>

<div class="cv">
	<h3><?php echo $collegue['Collegue']['name_' . $this->Session->read('Config.language')]; ?></h3>
	<h4><?php echo $collegue['Collegue']['title_' . $this->Session->read('Config.language')]; ?></h4>
	<?php echo $collegue['Collegue']['description_' . $this->Session->read('Config.language')]; ?>
</div>