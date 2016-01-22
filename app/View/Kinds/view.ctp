<div class="kinds view">
<h2><?php echo __('種族'); ?></h2>
	<dl>
		<dt><?php echo __('番号'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('種族'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['kind_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('投稿日時'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日時'); ?></dt>
		<dd>
			<?php echo h($kind['Kind']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('種族を変更する'), array('action' => 'edit', $kind['Kind']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('種族を削除する'), array('action' => 'delete', $kind['Kind']['id']), array(), __('Are you sure you want to delete # %s?', $kind['Kind']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('種族リスト'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しく種族を追加する'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('トップページに戻る'), array('controller' => 'monsters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しくモンスターを追加する'), array('controller' => 'monsters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Monsters'); ?></h3>
	<?php if (!empty($kind['Monster'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('番号'); ?></th>
		<th><?php echo __('モンスター名'); ?></th>
		<th><?php echo __('Hp'); ?></th>
		<th><?php echo __('攻撃力'); ?></th>
		<th><?php echo __('属性'); ?></th>
		<th><?php echo __('種族'); ?></th>
		<th><?php echo __('Image File Name'); ?></th>
		<th><?php echo __('投稿日時'); ?></th>
		<th><?php echo __('更新日時'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($kind['Monster'] as $monster): ?>
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
				<?php echo $this->Html->link(__('一覧'), array('controller' => 'monsters', 'action' => 'view', $monster['id'])); ?>
				<?php echo $this->Html->link(__('変更'), array('controller' => 'monsters', 'action' => 'edit', $monster['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'monsters', 'action' => 'delete', $monster['id']), array(), __('Are you sure you want to delete # %s?', $monster['id'])); ?>
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
