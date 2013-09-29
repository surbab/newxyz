<div class="estimClasses view">
<h2><?php  echo __('Estim Class'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desc'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Active'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['class_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimClass['Uom']['id'], array('controller' => 'uoms', 'action' => 'view', $estimClass['Uom']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($estimClass['EstimClass']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estim Class'), array('action' => 'edit', $estimClass['EstimClass']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estim Class'), array('action' => 'delete', $estimClass['EstimClass']['id']), null, __('Are you sure you want to delete # %s?', $estimClass['EstimClass']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estim Classes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estim Class'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uoms'), array('controller' => 'uoms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uom'), array('controller' => 'uoms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimination Dets'), array('controller' => 'estimination_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estimination Dets'); ?></h3>
	<?php if (!empty($estimClass['EstiminationDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estimation Id'); ?></th>
		<th><?php echo __('Estim Class Id'); ?></th>
		<th><?php echo __('Estim Qty'); ?></th>
		<th><?php echo __('Uom Id'); ?></th>
		<th><?php echo __('Estim Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estimClass['EstiminationDet'] as $estiminationDet): ?>
		<tr>
			<td><?php echo $estiminationDet['id']; ?></td>
			<td><?php echo $estiminationDet['estimation_id']; ?></td>
			<td><?php echo $estiminationDet['estim_class_id']; ?></td>
			<td><?php echo $estiminationDet['estim_qty']; ?></td>
			<td><?php echo $estiminationDet['uom_id']; ?></td>
			<td><?php echo $estiminationDet['estim_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estimination_dets', 'action' => 'view', $estiminationDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estimination_dets', 'action' => 'edit', $estiminationDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estimination_dets', 'action' => 'delete', $estiminationDet['id']), null, __('Are you sure you want to delete # %s?', $estiminationDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estimination Det'), array('controller' => 'estimination_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
