# meroad后台文档

> 与移动端交互如无特殊注明 一律以json格式传输



## User

功能：用户登录，获取用户信息

### login

- 功能：用户登录
- HTTP METHOD: POST
- url:   http://120.79.199.124/meroad/public/user/login
- request:

- ``` json
  {
      'userid':string, // 账号
      'password':string,  // 密码
  }
  ```

- return:

  ```json
  {
      'date':string,   	 // 无数据
      'errorCode':string,  // 状态码
      'errorMsg':string    // 错误信息
  }					
  ```

### logout

- 功能：用户登出

- HTTP METHOD: GET

- url: http://120.79.199.124/meroad/public/user/logout

- request:

- ```json
  {
  }
  ```

- return:

  ```json
  {
      'date':string,   	 // 无数据
      'errorCode':string,  // 状态码
      'errorMsg':string    // 错误信息
  }					 
  ```

### getUserDetail

- 功能：用户登出

- HTTP METHOD: GET

- url: http://120.79.199.124/meroad/public/user/getUserDetail

- request:

- ```json
  {
  }
  ```

- return:

  ```json
  {
      'date':string,   	 // 无数据
      'errorCode':string,  // 状态码
      'errorMsg':string    // 错误信息
  }					 
  ```

### updateAvatar

- 功能：用户登出

- HTTP METHOD: POST

- url: http://120.79.199.124/meroad/public/user/updateAvatar

- request:

- ```json
  {
      //表单里直接提交图片
  }
  ```

- return:

  ```json
  {
      'date':string,   	 // 无数据
      'errorCode':string,  // 状态码
      'errorMsg':string    // 错误信息
  }					 
  ```

### getAvatar

- 功能：用户登出

- HTTP METHOD: POST

- url: http://120.79.199.124/meroad/public/user/getAvatar

- request:

- ```json
  {
  }
  ```

- return:

  ```json
  {
      'date':string,   	 // 无数据
      'errorCode':string,  // 状态码
      'errorMsg':string    // 错误信息
  }					 
  ```

### register

* 功能：用户注册

- HTTP METHOD: POST

- url: http://120.79.199.124/meroad/public/user/logout

- request:

  - ```json
    {
    	....//用户信息 注册功能待定
    }
    ```

- return:

  - ```json
    {
    'date':string,   	 // 无数据
    'errorCode':string,  // 状态码
    'errorMsg':string    // 错误信息
    }
    ```

## Toilet

功能：查看、下载辅导员评测数据

### getDetail

- 功能：查看所有辅导员数据
- HTTP METHOD: POST
- url:  http://120.79.199.124/meroad/public/user/getDetail
- request:

- ```json
  {
      'uuid':string,//厕所id
  }
  ```

- return:

  ```json
   {
      'date':array,   	 // 厕所数据
      'errorCode':string,  // 状态码
      'errorMsg':string    // 错误信息
  }
  ```

### update

- 功能：下载所有辅导员数据
- HTTP METHOD: POST
- url:   http://120.79.199.124/meroad/public/user/update
- request:

- ```json
  {
      uuid:string,//必选
      ....//更新的参数，可选
  }
  ```

- return:

  ```json
   {
      'date':array,   	 // 数据
      'errorCode':string,  // 状态码
      'errorMsg':string    // 错误信息
  }
  ```
