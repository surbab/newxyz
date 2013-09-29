<div class="approvals view">
<h2><?php  echo __('Approval'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($approval['Approval']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($approval['Approval']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Approval'), array('action' => 'edit', $approval['Approval']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Approval'), array('action' => 'delete', $approval['Approval']['id']), null, __('Are you sure you want to delete # %s?', $approval['Approval']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Approvals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Approval'), array('action' => 'add')); ?> </li>
	</ul>
</div>
