<?php

    Class FeatureList
    {
        public $name;
        public $type;
        public $placeholder;
        public $width;
        public $height;
        public $title;
        public $frameborder;

        public function textbox($name, $placeholder)
        {
            $

            
            echo "<input name=$name type='text' placeholder='$placeholder' ><br>";
        }

        public function checkbox($name, $placeholder)
        {
            
            echo "<input name=$name type='checkbox' clas>";
            echo "<label for name=$name> $placeholder </label><br>";
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
            </iframe>";
            
        }
        public function ytframe($width,$height,$title,$frameborder,$src)
        {
            echo "<iframe
            class='gmap_iframe'
            scrolling='no'
            width=$width
            height= $height
            src=https://www.youtube.com/embed/$src
            title=$title
            frameborder=$frameborder 
            allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share 
            allowfullscreen>
            </iframe>";
        }


    }


    $input = new FeatureList;
    $input->textbox('email','please input your email');
    $input->checkbox('color', 'red');
    $input->iframe(500,300,'asdas',1,'https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=baudha&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed');
    $input->ytframe(500,300,'yt',1,'9P16xvwMQ5A');

?>
