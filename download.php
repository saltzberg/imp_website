<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<a name="stable"></a>
<h2>IMP 2.0.1 stable release</h2>

<p>This release is recommended for beginners, and should be stable.
(For the very latest features, use the
<a href="#develop">development version</a> instead.)</p>

<h3>Binary installers</h3>

<ul>
<li><a href="download-windows.html">Windows</a></li>
<li><a href="download-mac.html">Mac</a></li>
<li><a href="download-linux.html">Linux</a></li>
</ul>

<h3>Documentation</h3>

<p>Please refer to the
<a href="http://salilab.org/imp/2.0.1/doc/html/">online documentation</a>.
You can also <a href="http://salilab.org/imp/2.0.1/download/imp-doc-2.0.1.tar.gz">download the documentation</a>.</p>

<a name="source"></a>
<h3>Source code</h3>

<ul>
<li><a href="http://salilab.org/imp/get.php?pkg=2.0.1/download/imp-2.0.1.tar.gz">Source code tarball</a></li>
</ul>

<p>To build IMP from source code, please refer to the
<a href="http://salilab.org/imp/2.0.1/doc/html/installation.html#userbuild">Getting started guide</a>.
</p>

<h3>Signatures</h3>

<p>Please check the
<a href="http://salilab.org/imp/2.0.1/download/MD5SUM">MD5SUM</a> and
<a href="http://salilab.org/imp/2.0.1/download/MD5SUM.asc">its signature</a>.
</p>

<hr />

<a name="develop"></a>
<h2>Development version</h2>

<p>The latest development version of the IMP source code is hosted <a
href="http://github.com/salilab/imp/">at github</a>. Note that this may not
always work, but does include new functionality not in the 
<a href="#stable">stable release</a>. This
version is tested every night; please check out the
<a href="http://salilab.org/imp/nightly/results/">nightly builds results
page</a> to see if the code is currently stable enough for your purposes.</p>

<p>Binary installers for Windows, Linux (Fedora 19, RHEL 5, RHEL 6),
and Mac OS X 10.6 or later
<a href="http://salilab.org/imp/nightly/download/">are also available</a>
for the most recent nightly build that compiled successfully.</p>

<h3>Documentation</h3>

<p>Please refer to the
<a href="http://salilab.org/imp/nightly/doc/html/">online documentation</a>.
</p>

<hr />

<a name="old"></a>
<h2>Old releases</h2>

<ul>
<li><a href="2.0.0/download/">2.0.0</a></li>
<li><a href="1.0/download/">1.0</a></li>
</ul>

</div>

<?php
   print_page_footer();
?>