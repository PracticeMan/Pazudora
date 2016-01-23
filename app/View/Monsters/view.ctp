<div class="monsters view">
<h2><?php echo __('Monster'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hp'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['hp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atatck'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['atatck']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($monster['Attr']['attr_type'], array('controller' => 'attrs', 'action' => 'view', $monster['Attr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kind'); ?></dt>
		<dd>
			<?php echo $this->Html->link($monster['Kind']['kind_type'], array('controller' => 'kinds', 'action' => 'view', $monster['Kind']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image File Name'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['image_file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

