##Netease Object Storage(NOS) PHP SDK##
V1.0.0 提供以下接口：

### 桶操作接口
1. createBucket ------ 新建桶
2. deleteBucket ------ 删除桶
3. doesBucketExist ------ 判断桶是否存在
4. putBucketAcl ------ 设置桶的acl
5. getBucketAcl ------ 获取桶的acl
6. listBuckets ------ 列举当前用户所有的桶
7. getBucketLocation ------ 获取桶的location

### 对象操作接口
1. putObject ------ 上传字符串对象
2. uploadFile ------ 上传文件
3. doesObjectExist ------ 判断对象是否存在
4. GetObjectMeta ------ 获取对象元信息
5. copyObject ------ 复制对象
6. moveObject ------ 移动对象
7. deleteObject ------ 删除对象
8. deleteObjects ------ 批量删除对象
9. getObject ------ 获取对象

### 大对象分块操作接口
1. initiateMultipartUpload ------ 初始化分块上传
2. generateMultiuploadParts ------ 生成上传分块列表
3. uploadPart ------ 上传分块
4. completeMultipartUpload ------ 完成分块上传
5. listParts ------ 列出正在上传的分块
6. abortMultipartUpload ------ 异常结束分块上传
7. listMultipartUploads ------ 列出正在进行的分块上传任务
8. multiuploadFile ------ 使用分块上传一个大文件

### 签名URL生成
1. signUrl ------ 生成签名url
