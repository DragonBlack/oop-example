<?php
class Color {
    protected $r = 0;
    protected $g = 0;
    protected $b = 0;

    public function __construct($r, $g, $b){
        $this->r = $r;
        $this->g = $g;
        $this->b = $b;
    }

    private function mixing(){
        //Смешиваем цвета
    }

    public function fill(){
        echo "rgb({$this->r}, {$this->g}, {$this->b})";
    }
}

class RedColor extends Color{
    public function __construct(){
        parent::__construct(255, 0, 0);
    }
}

$color = new Color(100,100,100);
$color->fill();
echo '<br/>';
$red = new RedColor();
$red->fill();