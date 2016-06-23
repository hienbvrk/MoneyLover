<div class="register-box">
    <div class="register-logo">
      <?= $this->Html->link(__('<b>Money Lover</b>'), ['controller' => 'users', 'action' => 'login', '_full' => true], ['escape' => false]); ?>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <?= $this->Flash->render() ?>

        <?php $this->Form->templates($form_templates['loginForm']); ?>

        <?php
        echo $this->Form->create($user, ['url' => ['action' => 'register'], 'type' => 'post']);

        echo $this->Form->input('name', [
            'class' => 'form-control',
            'placeholder' => __('Name'),
            'templateVars' => ['glyphicon' => '<span class="glyphicon glyphicon-user form-control-feedback"></span>']]);
        
        echo $this->Form->input('email', [
            'class' => 'form-control',
            'placeholder' => __('Email'),
            'templateVars' => ['glyphicon' => '<span class="glyphicon glyphicon-envelope form-control-feedback"></span>']]);

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
            <div class="col-xs-8">
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= $this->Form->submit(__('Register'), ['class' => 'btn btn-primary btn-block btn-flat']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?= $this->Form->end() ?>
        
        <?= $this->Html->link(__('I already have a membership'), ['controller' => 'users', 'action' => 'login', '_full' => true], ['escape' => false]); ?>
    </div>
    <!-- /.form-box -->
</div>