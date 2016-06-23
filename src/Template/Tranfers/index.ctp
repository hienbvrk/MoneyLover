<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tranfer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tranfers index large-9 medium-8 columns content">
    <h3><?= __('Tranfers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('from_wallet_id') ?></th>
                <th><?= $this->Paginator->sort('to_wallet_id') ?></th>
                <th><?= $this->Paginator->sort('tranfer_date') ?></th>
                <th><?= $this->Paginator->sort('money') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tranfers as $tranfer): ?>
            <tr>
                <td><?= $this->Number->format($tranfer->id) ?></td>
                <td><?= $this->Number->format($tranfer->from_wallet_id) ?></td>
                <td><?= $this->Number->format($tranfer->to_wallet_id) ?></td>
                <td><?= h($tranfer->tranfer_date) ?></td>
                <td><?= $this->Number->format($tranfer->money) ?></td>
                <td><?= h($tranfer->created) ?></td>
                <td><?= h($tranfer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tranfer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tranfer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tranfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tranfer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
