
<?php echo "this is firs line";
// this is single line comment c++ style
?>
<?php echo "second line";
/* this is a multi line comment
yet another line */
?>

<?php echo "third line"
# c style comment for single line
?>

<h1>this is an <?php #echo "php block comment"; ?>example</h1>
<h1>this is an <?php echo "end of line comment "; # c style comment ?>example</h1>


<?php echo "do not use nest multiline comment";
    //* 
    echo 'this line will not show';
    //*/
    echo 'this is second line'
    // */
?>


 <?php echo "html comment does not have any meaning to the php parser"; ?>


