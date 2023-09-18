<html>
		<?php
			function getLatLng($address) {
				$apiKey = 'AIzaSyC28Np2clnopcgh66rV-LGd2r8PdtJp6dA'; // 記得換成你自己的API金鑰
				$url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=' . $apiKey;
				$result = file_get_contents($url);
				$json = json_decode($result);
				$lat = $json->results[0]->geometry->location->lat;
				$lng = $json->results[0]->geometry->location->lng;
				return array('lat' => $lat, 'lng' => $lng);
			  }
		?>
	</body>
</html>
