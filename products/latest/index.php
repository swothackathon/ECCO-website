<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Latest Product";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

<!-- Ichiro Fukumori 2019-12-04 -->

	<section class='content_page module white-bg'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Latest Product</h1>
				<a href="../all">All Products</a>
			</header>
			<div class='wysiwyg_content'>

				<h2>ECCO-V4r4</h2>
				<small>Authors: Fukumori, Ichiro; Wang, Ou; Fenty, Ian; Forget, Gael; Heimbach, Patrick; Ponte, Rui M.</small>

				<div class="grid">
					<div class="grid-cell flexit">
						
						<h4>Description:</h4>
						<p>Version 4 Release 4 (V4r4), covering the period 1992-2017, represents
ECCO's latest ocean state estimate. This product is an updated edition to that described by Forget et al. (2015, Geosci. Model Dev.). Version 4 is the first multi-decadal ECCO estimate that is truly global, including the Arctic Ocean. The Release 4 edition includes improvements in time-period (1992-2017), model (e.g., sea-ice), observations (e.g., GRACE, Aquarius), and constraints (e.g., correlated errors).
</p>
						<p>[<i>Image at right</i>] Global mean time-series of sea level and ocean bottom pressure (in equivalent sea level) of V4r4 in comparison to observations.</p>
                                                <h4>ECCO Drive:</h4>
<!-- Ou Wang 2019-12-09 -->
                                                <p><strong>Due to NASA's mandate to disallow the use of the ftp protocol for data access, ECCO's anonymous ftp server ftp://ecco.jpl.nasa.gov has been replaced by a WebDAV server called ECCO Drive. Each user must first register for an <a href="https://urs.earthdata.nasa.gov/docu    mentation">Earthdata account</a> at <a href="https://urs.earthdata.nasa.gov/users/new">https://urs.earthdata.nasa    .gov/users/new</a> in order to access the ECCO products. ECCO Drive <a href="https://ecco.jpl.nasa.gov/drive/files">https://ecco.jpl.nasa.gov/drive/files</a> offers a familiar interface for users to browse and download data through their browser. Additionaly, ECCO's WebDAV interface allows one to connect to ECCO as if it were a local drive. It also allows users to access data via a command line interface, enabling scripted data extracting. A detailed help page can be found at <a href="https://ecco.jpl.nasa.gov/drive/help">https://ecco.jpl.nasa.gov/drive/help</a>. </strong></p>
                                                <h4>Command line example:</h4>
                                                <p>To use wget to download ECCO v4r4's monthly SSH on the native grid: </p>
                                                <p><strong>wget -r --no-parent --user YOUREARTHDATAUSERNAME --ask-password https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/nctiles_monthly/SSH</strong></p>
<!-- End of Ou Wang 2019-12-09 -->
                                                <p>When prompted for password, you need to enter your ECCO Drive's WebDAV password, not your Earthdata account's password. To get the WebDAV password, log in with your Earthdata account from a web browser to <a href="https://ecco.jpl.nasa.gov/drive">https://ecco.jpl.nasa.gov/drive</a>. Once successfully log in, you will be re-directed to the page of your WebDAV/Programmatic API credentials. Your ECCO Drive's WebDAV password is in the second box from top. This is the password that you would use for the wget command. </p>
						<br />
<!-- Ou Wang 2019-12-09 -->
						<p><strong><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/" class="button white">Download Product (excl. daily fields) </a></strong></p>
						<p><strong><a href="https://data.nas.nasa.gov/ecco/data.php?dir=/eccodata/llc_90/ECCOv4/Release4" class="button white">Download Daily Fields</a></strong></p>
