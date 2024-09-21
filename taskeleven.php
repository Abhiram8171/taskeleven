<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Hover Effect</title>
</head>
<body>
    <img id="hoverImage" src="cat.jpeg" alt="Sample Image">
    
    <script>

        const imgElement = document.getElementById('hoverImage');

       
        imgElement.onmouseover = function() {
            imgElement.style.display = 'none';
        }

        
        imgElement.onmouseleave = function() {
            imgElement.style.display = 'block';
        }
    </script>
</body>
</html>