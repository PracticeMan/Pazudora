<div class="monsters index">
	<h2><?php echo __('Monsters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('hp'); ?></th>
			<th><?php echo $this->Paginator->sort('atatck'); ?></th>
			<th><?php echo $this->Paginator->sort('attr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('kind_id'); ?></th>
			<th><?php echo $this->Paginator->sort('image_file_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($monsters as $monster): ?>
	<tr>
		<td><?php echo h($monster['Monster']['id']); ?>&nbsp;</td>
		<td><?php echo h($monster['Monster']['name']); ?>&nbsp;</td>
		<td><?php echo h($monster['Monster']['hp']); ?>&nbsp;</td>
		<td><?php echo h($monster['Monster']['atatck']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($monster['Attr']['attr_type'], array('controller' => 'attrs', 'action' => 'view', $monster['Attr']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($monster['Kind']['kind_type'], array('controller' => 'kinds', 'action' => 'view', $monster['Kind']['id'])); ?>
		</td>
		<td><?php echo h($monster['Monster']['image_file_name']); ?>&nbsp;</td>
		<td><?php echo h($monster['Monster']['created']); ?>&nbsp;</td>
		<td><?php echo h($monster['Monster']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $monster['Monster']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $monster['Monster']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $monster['Monster']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $monster['Monster']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Monster'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Attrs'), array('controller' => 'attrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attr'), array('controller' => 'attrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kinds'), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kind'), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
	</ul>
</div>
