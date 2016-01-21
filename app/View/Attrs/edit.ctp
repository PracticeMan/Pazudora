<div class="attrs form">
<?php echo $this->Form->create('Attr'); ?>
	<fieldset>
		<legend><?php echo __('属性の変更'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('attr_type',array('label' => '属性'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('変更')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $this->Form->value('Attr.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Attr.id'))); ?></li>
		<li><?php echo $this->Html->link(__('属性リスト'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('モンスターリスト'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('モンスター追加'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
