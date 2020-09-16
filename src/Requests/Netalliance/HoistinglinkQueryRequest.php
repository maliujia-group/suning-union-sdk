<?php

namespace SuningSDK\Requests\Netalliance;

use SuningSDK\Interfaces\Request;

class HoistinglinkQueryRequest implements Request
{
    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.hoistinglink.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryHoistinglink';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $apiParams = [];

    private $goodsCode;     // 商品ID

    private $mertCode;      // 商家ID

    private $subUser;       // 子会员ID

    private $adBookId;      // 推广位ID

    private $backUrl;       // 媒体链接头

    public function setGoodsCode($val)
    {
        $this->goodsCode = (string)$val;
        $this->apiParams['goodsCode'] = $this->goodsCode;
    }

    public function setMertCode($val)
    {
        $this->mertCode = (string)$val;
        $this->apiParams['mertCode'] = $this->mertCode;
    }

    public function setSubUser($val)
    {
        $this->subUser = (string)$val;
        $this->apiParams['subUser'] = $this->subUser;
    }

    public function setAdBookId($val)
    {
        $this->adBookId = (string)$val;
        $this->apiParams['adBookId'] = $this->adBookId;
    }

    public function setBackUrl($val)
    {
        $this->backUrl = (string)$val;
        $this->apiParams['backUrl'] = $this->backUrl;
    }

    public function getParams()
    {
        return $this->apiParams;
    }
}