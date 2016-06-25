<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Common Setting'), ['action' => 'edit', $commonSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Common Setting'), ['action' => 'delete', $commonSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commonSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Common Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Common Setting'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commonSettings view large-9 medium-8 columns content">
    <h3><?= h($commonSetting->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($commonSetting->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Key') ?></th>
            <td><?= h($commonSetting->key) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($commonSetting->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($commonSetting->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($commonSetting->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Value') ?></h4>
        <?= $this->Text->autoParagraph(h($commonSetting->value)); ?>
    </div>
</div>
