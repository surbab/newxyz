<div class="matIssueDets index">
	<h2><?php echo __('Mat Issue Dets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mat_issue_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('qty'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($matIssueDets as $matIssueDet): ?>
	<tr>
		<td><?php echo h($matIssueDet['MatIssueDet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($matIssueDet['MatIssue']['id'], array('controller' => 'mat_issues', 'action' => 'view', $matIssueDet['MatIssue']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($matIssueDet['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $matIssueDet['ItemCode']['id'])); ?>
		</td>
		<td><?php echo h($matIssueDet['MatIssueDet']['qty']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $matIssueDet['MatIssueDet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $matIssueDet['MatIssueDet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $matIssueDet['MatIssueDet']['id']), null, __('Are you sure you want to delete # %s?', $matIssueDet['MatIssueDet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mat Issues'), array('controller' => 'mat_issues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue'), array('controller' => 'mat_issues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
	</ul>
</div>
