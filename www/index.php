<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<! --- R-Forge Logo --- >
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>

<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<h1>The RHugin Package Homepage</h1>

The Hugin Decision Engine (HDE) is commercial software produced by <a href="http://www.hugin.com">HUGIN EXPERT A/S</a> for building and making inference from Bayesian belief networks.  The RHugin package provides a suite of functions allowing the HDE to be controlled from within the R environment for statistical computing.  The RHugin package can thus be used to build Bayesian belief networks, enter and propagate evidence, and to retrieve beliefs.  Additionally, the RHugin package can read and write hkb and NET files, making it easy to work simultaneously with both the RHugin package and the Hugin GUI.  A licensed copy of the HDE (or the trial version) is required for the RHugin package to function, hence the target audience for the package is Hugin users who would like to take advantage of the statistical and programatic capabilities of R.

<br><br>

Please note that the RHugin package is not supported by Hugin Expert A/S.

<br><br>

Code and development statistics for the RHugin project are available on the <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

<h2>News</h2>

<ul>
<li>2012-10-30: The Rgraphviz package is now much easier to install.</li>
<li>2012-03-13: RHugin 7.6 released.</li>
<li>2011-11-30: Thanks to Rgraphviz 1.32.0, utility nodes are now drawn as diamonds.</li>
<li>2011-06-15: RHugin 7.5 released.</li>
<li>2010-11-13: RHugin 7.4 released.</li>
<li>2010-04-12: RHugin 7.3-1 released. From now on the package version will match the Hugin release.</li>
<li>2010-03-23: RHugin 0.9-1 released.  All the planned features for the RHugin package have been implemented.</li>
<li>2010-02-23: RHugin 0.8-3 adds support for structure learning and CPT learning. This release requires Hugin 7.2, R 2.10.1 and gRbase 1.3.3. Note that RHugin now depends on gRbase rather than gRain.</li>
</ul>

<h2>Installation</h2>

<p>
If you do not have Hugin installed in the default location, you will need to set the <code>HUGINHOME</code> environment variable in order to use the RHugin package (see the <a href="http://www.hugin.com/developer/documentation/api-manuals">Hugin API Reference Manual</a>).  Also, you will need to modify the <code>HUGINHOME</code> variable in the installation instructions below.
</p>


<h4>Dependencies</h4>

<p>
The RHugin package depends on the <code>graph</code> and <code>gRbase</code> packages.  In R, run the commands
</p>

<pre>
  source(&quot;http://bioconductor.org/biocLite.R&quot;)
  biocLite(&quot;graph&quot;)
  biocLite(&quot;Rgraphviz&quot;)
  biocLite(&quot;RBGL&quot;)
</pre>

<p>
to install the <code>graph</code> and <code>RBGL</code> packages from Bioconductor and the command
</p>

<pre>
  install.packages("gRbase")
</pre>

<p>
to install the <code>gRbase</code> package from CRAN.  The <code>graph</code> package should be installed first since it is also needed by the <code>gRbase</code> package and is not available from CRAN.
</p>


<h4>Installing the RHugin Package on Linux</h4>

<p>
Linux users can install the package using the <code>install.packages</code> function in R.
</p>

<pre>
  Sys.setenv(HUGINHOME = "/usr/local/hugin")
  install.packages("RHugin", repos = "http://rhugin.r-forge.r-project.org")
</pre>

<h4>Installing the RHugin Package on Mac OS X</h4>

<p>
Mac OS X users can install the package using the <code>install.packages</code> function as well. The <code>HUGINHOME</code> environment variable must be set to the full path of the Hugin Decision Engine folder. In most cases typing <code>Sys.setenv(HUGINHOME = "/Applications/HDE</code> then pressing <code>tab</code> will give the correct path.  The following commands install the package for Hugin Lite.
</p>

<pre>
  Sys.setenv(HUGINHOME = "/Applications/HDE7.6-lite")
  install.packages("RHugin", repos = "http://rhugin.r-forge.r-project.org", type = "source", INSTALL_opts = "--no-multiarch")
</pre>

<p>
As of version 0.7-12, the RHugin package dynamically links to the Hugin Decision Engine hence Hugin 7.2 or later is required.
</p>

<h4>Installing the RHugin Package on Microsoft Windows</h4>

<p>
Binary packages for Windows.
</p>

<ul>
<li> <a href="binary/Windows/RHugin_0.9-1.zip">RHugin_0.9-1.zip</a> (Hugin 7.2)</li>
<li> <a href="binary/Windows/RHugin_7.3-1.zip">RHugin_7.3-1.zip</a> (Hugin 7.3)</li>
<li> <a href="binary/Windows/RHugin_7.4.zip">RHugin_7.4.zip</a> (Hugin 7.4, R 2.12.2, Windows XP)</li>
<li> <a href="binary/Windows/RHugin_7.4-1.zip">RHugin_7.4-1.zip</a> (Hugin 7.4 (32-bit), R 2.13.0 (32-bit), Windows 7 (64-bit))</li>
<li> <a href="binary/Windows/RHugin_7.5-1.zip">RHugin_7.5-1.zip</a> (Hugin 7.5 (32-bit), R 2.13.0 (32-bit))</li>
<li> <a href="binary/Windows/RHugin_7.5-6.zip">RHugin_7.5-6.zip</a> (Hugin 7.5 (32-bit), R 2.14.0 (32-bit))</li>
<li> <a href="binary/Windows/RHugin_7.6-2.zip">RHugin_7.6-2.zip</a> (Hugin 7.6 (32-bit), R 2.14.2 (32-bit))</li>
</ul>

<p>
Download the package corresponding to your version of Hugin then use the "Install package(s) from local zip files..." item from the R Packages menu to install the package.
</p>



<br>
<br>
<br>
<br>


</body>
</html>
