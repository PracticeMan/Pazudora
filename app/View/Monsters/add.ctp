<div class="monsters form">
<?php echo $this->Form->create('Monster'); ?>
	<fieldset>
		<legend><?php echo __('Add Monster'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('hp');
		echo $this->Form->input('atatck');
		echo $this->Form->input('attr_id');
		echo $this->Form->input('kind_id');
		echo $this->Form->input('image_file_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Monsters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Attrs'), array('controller' => 'attrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attr'), array('controller' => 'attrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kinds'), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kind'), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
	</ul>
</div>
