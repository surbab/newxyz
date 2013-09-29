<div class="creditLimits view">
<h2><?php  echo __('Credit Limit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($creditLimit['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $creditLimit['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Limit'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['credit_limit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['approval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approval Register'); ?></dt>
		<dd>
			<?php echo $this->Html->link($creditLimit['ApprovalRegister']['id'], array('controller' => 'approval_registers', 'action' => 'view', $creditLimit['ApprovalRegister']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($creditLimit['CreditLimit']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credit Limit'), array('action' => 'edit', $creditLimit['CreditLimit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credit Limit'), array('action' => 'delete', $creditLimit['CreditLimit']['id']), null, __('Are you sure you want to delete # %s?', $creditLimit['CreditLimit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Credit Limits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credit Limit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Approval Registers'), array('controller' => 'approval_registers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval Register'), array('controller' => 'approval_registers', 'action' => 'add')); ?> </li>
	</ul>
</div>
