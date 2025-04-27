<!DOCTYPE html>
<html>
    <head>
        <title>Admin Music Handler</title>
        <style> 
            input[type=text] {
              width: 50%;
              padding: 12px 20px;
              margin: 8px 0;
              box-sizing: border-box;
              border: 2px solid blue;
              border-radius: 4px;
            }

            input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
            </style>
    </head>
    <body>
        <form action="Upload.php"  method="POST" enctype="multipart/form-data">
        <input type="text" name="song" placeholder="Enter Song Name"/><br>
        <input type="text" name="artist" placeholder="Enter Artist Name"/><br>
        <label>Select  Song </label>
        <input type="file" name="audioFile"/><br>
        <label>Select A image for Song cover</label>
        <input type="file" name="photo"/><br>
        <input type="submit" value="Upload Audio" name="save_audio"/>
        </form> 

	</body>	
    </body>
</html>