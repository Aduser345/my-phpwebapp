<html>
<title>HTML with PHP</title>
<style>
    body {
        margin: 0px;
    }

    input[type=text],
    select,
    textarea {
        width: 96%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #000000;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100px;
    }

    input[type=submit]:hover {
        background-color: #131313;
    }
</style>

<body>
    <form action="Config.php" method="POST" enctype="multipart/form-data">
        <input type="text" id="fname" name="url" placeholder="url">
        <input type="text" id="fname" name="Title" placeholder="title">
        <select id="Cats" name="Category">
            <option value="TP">Trending</option>
            <option value="DANCE">Dance</option>
            <option value="FOOD">Food</option>
        </select>
        <input type="submit" value="Submit" name="upload">
    </form>
</body>

</html>