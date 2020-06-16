<?php
namespace App\Model;
class Post
{
    private $_id;
    private $_id_billet;
    private $_author;
    private $_content;
    private $_date_content;
    private $_signalement;

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
    public function idBillet() { return $this->_id_billet; }
    public function author() { return $this->_author; }
    public function content() { return $this->_content; }
    public function date_content() { return $this->_date_content; }
    public function signalement() { return $this->_signalement; }

    //Liste des setters
    public function setId($id)
    {
        $this->_id = (int) $id;
    }

    public function setIdBillet($id_billet)
    {
        $this->_id_billet = (int) $id_billet;
    }

    public function setAuthor($author)
    {
        if (is_string($author))
        {
            $this->_author = $author;
        }
    }

    public function setContent($content)
    {
        $this->_content = $content;
    }

    public function setDateContent($date_content)
    {
        $this->_date_content = $date_content;
    }

    public function setSignalement($signalement)
    {
        $this->_signalement = $signalement;
    }
}