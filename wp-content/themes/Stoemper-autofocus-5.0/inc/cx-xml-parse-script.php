<?php
$currentThemeUrl = get_template_directory_uri();
$xmlUrl = $currentThemeUrl.'/xml/cx-geometery.xml';

// load SimpleXML
$geometry = new SimpleXMLElement($xmlUrl, null, true);

echo <<<EOF
<table id="Citylist1" class="chart" border="1">
    <tr>
        <th>Size (cm)</th>
		<th>Effective Top Tube Length</th>
		<th>Seat Tube (C-C)</th>
		<th>Head Tube Length</th>
		<th>Head Tube Angle</th>
		<th>Seat Tube Angle</th>
		<th>Chain Stay Length</th>
		<th>Bottom Bracket Drop</th>
    </tr>
EOF;
foreach($geometry as $cx_geo) // loop through our books
{
	echo <<<EOF
	<tr>
	        <td>{$cx_geo->Size}</td>
	        <td>{$cx_geo->ETT}</td>
	        <td>{$cx_geo->STC2C}</td>
	        
	        <td>{$cx_geo->HT}</td>
	        <td>{$cx_geo->HTAngle}</td>
	        <td>{$cx_geo->STAngle}</td>
	        
	        <td>{$cx_geo->CSLength}</td>
	        <td>{$cx_geo->BBDrop}</td>
	</tr>

EOF;
}
echo '</table>';
?>