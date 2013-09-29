<div class="assetCats view">
<h2><?php  echo __('Asset Cat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetCat['AssetCat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Cat'); ?></dt>
		<dd>
			<?php echo h($assetCat['AssetCat']['asset_cat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Desc'); ?></dt>
		<dd>
			<?php echo h($assetCat['AssetCat']['asset_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($assetCat['AssetCat']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($assetCat['AssetCat']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($assetCat['AssetCat']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($assetCat['AssetCat']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asset Cat'), array('action' => 'edit', $assetCat['AssetCat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asset Cat'), array('action' => 'delete', $assetCat['AssetCat']['id']), null, __('Are you sure you want to delete # %s?', $assetCat['AssetCat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Cats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Cat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asset Codes'); ?></h3>
	<?php if (!empty($assetCat['AssetCode'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Asset Code'); ?></th>
		<th><?php echo __('Asset Cat Id'); ?></th>
		<th><?php echo __('Asset Depr Id'); ?></th>
		<th><?php echo __('Asset Life'); ?></th>
		<th><?php echo __('Asset Desc'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Asset Po No'); ?></th>
		<th><?php echo __('Grn No Id'); ?></th>
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
		foreach ($assetCat['AssetCode'] as $assetCode): ?>
		<tr>
			<td><?php echo $assetCode['id']; ?></td>
			<td><?php echo $assetCode['location_id']; ?></td>
			<td><?php echo $assetCode['asset_code']; ?></td>
			<td><?php echo $assetCode['asset_cat_id']; ?></td>
			<td><?php echo $assetCode['asset_depr_id']; ?></td>
			<td><?php echo $assetCode['asset_life']; ?></td>
			<td><?php echo $assetCode['asset_desc']; ?></td>
			<td><?php echo $assetCode['vendor_id']; ?></td>
			<td><?php echo $assetCode['asset_po_no']; ?></td>
			<td><?php echo $assetCode['grn_no_id']; ?></td>
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
