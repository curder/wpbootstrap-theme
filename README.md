## 介绍

将主题添加到WordPress的`/wp-content/themes/`下面，在后台主题中启用**WP Bootstrap**

## 文件说明
| 文件 | 说明 |
| ------ | ------ |
|`archive.php`| 控制存档、分类、日期的输出页面。 |
|`assets/css/bootstrap.css`| Bootstrap框架CSS文件 |
|`assets/images/showcase/jpg`| 首页背景文件 |
|`assets/js/bootstrap.js`| Bootstrap框架JS文件 |
|`comments.php`| 用来管理如何显示评论 |
|`content-aside.php`| 日志文章详情页面的展示模版，配合`single.php`使用 |
|`content-gallery.php`| 相册文章详情页面的展示模版，配合`single.php`使用 |
|`content.php`| 标准文章详情页面的展示模版，配合`single.php`使用 |
|`footer.php`| 主题尾部，一般是用来输出页脚信息的，比如放些模版作者，版权信息之类。|
|`front-page.php`|首页模板，仅用于开启 静态首页 时|
|`functions.php`| 定义函数,非常重要。 |
|`header.php`| 主题头部，用来输出标题和菜单项，同时html文件的头信息也放在这。|
|`inc/customizer.php`| 首页自定义信息 |
|`inc/vendors/wp-bootstrap-navwalker.php`|  |
|`index.php`|主模板.如果你的主题使用自己的模板，`index.php` 是必须要有的|
|`screenshot.png`|主题后台预览图片|
|`single.php`|内容页，当点击一篇文章后，所展示的页面内容由这个文件来控制。|
|`style.css`|主题样式，所有所有页面的具体表现样式都由这个文件来控制。|
具体内容请查阅这里：[主题开发](https://codex.wordpress.org/zh-cn:%E4%B8%BB%E9%A2%98%E5%BC%80%E5%8F%91)