<?php include"inc/header.php"; ?>
<?php include"inc/functions.php"; ?>

	
		<form action="" method="post">
			<table>
				<tr>
					<td>Enter First number :</td>
					<td><input type="number" name="num1"></td>
				</tr>
				<tr>
					<td>Enter Secound number :</td>
					<td><input type="number" name="num2"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="calculation" value="Calculet"></td>
				</tr>
			</table>
		</form>

		<?php 
			if(isset($_POST['calculation'])){
				$numOne = $_POST['num1'];
				$numTwo = $_POST['num2'];

				if(empty($numOne) || empty($numTwo)){
					echo "<span style='color:red;'>Field must not be empty</span><br>";
				}else{
					echo "First number is :".$numOne. " Secound number is".$numTwo."<br>";
					$cal = new Calculation;
					$cal->add($numOne, $numTwo);
					$cal->sub($numOne, $numTwo);
					$cal->mul($numOne, $numTwo);
					$cal->div($numOne, $numTwo);
				}
				

			}
		?>

<?php include"inc/footer.php"; ?>
