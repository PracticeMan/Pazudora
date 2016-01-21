<?php echo $this->Html->css('style'); ?>
<div class="monsters index">
	<div class="table">
		<table>
			<?php foreach ($fire as $fire): ?>
				<tr>
					<th colspan="9" class="th_name"><div class="monster_name">
							<?php echo h($fire['Monster']['name']); ?>&nbsp;</div></th>
				</tr>
				<tr>
					<td width="50" height="10"><?php echo $this->Html->link($this->Html->image('thumb.jpg'),
							array('action' => 'index'),array('escape'=>false)); ?></td>
					<td class="td_hp">HP</td>
					<td class="td_hp_value"><?php echo h($fire['Monster']['hp']); ?>&nbsp;</td>
					<td class="td_attack">攻撃力</td>
					<td class="td_attack_value"><?php echo h($fire['Monster']['atatck']); ?>&nbsp;</td>
					<td class="td_attr">属性</td>
					<td class="td_attr_name"><?php echo h($fire['Attr']['attr_type']); ?>&nbsp;</td>
					<td class="td_kind">タイプ</td>
					<td class="td_kind_name"><?php echo h($fire['Kind']['kind_type']); ?>&nbsp;</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>

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
