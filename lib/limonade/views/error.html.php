  <h1><?php echo Limonade\h(Limonade\error_http_status($errno));?></h1>
  <?php if($is_http_error): ?>
  <p><?php echo Limonade\h($errstr)?></p>
  <?php endif; ?>
  
  <?php echo  Limonade\render('_debug.html.php', null, $vars); ?>