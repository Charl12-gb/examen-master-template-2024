<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NotifModal extends Component
{
    public $id;
    public $title;
    public $description;
    public $data;

    public function __construct($id, $title, $description, $data)
    {
        // dd($data);
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->data = $data;
    }

    public function render()
    {
        return view('components.notif-modal');
    }

    public function notifModal()
    {
        // Ajoutez ici la logique de la méthode notifModal
    }
}
