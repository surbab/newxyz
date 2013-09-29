<div class="partnerDeliveries index">
	<h2><?php echo __('Partner Deliveries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
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
			<th><?php echo $this->Paginator->sort('vat_tin'); ?></th>
			<th><?php echo $this->Paginator->sort('cst_no'); ?></th>
			<th><?php echo $this->Paginator->sort('exc_no'); ?></th>
			<th><?php echo $this->Paginator->sort('serv_tax_no'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_on'); ?></th>
			<th><?php echo $this->Paginator->sort('creat_by'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_on'); ?></th>
			<th><?php echo $this->Paginator->sort('mod_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($partnerDeliveries as $partnerDelivery): ?>
	<tr>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partnerDelivery['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $partnerDelivery['Partner']['id'])); ?>
		</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['add_1']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['add_2']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['post']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['city']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['district']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partnerDelivery['State']['name'], array('controller' => 'states', 'action' => 'view', $partnerDelivery['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($partnerDelivery['Country']['name'], array('controller' => 'countries', 'action' => 'view', $partnerDelivery['Country']['id'])); ?>
		</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['pin_code']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['tel_1']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['tel_2']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['fax']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['email']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['web']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['vat_tin']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['cst_no']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['exc_no']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['serv_tax_no']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['creat_on']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['creat_by']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['mod_on']); ?>&nbsp;</td>
		<td><?php echo h($partnerDelivery['PartnerDelivery']['mod_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $partnerDelivery['PartnerDelivery']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $partnerDelivery['PartnerDelivery']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $partnerDelivery['PartnerDelivery']['id']), null, __('Are you sure you want to delete # %s?', $partnerDelivery['PartnerDelivery']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Partner Delivery'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
