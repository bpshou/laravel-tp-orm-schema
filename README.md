## Laravel or ThinkPHP ORM schema

用来记录使用 Laravel or ThinkPHP orm 的使用代码

### Laravel orm
目录在 laravel

### ThinkPHP orm
目录在 thinkphp

### docker 启动方式
1. 先构建docker镜像
2. 使用docker启动

```
docker build -t php .

docker run -itd \
    --name php \
    -p 6543:80 \
    -v $(pwd):/var/www/html \
    php
```

### docker compose 启动方式
使用 `docker compose up -d`
