<!DOCTYPE html>
<html>
<head>
	<title>ISP Lookup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="/css/materialize.css"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/materialize.js"></script>
	<script type="text/javascript" src="/js/angular.min.js"></script>
	<script type="text/javascript">
		var app = angular.module('app', []);
		app.controller('mainCtrl', function($scope, $http, $rootScope) {
			$scope.providers = [];
			$scope.activeProvider = {};
			$scope.sortselect = 'lowest_rate';
			$scope.total_apis = 0;
			var id = 1;
			$scope.detailVisible = false;
			$http.get('https://lookup.0x10.info/api/lookup?type=json&query=list_isp')
			.success(function(response) {
				$('#loading').fadeOut();
				response.providers.forEach(function(provider) {
					provider.id = id;
					id++;
					$scope.providers.push(provider);
				});
			});
			$http.get('https://lookup.0x10.info/api/lookup?type=json&query=api_hits')
			.success(function(response) {
				$scope.total_apis = response.api_hits;
			});

			$scope.selectProvider = function(provider, id) {
				if(!$scope.detailVisible){
					$('.details').fadeIn();
					$scope.detailVisible = true;
				}
				$scope.activeProvider = provider;
				$('.isps').removeClass('active');
				$('.isps').removeClass('teal');
				$('#'+id).addClass('active');
				$('#'+id).addClass('teal');
			}
		});
	</script>
	<script type="text/javascript">
		window.fbAsyncInit = function() {
		    FB.init({
		        appId      : '1477353092546419',
		        xfbml      : true,
		        version    : 'v2.1'
		    });
		};

		(function(d, s, id){
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) {return;}
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<script type="text/javascript">
		function share() {
			FB.ui({
				method: 'share',
				href: document.getElementById('share_loc').value,
			}, function(response){});
		}
	</script>
</head>
<body ng-app="app">
	<div class="container" ng-controller="mainCtrl">
		<div class="row">
			<div class="col s12 card-panel teal darken-1 white-text center-align" style="padding:10px;">
				<h5>ISP Lookup</h5>
			</div>
		</div>
		<div class="row">
			<div class="col m6">
				<div class="col s12 input-field">
					<i class="material-icons prefix">search</i>
					<input type="text" id="search" ng-model="searchText">
					<label for="search">Search (by ISP name, price, rating)</label>
				</div>
				<div class="col s12 card-panel" style="padding:20px;">
					Sort By<br />
					<input type="radio" name="sortby" id="price" ng-click="sortselect='lowest_rate'" checked />
					<label for="price">Price</label>
					<input type="radio" name="sortby" id="rating" ng-click="sortselect='-ratig'" />
					<label for="rating">Rating</label>
				</div>

				<div class="center-align" id="loading">
					<div class="preloader-wrapper small active">
						<div class="spinner-layer spinner-green-only">
					    	<div class="circle-clipper left">
					        	<div class="circle"></div>
					      	</div>
					      	<div class="gap-patch">
					        	<div class="circle"></div>
					      	</div>
					      	<div class="circle-clipper right">
					        	<div class="circle"></div>
					      	</div>
					    </div>
					</div>
				</div>

				<div class="collection">
					<div class="collection-item active teal darken-1">Total ISP : {{providers.length}}<br/>API Hits : {{total_apis}}</div>
			        <a href="#!" class="collection-item isps" id="{{provider.id}}" ng-repeat="provider in providers | filter:searchText | orderBy: sortselect" ng-click="selectProvider(provider, provider.id)">
			        	{{provider.name}}
			        </a>
			    </div>
			</div>
			<div class="col m6 details" style="display:none;">
				<ul class="collection with-header">
			        <li class="collection-header center-align">
			        	<img ng-src="{{activeProvider.image}}" height="50">
			        </li>
			        <li class="collection-item">Max Speed : {{activeProvider.max_speed}}</li>
			        <li class="collection-item">{{activeProvider.contact_no}}</li>
			        <li class="collection-item">{{activeProvider.email}}</li>
			    	<li class="collection-item">Minimum Plan : {{activeProvider.lowest_rate}}</li>
			    	<li class="collection-item">
			    		<!-- <i data-ng-repeat = "i in [1,2,3,4,5]" class="material-icons">grade</i> -->
			    		<span data-ng-repeat="i in [1,2,3,4,5]">
			    			<img src="/images/star.png" ng-if="activeProvider.ratig>=i" height="30">
							<img src="/images/star_border.png" ng-if="activeProvider.ratig<i" height="30">
			    		</span>
			    	</li>
			    </ul>
			    <div class="card blue-grey darken-1">
		            <div class="card-content white-text">
		            	<span class="card-title">Description</span>
		              	<p>{{activeProvider.description}}</p>
		            </div>
		        </div>
		        <input type="hidden" id="share_loc" value="{{activeProvider.url}}">
		        <a class="btn-floating btn-large waves-effect waves-light teal darken-4" ng-href="{{activeProvider.url}}" target="_blank"><i class="material-icons">link</i></a>
	        	<a class="btn-floating btn-large waves-effect waves-light teal darken-4"><i class="material-icons">share</i></a>
	        	<a class="btn-floating btn-large waves-effect waves-light teal darken-4" target="_blank" href="/download.php?n={{activeProvider.name}}&m={{activeProvider.max_speed}}&c={{activeProvider.contact_no}}&e={{activeProvider.email}}&l={{activeProvider.lowest_rate}}&d={{activeProvider.description}}&r={{activeProvider.ratig}}"><i class="material-icons">file_download</i></a>
			</div>
		</div>
	</div>
	<footer class="page-footer teal">
        <div class="container">
            <div class="row">
            	<div class="col l6 s12">
                	<h5 class="white-text">ISP Lookup</h5>
                	<p class="grey-text text-lighten-4">By : Shubhomoy</p>
              	</div>
              	<div class="col l4 offset-l2 s12">
                	<h5 class="white-text">Projects</h5>
                	<ul>
                		<li><a class="grey-text text-lighten-3" href="http://pinpost.in" target="_blank">Pinpost</a></li>
                		<li><a class="grey-text text-lighten-3" href="https://play.google.com/store/apps/details?id=com.bitslate.pinpost" target="_blank">Pinpost Android</a></li>
                		<li><a class="grey-text text-lighten-3" href="https://play.google.com/store/apps/details?id=com.bitslate.notebook" target="_blank">Notebook</a></li>
                	</ul>
             	</div>
            </div>
        </div>
        <div class="footer-copyright">
        	<div class="container">
            	
            </div>
       	</div>
    </footer>
</body>
</html>