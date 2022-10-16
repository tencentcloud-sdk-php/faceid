<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyWebVerificationToken返回参数结构体
 *
 * @method string getVerificationUrl() 获取用户浏览器需要打开此地址开始核验流程。
 * @method void setVerificationUrl(string $VerificationUrl) 设置用户浏览器需要打开此地址开始核验流程。
 * @method string getBizToken() 获取标识一次Web核验流程的令牌，有效时间为7,200秒。流程结束后可用该令牌获取核验结果信息。
 * @method void setBizToken(string $BizToken) 设置标识一次Web核验流程的令牌，有效时间为7,200秒。流程结束后可用该令牌获取核验结果信息。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ApplyWebVerificationTokenResponse extends AbstractModel
{
    /**
     * @var string 用户浏览器需要打开此地址开始核验流程。
     */
    public $VerificationUrl;

    /**
     * @var string 标识一次Web核验流程的令牌，有效时间为7,200秒。流程结束后可用该令牌获取核验结果信息。
     */
    public $BizToken;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $VerificationUrl 用户浏览器需要打开此地址开始核验流程。
     * @param string $BizToken 标识一次Web核验流程的令牌，有效时间为7,200秒。流程结束后可用该令牌获取核验结果信息。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VerificationUrl",$param) and $param["VerificationUrl"] !== null) {
            $this->VerificationUrl = $param["VerificationUrl"];
        }

        if (array_key_exists("BizToken",$param) and $param["BizToken"] !== null) {
            $this->BizToken = $param["BizToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
