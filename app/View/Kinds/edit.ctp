<div class="kinds form">
<?php echo $this->Form->create('Kind'); ?>
	<fieldset>
		<legend><?php echo __('Edit Kind'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('kind_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Kind.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Kind.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Kinds'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Monsters'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Monster'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
