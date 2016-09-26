<h1>Arry2table</h1>

<b>Developed by: </b> <a target="_blank" href="http://www.nipgr.res.in">NIPGR</a>
<br>
Developer(s): <a href="mailto:saurabh.gayali@gmail.com" target="_blank">Saurabh Gayali</a><br>
Scientist concerned: <a href="mailto:nchakraborty@gmail.com" target="_blank">Dr. Niranjan Chakraborty</a>



<br><br><br>

Example array


<div class="mydiv" style="border:1px #000 solid; width:50%;background:#ccc">
<pre>
Array ( [0] => Array ( [0] => 1 [1] => 1 ) [1] => Array ( [0] => 1 [1] => 1 ) ) 
</pre>
</div>

<br><br>
This array is fed as example inside php as:


<div class="mydiv" style="border:1px #000 solid; width:50%;background:#ccc">
<pre>
$array[0][0]=1;
$array[0][1]=1;  
$array[1][0]=1;  
$array[1][1]=1;
</pre>
</div>


<br><br>
This function can be called anywhere inside other documents as

<div class="mydiv" style="border:1px #000 solid; width:50%;background:#ccc">
<pre>
echo array2table($array);
</pre>
</div>

<br><br>
Here is the output table
<table border=1><tbody><tr><td>1</td><td>1</td></tr><tr><td>1</td><td>1</td></tr></tbody></table>



