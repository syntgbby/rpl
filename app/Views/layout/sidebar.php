<?php
$uri = service('uri');
?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?= $uri->getSegment(1) === '' ? '' : 'collapsed' ?>" href="<?= base_url('dashboard') ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link <?= in_array($uri->getSegment(1), ['Assesor-List-Calon-RPL']) ? '' : 'collapsed' ?>" 
         data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>RPL</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse <?= in_array($uri->getSegment(1), ['Assesor-List-Calon-RPL']) ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('Assesor-List-Calon-RPL') ?>" class="<?= $uri->getSegment(1) === 'Assesor-List-Calon-RPL' ? 'active' : '' ?>">
            <i class="bi bi-circle"></i><span>Calon RPL</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link <?= $uri->getSegment(1) === 'users-profile' ? '' : 'collapsed' ?>" href="<?= base_url('users-profile') ?>">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

  </ul>
</aside><!-- End Sidebar -->
