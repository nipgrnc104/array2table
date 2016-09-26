<?php
//arraytotable function
//converts 2 dimensional array to html table
/*
Developed by NIPGR(www.nipgr.res.in)
Developer(s): Saurabh Gayali (saurabh.gayali@gmail.com)
Scientist concerned: Dr. Niranjan Chakraborty (nchakraborty@gmail.com)
*/


/*
License: You are free to use it for academic/research/non-commercial purpose till you do not modify the license of this library file.Keeping the license same, you are free to modify the code and redistribute with mention of original code.Any derived software that use this library not necessarily should mention or cite this work but necessarily should be free and non-commercial.
Any technology that uses this may not be submitted to any private patent without prior notification to the author
*/



//example array and callers remove /* */ to activate
/*
$array[0][0]=1;
$array[0][1]=1;
$array[1][0]=1;
$array[1][1]=1;

print_r($array);
echo array2table($array);
*/
//end example array and caller




function array2table($array)
{
	$table='<table border=1><tbody>';
	
	foreach ($array as $row)
	{
		$table .= '<tr>';
		foreach ($row as $cell)
		{
			$table .='<td>';
			$table .=$cell;
			$table .='</td>';
		}
		$table .='</tr>';
	}
	$table .='</tbody></table>';	
	
	$table .='<style>table, th, td { border: 1px solid black;}</style>';
	
	return $table;

	
	}


?>
