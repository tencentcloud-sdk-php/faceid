<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * CheckIdNameDate返回参数结构体
 *
 * @method string getResult() 获取认证结果码，收费情况如下。

- 收费结果码：
0: 一致。
-1: 不一致。

- 不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）。
-3: 非法姓名（长度、格式等不正确）。
-4: 非法有效期（长度、格式等不正确）。
-5: 身份信息无效。
-6: 证件库服务异常。
-7: 证件库中无此身份证记录。
-8: 认证次数超过当日限制，请次日重试。
 * @method void setResult(string $Result) 设置认证结果码，收费情况如下。

- 收费结果码：
0: 一致。
-1: 不一致。

- 不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）。
-3: 非法姓名（长度、格式等不正确）。
-4: 非法有效期（长度、格式等不正确）。
-5: 身份信息无效。
-6: 证件库服务异常。
-7: 证件库中无此身份证记录。
-8: 认证次数超过当日限制，请次日重试。
 * @method string getDescription() 获取业务结果描述。
 * @method void setDescription(string $Description) 设置业务结果描述。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckIdNameDateResponse extends AbstractModel
{
    /**
     * @var string 认证结果码，收费情况如下。

- 收费结果码：
0: 一致。
-1: 不一致。

- 不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）。
-3: 非法姓名（长度、格式等不正确）。
-4: 非法有效期（长度、格式等不正确）。
-5: 身份信息无效。
-6: 证件库服务异常。
-7: 证件库中无此身份证记录。
-8: 认证次数超过当日限制，请次日重试。
     */
    public $Result;

    /**
     * @var string 业务结果描述。
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result 认证结果码，收费情况如下。

- 收费结果码：
0: 一致。
-1: 不一致。

- 不收费结果码：
-2: 非法身份证号（长度、校验位等不正确）。
-3: 非法姓名（长度、格式等不正确）。
-4: 非法有效期（长度、格式等不正确）。
-5: 身份信息无效。
-6: 证件库服务异常。
-7: 证件库中无此身份证记录。
-8: 认证次数超过当日限制，请次日重试。
     * @param string $Description 业务结果描述。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
