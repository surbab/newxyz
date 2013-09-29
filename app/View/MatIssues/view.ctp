<div class="matIssues view">
<h2><?php  echo __('Mat Issue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matIssue['Location']['name'], array('controller' => 'locations', 'action' => 'view', $matIssue['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mat Issue No'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['mat_issue_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matIssue['WorkOrder']['id'], array('controller' => 'work_orders', 'action' => 'view', $matIssue['WorkOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Date'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['issue_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Desc'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['issue_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Location'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['issue_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matIssue['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $matIssue['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($matIssue['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $matIssue['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($matIssue['MatIssue']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mat Issue'), array('action' => 'edit', $matIssue['MatIssue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mat Issue'), array('action' => 'delete', $matIssue['MatIssue']['id']), null, __('Are you sure you want to delete # %s?', $matIssue['MatIssue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Work Orders'), array('controller' => 'work_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work Order'), array('controller' => 'work_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mat Issue Dets'), array('controller' => 'mat_issue_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('controller' => 'mat_issue_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mat Issue Dets'); ?></h3>
	<?php if (!empty($matIssue['MatIssueDet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mat Issue Id'); ?></th>
		<th><?php echo __('Item Code Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($matIssue['MatIssueDet'] as $matIssueDet): ?>
		<tr>
			<td><?php echo $matIssueDet['id']; ?></td>
			<td><?php echo $matIssueDet['mat_issue_id']; ?></td>
			<td><?php echo $matIssueDet['item_code_id']; ?></td>
			<td><?php echo $matIssueDet['qty']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mat_issue_dets', 'action' => 'view', $matIssueDet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mat_issue_dets', 'action' => 'edit', $matIssueDet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mat_issue_dets', 'action' => 'delete', $matIssueDet['id']), null, __('Are you sure you want to delete # %s?', $matIssueDet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mat Issue Det'), array('controller' => 'mat_issue_dets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
