<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service (complex)</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto', 'sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
        
        #warnings-panel {
            width: 100%;
            height: 10%;
            text-align: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="floating-panel">
        <b>End: </b>
        <input type="text" id="inputend" value="145 điện biên phủ Quận 1 tp HCM">
        <button id="btnGo" type="button">GO </button>
        <button id="btnPost" type="button">POST </button>
        <button id="btnGet" type="button">GET </button>
        <button id="btnPut" type="button">PUT </button>
        <button id="btnPatch" type="button">PATCH </button>
        <button id="btnDelete" type="button">DELETE </button>
    </div>
    <div id="map"></div>
    &nbsp;
    <div id="warnings-panel"></div>
    <script>
        var address = '350 Tân Sơn Nhì Quận Tân Phú Tp HCM';
        let startMarker = {lat:0,lng:0};
        let endMarker = {lat:0,lng:0};
		let startMarkerName = endMarkerName = '';
        let endMarkerDetails;
        let markerArray = [];
        let markerInfo = [];
        
        function initMap() {

            var myLatLng = {
                lat: 0,
                lng: 0
            };
            var map;

            $.ajax({
                type: 'GET',
                url: 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyBewKrNm8ngKfptmnlQ-poP66HLATelxOA&address=' + address,
                success: function(res) {
                    let geoapiObj = res.results[0];
                    console.log(geoapiObj);
                    myLatLng.lat = geoapiObj.geometry.location.lat;
                    myLatLng.lng = geoapiObj.geometry.location.lng;                
                },
                error: function() {
                    console.log('ERROR GET GEOLOCATION');
                }
            });
                    		
			// Instantiate a directions service.
			var directionsService = new google.maps.DirectionsService;

			// Create a map and center it on lat and lng.
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				center: {
					lat: myLatLng.lat,
					lng: myLatLng.lng
				},
				lang: 'vn_VN'
			});

            // Create a renderer for directions and bind it to the map.
            var directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            });

            // Instantiate an info window to hold step text.
            var stepDisplay = new google.maps.InfoWindow;

            // Display the route between the initial start and end selections.
            calculateAndDisplayRoute(
                directionsDisplay, directionsService, markerArray, stepDisplay, map);
            // Listen to change events from the start and end lists.
            var onChangeHandler = function() {
                calculateAndDisplayRoute(
                    directionsDisplay, directionsService, markerArray, stepDisplay, map);
            };
            //document.getElementById('inputend').addEventListener('change', onChangeHandler);
            $('#btnGo').on('click', function(){
				calculateAndDisplayRoute(directionsDisplay, directionsService, markerArray, stepDisplay, map);		
			});

            $('#btnPost').on('click', function(){
				$.ajax({
                    url: 'http://localhost/api/1.0/demo/json?id=10&key=20',
                    data: {key:'2000',id:'5000'},
                    type: 'post',
                    success: function(res){
                        console.log(res);
                    },
                    error: function(){

                    }
                });	
			});

            $('#btnGet').on('click', function(){
				$.ajax({
                    url: 'http://localhost/api/1.0/demo/json?id=10&key=20',
                    //data: {key:'2000',id:'5000'},
                    type: 'get',
                    success: function(res){
                        console.log(res);
                    },
                    error: function(){

                    }
                });	
			});

            $('#btnPut').on('click', function(){
				$.ajax({
                    url: 'http://localhost/api/1.0/demo/json?id=10&key=20',
                    data: {key:'2000',id:'5000'},
                    type: 'post',
                    success: function(res){
                        console.log(res);
                    },
                    error: function(){

                    }
                });	
			});

            $('#btnPatch').on('click', function(){
				$.ajax({
                    url: 'http://localhost/api/1.0/demo/json?id=10&key=20',
                    data: {key:'2000',id:'5000'},
                    type: 'post',
                    success: function(res){
                        console.log(res);
                    },
                    error: function(){

                    }
                });	
			});

            $('#btnDelete').on('click', function(){
				$.ajax({
                    url: 'http://localhost/api/1.0/demo/json?id=10&key=20',
                    data: {key:'2000',id:'5000'},
                    type: 'post',
                    success: function(res){
                        console.log(res);
                    },
                    error: function(){

                    }
                });	
			});

            directionsDisplay.addListener('directions_changed', function() {
                computeTotalDistance(directionsDisplay.getDirections());
            });
        }

        function calculateAndDisplayRoute(directionsDisplay, directionsService,
            markerArray, stepDisplay, map) {
            // First, remove any existing markers from the map.
            for (var i = 0; i < markerArray.length; i++) {
                markerArray[i].setMap(null);
            }

            for (var i = 0; i < markerInfo.length; i++) {
                markerInfo[i].setMap(null);
            }
			
			let linkGeolocationAPI = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyBewKrNm8ngKfptmnlQ-poP66HLATelxOA&address=';
            let linkDistanceAPI = 'https://crossorigin.me/'+'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&key=AIzaSyBewKrNm8ngKfptmnlQ-poP66HLATelxOA';

			$.ajax({
                type: 'GET',
                url: linkGeolocationAPI + address,
				async: false,
                success: function(res) {      
                    let geoapiObj = res.results[0];
					tmpAddress = geoapiObj.formatted_address.split(','); 
					if(geoapiObj.geometry.location_type == 'GEOMETRIC_CENTER'){
						startMarkerName = $.trim(tmpAddress[0] + tmpAddress[1] + tmpAddress[2] + tmpAddress[3] + tmpAddress[4]);
					}else{
						startMarkerName = $.trim(tmpAddress[1] + tmpAddress[2] + tmpAddress[3] + tmpAddress[4]);
					}
                    startMarker.lat = geoapiObj.geometry.location.lat;
                    startMarker.lng = geoapiObj.geometry.location.lng;    
					var	markerDetails = { 
						url: 'https://freeiconshop.com/wp-content/uploads/edd/person-flat.png',
						title: 'Điểm đầu'	
					};  

					var image = {
                        url: markerDetails.url,
                        scaledSize: new google.maps.Size(32, 32),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(24, 0)
                    };

                    var marker = new google.maps.Marker({
                        position: startMarker,
                        map: map,
                        title: markerDetails.title,
                        icon: image
                    });   

                    markerArray.push(marker);         
                },
                error: function() {
                    console.log('ERROR GET GEOLOCATION: ' + this.url);
                }
            });

			$.ajax({
                type: 'GET',
                url: linkGeolocationAPI + ($('#inputend').val() == '' ? address : $('#inputend').val()),
				async: false,
                success: function(res) {
                    if(res.status == 'ZERO_RESULTS'){
                        console.log(startMarker);
                        console.log(endMarker);    
                        var image = {
                            url: endMarkerDetails.url,
                            scaledSize: new google.maps.Size(32, 32),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(8, 32)
                            // anchor: new google.maps.Point(0, 0)
                        };

                        var marker = new google.maps.Marker({
                            position: endMarker,
                            map: map,
                            title: endMarkerDetails.title,
                            icon: image
                        }); 

                        console.log('ADDRESS_NOT_FOUND');
                        return;
                    }
                    let geoapiObj = res.results[0];
					tmpAddress = geoapiObj.formatted_address.split(','); 
					if(geoapiObj.geometry.location_type == 'GEOMETRIC_CENTER'){
						endMarkerName = $.trim(tmpAddress[0] + tmpAddress[1] + tmpAddress[2] + tmpAddress[3] + tmpAddress[4]);
					}else{
						endMarkerName = $.trim(tmpAddress[1] + tmpAddress[2] + tmpAddress[3] + tmpAddress[4]);
					}
                    endMarker.lat = geoapiObj.geometry.location.lat;
                    endMarker.lng = geoapiObj.geometry.location.lng;    
					endMarkerDetails = { 
						url: 'https://freeiconshop.com/wp-content/uploads/edd/person-flat.png',
						title: 'Điểm cuối'	
					};
              
					var image = {
                        url: endMarkerDetails.url,
                        scaledSize: new google.maps.Size(32, 32),
                        origin: new google.maps.Point(0, 0),
                        // anchor: new google.maps.Point(8, 32)
                        anchor: new google.maps.Point(0, 0)
                    };

                    var marker = new google.maps.Marker({
                        position: endMarker,
                        map: map,
                        title: endMarkerDetails.title,
                        // icon: image
                    });  

                    markerArray.push(marker);       
                },
                error: function() {
                    console.log('ERROR GET GEOLOCATION: ' + this.url);
                }
            });
            
            // var linkdemo = linkDistanceAPI + '&origins=' + startMarkerName + '&destinations=' + endMarkerName;
            // $.post(linkdemo, function(res){
            //     console.log(res);
            // });

            // $.ajax({
            //     type: 'GET',
            //     url: linkDistanceAPI + '&origins=' + startMarkerName + '&destinations=' + endMarkerName,
			// 	async: false,
            //     success: function(res) {
            //         let distanceApiObj = res.rows[0].elements[0];
			// 		console.log(distanceApiObj);      
            //     },
            //     error: function() {
            //         console.log('ERROR ' + this.url);
            //     },
            // });

            // Retrieve the start and end locations and create a DirectionsRequest using
            // WALKING directions.
            directionsService.route({
                origin: startMarkerName,
                destination: endMarkerName,
                travelMode: 'DRIVING'
            }, function(response, status) {
                // Route the directions and pass the response to a function to create
                // markers for each step.
                if (status === 'OK') {
                    document.getElementById('warnings-panel').innerHTML =
                        '<b>' + response.routes[0].warnings + '</b>';
                    directionsDisplay.setDirections(response);
					directionsDisplay.setOptions({
						// suppressMarkers: true,
						polylineOptions: {
							strokeWeight: 6,
							strokeOpacity: 1,
							strokeColor:  'red' 
						}
					});
                    showSteps(response, markerArray, stepDisplay, map);
                } else {
                    //window.alert('Directions request failed due to ' + status);
					console.log(response);
                }
            });
        }

        function showSteps(directionResult, markerArray, stepDisplay, map) {
            // For each step, place a marker, and add the text to the marker's infowindow.
            // Also attach the marker to an array so we can keep track of it and remove it
            // when calculating new routes.
            var myRoute = directionResult.routes[0].legs[0];
			var positionDetails = {};
            var midRoute = Math.ceil(myRoute.steps.length/2);
            
            var infoRouteWindow = new google.maps.InfoWindow();
            infoRouteWindow.setContent(myRoute.distance.value/1000 + ' km');
            infoRouteWindow.setPosition(myRoute.steps[midRoute].end_location);
            infoRouteWindow.open(map); 
            markerInfo.push(infoRouteWindow);   

            for (var i = 0; i < myRoute.steps.length; i++) {
                var marker = markerArray[i] = markerArray[i] || new google.maps.Marker;
                //attachInstructionText(stepDisplay, marker, myRoute.steps[i].instructions, map);
  
                if(i == 0 || i == 1){
                    attachInstructionText(stepDisplay, marker, (i==0) ? 'Start' : 'End' , map); 
                }                        
            }
        }

        function attachInstructionText(stepDisplay, marker, text, map) {
            google.maps.event.addListener(marker, 'click', function() {
                // Open an info window when the marker is clicked on, containing the text
                // of the step.
                stepDisplay.setContent(text);
                stepDisplay.open(map, marker);
            });
        }
        
        function computeTotalDistance(result) {
            var total = 0;
            var seconds = 0;
            var myroute = result.routes[0];
            for (var i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
                seconds += myroute.legs[i].duration.value;
            }
            var date = new Date(seconds * 1000);
            var hh = date.getUTCHours();
            var mm = date.getUTCMinutes();
            var ss = date.getSeconds(); 

            if (hh < 10) {hh = "0"+hh;}
            if (mm < 10) {mm = "0"+mm;}
            if (ss < 10) {ss = "0"+ss;}
            
            var duration = '';

            if(hh > 0){
                duration += (hh + ' giờ ');
            }
            if(mm > 0){
                duration += (mm + ' phút ');
            }
            if(ss > 0){
                duration += (ss + ' giây ');
            }

            duration = $.trim(duration) + '.';
            total = total / 1000;
            console.log(total + ' km - Thời gian: ' + duration);
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBewKrNm8ngKfptmnlQ-poP66HLATelxOA&language=vi&region=VN&callback=initMap">
    </script>
</body>

</html>