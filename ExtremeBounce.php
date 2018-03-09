<?php
class Ball{
    public $color;
    public $round;
    public $speed;
    public $size;
    
    public function __construct($color, $round, $speed, $size) {
        $this->color = $color;
        $this->round = $round;
        $this->speed = $speed;
        $this->size = $size;
    }
}

if($_POST){
    $color = $_POST['color'];
    $round = $_POST['round'];
    $speed = $_POST['speed'];
    $size = $_POST['size'];
    
    $ball = new Ball($color, $round, $speed, $size);
    
}



?>
<!DOCTYPE HTML>
<html>
    
    <head>
        
    </head>    
    <body>
        <header>
           
        </header>
        <main>
            <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                <input type="text" placeholder="color" name="color">
                <input type="hidden" value="false" name="round">
                <input type="checkbox" value=true name="round">Round
                <input type="text" placeholder="speed" name="speed">
                <input type="text" placeholder="size" name="size">
                <input type="submit" value="submit" name="submit">
                
            </form>
            <div id="ball" >
                
                
            </div>
        </main>
    </body>
  
</html>

<style>
    #ball {
        border-radius: <?php if($round=='true'){ echo "100%"; }else{ echo "0%";}?>;
        height: <?= $ball->size; ?>px;
        width: <?= $ball->size; ?>px;
        background-color: <?= $ball->color; ?>;
        animation: bounce <?= $ball->speed;?> infinite;
    }
    @keyframes bounce {
    0%   { transform: translateY(6px); }
    5%   { transform: translateY(8px); }
    10%  { transform: translateY(12px); }
    15%  { transform: translateY(20px); }
    20%  { transform: translateY(38px); }
    25%  { transform: translateY(72px); }
    30%  { transform: translateY(100px); }
    35%  { transform: translateY(152px); }
    40%  { transform: translateY(154px) scale(1.1, .9); }
    50%  { transform: translateY(176px) scale(1.4, .6); }
    55%  { transform: translateY(162px) scale(1.2, .8); }
    60%  { transform: translateY(138px) scale(1.05, .95); }
    65%  { transform: translateY(110px); }
    70%  { transform: translateY(72px); }
    75%  { transform: translateY(38px); }
    80%  { transform: translateY(20px); }
    85%  { transform: translateY(12px); }
    90%  { transform: translateY(8px); }
    95%  { transform: translateY(5px); }
    100% { transform: translateY(5px); }
}
</style>