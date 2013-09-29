<div class="estiminationDets view">
<h2><?php  echo __('Estimination Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estiminationDet['EstiminationDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estimation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estiminationDet['Estimation']['id'], array('controller' => 'estimations', 'action' => 'view', $estiminationDet['Estimation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estim Class'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estiminationDet['EstimClass']['name'], array('controller' => 'estim_classes', 'action' => 'view', $estiminationDet['EstimClass']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estim Qty'); ?></dt>
		<dd>
			<?php echo h($estiminationDet['EstiminationDet']['estim_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estiminationDet['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $estiminationDet['Uom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estim Value'); ?></dt>
		<dd>
			<?php echo h($estiminationDet['EstiminationDet']['estim_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estimination Det'), array('action' => 'edit', $estiminationDet['EstiminationDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estimination Det'), array('action' => 'delete', $estiminationDet['EstiminationDet']['id']), null, __('Are you sure you want to delete # %s?', $estiminationDet['EstiminationDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimations'), array('controller' => 'estimations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimation'), array('controller' => 'estimations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estim Classes'), array('controller' => 'estim_classes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estim Class'), array('controller' => 'estim_classes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
	</ul>
</div>
