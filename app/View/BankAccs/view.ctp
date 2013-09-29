<div class="bankAccs view">
<h2><?php  echo __('Bank Acc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bankAcc['BankAcc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bankAcc['Location']['name'], array('controller' => 'locations', 'action' => 'view', $bankAcc['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vouch Type'); ?></dt>
		<dd>
			<?php echo h($bankAcc['BankAcc']['vouch_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref Id'); ?></dt>
		<dd>
			<?php echo h($bankAcc['BankAcc']['ref_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trans Date'); ?></dt>
		<dd>
			<?php echo h($bankAcc['BankAcc']['trans_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit'); ?></dt>
		<dd>
			<?php echo h($bankAcc['BankAcc']['credit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Debit'); ?></dt>
		<dd>
			<?php echo h($bankAcc['BankAcc']['debit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bankAcc['FinYear']['id'], array('controller' => 'fin_years', 'action' => 'view', $bankAcc['FinYear']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bank Acc'), array('action' => 'edit', $bankAcc['BankAcc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bank Acc'), array('action' => 'delete', $bankAcc['BankAcc']['id']), null, __('Are you sure you want to delete # %s?', $bankAcc['BankAcc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bank Accs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bank Acc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
	</ul>
</div>
