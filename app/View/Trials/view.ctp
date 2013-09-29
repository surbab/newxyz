<div class="trials view">
<h2><?php  echo __('Trial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($trial['Trial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name1'); ?></dt>
		<dd>
			<?php echo h($trial['Trial']['name1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name2'); ?></dt>
		<dd>
			<?php echo h($trial['Trial']['name2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trial'), array('action' => 'edit', $trial['Trial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trial'), array('action' => 'delete', $trial['Trial']['id']), null, __('Are you sure you want to delete # %s?', $trial['Trial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trial'), array('action' => 'add')); ?> </li>
	</ul>
</div>
