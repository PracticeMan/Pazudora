<?php echo $this->Html->css('style'); ?>
<div class="monsters form">
<?php echo $this->Form->create('Monster',array('type'=>'file')); ?>
	<fieldset class="monster_add_field">
		<legend><?php echo __('モンスター編集'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label' => 'モンスター名','class' => 'input_monster_name'));
		echo $this->Form->input('hp',array('label' => 'HP','class' => 'input_monster_hp'));
		echo $this->Form->input('atatck',array('label' => '攻撃力','class' => 'input_monster_attack'));
		echo $this->Form->input('attr_id',array('label' => '属性','class' => 'input_monster_attr'));
		echo $this->Form->input('kind_id',array('label' => '種族','class' => 'input_monster_kind'));
		echo $this->Form->input('image_file_name',array('type'=>'file','label'=>'モンスター画像','class' => 'input_monster_image'));
	?>
	</fieldset>
	<div class="monster_submit_btn">
		<?php echo $this->Form->end(__('追加')); ?>
	</div>
</div>

