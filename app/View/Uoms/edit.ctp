<div class="uoms form">
<?php echo $this->Form->create('Uom'); ?>
	<fieldset>
		<legend><?php echo __('Edit Uom'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('uom');
		echo $this->Form->input('asset_desc');
		echo $this->Form->input('uom_symbol');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Uom.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Uom.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('controller' => 'estimination_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Po Dets'), array('controller' => 'po_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Po Det'), array('controller' => 'po_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quote Dets'), array('controller' => 'quote_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote Det'), array('controller' => 'quote_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List So Dets'), array('controller' => 'so_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New So Det'), array('controller' => 'so_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
