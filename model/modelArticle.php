<?php
namespace App\Model;

class Article
{
    private $_db;
    private $_id;
    private $_title;
    private $_content;
    private $_author;
    private $_date_creation;
    private $_image;


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            //On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            //Si le setter correspondant existe
            if (method_exists($this, $method))
            {
                //On appelle le setter
                $this->$method($value);
            }
        }
        return $this;
    }

    //Liste des getters
    public function id() { return $this->_id; }
    public function title() { return $this->_title; }
    public function content() { return $this->_content; }
    public function author () { return $this->_author; }
    public function date_creation () { return $this->_date_creation; }
    public function image () { return $this->_image; }

    //Liste des setters
    public function setId($id)
    {
        //L'identifiant sera un nombre entier
        $this->_id = (int) $id;
    }

    public function setTitle($title)
    {
        //On vérifie s'il s'agit bien d'une chaine de caractère
        if (is_string($title))
        {
            $this->_title = $title;
        }
    }

    public function setContent($content)
    {
        if (is_string($content))
        {
            $this->_content = $content;
        }
    }

    public function setAuthor($author)
    {
        if (is_string($author))
        {
            $this->_author = $author;
        }
    }

    public function setDateCreation($dateCreation)
    {
        $this->_date_creation = $dateCreation;
    }

    public function setImage($image)
    {
        $this->_image = $image;
    }
}