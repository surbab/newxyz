<div class="assetLocations view">
<h2><?php  echo __('Asset Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assetLocation['Location']['name'], array('controller' => 'locations', 'action' => 'view', $assetLocation['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Location'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['asset_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Loc Code'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['asset_loc_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asset Loc Desc'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['asset_loc_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($assetLocation['AssetLocation']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asset Location'), array('action' => 'edit', $assetLocation['AssetLocation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asset Location'), array('action' => 'delete', $assetLocation['AssetLocation']['id']), null, __('Are you sure you want to delete # %s?', $assetLocation['AssetLocation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Asset Codes'); ?></h3>
	<?php if (!empty($assetLocation['AssetCode'])): ?>
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
		foreach ($assetLocation['AssetCode'] as $assetCode): ?>
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
