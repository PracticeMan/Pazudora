<?php echo $this->Html->css('style'); ?>
<div class="kinds form">
<?php echo $this->Form->create('Kind'); ?>
	<fieldset class="kind_add_field">
		<legend><?php echo __('新しい属性登録'); ?></legend>
	<?php
		echo $this->Form->input('kind_type',array('label' =>'属性名','class' => 'input_kind_name'));
	?>
	</fieldset>
	<div class="submit_btn">
		<?php echo $this->Form->end(__('登録')); ?>
	</div>
</div>

