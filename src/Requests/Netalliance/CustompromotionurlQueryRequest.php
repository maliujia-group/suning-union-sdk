<?php
/**
 * 获取自定义推广链接接口
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.custompromotionurl.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */

namespace SuningSDK\Requests\Netalliance;

use SuningSDK\Interfaces\Request;

class CustompromotionurlQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.custompromotionurl.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryCustompromotionurl';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $adBookId;  // 推广位id (在苏宁联盟会员前台已维护的推广位ID，不可和pid同时使用)

    private $visitUrl;  // 需要定制的链接(允许定制商品，店铺，频道及活动促销页面，其它页面暂不支持定制)

    private $subUser;   // 子会员号

    private $pid;       // 工具商ID（不可和推广位同时使用）

    private $apiParams = [];


    public function setAdBookId($val)
    {
        $this->adBookId = (string)$val;
        $this->apiParams['adBookId'] = $this->adBookId;
    }

    public function setVisitUrl($val)
    {
        $this->visitUrl = (string)$val;
        $this->apiParams['visitUrl'] = $this->visitUrl;
    }

    public function setSubUser($val)
    {
        $this->subUser = (string)$val;
        $this->apiParams['subUser'] = $this->subUser;
    }

    public function setPid($val)
    {
        $this->pid = (string)$val;
        $this->apiParams['pid'] = $this->pid;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}