<?php

namespace App\Controllers;

use App\Models\BuahModel;
use App\Models\DagingModel;
use App\Models\SayurModel;

class Pasar extends BaseController
{
    protected $buahModel;
    protected $dagingModel;
    protected $sayurModel;
    public function __construct()
    {
        $this->buahModel = new BuahModel();
        $this->dagingModel = new DagingModel();
        $this->sayurModel = new SayurModel();
    }

    public function pal()
    {

        $data = [
            'title' => 'Pasar Pal',
            'sayur' => $this->sayurModel->getSayur(),
            'buah' => $this->buahModel->getBuah(),
            'daging' => $this->dagingModel->getDaging()
        ];

        return view('/pasar/pal', $data);
    }

    public function minggu()
    {

        $data = [
            'title' => 'Pasar Minggu',
            'sayur' => $this->sayurModel->getSayur(),
            'buah' => $this->buahModel->getBuah(),
            'daging' => $this->dagingModel->getDaging()
        ];

        return view('/pasar/minggu', $data);
    }

    public function cisalak()
    {

        $data = [
            'title' => 'Pasar Cisalak',
            'sayur' => $this->sayurModel->getSayur(),
            'buah' => $this->buahModel->getBuah(),
            'daging' => $this->dagingModel->getDaging()
        ];

        return view('/pasar/cisalak', $data);
    }

    //--------------------------------------------------------------------

}
