<?php
include('fragment/header.php');
include('fragment/sidebar.php');
?>

<!--- Content ------------------------------->
			<div id="main">

				<div class="header">
					<h2>Simas Sehat</h2>

					<h3>Asuransi Sinar Mas Bintaro</h3>

				</div>

				<div class="content">
					<p>
						<!-- cek apakah sudah login -->
						<?php
						session_start();
						if($_SESSION['status']!="login"){
							header("location:home.php?pesan=belum_login");
						}
						?>

						<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

						<br/>
						<br/>
					</p>
					<oL>
						<li>
							Web delopment dengan PHP dan MySQL
						</li>
						<li>
							Mobile App berbasis Android dan jQuery Mobile
						</li>
						<li>
							Training Web & Mobile Development
						</li>
					</oL>

				</div>
<?php
include('fragment/footer.php');
?>
