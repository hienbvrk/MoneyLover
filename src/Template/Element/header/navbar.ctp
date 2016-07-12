<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?= $this->Img->avatar($loggedUser['avatar']) ?>" class="user-image">
                    <span class="hidden-xs"><?= $loggedUser['name'] ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="<?= $this->Img->avatar($loggedUser['avatar']) ?>" class="img-circle">

                        <p>
                          <?= $loggedUser['name'] ?>
                            <small><?php echo __('Member since {0}', date('D, M Y', strtotime($loggedUser['created']))); ?></small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                          <?= $this->Html->link(__('Profile'), ['controller' => 'users', 'action' => 'profile', '_full' => true], ['escape' => false, 'class' => 'btn btn-default btn-flat']); ?>
                        </div>
                        <div class="pull-right">
                            <?= $this->Html->link(__('Sign out'), ['controller' => 'users', 'action' => 'logout', '_full' => true], ['escape' => false, 'class' => 'btn btn-default btn-flat']); ?>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>