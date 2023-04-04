<?php
class GrandFather 
{
            public $name;
            public function __construct($name) 
            {
                $this->name = $name;
            }

            public function getname() 
            {
                return $this->name;
            }
}

class Father extends GrandFather 
{
            public $hair_color;
            public function __construct($name, $hair_color) 
            {
                parent::__construct($name);
                $this->hair_color = $hair_color;
            }
            public function hair_color() 
            {
                return $this->hair_color;
            }
}

class Son extends Father 
{
            public $language;
            public function __construct($name, $hair_color, $language) 
            {
            parent::__construct($name, $hair_color);
            $this->language = $language;
            }
            public function language() 
            {
            return $this->language;
            }
}

$human = new Son('Baboo Kumar ', ' Brown ', ' Sindhi ');
echo $human->getname();
echo $human->language(); 
?>