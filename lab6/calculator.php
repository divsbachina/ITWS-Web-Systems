<?php 

abstract class Operation {
  protected $operand_1;
  protected $operand_2;
  public function __construct($o1, $o2) {

    //Making sure square root function works with only one input
    if($o2 == NULL)
    {
      $o2 = 0;
    }


    // Make sure we're working with numbers...
    if (!is_numeric($o1) || !is_numeric($o2)) {
      throw new Exception('Non-numeric operand.');
    }
    
    // Assign passed values to member variables
    $this->operand_1 = $o1;
    $this->operand_2 = $o2;
  }
  public abstract function operate();
  public abstract function getEquation(); 
}

// Addition subclass inherits from Operation
class Addition extends Operation {
  public function operate() {
    return $this->operand_1 + $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

// Add subclasses for Subtraction, Multiplication and Division here


class Subtract extends Operation {
  public function operate() {
    return $this->operand_1 - $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Multiply extends Operation {
  public function operate() {
    return $this->operand_1 * $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Divide extends Operation {
  public function operate() {
    return $this->operand_1 / $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

//begin additional individual code

class SquareRoot extends Operation {
  public function operate() {
    return sqrt($this->operand_1);
  }
  public function getEquation() {
    return '√' . $this->operand_1 . " = " . sqrt($this->operand_1);
  }
}


class Square extends Operation {
  public function operate() {
    return pow($this->operand_1, 2);
  }
  public function getEquation() {
    return $this->operand_1 . " ^ 2  = " . pow($this->operand_1, 2);
  }
}

class Power extends Operation {
  public function operate() {
    return pow($this->operand_1, $this->operand_2);
  }
  public function getEquation() {
    return $this->operand_1 . " ^ " . $this->operand_2 .  " = " . pow($this->operand_1, $this->operand_2);
  }
}


class Log10 extends Operation {
  public function operate() {
    return log10($this->operand_1);
  }
  public function getEquation() {
    return "log10(". $this->operand_1 . ")" . " = " . log10($this->operand_1);
  }
}

class Log extends Operation {
  public function operate() {
    return log($this->operand_1);
  }
  public function getEquation() {
    return "ln(". $this->operand_1 . ")" . " = " . log($this->operand_1);
  }
}


class TenToPow extends Operation {
  public function operate() {
    return pow(10, $this->operand_1);
  }
  public function getEquation() {
    return "10 ^ " . $this->operand_1 . " = " . pow(10, $this->operand_1);
  }
}


class eToPow extends Operation {
  public function operate() {
    return exp($this->operand_1);
  }
  public function getEquation() {
    return "e ^ " . $this->operand_1 . " = " . exp($this->operand_1);
  }
}


class Sine extends Operation {
  public function operate() {
    return sin($this->operand_1);
  }
  public function getEquation() {
    return "Sine(" . $this->operand_1 . ") = " . sin($this->operand_1);
  }
}

class Cosine extends Operation {
  public function operate() {
    return cos($this->operand_1);
  }
  public function getEquation() {
    return "Cos(" . $this->operand_1 . ") = " . cos($this->operand_1);
  }
}

class Tangent extends Operation {
  public function operate() {
    return tan($this->operand_1);
  }
  public function getEquation() {
    return "Tan(" . $this->operand_1 . ") = " . tan($this->operand_1);
  }
}






// Some debugs - uncomment these to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";


// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();


// Instantiate an object for each operation based on the values returned on the form
// For example, check to make sure that $_POST is set and then check its value and 
// instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs
// We might cover such a way on Tuesday...




// Put code for subtraction, multiplication, and division here

  try {
    if (isset($_POST['add']) && $_POST['add'] == 'Add') {
      $op = new Addition($o1, $o2);
    }

    if (isset($_POST['sub']) && $_POST['sub'] == 'Subtract') {
      $op = new Subtract($o1, $o2);
    }

    if (isset($_POST['mult']) && $_POST['mult'] == 'Multiply') {
      $op = new Multiply($o1, $o2);
    }

    if (isset($_POST['divi']) && $_POST['divi'] == 'Divide') {
      $op = new Divide($o1, $o2);
    }

    if (isset($_POST['sqrt']) && $_POST['sqrt'] == 'Square Root') {
      $op = new SquareRoot($o1, $o2);
    }

    if (isset($_POST['square']) && $_POST['square'] == 'Square') {
      $op = new Square($o1, $o2);
    }

    if (isset($_POST['power']) && $_POST['power'] == 'Power') {
      $op = new Power($o1, $o2);
    }

    if (isset($_POST['log10']) && $_POST['log10'] == 'Log10') {
      $op = new Log10($o1, $o2);
    }

    if (isset($_POST['log']) && $_POST['log'] == 'Ln') {
      $op = new Log($o1, $o2);
    }

    if (isset($_POST['pow10']) && $_POST['pow10'] == 'TenToPow') {
      $op = new TenToPow($o1, $o2);
    }

    if (isset($_POST['expp']) && $_POST['expp'] == 'eToPow') {
      $op = new eToPow($o1, $o2);
    }

    if (isset($_POST['sine']) && $_POST['sine'] == 'Sine') {
      $op = new Sine($o1, $o2);
    }

    if (isset($_POST['cos']) && $_POST['cos'] == 'Cosine') {
      $op = new Cosine($o1, $o2);
    }

    if (isset($_POST['tan']) && $_POST['tan'] == 'Tangent') {
      $op = new Tangent($o1, $o2);
    }




  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>PHP Calculator</title>
</head>
<body>
  <pre id="result">
  <?php 
    if (isset($op)) {
      try {
        echo $op->getEquation();
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }

    foreach($err as $error) {
        echo $error . "\n";
    } 
  ?>
  </pre>
  <form method="post" action="calculator.php">
    <input type="text" name="op1" id="name" value="" />
    <input type="text" name="op2" id="name" value="" />
    <br/>
    <!-- Only one of these will be set with their respective value at a time -->
    <input type="submit" name="add" value="Add" />  
    <input type="submit" name="sub" value="Subtract" />  
    <input type="submit" name="mult" value="Multiply" />  
    <input type="submit" name="divi" value="Divide" />  
    <input type="submit" name="sqrt" value="Square Root" />  
    <input type="submit" name="square" value="Square" />
    <input type="submit" name="power" value="Power" />
    <input type="submit" name="log10" value="Log10" />
    <input type="submit" name="log" value="Ln" />
    <input type="submit" name="pow10" value="TenToPow"/>
    <input type="submit" name="expp" value="eToPow"/>
    <input type="submit" name="sine" value="Sine"/>
    <input type="submit" name="cos" value="Cosine"/>
    <input type="submit" name="tan" value="Tangent"/>


  </form>

  <?php echo "<link rel='stylesheet' type='text/css' href='style.css' />"; ?>
</body>
</html>

