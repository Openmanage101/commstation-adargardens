<div class="messages view">
<h2><?php echo __('Message'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($message['Message']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($message['Message']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($message['Message']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($message['Message']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($message['Message']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message'), array('action' => 'edit', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Message'), array('action' => 'delete', $message['Message']['id']), array(), __('Are you sure you want to delete # %s?', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Schedules'); ?></h3>
	<?php if (!empty($message['MessageSchedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Schedule Message Id'); ?></th>
		<th><?php echo __('Interval Months'); ?></th>
		<th><?php echo __('Last Distribution'); ?></th>
		<th><?php echo __('Next Distribution'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($message['MessageSchedule'] as $messageSchedule): ?>
		<tr>
			<td><?php echo $messageSchedule['id']; ?></td>
			<td><?php echo $messageSchedule['schedule_message_id']; ?></td>
			<td><?php echo $messageSchedule['interval_months']; ?></td>
			<td><?php echo $messageSchedule['last_distribution']; ?></td>
			<td><?php echo $messageSchedule['next_distribution']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schedules', 'action' => 'view', $messageSchedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schedules', 'action' => 'edit', $messageSchedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schedules', 'action' => 'delete', $messageSchedule['id']), array(), __('Are you sure you want to delete # %s?', $messageSchedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
