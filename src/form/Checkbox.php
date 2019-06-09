<?php
/**
 * Created by PhpStorm.
 * User: Thans
 * Date: 2018/12/9
 * Time: 14:34.
 */

namespace thans\layuiAdmin\form;

use thans\layuiAdmin\Traits\Field;

class Checkbox
{
    use Field;

    public $tmpl = 'form/checkbox';

    public $type = 'checkbox';

    public function title($text)
    {
        $this->attr('title', $text);

        return $this;
    }

    public function skin($skin)
    {
        $this->attr('lay-skin', $skin);

        return $this;
    }
}
