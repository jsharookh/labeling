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
        
        div.tag{
            float: left;
            width: 275px;
            margin: 5px;
            height: 200px;
            background-color: beige
        }
        th{
            border: 5px solid black;
            width: 100px;
            height: 30px;
            
        }
        td,tr{
            border: 1px solid black;
            width: 100px;
            height: 30px;
            
        }
        table{
            border: 1px solid black;
        }
        
        </style>
    </head>
    <body>
        <div class="header"> </div>
            <center>
            <a href="list.php"><button>List products</button></a>
            <a href="productlist.php"><button>Enter price</button></a>
            <a href="add.html"><button>ADD products</button></a></center>
    
        
        <table style="width:100%">
            <tr>
                <th>id</th>
                <th>English name</th>
                <th>Arabic name</th>
                <th>English country</th>
                <th>Arabic country</th>
                <th>English Price</th>
                <th>Arabic Price</th>
                <th>New English Price</th>
                <th></th>
                <th>New Arabic Price</th>
        
        
        
       
             <?php include 'database.php'; ?>
    <?php
                
    mysqli_query($connect,"set names 'utf8'");
mysqli_query($connect,"set character_set 'utf8'");
    $sql="SELECT * FROM a";
    $result= mysqli_query($connect,$sql);
    $count=0;
 while($row = mysqli_fetch_array($result)){
    
     echo '
     <form method="post" action="update.php">
  <tr>
        <td>'.$row['id'].'</td>
    <td>'.$row['e_name'].'</td>
    <td>'.$row['a_name'].'</td>
    <td>'.$row['e_country'].'</td>
    <td>'.$row['a_country'].'</td>
    <td>'.$row['e_price'].'</td>
    <td>'.$row['a_price'].'</td>
    <td><input type="text" id="ne_price" onkeyup="return arabic(this)" name="ne_price"></td>
    <td><input type="submit" value="update price"></td>
    <td><input type="text" id="na_price"  name="na_price"></td>
    <td><input type="hidden" name="id" value="'.$row['id'].'"><input type="submit" value="update price"></td>
  </tr> </form>


'  ;
       
     
 }

 



?>
                </table>
        <center><a href="list.php"><button>Show labels</button></a></center>
           
            
            
        
        
    </body>
    <script type="text/javascript">
    function arabic(evt) {
        var en =document.getElementById('ne_price');
        var ar =document.getElementById('na_price');
    
                alert(ar.value);

        

   
}
</script> 
</html>