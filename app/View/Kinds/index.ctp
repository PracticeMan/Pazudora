<?php echo $this->Html->css('style'); ?>
<div class="kinds index">
	<div>
		<table class="kind_table" cellpadding="0" cellspacing="0">
			<thead>
			<tr class="table_manu">
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('属性'); ?></th>
					<th><?php echo $this->Paginator->sort('作成日'); ?></th>
					<th><?php echo $this->Paginator->sort('最終編集日'); ?></th>
					<th class="actions"><?php echo __('編集'); ?></th>
			</tr>
			</thead>
			<?php foreach ($kinds as $kind): ?>
				<tr>
					<td class="td_id"><?php echo h($kind['Kind']['id']); ?>&nbsp;</td>
					<td class="td_type"><?php echo h($kind['Kind']['kind_type']); ?>&nbsp;</td>
					<td class="td_create"><?php echo strftime('%Y / %m / %d',strtotime($kind['Kind']['created'])); ?>&nbsp;</td>
					<td class="td_modified"><?php echo strftime('%Y / %m / %d',strtotime($kind['Kind']['modified'])); ?>&nbsp;</td>
					<td class="td_actions">
						<?php echo $this->Html->link($this->Html->image('view_icon.png'),
							 array('action' => 'view', $kind['Kind']['id']),array('escape'=>false)); ?>
						<?php echo $this->Html->link($this->Html->image('edit_icon.png'),
							array('action' => 'edit', $kind['Kind']['id']),array('escape'=>false)); ?>
						<?php echo $this->Html->link($this->Html->image('delete_icon.png'),
							array('action' => 'delete', $kind['Kind']['id']),array('escape'=>false),
							array('confirm' => __('Are you sure you want to delete # %s?', $kind['Kind']['id']))); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<div class="pagenator">
		<div class="paging">
			<?php
			echo $this->Paginator->prev( "<img src='/Pazudora/img/prev_icon.png'>",
				array('escape'=>false, ' tag'=>'span'), array(), null, array('class' => 'prev disabled'));
			//echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next( "<img src='/Pazudora/img/next_icon.png'>",
				array('escape'=>false, ' tag'=>'span'), array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>


