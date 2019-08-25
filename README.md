
此仓库为对 PodcastGenerator 的 Docker 包装。

## PodcastGenerator

一款开源的 Podcast 发布工具   

[albertobeta/PodcastGenerator: Open Source Podcast Publishing Solution since 2006](https://github.com/albertobeta/PodcastGenerator )

其所有的代码，在本仓库的 `PodcastGenerator` 目录下。 

## Docker 包装

基础镜像为：  

`registry.cn-hangzhou.aliyuncs.com/diligentyang/centos6.7_nginx_1.10_php5.6.29:v1.0` 

参考文章：

* [使用docker快速搭建nginx+php开发环境](https://unordered.org/timelines/59de5eb40f001000 )
* [Docker 学习笔记 - ShaoBaoBaoEr's Blog](http://shaobaobaoer.cn/archives/601/docker-%E5%AD%A6%E4%B9%A0%E7%AC%94%E8%AE%B0 ) 

## 运行

运行容器之后，进入 Podcast 安装界面时，可能会提示 `../media/`, `../images/`, `../` 这三个目录没有访问权限。  
这里使用的是相对路径，相对与谁呢？ `./var/www/setup` 这个目录。

所以，解决这个问题，第一步需要检查 `www` 这个目录中，是否有 media 和 images 这两个目录，如果没有，用 mkdir 创建。
如果已经存在，使用 `chmod 777 media`, `chmod 777 images`, `chmod 777 .` (在 www 这个目录下)，修改目录权限。
再此之前，可能需要通过 `su` 命令切换到 root 用户权限。

## 优化

运行容器之后，`media` 和 `images` 是在容器内的，对于持久化数据，建议使用 volume 将数据挂载到主机上。

## 其它

在 Dockerfile 里面，如果期望 CMD 执行多条指令，可以这么写：  

`CMD ["sh", "-c", "命令1 ; 命令2 ; 命令3"]`


