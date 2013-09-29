<div class="assetDeprs view">
<h2><?php  echo __('Asset Depr'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetDepr['AssetDepr']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Depreciation'); ?></dt>
		<dd>
			<?php echo h($assetDepr['AssetDepr']['asset_depreciation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Desc'); ?></dt>
		<dd>
			<?php echo h($assetDepr['AssetDepr']['asset_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Depr Cat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetDepr['AssetDeprCat']['id'], array('controller' => 'asset_depr_cats', 'action' => 'view', $assetDepr['AssetDeprCat']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($assetDepr['AssetDepr']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($assetDepr['AssetDepr']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($assetDepr['AssetDepr']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($assetDepr['AssetDepr']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asset Depr'), array('action' => 'edit', $assetDepr['AssetDepr']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asset Depr'), array('action' => 'delete', $assetDepr['AssetDepr']['id']), null, __('Are you sure you want to delete # %s?', $assetDepr['AssetDepr']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Deprs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Depr Cats'), array('controller' => 'asset_depr_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr Cat'), array('controller' => 'asset_depr_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asset Codes'); ?></h3>
	<?php if (!empty($assetDepr['AssetCode'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Asset Code'); ?></th>
		<th><?php echo __('Asset Cat Id'); ?></th>
		<th><?php echo __('Asset Depr Id'); ?></th>
		<th><?php echo __('Asset Life'); ?></th>
		<th><?php echo __('Asset Desc'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Asset Po Id'); ?></th>
		<th><?php echo __('Grn Id'); ?></th>
		<th><?php echo __('Exp Life'); ?></th>
		<th><?php echo __('Asset Location Id'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($assetDepr['AssetCode'] as $assetCode): ?>
		<tr>
			<td><?php echo $assetCode['id']; ?></td>
			<td><?php echo $assetCode['location_id']; ?></td>
			<td><?php echo $assetCode['asset_code']; ?></td>
			<td><?php echo $assetCode['asset_cat_id']; ?></td>
			<td><?php echo $assetCode['asset_depr_id']; ?></td>
			<td><?php echo $assetCode['asset_life']; ?></td>
			<td><?php echo $assetCode['asset_desc']; ?></td>
			<td><?php echo $assetCode['partner_id']; ?></td>
			<td><?php echo $assetCode['asset_po_id']; ?></td>
			<td><?php echo $assetCode['grn_id']; ?></td>
			<td><?php echo $assetCode['exp_life']; ?></td>
			<td><?php echo $assetCode['asset_location_id']; ?></td>
			<td><?php echo $assetCode['creat_on']; ?></td>
			<td><?php echo $assetCode['creat_by']; ?></td>
			<td><?php echo $assetCode['mod_on']; ?></td>
			<td><?php echo $assetCode['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'asset_codes', 'action' => 'view', $assetCode['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'asset_codes', 'action' => 'edit', $assetCode['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'asset_codes', 'action' => 'delete', $assetCode['id']), null, __('Are you sure you want to delete # %s?', $assetCode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
