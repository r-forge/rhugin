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

The Hugin Decision Engine (HDE) is commercial software developed by <a href="http://www.hugin.com">HUGIN EXPERT A/S</a> for building and making inference from Bayesian belief networks.  The RHugin package provides a suite of functions allowing the HDE to be controlled from within R.  The RHugin package can thus be used to build Bayesian belief networks, enter and propagate evidence, and to retrieve beliefs.  Additionally, the RHugin package can read and write hkb and NET files, making it easy to work simultaneously with both the RHugin package and the Hugin GUI.  A licensed copy of the HDE (or the trial version) is required for the RHugin package to function, hence the target audience for the package is Hugin users who would like to take advantage of the statistical and programatic capabilities of R.

<br><br>

Please note that the RHugin package is not supported by Hugin Expert A/S.

<br><br>

Code and development statistics for the RHugin project are available on the <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

<h2>News</h2>

<ul>
<li>2014-05-02: RHugin 8.0 released; 32/64-bit binary packages are provided for Windows 7.</li>
<li>2013-07-23: RHugin 7.8 released.</li>
<li>2013-04-10: RHugin 7.7 released.</li>
<li>2012-10-30: The Rgraphviz package is now much easier to install.</li>
<li>2012-03-13: RHugin 7.6 released.</li>
<li>2011-11-30: Thanks to Rgraphviz 1.32.0, utility nodes are now drawn as diamonds.</li>
<li>2011-06-15: RHugin 7.5 released.</li>
<li>2010-11-13: RHugin 7.4 released.</li>
</ul>

<h2>Installation</h2>

<p>
If you do not have Hugin installed in the default location you will need to set the <code>HUGINHOME</code> environment variable before using the RHugin package.  Also, you will need to modify the <code>HUGINHOME</code> variable in the installation instructions below.
</p>


<h4>Dependencies</h4>

<p>
RHugin has dependencies on the Bioconductor packages <code>graph</code> and <code>Rgraphviz</code>. Run the commands
</p>

<pre>
  source(&quot;http://bioconductor.org/biocLite.R&quot;)
  biocLite(c(&quot;graph&quot;, &quot;Rgraphviz&quot;))
</pre>

<p>
to install them.
</p>

<h4>Installing the RHugin Package on Linux</h4>

<p>
Install RHugin using the <code>install.packages</code> function in R. The <code>HUGINHOME</code> environment variable must be set to the full path of the Hugin Decision Engine folder.
</p>

<pre>
  Sys.setenv(HUGINHOME = "/usr/local/hugin")
  install.packages("RHugin", repos = "http://rhugin.r-forge.r-project.org")
</pre>

<h4>Installing the RHugin Package on Mac OS X</h4>

<p>
The RHugin package needs to be installed from source on Mac OS X and you will need to have the <i>Command Line Tools</i> installed on your computer in order to do this.  Instructions for installing the Command Line Tools on Mavericks (Mac OS X 10.9) can be found <a href="http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/">here</a>.  These instructions may work on older versions of Mac OS X.  If they don't, you will need to install and launch Xcode.  Then, from the <i>Xcode</i> menu item, choose <i>Preferences</i> and select the <i>Downloads</i> tab.  There should be an option to install the Command Line Tools.
</p>

<p>
Install RHugin using the <code>install.packages</code> function in R. The <code>HUGINHOME</code> environment variable must be set to the full path of the Hugin Decision Engine folder. In most cases typing <code>Sys.setenv(HUGINHOME = "/Applications/HDE</code> then pressing <code>tab</code> will autocomplete the correct path.  The following commands, for example, install the package for Hugin Lite.
</p>

<pre>
  Sys.setenv(HUGINHOME = "/Applications/HDE8.0-x64-lite/")
  install.packages("RHugin", repos = "http://rhugin.r-forge.r-project.org", type = "source")
</pre>

<p>
Note for Mac OS X: R 3.0.0 is now 64 bit only so RHugin will only work with a 64 bit version of the Hugin Decision Engine.
</p>

<h4>Installing the RHugin Package on Microsoft Windows</h4>

<p>
Binary packages are provided for Windows.
</p>

<ul>
<li> <a href="binary/Windows/RHugin_7.5-1.zip">RHugin_7.5-1.zip</a> (Hugin 7.5 (32-bit), R 2.13.0 (32-bit))</li>
<li> <a href="binary/Windows/RHugin_7.5-6.zip">RHugin_7.5-6.zip</a> (Hugin 7.5 (32-bit), R 2.14.0 (32-bit))</li>
<li> <a href="binary/Windows/RHugin_7.6-2.zip">RHugin_7.6-2.zip</a> (Hugin 7.6 (32-bit), R 2.14.2 (32-bit))</li>
<li> <a href="binary/Windows/RHugin_7.7-5.zip">RHugin_7.7-5.zip</a> (Hugin 7.7 (32-bit), R 3.0.0 (32-bit))</li>
<li> <a href="binary/Windows/RHugin_7.8.zip">RHugin_7.8.zip</a> (Hugin 7.8 (32-bit), R 3.0.x (32-bit))</li>
<li> <a href="binary/Windows/RHugin_7.8-3.zip">RHugin_7.8-3.zip</a> (Hugin 7.8, R 3.1.0 (32/64-bit))</li>
<li> <a href="binary/Windows/RHugin_8.0.zip">RHugin_8.0.zip</a> (Hugin 8.0, R 3.1.0 (32/64-bit))</li>
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
