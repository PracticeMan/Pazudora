<?php echo $this->Html->css('style'); ?>
<div class="monsters index">
	<div class="table">
		<table>
			<?php foreach ($kinds as $kind): ?>
				<tr>
					<th colspan="9" class="th_name"><div class="monster_name">
							<?php echo h($kind['Monster']['name']); ?>&nbsp;</div></th>
				</tr>
				<tr>
					<td width="50" height="10">
						<?php echo $this->Html->link($this->upload->uploadImage($kind,'Monster.image',array('style'=>'thumb')),
							array('action' => 'monsterpage/' .$kind['Monster']['id']  ),array('escape'=>false)); ?>
						<?php //echo $this->upload->uploadImage($kind,'Monster.image',array('style'=>'thumb'));?>

					</td>
					<td class="td_hp">HP</td>
					<td class="td_hp_value"><?php echo h($kind['Monster']['hp']); ?>&nbsp;</td>
					<td class="td_attack">攻撃力</td>
					<td class="td_attack_value"><?php echo h($kind['Monster']['atatck']); ?>&nbsp;</td>
					<td class="td_attr">属性</td>
					<td class="td_attr_name"><?php echo h($kind['Attr']['attr_type']); ?>&nbsp;</td>
					<td class="td_kind">タイプ</td>
					<td class="td_kind_name"><?php echo h($kind['Kind']['kind_type']); ?>&nbsp;</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
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
