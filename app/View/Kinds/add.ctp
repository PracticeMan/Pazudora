<?php echo $this->Html->css('style'); ?>
<div class="kinds form">
<?php echo $this->Form->create('Kind'); ?>
	<fieldset class="kind_add_field">
		<legend><?php echo __('種族追加'); ?></legend>
	<?php
		echo $this->Form->input('kind_type',array('label' =>'種族名','class' => 'input_kind_name'));
	?>
	</fieldset>
	<div class="submit_btn">
		<?php echo $this->Form->end(__('追加')); ?>
	</div>
</div>

