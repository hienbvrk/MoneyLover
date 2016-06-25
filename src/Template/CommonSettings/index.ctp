<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Common Setting'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commonSettings index large-9 medium-8 columns content">
    <h3><?= __('Common Settings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('key') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commonSettings as $commonSetting): ?>
            <tr>
                <td><?= $this->Number->format($commonSetting->id) ?></td>
                <td><?= h($commonSetting->name) ?></td>
                <td><?= h($commonSetting->key) ?></td>
                <td><?= h($commonSetting->created) ?></td>
                <td><?= h($commonSetting->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $commonSetting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commonSetting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commonSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commonSetting->id)]) ?>
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
