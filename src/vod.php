<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\vod\V20190610;

use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Endpoint\Endpoint;

use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayUserAvgRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayUserAvgResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayVideoStatisRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayVideoStatisResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayUserTotalRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayUserTotalResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayTopVideosRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribePlayTopVideosResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainLogRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainLogResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainCertificateInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainCertificateInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodAIDataRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodAIDataResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodTranscodeDataRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodTranscodeDataResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainTrafficDataRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainTrafficDataResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainBpsDataRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainBpsDataResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainUsageDataRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainUsageDataResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodStorageDataRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodStorageDataResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodCertificateListRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodCertificateListResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\BatchStopVodDomainRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\BatchStopVodDomainResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVodDomainRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVodDomainResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SetVodDomainCertificateRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SetVodDomainCertificateResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVodSpecificConfigRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVodSpecificConfigResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\BatchSetVodDomainConfigsRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\BatchSetVodDomainConfigsResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\AddVodDomainRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\AddVodDomainResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodRefreshQuotaRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodRefreshQuotaResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodRefreshTasksRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodRefreshTasksResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainConfigsRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainConfigsResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVodDomainRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVodDomainResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\RefreshVodObjectCachesRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\RefreshVodObjectCachesResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\PreloadVodObjectCachesRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\PreloadVodObjectCachesResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\BatchStartVodDomainRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\BatchStartVodDomainResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainDetailRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodDomainDetailResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodUserDomainsRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DescribeVodUserDomainsResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetAppInfosRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetAppInfosResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateAppInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateAppInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\ListAppInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\ListAppInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteAppInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteAppInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\MoveAppResourceRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\MoveAppResourceResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\ListVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\ListVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\AddVodTemplateRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\AddVodTemplateResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SubmitPreprocessJobsRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SubmitPreprocessJobsResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SubmitTranscodeJobsRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SubmitTranscodeJobsResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetTranscodeTaskRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetTranscodeTaskResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\ListTranscodeTaskRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\ListTranscodeTaskResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetTranscodeSummaryRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetTranscodeSummaryResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteWatermarkRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteWatermarkResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SetDefaultWatermarkRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SetDefaultWatermarkResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetWatermarkRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetWatermarkResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\ListWatermarkRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\ListWatermarkResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateWatermarkRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateWatermarkResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\AddWatermarkRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\AddWatermarkResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SetDefaultTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SetDefaultTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\ListTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\ListTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\AddTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\AddTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetAttachedMediaInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetAttachedMediaInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateAttachedMediaInfosRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateAttachedMediaInfosResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteAttachedMediaRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteAttachedMediaResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteImageRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteImageResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetImageInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetImageInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateImageInfosRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateImageInfosResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateUploadVideoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateUploadVideoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteMezzaninesRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteMezzaninesResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\ListAuditSecurityIpRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\ListAuditSecurityIpResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\RefreshUploadVideoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\RefreshUploadVideoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetPlayInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetPlayInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoPlayAuthRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoPlayAuthResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SearchMediaRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SearchMediaResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\AddCategoryRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\AddCategoryResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetCategoriesRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetCategoriesResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoInfosRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoInfosResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoListRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetVideoListResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetMezzanineInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetMezzanineInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVideoInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVideoInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVideoInfosRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\UpdateVideoInfosResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteStreamRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteStreamResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVideoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteVideoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateAuditRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateAuditResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetAuditHistoryRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetAuditHistoryResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SetAuditSecurityIpRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SetAuditSecurityIpResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateUploadImageRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateUploadImageResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateAppInfoRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\CreateAppInfoResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\GetMessageCallbackRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\GetMessageCallbackResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\SetMessageCallbackRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\SetMessageCallbackResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteMultipartUploadRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteMultipartUploadResponse;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteMessageCallbackRequest;
use AlibabaCloud\SDK\vod\V20190610\Models\DeleteMessageCallbackResponse;

