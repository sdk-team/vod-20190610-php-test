<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610\Models\SubmitSnapshotJobResponse;

use AlibabaCloud\Tea\Model;

class snapshotJob extends Model {
    protected $_name = [
        'jobId' => 'JobId',
    ];
    public function validate() {
        Model::validateRequired('jobId', $this->jobId, true);
    }
    public function toMap() {
        $res = [];
        $res['JobId'] = $this->jobId;
        return $res;
    }
    /**
     * @param array $map
     * @return snapshotJob
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['JobId'])){
            $model->jobId = $map['JobId'];
        }
        return $model;
    }
    /**
     * @description jobId
     * @var string
     */
    public $jobId;

}
