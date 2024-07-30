<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenya Map Marker</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        #controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        #controls label {
            margin: 0 5px;
            font-weight: bold;
        }
        #controls textarea {
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: none;
        }
        #controls button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #controls button:first-child {
            background-color: #28a745;
            color: white;
        }
        #controls button:first-child:hover {
            background-color: #218838;
        }
        #controls button:last-child {
            background-color: #007bff;
            color: white;
        }
        #controls button:last-child:hover {
            background-color: #0056b3;
        }
        #map {
            height: 600px;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="controls">
        <label for="coordinates">Coordinates (lat, lon): </label>
        <textarea id="coordinates" rows="4" cols="50" placeholder="Enter coordinates (format: lat,lon) per line"></textarea>
        <button onclick="addMarkers()">Add Markers</button>
        <button onclick="downloadMap()">Download Map</button>
    </div>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Turf.js/5.1.6/turf.min.js"></script>
    <script>
        var map = L.map('map').setView([-0.023559,37.906193], 7);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var kenyaGeoJSON = {
            "type": "Feature",
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [33.907287, -4.677504],
                        [41.855083, -4.677504],
                        [41.855083, 5.506],
                        [33.907287, 5.506],
                        [33.907287, -4.677504]
                    ]
                ]
            }
        };

        var kenyaLayer = L.geoJSON(kenyaGeoJSON, {
            style: function () {
                return {
                    color: "#3388ff",
                    weight: 2,
                    fillOpacity: 0.1
                };
            }
        }).addTo(map);

        map.fitBounds(kenyaLayer.getBounds());

        var markers = [];

        function addMarkers() {
            var coordsInput = document.getElementById('coordinates').value;
            var coordsArray = coordsInput.split('\n'); // Splitting by newline character

            for (var i = 0; i < coordsArray.length; i++) {
                var coordParts = coordsArray[i].split(','); // Splitting each line by comma
                if (coordParts.length !== 2) {
                    alert('Each coordinate pair must be in the format "latitude,longitude".');
                    return;
                }

                var lat = parseFloat(coordParts[0].trim());
                var lon = parseFloat(coordParts[1].trim());

                if (!isNaN(lat) && !isNaN(lon)) {
                    var marker = L.marker([lat, lon]).addTo(map);
                    var popupContent = 'Latitude: ' + lat + '<br>Longitude: ' + lon;
                    marker.bindPopup(popupContent).openPopup(); // Open popup immediately
                    markers.push(marker);
                } else {
                    alert('Invalid latitude or longitude value.');
                }
            }
        }

        function downloadMap() {
            var downloadWidth = 1200;
            var downloadHeight = 900;

            domtoimage.toBlob(document.getElementById('map'), {
                width: downloadWidth,
                height: downloadHeight
            })
            .then(function(blob) {
                var link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'kenya_map.png';
                link.click();
            })
            .catch(function(error) {
                console.error('Oops, something went wrong!', error);
            });
        }
    </script>
</body>
</html>