<?php $this->form(); ?>
<div class="generalAccessSettings index">
	<h2><?php echo __('General Access Settings'); ?></h2>


    <!--<table cellpadding="0" cellspacing="0">
	<tr>

	</tr>
	
	<?php foreach ($generalAccessSettings as $generalAccessSetting): ?>
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
<<?php endforeach; ?>
	</table> -->
	<?php echo $this->Form->select('groups', $groups, array(

)); ?>
	<table border=1>


          <?php foreach($controls as $key => $val) : ?>
<tr>

     <td><?php echo $val; ?></td>

     <td><?php // echo $this->Form->checkbox('action', array('multiple' =>true));?>
     <?php  $options = array(
    '1' => 'Create',
    '2' => 'Read',
    '3' => 'Update',
    '4' => 'Delete'
);
echo $this->Form->select('Action.'.$key, $options, array(
    'multiple' => 'checkbox'
));
?>
     </td>

</tr>

	<?php endforeach; ?>
	<p>
</div>
</form>
