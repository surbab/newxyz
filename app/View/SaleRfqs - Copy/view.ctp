<div class="saleRfqs view">
<h2><?php  echo __('Sale Rfq'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleRfq['Location']['name'], array('controller' => 'locations', 'action' => 'view', $saleRfq['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfq No'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['rfq_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleRfq['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $saleRfq['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rfq Date'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['rfq_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleRfq['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $saleRfq['FinYear']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleRfq['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $saleRfq['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($saleRfq['SaleRfq']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale Rfq'), array('action' => 'edit', $saleRfq['SaleRfq']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale Rfq'), array('action' => 'delete', $saleRfq['SaleRfq']['id']), null, __('Are you sure you want to delete # %s?', $saleRfq['SaleRfq']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Rfqs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Rfq'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
