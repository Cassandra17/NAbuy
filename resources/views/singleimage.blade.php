@extends('default')

    <!-- 要更换图片 -->
    <!--  <img src="watch.jpg" data-magnify-src="watch-large.jpg" style="margin-top: 100px"> -->

  	<div id="introduction" class="page hasShadow">
    
      	

     <div id="rondellGallery" style="margin-top: 100px" class="container">
        <img src="watch.jpg" alt="unicorn" title="A beautiful unicorn">
        <img src="pic2.png" alt="unicorn" title="A beautiful unicorn">
        <img src="pic3.png" alt="unicorn" title="A beautiful unicorn">
        <img src="pic4.png" alt="unicorn" title="Pic 4">
      </div>


     <!--  <hr>
            <!-- <div class="row row-margin-bottom"> -->
           <!--  <div class="container">
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                Example library
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </hr> -->

        <div class="container" align="center">
          <h2>Heading</h2>
          <p>
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. 
            Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. 
            Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
          </p>
        </div>

        <div class="col-xs-12 col-md-6;container" align="center">
            <p class="lead">
                $21.000</p>
        </div>
        <div class="col-xs-12 col-md-6;container" align="center">
            <a class="btn btn-success" href="http://www.jquery2dotnet.com">加入购物车</a>
        </div>

<!-- 	<br class="clear">
	    </div><br> -->
	    <noscript><img src="http://tracking.sebastianhelzle.net/piwik.php?idsite=5" alt=""></noscript>
	    <script src="libs/jquery-1.10.2.min.js"></script>
	    <script src="libs/jquery.mousewheel-3.0.6.min.js"></script>
	    <script src="dist/jquery.rondell.js"></script><script type="text/javascript">
	    // <script src="libs/modernizr-2.0.6.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    	<script src="dist/js/jquery.magnify.js"></script>

			<!--     // <script src="libs/jquery-1.10.2.min.js"></script> -->
    	<script src="libs/jquery.mousewheel-3.0.6.min.js"></script>
    	<script src="dist/jquery.rondell.js"></script>
    	<script type="text/javascript">
  			$(document).ready(function() {

  			$("#rondellGallery").rondell({
      	
      	preset: "thumbGallery"
    		});
			});
</script>


    </body>
</html>





