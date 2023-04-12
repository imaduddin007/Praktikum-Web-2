<?php

class persegiPanjang
{
    public $panjang, $lebar;

    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    function hitungKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}
