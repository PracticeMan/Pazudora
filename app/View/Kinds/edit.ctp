<div class="kinds form">
<?php echo $this->Form->create('Kind'); ?>
	<fieldset class="kind_add_field">
		<legend><?php echo __('種族の変更'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('kind_type',array('label' =>'種族名','class' => 'input_kind_name'));
		?>
	</fieldset>
	<div class="submit_btn">
		<?php echo $this->Form->end(__('変更')); ?>
	</div>
</div>

