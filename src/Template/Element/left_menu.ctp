<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $this->Img->avatar($loggedUser['avatar']) ?>" class="img-circle">
            </div>
            <div class="pull-left info">
                <p><?= $loggedUser['name'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> <?= __('Online') ?></a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header"><?= __('MAIN NAVIGATION') ?></li>
            <li class="active treeview">
                <a href="<?= $leftMenu['dashboard']; ?>">
                    <i class="fa fa-dashboard"></i> <span><?= __('Dashboard') ?></span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= $leftMenu['wallets']; ?>">
                    <i class="fa fa-bank"></i><span><?= __('Wallets') ?></span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= $leftMenu['transactions']; ?>">
                    <i class="fa fa-pencil-square-o"></i>
                    <span><?= __('Transactions') ?></span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= $leftMenu['tranfers']; ?>">
                    <i class="fa fa-arrows-h"></i>
                    <span><?= __('Tranfers') ?></span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= $leftMenu['report_by_category']; ?>">
                    <i class="fa fa-pie-chart"></i>
                    <span><?= __('Report') ?></span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= $leftMenu['report_by_category']; ?>"><i class="fa fa-circle-o"></i> <?= __('Report By Categories') ?></a></li>
                    <li><a href="<?= $leftMenu['report_by_time']; ?>"><i class="fa fa-circle-o"></i> <?= __('Report By Time') ?></a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>