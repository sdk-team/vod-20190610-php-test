<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610\Models;

use AlibabaCloud\Tea\Model;

class DeleteAttachedMediaResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'nonExistMediaIds' => 'NonExistMediaIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nonExistMediaIds', $this->nonExistMediaIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['NonExistMediaIds'] = [];
        if(null !== $this->nonExistMediaIds){
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteAttachedMediaResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['NonExistMediaIds'])){
            if(!empty($map['NonExistMediaIds'])){
                $model->nonExistMediaIds = [];
                $model->nonExistMediaIds = $map['NonExistMediaIds'];
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.nonExistIds
     * @var array
     */
    public $nonExistMediaIds;

}
