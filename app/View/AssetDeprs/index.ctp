<div class="assetDeprs index">
	<h2><?php echo __('Asset Deprs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_depreciation'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_depr_cat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assetDeprs as $assetDepr): ?>
	<tr>
		<td><?php echo h($assetDepr['AssetDepr']['id']); ?>&nbsp;</td>
		<td><?php echo h($assetDepr['AssetDepr']['asset_depreciation']); ?>&nbsp;</td>
		<td><?php echo h($assetDepr['AssetDepr']['asset_desc']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assetDepr['AssetDeprCat']['id'], array('controller' => 'asset_depr_cats', 'action' => 'view', $assetDepr['AssetDeprCat']['id'])); ?>
		</td>
		<td><?php echo h($assetDepr['AssetDepr']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($assetDepr['AssetDepr']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($assetDepr['AssetDepr']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($assetDepr['AssetDepr']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assetDepr['AssetDepr']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assetDepr['AssetDepr']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assetDepr['AssetDepr']['id']), null, __('Are you sure you want to delete # %s?', $assetDepr['AssetDepr']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Asset Depr'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Depr Cats'), array('controller' => 'asset_depr_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr Cat'), array('controller' => 'asset_depr_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
