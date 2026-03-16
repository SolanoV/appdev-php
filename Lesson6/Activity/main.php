<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $keyword= htmlspecialchars($_POST['keyword']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
</head>
<body>
 <center>
      <table border = 1>
            <tr>
               <th>Search</th>
               <form action="result.php" method="POST">
               <td><input type ="text" name="keyword"></td>
               <td><input type ="submit" name="submit" value="Go"></td>
               </form>
           </tr>
    
     </table>

</center>
</body>
</html>