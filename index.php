<?php

echo "<a href='?spotifyPlay=1'><h3> Spotify Play </h3></a>";

echo "<a href='?spotifyPause=1'><h3> Spotify Pause </h3></a>";

if(isset($_GET['spotifyPlay'])){
	echo 'play baby';
	var_dump(exec('./spotify.sh play'));
}

if(isset($_GET['spotifyPause'])){
	echo 'pause baby';
	var_dump(exec('./spotify.sh pause'));
}