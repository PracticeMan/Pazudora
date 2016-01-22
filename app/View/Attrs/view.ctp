<div class="attrs view">
	<table class="kind_table" cellpadding="0" cellspacing="0">
		<thead>
		<tr class="table_manu">
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('kind_type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tr>
			<td class="td_id"><?php echo h($attr['Attr']['id']); ?>&nbsp;</td>
			<td class="td_type"><?php echo h($attr['Attr']['attr_type']); ?>&nbsp;</td>
			<td class="td_create"><?php echo strftime('%Y / %m / %d - %H : %M',strtotime($attr['Attr']['created'])); ?>&nbsp;</td>
			<td class="td_modified"><?php echo strftime('%Y / %m / %d  - %H : %M',strtotime($attr['Attr']['modified'])); ?>&nbsp;</td>
			<td class="td_actions">
				<?php echo $this->Html->link($this->Html->image('view_icon.png'),
					array('action' => 'view', $attr['Attr']['id']),array('escape'=>false)); ?>
				<?php echo $this->Html->link($this->Html->image('edit_icon.png'),
					array('action' => 'edit', $attr['Attr']['id']),array('escape'=>false)); ?>
				<?php echo $this->Html->link($this->Html->image('delete_icon.png'),
					array('action' => 'delete', $attr['Attr']['id']),array('escape'=>false),
					array('confirm' => __('Are you sure you want to delete # %s?', $attr['Attr']['id']))); ?>
			</td>
		</tr>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('属性を変更する'), array('action' => 'edit', $attr['Attr']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('属性を削除する'), array('action' => 'delete', $attr['Attr']['id']), array(), __('Are you sure you want to delete # %s?', $attr['Attr']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('属性リスト'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しく属性を追加する'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('モンスターリスト'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しくモンスターを追加する'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Monsters'); ?></h3>
	<?php if (!empty($attr['Monster'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('番号'); ?></th>
		<th><?php echo __('モンスター名'); ?></th>
		<th><?php echo __('HP'); ?></th>
		<th><?php echo __('攻撃力'); ?></th>
		<th><?php echo __('属性'); ?></th>
		<th><?php echo __('種族'); ?></th>
		<th><?php echo __('画像'); ?></th>
		<th><?php echo __('投稿日時'); ?></th>
		<th><?php echo __('更新日時'); ?></th>
		<th class="actions"><?php echo __('操作'); ?></th>
	</tr>
	<?php foreach ($attr['Monster'] as $monster): ?>
		<tr>
			<td><?php echo $monster['id']; ?></td>
			<td><?php echo $monster['name']; ?></td>
			<td><?php echo $monster['hp']; ?></td>
			<td><?php echo $monster['atatck']; ?></td>
			<td><?php echo $attr['Attr']['attr_type']; ?></td>
			<td><?php echo $kind['Kind']['kind_type']; ?></td>
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
