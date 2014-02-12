<?php
include 'simplehtmldom_1_5/simple_html_dom.php';

$html = file_get_html('https://twitter.com/BarrettBreshear');
$tweets = $html->find('div.tweet');
foreach ($tweets as $tweet) {
	$tweetText = $tweet->find('p.tweet-text', 0)->plaintext;
	$tweetDate = $tweet->find('a.tweet-timestamp', 0);
	echo $tweetText . " : " . $tweetDate->title . "\n";
}