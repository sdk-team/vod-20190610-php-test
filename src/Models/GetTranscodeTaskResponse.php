<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\vod\V20190610\Models\GetTranscodeTaskResponse\transcodeTask;

class GetTranscodeTaskResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTask' => 'TranscodeTask',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeTask', $this->transcodeTask, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeTask'] = null !== $this->transcodeTask ? $this->transcodeTask->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetTranscodeTaskResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeTask'])){
            $model->transcodeTask = transcodeTask::fromMap($map['TranscodeTask']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.transcodeJobProcess
     * @var GetTranscodeTaskResponse.transcodeTask
     */
    public $transcodeTask;

}
