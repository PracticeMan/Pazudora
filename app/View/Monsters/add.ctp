<div class="monsters form">
	<?php echo $this->Form->create('Monster',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('モンスター追加'); ?></legend>
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
	<?php echo $this->Form->end(__('追加')); ?>
</div>

