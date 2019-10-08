<html>
<head>
	<title>form filling</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?>

        <p>Hello, my name is 
            <?php echo $_POST['firstname'] . ' and surname is ' . $_POST['lastname']; ?>
        </p>

        <?php else: ?>

            <h2>fill the form</h2>

            <form action="hw4.php" method="POST">

                 first name:
                <input type="text" name="firstname">
                
                <br> last name:
                <input type="text" name="lastname">
                
			<input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="Submit">

            </form>

      <?php endif; ?> 
</body> 
</html>
