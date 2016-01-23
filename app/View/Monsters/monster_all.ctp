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
	<div class="pagenator">
		<div class="paging">
			<?php
			echo $this->Paginator->prev( "<img src='/Pazudora/img/prev_icon.png'>",array('escape'=>false, ' tag'=>'span'),
				array(), null, array('class' => 'prev disabled'));
			//echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next( "<img src='/Pazudora/img/next_icon.png'>",array('escape'=>false, ' tag'=>'span'),
				array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>

