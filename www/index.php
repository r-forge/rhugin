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

The RHugin package provides an R API for the Hugin Decision Engine. The RHugin package is free software and is distributed under the terms of the LGPL.  The Hugin Decision Engine is commercial software and can be purchased from <a href="http://www.hugin.com">www.hugin.com</a>.  Initially, the intended audience for this package is Hugin users who would like to integrate the statistical and programatic capabilities of R into their analyses.
<br><br>
The RHugin package is compatible with the evaluation version of Hugin: Hugin Lite 6.9.
<br><br>
The project's source code and development statistics are available on the <a href="http://r-forge.r-project.org/projects/rhugin/">summary</a> page.

<h2>Installation</h2>

<p>
RHugin requires a functional installation of Hugin Expert. If you have a licensed Hugin installation then simply install the RHugin package and load it into your R session. Please note that the <code>HUGINHOME</code> environment variable must be set as described in the Hugin documentation. If you don't already have Hugin installed then you can download an evaluation version from <a href="http://www.hugin.com">www.hugin.com</a>. The evaluation version is limited but sufficient to explore the capabilities of the RHugin package.
</p>

<h4>Non-Windows</h4>

<p>
Users of Macintosh and *NIX systems can now install the package using the <code>install.packages</code> function in R.
</p>

<pre>
     install.packages("RHugin", repos = "http://R-Forge.R-project.org")
</pre>

<h4>Windows</h4>

<p>
Building the package on Windows is quite difficult so binary packages are provided.
</p>

<ul>
  <li> <a href="binary/Windows/RHugin_0.3-1.zip">RHugin_0.3-1.zip</a> (2008-08-22)
  <li> <a href="binary/Windows/RHugin_0.4-2.zip">RHugin_0.4-2.zip</a> (2008-09-01)
  <li> <a href="binary/Windows/RHugin_0.4-3.zip">RHugin_0.4-3.zip</a> (2008-09-05)
  <li> <a href="binary/Windows/RHugin_0.4-5.zip">RHugin_0.4-5.zip</a> (2008-28-05)
</ul>

<p>
Download the most recent version and install it using the "Install package(s) from local zip files..." item from the R Packages menu.
</p>

<h4>Rgraphviz</h4>

<p>
If the Rgraphviz package is available then RHugin will be able to automatically draw Hugin domains as well as position nodes in hkb and net files. If possible install this package too. If Rgraphviz is not available the rest of the RHugin package will function normally.
</p>

<p>
The Rgraphviz package is available from <a href="http://www.bioconductor.org">bioconductor</a> and has an external dependency on <a href="http://www.graphviz.org">graphviz</a>.  A binary release of graphviz for Windows can be downloaded here: <a href="http://www.graphviz.org/pub/graphviz/stable/windows/graphviz-2.20.2.exe">graphviz-2.20.2.exe</a>.  The Windows binary for Rgraphviz provided by bioconductor is currently broken so I am temporarily hosting a working Windows binary: <a href="binary/Windows/Rgraphviz_1.18.1.zip">Rgraphviz_1.18.1.zip</a> (built for R 2.7.2 and graphviz 2.20.2).
</p>


<br>

<h2>Quick Introduction</h2>

Once the RHugin package is installed, load it into an R session using the <code>library</code> function.

<pre>
     library(RHugin)
</pre>

You can list all of the functions available in the package using the <code>ls</code> function.

<pre>
     ls("package:RHugin")
      [1] "add.edge"                   "add.node"                  
      [3] "clone.node"                 "compile"                   
      [5] "condense.data.frame"        "delete.edge"               
      [7] "delete.node"                "error.code"                
      [9] "error.description"          "expand.grid.sans.coercion" 
     [11] "generate.nodes"             "generate.tables"           
     [13] "get.belief"                 "get.cases"                 
     [15] "get.edges"                  "get.finding"               
     [17] "get.nodes"                  "get.normalization.constant"
     [19] "get.states"                 "get.table"                 
     [21] "get.table.nodes"            "hugin.domain"              
     [23] "initialize.domain"          "print.RHuginDomain"        
     [25] "print.summary.RHuginDomain" "propagate"                 
     [27] "read.hkb"                   "reset"                     
     [29] "retract"                    "reverse.edge"              
     [31] "RHugin.check.args"          "RHugin.handle.error"       
     [33] "set.cases"                  "set.finding"               
     [35] "set.states"                 "set.table"                 
     [37] "simulate.RHuginDomain"      "summary.RHuginDomain"      
     [39] "switch.parent"              "write.hkb"                 
</pre>

Documentation for each of these functions is provided using the R help system. For example, use the command

<pre>
     help(add.node)
</pre>

to see the documentation for the <code>add.node</code> function.


<h3>An Example</h3>

Lets use the RHugin package to build the bayesian network considered in this Hugin <a href="http://www.hugin.com/developer/tutorials/BN_example/">tutorial</a>.

First we need to create a Hugin domain:

<pre>
     AppleTree <- hugin.domain()
</pre>

Then we add the nodes:

<pre>
     add.node(AppleTree, "Sick", states = c("yes", "no"))
     add.node(AppleTree, "Dry", states = c("yes", "no"))
     add.node(AppleTree, "Loses", states = c("yes", "no"))
</pre>

Next add the edges:

<pre>
     add.edge(AppleTree, "Loses", "Sick")
     add.edge(AppleTree, "Loses", "Dry")
</pre>

After adding all of the nodes and edges, we specify the conditional probabilities. The best practice for setting a conditional probability table (CPT) is to use the <code>get.table</code> function to get the CPT (as a data frame) for a given node from the Hugin domain, set the conditional probabilities, then use the <code>set.table</code> function to actually set the CPT for the given node in the Hugin domain.

<pre>
     sick.table <- get.table(AppleTree, "Sick")
     sick.table[, 2] <- c(0.1, 0.9)
     set.table(AppleTree, "Sick", sick.table)
</pre>

Repeat for Dry:

<pre>
     dry.table <- get.table(AppleTree, "Dry")
     dry.table[, 2] <- c(0.1, 0.9)
     set.table(AppleTree, "Dry", dry.table)
</pre>

And for Loses:

<pre>
     loses.table <- get.table(AppleTree, "Loses")
     loses.table[, 4] <- c(0.95, 0.05, 0.85, 0.15, 0.90, 0.1, 0.02, 0.98)
     set.table(AppleTree, "Loses", loses.table)
</pre>

Then compile the domain:

<pre>
     compile(AppleTree)
</pre>

Enter some evidence:

<pre>
     set.finding(AppleTree, "Loses", "yes")
</pre>

And finally, propagate and get beliefs:

<pre>
     propagate(AppleTree)
     get.belief(AppleTree, "Sick")
           yes        no 
     0.4939956 0.5060044 
</pre>

If we don't make any mistakes we get the same answer as the tutorial.

</body>
</html>
