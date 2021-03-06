<?php
/**
 * @package   ImpressPages
 */

namespace Ip\Internal\Grid\Model\Field;


class Textarea extends \Ip\Internal\Grid\Model\Field\Text
{

    public function createField()
    {
        $field = new \Ip\Form\Field\Textarea(array(
            'label' => $this->label,
            'name' => $this->field
        ));
        $field->setValue($this->defaultValue);
        return $field;
    }

    public function updateField($curData)
    {
        $field = new \Ip\Form\Field\Textarea(array(
            'label' => $this->label,
            'name' => $this->field
        ));
        $field->setValue($curData[$this->field]);
        return $field;
    }

}
