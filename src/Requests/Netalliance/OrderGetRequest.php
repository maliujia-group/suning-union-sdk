<?php
/**
 * 网盟订单信息单独查询
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.order.get
 *
 * Date: 2020/9/16
 * Time: 17:56
 */

namespace SuningSDK\Requests\Netalliance;

use SuningSDK\Interfaces\Request;

class OrderGetRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.order.get';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'getOrder';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $orderCode; // 订单编号

    private $promotion;  // 是否风控订单

    private $apiParams = [];


    public function setOrderCode($val)
    {
        $this->orderCode = (string)$val;
        $this->apiParams['orderCode'] = (string)$val;
    }

    public function setPromotion($val)
    {
        if ($val) {
            $this->promotion = (int)$val;
            $this->apiParams['promotion'] = $this->promotion;
        }
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}