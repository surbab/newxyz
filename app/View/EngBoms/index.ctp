<div class="engBoms index">
	<h2><?php echo __('Eng Boms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_code_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bom_rev'); ?></th>
			<th><?php echo $this->Paginator->sort('bom_rev_date'); ?></th>
			<th><?php echo $this->Paginator->sort('bom_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('bom_activ'); ?></th>
			<th><?php echo $this->Paginator->sort('eng_chang_note'); ?></th>
			<th><?php echo $this->Paginator->sort('eng_chang_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('approval'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($engBoms as $engBom): ?>
	<tr>
		<td><?php echo h($engBom['EngBom']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($engBom['ItemCode']['id'], array('controller' => 'item_codes', 'action' => 'view', $engBom['ItemCode']['id'])); ?>
		</td>
		<td><?php echo h($engBom['EngBom']['bom_rev']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['bom_rev_date']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['bom_desc']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['bom_activ']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['eng_chang_note']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['eng_chang_desc']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['approval']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($engBom['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $engBom['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($engBom['EngBom']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($engBom['EngBom']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $engBom['EngBom']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $engBom['EngBom']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $engBom['EngBom']['id']), null, __('Are you sure you want to delete # %s?', $engBom['EngBom']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Eng Bom'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Codes'), array('controller' => 'item_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Code'), array('controller' => 'item_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eng Bom Dets'), array('controller' => 'eng_bom_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eng Bom Det'), array('controller' => 'eng_bom_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
