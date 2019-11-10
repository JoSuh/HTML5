<!--
     index.php
     Written by:  Jo Suh
     Written on:  11-09-2019
     This is the php file to create the homepage
 --> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="http://suh00010.com/StyleSheet.css">
	<!-- font references -->
	<link href="https://fonts.googleapis.com/css?family=Staatliches|Amatic SC|Merriweather|Lobster&display=swap" rel="stylesheet">
	
	
	<!-- references an external Javascript file -->
	<script src="js/html5shiv.js"></script>
</head>
<body>
	<?php
 
     # Include other php files (adds the components in the following order:)
     # Header --------------------------------------------------
     include 'Header.php';
     # Menu --------------------------------------------------
     include 'Menu.php';
     
     # Content --------------------------------------------------
     echo '<div id="content">';
     echo '<p><big>Welcome to my website!</big></p>';
     
     
     # NOTE: must include the start time
     $LIST_OF_YOUTUBE_VIDS = array("0u8377YsRX4?start=49",
                                   "LyQuO9nkJPA?start=3",
                                    "mjEsSNdKl9o?start=7",
                                    "ap14O5-G7UA?start=0",
                                    "n-w_ski7mt0?start=8",
                                    "yHCa3gfnn_8?start=0",
                                    "KhbDKv6Hwgw?start=0"
                                    ); // ------------------------------------------------------------------ UPDATE HERE
     
    $LIST_OF_NV_VIDS = array(
    "E729B598FC96F63B28FDEF4F8CFC6B219641&outKey=V128b8b865c0e1530662a0431245e888a835ee269166cdf5c64530431245e888a835e",
    "1DD43749CE28CA01E1F93E9C0B1EAB94B999&outKey=V12974543f2c05c24e0f18c318b0d9712684e724b0b006a0a11718c318b0d9712684e",
    "3FCFEA127B6C1CD68E97693FC12A4E395EB3&outKey=V1210d017058243e4a278ed51fd7a4a9ac4e9e6f924ee198b2bdeed51fd7a4a9ac4e9",
    "EF832D18CE9D07428F5826AE0E820EF3DC32&outKey=V1283aeef680a463f9eb3909de1f3d56a1de734f5a23b59d621ef909de1f3d56a1de7",
    "842CCAE78E0D0E659EC101D2991DD77D6E08&outKey=V127f86f490fe526df1c818d00d22679809a4610d1e0b5932235818d00d22679809a4",
    "D54577F49D3127B2545D53C31561273D674C&outKey=V12960ca493e05b907cdb2be2a914131b37243b762c3f679eb3df2be2a914131b3724",
    "251DBA0AC6942B9F0933216FDDAA4E7CE478&outKey=V124d1c0e7763cdb0576d1d496879eb567a696221f0eea14ccb151d496879eb567a69",
    "435F7CC635FA2FE2A47643E02CDCE87AEC4A&outKey=V12841fe0120ae5c4e9580c6d1b1808f8ccede0f9dc32cee8023c0c6d1b1808f8cced",
    "85B69434ED7D33AAF766A0CD654CACE6E86C&outKey=V123d60f9adf1f57313984aaac45aa20d9c9912e4977171d4a1934aaac45aa20d9c99"
                                );
                                    
    $randNum = rand ( 0, sizeof($LIST_OF_YOUTUBE_VIDS) + sizeof($LIST_OF_NV_VIDS)-1 );
     
     #show video
     echo '<iframe src="https://';
     if ( $randNum > sizeof($LIST_OF_YOUTUBE_VIDS)-1 ){
         //if not youtube video
         echo 'serviceapi.nmv.naver.com/flash/convertIframeTag.nhn?vid=';
         echo $LIST_OF_NV_VIDS[$randNum-sizeof($LIST_OF_YOUTUBE_VIDS)];
         echo '" allow="autoplay;"';
     }else{
         echo 'www.youtube.com/embed/';
         echo $LIST_OF_YOUTUBE_VIDS[$randNum];
     }
     
     echo '&vq=hd1080';
     echo '&autoplay=1';
     echo '&loop=1';
     echo '&modestbranding=1';
     echo '&showinfo=0"';
     echo 'allow="autoplay; fullscreen" frameborder="0"></iframe>';
     
     echo "</div>";
     
     # Footer --------------------------------------------------
     include "Footer.php";
     ?>
     
</body>
</html>