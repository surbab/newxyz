<div class="partnerDeliveries view">
<h2><?php  echo __('Partner Delivery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partnerDelivery['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $partnerDelivery['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 1'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['add_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add 2'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['add_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['post']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partnerDelivery['State']['name'], array('controller' => 'states', 'action' => 'view', $partnerDelivery['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partnerDelivery['Country']['name'], array('controller' => 'countries', 'action' => 'view', $partnerDelivery['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin Code'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['pin_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 1'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['tel_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel 2'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['tel_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vat Tin'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['vat_tin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cst No'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['cst_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exc No'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['exc_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serv Tax No'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['serv_tax_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($partnerDelivery['PartnerDelivery']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partner Delivery'), array('action' => 'edit', $partnerDelivery['PartnerDelivery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partner Delivery'), array('action' => 'delete', $partnerDelivery['PartnerDelivery']['id']), null, __('Are you sure you want to delete # %s?', $partnerDelivery['PartnerDelivery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partner Deliveries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner Delivery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
