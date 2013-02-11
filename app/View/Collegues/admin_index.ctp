<?php $this->Html->css('admin', null, array('inline' => false)); ?>
<?php echo $this->Html->link('Hozzáad', '/admin/collegues/edit', array('class' => array('admin','new'))); ?>
<div id="collegues-list">
	<?php foreach($collegues as $collegue){ ?>
		<?php 
			
		?>
			<div class="admin-a">
				<h3><?php echo $collegue['Collegue']['name_hun']; ?></h3>
				<h4><?php echo $collegue['Collegue']['title_hun']; ?></h4>
				<?php echo $this->Html->link('Szerkeszt', '/admin/collegues/edit/' . $collegue['Collegue']['id'], array("class"=>"admin")); ?>
				<form action="<?php echo $this->Html->url('/admin/collegues/delete/'); ?><?php echo $collegue['Collegue']['id']; ?>" name="post_<?php echo $collegue['Collegue']['id']; ?>" id="post_<?php echo $collegue['Collegue']['id']; ?>" style="display:none;" method="post">
							<input type="hidden" name="_method" value="POST"></form>
							<a href="#" class="admin" onclick="if (confirm('Biztosan törlöd?')) { document.post_<?php echo $collegue['Collegue']['id']; ?>.submit(); } event.returnValue = false; return false;">Töröl</a>
			</div>
	<?php } ?>
</div>