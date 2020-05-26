<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20190610\Models\GetImageInfoResponse\imageInfo;
use AlibabaCloud\SDK\vod\V20190610\Models\GetImageInfoResponse\imageInfo\mezzanine;

class GetImageInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'imageInfo' => 'ImageInfo',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('imageInfo', $this->imageInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ImageInfo'] = null !== $this->imageInfo ? $this->imageInfo->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetImageInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ImageInfo'])){
            $model->imageInfo = imageInfo::fromMap($map['ImageInfo']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.image
     * @var GetImageInfoResponse.imageInfo
     */
    public $imageInfo;

}
