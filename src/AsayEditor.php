<?php

namespace Asayhome\AsayEditor;

use Livewire\Component;

class AsayEditor extends Component
{
    public $editorId;
    public $height;
    public $language;
    public $placeholder;
    public $firedEvent;
    public $content;

    public function mount(
        $id = 'editor',
        $height = '200px',
        $language = 'en',
        $placeholder = 'Type her...',
        $firedEvent = 'textChange',
        $content = ''
    ) {
        $this->editorId = $id;
        $this->height = $height;
        $this->language = $language;
        $this->placeholder = $placeholder;
        $this->firedEvent = $firedEvent;
        $this->content = $content;
    }
    public function render()
    {
        return view('asayeditor::editor');
    }
}
