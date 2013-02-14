<?php $this->Html->css('admin', null, array('inline' => false)); ?>
<?php echo $this->Html->link('Új dokumentum', '/admin/documents/edit', array('class' => array('admin','new'))); ?>
<div id="collegues-list">
	<?php foreach($documents as $document){ ?>
		<?php 
			
		?>
			<div class="admin-a">
				<h3><?php echo $document['Document']['name_hun']; ?></h3>
				<h4><?php echo $document['Document']['description_hun']; ?></h4>
				<?php echo $this->Html->link('Szerkeszt', '/admin/documents/edit/' . $document['Document']['id'], array("class"=>"admin")); ?>
				<form action="<?php echo $this->Html->url('/admin/documents/delete/'); ?><?php echo $document['Document']['id']; ?>" name="post_<?php echo $document['Document']['id']; ?>" id="post_<?php echo $document['Document']['id']; ?>" style="display:none;" method="post">
							<input type="hidden" name="_method" value="POST"></form>
							<a href="#" class="admin" onclick="if (confirm('Biztosan törlöd?')) { document.post_<?php echo $document['Document']['id']; ?>.submit(); } event.returnValue = false; return false;">Töröl</a>
			</div>
	<?php } ?>
</div>