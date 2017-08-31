
<li class="nav-item <?php echo ($menu == 'basic') ? 'active' : ''; ?>" data-toggle="tooltip" data-placement="right" title="Dashboard">
  <a class="nav-link" href="<?php echo site_url('basic') ?>">
    <i class="fa fa-fw fa-map"></i>
    <span class="nav-link-text">
      Basics Maps</span>
  </a>
</li>
<li class="nav-item <?php echo ($menu == 'marker') ? 'active' : ''; ?>" data-toggle="tooltip" data-placement="right" title="Charts">
  <a class="nav-link" href="<?php echo site_url('marker') ?>">
    <i class="fa fa-fw fa-map-marker"></i>
    <span class="nav-link-text">
      Maps with Marker</span>
  </a>
</li>
<li class="nav-item <?php echo ($menu == 'image') ? 'active' : ''; ?>" data-toggle="tooltip" data-placement="right" title="Tables">
  <a class="nav-link" href="<?php echo base_url() ?>assets/#">
    <i class="fa fa-fw fa-picture-o"></i>
    <span class="nav-link-text">
      Marker with images</span>
  </a>
</li>
