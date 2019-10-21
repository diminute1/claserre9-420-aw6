<?php

class Liste
{
    private $items;
    private $current;

    public function __construct()
    {
        $this->items = array();
        $this->current = -1;
    }

    /**
     * Fonction permettant d'ajouter un élément
     *
     * @param $item
     * @return void
     */
    public function add($item)
    {
        array_push($this->items, $item);
    }

    /**
     * Fonction qui détermine si un élément suivant existe dans la liste
     *
     * @return
     */
    public function next()
    {
        if ($this->current < (count($this->items) - 1)) {
            $this->current++;
            return true;
        }
        return false;
    }

    /**
     * Fonction reinitialisant l'indice
     *
     * @return void
     */
    public function reset()
    {
        $this->current = -1;
    }

    /**
     * Fonction retournant un élément courant dans la liste
     *
     * @return $item
     */
    public function current()
    {
        if (isset($this->items[$this->current])) {
            return $this->items[$this->current];
        }

        return null;
    }

    /**
     * Fonction affichant l'élément courant
     *
     * @return void
     */
    public function printCurrent()
    {
        if (isset($this->items[$this->current])) {
            echo $this->items[$this->current];
        }

    }

    /**
     * Fonction retournant un élément dans la liste à une position indiquée
     *
     * @param [type] $i
     * @return $items
     */
    public function get($i)
    {
        if (isset($this->items[$i])) {
            return $this->items[$i];
        }

        return null;
    }

}
