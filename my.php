<html>
<body>
<?php
 $count=$_POST['count'];
 file_put_contents('data.txt', "$count\n", FILE_APPEND);
 $output = shell_exec("cat data.txt | uniq -c ");
echo "$output"."\n";
?>

</body>
</html>
