<?php

class yug
{
    public $name;
    
    public $password;
    public $placeholder;

 
    public function textbox($name,   $placeholder)
    {
        $name="email";
        echo "$name   ";
        echo "<input textbox=$name  placeholder='$placeholder' ><br>";
               
    }

    public function passwordtextbox($password,$placeholder)
    {
    echo "<input password=$password placeholder='$placeholder' ><br>";
    }
    public function iframe($width,$height,$title,$frameborder,$src){
        echo "<iframe
        class='gmap_iframe'
        scrolling='no'
        marginwidth=$width
        marginheight= $height
        src=$src
        title=$title
        frameborder=$frameborder 
        allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share 
        allowfullscreen>
        </iframe><br>";
        
    }
}




$input= new yug;
$input->textbox('email','enter your email');
$input->passwordtextbox('password','enter your password');
$input->iframe(10,10,'asasda',1,'https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=baudha&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed');



    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>login</button>
</body>
</html>