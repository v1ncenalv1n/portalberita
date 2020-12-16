<!DOCTYPE html>
<html>
<head>
	<title>Portal Berita</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css')?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
</head>	
<body>
	  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light" id="sidebar-wrapper">
      <div class="sidebar-heading">Portal Berita</div>
      <div class="list-group list-group-flush">
        <a href="<?= base_url('home'); ?>" class="list-group-item list-group-item-action bg-light">Home</a>
        <a href="<?= base_url('berita'); ?>" class="list-group-item list-group-item-action bg-light">Berita</a>
        <?php if($this->session->userdata('roles')==1):?>
        	<a href="<?= base_url('user'); ?>" class="list-group-item list-group-item-action bg-light">User</a>
    	<?php endif?>
        <a href="<?= base_url('kategori'); ?>" class="list-group-item list-group-item-action bg-dark active">Category</a>
      </div>
    </div>
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
          <button class="btn bg-dark" id="menu-toggle">
            <span class="navbar-toggler-icon"></span>
          </button>
          	<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		            <li class="nav-item active">
		              <a class="btn btn-danger" href="<?=base_url('loginadmin/logout')?>">Logout</a>
		            </li>
	        </ul>
       </nav>