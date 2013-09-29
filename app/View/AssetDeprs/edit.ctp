<div class="assetDeprs form">
<?php echo $this->Form->create('AssetDepr'); ?>
	<fieldset>
		<legend><?php echo __('Edit Asset Depr'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('asset_depreciation');
		echo $this->Form->input('asset_desc');
		echo $this->Form->input('asset_depr_cat_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssetDepr.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssetDepr.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Deprs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Depr Cats'), array('controller' => 'asset_depr_cats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr Cat'), array('controller' => 'asset_depr_cats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asset Codes'), array('controller' => 'asset_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Code'), array('controller' => 'asset_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
