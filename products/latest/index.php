<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Products | Latest Product";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page module white-bg'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Latest Product</h1>
				<a href="../all">All Products</a>
			</header>
			<div class='wysiwyg_content'>

				<h2>ECCO-V4r3</h2>
				<small>Authors: Fukumori, Ichiro; Wang, Ou; Fenty, Ian; Forget, Gael; Heimbach, Patrick; Ponte, Rui M.</small>

				<div class="grid">
					<div class="grid-cell flexit">
						
						<h4>Description:</h4>
						<p>Version 4 Release 3 (V4r3), covering the period 1992-2015, represents
ECCO's latest ocean state estimate. This product is an updated edition to that described by Forget et al. (2015, Geosci. Model Dev.). Version 4 is the first multi-decadal ECCO estimate that is truly global, including the Arctic Ocean. The Release 3 edition includes improvements in time-period (1992-2015), model (e.g., sea-ice), observations (e.g., GRACE, Aquarius), and constraints (e.g., correlated errors).
</p>
						<p>[<i>Image at right</i>] Speed (cm/s) of 1992-2015 time-mean current at 5m depth. The figure combines into a global image, V4r3's thirteen tiles, each a 90-by-90 grid delineated by white lines.</p>
						<br />
						<p><strong><a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/" class="button white">Download Product</a></strong></p>
						<p><strong><a href="fhttps://web.corral.tacc.utexas.edu/OceanProjects/ECCO/ECCOv4/Release3/" class="button white">Download Product (mirror)</a></strong></p>
					</div>
					<div class="grid-cell grid--1of3 margin-20">
						<div><img src="/assets/images/home/v4r3b.jpg"></div>
					</div>
				</div>

				<h2>Overview</h2>
				<div>
					<table class="full-width gray-striped text-left one-quarter-width">
						<tr>
							<td>Period:</td>
							<td>Jan 1992 - Dec 2015</td>
						</tr>
						<tr>
							<td>Grid & Resolution:</td>
							<td>LLC90 (1 deg)</td>
						</tr>
						<tr>
							<td>Domain:</td>
							<td>Global</td>
						</tr>
						<tr>
							<td>Variable:</td>
							<td>Ocean State (temperature, salinity, velocity, sea level, bottom pressure), Fluxes (temperature, salt, volume)</td>
						</tr>
						<tr>
							<td>Temporal Resolution:</td>
							<td>Monthly, Daily, Hourly</td>
						</tr>
						<tr>
							<td>Data Used:</td>
							<td><a href="/data/#satellite-altimetry">Satellite Altimetry</a>, <a href="/data/#argo">ARGO</a>, <a href="/data/#grace">GRACE</a>, Aquarius, CTD, XBT</td>
						</tr>
						<tr>
							<td>Type of Estimation:</td>
							<td>Adjoint</td>
						</tr>
						<tr>
							<td>Data Format(s):</td>
							<td>NetCDF, Binary</td>
						</tr>
						<tr>
							<td>Version:</td>
							<td>Release 3</td>
						</tr>
						<tr>
							<td>Contact Person:</td>
							<td>Ian Fenty, Ichiro Fukumori, Ou Wang</td>
						</tr>
						<tr>
							<td>Last Updated Date:</td>
							<td>October 15, 2017</td>
						</tr>
					</table>
				</div>

				<h2>Citation</h2>
				<p>As a condition of using this product, you <strong><i>must</i></strong> cite the use of this product using the following citation.</p>
				<div class="indent gray-bg pad-20">
					<i>
						<p>Fukumori, I., O. Wang, I. Fenty, G. Forget, P. Heimbach, and R. M. Ponte, 2017: ECCO Version 4 Release 3, http://hdl.handle.net/1721.1/110380, doi:1721.1/110380. Available at <a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_estimation_synopsis.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_estimation_synopsis.pdf</a></p>
						<p>Forget, G., J.-M. Campin, P. Heimbach, C. N. Hill, R. M. Ponte, and C. Wunsch, 2015: ECCO version 4: an integrated framework for non-linear inverse modeling and global ocean state estimation. Geoscientific Model Development, 8, 3071-3104, doi:10.5194/gmd-8-3071-2015</p>
					</i>
				</div>
				<p>For more information, see our <a href="https://www.jpl.nasa.gov/imagepolicy/">Use and Copyright Web page</a>.</p>

				<h2>User Guide</h2>
				<p>A detailed description of available files and their content are
summarized in a "User Guide" in the link below.
</p>
				<p><strong><a href="./user-guide/" class="button white">Read the User Guide</a></strong></p>
				
				<h2>Technical Reference</h2>
				<div>
					<p><strong>ECCO-v4-Py: A Python toolbox and tutorial for using the ECCO v4 output</strong></p>
					<div class="indent">
						<p>
							
							<a href="http://ecco-v4-python-tutorial.readthedocs.io/" target="_blank" rel="noopener noreferrer">http://ecco-v4-python-tutorial.readthedocs.io/</a><br/>
						</p>
					</div>
					
					<p><strong>Synopsis of V4r3 estimation</strong></p>
					<div class="indent">
						<p>
							
							<a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_estimation_synopsis.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_estimation_synopsis.pdf</a><br/>
						</p>
					</div>

					<p><strong>Overview of V4r3 files</strong></p>
					<div class="indent">
						<p>
							
							<a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_output_files.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_output_files.pdf</a><br/>
						</p>
					</div>
					<p><strong>Plots of V4r3</strong></p>
					<div class="indent">
						<p>
							
							<a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_overview_plots.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_overview_plots.pdf</a><br/>
						</p>
					</div>
					<p><strong>Data used in V4r3</strong></p>
					<div class="indent">
						<p>
							
							<a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_input_data.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_input_data.pdf</a><br/>
						</p>
					</div>
					<p><strong>Calculating budgets with V4r3 output</strong></p>
					<div class="indent">
						<p>
							
							<a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_budgets_howto.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_budgets_howto.pdf</a><br/>
						</p>
					</div>
					<p><strong>Reproducing V4r3 results with MITgcm</strong></p>
					<div class="indent">
						<p>
							
							<a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_reproduction_howto.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_reproduction_howto.pdf</a><br/>
						</p>
					</div>
					<p><strong>gcmfaces: A Matlab toolbox for V4r3 and other gridded Earth variables</strong></p>
					<div class="indent">
						<p>
							
							<a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/doc/ECCOV4R2_gcmfaces.pdf" target="_blank" rel="noopener noreferrer">ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/doc/ECCOV4R2_gcmfaces.pdf</a><br/>
						</p>
					</div>
				</div>

				<h2>Support</h2>
				<div>
					<p>No FAQs or How-To's available for this product.</p>
					<p>Access complete <a href="/knowledge">Knowledge Base</a></p>
					<p>Questions? Please contact:</p>
					
					<p>Email: <a href="mailto:Ou.Wang@jpl.nasa.gov">Ou.Wang@jpl.nasa.gov</a> or <a href="mailto:mailto:ecco-support@mit.edu">ecco-support@mit.edu</a></p>
				</div>

			</div><!-- //.wysiwyg_content -->
			
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../../includes/footer.inc.php'); ?>
</html>
