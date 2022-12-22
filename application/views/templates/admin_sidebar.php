  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/out..png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Admin</li>
        <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'DataUser' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/DataUser'); ?>">
            <i class="fa fa-group"></i> <span>Data User</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'DataPresiden' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/DataPresiden'); ?>">
            <i class="bi bi-people-fill"></i> <span style="margin-left: 6px;">Data CAPRES</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'VisiMisi' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/VisiMisi'); ?>">
            <i class="fa fa-id-card"></i> <span>Visi & Misi</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'suara' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/suara'); ?>">
            <i class="fa fa-envelope-open"></i> <span>Suara</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'logout' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('auth/logout'); ?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">