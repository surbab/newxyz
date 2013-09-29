<div class="assetCodes index">
	<h2><?php echo __('Asset Codes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_code'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_cat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_depr_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_life'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_po_id'); ?></th>
			<th><?php echo $this->Paginator->sort('grn_id'); ?></th>
			<th><?php echo $this->Paginator->sort('exp_life'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assetCodes as $assetCode): ?>
	<tr>
		<td><?php echo h($assetCode['AssetCode']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assetCode['Location']['name'], array('controller' => 'locations', 'action' => 'view', $assetCode['Location']['id'])); ?>
		</td>
		<td><?php echo h($assetCode['AssetCode']['asset_code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assetCode['AssetCat']['id'], array('controller' => 'asset_cats', 'action' => 'view', $assetCode['AssetCat']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assetCode['AssetDepr']['id'], array('controller' => 'asset_deprs', 'action' => 'view', $assetCode['AssetDepr']['id'])); ?>
		</td>
		<td><?php echo h($assetCode['AssetCode']['asset_life']); ?>&nbsp;</td>
		<td><?php echo h($assetCode['AssetCode']['asset_desc']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assetCode['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $assetCode['Partner']['id'])); ?>
		</td>
		<td><?php echo h($assetCode['AssetCode']['asset_po_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assetCode['Grn']['id'], array('controller' => 'grns', 'action' => 'view', $assetCode['Grn']['id'])); ?>
		</td>
		<td><?php echo h($assetCode['AssetCode']['exp_life']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assetCode['AssetLocation']['id'], array('controller' => 'asset_locations', 'action' => 'view', $assetCode['AssetLocation']['id'])); ?>
		</td>
		<td><?php echo h($assetCode['AssetCode']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($assetCode['AssetCode']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($assetCode['AssetCode']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($assetCode['AssetCode']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assetCode['AssetCode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assetCode['AssetCode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assetCode['AssetCode']['id']), null, __('Are you sure you want to delete # %s?', $assetCode['AssetCode']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Asset Code'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Cats'), array('controller' => 'asset_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Cat'), array('controller' => 'asset_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Deprs'), array('controller' => 'asset_deprs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr'), array('controller' => 'asset_deprs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grns'), array('controller' => 'grns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grn'), array('controller' => 'grns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Locations'), array('controller' => 'asset_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Location'), array('controller' => 'asset_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Dets'), array('controller' => 'mould_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Det'), array('controller' => 'mould_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
