<div class="controls view">
<h2><?php  echo __('Control'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($control['Control']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dept'); ?></dt>
		<dd>
			<?php echo $this->Html->link($control['Dept']['name'], array('controller' => 'depts', 'action' => 'view', $control['Dept']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($control['Control']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Control'), array('action' => 'edit', $control['Control']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Control'), array('action' => 'delete', $control['Control']['id']), null, __('Are you sure you want to delete # %s?', $control['Control']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Depts'), array('controller' => 'depts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dept'), array('controller' => 'depts', 'action' => 'add')); ?> </li>
	</ul>
</div>
