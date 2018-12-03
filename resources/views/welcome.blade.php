<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  		<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Calamot
                </div>

                <div class="row">
                   <img class='col mb-5' src='img/prova-web-3.jpg'>
                </div>
            </div>
        </div>
  
   
    
     </body>
    <footer id="" class='row bg-dark'>

			
				<div class="row">
				<div class=" col col-8">
				<a  href="#"><i class="fa fa-angle-up"></i></a>
				
				
					
					
						
					<img src="http://www.ieselcalamot.com/wp-content/uploads/sites/8/2015/02/gene-ensenyament1.png" alt="">
												
						<div id="copyright">
						<p> INSTITUT EL CALAMOT <br /><a href="http://cwww.ieselcalamot.com/?page_id=35">Avda. Joan Carles I, 62 08850 GAVÀ</a><br />Tel. 936334450 - Copyright © 2015 - IES El Calamot | <a href="http://calamotwp.clickartedu.com/?page_id=315">Nota legal</a></p>
						</div><!--/#copyright-->
					
												
					</div>
					
					<div class=" col col-6">	
						<ul class="row"><li><a rel="nofollow" class="col mx-3" title="Facebook" href="https://www.facebook.com/institutelcalamot?fref=ts" target="Array"><i class="fa fa-facebook " style="font-size: 30px;"></i></a></li><li><a rel="nofollow" class="col p-2 mx-3" title="Twitter" href="https://twitter.com/inselcalamot" target="Array"><i class="fa fa fa-twitter" style="font-size: 30px;"></i></a></li><li><a rel="nofollow" class="col p-2 mx-3" title="Youtube" href="https://www.youtube.com/user/institutelcalamot" target="Array"><i class="fa fa-youtube " style="font-size: 30px;"></i></a></li><li><a rel="nofollow" class="col p-2 mx-3" title="rss" href="http://feeds.feedburner.com/institutelcalamot" ><i class="fa fa-rss " style="font-size: 30px;"></i></a></li><li><a rel="nofollow" class="col p-2 mx-3 text-info " title="Mail" href="mailto://ieselcalamot@xtec.cat" target="Array"><i class="fa fa-envelope " style="font-size: 30px;"></i></a></li><li><a rel="nofollow" class="col p-2 mx-3" title="Instagram" href="https://www.instagram.com/institutelcalamot/" ><i class="fa fa-instagram" style="font-size: 30px;"></i></a></li></ul>				
					</div>
				</div>
					
		
		
	</footer><!--/#footer-->
	
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        
</html>
