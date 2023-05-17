<?php

class Category {

    // Attributs 

    private int $id;
    private string $name;
    private string $color;


 // Constructeur 

 public function __construct(array $data)  {
    $this->hydrate($data);
}


   // Méthodes
public function hydrate(array $data): void 
{
   foreach ($data as $key => $value) {
       $method = 'set' . ucfirst($key);
       if (method_exists($this, $method)) {
           $this->$method($value);
       }
   }
}

 
    public function getId() : int
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
  
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }   
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }


}