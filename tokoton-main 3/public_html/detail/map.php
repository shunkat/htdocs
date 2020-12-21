<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps JavaScript API</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAsiv-J2Ktz3vUShHLO2yozRSfAcih3MSuU765d1yhfnq_fiK1SRTzMW_IiwIlS_AoS27FPitnJtcW8g"
      type="text/javascript"></script>
	<link href="/css/user/common.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    //<![CDATA[
    function load() {
      if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map"));
		map.addControl(new GLargeMapControl());
		map.addControl(new GMapTypeControl());
		
		
		var geocode = new GClientGeocoder();
		
		var address = "<?=$_GET['address']?>";
		
		function localSearch(address) {
			geocode.getLatLng(address, function(point) {
				if (point != null) {
					map.setCenter(point);
					var marker = new GMarker(point);
					map.addOverlay(marker);
					m.openInfoWindowHtml(address);
				}
			});
			return false;
		}

		
		
		
//		var point = new GLatLng(35.658587, 139.745425);
//		map.setCenter(point, 15); 
//		
//		var marker = new GMarker(point);
//		map.addOverlay(marker);
      }
    }
    //]]>
    </script>
  </head>
  <body onload="load()" onunload="GUnload()">
    <div id="map" style="width: 400px; height: 400px"></div>
  </body>
</html>