<div class="partners index">
	<h2><?php echo __('Partners'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('add_1'); ?></th>
			<th><?php echo $this->Paginator->sort('add_2'); ?></th>
			<th><?php echo $this->Paginator->sort('post'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pin_code'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('tel_2'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('web'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_tel_1'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_email'); ?></th>
			<th><?php echo $this->Paginator->sort('vat_tin'); ?></th>
			<th><?php echo $this->Paginator->sort('cst_no'); ?></th>
			<th><?php echo $this->Paginator->sort('exc_no'); ?></th>
			<th><?php echo $this->Paginator->sort('serv_tax_no'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_name'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_branch'); ?></th>
			<th><?php echo $this->Paginator->sort('ac_no'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_ifsc'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_req'); ?></th>
			<th><?php echo $this->Paginator->sort('approved'); ?></th>
			<th><?php echo $this->Paginator->sort('approval_register_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cust'); ?></th>
			<th><?php echo $this->Paginator->sort('sup'); ?></th>
			<th><?php echo $this->Paginator->sort('agent'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($partners as $partner): ?>
	<tr>
		<td><?php echo h($partner['Partner']['id']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['name']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['add_1']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['add_2']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['post']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['city']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['district']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partner['State']['name'], array('controller' => 'states', 'action' => 'view', $partner['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($partner['Country']['name'], array('controller' => 'countries', 'action' => 'view', $partner['Country']['id'])); ?>
		</td>
		<td><?php echo h($partner['Partner']['pin_code']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['tel_1']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['tel_2']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['fax']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['email']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['web']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['partner_contact']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['partner_tel_1']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['partner_email']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['vat_tin']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['cst_no']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['exc_no']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['serv_tax_no']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['bank_branch']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['ac_no']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['bank_ifsc']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['approval_req']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['approved']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partner['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $partner['ApprovalRegister']['id'])); ?>
		</td>
		<td><?php echo h($partner['Partner']['cust']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['sup']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['agent']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $partner['Partner']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $partner['Partner']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $partner['Partner']['id']), null, __('Are you sure you want to delete # %s?', $partner['Partner']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Del Chalans'), array('controller' => 'del_chalans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Del Chalan'), array('controller' => 'del_chalans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partner Deliveries'), array('controller' => 'partner_deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner Delivery'), array('controller' => 'partner_deliveries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Agents'), array('controller' => 'sale_agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Agent'), array('controller' => 'sale_agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('controller' => 'sale_rfqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('controller' => 'sale_rfqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Invs'), array('controller' => 'sale_invs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Inv'), array('controller' => 'sale_invs', 'action' => 'add')); ?> </li>
	</ul>
</div>
