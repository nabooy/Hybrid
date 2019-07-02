<div id="dump"></div>
<div class="NavMenu">
	<button onclick="go('Auth', 'Logout', 'Index', 'body', {});"><?php echo $userInfo['Auth_Username']; ?>(X)</button>
</div>
<div class="body">
	<script>
		go('Index', 'run', 'Index', '.body', {});
	</script>
</div>
