<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?= $this->Url->build('/'); ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span>TOP</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-fw fa-desktop"></i>
                  <span>メニュー</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <?php $link = []; ?>
                    <?= $this->element('sidebar_link', ['link' => $link]); ?>
                </ul>
            </li>
        </ul>
    </section>
</aside>