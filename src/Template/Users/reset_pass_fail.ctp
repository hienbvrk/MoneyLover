<div class="login-box">
    <div class="login-logo">
      <?= $this->Html->link('<b>Money Lover</b>', ['controller' => 'users', 'action' => 'login', '_full' => true], ['escape' => false]); ?>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="callout callout-danger">
            <h4>Can't reset password.</h4>
            <p>Link reset expired or incorrect. Please reset again <?= $this->Html->link(__('here'), ['action' => 'forgotPass', '_full' => true], ['escape' => false]); ?></p>
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
