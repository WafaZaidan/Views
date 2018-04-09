<html><p>Fill in the following form to create a new post:</p>
    
		<title>Create Post</title>
</body>
        
<form id="get-data-form" method="POST">

    <h2>Add New Post</h2>
   
    <p><label>Title</label><br />
    <input type='text' name='title'></p>


    
     <p><label>Description</label><br />
        
    <textarea name='content' cols='60' rows='10' class="tinymce" id="texteditor" ><?php if(isset($error)){ echo $_POST['DESCRIPTION'];}?></textarea></p>
<!--     
            <script>
                tinymce.init({
                    selector: "textarea",
                    plugins: [
                        "advlist autolink lists link image charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                });
            </script>
    -->
       
        <input type="hidden" 
                 name="MAX_FILE_SIZE" 
               value="10000000"
               />

      
  <p><input class="w3-btn w3-pink" type="submit" value="Submit"></p>
    	<div id="data-container">
		</div>

</form>


<!--<html> <head> 




        <title>Create A Blog Post</title> 

 
    </head>
    <body>
 
        <form id="get-data-form" method="POST">
            <input type="text"  name="title"  placeholder="Post Title Here">
            <textarea name= "content" class="tinymce" id="texteditor"></textarea>
            <input type="submit" value="Get Data">
            <input type="hidden" 
                   name="MAX_FILE_SIZE" 
                   value="10000000"
                   />

            <input type="file" name="image" class="w3-btn w3-pink" required />
            <p>
       <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../plugin/tinymce/init-tinymce.js" type="text/javascript"></script>
        <script src="../plugin/tinymce/tinymce.min.js" type="text/javascript"></script>

        </form>

        <div id="data-container">
        </div>

    </form


</body> 
</html>-->
<script src="plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="plugin/tinymce/init-tinymce.js" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
</body> 

    
</html>