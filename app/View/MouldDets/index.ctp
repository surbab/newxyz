<div class="mouldDets index">
	<h2><?php echo __('Mould Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mould_life_est'); ?></th>
			<th><?php echo $this->Paginator->sort('no_cav'); ?></th>
			<th><?php echo $this->Paginator->sort('dwg_no'); ?></th>
			<th><?php echo $this->Paginator->sort('co_own'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mouldDets as $mouldDet): ?>
	<tr>
		<td><?php echo h($mouldDet['MouldDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mouldDet['AssetCode']['id'], array('controller' => 'asset_codes', 'action' => 'view', $mouldDet['AssetCode']['id'])); ?>
		</td>
		<td><?php echo h($mouldDet['MouldDet']['mould_life_est']); ?>&nbsp;</td>
		<td><?php echo h($mouldDet['MouldDet']['no_cav']); ?>&nbsp;</td>
		<td><?php echo h($mouldDet['MouldDet']['dwg_no']); ?>&nbsp;</td>
		<td><?php echo h($mouldDet['MouldDet']['co_own']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mouldDet['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $mouldDet['Partner']['id'])); ?>
		</td>
		<td><?php echo h($mouldDet['MouldDet']['supplier_id']); ?>&nbsp;</td>
		<td><?php echo h($mouldDet['MouldDet']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($mouldDet['MouldDet']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($mouldDet['MouldDet']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($mouldDet['MouldDet']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mouldDet['MouldDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mouldDet['MouldDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mouldDet['MouldDet']['id']), null, __('Are you sure you want to delete # %s?', $mouldDet['MouldDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mould Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
