<div class="left-side-bar">
		<div class="brand-logo">
			<a href="#">
				<!-- <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo"> -->
                <marquee behavior="alternate" scrollamount="5"><h4 class="text-light"><i class="fa fa-plus mr-2"></i>Klinik Fitria</h4></marquee>
                <!-- <h4 class="text-light"><i class="fa fa-plus mr-2"></i>Klinik Fitria</h4> -->
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
					<a href="<?= base_url('klinik')?>" class="dropdown-toggle no-arrow <?php if($this->uri->segment(1) == "klinik"){echo "active";}?>">
						<span class="micon dw dw-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('pasien')?>" class="dropdown-toggle no-arrow <?php if($this->uri->segment(1) == "pasien"){echo "active";}?>">
							<span class="micon fa fa-wheelchair" aria-hidden="true"></span><span class="mtext">Pasien</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('tindakan')?>" class="dropdown-toggle no-arrow <?php if($this->uri->segment(1) == "tindakan"){echo "active";}?>">
						<span class="micon fa fa-stethoscope" aria-hidden="true"></span><span class="mtext">Tindakan</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('obat')?>" class="dropdown-toggle no-arrow <?php if($this->uri->segment(1) == "obat"){echo "active";}?>">
						<span class="micon dw dw-skateboard"></span><span class="mtext">Obat</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('rawat')?>" class="dropdown-toggle no-arrow <?php if($this->uri->segment(1) == "rawat"){echo "active";}?>">
						<span class="micon dw dw-notepad-1"></span><span class="mtext">Rawat</span>
						</a>
					</li>
					<!-- <li>
						<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-notepad-1"></span><span class="mtext">Rawat</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Rawat</a></li>
							<li><a href="getting-started.html">Rawat Tindakan</a></li>
							<li><a href="color-settings.html">Rawat Obat</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>