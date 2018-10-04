<?php 

session_unset();
session_destroy();

 ?>
<script>
	location.replace('<?php echo "$site_url"."home/az"; ?>');
</script>
			