class vod extends Rpc {
    public function __construct($config){
        parent::__construct($config);
        $this->_endpointRule = "regional";
        $this->_endpointMap = [
            "cn-beijing" => "vod.cn-shanghai.aliyuncs.com",
            "cn-hangzhou" => "vod.cn-shanghai.aliyuncs.com",
            "cn-shenzhen" => "vod.cn-shanghai.aliyuncs.com",
            "ap-northeast-2-pop" => "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-2" => "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "vod.ap-northeast-1.aliyuncs.com",
            "cn-beijing-finance-1" => "vod.aliyuncs.com",
            "cn-beijing-finance-pop" => "vod.aliyuncs.com",
            "cn-beijing-gov-1" => "vod.aliyuncs.com",
            "cn-beijing-nu16-b01" => "vod.aliyuncs.com",
            "cn-chengdu" => "vod.aliyuncs.com",
            "cn-edge-1" => "vod.aliyuncs.com",
            "cn-fujian" => "vod.aliyuncs.com",
            "cn-haidian-cm12-c01" => "vod.aliyuncs.com",
            "cn-hangzhou-bj-b01" => "vod.aliyuncs.com",
            "cn-hangzhou-finance" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-prod-1" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-1" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-2" => "vod.aliyuncs.com",
            "cn-hangzhou-internal-test-3" => "vod.aliyuncs.com",
            "cn-hangzhou-test-306" => "vod.aliyuncs.com",
            "cn-hongkong-finance-pop" => "vod.aliyuncs.com",
            "cn-huhehaote" => "vod.aliyuncs.com",
            "cn-qingdao" => "vod.aliyuncs.com",
            "cn-qingdao-nebula" => "vod.aliyuncs.com",
            "cn-shanghai-et15-b01" => "vod.aliyuncs.com",
            "cn-shanghai-et2-b01" => "vod.aliyuncs.com",
            "cn-shanghai-finance-1" => "vod.aliyuncs.com",
            "cn-shanghai-inner" => "vod.aliyuncs.com",
            "cn-shanghai-internal-test-1" => "vod.aliyuncs.com",
            "cn-shenzhen-finance-1" => "vod.aliyuncs.com",
            "cn-shenzhen-inner" => "vod.aliyuncs.com",
            "cn-shenzhen-st4-d01" => "vod.aliyuncs.com",
            "cn-shenzhen-su18-b01" => "vod.aliyuncs.com",
            "cn-wuhan" => "vod.aliyuncs.com",
            "cn-yushanfang" => "vod.aliyuncs.com",
            "cn-zhangbei-na61-b01" => "vod.aliyuncs.com",
            "cn-zhangjiakou-na62-a01" => "vod.aliyuncs.com",
            "cn-zhengzhou-nebula-1" => "vod.aliyuncs.com",
            "eu-west-1-oxs" => "vod.ap-northeast-1.aliyuncs.com",
            "me-east-1" => "vod.ap-northeast-1.aliyuncs.com",
            "rus-west-1-pop" => "vod.ap-northeast-1.aliyuncs.com",
            "us-east-1" => "vod.ap-northeast-1.aliyuncs.com"
            ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param DescribePlayUserAvgRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribePlayUserAvgResponse
     * @throws \Exception
     */
    public function describePlayUserAvgWithOptions(DescribePlayUserAvgRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribePlayUserAvgResponse::fromMap($this->doRequest("DescribePlayUserAvg", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribePlayUserAvgRequest $request
     * @return DescribePlayUserAvgResponse
     * @throws \Exception
     */
    public function describePlayUserAvg(DescribePlayUserAvgRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describePlayUserAvgWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayVideoStatisRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribePlayVideoStatisResponse
     * @throws \Exception
     */
    public function describePlayVideoStatisWithOptions(DescribePlayVideoStatisRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribePlayVideoStatisResponse::fromMap($this->doRequest("DescribePlayVideoStatis", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribePlayVideoStatisRequest $request
     * @return DescribePlayVideoStatisResponse
     * @throws \Exception
     */
    public function describePlayVideoStatis(DescribePlayVideoStatisRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describePlayVideoStatisWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayUserTotalRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribePlayUserTotalResponse
     * @throws \Exception
     */
    public function describePlayUserTotalWithOptions(DescribePlayUserTotalRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribePlayUserTotalResponse::fromMap($this->doRequest("DescribePlayUserTotal", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribePlayUserTotalRequest $request
     * @return DescribePlayUserTotalResponse
     * @throws \Exception
     */
    public function describePlayUserTotal(DescribePlayUserTotalRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describePlayUserTotalWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayTopVideosRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribePlayTopVideosResponse
     * @throws \Exception
     */
    public function describePlayTopVideosWithOptions(DescribePlayTopVideosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribePlayTopVideosResponse::fromMap($this->doRequest("DescribePlayTopVideos", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribePlayTopVideosRequest $request
     * @return DescribePlayTopVideosResponse
     * @throws \Exception
     */
    public function describePlayTopVideos(DescribePlayTopVideosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describePlayTopVideosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainLogRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainLogResponse
     * @throws \Exception
     */
    public function describeVodDomainLogWithOptions(DescribeVodDomainLogRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainLogResponse::fromMap($this->doRequest("DescribeVodDomainLog", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainLogRequest $request
     * @return DescribeVodDomainLogResponse
     * @throws \Exception
     */
    public function describeVodDomainLog(DescribeVodDomainLogRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainCertificateInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainCertificateInfoResponse
     * @throws \Exception
     */
    public function describeVodDomainCertificateInfoWithOptions(DescribeVodDomainCertificateInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainCertificateInfoResponse::fromMap($this->doRequest("DescribeVodDomainCertificateInfo", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainCertificateInfoRequest $request
     * @return DescribeVodDomainCertificateInfoResponse
     * @throws \Exception
     */
    public function describeVodDomainCertificateInfo(DescribeVodDomainCertificateInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodAIDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodAIDataResponse
     * @throws \Exception
     */
    public function describeVodAIDataWithOptions(DescribeVodAIDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodAIDataResponse::fromMap($this->doRequest("DescribeVodAIData", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodAIDataRequest $request
     * @return DescribeVodAIDataResponse
     * @throws \Exception
     */
    public function describeVodAIData(DescribeVodAIDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodAIDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodTranscodeDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodTranscodeDataResponse
     * @throws \Exception
     */
    public function describeVodTranscodeDataWithOptions(DescribeVodTranscodeDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodTranscodeDataResponse::fromMap($this->doRequest("DescribeVodTranscodeData", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodTranscodeDataRequest $request
     * @return DescribeVodTranscodeDataResponse
     * @throws \Exception
     */
    public function describeVodTranscodeData(DescribeVodTranscodeDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodTranscodeDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainTrafficDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainTrafficDataWithOptions(DescribeVodDomainTrafficDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainTrafficDataResponse::fromMap($this->doRequest("DescribeVodDomainTrafficData", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainTrafficDataRequest $request
     * @return DescribeVodDomainTrafficDataResponse
     * @throws \Exception
     */
    public function describeVodDomainTrafficData(DescribeVodDomainTrafficDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainBpsDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainBpsDataWithOptions(DescribeVodDomainBpsDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainBpsDataResponse::fromMap($this->doRequest("DescribeVodDomainBpsData", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainBpsDataRequest $request
     * @return DescribeVodDomainBpsDataResponse
     * @throws \Exception
     */
    public function describeVodDomainBpsData(DescribeVodDomainBpsDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainUsageDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainUsageDataResponse
     * @throws \Exception
     */
    public function describeVodDomainUsageDataWithOptions(DescribeVodDomainUsageDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainUsageDataResponse::fromMap($this->doRequest("DescribeVodDomainUsageData", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodDomainUsageDataRequest $request
     * @return DescribeVodDomainUsageDataResponse
     * @throws \Exception
     */
    public function describeVodDomainUsageData(DescribeVodDomainUsageDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodStorageDataRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodStorageDataResponse
     * @throws \Exception
     */
    public function describeVodStorageDataWithOptions(DescribeVodStorageDataRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodStorageDataResponse::fromMap($this->doRequest("DescribeVodStorageData", "HTTPS", "POST", "2019-06-10", "AK", $request, null, $runtime));
    }

    /**
     * @param DescribeVodStorageDataRequest $request
     * @return DescribeVodStorageDataResponse
     * @throws \Exception
     */
    public function describeVodStorageData(DescribeVodStorageDataRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodStorageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodCertificateListRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodCertificateListResponse
     * @throws \Exception
     */
    public function describeVodCertificateListWithOptions(DescribeVodCertificateListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodCertificateListResponse::fromMap($this->doRequest("DescribeVodCertificateList", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeVodCertificateListRequest $request
     * @return DescribeVodCertificateListResponse
     * @throws \Exception
     */
    public function describeVodCertificateList(DescribeVodCertificateListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return BatchStopVodDomainResponse
     * @throws \Exception
     */
    public function batchStopVodDomainWithOptions(BatchStopVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return BatchStopVodDomainResponse::fromMap($this->doRequest("BatchStopVodDomain", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param BatchStopVodDomainRequest $request
     * @return BatchStopVodDomainResponse
     * @throws \Exception
     */
    public function batchStopVodDomain(BatchStopVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->batchStopVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVodDomainResponse
     * @throws \Exception
     */
    public function deleteVodDomainWithOptions(DeleteVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVodDomainResponse::fromMap($this->doRequest("DeleteVodDomain", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteVodDomainRequest $request
     * @return DeleteVodDomainResponse
     * @throws \Exception
     */
    public function deleteVodDomain(DeleteVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param SetVodDomainCertificateRequest $request
     * @param RuntimeOptions $runtime
     * @return SetVodDomainCertificateResponse
     * @throws \Exception
     */
    public function setVodDomainCertificateWithOptions(SetVodDomainCertificateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetVodDomainCertificateResponse::fromMap($this->doRequest("SetVodDomainCertificate", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SetVodDomainCertificateRequest $request
     * @return SetVodDomainCertificateResponse
     * @throws \Exception
     */
    public function setVodDomainCertificate(SetVodDomainCertificateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setVodDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodSpecificConfigRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVodSpecificConfigResponse
     * @throws \Exception
     */
    public function deleteVodSpecificConfigWithOptions(DeleteVodSpecificConfigRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVodSpecificConfigResponse::fromMap($this->doRequest("DeleteVodSpecificConfig", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteVodSpecificConfigRequest $request
     * @return DeleteVodSpecificConfigResponse
     * @throws \Exception
     */
    public function deleteVodSpecificConfig(DeleteVodSpecificConfigRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVodSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetVodDomainConfigsRequest $request
     * @param RuntimeOptions $runtime
     * @return BatchSetVodDomainConfigsResponse
     * @throws \Exception
     */
    public function batchSetVodDomainConfigsWithOptions(BatchSetVodDomainConfigsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return BatchSetVodDomainConfigsResponse::fromMap($this->doRequest("BatchSetVodDomainConfigs", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param BatchSetVodDomainConfigsRequest $request
     * @return BatchSetVodDomainConfigsResponse
     * @throws \Exception
     */
    public function batchSetVodDomainConfigs(BatchSetVodDomainConfigsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->batchSetVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param AddVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return AddVodDomainResponse
     * @throws \Exception
     */
    public function addVodDomainWithOptions(AddVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddVodDomainResponse::fromMap($this->doRequest("AddVodDomain", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param AddVodDomainRequest $request
     * @return AddVodDomainResponse
     * @throws \Exception
     */
    public function addVodDomain(AddVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodRefreshQuotaRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodRefreshQuotaResponse
     * @throws \Exception
     */
    public function describeVodRefreshQuotaWithOptions(DescribeVodRefreshQuotaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodRefreshQuotaResponse::fromMap($this->doRequest("DescribeVodRefreshQuota", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeVodRefreshQuotaRequest $request
     * @return DescribeVodRefreshQuotaResponse
     * @throws \Exception
     */
    public function describeVodRefreshQuota(DescribeVodRefreshQuotaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodRefreshTasksRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodRefreshTasksResponse
     * @throws \Exception
     */
    public function describeVodRefreshTasksWithOptions(DescribeVodRefreshTasksRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodRefreshTasksResponse::fromMap($this->doRequest("DescribeVodRefreshTasks", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeVodRefreshTasksRequest $request
     * @return DescribeVodRefreshTasksResponse
     * @throws \Exception
     */
    public function describeVodRefreshTasks(DescribeVodRefreshTasksRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainConfigsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainConfigsResponse
     * @throws \Exception
     */
    public function describeVodDomainConfigsWithOptions(DescribeVodDomainConfigsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainConfigsResponse::fromMap($this->doRequest("DescribeVodDomainConfigs", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeVodDomainConfigsRequest $request
     * @return DescribeVodDomainConfigsResponse
     * @throws \Exception
     */
    public function describeVodDomainConfigs(DescribeVodDomainConfigsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVodDomainResponse
     * @throws \Exception
     */
    public function updateVodDomainWithOptions(UpdateVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVodDomainResponse::fromMap($this->doRequest("UpdateVodDomain", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateVodDomainRequest $request
     * @return UpdateVodDomainResponse
     * @throws \Exception
     */
    public function updateVodDomain(UpdateVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param RefreshVodObjectCachesRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshVodObjectCachesResponse
     * @throws \Exception
     */
    public function refreshVodObjectCachesWithOptions(RefreshVodObjectCachesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshVodObjectCachesResponse::fromMap($this->doRequest("RefreshVodObjectCaches", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param RefreshVodObjectCachesRequest $request
     * @return RefreshVodObjectCachesResponse
     * @throws \Exception
     */
    public function refreshVodObjectCaches(RefreshVodObjectCachesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param PreloadVodObjectCachesRequest $request
     * @param RuntimeOptions $runtime
     * @return PreloadVodObjectCachesResponse
     * @throws \Exception
     */
    public function preloadVodObjectCachesWithOptions(PreloadVodObjectCachesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return PreloadVodObjectCachesResponse::fromMap($this->doRequest("PreloadVodObjectCaches", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param PreloadVodObjectCachesRequest $request
     * @return PreloadVodObjectCachesResponse
     * @throws \Exception
     */
    public function preloadVodObjectCaches(PreloadVodObjectCachesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->preloadVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartVodDomainRequest $request
     * @param RuntimeOptions $runtime
     * @return BatchStartVodDomainResponse
     * @throws \Exception
     */
    public function batchStartVodDomainWithOptions(BatchStartVodDomainRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return BatchStartVodDomainResponse::fromMap($this->doRequest("BatchStartVodDomain", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param BatchStartVodDomainRequest $request
     * @return BatchStartVodDomainResponse
     * @throws \Exception
     */
    public function batchStartVodDomain(BatchStartVodDomainRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->batchStartVodDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodDomainDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodDomainDetailResponse
     * @throws \Exception
     */
    public function describeVodDomainDetailWithOptions(DescribeVodDomainDetailRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodDomainDetailResponse::fromMap($this->doRequest("DescribeVodDomainDetail", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeVodDomainDetailRequest $request
     * @return DescribeVodDomainDetailResponse
     * @throws \Exception
     */
    public function describeVodDomainDetail(DescribeVodDomainDetailRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodUserDomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return DescribeVodUserDomainsResponse
     * @throws \Exception
     */
    public function describeVodUserDomainsWithOptions(DescribeVodUserDomainsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DescribeVodUserDomainsResponse::fromMap($this->doRequest("DescribeVodUserDomains", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DescribeVodUserDomainsRequest $request
     * @return DescribeVodUserDomainsResponse
     * @throws \Exception
     */
    public function describeVodUserDomains(DescribeVodUserDomainsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->describeVodUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @param GetAppInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAppInfosResponse
     * @throws \Exception
     */
    public function getAppInfosWithOptions(GetAppInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAppInfosResponse::fromMap($this->doRequest("GetAppInfos", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetAppInfosRequest $request
     * @return GetAppInfosResponse
     * @throws \Exception
     */
    public function getAppInfos(GetAppInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAppInfosWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateAppInfoResponse
     * @throws \Exception
     */
    public function updateAppInfoWithOptions(UpdateAppInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateAppInfoResponse::fromMap($this->doRequest("UpdateAppInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateAppInfoRequest $request
     * @return UpdateAppInfoResponse
     * @throws \Exception
     */
    public function updateAppInfo(UpdateAppInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListAppInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAppInfoResponse
     * @throws \Exception
     */
    public function listAppInfoWithOptions(ListAppInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAppInfoResponse::fromMap($this->doRequest("ListAppInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param ListAppInfoRequest $request
     * @return ListAppInfoResponse
     * @throws \Exception
     */
    public function listAppInfo(ListAppInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteAppInfoResponse
     * @throws \Exception
     */
    public function deleteAppInfoWithOptions(DeleteAppInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteAppInfoResponse::fromMap($this->doRequest("DeleteAppInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteAppInfoRequest $request
     * @return DeleteAppInfoResponse
     * @throws \Exception
     */
    public function deleteAppInfo(DeleteAppInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param MoveAppResourceRequest $request
     * @param RuntimeOptions $runtime
     * @return MoveAppResourceResponse
     * @throws \Exception
     */
    public function moveAppResourceWithOptions(MoveAppResourceRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return MoveAppResourceResponse::fromMap($this->doRequest("MoveAppResource", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param MoveAppResourceRequest $request
     * @return MoveAppResourceResponse
     * @throws \Exception
     */
    public function moveAppResource(MoveAppResourceRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->moveAppResourceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVodTemplateResponse
     * @throws \Exception
     */
    public function deleteVodTemplateWithOptions(DeleteVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVodTemplateResponse::fromMap($this->doRequest("DeleteVodTemplate", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteVodTemplateRequest $request
     * @return DeleteVodTemplateResponse
     * @throws \Exception
     */
    public function deleteVodTemplate(DeleteVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVodTemplateResponse
     * @throws \Exception
     */
    public function getVodTemplateWithOptions(GetVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVodTemplateResponse::fromMap($this->doRequest("GetVodTemplate", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetVodTemplateRequest $request
     * @return GetVodTemplateResponse
     * @throws \Exception
     */
    public function getVodTemplate(GetVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return ListVodTemplateResponse
     * @throws \Exception
     */
    public function listVodTemplateWithOptions(ListVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListVodTemplateResponse::fromMap($this->doRequest("ListVodTemplate", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param ListVodTemplateRequest $request
     * @return ListVodTemplateResponse
     * @throws \Exception
     */
    public function listVodTemplate(ListVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVodTemplateResponse
     * @throws \Exception
     */
    public function updateVodTemplateWithOptions(UpdateVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVodTemplateResponse::fromMap($this->doRequest("UpdateVodTemplate", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateVodTemplateRequest $request
     * @return UpdateVodTemplateResponse
     * @throws \Exception
     */
    public function updateVodTemplate(UpdateVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddVodTemplateRequest $request
     * @param RuntimeOptions $runtime
     * @return AddVodTemplateResponse
     * @throws \Exception
     */
    public function addVodTemplateWithOptions(AddVodTemplateRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddVodTemplateResponse::fromMap($this->doRequest("AddVodTemplate", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param AddVodTemplateRequest $request
     * @return AddVodTemplateResponse
     * @throws \Exception
     */
    public function addVodTemplate(AddVodTemplateRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SubmitPreprocessJobsRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitPreprocessJobsResponse
     * @throws \Exception
     */
    public function submitPreprocessJobsWithOptions(SubmitPreprocessJobsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitPreprocessJobsResponse::fromMap($this->doRequest("SubmitPreprocessJobs", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SubmitPreprocessJobsRequest $request
     * @return SubmitPreprocessJobsResponse
     * @throws \Exception
     */
    public function submitPreprocessJobs(SubmitPreprocessJobsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitPreprocessJobsWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitSnapshotJobResponse
     * @throws \Exception
     */
    public function submitSnapshotJobWithOptions(SubmitSnapshotJobRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitSnapshotJobResponse::fromMap($this->doRequest("SubmitSnapshotJob", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     * @return SubmitSnapshotJobResponse
     * @throws \Exception
     */
    public function submitSnapshotJob(SubmitSnapshotJobRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTranscodeJobsRequest $request
     * @param RuntimeOptions $runtime
     * @return SubmitTranscodeJobsResponse
     * @throws \Exception
     */
    public function submitTranscodeJobsWithOptions(SubmitTranscodeJobsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SubmitTranscodeJobsResponse::fromMap($this->doRequest("SubmitTranscodeJobs", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SubmitTranscodeJobsRequest $request
     * @return SubmitTranscodeJobsResponse
     * @throws \Exception
     */
    public function submitTranscodeJobs(SubmitTranscodeJobsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->submitTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return GetTranscodeTaskResponse
     * @throws \Exception
     */
    public function getTranscodeTaskWithOptions(GetTranscodeTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetTranscodeTaskResponse::fromMap($this->doRequest("GetTranscodeTask", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetTranscodeTaskRequest $request
     * @return GetTranscodeTaskResponse
     * @throws \Exception
     */
    public function getTranscodeTask(GetTranscodeTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListTranscodeTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return ListTranscodeTaskResponse
     * @throws \Exception
     */
    public function listTranscodeTaskWithOptions(ListTranscodeTaskRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListTranscodeTaskResponse::fromMap($this->doRequest("ListTranscodeTask", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param ListTranscodeTaskRequest $request
     * @return ListTranscodeTaskResponse
     * @throws \Exception
     */
    public function listTranscodeTask(ListTranscodeTaskRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeSummaryRequest $request
     * @param RuntimeOptions $runtime
     * @return GetTranscodeSummaryResponse
     * @throws \Exception
     */
    public function getTranscodeSummaryWithOptions(GetTranscodeSummaryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetTranscodeSummaryResponse::fromMap($this->doRequest("GetTranscodeSummary", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetTranscodeSummaryRequest $request
     * @return GetTranscodeSummaryResponse
     * @throws \Exception
     */
    public function getTranscodeSummary(GetTranscodeSummaryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getTranscodeSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteWatermarkResponse
     * @throws \Exception
     */
    public function deleteWatermarkWithOptions(DeleteWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteWatermarkResponse::fromMap($this->doRequest("DeleteWatermark", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteWatermarkRequest $request
     * @return DeleteWatermarkResponse
     * @throws \Exception
     */
    public function deleteWatermark(DeleteWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultWatermarkResponse
     * @throws \Exception
     */
    public function setDefaultWatermarkWithOptions(SetDefaultWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultWatermarkResponse::fromMap($this->doRequest("SetDefaultWatermark", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SetDefaultWatermarkRequest $request
     * @return SetDefaultWatermarkResponse
     * @throws \Exception
     */
    public function setDefaultWatermark(SetDefaultWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param GetWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return GetWatermarkResponse
     * @throws \Exception
     */
    public function getWatermarkWithOptions(GetWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetWatermarkResponse::fromMap($this->doRequest("GetWatermark", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetWatermarkRequest $request
     * @return GetWatermarkResponse
     * @throws \Exception
     */
    public function getWatermark(GetWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param ListWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return ListWatermarkResponse
     * @throws \Exception
     */
    public function listWatermarkWithOptions(ListWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListWatermarkResponse::fromMap($this->doRequest("ListWatermark", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param ListWatermarkRequest $request
     * @return ListWatermarkResponse
     * @throws \Exception
     */
    public function listWatermark(ListWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateWatermarkResponse
     * @throws \Exception
     */
    public function updateWatermarkWithOptions(UpdateWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateWatermarkResponse::fromMap($this->doRequest("UpdateWatermark", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateWatermarkRequest $request
     * @return UpdateWatermarkResponse
     * @throws \Exception
     */
    public function updateWatermark(UpdateWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param AddWatermarkRequest $request
     * @param RuntimeOptions $runtime
     * @return AddWatermarkResponse
     * @throws \Exception
     */
    public function addWatermarkWithOptions(AddWatermarkRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddWatermarkResponse::fromMap($this->doRequest("AddWatermark", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param AddWatermarkRequest $request
     * @return AddWatermarkResponse
     * @throws \Exception
     */
    public function addWatermark(AddWatermarkRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addWatermarkWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function updateTranscodeTemplateGroupWithOptions(UpdateTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateTranscodeTemplateGroupResponse::fromMap($this->doRequest("UpdateTranscodeTemplateGroup", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateTranscodeTemplateGroupRequest $request
     * @return UpdateTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function updateTranscodeTemplateGroup(UpdateTranscodeTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function deleteTranscodeTemplateGroupWithOptions(DeleteTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteTranscodeTemplateGroupResponse::fromMap($this->doRequest("DeleteTranscodeTemplateGroup", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteTranscodeTemplateGroupRequest $request
     * @return DeleteTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function deleteTranscodeTemplateGroup(DeleteTranscodeTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return SetDefaultTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function setDefaultTranscodeTemplateGroupWithOptions(SetDefaultTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetDefaultTranscodeTemplateGroupResponse::fromMap($this->doRequest("SetDefaultTranscodeTemplateGroup", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SetDefaultTranscodeTemplateGroupRequest $request
     * @return SetDefaultTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function setDefaultTranscodeTemplateGroup(SetDefaultTranscodeTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setDefaultTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return GetTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function getTranscodeTemplateGroupWithOptions(GetTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetTranscodeTemplateGroupResponse::fromMap($this->doRequest("GetTranscodeTemplateGroup", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetTranscodeTemplateGroupRequest $request
     * @return GetTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function getTranscodeTemplateGroup(GetTranscodeTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return ListTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function listTranscodeTemplateGroupWithOptions(ListTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListTranscodeTemplateGroupResponse::fromMap($this->doRequest("ListTranscodeTemplateGroup", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param ListTranscodeTemplateGroupRequest $request
     * @return ListTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function listTranscodeTemplateGroup(ListTranscodeTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddTranscodeTemplateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return AddTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function addTranscodeTemplateGroupWithOptions(AddTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddTranscodeTemplateGroupResponse::fromMap($this->doRequest("AddTranscodeTemplateGroup", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param AddTranscodeTemplateGroupRequest $request
     * @return AddTranscodeTemplateGroupResponse
     * @throws \Exception
     */
    public function addTranscodeTemplateGroup(AddTranscodeTemplateGroupRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetAttachedMediaInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAttachedMediaInfoResponse
     * @throws \Exception
     */
    public function getAttachedMediaInfoWithOptions(GetAttachedMediaInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAttachedMediaInfoResponse::fromMap($this->doRequest("GetAttachedMediaInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetAttachedMediaInfoRequest $request
     * @return GetAttachedMediaInfoResponse
     * @throws \Exception
     */
    public function getAttachedMediaInfo(GetAttachedMediaInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAttachedMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAttachedMediaInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateAttachedMediaInfosResponse
     * @throws \Exception
     */
    public function updateAttachedMediaInfosWithOptions(UpdateAttachedMediaInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateAttachedMediaInfosResponse::fromMap($this->doRequest("UpdateAttachedMediaInfos", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateAttachedMediaInfosRequest $request
     * @return UpdateAttachedMediaInfosResponse
     * @throws \Exception
     */
    public function updateAttachedMediaInfos(UpdateAttachedMediaInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateAttachedMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAttachedMediaRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteAttachedMediaResponse
     * @throws \Exception
     */
    public function deleteAttachedMediaWithOptions(DeleteAttachedMediaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteAttachedMediaResponse::fromMap($this->doRequest("DeleteAttachedMedia", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteAttachedMediaRequest $request
     * @return DeleteAttachedMediaResponse
     * @throws \Exception
     */
    public function deleteAttachedMedia(DeleteAttachedMediaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteImageResponse
     * @throws \Exception
     */
    public function deleteImageWithOptions(DeleteImageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteImageResponse::fromMap($this->doRequest("DeleteImage", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     * @return DeleteImageResponse
     * @throws \Exception
     */
    public function deleteImage(DeleteImageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param GetImageInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetImageInfoResponse
     * @throws \Exception
     */
    public function getImageInfoWithOptions(GetImageInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetImageInfoResponse::fromMap($this->doRequest("GetImageInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetImageInfoRequest $request
     * @return GetImageInfoResponse
     * @throws \Exception
     */
    public function getImageInfo(GetImageInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getImageInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateImageInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateImageInfosResponse
     * @throws \Exception
     */
    public function updateImageInfosWithOptions(UpdateImageInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateImageInfosResponse::fromMap($this->doRequest("UpdateImageInfos", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateImageInfosRequest $request
     * @return UpdateImageInfosResponse
     * @throws \Exception
     */
    public function updateImageInfos(UpdateImageInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateImageInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListSnapshotsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListSnapshotsResponse
     * @throws \Exception
     */
    public function listSnapshotsWithOptions(ListSnapshotsRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListSnapshotsResponse::fromMap($this->doRequest("ListSnapshots", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param ListSnapshotsRequest $request
     * @return ListSnapshotsResponse
     * @throws \Exception
     */
    public function listSnapshots(ListSnapshotsRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUploadVideoResponse
     * @throws \Exception
     */
    public function createUploadVideoWithOptions(CreateUploadVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateUploadVideoResponse::fromMap($this->doRequest("CreateUploadVideo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateUploadVideoRequest $request
     * @return CreateUploadVideoResponse
     * @throws \Exception
     */
    public function createUploadVideo(CreateUploadVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteCategoryResponse
     * @throws \Exception
     */
    public function deleteCategoryWithOptions(DeleteCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteCategoryResponse::fromMap($this->doRequest("DeleteCategory", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteCategoryRequest $request
     * @return DeleteCategoryResponse
     * @throws \Exception
     */
    public function deleteCategory(DeleteCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMezzaninesRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMezzaninesResponse
     * @throws \Exception
     */
    public function deleteMezzaninesWithOptions(DeleteMezzaninesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMezzaninesResponse::fromMap($this->doRequest("DeleteMezzanines", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteMezzaninesRequest $request
     * @return DeleteMezzaninesResponse
     * @throws \Exception
     */
    public function deleteMezzanines(DeleteMezzaninesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMezzaninesWithOptions($request, $runtime);
    }

    /**
     * @param ListAuditSecurityIpRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAuditSecurityIpResponse
     * @throws \Exception
     */
    public function listAuditSecurityIpWithOptions(ListAuditSecurityIpRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return ListAuditSecurityIpResponse::fromMap($this->doRequest("ListAuditSecurityIp", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param ListAuditSecurityIpRequest $request
     * @return ListAuditSecurityIpResponse
     * @throws \Exception
     */
    public function listAuditSecurityIp(ListAuditSecurityIpRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->listAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUploadVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return RefreshUploadVideoResponse
     * @throws \Exception
     */
    public function refreshUploadVideoWithOptions(RefreshUploadVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return RefreshUploadVideoResponse::fromMap($this->doRequest("RefreshUploadVideo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param RefreshUploadVideoRequest $request
     * @return RefreshUploadVideoResponse
     * @throws \Exception
     */
    public function refreshUploadVideo(RefreshUploadVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->refreshUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPlayInfoResponse
     * @throws \Exception
     */
    public function getPlayInfoWithOptions(GetPlayInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetPlayInfoResponse::fromMap($this->doRequest("GetPlayInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetPlayInfoRequest $request
     * @return GetPlayInfoResponse
     * @throws \Exception
     */
    public function getPlayInfo(GetPlayInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoPlayAuthRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoPlayAuthResponse
     * @throws \Exception
     */
    public function getVideoPlayAuthWithOptions(GetVideoPlayAuthRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoPlayAuthResponse::fromMap($this->doRequest("GetVideoPlayAuth", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetVideoPlayAuthRequest $request
     * @return GetVideoPlayAuthResponse
     * @throws \Exception
     */
    public function getVideoPlayAuth(GetVideoPlayAuthRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoPlayAuthWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchMediaResponse
     * @throws \Exception
     */
    public function searchMediaWithOptions(SearchMediaRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SearchMediaResponse::fromMap($this->doRequest("SearchMedia", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SearchMediaRequest $request
     * @return SearchMediaResponse
     * @throws \Exception
     */
    public function searchMedia(SearchMediaRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * @param AddCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return AddCategoryResponse
     * @throws \Exception
     */
    public function addCategoryWithOptions(AddCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return AddCategoryResponse::fromMap($this->doRequest("AddCategory", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param AddCategoryRequest $request
     * @return AddCategoryResponse
     * @throws \Exception
     */
    public function addCategory(AddCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->addCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateCategoryResponse
     * @throws \Exception
     */
    public function updateCategoryWithOptions(UpdateCategoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateCategoryResponse::fromMap($this->doRequest("UpdateCategory", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateCategoryRequest $request
     * @return UpdateCategoryResponse
     * @throws \Exception
     */
    public function updateCategory(UpdateCategoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoriesRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCategoriesResponse
     * @throws \Exception
     */
    public function getCategoriesWithOptions(GetCategoriesRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetCategoriesResponse::fromMap($this->doRequest("GetCategories", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetCategoriesRequest $request
     * @return GetCategoriesResponse
     * @throws \Exception
     */
    public function getCategories(GetCategoriesRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoInfoResponse
     * @throws \Exception
     */
    public function getVideoInfoWithOptions(GetVideoInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoInfoResponse::fromMap($this->doRequest("GetVideoInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetVideoInfoRequest $request
     * @return GetVideoInfoResponse
     * @throws \Exception
     */
    public function getVideoInfo(GetVideoInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoInfosResponse
     * @throws \Exception
     */
    public function getVideoInfosWithOptions(GetVideoInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoInfosResponse::fromMap($this->doRequest("GetVideoInfos", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetVideoInfosRequest $request
     * @return GetVideoInfosResponse
     * @throws \Exception
     */
    public function getVideoInfos(GetVideoInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @param GetVideoListRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoListResponse
     * @throws \Exception
     */
    public function getVideoListWithOptions(GetVideoListRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetVideoListResponse::fromMap($this->doRequest("GetVideoList", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetVideoListRequest $request
     * @return GetVideoListResponse
     * @throws \Exception
     */
    public function getVideoList(GetVideoListRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoListWithOptions($request, $runtime);
    }

    /**
     * @param GetMezzanineInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMezzanineInfoResponse
     * @throws \Exception
     */
    public function getMezzanineInfoWithOptions(GetMezzanineInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMezzanineInfoResponse::fromMap($this->doRequest("GetMezzanineInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetMezzanineInfoRequest $request
     * @return GetMezzanineInfoResponse
     * @throws \Exception
     */
    public function getMezzanineInfo(GetMezzanineInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMezzanineInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVideoInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVideoInfoResponse
     * @throws \Exception
     */
    public function updateVideoInfoWithOptions(UpdateVideoInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVideoInfoResponse::fromMap($this->doRequest("UpdateVideoInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateVideoInfoRequest $request
     * @return UpdateVideoInfoResponse
     * @throws \Exception
     */
    public function updateVideoInfo(UpdateVideoInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVideoInfosRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateVideoInfosResponse
     * @throws \Exception
     */
    public function updateVideoInfosWithOptions(UpdateVideoInfosRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return UpdateVideoInfosResponse::fromMap($this->doRequest("UpdateVideoInfos", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param UpdateVideoInfosRequest $request
     * @return UpdateVideoInfosResponse
     * @throws \Exception
     */
    public function updateVideoInfos(UpdateVideoInfosRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->updateVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStreamRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteStreamResponse
     * @throws \Exception
     */
    public function deleteStreamWithOptions(DeleteStreamRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteStreamResponse::fromMap($this->doRequest("DeleteStream", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteStreamRequest $request
     * @return DeleteStreamResponse
     * @throws \Exception
     */
    public function deleteStream(DeleteStreamRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteStreamWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVideoRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteVideoResponse
     * @throws \Exception
     */
    public function deleteVideoWithOptions(DeleteVideoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteVideoResponse::fromMap($this->doRequest("DeleteVideo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteVideoRequest $request
     * @return DeleteVideoResponse
     * @throws \Exception
     */
    public function deleteVideo(DeleteVideoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteVideoWithOptions($request, $runtime);
    }

    /**
     * @param CreateAuditRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateAuditResponse
     * @throws \Exception
     */
    public function createAuditWithOptions(CreateAuditRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateAuditResponse::fromMap($this->doRequest("CreateAudit", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateAuditRequest $request
     * @return CreateAuditResponse
     * @throws \Exception
     */
    public function createAudit(CreateAuditRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createAuditWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditHistoryRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAuditHistoryResponse
     * @throws \Exception
     */
    public function getAuditHistoryWithOptions(GetAuditHistoryRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetAuditHistoryResponse::fromMap($this->doRequest("GetAuditHistory", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetAuditHistoryRequest $request
     * @return GetAuditHistoryResponse
     * @throws \Exception
     */
    public function getAuditHistory(GetAuditHistoryRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getAuditHistoryWithOptions($request, $runtime);
    }

    /**
     * @param SetAuditSecurityIpRequest $request
     * @param RuntimeOptions $runtime
     * @return SetAuditSecurityIpResponse
     * @throws \Exception
     */
    public function setAuditSecurityIpWithOptions(SetAuditSecurityIpRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetAuditSecurityIpResponse::fromMap($this->doRequest("SetAuditSecurityIp", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SetAuditSecurityIpRequest $request
     * @return SetAuditSecurityIpResponse
     * @throws \Exception
     */
    public function setAuditSecurityIp(SetAuditSecurityIpRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadImageRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUploadImageResponse
     * @throws \Exception
     */
    public function createUploadImageWithOptions(CreateUploadImageRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateUploadImageResponse::fromMap($this->doRequest("CreateUploadImage", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateUploadImageRequest $request
     * @return CreateUploadImageResponse
     * @throws \Exception
     */
    public function createUploadImage(CreateUploadImageRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createUploadImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateAppInfoResponse
     * @throws \Exception
     */
    public function createAppInfoWithOptions(CreateAppInfoRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return CreateAppInfoResponse::fromMap($this->doRequest("CreateAppInfo", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param CreateAppInfoRequest $request
     * @return CreateAppInfoResponse
     * @throws \Exception
     */
    public function createAppInfo(CreateAppInfoRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->createAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMessageCallbackRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMessageCallbackResponse
     * @throws \Exception
     */
    public function getMessageCallbackWithOptions(GetMessageCallbackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return GetMessageCallbackResponse::fromMap($this->doRequest("GetMessageCallback", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param GetMessageCallbackRequest $request
     * @return GetMessageCallbackResponse
     * @throws \Exception
     */
    public function getMessageCallback(GetMessageCallbackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->getMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param SetMessageCallbackRequest $request
     * @param RuntimeOptions $runtime
     * @return SetMessageCallbackResponse
     * @throws \Exception
     */
    public function setMessageCallbackWithOptions(SetMessageCallbackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return SetMessageCallbackResponse::fromMap($this->doRequest("SetMessageCallback", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param SetMessageCallbackRequest $request
     * @return SetMessageCallbackResponse
     * @throws \Exception
     */
    public function setMessageCallback(SetMessageCallbackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->setMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMultipartUploadRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMultipartUploadResponse
     * @throws \Exception
     */
    public function deleteMultipartUploadWithOptions(DeleteMultipartUploadRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMultipartUploadResponse::fromMap($this->doRequest("DeleteMultipartUpload", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteMultipartUploadRequest $request
     * @return DeleteMultipartUploadResponse
     * @throws \Exception
     */
    public function deleteMultipartUpload(DeleteMultipartUploadRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMultipartUploadWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMessageCallbackRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMessageCallbackResponse
     * @throws \Exception
     */
    public function deleteMessageCallbackWithOptions(DeleteMessageCallbackRequest $request, RuntimeOptions $runtime){
        Utils::validateModel($request);
        return DeleteMessageCallbackResponse::fromMap($this->doRequest("DeleteMessageCallback", "HTTPS", "POST", "2019-06-10", "AK", null, $request, $runtime));
    }

    /**
     * @param DeleteMessageCallbackRequest $request
     * @return DeleteMessageCallbackResponse
     * @throws \Exception
     */
    public function deleteMessageCallback(DeleteMessageCallbackRequest $request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array $endpointMap
     * @param string $endpoint
     * @return string
     * @throws \Exception
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint){
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap["regionId"])) {
            return $endpointMap["regionId"];
        }
        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
