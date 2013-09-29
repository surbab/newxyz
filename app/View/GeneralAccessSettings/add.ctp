<div class="generalAccessSettings form">
<?php echo $this->Form->create('GeneralAccessSetting'); ?>
<FIELDSET>
  <table cellpadding="0" cellspacing="0">
		<legend><?php echo __('Add General Access Setting'); ?></legend>

	</tr>
	<?php foreach ($generalAccessSettings as $generalAccessSettings): ?>
	<tr>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($generalAccessSetting['UserGroup']['userg_name'], array('controller' => 'user_groups', 'action' => 'view', $generalAccessSetting['UserGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($generalAccessSetting['Control']['name'], array('controller' => 'controls', 'action' => 'view', $generalAccessSetting['Control']['id'])); ?>
		</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['create']); ?>&nbsp;</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['read']); ?>&nbsp;</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['update']); ?>&nbsp;</td>
		<td><?php echo h($generalAccessSetting['GeneralAccessSetting']['delete']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $generalAccessSetting['GeneralAccessSetting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $generalAccessSetting['GeneralAccessSetting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $generalAccessSetting['GeneralAccessSetting']['id']), null, __('Are you sure you want to delete # %s?', $generalAccessSetting['GeneralAccessSetting']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>




<tr>

	<TH><?php   echo $this->Form->input('user_group_id');?> </tH><th>
	<?php	echo $this->Form->input('control_id');?>  </th><th>
	<?php	echo $this->Form->input('create'); ?> </th><th>
	<?php	echo $this->Form->input('read'); ?>  </th><th>
	<?php	echo $this->Form->input('update');?>  </th><th>
	<?php	echo $this->Form->input('delete');?>  </th><th>

</td></tr>
	</table>
	</FIELDSET>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List General Access Settings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Controls'), array('controller' => 'controls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Control'), array('controller' => 'controls', 'action' => 'add')); ?> </li>
	</ul>
</div>
