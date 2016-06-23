<div class="login-box">
    <div class="login-logo">
      <?= $this->Html->link('<b>Money Lover</b>', ['controller' => 'users', 'action' => 'login', '_full' => true], ['escape' => false]); ?>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        
        <?= $this->Flash->render() ?>
        <?php $this->Form->templates($form_templates['loginForm']); ?>

        <?php
        echo $this->Form->create(null, ['url' => ['action' => 'login'], 'type' => 'post']);

        echo $this->Form->input('email', [
            'class' => 'form-control',
            'placeholder' => __('Email'),
            'templateVars' => ['glyphicon' => '<span class="glyphicon glyphicon-envelope form-control-feedback"></span>']]);

        echo $this->Form->input('password', [
            'class' => 'form-control',
            'placeholder' => __('Password'),
            'templateVars' => ['glyphicon' => '<span class="glyphicon glyphicon-lock form-control-feedback"></span>']]);
        ?>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= $this->Form->submit(__('Sign In'), ['class' => 'btn btn-primary btn-block btn-flat']) ?>
            </div>
            <!-- /.col -->
        </div>
        <?= $this->Form->end() ?>
        <!-- /.social-auth-links -->

        <?= $this->Html->link(__('I forgot my password'), ['action' => 'forgotPass', '_full' => true], ['escape' => false]); ?>
        <br>
        <?= $this->Html->link(__('Register a new membership'), ['action' => 'add', '_full' => true], ['escape' => false]); ?>
    </div>
    <!-- /.login-box-body -->
</div>
