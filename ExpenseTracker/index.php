
<?php 
    $page_title = "Expense Tracker = Homepage";
    include_once'partials/header.php';
?>

<script type="text/javascript">
      
</script>


    
    <?php if(!isset($_SESSION['username'])): ?>
      <?php include_once 'demo.php' ?>
    <?php else: ?>
      <?php include_once 'dashboard.php' ?>
    <?php endif ?>


   
    <?php include_once 'partials/footer.php' ?>
    
    </body>
</html>