<!DOCTYPE html>
<html>
<head>
<meta name="viewport"></meta>
<title>shp_indo_kab_kot.shp - Google Fusion Tables</title>
<style type="text/css">
html, body, #googft-mapCanvas {
  height: 768px;
  margin: 0;
  padding: 0;
  width: 1024px;
}
</style>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3"></script>

<script type="text/javascript">
  function initialize() {
    google.maps.visualRefresh = true;
    var isMobile = (navigator.userAgent.toLowerCase().indexOf('android') > -1) ||
      (navigator.userAgent.match(/(iPod|iPhone|iPad|BlackBerry|Windows Phone|iemobile)/));
    if (isMobile) {
      var viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute('content', 'initial-scale=1.0, user-scalable=no');
    }
    var mapDiv = document.getElementById('googft-mapCanvas');
    mapDiv.style.width = isMobile ? '100%' : '1024px';
    mapDiv.style.height = isMobile ? '100%' : '768px';
    var map = new google.maps.Map(mapDiv, {
      center: new google.maps.LatLng(-7.543133135394596, 112.72437887079708),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    layer = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col0",
        from: "1uNVhNg9i_XadrUPGtAiR2fLQABXV5F0L7rO4tM-E",
        // from: "AIzaSyAM2BDXpFKZqPmWaZg2Uuisz1HLyzhEFgQ",
        where: "col5 \x3d \x27SIDOARJO\x27"
      },
      options: {
        styleId: 2,
        templateId: 2
      }
    });

    if (isMobile) {
      var legend = document.getElementById('googft-legend');
      var legendOpenButton = document.getElementById('googft-legend-open');
      var legendCloseButton = document.getElementById('googft-legend-close');
      legend.style.display = 'none';
      legendOpenButton.style.display = 'block';
      legendCloseButton.style.display = 'block';
      legendOpenButton.onclick = function() {
        legend.style.display = 'block';
        legendOpenButton.style.display = 'none';
      }
      legendCloseButton.onclick = function() {
        legend.style.display = 'none';
        legendOpenButton.style.display = 'block';
      }
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
  <div id="googft-mapCanvas"></div>
</body>
</html>
