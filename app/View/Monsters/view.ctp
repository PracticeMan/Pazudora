<div class="monsters view">
<h2><?php echo __('Monster'); ?></h2>
	<dl>
		<dt><?php echo __('番号'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('モンスター名'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hp'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['hp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('攻撃力'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['atatck']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('属性'); ?></dt>
		<dd>
			<?php echo $this->Html->link($monster['Attr']['attr_type'], array('controller' => 'attrs', 'action' => 'view', $monster['Attr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('種族'); ?></dt>
		<dd>
			<?php echo $this->Html->link($monster['Kind']['kind_type'], array('controller' => 'kinds', 'action' => 'view', $monster['Kind']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('画像'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['image_file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('投稿日時'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日時'); ?></dt>
		<dd>
			<?php echo h($monster['Monster']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('モンスターを変更する'), array('action' => 'edit', $monster['Monster']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('モンスターを削除する'), array('action' => 'delete', $monster['Monster']['id']), array(), __('Are you sure you want to delete # %s?', $monster['Monster']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('モンスターリスト'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しくモンスターを追加する'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('属性リスト'), array('controller' => 'attrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しく属性を追加する'), array('controller' => 'attrs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('種族リスト'), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('新しく種族を追加する'), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
	</ul>
</div>
