<?php

namespace Application\Block\Employeebio;
use Concrete\Core\Block\BlockController;
use Core;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends BlockController {

    public $helpers = array('form');

    protected $btInterfaceWidth = "450";
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btInterfaceHeight = "560";
    protected $btExportFileColumns = array('fID');
    protected $btTable = "btEmployeeBio";

    public function getBlockTypeName()
    {
        return t("Employee Bio");
    }
    
    public function getBlockTypeDescription()
    {
        return t("Adds an employee photo along with bio.");
    }

    public function getSearchableContent()
    {
        return $this->name . "\n" . $this->position . "\n"  . $this->bio;
    }

    public function view()
    {
        $image = false;
        if ($this->fID) {
            $f = \File::getByID($this->fID);
            if (is_object($f)) {
                $image = Core::make('html/image', array($f, false))->getTag();
                $image->alt($this->name);
                $this->set('image', $image);
            }
        }
    }
    
    public function save($data)
    {
        $data['booleanfield'] = intval($data['booleanfield']);
        parent::save($data);
    }

}