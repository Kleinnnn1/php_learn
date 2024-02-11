<?php
    /*include() = copies the conten of a file (php/html/text)
                    and includes it in your php file.
                    Sections of our website become reusable 
                    Changes only need to be made in one place.

    */
    include("header.html")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b style="color: dark;">HomePage</b> <br>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur tenetur dolores omnis vitae obcaecati similique impedit, perspiciatis repudiandae rem, cumque expedita? Autem sunt dolorum similique aliquam dolorem laborum quis nesciunt!
</body>
</html>

<?php
    include("footer.html");
?>