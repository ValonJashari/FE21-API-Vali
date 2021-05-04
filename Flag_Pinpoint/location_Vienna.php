<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pin Vienna Location</title>
</head>
<body>
    <script>

        var map;
    
        function initMap() {
    
            var vienna = {
    
                lat: 48.20849,
    
                lng: 16.37208
    
            };
    
            map = new google.maps.Map(document.getElementById('map'), {
    
                center: vienna,
    
                zoom: 8
    
            });
    
            var pinpoint = new google.maps.Marker({
    
                position: vienna,
    
                map: map
    
            });
    
        }
    </script>
</body>
</html>