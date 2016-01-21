<div class="kinds index">
	<h2><?php echo __('種族'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('番号'); ?></th>
			<th><?php echo $this->Paginator->sort('種族'); ?></th>
			<th><?php echo $this->Paginator->sort('投稿日時'); ?></th>
			<th><?php echo $this->Paginator->sort('更新日時'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($kinds as $kind): ?>
	<tr>
		<td><?php echo h($kind['Kind']['id']); ?>&nbsp;</td>
		<td><?php echo h($kind['Kind']['kind_type']); ?>&nbsp;</td>
		<td><?php echo h($kind['Kind']['created']); ?>&nbsp;</td>
		<td><?php echo h($kind['Kind']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('一覧'), array('action' => 'view', $kind['Kind']['id'])); ?>
			<?php echo $this->Html->link(__('変更'), array('action' => 'edit', $kind['Kind']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $kind['Kind']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $kind['Kind']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('新しく種族を追加する'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('モンスターリスト'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しくモンスターを追加する'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
