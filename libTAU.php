<?php
   include("IMP.inc");
   print_page_header("libTAU support code");
?>

<div id="libTAU">

<a name="stable"></a>

<p>libTAU is a support library needed for MultiFit, provided by
<a href="http://bioinfo3d.cs.tau.ac.il/">Haim Wolfson's group</a> at
<a href="http://tau.ac.il">Tel Aviv University</a>. It is not open source, but
we have permission to distribute its binaries with MultiFit and IMP. If you
want to build MultiFit from source code, you will first need to download
libTAU:</p>

<dl>
<dt>For Mac users</dt>
<dd>We recommend you install the <a
href="http://mxcl.github.com/homebrew/">homebrew</a> package manager; then you
can install libTAU by simplying typing "<code>brew tap salilab/salilab;
brew install libTAU</code>".<p/>
</dd>

<dt>For Linux users with RPM</dt>
<dd>
We provide RPMs for <a href="libTAU/rhel5/">RedHat Enterprise 5</a>,
<a href="libTAU/rhel6/">RedHat Enterprise 6</a>,
<a href="libTAU/rhel7/">RedHat Enterprise 7</a>, and
<a href="libTAU/fedora/">Fedora</a>, for both 32-bit (i386) and 64-bit (x86_64)
machines. (They may also work on similar systems, such as Ubuntu.)<p/>
</dd>

<dt>Manual install for Mac, Windows or Linux users</dt>
<dd>
We provide binaries for 32-bit or 64-bit Intel Macs running OS X 10.6 or
later, 32-bit or 64-bit Windows, and 32-bit (i386) or 64-bit (x86_64) Linux.
Download the <a href="libTAU/libTAU-1.0.1.zip">libTAU zipfile</a>, extract it,
then follow the instructions in the <tt>README</tt> file.
(<a href="libTAU/libTAU-1.0.1.zip.asc">GPG signature</a>)<p/>
</dd>

</dl>

<p><i>The zipfile and RPMs are signed with
<a href="http://salilab.org/~ben/pubkey.asc">this GPG key</a>.</i></p>

</div>

<?php
   print_page_footer();
?>
