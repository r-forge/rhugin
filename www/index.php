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

The RHugin package provides an R API for the Hugin Decision Engine. The RHugin package is free software and is distributed under the terms of the LGPL.  The Hugin Decision Engine is commercial software which is available at <a href="http://www.hugin.com">www.hugin.com</a>.  Presently, the target audience for this package is Hugin users who would like to integrate the statistical and programatic capabilities of R into their analyses.
<br><br>
Code and development statistics are available on the <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

<h2>Installation</h2>

<p>
RHugin has an external dependency on Hugin Expert. If you have a Hugin license then simply install the RHugin package and load it into your R session. Please note that the <code>HUGINHOME</code> environment variable must be set as described in the Hugin documentation (this is done automatically on Windows). If you do not have a Hugin license it is still possible to try the package: RHugin is compatible with the evaluation version of Hugin (again see <a href="http://www.hugin.com">www.hugin.com</a>). The evaluation version is limited but sufficient to explore the capabilities of the RHugin package.
</p>

<h4>Non-Windows</h4>

<p>
UNIX and Linux systems can install the package using the <code>install.packages</code> function in R.
</p>

<pre>
     install.packages("RHugin", repos = "http://R-Forge.R-project.org")
</pre>

<h4>Windows</h4>

<p>
Building the package on Windows is quite difficult so binary packages are provided.
</p>

<ul>
  <li> <a href="binary/Windows/RHugin_0.4-5.zip">RHugin_0.4-5.zip</a> (2008-09-28)
  <li> <a href="binary/Windows/RHugin_0.4-6.zip">RHugin_0.4-6.zip</a> (requires R 2.7.2 and Hugin Researcher 7.0 : 2008-10-15)
  <li> <a href="binary/Windows/RHugin_0.4-10.zip">RHugin_0.4-10.zip</a> (requires R 2.7.2 and Hugin Researcher/Lite 7.0 : 2008-10-21)
</ul>

<p>
Download an appropriate binary and install it using the "Install package(s) from local zip files..." item from the R Packages menu.
</p>

<h4>Rgraphviz</h4>

<p>
RHugin can take advantage of the Rgraphviz package to draw Hugin domains in R and to position nodes in hkb and net files.
</p>

<p>
Non-Windows users can follow the Bioconductor <a href="http://bioconductor.org/packages/2.3/bioc/html/Rgraphviz.html">instructions</a> for installing Rgraphviz.
</p>

<p>
Windows users can install Rgraphviz by following these three easy steps:

<ol>
  <li> Download and install Graphviz version 2.20.3.<br><ul><li><a href="http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3.msi">http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3.msi</a></ul><br>
  <li> Add <code>C:\Program Files\Graphviz 2.21\bin</code> to your Path (surprisingly this is actually where the installer puts 2.20.3 - you may have to adjust this setting on non-English systems or if Graphviz is installed anywhere other than the default location).<br><br>
  <li> Download and install (using the 'Install package(s) from local zip files...' item in  the R Packages menu) the <a href="binary/Windows/Rgraphviz_1.20-0.zip">Rgraphviz</a> package.  Please use the Rgraphviz binary provided here - the official Bioconductor Windows binary is usually broken.  Please note that this binary requires R 2.8.0 and Graphviz 2.20.3.
</ol>

<br>

The Rgraphviz package must be loaded manually - <code>library(Rgraphviz)</code> - before using the RHugin functions <code>plot</code> and <code>position.nodes<code>.

<br>
<br>
<br>
<br>


</body>
</html>
