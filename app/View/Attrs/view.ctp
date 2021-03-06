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
<div class="related">
	<?php if (!empty($attr['Monster'])): ?>
	<table class="view_table" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Hp'); ?></th>
		<th><?php echo __('攻撃力'); ?></th>
		<th><?php echo __('属性 Id'); ?></th>
		<th><?php echo __('種族 Id'); ?></th>
		<th><?php echo __('Image File Name'); ?></th>
		<th><?php echo __('作成日'); ?></th>
		<th><?php echo __('最終編集日'); ?></th>
		<th class="actions"><?php echo __('編集'); ?></th>
	</tr>
	<?php foreach ($attr['Monster'] as $monster): ?>
		<tr>
			<td id="td_id"><?php echo $monster['id']; ?></td>
			<td id="td_name"><?php echo $monster['name']; ?></td>
			<td id="td_hp"><?php echo $monster['hp']; ?></td>
			<td id="td_attack"><?php echo $monster['atatck']; ?></td>
			<td id="td_attr_id"><?php echo $monster['attr_id']; ?></td>
			<td id="td_kind_id"><?php echo $monster['kind_id']; ?></td>
			<td id="td_image_name"><?php echo $monster['image_file_name']; ?></td>
			<td id="td_created"><?php echo $monster['created']; ?></td>
			<td id="td_modified"><?php echo $monster['modified']; ?></td>
			<td id="td_action">
				<?php echo $this->Html->link($this->Html->image('view_icon.png'),
					array('action' => 'view', $attr['Attr']['id']),array('escape'=>false)); ?>
				<?php echo $this->Html->link($this->Html->image('edit_icon.png'),
					array('action' => 'edit', $attr['Attr']['id']),array('escape'=>false)); ?>
				<?php echo $this->Html->link($this->Html->image('delete_icon.png'),
					array('action' => 'delete', $attr['Attr']['id']),array('escape'=>false),
					array('confirm' => __('Are you sure you want to delete # %s?', $attr['Attr']['id']))); ?>
			</td>
		</tr>
		<br>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
