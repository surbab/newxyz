<div class="saleEngs index">
	<h2><?php echo __('Sale Engs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_region_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($saleEngs as $saleEng): ?>
	<tr>
		<td><?php echo h($saleEng['SaleEng']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($saleEng['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $saleEng['Employee']['ID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($saleEng['SaleRegion']['id'], array('controller' => 'sale_regions', 'action' => 'view', $saleEng['SaleRegion']['id'])); ?>
		</td>
		<td><?php echo h($saleEng['SaleEng']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($saleEng['SaleEng']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($saleEng['SaleEng']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($saleEng['SaleEng']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $saleEng['SaleEng']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $saleEng['SaleEng']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $saleEng['SaleEng']['id']), null, __('Are you sure you want to delete # %s?', $saleEng['SaleEng']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sale Eng'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Regions'), array('controller' => 'sale_regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Region'), array('controller' => 'sale_regions', 'action' => 'add')); ?> </li>
	</ul>
</div>
