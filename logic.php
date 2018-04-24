<?php
/*
$name = $_POST["user_name"];
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=dataset.txt");

// do your Db stuff here to get the content into $content
print "This is some text...\n";
print $content;
*/
$id = "1 ";
$exam1 = "1 ";
$exam2 = "2 ";
$exam3 = "4 ";
$quiz1 = "3 ";
$quiz2 = "2 ";
$quiz3 = "1 ";
$l1 = "4 ";
$l2 = "3 ";
$l3 = "2 ";
$l4 = "1 ";
$l5 = "3 ";
$l6 = "2 ";
$journals = "1 ";
$final = "3 ";
$course_score = "2 ";
$letter_grade = "1 ";
if (isset($_POST["name"])){
//echo $_POST["name"];
//echo $_POST["area"];
$filez = $_POST["name"];
//$dataz = $_POST["area"];
makefilez($filez);
}

function makefilez($name) {
  /*
  $file = $name . ".txt";
  $handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
  $data = $body;
  fwrite($file,$data);
  */
  header("Content-type: text/plain");
  header("Content-Disposition: attachment; filename=$name.txt");
  // do your Db stuff here to get the content into $content

  //$course_score = rand(40, 100). " ";
  //$letter_grade = "1 ";
  $set_count = rand(15,30);
echo "Id\tExam1\tExam2\tExam3\tQuiz1\tQuiz2\tQuiz3\tLab1\tLab2\tLab3\t"
. "Lab4\tLab5\tLab6\tJournal\tFinal\n";

  for($i = 0; $i < $set_count; $i++){
    $id = rand(10000, 70000). "\t";;
    $exam1 =  rand(40, 100). "\t";
    $exam2 = rand(40, 100). "\t";
    $exam3 = rand(40, 100). "\t";
    $quiz1 = rand(40, 100). "\t";
    $quiz2 = rand(40, 100). "\t";
    $quiz3 = rand(40, 100). "\t";
    $l1 = rand(40, 100). "\t";
    $l2 = rand(40, 100). "\t";
    $l3 = rand(40, 100). "\t";
    $l4 = rand(40, 100). "\t";
    $l5 = rand(40, 100). "\t";
    $l6 = rand(40, 100). "\t";
    $journals = rand(40, 100). "\t";
    $final = rand(40, 100). "\t";
    echo $id , $exam1 , $exam2 , $exam3 , $quiz1 , $quiz2 ,
     $quiz3 , $l1, $l2, $l3, $l4, $l5, $l6, $journals, $final, "\n";
}

}
