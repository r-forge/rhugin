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
<li>2011-06-15: RHugin 7.5 released.</li>
<li>2010-11-13: RHugin 7.4 released.</li>
<li>2010-04-12: RHugin 7.3-1 released. From now on the package version will match the Hugin release.</li>
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
If you do not have Hugin installed in the default location, you will need to set the <code>HUGINHOME</code> environment variable in order to use the RHugin package (see the <a href="http://www.hugin.com/developer/documentation/api-manuals">Hugin API Reference Manual</a>).  Also, you will need to modify the <code>HUGINHOME</code> variable in the installation instructions below.
</p>


<h4>Dependencies</h4>

<p>
The RHugin package depends on the <code>gRbase</code> and <code>graph</code> packages.  In R, run the command
</p>

<pre>
  install.packages("gRbase")
</pre>

<p>
to install the <code>gRbase</code> package from CRAN and then the commands
</p>

<pre>
  source(&quot;http://bioconductor.org/biocLite.R&quot;)
  biocLite(&quot;graph&quot;)
</pre>

<p>
to install the <code>graph</code> package from Bioconductor.
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
  Sys.setenv(HUGINHOME = "/Applications/HDE7.5-lite")
  install.packages("RHugin", repos = "http://R-Forge.R-project.org", type = "source")
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
<li> <a href="binary/Windows/RHugin_7.5.zip">RHugin_7.5.zip</a> (Hugin 7.5 (32-bit), R 2.13.0 (32-bit))</li>
</ul>

<p>
Download the package corresponding to your version of Hugin then use the "Install package(s) from local zip files..." item from the R Packages menu to install the package.
</p>

<h2>Optional: Rgraphviz</h2>

<p>
RHugin uses the Rgraphviz package to plot Hugin domains and to position nodes in hkb and NET files.
</p>

<h4>Microsoft Windows XP</h4>

<p>
I was able to install Rgraphviz on Windows XP using the following steps but, since I no longer have a computer with Windows XP, I haven't been able to test these instructions with R 2.13.0. Hence your milage may vary.

<ol>
  <li>Download and install Graphviz 2.20.3a.<br><ul><li><a href="http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3a.msi">http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.3a.msi</a></li></ul></li><br>
  <li>Add the full path to the Graphviz bin folder (e.g., <code>C:\Program Files\Graphviz2.20\bin</code>) to the Windows <i>Path</i> Environment Variable.</li><br>
  <li>Install the Rgraphviz package using the <code>biocLite</code> function.<br>
    <pre>
    source(&quot;http://bioconductor.org/biocLite.R&quot;)
    biocLite(&quot;Rgraphviz&quot;)
    </pre>
  </li>
</ol>
</p>


<h4>Microsoft Windows 7 (64bit)</h4>

<p>
Presently I have only been successful in running 32bit R and Graphviz on Windows 7 (64bit).  The binary version of the Rgraphviz package linked to below contains a modified build (the <code>agwrite</code> function causes R to crash so was removed) of the Rgraphviz package made using Graphviz 2.28.0 and R 2.13.0.

<ol>
  <li>Download and install Graphviz 2.28.0.<br><ul><li><a href="http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.28.0.msi">http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.28.0.msi</a></li></ul></li><br>
  <li>Add the full path to the Graphviz bin folder (e.g., <code>C:\Program Files (x86)\Graphviz 2.28\bin</code>) to the Windows <i>Path</i> Environment Variable.</li><br>
  <li>Download the modified <a href="binary/Windows/Rgraphviz_1.30.1.zip">Rgraphviz</a> package and install it using the "Install package(s) from local zip files..." item from the R Packages menu.</li>
</ol>
</p>


<h4>Mac OS X</h4>

<p>
The Rgraphviz package has an external dependency on Graphviz (<a href="http://www.graphviz.org">http://www.graphviz.org</a>), so you need to install Graphviz on your computer before installing the Rgraphviz package. You can download the latest version of Graphviz for Max OS X from the following link.
</p>

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.graphviz.org/Download_macos.php">http://www.graphviz.org/Download_macos.php</a>

<p>
Note that <b>snowleopard</b> refers to Mac OS X version 10.6 and <b>leopard</b> refers to Mac OS X version 10.5. Older versions of Mac OS X (e.g., Tiger) are not supported by Graphviz. You can find your Mac OS X version by clicking on the Apple menu and selecting <i>About This Mac</i>.  Graphviz is distributed as a package for Mac OS X's Installer.app.  Double click the downloaded file and follow the instructions to install the software.
<p>

<p>
Once Graphviz has been installed, run the following commands in R to build and install the Rgraphviz package.
</p>

<pre>
  source(&quot;http://bioconductor.org/biocLite.R&quot;)
  biocLite(&quot;Rgraphviz&quot;, type = &quot;source&quot;)
</pre>

<p>
Note: if you do not have the developer tools installed, you can omit the <i>type</i> argument to install the binary version of the Rgraphviz package. The binary package is built for a specific version of Graphviz and if that version does not match the version on your computer, it may cause problems (although I haven't noticed any yet).  
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
