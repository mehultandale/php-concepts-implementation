<?php

	// Title
	echo "\n\n". "PHP Concepts Implementation" . "\n";

	// Arrays
	$programming_languages = array("PHP", "C++", "Java");
	echo "\n";
	echo "Programming language: " . $programming_languages[1] . "\n";

	// Associative arrays
	$programming_language_versions = array("PHP" => 8, "C++" => 20, "Java" => 19);
	echo "Version: " . $programming_language_versions[$programming_languages[1]];

	// Formatting output tail
	echo "\n\n\n";

?>