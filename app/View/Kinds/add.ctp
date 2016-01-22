<div class="kinds form">
<?php echo $this->Form->create('Kind'); ?>
	<fieldset>
		<legend><?php echo __('種族の追加'); ?></legend>
	<?php
		echo $this->Form->input('kind_type',array('label' => '種族'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('追加')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('種族リスト'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('トップページに戻る'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しくモンスターを追加する'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
