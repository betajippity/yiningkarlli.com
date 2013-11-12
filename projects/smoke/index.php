<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Smoke Simulator/Volumetric Renderer</title>
		<?php
			include '../../includes/header.php';
		?>
		<link rel='stylesheet' href='../projects.css' type='text/css' media='screen' />
	</head>
	<?php
		include '../../includes/navigation.php';
	?>
	<body>
		<div class="content">
			<div class="title">Smoke Simulator/Volumetric Renderer</div>			
			<div class="subtitle">A Semi-Lagrangian smoke simulation system and integrated volumetric renderer</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/smoke/images/smoke_frame.png"><img src="http://www.yiningkarlli.com/projects/smoke/images/smoke_frame.png" width="900" height="506" ></a>
				<div class="caption">A frame from from a 100x100x100 size grid smoke simulation, rendered with a pseudo-blackbody effect with my volumetric renderer.</div>
				</div>
			</div>			
			
			<div class="projecttextrow">
				<div class="subtitle">Overview</div>
				<p>One of the spring 2012 <a href="https://www.seas.upenn.edu/~cis563/Spring2012/">CIS563: Physically Based Animation</a> assignments was a semi-Lagrangian smoke simulator based on the MAC-grid advection approach described in the <a href="http://www.cs.ubc.ca/~rbridson/fluidsimulation/">SIGGRAPH 2007 Fluid Simulation course notes</a>. I extended the project to include multithreading, RK4 integration, better support for extremely large simulation grids, and added a volumetric renderer with a pseudo-blackbody lighting system. The volumetric renderer can be run either separate from the simulator, or as an integrated component rendering frames as soon as they are simulated. This project is written entirely in C++.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Base Code</div>
				<p>The simulator component of this project utilizes base code written by <a href="http://www.alinenormoyle.com/">Aline Normyle</a> and <a href="http://www.peterkutz.com/">Peter Kutz</a> for CIS563: Physically Based Animation. The volumetric renderer component was written from scratch and utilizes no base code.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Features</div>
				<div class="projecttextleftbar">
					<p><b>Semi-Lagrangian Smoke Simulation: </b>The simulation works in a semi-Lagrangian fashion by advecting densities and temperatures through a MAC grid structure and solving smoke states using a pre-conditioned conjugate gradient solver based on the method described in <a href="http://www.cs.ubc.ca/~rbridson/">Robert Bridson</a>'s 2007 SIGGRAPH <a href="http://www.cs.ubc.ca/~rbridson/fluidsimulation/">Fluid Simulation Course Notes</a>.
					<p><b>Large grids: </b>The simulator supports extremely large grids (100x100x100 and larger) by using a sparse MAC grid representation that only stores grid cells that contain nonzero values in memory.
															
					<p><b>Multiple Integration Schemes: </b>The simulator supports Euler and fourth-order Runge-Kutta integration, and allows switching between the two methods on the fly.					
					<p><b>Live Preview: </b>The simulator comes with an OpenGL preview complete with interactive camera and built in screen recording and simulation debugging tools, including support for visualizing advection directions and velocities in realtime.
					<p><b>Architecture: </b>Both the smoke simulator and volumetric renderer compile without modification on OSX, Windows, and Fedora Linux, and both are multithreaded using OpenMP. Both the simulator and renderer use stb_image for image output and GLM for linear algebra operations.	
				</div>
				<div class="projecttextrightbar">
					<p><b>Raymarching Volumetric Renderer: </b>Included with the simulator is a custom, written from scratch raymarching volumetric renderer capable of acting as an integrated renderer with the simulator, and capable of reading in volumetric data from disk and running as a standalone renderer. Uses the <a href="http://en.wikipedia.org/wiki/Beer%E2%80%93Lambert_law">Beer-Lambert Law</a> to model light absorption in a volume of heterogeneous density, and includes optional trilinear and tricubic density interpolation.
					<p><b>Multiple Light Sources: </b>The renderer supports an arbitrary number of light sources of arbitrary intensity and color.
					<p><b>Pseudo-Blackbody Illumination: </b>Volumetric data can be rendered with self-illumination provided by a pseudo-blackbody radiation effect using an exponential falloff function to simulate light emission and attenuation within volumes of heterogeneous density.
					<p><b>Procedural Noise: </b>The volumetric renderer can generate and render volumetric clouds using procedural noise functions such as Perlin/Simplex noise when running in standalone mode.
					<p><b>Maya Integration: </b>Maya integration is supported through a Python script that sends spheres modeled and positioned in Maya as boundary conditions for volumetric renderer procedural cloud generation.			
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Selected Videos</div>
				<br>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/41543438?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption"> A smoke simulation running on a 100x100x100 size grid, rendered with a pseudo-blackbody effect with my volumetric renderer.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/38057955?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">A smoke simulation running on a 100x100x50 size grid, visualized with the simulator's live OpenGL view.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/53634239?color=ffffff" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">A procedurally generated cloud, created with Simplex noise and animated in Maya, rendered with my volumetric renderer.</div>
				</div>
			</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/53714601" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>				
				<div class="caption">An expanding cloud rendered with my volumetric renderer with pseudo-blackbody illumination.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Acknowledgements</div>
				<p>This project would not be possible without the guidance of Dr. <a href="http://www.graphics.cornell.edu/~kiderj/">Joseph T. Kider</a>, the instructor for <a href="http://www.seas.upenn.edu/~cis563/">CIS563</a> in the spring of 2012. Additionally, the volumetric renderer component of this project was derived from <a href="http://www.cis.upenn.edu/~badler/courses/cis560.html">CIS460/560</a>, taught by <a href="http://www.cis.upenn.edu/~badler/">Professor Norm Badler</a>. I would also like to thank CIS563 TAs <a href="https://sites.google.com/site/tiantianliugraphics/">Tiantian Liu</a> and <a href="http://peterkutz.com/">Peter Kutz</a>. Friends Gabriel Leung and <a href="http://www.danknowlton.com/"> Dan Knowlton</a> acted as sounding boards for various ideas and discussed ideas.
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Project Blog Posts</div>
				<p>Progress updates for this project were posted to my development blog, <a href="http://yiningkarlli.blogspot.com">Code & Visuals</a>. The following posts detail the development of this project. Posts are listed starting with the most recent:
				<div class="projecttextleftbar">
					<p>5. <a href="http://yiningkarlli.blogspot.com/2012/09/volumetric-renderer-revisited.html">Volumetric Renderer Revisited</a>	
					<p>4. <a href="http://yiningkarlli.blogspot.com/2012/05/smoke-sim-volumetric-renderer.html">Smoke Sim + Volumetric Renderer</a>	
					<p>3. <a href="http://yiningkarlli.blogspot.com/2012/03/smoke-sim-preconditioning-and-huge.html">Smoke Sim: Preconditioning and Huge Grids</a>	
					<p>2. <a href="http://yiningkarlli.blogspot.com/2012/03/smoke-simulation-basics.html">Smoke Simulation Basics</a>
					<p>1. <a href="http://yiningkarlli.blogspot.com/2011/10/volumetric-renderer-for-rendering.html">A Volumetric Renderer for Rendering Volumes</a>
				</div>
				<div class="projecttextrightbar">
		
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Resources</div>
				<p>In the process of building my simulator, I drew upon the following papers, and articles. They are listed in no particular order.
				<p><a href="http://www.cs.ubc.ca/~rbridson/fluidsimulation/">SIGGRAPH 2007 Fluid Simulation Course Notes</a>: An extremely comprehensive set of notes detailing semi-Lagrangian based fluid simulation, by Robert Bridson and Matthias Muller-Fischer.
				<p><a href="http://www.cs.ubc.ca/~rbridson/fluidbook/">Fluid Simulation for Computer Graphics</a>: The go-to reference book for fluid simulation, by Robert Bridson.
				<p><a href="http://en.wikipedia.org/wiki/Preconditioner">Preconditioner Wikipedia Article</a>: An article summarizing how mathematical preconditioners work.
				<p><a href="http://en.wikipedia.org/wiki/Runge%E2%80%93Kutta_methods">Runge-Kutta Methods Wikipedia Article</a>: A fairly concise summary of the Runge-Kutta integration schemes, including RK4
				<p><a href="http://magnuswrenninge.com/content/pubs/ProductionVolumeRenderingFundamentals2011.pdf">SIGGRAPH 2011 Production Volume Rendering Course Notes</a>: An extremely comprehensive set of notes detailing volumetric rendering by Magnus Wrenninge and Nafees Zafar.
				<p><a href="http://en.wikipedia.org/wiki/Beer%E2%80%93Lambert_law">Beer-Lambert Law Wikipedia Article</a>: An article summarizing the mathematics and physics of Beer-Lambert absorption.
				<p><a href="http://graphics.stanford.edu/papers/volume-cga88/">Display of Surfaces from Volume Data</a>: The 1988 Marc Levoy paper introducing volume rendering
			</div>				
		</div>
		</div>
	</body>
</html>





