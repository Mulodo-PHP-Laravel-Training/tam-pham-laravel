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
    
    private $attributeNames = [
            'name' => 'Name',
            'alias' => 'Alias',
        ];
    
    private $messages = array(
        'max' => ':attribute is max :max character'
    );
    
    
    /**
     * validation
     * @param $fields array this is field need remove in rules
     */
    public function validate($fields = array()) 
    {
        $rules = array();
        if (count($fields) > 0){
            $rules = array_except($this->rules, $fields);
        } else {
            $rules = $this->rules;
        }
        
        $v = \Validator::make($this->attributes, $rules, $this->messages);
        $v->setAttributeNames($this->attributeNames);
        if ($v->passes()) return true;
        $this->errors = $v->messages();
        return false;
    }
}
