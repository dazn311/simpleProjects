
<?php
    $banerImg1 = "";
    $banerImg2 = "";
   if($isMobile) {
     $banerImg1 =  "images/main-mobile.jpg";
     $banerImg2 =  "images/main-mobile-2.jpg";
   
   }else{
	 $banerImg1 =  "images/banner22.png";
	 $banerImg2 =  "images/banner22.png";
   }

?>

<div id="banner" class="container">

	<img id="banerImg1" src=<?php echo $banerImg1; ?>  alt="" />
    <img id="banerImg2" src=<?php echo $banerImg2; ?>  alt="" />
</div>



<div id="three-column" class="container  ">

</div>
