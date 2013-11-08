<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv='Content-Type' content='application/xhtml+xml; charset=utf-8' />
		<title>YINING KARL LI | Takua Render</title>	
		<LINK REL="SHORTCUT ICON" HREF="../../includes/favicon.ico" />
		<link rel="apple-touch-icon" href="../../includes/icon.png"/> 
		<link rel='stylesheet' href='../../includes/css/style.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='../projects.css' type='text/css' media='screen' />

		<script type="text/javascript" src="../../includes/js/jquery.js"></script>
		<script type="text/javascript" src="../../includes/js/smoothscroll.js"></script>
		<script type="text/javascript" src="../../includes/js/navbar.js"></script>
		
		<script type="text/javascript" src="http://use.typekit.com/ivw5chn.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="../../includes/js/analytics.js"></script>
	</head>
	<?php
		include '../../includes/navigation.php';
	?>
	<body>
		<div class="content">
			<div class="title">Takua Render</div>			
			<div class="subtitle">A physically-based photorealistic global illumination renderer</div>
			
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/lambo_back.png"><img src="images/lambo_back.png" width="900" height="506" ></a>
				<div class="caption">A render of a 200000 polygon Lamborghini Aventador model. Lighting was calculated all indirectly through unidirectional pathtracing, entirely on the GPU through CUDA. The render took about 1.5 hours to generate approximately 25000 samples per pixel. No modifications have been made to this image outside of the renderer.</div>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Overview</div>
				<p>Takua Render is a physically-based photorealistic 3D renderer I am writing from scratch in C++ and CUDA. Takua is built from the ground up as a global illumination renderer supporting global illumination through pathtracing. The renderer is still a work in progress, but already supports a number of features, listed below. The ultimate objective of this project is to built a production-capable renderer comparable to commercial renderers such as Mentalray or Vray.
				<p>This project is under active development and is currently my primary focus.
			</div> 
			
			<div class="projecttextrow">
				<div class="subtitle">Features</div>
				<div class="projecttextleftbar">
					<p><b>Global Illumination: </b>Full, physically based, unbiased indirect illumination rendering through unidirectional Monte-carlo pathtracing with support for an arbitrary number of arbitrarily shaped light sources.
					<p><b>Geometry: </b>Supports cube and sphere primitives with arbitrary transformations and supports loading OBJ meshes with arbitrary transformations. Also supports instancing of geometry.
					<p><b>Materials: </b>Supports physically based BRDFs, including Lambertian diffuse, Blinn-Phong specular/reflective, Fresnel reflectance/transmission via both Schlick's Approximation and actual S-P polarization, Schnell's law of refraction, and more. Also includes support for full subsurface scattering through brute-force Monte-Carlo scattering.
					<p><b>Textures: </b>Supports loading an arbitrary number of arbitrarily sized textures in PNG and BMP format to drive any material property in the renderer. Some examples include texture driven color, reflectance, glossiness, index of refraction, and more.
					<p><b>KD-Tree: </b>Uses a highly efficient KD-Tree system including Surface Area Heuristic based rapid construction and both stackless traversal and short-stack while-while traversal on both the CPU and the GPU. KD-Tree acceleration can be enabled for both individual meshes and entire scenes.
					<p><b>Sampling Techniques: </b>Supports sampling through both uniform random sampling and stratified sampling, with Halton-sequence sampling and (0,2)-Sequence sampling in development. Different ray operations can be assigned different sampling techniques.
				</div>
				<div class="projecttextrightbar">
					<p><b>Blur Effects: </b>Supports transformational motion blur by sampling at multiple points in time, and supports physically correct depth of field through simulation of aperture shape and size and lens shape.
					<p><b>Scene Loading: </b>Uses a custom scene format defining geometry, lights, materials, camera settings, render settings, animation over time, and more.
					<p><b>Image Output: </b>Outputs BMP or PNG images and includes antialiasing through jittered supersampling. Also includes gamma correction for final renders. Z-Depth passes can be output alongside color passes.
					<p><b>Interface: </b>Includes a live preview mode built using GLFW that displays the render as it progresses. Also includes a OpenGL wireframe preview view for scene files and a path visualizer that can visualize the current photon path being traced by the renderer.
					<p><b>GPU Acceleration: </b>Includes both a CPU rendering core that runs on standard x86 and ARM hardware, and a CUDA rendering core for GPU acceleration on NVIDIA graphics cards. Support for running in CUDA mode on non-NVIDIA hardware through the GPUOcelot library is also being experimented with.
					<p><b>Architecture: </b>Fully cross platform, compiles on OSX, Fedora Linux, and Windows without modification and without external dependencies aside from the C++11 Standard Library itself, the CUDA runtime, and GLFW. Internally includes GLM and stb_image for some linear algebra functions and for image output, but aside from that, is written entirely from scratch. Uses OpenMP on the CPU for multithreading.
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Selected Images</div>
				<br>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:640px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/dragonsss_bright.png"><img src="images/dragonsss_bright.png" width="640" height="640" ></a>
				<div class="caption">A render of the Stanford Dragon exhibiting subsurface scatter through brute force Monte-Carlo scattering. Lighting was calculated all indirectly through unidirectional pathtracing. No modifications have been made to this image outside of the renderer.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:640px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/glassdragon_dof.png"><img src="images/glassdragon_dof.png" width="640" height="640"></a>
				<div class="caption">A render of the Stanford Dragon with a glass material inside a Cornell-Box type environment, with an extremely shallow depth of field.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:640px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/stripes.png"><img src="images/stripes.png" width="640" height="640"></a>
				<div class="caption">A render of a test scene demonstrating texture-driven color, glossiness, reflectance, and index of refraction.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:640px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/uvtest.png"><img src="images/uvtest.png" width="640" height="640"></a>
				<div class="caption">A render from Takua Render demonstrating a number of textures with various UV transforms applied. Note the lack of aliasing and moire-patterns in textured surfaces.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/dragon_kd.png"><img src="images/dragon_kd.png" width="900" height="506"></a>
				<div class="caption">A heatmap showing the cost of traversing through a KD-Tree build for the Stanford Dragon. Areas with brighter red indicate more expensive ray-intersection tests, whereas darker areas are cheaper to test.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/dragon_white.png"><img src="images/dragon_white.png" width="900" height="506"></a>
				<div class="caption">A test render of the Stanford Dragon on a white backdrop with a standard studio style lighting setup.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<a href="http://www.yiningkarlli.com/projects/takuarender/images/deloreon.png"><img src="images/deloreon.png" width="900" height="506"></a>
				<div class="caption">A test render of a approximately 100000 poly Deloreon model on a white backdrop with a standard studio style lighting setup.</div>
				</div>
			</div>
			<div align="center" class="projectimagerow">
				<div style="width:900px">
				<iframe src="http://player.vimeo.com/video/53735318" width="900" height="508" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				<div class="caption">An animated sequence consisting of 300 frames. Each frame took approximately one minute to render with 5000 samples per pixel.</div>
				</div>
			</div>

			<div class="projecttextrow">
				<div class="subtitle">Planned Future Improvements</div>
				<div class="projecttextleftbar">
					<p><b>More GI Models: </b>Support for bidirectional pathtracing and progressive photon mapping are planned. Support for Metropolis Light Transport and spherical harmonics is being considered.
					<p><b>Direct Lighting: </b>Direct lighting support, including a sun and sky model, is planned and is currently the top priority feature under development.
					<p><b>Improved BRDFs: </b>Support for additional BRDF models such as Cook-Torrance, Torrance-Sparrowm Oren-Nayar microfacet, and Ward anistropic is planned.
					<p><b>Maya Integration: </b>Maya integration is being considered for once the main CPU implementation is complete.
				</div>
				<div class="projecttextrightbar">
					<p><b>Displacement/Bump: </b>Support for texture driven displacement mapping and normal/vector mapping is planned.
					<p><b>Deformational Motion Blur: </b>Support for deformational motion blur and motion blurred displacement maps is planned.
					<p><b>Dispersion/Diffraction: </b>Support for wavelength based splitting of light into component colors to achieve effects like diffraction is planned.
					<p><b>Volumetric Rendering: </b>Integrated volume rendering is planned.
				</div>
			</div>
			
			<div class="projecttextrow">
					<div class="subtitle">Acknowledgements</div>
					<p>This project would not be possible without the guidance of Dr. <a href="http://www.graphics.cornell.edu/~kiderj/">Joseph T. Kider</a>, <a href="http://www.alinenormoyle.com/">Aline Normoyle</a>, <a href="http://www.seas.upenn.edu/~pcozzi/">Patrick Cozzi</a>, and Professor <a href="http://www.cis.upenn.edu/~badler/">Norm Badler</a>. Also, friends Gabriel Leung and <a href="http://danknowlton.com/">Dan Knowlton</a> have been instrumental as sounding boards for ideas and partners for discussion. Finally, numerous discussions with <a href="http://peterkutz.com/">Peter Kutz</a> have provided me with a number of critical insights and his <a href="http://photorealizer.blogspot.com/">Photorealizer</a> project is what inspired me to undertake this project.
			</div>
			
			<div class="projecttextrow">
			<div class="subtitle">Project Blog Posts</div>
					<p>I am posting progress updates for Takua Render to my development blog, <a href="http://yiningkarlli.blogspot.com">Code & Visuals</a>. The following posts detail the ongoing development of this project. Posts are listed starting with the most recent:
				<div class="projecttextleftbar">
					<p>20. <a href="http://blog.yiningkarlli.com/2013/04/giant-mesh-test.html">Giant Mesh Test</a>
					<p>19. <a href="http://blog.yiningkarlli.com/2013/04/importance-sampled-direct-lighting.html">Importance Sampled Direct Lighting</a>
					<p>18. <a href="http://blog.yiningkarlli.com/2013/04/working-towards-importance-sampled.html">Working Towards Importance Sampled Direct Lighting</a>
					<p>17. <a href="http://yiningkarlli.blogspot.com/2013/03/stratified-versus-uniform-sampling.html">Stratified versus Uniform Sampling</a>
					<p>16. <a href="http://yiningkarlli.blogspot.com/2013/03/first-progress-on-new-pathtracing-core.html">First Progress on New Pathtracing Core</a>
					<p>15. <a href="http://yiningkarlli.blogspot.com/2013/03/short-stack-kd-tree-traversal.html">Short-stack KD-Tree Traversal</a>
					<p>14. <a href="http://yiningkarlli.blogspot.com/2013/02/stackless-kd-tree-traversal.html">Stackless KD-Tree Traversal</a>
					<p>13. <a href="http://yiningkarlli.blogspot.com/2013/02/revision-3-kd-treeobjcore.html">Revision 3 KD-Tree/ObjCore</a>
					<p>12. <a href="http://yiningkarlli.blogspot.com/2013/02/bounding-boxes-for-ellipsoidsfigure.html">Bounding Boxes for Ellipsoids</a>
					<p>11. <a href="http://yiningkarlli.blogspot.com/2013/01/revision-3-old-renders.html">Revision 3, Old Renders</a>
				</div>
				<div class="projecttextrightbar">
					<p>10. <a href="http://yiningkarlli.blogspot.com/2012/12/texture-mapping.html">Texture Mapping</a>
					<p>9. <a href="http://yiningkarlli.blogspot.com/2012/12/blurred-glossy-reflections.html">Blurred Glossy Reflections</a>
					<p>8. <a href="http://yiningkarlli.blogspot.com/2012/09/thoughts-on-stackless-kd-tree-traversal.html">Thoughts on Stackless KD-Tree Traversal</a>
					<p>7. <a href="http://yiningkarlli.blogspot.com/2012/09/takuaavohkii-render.html">TAKUA/Avohkii Render</a>
					<p>6. <a href="http://yiningkarlli.blogspot.com/2012/07/random-point-sampling-on-surfaces.html">Random Point Sampling on Surfaces</a>
					<p>5. <a href="http://yiningkarlli.blogspot.com/2012/07/thoughts-on-ray-bounce-depth.html">Thoughts on Ray Bounce Depth</a>
					<p>4. <a href="http://yiningkarlli.blogspot.com/2012/06/more-kd-tree-fun.html">More KD-Tree Fun</a>
					<p>3. <a href="http://yiningkarlli.blogspot.com/2012/05/subsurface-scattering-and-new-name.html">Subsurface Scattering and New Name</a>
					<p>2. <a href="http://yiningkarlli.blogspot.com/2012/03/pathtracer-with-kd-tree.html">Pathtracer with KD-Tree</a>
					<p>1. <a href="http://yiningkarlli.blogspot.com/2012/03/first-pathtraced-image.html">First Pathtraced Image</a>
				</div>
			</div>
			
			<div class="projecttextrow">
				<div class="subtitle">Resources</div>
				<p>In the process of building Takua Render, I have drawn upon the following papers, books, and articles. They are listed in no particular order.
				<p><a href="http://www.pbrt.org/">Physically Based Rendering</a>: The go-to reference book for rendering, by Matt Phar and Greg Humphreys.
				<p><a href="http://www.cis.upenn.edu/~badler/courses/cis560.html">CIS460 Computer Graphics Notes</a>: An extremely detailed and thorough set of slides created by Professor Norm Badler for his course CIS460: Computer Graphics at the University of Pennsylvania. Unfortunately, Professor Badler's notes are not available publicly.
				<p><a href="http://dl.acm.org/citation.cfm?id=15902">The Rendering Equation</a>: The original 1986 paper presenting the global illumination rendering problem and pathtracing solution, by James Kajiya.
				<p><a href="http://graphics.stanford.edu/papers/veach_thesis/">Robust Monte Carlo Methods for Light Transport Simulation</a>: Eric Veach's 1997 Stanford PhD Dissertation presenting the Metropolis Light Transport method. Also contains useful information on unidirectional and bidirectional pathtracing.
				<p><a href="http://www.flipcode.com/archives/Reflections_and_Refraction_in_Raytracing.shtml">Reflections and Refraction in Raytracing</a>: A paper detailing the math behind reflection and refraction, by Bram de Greve.
				<p><a href="http://graphics.ucsd.edu/~henrik/papers/book/">Realistic Image Synthesis Using Photon Mapping</a>: The original photon mapping book covering general GI problems and the photon mapping algorithm, by Henrik Wann Jensen.
				<p><a href="http://portal.acm.org/citation.cfm?id=192952&CFID=15151515&CFTOKEN=6184618">The Direct Lighting Computation in Global Illumination Methods</a>: Changyaw Wang's 1994 Indiana University, Bloomington PhD Dissertation detailing the direct lighting component in GI.
				<p><a href="http://dl.acm.org/citation.cfm?doid=563858.563893">Models of Light Reflection for Computer Synthesized Pictures</a>: James Blinn's 1977 paper on the Blinn-Phong shading model.
				<p><a href="http://www.sci.utah.edu/~wald/Publications/2011///PathCompaction/download//compact.pdf">Active Thread Compaction for GPU Pathtracing</a>: Ingo Wald's 2011 paper on thread compaction as an acceleration technique for GPU pathtracing.
				<p><a href="http://www.kunzhou.net/2008/kdtree.pdf">Real-Time KD-Tree Construction on Graphics Hardware</a>: Kun Zhou's 2008 paper on short-stack KD-Tree construction and traversal.
				<p><a href="http://graphics.cs.uni-sb.de/fileadmin/cguds/papers/2007/popov_07_GPURT/Popov_et_al._-_Stackless_KD-Tree_Traversal_for_High_Performance_GPU_Ray_Tracing.pdf">Stackless KD-Tree Traversal for High Performance GPU Ray Tracing</a>: Stefan Popov's 2007 paper on stackless KD-Tree traversal through rope-based KD-Trees.
				<p><a href="http://graphics.stanford.edu/papers/i3dkdtree/">Interactive KD-Tree GPU Raytracing</a>: Daniel Horn's 2007 paper on various GPU KD-Tree traversal techniques, including short-stack while-while traversal.
				<p><a href="http://twvideo01.ubm-us.net/o1/vault/gdc09/slides/takahiroGDC09s_1.pdf">Parallelizing the Physics Pipeline: Physics Simulations on the GPU</a>: Takahiro Harada's 2009 GDC talk on GPU physics. The relevant part for this project is the section on history-flag based stackless KD-Tree traversal.
				<p><a href="http://www.iquilezles.org/www/articles/ellipses/ellipses.htm">Working with Ellipses</a>: An article by Inigo Quilez on quirks with calculating ellipse bounding boxes and other math.
				<p><a href="http://en.wikipedia.org/wiki/Fresnel_equations">Fresnel Equations Wikipedia Article</a>: A good overview of the math behind Fresnel reflection/refraction.
				<p><a href="http://en.wikipedia.org/wiki/Kd_tree">KD-Tree Wikipedia Article</a>: A description of the KD-tree spatial partitioning data structure.
				<p><a href="https://graphics.stanford.edu/wikis/cs248-11-winter/Assignment_4/kdtree">KD-Tree Assignment Description</a>: A summary of how kd-trees work from a Stanford University computer science course's homework assignment. 
				<p><a href="http://www-personal.umich.edu/~nikitan/articles/pathtracing/">Writing A Pathtracer</a>: An incomplete, but nonetheless useful primer on some basic pathtracing concepts, by Nikita Nikishin.
				<p><a href="http://en.wikipedia.org/wiki/Path_tracing">Wikipedia Pathtracer Article</a>: A fairly concise description of the pathtracing concept.
				<p><a href="http://en.wikipedia.org/wiki/Bidirectional_reflectance_distribution_function">Bidirectional Reflectance Distribution Function Wikipedia Article</a>: General summary of what BRDFs are and how they work.
				<p><a href="http://en.wikipedia.org/wiki/Bidirectional_scattering_distribution_function">Bidirectional Scattering Distribution Function Wikipedia Article</a>: Describes what BSDFs are and how they differ from BRDFs.
				
				<p><a href="http://raytracey.blogspot.com/">Ray Tracey's Blog</a>: Sam Lampere (Ray Tracey)'s blog following the development of OTOY's Brigade Engine.
				<p><a href="http://photorealizer.blogspot.com/">Photorealizer: Physically-Based Renderer Blog</a>: Peter's Kutz's development blog for Photorealizer.
				<p><a href="http://renderspud.blogspot.com/">Renderspud Blog</a>: Mike Farnsworth's development blog for Renderspud.
				
				<p><a href="http://www.sjbrown.co.uk/">Simon's Graphics Blog</a>: Simon Brown's pathtracing development blog.
				
				
				
				
			</div>

		</div>
	</body>
</html>





