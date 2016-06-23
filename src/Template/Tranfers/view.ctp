<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tranfer'), ['action' => 'edit', $tranfer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tranfer'), ['action' => 'delete', $tranfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tranfer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tranfers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tranfer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tranfers view large-9 medium-8 columns content">
    <h3><?= h($tranfer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tranfer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('From Wallet Id') ?></th>
            <td><?= $this->Number->format($tranfer->from_wallet_id) ?></td>
        </tr>
        <tr>
            <th><?= __('To Wallet Id') ?></th>
            <td><?= $this->Number->format($tranfer->to_wallet_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Money') ?></th>
            <td><?= $this->Number->format($tranfer->money) ?></td>
        </tr>
        <tr>
            <th><?= __('Tranfer Date') ?></th>
            <td><?= h($tranfer->tranfer_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tranfer->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tranfer->modified) ?></td>
        </tr>
    </table>
</div>
