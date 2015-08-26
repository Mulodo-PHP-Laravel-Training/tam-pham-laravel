<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $fillable = ['name', 'alias', 'ordering'];
    private $rules = [
        'name' => 'required|max:50',
        'alias' => 'required',
    ];

    // default custom messages
    private $attributeNames = [
            'name' => 'Name',
            'alias' => 'Alias',
        ];
    
    private $messages = array(
        'max' => ':attribute is max :max character'
    );
    
    
    /**
     * validation
     * @param $fields array this is field need remove in rules. Ex: remove rule name => array('name')
     * @param $messages array custom message. Ex: array('required' => ':attribute can not null')
     */
    public function validate($fields = array(), $messages = array()) 
    {
        $rules = array();
        
        // except rule
        if (count($fields) > 0){
            $rules = array_except($this->rules, $fields);
        } else {
            $rules = $this->rules;
        }

        // custom message
        if (count($messages) > 0) {
            $this->messages = $messages;
        }
        
        // validate
        $v = \Validator::make($this->attributes, $rules, $this->messages);
        // set attribute name
        $v->setAttributeNames($this->attributeNames);
        if ($v->passes())
            return true;
        $this->errors = $v->messages();
        return false;
    }

    public function getCustom() {
        $model = $this::select('name')->where('id', '>', 0)->limit(1)->get();
        return $model;
    }
}
