<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610\Models\GetCategoriesResponse;

use AlibabaCloud\Tea\Model;

class category extends Model {
    protected $_name = [
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'level' => 'Level',
        'parentId' => 'ParentId',
        'type' => 'Type',
    ];
    public function validate() {
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('parentId', $this->parentId, true);
        Model::validateRequired('type', $this->type, true);
    }
    public function toMap() {
        $res = [];
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['Level'] = $this->level;
        $res['ParentId'] = $this->parentId;
        $res['Type'] = $this->type;
        return $res;
    }
    /**
     * @param array $map
     * @return category
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['Level'])){
            $model->level = $map['Level'];
        }
        if(isset($map['ParentId'])){
            $model->parentId = $map['ParentId'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        return $model;
    }
    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description cateName
     * @var string
     */
    public $cateName;

    /**
     * @description level
     * @var integer
     */
    public $level;

    /**
     * @description parentId
     * @var integer
     */
    public $parentId;

    /**
     * @description type
     * @var string
     */
    public $type;

}
