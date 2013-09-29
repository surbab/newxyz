<div class="estiminationDets form">
<?php echo $this->Form->create('EstiminationDet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estimination Det'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('estimation_id');
		echo $this->Form->input('estim_class_id');
		echo $this->Form->input('estim_qty');
		echo $this->Form->input('uom_id');
		echo $this->Form->input('estim_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstiminationDet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EstiminationDet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estim Classes'), array('controller' => 'estim_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estim Class'), array('controller' => 'estim_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
	</ul>
</div>
