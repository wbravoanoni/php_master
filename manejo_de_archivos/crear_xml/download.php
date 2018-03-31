<?php
header("Content-Type:application/xml");
header("Content-Disposition: attachment; filename=export.kml");

echo '<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://www.opengis.net/kml/2.2">
	<Placemark>
		<name>Recording courses</name>
		<description>This is a description of our market</description>
		<Point>
			<coordinates>15.415698, 47.0704445,0</coordinates>
		</Point>
	</Placemark>
</kml>'
?>