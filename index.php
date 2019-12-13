<html>
    <head>
         <script language="javascript" type="text/javascript">
        function printDiv(page) {
            //Get the HTML of div
            var divElements = document.getElementById(page).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
        
        
        
        
    <style>
        div.page{
            width:750px;
            height: auto;
        }
        div.tag{
            float: left;
            width: 320px;
            margin: 5px;
            height: 200px;
        }
           tr.head{
            font-size: 22px;
            
        }
        tr.price{
            font-size: 25px;
        }
    
        table{
            border: 1px solid black;
            height: 200px;
        }
        
        </style>
    </head>
    <body>
        <div class="header"><center> <a href="list.php"><button>List products</button></a>
            <a href="productlist.php"><button>Enter price</button></a>
            <a href="add.html"><button>ADD products</button></a>
    <button onclick=printDiv('page') >Print labels</button></center> </div>
            <div class="page" id="page">
            
        
        
        
        
        
       
             <?php include 'database.php'; ?>
    <?php
                
    mysqli_query($connect,"set names 'utf8'");
mysqli_query($connect,"set character_set 'utf8'");
    $sql="SELECT * FROM a WHERE a_price<>''";
    $result= mysqli_query($connect,$sql);
    $count=0;
 while($row = mysqli_fetch_array($result)){
    
     echo '<div class="tag"><table style="width:100%">
     <tr>
     <th colspan="2"><center>Alfakhama Vegetables</center><hr></th></tr>
  <tr class="head">
    <th>'.$row['e_name'].'<br></th>
    <th>'.$row['a_name'].'</th>
  </tr>
             <tr>
    <th>'.$row['e_country'].'</th>
    <th>'.$row['a_country'].'</th>
  </tr>
             <tr class="price">
    <th><b>QR.'.$row['e_price'].'</b></th>
    <th><b>'.$row['a_price'].'</b></th>
  </tr>
</table>

</div>'  ;
         $count=$count+1;
     if($count%8==0){
         echo '<div class="tag"></div><div class="tag"></div>';
     }
     
 }

 



?>
    </div>
            
            
            
        
        
        </div>
    
    </body>
</html>