<?php echo $this->Html->css('style'); ?>
<div class="monsters">
	<div class="table_mon_all">
		<table>
			<?php foreach ($monsters as $monsters): ?>
				<tr>
					<th colspan="10" class="th_name"><div class="monster_name">
							<?php echo h($monsters['Monster']['name']); ?>&nbsp;</div></th>
				</tr>
				<tr>
					<td width="50" height="10">
						<?php echo $this->Html->link($this->upload->uploadImage($monsters,'Monster.image',array('style'=>'thumb')),
							array('action' => 'monsterpage/' .$monsters['Monster']['id']),array('escape'=>false)); ?>
					</td>
					<td class="td_hp">HP</td>
					<td class="td_hp_value"><?php echo h($monsters['Monster']['hp']); ?>&nbsp;</td>
					<td class="td_attack">攻撃力</td>
					<td class="td_attack_value"><?php echo h($monsters['Monster']['atatck']); ?>&nbsp;</td>
					<td class="td_attr">属性</td>
					<td class="td_attr_name"><?php echo h($monsters['Attr']['attr_type']); ?>&nbsp;</td>
					<td class="td_kind">タイプ</td>
					<td class="td_kind_name"><?php echo h($monsters['Kind']['kind_type']); ?>&nbsp;</td>
					<td class="td_action">
						<?php echo $this->Html->link($this->Html->image('edit_icon.png'),
							array('action' => 'edit', $monsters['Attr']['id']),array('escape'=>false)); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
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
	<div class="pagenator">
		<div class="paging">
			<?php
			echo $this->Paginator->prev( "<img src='/Pazudora/img/prev_icon.png'>",array('escape'=>false, ' tag'=>'span'), array(), null, array('class' => 'prev disabled'));
			//echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next( "<img src='/Pazudora/img/next_icon.png'>",array('escape'=>false, ' tag'=>'span'), array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>

