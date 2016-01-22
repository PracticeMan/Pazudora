<?php echo $this->Html->css('style'); ?>
<div class="attrs index">
	<table class="kind_table" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('番号'); ?></th>
			<th><?php echo $this->Paginator->sort('属性'); ?></th>
			<th><?php echo $this->Paginator->sort('投稿日時'); ?></th>
			<th><?php echo $this->Paginator->sort('更新日時'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($attrs as $attr): ?>
	<tr>
		<td class="td_id"><?php echo h($attr['Attr']['id']); ?>&nbsp;</td>
		<td class="td_type"><?php echo h($attr['Attr']['attr_type']); ?>&nbsp;</td>
		<td class="td_create"><?php echo  strftime('%Y / %m / %d',strtotime($attr['Attr']['created'])); ?>&nbsp;</td>
		<td class="td_modified"><?php echo  strftime('%Y / %m / %d',strtotime($attr['Attr']['modified'])); ?>&nbsp;</td>
		<td class="td_actions">
			<?php echo $this->Html->link($this->Html->image('view_icon.png'),
				array('action' => 'view', $attr['Attr']['id']),array('escape'=>false)); ?>
			<?php echo $this->Html->link($this->Html->image('edit_icon.png'),
				array('action' => 'edit', $attr['Attr']['id']),array('escape'=>false)); ?>
			<?php echo $this->Form->postLink($this->Html->image('delete_icon.png'),
				array('action' => 'delete', $attr['Attr']['id']),array('escape'=>false),
				array('confirm' => __('Are you sure you want to delete # %s?', $attr['Attr']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('新しく属性を追加する'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('トップページに戻る'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しくモンスターを追加する'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
