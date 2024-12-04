<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator: PHP</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php 
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : '';
    $operator = isset($_POST['operator']) ? $_POST['operator'] : '';
    $result = "";

    if($operator === "+") {
      $result = $num1 + $num2;
    } 
    if($operator === "-") {
      $result = $num1 - $num2;
    } 
    if($operator === "*") {
      $result = $num1 * $num2;
    } 
    if($operator === "/") {
      if ($num2 === 0) {
        $result = "Error: Cannot divide by zero.";
      } else {
        $result = $num1 / $num2;
      }
      
    } 
  ?>
  <main>
      <h1 class="main-heading">My Calculator made with PHP</h1>
      <form name="form" action="" method="post" class="cal-container">
        <section class="input-container">
          <input name="num1" type="number" placeholder="First number...">
          <select name="operator" id="operator">
            <option value="">Select Operand</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
          </select>
          <input name="num2" type="number" placeholder="Second number...">
        </section>
        <div>
          <button class="submit-btn">SUBMIT</button>
        </div>
        <?php 
         if ($operator && $num1 !== '' && $num2 !== '') {
          echo "<h1>Result: $num1 $operator $num2 = $result</h1>";
         }
        ?>
      </form>
  </main>
</body>
</html>