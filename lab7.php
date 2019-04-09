<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<h5>
Write a PHP script to calculate and display the sum, average, and five lowest and highest numbers from the given list.
123, 160, 62, 153, 345, 128, 387, 825, 666, 614, 723, 163, 811, 176, 732, 628, 722, 733, 755, 765,
794, 613, 627
</h5>
<?php
$nums = "123, 160, 62, 153, 345, 128, 387, 825, 666, 614, 723, 163, 811, 176, 732,628, 722, 733, 755, 765, 794, 613, 627";
$nums_array = explode(',', $nums);
$tot_num = 0;
$nums_array_length = count($nums_array); 
foreach($nums_array as $num)
{
    $tot_num += $num;
}
echo "Sum of Number is : ".$tot_num."
<br>";
$avg_num = $tot_num/$nums_array_length; echo "Average Number is : ".$avg_num."
<br>"; sort($nums_array); echo "
List of Five Lowest Numbers : <br>"; 
for ($i=0; $i< 5; $i++)
{
echo $nums_array[$i].", ";
}
echo "<br>
List of Five Highest Numbers : <br>";
for ($i=($nums_array_length-5); $i< ($nums_array_length); $i++)
{
echo $nums_array[$i].", ";
}
?>
<h5>
Modify above php code to calculate and display the sum, average, and five lowest and highest ODD and EVEN numbers from the given list.
123, 160, 62, 153, 345, 128, 387, 825, 666, 614, 723, 163, 811, 176, 732, 628, 722, 733, 755, 765,
794, 613, 627
</h5>
<?php
$nums = "123, 160, 62, 153, 345, 128, 387, 825, 666, 614, 723, 163, 811, 176, 732,628, 722, 733, 755, 765, 794, 613, 627";
$nums_array = explode(',', $nums);
$tot_even_num = 0;
$tot_odd_num = 0;
$nums_array_length = count($nums_array); 
foreach($nums_array as $num)
{
    if ($num%2 == 0)
        $tot_even_num += $num;
    else
        $tot_odd_num += $num;
}
echo "Sum of Even Number is : ".$tot_even_num."
<br>";
echo "Sum of Odd Number is : ".$tot_odd_num."
<br>";
$avg_even_num = $tot_even_num/$nums_array_length; echo "Average Number is : ".$avg_num."
<br>"; sort($nums_array); echo "
List of Five Lowest Numbers : <br>"; for ($i=0; $i< 5; $i++)
{
echo $nums_array[$i].", ";
}
echo "<br>
List of Five Highest Numbers : <br>";
for ($i=($nums_array_length-5); $i< ($nums_array_length); $i++)
{
echo $nums_array[$i].", ";
}
?>
</body>
</html>