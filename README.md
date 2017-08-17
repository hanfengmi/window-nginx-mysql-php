# wnmp
>windows+nginx+mqsql+php
##### 安装nginx
>nginx:[nginx/Windows-1.0.4](http://nginx.org/download/nginx-1.0.4.zip)

>php:[php-5.2.16-nts-Win32-VC6-x86.zip](http://windows.php.net/downloads/releases/archives/php-5.2.16-nts-Win32-VC6-x86.zip)

>还会用到[RunHiddenConsole](http://redmine.lighttpd.net/attachments/660/RunHiddenConsole.zip)

##### 安装配置php
> 在E盘创建wnmp文件夹
> 解压安装包，到E:/wnmp/php；  
进入文件夹，重命名php.ini-recommended文件为php.ini；  
打开文件修改配置。   

> 找到  
extension_dir = "./ext"   
更改为   
extension_dir = "E:/wnmp/php/ext"

> 找到   
;extension=php_mysql.dll   
;extension=php_mysqli.dll   
更改为    
去掉前面引号，让php支持mysql   

> 找到   
;cgi.fix_pathinfo=1  
改为   
去掉引号   
让php与nginx结合  

##### nginx安装配置
> 把下载好的nginx-1.0.4的包同样解压到E盘的wnmp目录下,重命名nginx  
> 打开nginx的config文件夹，打开nginx.config   
 找到

    location / {
      root   html;　　　　　　#这里是站点的根目录
      index  index  index.html index.htm index.php;
    }
>将root改成E:/wamp/www

    # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
    #
    #location ~ \.php$ {
    #    root           html;
    #    fastcgi_pass   127.0.0.1:9000;
    #    fastcgi_index  index.php;
    #    fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
    #    include        fastcgi_params;
    #}
> location ~ \.php$ 去掉分号，改为

    location ~ \.php$ {
      root           D:/wnmp/www;
      fastcgi_pass   127.0.0.1:9000;
      fastcgi_index  index.php;
      fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
      include        fastcgi_params;
    }
>保存，nginx+php的环境就初步配置好了。   
##### RunHiddenConsole
>首先把下载好的RunHiddenConsole.zip包解压到nginx目录内，RunHiddenConsole.exe的作用是在执行完命令行脚本后可以自动关闭脚本，而从脚本中开启的进程不被关闭。然后来创建脚本，命名为“start.bat”，我们在Notepad++里来编辑它
    @echo off
    REM Windows 下无效
    REM set PHP_FCGI_CHILDREN=5

    REM 每个进程处理的最大请求数，或设置为 Windows 环境变量
    set PHP_FCGI_MAX_REQUESTS=1000

    echo Starting PHP FastCGI...
    RunHiddenConsole E:/wnmp/php/php-cgi.exe -b 127.0.0.1:9000 -c E:/wnmp/php/php.ini

    echo Starting nginx...
    RunHiddenConsole E:/wnmp/nginx/nginx.exe -p E:/wnmp/nginx
>再另外创建一个名为stop.bat的脚本用来关闭nginx

    @echo off
    echo Stopping nginx...  
    taskkill /F /IM nginx.exe > nul
    echo Stopping PHP FastCGI...
    taskkill /F /IM php-cgi.exe > nul
    exit
>双击start.bat，在任务管理器可以看到两个nginx.exe和一个php-cgi.exe    
这样nginx服务就启动了，而且php也以fastCGI的方式运行了。

>到站点目录下，新建一个phpinfo.php的文件，在里面编辑

    <?php
        phpinfo();
    ?>
>保存后，打开浏览器输入“http://localhost/phpinfo.php” ，如果看到  

>![](http://pic002.cnblogs.com/images/2011/230271/2011061514164427.jpg)  
>就说明，nginx+php的环境已经配置好了
