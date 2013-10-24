<?php
   include("IMP.inc");
   print_page_header("Download");
?>

<div id="download">

<h2>IMP 2.1.0 Linux packages</h2>

<ul>
<li>RedHat Enterprise Linux 5 RPMs (Python 2.4)<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.1.0/download/IMP-2.1.0-1.el5.centos.i386.rpm">32-bit</a>;
<a href="get.php?pkg=2.1.0/download/IMP-2.1.0-1.el5.centos.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.1.0/download/IMP-devel-2.1.0-1.el5.centos.i386.rpm">32-bit</a>;
<a href="get.php?pkg=2.1.0/download/IMP-devel-2.1.0-1.el5.centos.x86_64.rpm">x86_64</a>
  </li>
  <li><b>Note</b> that you will also need a newer version of HDF5 than ships
with RHEL5. We provide this for
<a href="nightly/download/libhdf5-187-1.8.7-2.el5.centos.i386.rpm">32-bit</a> and
<a href="nightly/download/libhdf5-187-1.8.7-2.el5.centos.x86_64.rpm">64-bit</a>.</li>
</ul>
</li>

<li>RedHat Enterprise Linux 6 RPMs (Python 2.6)<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.1.0/download/IMP-2.1.0-1.el6.i686.rpm">32-bit</a>;
<a href="get.php?pkg=2.1.0/download/IMP-2.1.0-1.el6.x86_64.rpm">x86_64</a>
  </li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.1.0/download/IMP-devel-2.1.0-1.el6.i686.rpm">32-bit</a>;
<a href="get.php?pkg=2.1.0/download/IMP-devel-2.1.0-1.el6.x86_64.rpm">x86_64</a>;
  </li>
</ul>
</li>

<li>Fedora 19 Linux RPMs (Python 2.7, with CGAL):<ul>
  <li>Base IMP package (needed for all users):
<a href="get.php?pkg=2.1.0/download/IMP-2.1.0-1.fc19.x86_64.rpm">x86_64</a></li>
  <li>IMP-devel package (needed to compile C++ code using the IMP libraries):
<a href="get.php?pkg=2.1.0/download/IMP-devel-2.1.0-1.fc19.x86_64.rpm">x86_64</a></li>
</ul>
</ul>

<h2>Signature</h2>

<p>All of the RPMs are signed with
<a href="http://salilab.org/~ben/pubkey.asc">this GPG key</a>. We recommend
you check your IMP RPMs for tampering by downloading the key, importing it
(with <tt>sudo rpm --import pubkey.asc</tt>), then verifying the RPMs
(with <tt>rpm -K IMP*.rpm</tt>).</p>

<h2>Source RPMs</h2>

<p>Source RPMs (to rebuild the package for Linux variants not listed above)
are <a href="2.1.0/download/">also available</a>.</p>

</div>

<?php
   print_page_footer();
?>
