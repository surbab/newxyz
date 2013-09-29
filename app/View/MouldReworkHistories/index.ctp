<div class="mouldReworkHistories index">
	<h2><?php echo __('Mould Rework Histories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mould_det_id'); ?></th>
			<th><?php echo $this->Paginator->sort('damage_date'); ?></th>
			<th><?php echo $this->Paginator->sort('mould_rew_reason_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mould_rew_reason_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('mould_disposition'); ?></th>
			<th><?php echo $this->Paginator->sort('dispatch_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_chalan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('received_date'); ?></th>
			<th><?php echo $this->Paginator->sort('rewo_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_rew'); ?></th>
			<th><?php echo $this->Paginator->sort('pur_inv_entry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mouldReworkHistories as $mouldReworkHistory): ?>
	<tr>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mouldReworkHistory['Location']['name'], array('controller' => 'locations', 'action' => 'view', $mouldReworkHistory['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mouldReworkHistory['MouldDet']['id'], array('controller' => 'mould_dets', 'action' => 'view', $mouldReworkHistory['MouldDet']['id'])); ?>
		</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['damage_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mouldReworkHistory['MouldRewReason']['name'], array('controller' => 'mould_rew_reasons', 'action' => 'view', $mouldReworkHistory['MouldRewReason']['id'])); ?>
		</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['mould_rew_reason_desc']); ?>&nbsp;</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['mould_disposition']); ?>&nbsp;</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['dispatch_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mouldReworkHistory['DelChalan']['id'], array('controller' => 'del_chalans', 'action' => 'view', $mouldReworkHistory['DelChalan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mouldReworkHistory['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $mouldReworkHistory['Partner']['id'])); ?>
		</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['received_date']); ?>&nbsp;</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['rewo_cost']); ?>&nbsp;</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['comment_rew']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mouldReworkHistory['PurInvEntry']['id'], array('controller' => 'pur_inv_entries', 'action' => 'view', $mouldReworkHistory['PurInvEntry']['id'])); ?>
		</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($mouldReworkHistory['MouldReworkHistory']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mouldReworkHistory['MouldReworkHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mouldReworkHistory['MouldReworkHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mouldReworkHistory['MouldReworkHistory']['id']), null, __('Are you sure you want to delete # %s?', $mouldReworkHistory['MouldReworkHistory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('controller' => 'mould_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rew Reasons'), array('controller' => 'mould_rew_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rew Reason'), array('controller' => 'mould_rew_reasons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pur Inv Entries'), array('controller' => 'pur_inv_entries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pur Inv Entry'), array('controller' => 'pur_inv_entries', 'action' => 'add')); ?> </li>
	</ul>
</div>
