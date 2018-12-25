<head>
	<title>NAN Text Generator</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<div class='container'>

<?php

function generateNANSequences($text) {

	$alphaNumeric = array(
		'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o',
		'p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G',
		'H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
		'1','2','3','4','5','6','7','8','9','0',' ');

	$nonAlphaNumeric = array(
		'(">"^"_").',        // a
		"('='^'_').",        // b
		"('<'^'_').",        // c
		'("$"^"@").',        // d
		'(":"^"_").',        // e
		'("&"^"@").',        // f
		"(']'^':').",        // g
		'("@"^"(").',        // h
		'("@"^")").',        // i
	    '("*"^"@").',        // j
	    "('+'^'@').",        // k
		'(","^"@").',        // l
		"('-'^'@').",        // m
		'("."^"@").',        // n
		'("/"^"@").',        // o
		"((','^'~')^'\"').", // p
		"('.'^'_').",        // q
		"('-'^'_').",        // r
		"(','^'_').",        // s
		'("+"^"_").',        // t
		"('*'^'_').",        // u
		"(')'^'_').",        // v
	    '("("^"_").',        // w
		"(('.'^'~')^'(').",  // x
		'("&"^"_").',        // y
		'("%"^"_").',        // z
		"('?'^'~').",        // A
		"('<'^'~').",        // B
		"('#'^'`').",        // C
		"('$'^'`').",        // D
		"('%'^'`').",        // E
		'(":"^"|").',        // F
		"(';'^'|').",        // G
		"('('^'`').",        // H
		"(')'^'`').",        // I
		"('*'^'`').",        // J
		'("+"^"`").',        // K
		'(","^"`").',        // L
		'("-"^"`").',        // M
		'("."^"`").',        // N
		'(("]"^":")^"(").',  // O
		"('.'^'~').",        // P
		"('-'^'|').",        // Q
		"(','^'~').",        // R
		"('-'^'~').",        // S
		"('('^'|').",        // T
		'("+"^"~").',        // U
		'("*"^"|").',        // V
		'("*"^"}").',        // W
		'("$"^"|").',        // X
		"(('<'^'_')^':')",   // Y
		'(":"^"`").',        // Z
		"(('-'^'|')^'`').",  // 1
		"((','^'~')^'`').",  // 2
		'(("-"^"`")^"~").',  // 3
		"(('*'^'`')^'~').",  // 4
		'(("+"^"`")^"~").',  // 5
		"(('('^'`')^'~').",  // 6
		"((')'^'`')^'~').",  // 7
	    '((":"^"|")^"~").',  // 8
	    "((';'^'|')^'~').",  // 9
		'(("."^"`")^"~").',  // 0
		'" ".'               // [space]
	);

	$replacement = str_replace($alphaNumeric, $nonAlphaNumeric, $text);

	// Remove trailing dot
	$result = substr_replace($replacement, '', -1);

	return $result;

}

?>

<h1>NAN text generator</h1>
<hr>
<p>This tool allows you to generate non-alphanumeric symbols.</p>

<form method="POST">
	<input type="text" name="input">
	<button type="submit" name="submit">Generate</button>
</form>

<?php

if (isset($_POST['submit'])) {

	if (!empty($_POST['input'])) {
		echo '<p>Non-alphanumeric text</p><textarea>'.generateNANSequences($_POST['input']).'</textarea>';
	}
}

?>

</div>

</body>