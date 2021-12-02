<?php
include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin Dashboard</title>
    <!-- add product -->
</head>
<body>


<!-- AJAX -->
<!-- json using -->
<br>

<div id="customer_product_req1" style="margin:15px">
    <h4>Displaying all Customer Reuests:</h4>
    <button type="button" id="grab" >All Customers requests</button>

</div>
<div id="customer_product_req2" style="margin:15px">
</div>
<script>
         document.getElementById('grab').addEventListener('click', showValues);
         function showValues() {
             var req = new XMLHttpRequest();
             req.open('GET','jsonreturn3.php',true );
             req.onload = function(){
                 if(req.status==200){
                 var namez = JSON.parse(req.responseText);
                 var display = '';
     
                 for (var i in namez){
                     display += '<ul style="list-style:none;">'+
                         '<li>Customer Id: '+namez[i].customer_id+'</li>'+
                         '<li>Product Name: '+namez[i].product_name+'</li>'+
                         '<li>Product Category:'+namez[i].product_category+' </li>'+ 
                         '<li>Product Brand:'+namez[i].product_brand+'</li>'+'</ul>';
                 }
                 document.getElementById('customer_product_req2').innerHTML=display;
             }
         }
             req.send();
         }
</script>


</body>
</html>