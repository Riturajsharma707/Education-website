<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11th Notes</title>
    <style>
      .notes{
        margin-top:4%;
      }
      table {
          box-shadow:green 5px 14px 95px;
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          border:1px solid gray;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
          text-align:center;
          justify-content: center;

        }
        tr{
          background-color:hsl(189, 45%, 94%);
        }
        .si{
          width:50px;
        }
        .fname{
          width:500px;
        }
        .down{
          width:200px;
        }
        </style>
</head>
<body>
    <h1>click Download button for download notes....</h1>
    <div class="notes">
      <table>
        <tr>
          <th class="si">Si No.</th>
          <th class="fname">File Name</th>
          <th class="down" >Download</th>
        </tr>
    
        <?php
          $files = scandir("upload-11th");
          for($a = 2; $a<count($files); $a++) {
          //displaying link to download 
            ?>
            <!-- <table> -->
            <tr>
              <td class="si"><?php echo $a-1?></td>
              <td class="fname"><?php echo $files[$a]?></td>
              <td class="down"><a download="<?php echo $files[$a]?>" href="upload-images/<?php echo $files[$a]?>">Download</a></td>
            </tr>
            <?php
          }
        ?>
      </table>
    </div>
</body>
</html>