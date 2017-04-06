<!-- Start of included footer -->
<div class="footer">
	<p align="center">User <?php echo $_SESSION['userName'] ?> 
     logged in for
     <?php echo time() - $_SESSION['startTime']?> seconds.
     ( <a href="logout.php">Logout</a>) 
     <span style="font-style:italics"><a href="admin.php">Hash</a></span>
      </p>
</div>
</body>
</html>