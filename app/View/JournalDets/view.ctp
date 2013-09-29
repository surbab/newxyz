<div class="journalDets view">
<h2><?php  echo __('Journal Det'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($journalDet['JournalDet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Journal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journalDet['Journal']['id'], array('controller' => 'journals', 'action' => 'view', $journalDet['Journal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account By Id'); ?></dt>
		<dd>
			<?php echo h($journalDet['JournalDet']['account_by_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account To Id'); ?></dt>
		<dd>
			<?php echo h($journalDet['JournalDet']['account_to_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($journalDet['JournalDet']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journal Det'), array('action' => 'edit', $journalDet['JournalDet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journal Det'), array('action' => 'delete', $journalDet['JournalDet']['id']), null, __('Are you sure you want to delete # %s?', $journalDet['JournalDet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journal Dets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal Det'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journals'), array('controller' => 'journals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journal'), array('controller' => 'journals', 'action' => 'add')); ?> </li>
	</ul>
</div>
