<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@800&display=swap" rel="stylesheet">
</head>
<body><center>
        <div class="cent">
            <div class="col1">
                <img src="logo.png" class="pic1" >
            </div>
            <div class="col2">
                <center>
                <span class="heading1">
                    <b>All University Student's Development Association</b>
                </span>
                <br>
                <span class="heading2"><b>Vavuniya District</b></span>
                </center>
            </div>
            <div class="bg-img">
                   
                    <form action="result.php" class="container" method="POST">
                        <center>
                      <h1 >EXAM</h1>
                     
                      <label for="index" style="font-family: 'Nanum Gothic', sans-serif;"><b>Index No</b></label>
                      <input type="text" placeholder="Enter Index No" name="index" required>
                      <?php
                      if(isset($_GET['message'])){
                      if($_GET['message']=='in'){
                          echo "<b> <font color=red>Invalid Indexnumber!</font></b>";
                      }
                    }
                      ?>
                      <br>
                      <button type="submit" class="btn">Submit</button>
                      
                    </center> 
                    </form>
                
            </div>
        </div>
</center>
</body>
</html>