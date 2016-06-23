<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tranfer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tranfer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tranfers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tranfers form large-9 medium-8 columns content">
    <?= $this->Form->create($tranfer) ?>
    <fieldset>
        <legend><?= __('Edit Tranfer') ?></legend>
        <?php
            echo $this->Form->input('from_wallet_id');
            echo $this->Form->input('to_wallet_id');
            echo $this->Form->input('tranfer_date');
            echo $this->Form->input('money');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
