<?php include "functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width">
   <title>LastCode Quiz</title>
   <!--      Some Font    -->
   <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@1,500&family=Montserrat&display=swap" rel="stylesheet">
   <!--      QuizPages css file    -->
    <link rel="stylesheet" href="QuizPages.css">
   <!--      BootStrap     -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

   
<body>
<?php if(!$RandomResult && $_SESSION['endPage'] === 'false'){ ?>
   
   
   <!--    StartPage            StartPage            StartPage     -->     
   <div id="StartPage" class="StartPage row m-0 p-0 align-items-center">

      <form action="index.php" class="Background_Box col-12 row p-0 m-0 align-items-center" method="post" >
         <div class="col-12">
            <h1 class="title">hi there , let's start quiz</h1>
            <button class="StartButton" value="StartQuiz" name="StartQuiz" >Start This Quiz</button> 
         </div>
      </form>

   </div>


<?php } if($RandomResult){ ?>   
   
    
   <!-- QuizPage -   --   - QuizPage -   --   - QuizPage -->   
   <div id="QuizPage" class="QuizPage row m-0 p-0 align-items-center">

      <form action="index.php" class="Background_Box col-12 row p-0 m-0 align-items-center" method="post">
         <?php DisplayScore(); ?>
         <div class="quiz_box col-12">
            <!--  question and options generator -->
            <?php optionsButtons(); ?>
         </div>
      </form>

   </div>


<?php  } if (!$RandomResult && $_SESSION['endPage'] === 'true'){ ?>
        
        
   <!-- EndPage -   --   - EndPage -   --   - EndPage -->   
   <div class="EndPage row m-0 p-0 align-items-center">

      <div class="Background_Box col-12 row p-0 m-0 align-items-center">
         <div class="col-12">
            <h2 class="percent"><?php percentScore(); ?></h2>
            <h2 class="score">your score is <?php echo "$score".' of '."$Number_Of_Questions" ;?></h2>
         </div>
      </div>

   </div>
    
    
<?php } ?>
</body>
</html>




