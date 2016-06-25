<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Common Settings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="commonSettings form large-9 medium-8 columns content">
    <?= $this->Form->create($commonSetting) ?>
    <fieldset>
        <legend><?= __('Add Common Setting') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('key');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
