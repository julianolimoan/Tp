<!DOCTYPE html>
<html>

<head>
    <meta charset="urf-8">
    <link rel="stylesheet" type="text/css" href="site.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/sunny/jquery-ui.css" />
    <style type="text/css">
    	video{
    		max-width: 100%;
    	}
    	#slider img{
    		max-width: 100%;


    	}
    	#slider{
    		width: 200px;
    		height: 300px;
    		overflow: hidden;
    		
    		margin: 0 auto;
    	}
    	#sslider{
        		animation: oui 8s infinite;
        		display: flex;
    			flex-flow: row nowrap ;
    			justify-content: flex-start;



    	}
    	@keyframes oui{
    		25%{
    			transform: translateX(-200px);
    		}
    		50%{
    			transform: translateX(-400px);
    		}
    		75%{
    			transform: translateX(-600px);
    		}
    		100%{
    			transform: translateX(0);
    		}
    	}
    </style>

    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <script>
        $(function () {
            $('#menu').menu();
        });
    </script>

	<?php include("debut.php") ; ?>

	<div id="corps">


		<video autoplay muted><source src="video.mp4" type="video/mp4"></video> 

	<div id="slider">
			<div id="sslider">
		<img src="https://picsum.photos/200/300?random=1">
		<img src="https://picsum.photos/200/300?random=2">
		<img src="https://picsum.photos/200/300?random=3">
		<img src="https://picsum.photos/200/300?random=4">
		</div>
	</div>





	 <?php include('fin.php') ;?>
	</div>

</body>
</html>

