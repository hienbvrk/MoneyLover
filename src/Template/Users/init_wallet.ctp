<div class="login-box">
    <div class="login-logo">
      <?= $this->Html->link('<b>Money Lover</b>', '#', ['escape' => false]); ?>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><?= __('Initialize the wallet and categories') ?></p>

        <?= $this->Flash->render() ?>
        <?php $this->Form->templates($form_templates['loginForm']); ?>

        <?php
        echo $this->Form->create(null, ['url' => ['action' => 'initWallet'], 'type' => 'post']);

        echo $this->Form->input('Wallet.name', [
            'class' => 'form-control',
            'placeholder' => __('Name of Wallet'),
            'templateVars' => ['glyphicon' => '<span class="glyphicon glyphicon-piggy-bank form-control-feedback"></span>']]);
        ?>
        <hr/>
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-xs-8">
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= $this->Form->submit(__('Install'), ['class' => 'btn btn-primary btn-block btn-flat']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?= $this->Form->end() ?>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
