<?php 
    $cases = json_decode(file_get_contents('https://pomber.github.io/covid19/timeseries.json'), true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <title>COVIDTODAY</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <div class="container">
    <section class="background">
      <div class="content-wrapper">
        <?php 
        $case = ($cases['Russia'][count($cases['Russia'])- 1]);
        $case_yesterday = ($cases['Russia'][count($cases['Russia'])- 2]);
    
        $case_today = $case['confirmed'] - $case_yesterday['confirmed'];
        $deaths_today = $case['deaths'] - $case_yesterday['deaths'];
        ?>
        <div class="title">
          <h1>Russia</h1>
        </div>
        <div class="content-subtitle">
          <h3>Обнаружено: <?php echo $case['confirmed']; ?></h3>
          <p>За день: <?php echo $case_today; ?></p>
          <h4>Умерли: <?php echo $case['deaths']; ?></h4>
          <p>За день: <?php echo $deaths_today ?></p>
          <p class="date"><?php echo $case['date']; ?></p>
        </div>
      </div>
    </section>


    <section class="background">
      <div class="content-wrapper">
        <?php 
        $case = ($cases['Ukraine'][count($cases['Ukraine'])- 1]);
        $case_yesterday = ($cases['Ukraine'][count($cases['Ukraine'])- 2]);
    
        $case_today = $case['confirmed'] - $case_yesterday['confirmed'];
        $deaths_today = $case['deaths'] - $case_yesterday['deaths'];
        ?>
        <div class="title">
          <h1>Ukraine</h1>
        </div>
        <div class="content-subtitle">
          <h3>Обнаружено: <?php echo $case['confirmed']; ?></h3>
          <p>За день: <?php echo $case_today; ?></p>
          <h4>Умерли: <?php echo $case['deaths']; ?></h4>
          <p>За день: <?php echo $deaths_today ?></p>
          <p class="date"><?php echo $case['date']; ?></p>
        </div>
      </div>
    </section>

    <section class="background">
      <div class="content-wrapper">
        <?php 
        $case = ($cases['Belarus'][count($cases['Belarus'])- 1]);
        $case_yesterday = ($cases['Belarus'][count($cases['Belarus'])- 2]);
    
        $case_today = $case['confirmed'] - $case_yesterday['confirmed'];
        $deaths_today = $case['deaths'] - $case_yesterday['deaths'];
        ?>
        <div class="title">
          <h1>Belarus</h1>
        </div>
        <div class="content-subtitle">
          <h3>Обнаружено: <?php echo $case['confirmed']; ?></h3>
          <p>За день: <?php echo $case_today; ?></p>
          <h4>Умерли: <?php echo $case['deaths']; ?></h4>
          <p>За день: <?php echo $deaths_today ?></p>
          <p class="date"><?php echo $case['date']; ?></p>
        </div>
      </div>
    </section>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
  <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
  <script src="js/index.js"></script>
</body>

</html>