<br/> 
dear <?php echo e($customer_details['name']); ?> 
<br/>
 thank you for ordering with us <br/> 
 your order detail is as below <br/><br/> 
 ---------- Order Detail---------- 
 Order ID : <?php echo e($order_details['SKU']); ?><br/> 
 price : $ <?php echo e($order_details['price']); ?><br/> 
 order Date = <?php echo e($order_details['order_date']); ?><br/> 
 <br/> Thank you<br/> 
 our contact detail as of below<br/> kathmandu nepal<br/> ph:0123222<br/> email : example@example.com<br/>

<?php /**PATH /opt/lampp/htdocs/test_project/Blog/resources/views/emails/customer_mail.blade.php ENDPATH**/ ?>