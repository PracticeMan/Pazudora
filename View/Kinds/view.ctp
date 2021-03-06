<div class="kinds view">
<h2><?php echo __('Kind'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kind Type'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['kind_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kind'), array('action' => 'edit', $kind['Kind']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kind'), array('action' => 'delete', $kind['Kind']['id']), array(), __('Are you sure you want to delete # %s?', $kind['Kind']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kinds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kind'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Monsters'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Monster'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Monsters'); ?></h3>
	<?php if (!empty($kind['Monster'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Hp'); ?></th>
		<th><?php echo __('Atatck'); ?></th>
		<th><?php echo __('Attr Id'); ?></th>
		<th><?php echo __('Kind Id'); ?></th>
		<th><?php echo __('Image File Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($kind['Monster'] as $monster): ?>
		<tr>
			<td><?php echo $monster['id']; ?></td>
			<td><?php echo $monster['name']; ?></td>
			<td><?php echo $monster['hp']; ?></td>
			<td><?php echo $monster['atatck']; ?></td>
			<td><?php echo $monster['attr_id']; ?></td>
			<td><?php echo $monster['kind_id']; ?></td>
			<td><?php echo $monster['image_file_name']; ?></td>
			<td><?php echo $monster['created']; ?></td>
			<td><?php echo $monster['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'monsters', 'action' => 'view', $monster['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'monsters', 'action' => 'edit', $monster['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'monsters', 'action' => 'delete', $monster['id']), array(), __('Are you sure you want to delete # %s?', $monster['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Monster'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
