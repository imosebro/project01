    <?php 
        $currentPage = "graduate";
        include "inc/top-part.inc"; 
    ?>
    <!--navbar-->
    <?php include 'inc/nav.inc';?>

       <?php
        $currentPage = "search";
        include "inc/search-engine.inc";
    ?>

    <div class="row row-offcanvas row-offcanvas-right">
	
        <div class="col-md-12">
		
            <h1 class="text-center">Graduate Studies</h1>
			
			<div class="row">
		  
				<div class="col-md-123">  <!--Is this one needed? -->
			
					<h2 class="text-left">Overview</h2>

						<p>Established in 1974, the Department of Computer Science’s graduate program builds on more than thirty years of world class research experience. The department offers both MS and PhD degrees in computer science.</p>

						<p>The PhD program includes courses, examinations, projects, research and teaching assistantships, and a doctoral dissertation developed under the supervision of a faculty advisor.<p>

						<p>The MS program is based on coursework and optional research and is designed for students who do not intend to complete a PhD degree at University of Rochester. It is particularly appropriate for students who have an undergraduate degree in fields other than CS, but seek a career in computer science.</p>

					<h2 class="text-left">Research</h2>
				
						<p>Our department places a strong emphasis on interdisciplinary work, partnering with groups across the University such as the Department of Brain and Cognitive Sciences, the Center for Visual Science, and the Laboratory for Laser Energetics.</p>

					<h2 class= "text-left"> Collegial Atmosphere</h2>

						<p>Our department is smaller than most other top ranked CS departments. There are several significant advantages to being small including:</p>
				
							<ul>
								<li>Personal attention from faculty</li>
								<li>Personalized learning in one-on-one or small group settings</li>
								<li>Collaborative decision making with graduate representatives on department committees</li>
							</ul>
					
						<p>Our size also allows helps to create a warm and friendly atmosphere. Many of our graduate students and faculty relax in the graduate student lounge, located on the seventh floor of the Computer Studies Building. Students and faculty will also get together for social events hosted by the department throughout the year.</p>

						<p>Our graduate students also participate in various events and activities sponsored by the Graduate Organizing Group (GOG), including bowling, tango lessons, and day trips to nearby scenic locations.</p>

					<h2 class= "text-left"> Prestigious Alumni</h2>
				
						<p>Many of our graduate alumni have gone on to outstanding careers in academia and industry. Some of the most prominent are:</p>
					
							<ul>
								<li>Danny Sabbah ’82 (PhD) is General Manager for Rational Software at IBM</li>
								<li>Rick Rashid ’80 (PhD) is the founder of Microsoft Research</li>
								<li>Corinna Cortes ’94 (PhD) is head of Google’s New York City lab</li>
								<li>Peter Dibble ’90 (PhD) is a principal architect of the Real Time Specification for Java</li>
							</ul>


				</div><!--/.col-xs-6.col-lg-4    ****or is it the second col-md-12?  -->
				
			</div><!--/row-->
			
        </div><!--/.col-xs-12.col-sm-9    ****or is it the first col-md-12?  -->
		
	</div> <!-- .row row-offcanvas row-offcanvas-right -->

    <!--Footer & Javascript-->
    <?php include "inc/footer.inc"; ?>