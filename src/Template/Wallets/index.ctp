<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('money') ?></th>
            <th><?= __('Current') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($wallets as $wallet): ?>
            <tr>
                <td><?= $wallet->id ?></td>
                <td><?= $wallet->name ?></td>
                <td><?= $wallet->description ?></td>
                <td><?= \Cake\I18n\Number::format($wallet->money) ?></td>
                <td><?= \Cake\I18n\Number::format($wallet->money) ?></td>
                <td><?= $wallet->modified ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wallet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wallet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wallet->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>