<p>This is the requested Post:</p>


<p>Post title: <?php echo $post->title; ?></p>
<p>Post content: <?php echo $post->content; ?></p>
<?php 
$file = $post->image;
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>