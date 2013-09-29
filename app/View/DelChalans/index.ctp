<div class="delChalans index">
	<h2><?php echo __('Del Chalans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('del_chal_no'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sales_order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('delv_date'); ?></th>
			<th><?php echo $this->Paginator->sort('del_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('del_approval'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($delChalans as $delChalan): ?>
	<tr>
		<td><?php echo h($delChalan['DelChalan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($delChalan['Location']['name'], array('controller' => 'locations', 'action' => 'view', $delChalan['Location']['id'])); ?>
		</td>
		<td><?php echo h($delChalan['DelChalan']['del_chal_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($delChalan['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $delChalan['Partner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($delChalan['SalesOrder']['id'], array('controller' => 'sales_orders', 'action' => 'view', $delChalan['SalesOrder']['id'])); ?>
		</td>
		<td><?php echo h($delChalan['DelChalan']['delv_date']); ?>&nbsp;</td>
		<td><?php echo h($delChalan['DelChalan']['del_desc']); ?>&nbsp;</td>
		<td><?php echo h($delChalan['DelChalan']['del_approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($delChalan['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $delChalan['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($delChalan['DelChalan']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($delChalan['DelChalan']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($delChalan['DelChalan']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($delChalan['DelChalan']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $delChalan['DelChalan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $delChalan['DelChalan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $delChalan['DelChalan']['id']), null, __('Are you sure you want to delete # %s?', $delChalan['DelChalan']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Orders'), array('controller' => 'sales_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Order'), array('controller' => 'sales_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalan Dets'), array('controller' => 'del_chalan_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan Det'), array('controller' => 'del_chalan_dets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mould Rework Histories'), array('controller' => 'mould_rework_histories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mould Rework History'), array('controller' => 'mould_rework_histories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Invs'), array('controller' => 'sale_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
