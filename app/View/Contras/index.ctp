<div class="contras index">
	<h2><?php echo __('Contras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('contra_no'); ?></th>
			<th><?php echo $this->Paginator->sort('contra_date'); ?></th>
			<th><?php echo $this->Paginator->sort('desc'); ?></th>
			<th><?php echo $this->Paginator->sort('tot_value'); ?></th>
			<th><?php echo $this->Paginator->sort('fin_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contras as $contra): ?>
	<tr>
		<td><?php echo h($contra['Contra']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contra['Location']['name'], array('controller' => 'locations', 'action' => 'view', $contra['Location']['id'])); ?>
		</td>
		<td><?php echo h($contra['Contra']['contra_no']); ?>&nbsp;</td>
		<td><?php echo h($contra['Contra']['contra_date']); ?>&nbsp;</td>
		<td><?php echo h($contra['Contra']['desc']); ?>&nbsp;</td>
		<td><?php echo h($contra['Contra']['tot_value']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contra['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $contra['FinYear']['id'])); ?>
		</td>
		<td><?php echo h($contra['Contra']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($contra['Contra']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($contra['Contra']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($contra['Contra']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contra['Contra']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contra['Contra']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contra['Contra']['id']), null, __('Are you sure you want to delete # %s?', $contra['Contra']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contra'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contra Dets'), array('controller' => 'contra_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra Det'), array('controller' => 'contra_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
