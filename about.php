<?php
   include("IMP.inc");
   print_page_header("About IMP");
?>

<div id="goal">
<p>IMP's broad goal is to contribute to a comprehensive structural characterization of biomolecules ranging in size and complexity from small peptides to large macromolecular assemblies. Detailed structural characterization of assemblies is generally impossible by any single existing experimental or computational method. This barrier can be overcome by hybrid approaches that integrate data from diverse biochemical and biophysical experiments (eg, x-ray crystallography, NMR spectroscopy, electron microscopy, immuno-electron microscopy, footprinting, chemical cross-linking, FRET spectroscopy, small angle X-ray scattering, immunoprecipitation, genetic interactions, etc...).</p>

<p>
We formulate the hybrid approach to structure determination as an optimization problem, the solution of which requires three main components:</p>
<ul>
   <li>the representation of the assembly,</li>
   <li>the scoring function and</li>
   <li>the optimization method.</li>
</ul>
<p>The ensemble of solutions to the optimization problem embodies the most accurate structural characterization given the available information.</p>

<p>We created IMP, the Integrative Modeling Platform, to make it easier to implement such an integrative approach to structural and dynamics problems. IMP is designed to allow mixing and matching of existing modeling components as well as easy addition of new functionality. We encourage and support contributions from other laboratories through the IMP Community.</p>

<p>See also <a href="talks.html">the talks page</a> for various talks and other
presentations about IMP.</p>

</div>

<?php
   print_page_footer();
?>
