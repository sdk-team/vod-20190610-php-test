<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20190610\Models\ListAppInfoResponse\appInfoList;

class ListAppInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'appInfoList' => 'AppInfoList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appInfoList', $this->appInfoList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AppInfoList'] = [];
        if(null !== $this->appInfoList && is_array($this->appInfoList)){
            $n = 0;
            foreach($this->appInfoList as $item){
                $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListAppInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AppInfoList'])){
            if(!empty($map['AppInfoList'])){
                $model->appInfoList = [];
                $n = 0;
                foreach($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? appInfoList::fromMap($item) : $item;
                }
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
     * @description data.appInfoList
     * @var array
     */
    public $appInfoList;

}
