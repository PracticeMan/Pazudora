<div class="attrs view">
<h2><?php echo __('属性'); ?></h2>
	<dl>
		<dt><?php echo __('番号'); ?></dt>
		<dd>
			<?php echo h($attr['Attr']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('属性'); ?></dt>
		<dd>
			<?php echo h($attr['Attr']['attr_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('投稿日時'); ?></dt>
		<dd>
			<?php echo h($attr['Attr']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日時'); ?></dt>
		<dd>
			<?php echo h($attr['Attr']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
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
