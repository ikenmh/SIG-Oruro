<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <div class="  w-100 h-100 position-fixed d-flex" style="box-sizing:border-box;">
        <div id="home_map" class="border border-primary w-100 h-100 position-fixed" style=" z-index:-1;"></div>

        <div class=" w-25 h-100 top left mr-1" style="z-index:2; padding:5px;">
            <div style="width:100%; height:100%;  background:rgba(50,83,127,0.95); border-radius:10px; border:solid 1px white;">
            </div>
        </div>
        <div class="flex-grow-1 d-flex align-items-center justify-content-center" style="color:#00F3FF; background:rgba(21,34,56,0.9); height:100px; border-radius:10px; margin-top:5px;">
            <div style="padding:3px; margin:5px;">Option 1</div>
            <div style="padding:3px; margin:5px;">Option 2</div>
            <div style="padding:3px; margin:5px;">Option 3</div>
            <div style="padding:3px; margin:5px;">Option 4</div>
            <div style="padding:3px; margin:5px;">Option 4</div>
        </div>
        <div class=" w-25 h-100 top-0 right-0 " style=" padding:5px; box-sizing:border-box; z-index:2; right:0px; ">
            <div style="width:100%; height:100%;  background:rgba(50,83,127,0.95); border-radius:10px; border:solid 1px white;">
            </div>
        </div>
 
    </div>


    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
    <script >
        var map = L.map('home_map').fitWorld();
        var a=3;
        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
        }).addTo(map);

        map.locate({setView: true, maxZoom: 16});

        function onLocationFound(e) {
            var radius = e.accuracy;

            L.marker(e.latlng).addTo(map)
                .bindPopup("Tu Estas Aquí").openPopup();

            L.circle(e.latlng, radius).addTo(map);
        }

        map.on('locationfound', onLocationFound);

    </script>
</body>
</html>