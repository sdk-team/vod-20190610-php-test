<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610\Models;

use AlibabaCloud\Tea\Model;

class GetPlayInfoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'videoId' => 'VideoId',
        'formats' => 'Formats',
        'authTimeout' => 'AuthTimeout',
        'rand' => 'Rand',
        'authInfo' => 'AuthInfo',
        'channel' => 'Channel',
        'playerVersion' => 'PlayerVersion',
        'outputType' => 'OutputType',
        'streamType' => 'StreamType',
        'reAuthInfo' => 'ReAuthInfo',
        'definition' => 'Definition',
        'resultType' => 'ResultType',
        'playConfig' => 'PlayConfig',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VideoId'] = $this->videoId;
        $res['Formats'] = $this->formats;
        $res['AuthTimeout'] = $this->authTimeout;
        $res['Rand'] = $this->rand;
        $res['AuthInfo'] = $this->authInfo;
        $res['Channel'] = $this->channel;
        $res['PlayerVersion'] = $this->playerVersion;
        $res['OutputType'] = $this->outputType;
        $res['StreamType'] = $this->streamType;
        $res['ReAuthInfo'] = $this->reAuthInfo;
        $res['Definition'] = $this->definition;
        $res['ResultType'] = $this->resultType;
        $res['PlayConfig'] = $this->playConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPlayInfoRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['Formats'])){
            $model->formats = $map['Formats'];
        }
        if(isset($map['AuthTimeout'])){
            $model->authTimeout = $map['AuthTimeout'];
        }
        if(isset($map['Rand'])){
            $model->rand = $map['Rand'];
        }
        if(isset($map['AuthInfo'])){
            $model->authInfo = $map['AuthInfo'];
        }
        if(isset($map['Channel'])){
            $model->channel = $map['Channel'];
        }
        if(isset($map['PlayerVersion'])){
            $model->playerVersion = $map['PlayerVersion'];
        }
        if(isset($map['OutputType'])){
            $model->outputType = $map['OutputType'];
        }
        if(isset($map['StreamType'])){
            $model->streamType = $map['StreamType'];
        }
        if(isset($map['ReAuthInfo'])){
            $model->reAuthInfo = $map['ReAuthInfo'];
        }
        if(isset($map['Definition'])){
            $model->definition = $map['Definition'];
        }
        if(isset($map['ResultType'])){
            $model->resultType = $map['ResultType'];
        }
        if(isset($map['PlayConfig'])){
            $model->playConfig = $map['PlayConfig'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description formats
     * @var string
     */
    public $formats;

    /**
     * @description authTimeout
     * @var integer
     */
    public $authTimeout;

    /**
     * @description rand
     * @var string
     */
    public $rand;

    /**
     * @description authInfo
     * @var string
     */
    public $authInfo;

    /**
     * @description channel
     * @var string
     */
    public $channel;

    /**
     * @description playerVersion
     * @var string
     */
    public $playerVersion;

    /**
     * @description outputType
     * @var string
     */
    public $outputType;

    /**
     * @description streamType
     * @var string
     */
    public $streamType;

    /**
     * @description reAuthInfo
     * @var string
     */
    public $reAuthInfo;

    /**
     * @description definition
     * @var string
     */
    public $definition;

    /**
     * @description resultType
     * @var string
     */
    public $resultType;

    /**
     * @description playConfig
     * @var string
     */
    public $playConfig;

}
