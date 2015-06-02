@extends('Layout.main')

@section('main')

<<<<<<< HEAD
	<div class="row fullWidth">
		
			<img class="captain"src="img/captain3.png">
			<img class="iron" src="img/arm.png" />
			<img class="hulk" src="img/hulk.png">
		
	</div>
=======

	<section role="MainSearch">
        <div class="row">
            <div class="large-12 columns">
                <form>
                    <div class="row">
                        <div class="large-8 small-centered columns">
                            <h2 class="headingLight text-center">Search Comics, Characters, Movies</h2>
                            <label>
                                <input type="text" placeholder="e.g. Iron Man" class="label round" />
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section role="comicSection" ng-app="newReleases" ng-controller="newReleasesCtrl">
        {{--@include('comics.newReleases')--}}
        <div class="collectionHeading">
           <div class="row">
               <div class="large-3 columns">
                   <h2>Comics</h2>
               </div>


               <div class="large-9 columns">
                   <ul class="button-group round">
                       <li><a href="#" ng-click="newComics.getNew(1)" class="button">Last Week</a></li>
                       <li><a href="#" ng-click="newComics.getNew(2)" class="button">This Week</a></li>
                       <li><a href="#" ng-click="newComics.getNew(3)" class="button">Next Week</a></li>
                       <li><a href="#" ng-click="newComics.getNew(4)" class="button">This Month</a></li>
                   </ul>
               </div>
               <div ng-view></div>
           </div>

        </div>

        <div class="collectionSet">
            <div class="large-3 columns panel">
                <h3>Filter By</h3>
                <label>Title
                    <input type="text" id="title" ng-model="title">
                </label>
            </div>
            <div class="large-9 columns">
                <div ng-controller="newReleasesCtrl" >

                        <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-4 comics">

                            <li  ng-repeat="x in thisWeek | orderBy:'title' | filter:title">
                                <a href="comics/detail/<% x.id %>">
                                    <div class="singleSet">
                                        <img class="radius" src='<% x.thumbnail.path + "." +x.thumbnail.extension %>' />
                                        <h3 class="comicsTitle" ng-model="title"><% x.title %></h3>
                                        <div class="printPrice" ng-repeat="y in x.prices" ><% y.price | currency %></div>

                                     </div>
                                </a>
                            </li>
                        </ul>

                </div>
            </div>
        </div>


    </section>
>>>>>>> bhawan

	<div class="row">
	    <div class="large-7 columns large-centered search_home">
	      <div class="row collapse">
	        <div class="small-9 columns">
	          <input type="text" placeholder="Search">
	        </div>
	        <div class="small-3 columns">
	          <a href="#" class="button postfix">Search</a>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div class="row">
	  	<div class="large-12 columns">
	  		<table >
	  			<tr>
	  				<td class="large-4"></td>
	  				<td class="large-4"></td>
	  				<td class="large-4"></td>
	  			</tr>
	  		</table>

	  	</div>
	  	</div>
	  </div>
	

@endsection

@section("scripts")

<script>
    var newReleases = angular.module("newReleases",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    newReleases.controller("newReleasesCtrl",function($scope,$http){
               // $scope.hello={};
                $scope.newComics= {};
                $scope.newComics.switch =4;
                //$scope.hello.text="bhawan";
                //var responsePromise = $http.get("http://gateway.marvel.com/v1/public/comics?apikey=00231914b4f52dcf272383c62aba5708");
                $scope.newComics.getNew = function(a) {
                    $scope.newComics.switch = a;
                    console.log(a);
                }
               // $scope.newComics.getNew = function(a){
                //    console.log(a);
           // alert(timeSlot);
                    var responsePromise;

                    responsePromise = $http.get("comics/new/thisWeek");
                    responsePromise.success(function(data, status, headers, config) {
                        $scope.thisWeek = data.data.results;
                    });
                    responsePromise.error(function(data, status, headers, config) {
                        alert("AJAX failed!");
                    });
            })
            .controller("comicDetail",function($scope,$routeParams){
                $scope.hello = {};
                $scope.hello.name="bhawan";

            })

            .config(function($routeProvider,$locationProvider) {
                $routeProvider
                        .when("/comics/detail/:comicID", {
                            controller: "comicDetail"
                        });
                // configure html5 to get links working on jsfiddle
                $locationProvider.html5Mode(true);

            });
</script>

@endsection