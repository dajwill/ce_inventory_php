<div class="checkOuts index">
	<h2><?php echo __('Check Outs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('check_out_date'); ?></th>
			<th><?php echo $this->Paginator->sort('return_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($checkOuts as $checkOut): ?>
	<tr>
		<td><?php echo h($checkOut['CheckOut']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($checkOut['User']['email'], array('controller' => 'users', 'action' => 'view', $checkOut['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($checkOut['Item']['name'], array('controller' => 'items', 'action' => 'view', $checkOut['Item']['id'])); ?>
		</td>
		<td><?php echo h($checkOut['CheckOut']['check_out_date']); ?>&nbsp;</td>
		<td><?php echo h($checkOut['CheckOut']['return_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $checkOut['CheckOut']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $checkOut['CheckOut']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $checkOut['CheckOut']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $checkOut['CheckOut']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Check Out'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
