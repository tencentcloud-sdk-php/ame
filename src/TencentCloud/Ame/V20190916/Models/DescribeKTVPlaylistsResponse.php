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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVPlaylists返回参数结构体
 *
 * @method array getPlaylistBaseInfoSet() 获取推荐歌单列表
 * @method void setPlaylistBaseInfoSet(array $PlaylistBaseInfoSet) 设置推荐歌单列表
 * @method integer getTotalCount() 获取推荐歌单列表总数
 * @method void setTotalCount(integer $TotalCount) 设置推荐歌单列表总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVPlaylistsResponse extends AbstractModel
{
    /**
     * @var array 推荐歌单列表
     */
    public $PlaylistBaseInfoSet;

    /**
     * @var integer 推荐歌单列表总数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PlaylistBaseInfoSet 推荐歌单列表
     * @param integer $TotalCount 推荐歌单列表总数
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
        if (array_key_exists("PlaylistBaseInfoSet",$param) and $param["PlaylistBaseInfoSet"] !== null) {
            $this->PlaylistBaseInfoSet = [];
            foreach ($param["PlaylistBaseInfoSet"] as $key => $value){
                $obj = new KTVPlaylistBaseInfo();
                $obj->deserialize($value);
                array_push($this->PlaylistBaseInfoSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
