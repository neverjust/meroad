# 辅导员评测后台接口文档

- 无特别说明，API返回值及前端传递的值均为json格式

## User

功能：登录，

- wechat

  - 功能：获取签名，时间戳和随机字符串

  - HTTP METHOD: GET

  - request:

    - null

  - return:

    ```json
    {
        'nonceStr':string,   // 随机字符串
        'timestamp':string,  // 时间戳
        'signature':string   // 签名
    }
    ```