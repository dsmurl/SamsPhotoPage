<?php
	function endsWith($haystack, $needle)
	{
		$length = strlen($needle);
		if ($length == 0) 
		{
			return true;
		}

		$start  = $length * -1; //negative

		return (substr($haystack, $start) === $needle);
	}


	function renderImageDirectory()
	{
		if ($handle = opendir('images')) 
		{
			while (false !== ($file = readdir($handle))) 
			{
				if ($file != "." && $file != "..") 
				{
					if	((endsWith(strtolower($file), ".jpg")) ||
						(endsWith(strtolower($file), ".png")) ||
						(endsWith(strtolower($file), ".jpeg")))
					{
						echo "<img src='images/$file' width='640px'><br><br>";
					}
				}
			}

			closedir($handle);
		}
	}
?>
<body style="background-image:url('tile_background.jpg');">
	<center>
		<span style="color: #F0F8FF; background-color: #333333; font-family: Impact, Charcoal, sans-serif; font-size:30pt;">
			Sams 1968 Mercury Cougar
		</span>

		<br><br>

		<?php renderImageDirectory(); ?>
	</center>
</body>

