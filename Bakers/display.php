<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-color:;
            }
            table{
                background-color:#dbdae6;
            }
            h2{
                font-family:"Sofia", sans-serif;
                color:#e094d;
            }
            th{
                background-color:#74d16f;
            }
            td{
                font-family:"Sofia", sans-serif;
                color:#e094d; 
                background-color:#dbdae6;
 
                
            }
            
        </style>
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>

  </head>

<?php

error_reporting(1);

include("connection.php");


$query= "SELECT * FROM contact";
$data= mysqli_query($conn, $query);

$total= mysqli_num_rows($data);

 if($total != 0)
 {
   ?>

 <h2 align="center"><strong>Contact.</strong></h2>
 <center>
     <table id="table_id"
 border="1" cellspacing="5" width="100%">
        <thead>
          <tr>
             <th width="5%">ID</th>
             <th width="17%">Name</th>
             <th width="10%">Phone</th>
             <th width="15%">Massage</th>
             <th width="15%">Action</th>


          </tr>
        </thead>
        <tbody>
      
           <?php
           
              while ($result = mysqli_fetch_assoc($data)){
            
             echo "<tr>
                       <td>".$result['id']."</td>
                       <td>".$result['Name']."</td>
                       <td>".$result['Phone']."</td>
                       <td>".$result['Message']."</td>


                      <td><a href='update.php?id=$result[id]'>Update</a>
                      
                      <a href='delete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a></td>

                    </tr>";
                  }
               
  if($data){
    //echo "data insert sucessfuly";

        
    }
    else{
      echo "data do not insert";
  
    }
  }
  ?>
        </tbody>

       
</table>

<script>

    function checkdelete()
    {
        return confirm('are you sure you want to delete this record ?');
    }


</script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
$(function() {
$("#table_id").dataTable();
});
</script>
</html>
