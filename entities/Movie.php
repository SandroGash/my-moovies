<?php

class Movie {

    private int $id;
    private string $title;
    private string $description;
    private string $image_url;
    private string $release_date;
    private string $director;
    private int $category_id;


    public function __construct(array $data) {
        $this->hydrate($data);
            
    }
    
    public function hydrate(array $data) : void {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }    


    public function getId() : int {
        return $this->id;
    }

    public function setId(int $newId) : self {
        
        if ($newId > 0) {
            $this->id = $newId;
        }

        return $this;
    }

    public function getTitle() : string {
        return $this->title;
    }

    public function setTitle(string $title) : self {

        if (strlen($title) >= 3 && strlen($title) <= 180) {
            $this->title = $title;
        }
        
        return $this;
    }

    public function getDescription() : string {
        return $this->description;
    }

    public function setDescription(string $description) : self {

        if (strlen($description) >= 3 && strlen($description) <= 2000) {
            $this->description = $description;
        }
        
        return $this;
    }

    public function getImage_url() : string {
        return $this->image_url;
    }

    public function setImage_url(string $image_url) : self {
        
        $this->image_url = $image_url;
        return $this;

    }

    public function getRelease_date() : string {
        return $this->release_date;
    }

    public function setRelease_date(string $release_date) : self {
        
        $this->release_date = $release_date;
        return $this;
    }


    public function getCategory_id() : int {
        return $this->category_id;
    }

    public function setCategory_id(int $category_id) : self {
        
        if ($category_id > 0) {
            $this->category_id = $category_id;
        }
        return $this;
    }

}