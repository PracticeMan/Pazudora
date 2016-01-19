<div class="attrs form">
<?php echo $this->Form->create('Attr'); ?>
	<fieldset>
		<legend><?php echo __('Add Attr'); ?></legend>
	<?php
		echo $this->Form->input('attr_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attrs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Monsters'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Monster'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
