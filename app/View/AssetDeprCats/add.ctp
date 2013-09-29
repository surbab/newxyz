<div class="assetDeprCats form">
<?php echo $this->Form->create('AssetDeprCat'); ?>
	<fieldset>
		<legend><?php echo __('Add Asset Depr Cat'); ?></legend>
	<?php
		echo $this->Form->input('asset_depr');
		echo $this->Form->input('asset_desc');
		echo $this->Form->input('asset_depreciation');
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

		<li><?php echo $this->Html->link(__('List Asset Depr Cats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Asset Deprs'), array('controller' => 'asset_deprs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset Depr'), array('controller' => 'asset_deprs', 'action' => 'add')); ?> </li>
	</ul>
</div>
