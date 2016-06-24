<div class="login-box">
    <div class="login-logo">
      <?= $this->Html->link('<b>Money Lover</b>', ['controller' => 'users', 'action' => 'login', '_full' => true], ['escape' => false]); ?>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <?php if($success) { ?>
        <div class="callout callout-success">
            <h4>The account is active!</h4>
            <p>Please click <?= $this->Html->link(__('here'), ['action' => 'login', '_full' => true], ['escape' => false]); ?> to sign in. </p>
        </div>
        <?php } else {?>
        <div class="callout callout-danger">
            <h4>Can't active account.</h4>
            <p>Link active expired or incorrect. Please register again <?= $this->Html->link(__('here'), ['action' => 'add', '_full' => true], ['escape' => false]); ?></p>
        </div>
        <?php } ?>
    </div>
    <!-- /.login-box-body -->
</div>