<!-- End of Ou Wang 2019-12-09 -->
						<p><strong><a href="https://web.corral.tacc.utexas.edu/OceanProjects/ECCO/ECCOv4/Release4/" class="button white">Download Product (mirror)</a></strong></p>
					</div>
					<div class="grid-cell grid--1of3 margin-20">
						<div><img src="/assets/images/home/v4r4/v4r4_gmsl_gmobp.png"></div>
					</div>
				</div>

				<h2>Overview</h2>
				<div>
					<table class="full-width gray-striped text-left one-quarter-width">
						<tr>
							<td>Period:</td>
							<td>Jan 1992 - Dec 2017</td>
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
							<td>Release 4</td>
						</tr>
						<tr>
							<td>Contact Person:</td>
							<td>Ian Fenty, Ichiro Fukumori, Ou Wang</td>
						</tr>
						<tr>
							<td>Last Updated Date:</td>
							<td>October 24, 2019</td>
						</tr>
					</table>
				</div>

				<h2>Citation</h2>
				<p>As a condition of using this product, you <strong><i>must</i></strong> cite the use of this product using the following citation.</p>
				<div class="indent gray-bg pad-20">
					<i>
						<p>Fukumori, I., O. Wang, I. Fenty, G. Forget, P. Heimbach, and R. M. Ponte, 2019: ECCO Version 4 Release 4, Avfailable at <a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_synopsis.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_synopsis.pdf</a></p>
						<p>Forget, G., J.-M. Campin, P. Heimbach, C. N. Hill, R. M. Ponte, and C. Wunsch, 2015: ECCO version 4: an integrated framework for non-linear inverse modeling and global ocean state estimation. Geoscientific Model Development, 8, 3071-3104, doi:10.5194/gmd-8-3071-2015</p>
					</i>
				</div>
				<p>For more information, see our <a href="https://www.jpl.nasa.gov/imagepolicy/">Use and Copyright Web page</a>.</p>

				<h2>User Guide</h2>
				<p>A detailed description of available files and their content are summarized in a "User Guide" in the link below.  Although written for the previous release (V4r3), the User Guide, in addition to other files that folllow, apply equally to the present Release 4 estimate. 
</p>
				<p><strong><a href="/products/V4r3/user-guide/" class="button white">Read the User Guide</a></strong></p>
				
				<h2>Analysis Tools</h2>

				<p><strong>ecco_v4_py: A Python package and tutorial for V4r3</strong></p>
					<div class="indent">
						<p>
							<a href="https://ecco-v4-python-tutorial.readthedocs.io/">https://ecco-v4-python-tutorial.readthedocs.io/</a><br/>
						</p>
					</div>

				
				<p><strong>gcmfaces: A general Matlab/Octave toolbox for analyzing V4r3</strong></p>
					<div class="indent">
						<p>
							<a href="https://gcmfaces.readthedocs.io/en/latest/index.html">https://gcmfaces.readthedocs.io/en/latest/index.html</a><br/>
						</p>
					</div>

		
				<p><strong>Guide for calculating budgets with V4r3 output</strong></p>
					<div class="indent">
						<p>
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_budgets_howto.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_budgets_howto.pdf</a><br/>
						</p>
					</div>

				<p><strong>Guide for reproducing V4r4 results with MITgcm</strong></p>
					<div class="indent">
						<p>
<!-- Ou Wang 2019-12-09 -->
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_reproduction_howto.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_reproduction_howto.pdf</a><br/>
<!-- End of Ou Wang 2019-12-09 -->

						</p>
					</div>
						
				<h2>Technical Reference</h2>
				<div>
					
					<p><strong>Synopsis of V4r4 estimation</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_synopsis.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_synopsis.pdf</a><br/>
						</p>
					</div>

					<p><strong>Overview of V4r3 files</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_output_fields.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_output_fields.pdf</a><br/>
						</p>
					</div>
<!-- Ou Wang 2019-12-09 -->
					<p><strong>Plots of V4r4</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_overview_plots.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_overview_plots.pdf</a><br/>
<!-- End of Ou Wang 2019-12-09 -->
						</p>
					</div>
					<p><strong>Data used in V4r3</strong></p>
					<div class="indent">
						<p>
							
							<a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_input_data.pdf" target="_blank" rel="noopener noreferrer">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_input_data.pdf</a><br/>
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
