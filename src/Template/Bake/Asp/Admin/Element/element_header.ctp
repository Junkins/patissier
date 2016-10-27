<header class="main-header">
    <a href="<?= empty($baseUrl) ? '/' : $baseUrl ?>" class="logo">
        <span class="logo-mini"><b>T</b></span>
        <span class="logo-lg">test</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="group-name">test</li>
                <li class="full-name">test test</li>
                <li class="dropdown user user-menu">
                    <?= $this->Html->link(
                        __('Logout'),
                        [
                            'controller' => 'users',
                            'action' => 'logout'
                        ]) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>