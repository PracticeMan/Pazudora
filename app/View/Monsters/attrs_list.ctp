<?php echo $this->Html->css('style'); ?>
<div class="monsters index">
	<div class="table">
		<table>
			<?php foreach ($attrs as $attr): ?>
				<tr>
					<th colspan="9" class="th_name"><div class="monster_name">
							<?php echo h($attr['Monster']['name']); ?>&nbsp;</div></th>
				</tr>
				<tr>
					<td width="50" height="10">
						<?php echo $this->Html->link($this->upload->uploadImage($attr,'Monster.image',array('style'=>'thumb')),
							array('action' => 'index'),array('escape'=>false)); ?>
						<?php //echo $this->upload->uploadImage($kind,'Monster.image',array('style'=>'thumb'));?>

					</td>
					<td class="td_hp">HP</td>
					<td class="td_hp_value"><?php echo h($attr['Monster']['hp']); ?>&nbsp;</td>
					<td class="td_attack">攻撃力</td>
					<td class="td_attack_value"><?php echo h($attr['Monster']['atatck']); ?>&nbsp;</td>
					<td class="td_attr">属性</td>
					<td class="td_attr_name"><?php echo h($attr['Attr']['attr_type']); ?>&nbsp;</td>
					<td class="td_kind">タイプ</td>
					<td class="td_kind_name"><?php echo h($attr['Kind']['kind_type']); ?>&nbsp;</td>
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