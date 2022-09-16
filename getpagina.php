<?php

if(isset($_GET['s'])){
	
	$doc = new DomDocument;

	// We need to validate our document before refering to the id
	$doc->validateOnParse = true;
	$doc->loadHtml(file_get_contents('https://api.coinmarketcap.com/dexer/v3/dexer/search?keyword=nlc'));

	var_dump($doc->getElementById('div1'));

}

?>