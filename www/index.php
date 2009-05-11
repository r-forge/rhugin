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

The RHugin package provides a platform for building and making inference from Bayesian belief networks by integrating the Hugin Decision Engine into the R environment for statistical computing.  The Hugin Decision Engine is commercial software and is required in order to use the RHugin package.  Information about Hugin is available from the Hugin website: <a href="http://www.hugin.com">www.hugin.com</a>.  Since a Hugin license is required, the target audience for this package is Hugin users who would like to integrate the statistical and programatic capabilities of R into their Hugin workflow.  For those interested in evaluating Hugin and/or the RHugin package, a trial version of Hugin called Hugin-Lite is available (also from the Hugin website).

<br><br>

Please note that the RHugin package is not supported by Hugin Expert A/S.

<br><br>

Code and development statistics for the RHugin project are available on the <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

<h2>News</h2>

<ul>
<li>2009-04-30: RHugin 0.6-6 is compatible with Hugin 7.1 and R 2.9.0.</li>
<li>2009-02-11: RHugin 0.6 is now available.  The plotting of RHugin domains has been improved.</li>
<li>2009-01-05: The <code>compile</code> and <code>propagate</code> functions are generic as of version 0.5-4 for compatibility with the <code>gRain</code> and <code>gRbase</code> packages.</li>
</ul>

<h2>Installation</h2>

<p>
If Hugin is already installed on your computer then simply follow the directions below to install the RHugin package.  If Hugin is installed in a non-standard location then you must have the <code>HUGINHOME</code> environment variable set in order to use the package (see the <a href="http://www.hugin.com/developer/documentation/API_Manuals">Hugin C API Manual</a>).  Also, you will need to modify the <code>HUGINHOME</code> variable in the installation instructions as appropriate.
</p>

<p>
If you do not have a licensed copy of Hugin and would like to evaluate the RHugin package, you will first need to obtain and install the trial version of Hugin: Hugin-Lite.
</p>


<h4>Dependencies</h4>

<p>
The RHugin packages depends on the graph package and on the gRain package.  These two packages (and their dependencies) are available on CRAN.  Run the command
</p>

<pre>
    install.packages(c("graph", "gRain"))
</pre>

<p>
in R to install them before installing the RHugin package.
</p>


<h4>Installing the RHugin Package on Linux</h4>

<p>
Linux users can install the package using the <code>install.packages</code> function in R.
</p>

<pre>
    Sys.setenv(HUGINHOME = "/usr/local/hugin")
    install.packages("RHugin", repos = "http://R-Forge.R-project.org")
</pre>

<h4>Installing the RHugin Package on Mac OS X</h4>

<p>
Users of Hugin Lite can install the following binary package.
</p>

<ul>
<li> <a href="binary/MacOSX/RHugin_0.6-6_R_i386-apple-darwin8.11.1.tgz">RHugin_0.6-6_R_i386-apple-darwin8.11.1.tgz</a></li>
</ul>

<p>
Users of Hugin Researcher must install the package from source. Please use the following Mac OS X specific source package.
</p>

<ul>
<li> <a href="binary/MacOSX/RHugin_0.6-6.macosx.tar.gz">RHugin_0.6-6.macosx.tar.gz</a></li>
</ul>

<p>
To install the source package:
</p>

<ol>
<li> Start R.</li>
<li> Set the <code>HUGINHOME</code> environment variable: <code>Sys.setenv(HUGINHOME = "/Applications/HDE7.1-researcher")</code>.
<li> Install <code>RHugin_0.6-6.macosx.tar.gz</code> using the <i>Package Installer</i> menu item from the R <i>Packages & Data</i> menu.
</ol>


<h4>Installing the RHugin Package on Microsoft Windows</h4>

<p>
A binary package is provided for Windows.
</p>

<ul>
<li> <a href="binary/Windows/RHugin_0.6-6.zip">RHugin_0.6-6.zip</a> (requires R 2.9.0 and Hugin Researcher/Lite 7.1: 2009-04-30)</li>
</ul>

<p>
Download then install using the "Install package(s) from local zip files..." item from the R Packages menu.
</p>

<h2>Optional (but highly recommended): Rgraphviz</h2>

<p>
RHugin uses the Rgraphviz package to plot Hugin domains and to position nodes in hkb and NET files.  The Rgraphviz package must be loaded manually using <code>library(Rgraphviz)</code> in order for the RHugin functions <code>plot</code> and <code>layoutRHugin</code> to work.
</p>

<h4>Microsoft Windows</h4>

<p>
On Windows only certain combinations of Graphviz and Rgraphviz are compatible.  These instructions install Rgraphviz 1.22.1 and Graphviz 2.20.3a.

<ol>
  <li> Download and install Graphviz 2.20.3a.<br><ul><li><a href="http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3a.msi">http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3a.msi</a></li></ul></li><br>
  <li> Add the full path to the Graphviz bin folder (e.g., <code>C:\Program Files\Graphviz2.20\bin</code>) to the Windows PATH Environment Variable.</li><br><br>
  <li> Download Rgraphviz 1.22.1 and install it using the <i>Install package(s) from local zip files...</i> menu item from the R <i>Packages</i> menu.<br><ul><li><a href="http://www.bioconductor.org/packages/release/bioc/bin/windows/contrib/2.9/Rgraphviz_1.22.1.zip">http://www.bioconductor.org/packages/release/bioc/bin/windows/contrib/2.9/Rgraphviz_1.22.1.zip</a></li></ul></li><br>
</ol>
</p>

<h4>Linux and Mac OS X</h4>

<p>
Graphviz must be installed on the computer in order for the Rgraphviz package to work.  Graphviz can be obtained from the <a href="http://www.graphviz.org">Graphviz</a> website.  Once Graphviz has been installed, follow the Bioconductor <a href="http://www.bioconductor.org/packages/release/bioc/html/Rgraphviz.html">instructions</a> to install Rgraphviz.
</p>

<p>

</p>

<br>
<br>
<br>
<br>


</body>
</html>
