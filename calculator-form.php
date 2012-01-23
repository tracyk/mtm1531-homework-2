<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Money Calculator Form</title>
	<link href="css/general.css" rel="stylesheet">
	
</head>

<body>

<h2> Money Calculator </h2>

<form action="calculator-form.php" method="post">
	
    
	<label for="number1"> Number 1 </label>
	<input type="number" id="number1" name="number1">
	
	<label for="function"> Choose your operator </label>
    <select id="function" name="function">
    	<option value="plus"> + </option>
        <option value="minus"> - </option>
        <option value="mult"> * </option>
        <option value="divide"> / </option>
     </select>
	
	<label for="number2"> Number 2 </label>
	<input type="number" id="number2" name="number2">
	
	
	<button type="submit"> Submit </button>
	
</form>

<?php if (!empty($_POST['number1']) && !empty($_POST['number2'])) : ?>
	<?php if ($_POST['function'] == 'plus') : ?> 
		<?php $result = $_POST['number1'] + $_POST['number2']; ?>
		<p> <?php echo $_POST['number1'] ; ?> + <?php echo $_POST['number2'] ; ?> = <?php echo $result ; ?> </p>
		
	<?php elseif($_POST['function'] == 'minus') : ?>
		<?php $result = $_POST['number1'] - $_POST['number2']; ?> 
		<p> <?php echo $_POST['number1'] ; ?> - <?php echo $_POST['number2'] ; ?> = <?php echo $result ; ?> </p>

	
	<?php elseif($_POST['function'] == 'mult') : ?>
		 <?php $result = $_POST['number1'] * $_POST['number2']; ?> 
		<p> <?php echo $_POST['number1'] ; ?> * <?php echo $_POST['number2'] ; ?> = <?php echo $result ; ?> </p>
		
	<?php elseif ($_POST['function'] == 'divide') : ?>
		 <?php $result = $_POST['number1'] / $_POST['number2']; ?> 	
		<p> <?php echo $_POST['number1'] ; ?> / <?php echo $_POST['number2'] ; ?> = <?php echo $result ; ?> </p>

	<?php endif; ?>
	
	<?php $subtotal = $result * 1.13; ?>
	<?php $total = number_format($subtotal, 2, ".", ",") ; ?>
	<p> <?php echo $result ; ?> + 13% tax = $<?php echo $total ; ?>  </p>

<?php endif; ?>


 

</body>
</html>