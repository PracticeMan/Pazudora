<div class="attrs form">
<?php echo $this->Form->create('Attr'); ?>
	<fieldset class="kind_add_field">
		<legend><?php echo __('属性の変更'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('attr_type',array('label' =>'属性名','class' => 'input_kind_name'));
	?>
	</fieldset>
	<div class="submit_btn">
	<?php echo $this->Form->end(__('変更')); ?>
</div>
</div>

