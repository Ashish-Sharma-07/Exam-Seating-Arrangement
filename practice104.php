<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 27-03-2017
 * Time: 00:14
 */if(true)
{
    $str = <<< end
    <script>
    val = confirm("Move to Seating Arrangement?");
    if (val == true)
    {
        window.location.href = 'seatingArrangement.php';
    }
    else
        {
            window.location.href = 'homepage.php';
        }
    </script>
end;

    echo $str;
}
else
{
    echo"error in output";
}
?>
