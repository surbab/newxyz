<div class="assetCodes form">
<?php echo $this->Form->create('AssetCode'); ?>
	<fieldset>
		<legend><?php echo __('Edit Asset Code'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('asset_code');
		echo $this->Form->input('asset_cat_id');
		echo $this->Form->input('asset_depr_id');
		echo $this->Form->input('asset_life');
		echo $this->Form->input('asset_desc');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('asset_po_id');
		echo $this->Form->input('grn_id');
		echo $this->Form->input('exp_life');
		echo $this->Form->input('asset_location_id');
		echo $this->Form->input('creat_on');
		echo $this->Form->input('creat_by');
		echo $this->Form->input('mod_on');
		echo $this->Form->input('mod_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssetCode.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssetCode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('action' => 'index')); ?></li>
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
