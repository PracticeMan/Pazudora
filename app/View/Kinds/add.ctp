<div class="kinds form">
<?php echo $this->Form->create('Kind'); ?>
	<fieldset>
		<legend><?php echo __('Add Kind'); ?></legend>
	<?php
		echo $this->Form->input('kind_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Kinds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Monsters'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Monster'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
