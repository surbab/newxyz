<div class="assetDeprCats index">
	<h2><?php echo __('Asset Depr Cats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_depr'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('asset_depreciation'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assetDeprCats as $assetDeprCat): ?>
	<tr>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['id']); ?>&nbsp;</td>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['asset_depr']); ?>&nbsp;</td>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['asset_desc']); ?>&nbsp;</td>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['asset_depreciation']); ?>&nbsp;</td>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($assetDeprCat['AssetDeprCat']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assetDeprCat['AssetDeprCat']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assetDeprCat['AssetDeprCat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assetDeprCat['AssetDeprCat']['id']), null, __('Are you sure you want to delete # %s?', $assetDeprCat['AssetDeprCat']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Asset Depr Cat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Deprs'), array('controller' => 'asset_deprs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr'), array('controller' => 'asset_deprs', 'action' => 'add')); ?> </li>
	</ul>
</div>
