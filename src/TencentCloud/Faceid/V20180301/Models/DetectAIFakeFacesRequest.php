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
 * DetectAIFakeFaces请求参数结构体
 *
 * @method string getFaceInput() 获取传入需要进行检测的带有人脸的图片或视频，使用base64编码的形式。

图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

视频的Base64值：
Base64编码后的大小不超过8M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method void setFaceInput(string $FaceInput) 设置传入需要进行检测的带有人脸的图片或视频，使用base64编码的形式。

图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

视频的Base64值：
Base64编码后的大小不超过8M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method integer getFaceInputType() 获取传入的类型
1- 传入的是图片类型
2- 传入的是视频类型
其他 - 返回错误码InvalidParameter
 * @method void setFaceInputType(integer $FaceInputType) 设置传入的类型
1- 传入的是图片类型
2- 传入的是视频类型
其他 - 返回错误码InvalidParameter
 */
class DetectAIFakeFacesRequest extends AbstractModel
{
    /**
     * @var string 传入需要进行检测的带有人脸的图片或视频，使用base64编码的形式。

图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

视频的Base64值：
Base64编码后的大小不超过8M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     */
    public $FaceInput;

    /**
     * @var integer 传入的类型
1- 传入的是图片类型
2- 传入的是视频类型
其他 - 返回错误码InvalidParameter
     */
    public $FaceInputType;

    /**
     * @param string $FaceInput 传入需要进行检测的带有人脸的图片或视频，使用base64编码的形式。

图片的Base64值：
建议整体图像480x640的分辨率，脸部 大小 100X100 以上；
Base64编码后的图片数据大小不超过3M，仅支持jpg、png格式。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。

视频的Base64值：
Base64编码后的大小不超过8M，支持mp4、avi、flv格式。
请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     * @param integer $FaceInputType 传入的类型
1- 传入的是图片类型
2- 传入的是视频类型
其他 - 返回错误码InvalidParameter
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
        if (array_key_exists("FaceInput",$param) and $param["FaceInput"] !== null) {
            $this->FaceInput = $param["FaceInput"];
        }

        if (array_key_exists("FaceInputType",$param) and $param["FaceInputType"] !== null) {
            $this->FaceInputType = $param["FaceInputType"];
        }
    }
}
