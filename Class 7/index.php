<?php
// for($i = 0; $i<=10; $i++){
//     echo $i. '<br>';
// }
// echo str_repeat ('*', 1). '<br>';
// echo str_repeat ('*', 2). '<br>';
// echo str_repeat ('*', 3). '<br>';
// $num = 50;
// for ($i = 1; $i <= 10; $i++){    
//     echo "$num x $i = ". $num * $i.'<br>' ;
// }
// Factorial (গৌনিক মান)- একটা জিনিসকে যতভাবে সাজানো যায়, তাই Factorial. তুমি যদি abc কে সাজাতে চাও, তাহলে কেবল ৬ ভাবে সাজানো যাবে (abc, acb, bca, bac, cab, cba). তাহলে abc তে কতটি letter?- 3টি। তাই 3 এর Factorial হবে 6. যাকে লেখা হয় 3*2*1=6 
// Factorial মানে সে সংখ্যা এবং তার নিচের সকল স্বাভাবিক সংখ্যার (0 কিন্তু স্বাভাবিক সংখ্যা না, পূর্ণসংখ্যা) গুণফল।
// 0(Zero) এর ফ্যাক্টরিয়াল 1 (কারণ 0 একটা সংখ্যা যেটাকে কেবল একভাবে সাজানো যায়।) নেগেটিভ সংখ্যার ফ্যাক্টরিয়াল হয় না।
// $n = 4;
// $fact = 1;
// if ($n<0) {
//     echo "Error! Factorial of a negative number doesn't exist.";
// } else {
//     for ($i = 1; $i <= $n; $i++) {
//         $fact = $fact * $i; 
//     }
//     echo " $n Factorial of $fact";
// }
// ১ থেকে ১০ পর্যন্ত নামাতা লিখার জন্য 

// $count = 10;
// for ($i = 1; $i <= $count; $i++){

//     for ($j = 1; $j<=10; $j++){
//     echo "$i x $j = ". $i * $j.'<br>';
//     }
//     echo '<br>';
//     echo '<br>';
// } 
// echo '<br>';
// $Sowrav = ['মৃত্তিকা'. ' ', 'দেখ আমি এখন'. ' ', 'প্রোগ্রাম শিখতেছি'];
// echo $Sowrav[0].'<br>';
// echo $Sowrav[1]. '<br>';
// echo $Sowrav[2];

// for ($i = 0; $i < 3; $i++){
//     echo $Sowrav [$i];
// }
// foreach ($Sowrav as $Mittika){
//     echo $Mittika;
// }
// $sowrav = [
//     [
//         'name' => 'Mittika',
//         'email' => 'mittika@gamil.com'
//      ],
//      [
//         'name'=> 'Panchali',
//         'email'=> 'panchali@gmail.com'
//      ],
//     ];
// foreach ($sowrav as $akmam){
//     foreach ($akmam as $sumon){
//         echo $sumon. '<br>';
//     };


    // echo '<pre>';
    // print_r($sumon); 
    // echo '</pre>';
// };

// Local variable = মনের মানুষ Global Variable = ক্রাশ Static variable

// echo '<br>';
// echo '<br>';

// $local = 50;
// function check (){
//     echo $GLOBALS['local'] ; /*super golobal*/
// }
// check();

// echo '<br>';
// echo '<br>';

// $global = 30;
// function test (){
//     $GLOBALS ['user']= 'user1';

// }
// test ();
// echo $GLOBALS['user']; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        div{
            border: 5 px groove gold;
            width: 400 px;
            padding: 9 px;
            background-color: skyblue;
        }
        </style>
	<title>First Form</title>
</head>
<body>
    <div>
	<form action = "./process.php" method= "POST">
        <label> Full Name: </label>
        <input type="text" placeholder="Enter your name" name="name"><br>
        <label> Email: </label>
        <input type="email" placeholder="Enter your mail" name="mail"> <br>
        <label> Password: </label>
        <input type="password" placeholder="Enter your password" name="password"> <br>
        <label> Date of Birth: </label>
        <input type="date" placeholder="Enter your Date of Birth" name="DoF"><br>
        <label> Choose a File: </label>
        <input type="file" placeholder="Choose Your Picture" name="Picture"> <br>
        <P> Choose Your Dinner: </P>
        <select>
            <option> Morug Polao </option>
            <option> Kacci </option>
            <option> Dom Biriyani </option>
            <option> Ruti-Vaji </option>
        </select> <br>
        <label> What is your Gender: </label>
        <input type="radio" value="Male" name="Gender"> Male
        <input type="radio" value= "Female" name= "Gender"> Female <br>
        <label> Choose a drink you like: </label>
        <input type="checkbox" value="Whiskey Sour" name="Drink">Whiskey Sour
        <input type="checkbox" value="Long Island Iced Tea" name="Drink"> Long Island Iced Tea
        <input type="checkbox" value="Bloody Mary" name="Drink">Bloody Mary
        <input type="checkbox" value="Pina Colada" name="Drink">Pina Colada <br>
        <button type="submit"> Register </button>
        

        
        </div>
    </form>
	

</body>
</html>