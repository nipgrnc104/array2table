Developed by [NIPGR](www.nipgr.res.in)  
Developer(s): Saurabh Gayali ([email] (saurabh.gayali@gmail.com))  
Scientist concerned: Dr. Niranjan Chakraborty ([email](nchakraborty@gmail.com))





Example array

`Array ( [0] => Array ( [0] => 1 [1] => 1 ) [1] => Array ( [0] => 1 [1] => 1 ) ) 
`
created inside php as
`$array[0][0]=1;
$array[0][1]=1;  
$array[1][0]=1;  
$array[1][1]=1;`


function can be called as  
`echo array2table($array);`

Here is the output table
<table border=1><tbody><tr><td>1</td><td>1</td></tr><tr><td>1</td><td>1</td></tr></tbody></table>
