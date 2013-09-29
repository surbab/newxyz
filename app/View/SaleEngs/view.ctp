<div class="saleEngs view">
<h2><?php  echo __('Sale Eng'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($saleEng['SaleEng']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleEng['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $saleEng['Employee']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($saleEng['SaleRegion']['id'], array('controller' => 'sale_regions', 'action' => 'view', $saleEng['SaleRegion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat On'); ?></dt>
		<dd>
			<?php echo h($saleEng['SaleEng']['creat_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creat By'); ?></dt>
		<dd>
			<?php echo h($saleEng['SaleEng']['creat_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod On'); ?></dt>
		<dd>
			<?php echo h($saleEng['SaleEng']['mod_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mod By'); ?></dt>
		<dd>
			<?php echo h($saleEng['SaleEng']['mod_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale Eng'), array('action' => 'edit', $saleEng['SaleEng']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale Eng'), array('action' => 'delete', $saleEng['SaleEng']['id']), null, __('Are you sure you want to delete # %s?', $saleEng['SaleEng']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Engs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Eng'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sale Regions'), array('controller' => 'sale_regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale Region'), array('controller' => 'sale_regions', 'action' => 'add')); ?> </li>
	</ul>
</div>
