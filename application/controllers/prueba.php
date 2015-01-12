<?php
include_once(APPPATH.'plugins/twitter2/TwitterOAuth.php');
class Prueba extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		# Load Twitter class
		// require_once('TwitterOAuth.php');

		# Define constants
		define('TWEET_LIMIT', 10);
		define('TWITTER_USERNAME', 'Alina_SR');
		define('CONSUMER_KEY', 'PXXAQ3oPHiji4MmXfb4GlW64Z');
		define('CONSUMER_SECRET', 'ZXuBGds4wisrBj9e82aZNeLfxReReWYL0mDtqjKxlTgPqFGKmR');
		define('ACCESS_TOKEN', '475449870-bluBlqL384UWQFYedQLw6EdBqQ0fGppbzjBS1o6T');
		define('ACCESS_TOKEN_SECRET', 'xmXmukPMY1osTtlbhqXFs2GA5w2QjRKNWDo5taTYqoP0k');

		# Create the connection
		$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

		# Migrate over to SSL/TLS
		$twitter->ssl_verifypeer = true;

		# Load the Tweets
		$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => TWITTER_USERNAME, 'exclude_replies' => 'true', 'include_rts' => 'false', 'count' => TWEET_LIMIT));

		# Example output
		if(!empty($tweets)) {
		    foreach($tweets as $tweet) {

		        # Access as an object
		        $tweetText = $tweet['text'];

		        # Make links active
		        $tweetText = preg_replace("#(http://|(www.))(([^s<]{4,68})[^s<]*)#", '<a href="http://$2$3" target="_blank">$1$2$4</a>', $tweetText);

		        # Linkify user mentions
		        $tweetText = preg_replace("/@(w+)/", '<a href="http://www.twitter.com/$1" target="_blank">@$1</a>', $tweetText);

		        # Linkify tags
		        $tweetText = preg_replace("/#(w+)/", '<a href="http://search.twitter.com/search?q=$1" target="_blank">#$1</a>', $tweetText);

		        # Output
		        echo $tweetText."<br>";
		    }
		}else{
			echo "you don't have a tweet";
		}
	}
	function prueba(){
		
	}
}