<?php
class ModelSepatu extends CI_Model
{
    public $merk, $harga;

    public function getHarga($harga=null)
    {
        $this->merk=$merk;
        if($this->merk == "Nike")
            {$this->harga=375.000;}
        else if($this->merk == "Adidas")
            {$this->harga=300.000;}
        else if($this->merk == "Kickers")
        {$this->harga=250.000;}
        else if($this->merk == "Eiger")
        {$this->harga=275.000;}
        else if($this->merk == "Bucherri")
        {$this->harga=400.000;}

        return $this->harga;
    }
}