<div class="login-box">
    <div class="login-logo">
      <?= $this->Html->link('<b>Money Lover</b>', ['controller' => 'users', 'action' => 'login', '_full' => true], ['escape' => false]); ?>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Input the new password to reset password</p>
        
        <?= $this->Flash->render() ?>
        <?php $this->Form->templates($form_templates['loginForm']); ?>

        <?php
        echo $this->Form->create($user, ['type' => 'post']);

        echo $this->Form->input('password', [
            'class' => 'form-control',
            'placeholder' => __('Password'),
            'templateVars' => ['glyphicon' => '<span class="glyphicon glyphicon-lock form-control-feedback"></span>']]);
        
        echo $this->Form->input('re_password', [
            'type' => 'password',
            'class' => 'form-control',
            'placeholder' => __('Retype password'),
            'templateVars' => ['glyphicon' => '<span class="glyphicon glyphicon-log-in form-control-feedback"></span>']]);
        ?>
        <div class="row">
            <div class="col-xs-7">
            </div>
            <!-- /.col -->
            <div class="col-xs-5">
                <?= $this->Form->submit(__('Reset Password'), ['class' => 'btn btn-primary btn-flat']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?= $this->Form->end() ?>
        <!-- /.social-auth-links -->

        <?= $this->Html->link(__('Back Sign up'), ['action' => 'login', '_full' => true], ['escape' => false]); ?>
        <br>
        <?= $this->Html->link(__('Register a new membership'), ['action' => 'add', '_full' => true], ['escape' => false]); ?>
    </div>
    <!-- /.login-box-body -->
</div>
