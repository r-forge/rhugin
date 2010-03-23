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

The RHugin package provides a platform for building and making inference from Bayesian belief networks by integrating the Hugin Decision Engine into the R environment for statistical computing.  The Hugin Decision Engine is commercial software and is required in order to use the RHugin package.  Information about Hugin is available from the Hugin website: <a href="http://www.hugin.com">www.hugin.com</a>.  Since a Hugin license is required, the target audience for this package is Hugin users who would like to integrate the statistical and programatic capabilities of R into their Hugin workflow.  For those interested in evaluating Hugin, a trial version of Hugin called Hugin Lite is available.

<br><br>

Please note that the RHugin package is not supported by Hugin Expert A/S.

<br><br>

Code and development statistics for the RHugin project are available on the <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

<h2>News</h2>

<ul>
<li>2010-03-23: RHugin 0.9-1 released.  All the planned features for the RHugin package have been implemented.</li>
<li>2010-02-23: RHugin 0.8-3 adds support for structure learning and CPT learning. This release requires Hugin 7.2, R 2.10.1 and gRbase 1.3.3. Note that RHugin now depends on gRbase rather than gRain.</li>
<li>2010-02-05: RHugin 0.7-12 released.</li>
<li>2009-07-01: RHugin 0.7-2 adds support for continuous nodes and influence diagrams. This release requires Hugin 7.1 and R 2.9.1.</li>
<li>2009-04-30: RHugin 0.6-6 is compatible with Hugin 7.1 and R 2.9.0.</li>
<li>2009-02-11: RHugin 0.6 is now available.  The plotting of RHugin domains has been improved.</li>
<li>2009-01-05: The <code>compile</code> and <code>propagate</code> functions are generic as of version 0.5-4 for compatibility with the <code>gRain</code> and <code>gRbase</code> packages.</li>
</ul>

<h2>Installation</h2>

<p>
If your Hugin installation is in a non-standard location, you must set the <code>HUGINHOME</code> environment variable in order to use the package (see the <a href="http://www.hugin.com/developer/documentation/api-manuals">Hugin API Reference Manual</a>).  Also, you will need to modify the <code>HUGINHOME</code> variable in the installation instructions below.
</p>


<h4>Dependencies</h4>

<p>
The RHugin package depends on the <code>graph</code> and <code>gRbase</code> packages.  These two packages (and their dependencies) are available on CRAN.  Run the command
</p>

<pre>
    install.packages(c("graph", "gRbase"))
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
Mac OS X users can install the package using the <code>install.packages</code> function as well. The <code>HUGINHOME</code> environment variable must be set to the full path of the Hugin Decision Engine folder. In most cases typing <code>Sys.setenv(HUGINHOME = "/Applications/HDE</code> then pressing <code>tab</code> will give the correct path.  The following commands install the package for Hugin Lite.
</p>

<pre>
    Sys.setenv(HUGINHOME = "/Applications/HDE7.2-lite")
    install.packages("RHugin", repos = "http://R-Forge.R-project.org", type = "source")
</pre>

<p>
Note that, as of version 0.7-12, the RHugin package dynamically links to the Hugin Decision Engine hence Hugin 7.2 or later is required.
</p>

<h4>Installing the RHugin Package on Microsoft Windows</h4>

<p>
A binary package is provided for Windows.
</p>

<ul>
<li> <a href="binary/Windows/RHugin_0.9-1.zip">RHugin_0.9-1.zip</a> (built for R 2.10.1 and Hugin Researcher/Lite 7.2: 2010-03-23)</li>
</ul>

<p>
Use the "Install package(s) from local zip files..." item from the R Packages menu to install the package.
</p>

<h2>Optional: Rgraphviz</h2>

<p>
RHugin uses the Rgraphviz package to plot Hugin domains and to position nodes in hkb and NET files.
</p>

<h4>Microsoft Windows</h4>

<p>
Only certain versions of Graphviz are compatible with the Rgraphviz package. On Windows XP, Graphviz 2.20.3a seems to work consistently (I only have XP so can not test Vista and Windows 7).

<ol>
  <li>Download and install Graphviz 2.20.3a.<br><ul><li><a href="http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3a.msi">http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3a.msi</a></li></ul></li><br>
  <li>Add the full path to the Graphviz bin folder (e.g., <code>C:\Program Files\Graphviz2.20\bin</code>) to the Windows PATH Environment Variable.</li><br>
  <li>Start R.<br></li><br>
  <li>Install the Rgraphviz package using the <code>biocLite</code> function.<br>
    <pre>
      source(&quot;http://bioconductor.org/biocLite.R&quot;)
      biocLite(&quot;Rgraphviz&quot;)
    </pre>
  </li>
</ol>
</p>

<h4>Mac OS X</h4>

<p>
The Rgraphviz package has an external dependency on Graphviz (<a href="http://www.graphviz.org">http://www.graphviz.org</a>) hence you need to install Graphviz on your computer before attempting to install the Rgraphviz package. You can download the latest version of Graphviz for Max OS X from the following link.
</p>

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.graphviz.org/Download_macos.php">http://www.graphviz.org/Download_macos.php</a>

<p>
Note that <b>snowleopard</b> refers to Mac OS X version 10.6 and <b>leopard</b> refers to Mac OS X version 10.5. Older versions of Mac OS X (e.g., Tiger) are not supported by Graphviz. You can find your Mac OS X version by clicking on the Apple menu and selecting <i>About This Mac</i>.  Graphviz is distributed as a package for Mac OS X's Installer.app.  Double click the downloaded file and follow the instructions to install the software.
<p>

<p>
Once Graphviz has been installed, run the following command in R to build and install the Rgraphviz package.
</p>

<pre>
  install.packages(&quot;Rgraphviz&quot;, repos = &quot;http://www.bioconductor.org&quot;, type = &quot;source&quot;)
</pre>

<p>
It is also possible to install Rgraphviz using Bioconductor's <code>biocLite</code> function which will install a binary package.  The binary package is built for a specific version of Graphviz and if that version does not match the version on your computer, it may cause problems.  
</p>

<h4>Linux and other *nix</h4>

<p>
Graphviz must be installed on the computer in order for the Rgraphviz package to work.  Graphviz can be obtained from the <a href="http://www.graphviz.org">Graphviz</a> website.  Once Graphviz has been installed, follow the Bioconductor <a href="http://www.bioconductor.org/packages/release/bioc/html/Rgraphviz.html">instructions</a> to install Rgraphviz.
</p>


<br>
<br>
<br>
<br>


</body>
</html>
