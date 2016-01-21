<div class="monsters form">
<?php echo $this->Form->create('Monster',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('モンスターを追加'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label' => 'モンスター名'));
		echo $this->Form->input('hp');
		echo $this->Form->input('atatck',array('label' => '攻撃力'));
		echo $this->Form->input('attr_id',array('label' => '属性'));
		echo $this->Form->input('kind_id',array('label' => '種族'));
		//echo $this->Form->input('image_file_name');
		echo $this->Form->input('image',array('type'=>'file','label'=>'モンスター画像'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('追加する')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('モンスターリスト'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('モンスタえでっと'), array('controller' => 'monsters', 'action' => 'edit' ,'1')); ?></li>
		<li><?php echo $this->Html->link(__('属性リスト'), array('controller' => 'attrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しく属性を追加する'), array('controller' => 'attrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('種族リスト'), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しく種族を追加する'), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
	</ul>
</div>
