<div id="eddyGeoChart">
<h3>Price List</h3>
<?php
$url = 'http://localhost/wp-content/themes/Stoemper-autofocus-2.0/xml/pricing-020414.xml';

// load SimpleXML
$pricing = new SimpleXMLElement($url, null, true);

echo <<<EOF
<table id="Citylist1" border="1">
    <tr>
        <th>Frame</th>
		<th>Price</th>
    </tr>
EOF;
foreach($pricing->frames->frame as $frame) // loop through our books
{
	echo <<<EOF
	<tr>
	        <td>{$frame->frameName}</td>
	        <td>{$frame->price}</td>
	</tr>

EOF;
}

foreach($pricing->options->option as $option) // loop through our books
{
	echo <<<EOF
	<tr>
	        <td>{$option->optionName}</td>
	        <td>{$option->optionPrice}</td>
	</tr>

EOF;
}
echo '</table>';
?>
						</div>	