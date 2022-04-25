<?php 
class Book {
    // atributes
    public $title;
    public $price;
    public $quatity;
    public $image;



    //methods
    //constructor


    //getter - setter

    public function __construct($t, $p, $q, $i)
    {
        $this -> title = $t;
        $this -> price = $p;
        $this -> quatity = $q;
        $this -> image = $i;
    }


}
?>