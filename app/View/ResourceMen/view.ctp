<div class="resourceMen view">
<h2><?php  echo __('Resource Man'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resourceMan['ResourceMan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Res Nick'); ?></dt>
		<dd>
			<?php echo h($resourceMan['ResourceMan']['res_nick']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dept'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resourceMan['Dept']['name'], array('controller' => 'depts', 'action' => 'view', $resourceMan['Dept']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resourceMan['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $resourceMan['Employee']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($resourceMan['ResourceMan']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($resourceMan['ResourceMan']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($resourceMan['ResourceMan']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($resourceMan['ResourceMan']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resource Man'), array('action' => 'edit', $resourceMan['ResourceMan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resource Man'), array('action' => 'delete', $resourceMan['ResourceMan']['id']), null, __('Are you sure you want to delete # %s?', $resourceMan['ResourceMan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resource Men'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource Man'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Depts'), array('controller' => 'depts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('controller' => 'depts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wo Prod Det Men'), array('controller' => 'wo_prod_det_men', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wo Prod Det Man'), array('controller' => 'wo_prod_det_men', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Wo Prod Det Men'); ?></h3>
	<?php if (!empty($resourceMan['WoProdDetMan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Resource Man Id'); ?></th>
		<th><?php echo __('Wo Prod Id'); ?></th>
		<th><?php echo __('Resource Wc'); ?></th>
		<th><?php echo __('Tot Qty'); ?></th>
		<th><?php echo __('Qty Reject'); ?></th>
		<th><?php echo __('Qty Rework'); ?></th>
		<th><?php echo __('Qty Accept'); ?></th>
		<th><?php echo __('Creat On'); ?></th>
		<th><?php echo __('Creat By'); ?></th>
		<th><?php echo __('Mod On'); ?></th>
		<th><?php echo __('Mod By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resourceMan['WoProdDetMan'] as $woProdDetMan): ?>
		<tr>
			<td><?php echo $woProdDetMan['id']; ?></td>
			<td><?php echo $woProdDetMan['location_id']; ?></td>
			<td><?php echo $woProdDetMan['resource_man_id']; ?></td>
			<td><?php echo $woProdDetMan['wo_prod_id']; ?></td>
			<td><?php echo $woProdDetMan['resource_wc']; ?></td>
			<td><?php echo $woProdDetMan['tot_qty']; ?></td>
			<td><?php echo $woProdDetMan['qty_reject']; ?></td>
			<td><?php echo $woProdDetMan['qty_rework']; ?></td>
			<td><?php echo $woProdDetMan['qty_accept']; ?></td>
			<td><?php echo $woProdDetMan['creat_on']; ?></td>
			<td><?php echo $woProdDetMan['creat_by']; ?></td>
			<td><?php echo $woProdDetMan['mod_on']; ?></td>
			<td><?php echo $woProdDetMan['mod_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wo_prod_det_men', 'action' => 'view', $woProdDetMan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wo_prod_det_men', 'action' => 'edit', $woProdDetMan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wo_prod_det_men', 'action' => 'delete', $woProdDetMan['id']), null, __('Are you sure you want to delete # %s?', $woProdDetMan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wo Prod Det Man'), array('controller' => 'wo_prod_det_men', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
