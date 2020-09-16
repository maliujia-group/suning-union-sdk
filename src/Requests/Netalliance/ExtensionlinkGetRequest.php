<?php
/**
 * 商品和券二合一接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.extensionlink.get
 *
 * Date: 2020/9/16
 * Time: 17:56
 */

namespace SuningSDK\Requests\Netalliance;

use SuningSDK\Interfaces\Request;

class ExtensionlinkGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.extensionlink.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getExtensionlink';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $productUrl;    // 商品的URL仅支持拼购和易购单品

    private $quanUrl;       // 券URL有时生成券推广，没有时生成商品推广

    private $promotionId;   // 这个推广只联盟前台申请的推广位，如果没有可以不填

    private $subUser;       // 子会员编码

    private $pid;           // 工具商ID

    private $sugsUrl;       // 需要做转链的sugs短链

    private $apiParams = [];

    public function setProductUrl($val)
    {
        $this->productUrl = (string)$val;
        $this->apiParams['productUrl'] = (string)$val;
    }

    public function setQuanUrl($val)
    {
        $this->quanUrl = (string)$val;
        $this->apiParams['quanUrl'] = (string)$val;
    }

    public function setPromotionId($val)
    {
        $this->promotionId = (string)$val;
        $this->apiParams['promotionId'] = (string)$val;
    }

    public function setSubUser($val)
    {
        $this->subUser = (string)$val;
        $this->apiParams['subUser'] = (string)$val;
    }

    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = $this->pid;
    }

    public function setSugsUrl($val)
    {
        $this->sugsUrl = (string)$val;
        $this->apiParams['sugsUrl'] = $this->sugsUrl;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}