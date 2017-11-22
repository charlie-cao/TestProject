@extends('layouts.app')
@section('content')
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">2018 WEB技术试验场</h1>
            <p class="lead blog-description">前后端最新开发技术试验场，以及最佳实践。</p>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="row">
                    <div class="col-sm-4">
                        <h4>Laravel</h4>
                        <ol>
                            <li>工作流</li>
                            <li><a target="_blank" href="{{ asset('laraveldemo/l_view') }}">模版</a></li>
                            <li><a target="_blank" href="laraveldemo/l_route">路由</a></li>
                            <li>控制器</li>
                            <li><a target="_blank" href="laraveldemo/l_db">数据层</a></li>
                            <li><a target="_blank" href="laraveldemo/l_cache">Cache</a></li>
                            <li><a target="_blank" href="laraveldemo/l_cache">自动生成用户授权</a></li>
                            <li><a target="_blank" href="http://labs.infyom.com/">自动生成增删改查</a></li>
                            <li><a target="_blank" href="{{url('/apples')}}">增删改查例子</a></li>
                            <li><a target="_blank" href="laraveldemo/l_cache">组装更多的特性</a></li>
                            <li><a target="_blank" href="doc/home">MDEveryDemo</a></li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>前端</h4>
                        <ol>
                            <li>前端工作流</li>
                            <li><a target="_blank" href="laraveldemo/l_vue">VUE单页程序</a></li>
                            <li><a target="_blank" href="https://wrapbootstrap.com/themes">好用的模版</a></li>
                            <li><a target="_blank" href="http://www.mycodes.net/154/">源码之家</a></li>
                            <li><a target="_blank"
                                   href="https://www.froala.com/wysiwyg-editor/docs/server/php/image-upload">php7上传进度</a>
                            </li>
                            <li><a target="_blank" href="http://fontawesome.io/">FONTAWESOME</a></li>
                            <li><a target="_blank" href="http://www.bootcdn.cn/font-awesome/">FONT-AWESOME</a></li>
                            <li><a target="_blank" href="http://www.gettemplate.com/">GETTEMPLATE</a></li>
                            <li><a target="_blank" href="https://www.froala.com/design-blocks">Froala Desing Block</a>
                            </li>
                            <li><a target="_blank" href="http://ace.jeka.by/">ACE</a></li>
                            <li><a target="_blank"
                                   href="http://webapplayers.com/inspinia_admin-v2.7.1/">inspinia_admin</a></li>
                            <li><a target="_blank" href="http://win10ui.yuri2.cn/2.x.php">win10ui</a></li>
                            <li><a target="_blank" href="{{url('doc/newpage')}}">Froala Desing Block Demo</a></li>
                            <li><a href="http://www.jqhtml.com/bootstraps-syntaxhigh/index.html">前端资源站点</a></li>
                            <li><a href="http://www.codingdrama.com/bootstrap-markdown/">BOOTSTRAP-MARKDOWN</a></li>
                            <li><a href="http://www.bootcss.com/p/bootstrap-wysiwyg/">BOOTSTRAP-WYSIWYG</a></li>
                            <li><a href="https://mp.weixin.qq.com/s/wxxGavmw5mH-Rhe4i7e8LA">ECMAScript 6</a></li>
                            <li><a href="https://www.cnblogs.com/zfc2201/p/3452476.html">ECMAScript 7</a></li>
                            <li><a href="http://m.blog.csdn.net/lihefei_coder/article/details/75068578">ECMAScript 8</a>
                            </li>
                            <li><a href="https://zhuanlan.zhihu.com/p/29869797">21天造React</a></li>
                            <li><a href="https://segmentfault.com/u/jinyunlong/articles?page=3">全栈REACT</a></li>
                            <li><a href="https://segmentfault.com/u/jinyunlong/articles?page=3">全栈REACT</a></li>
                            <li><a href="https://ant.design">ant.design 很完整的react web组件库</a></li>
                            <li><a href="https://pro.ant.design">pro.ant.design 老马牛大了 开箱即用的web后台系统</a></li>
                            <li><a href="https://electronjs.org/">electronjs.org</a></li>
                            <li><a href="https://segmentfault.com/a/1190000006207600">electronjs指南</a></li>
                            <li><a href="https://mobile.ant.design/index-cn">支付宝移动组件库</a></li>
                            <li><a href="https://segmentfault.com/a/1190000006207600">微信移动组件库</a></li>
                            <li><a href="https://mp.weixin.qq.com">微信小程序</a></li>
                            <li><a href="http://developer.baidu.com/">百度开发者中心</a></li>
                            <li><a href="http://developer.baidu.com/">腾讯开发者中心</a></li>
                            <li><a href="http://developer.baidu.com/">阿里开发者中心</a></li>
                            <li><a href="https://open.weixin.qq.com/">腾讯开放平台</a></li>
                            <li><a href="http://www.easyicon.net/">简单图标搜索</a></li>
                            <li><a href="http://www.iconfont.cn/">iconfont</a></li>
                            <li><a href="https://www.hotjar.com">hotjar把我想做的跨站点赞的插件做了:D基于Nodejs 和 React</a></li>
                            <li><a href="https://www.swoole.com/">php swoole</a></li>
                            <li>推荐的三个React组件库
                                react-bootstrap625
                                ant.design380
                                material-ui362</li>

                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>重点话题</h4>
                        <ol>
                            <li><a href="https://travis-ci.org/">持续集成</a></li>
                            <li><a href="https://codecov.io">自动化测试</a></li>
                            <li><a href="https://www.gitbook.com">文档自动分析</a></li>
                            <li><a href="https://tongji.baidu.com/web/welcome/login">百度统计</a></li>
                            <li><a href="https://tongji.baidu.com/web/welcome/login">Google统计 被墙了</a></li>
                            <li><a href="https://www.bugzilla.org/">bugzilla</a></li>
                            <li><a href="http://tool.chinaz.com/">站长工具</a></li>
                            <li><a href="https://github.com/tqchen/tinyflow">分布式系统 CDN</a></li>
                            <li>大数据接口 【开放接口】</li>
                            <li>人工智能接口【开放接口】</li>
                            <li>IDE使用 【storm系列】</li>
                            <li>团队管理技巧 【敏捷】</li>
                            <li>源码管理技巧 【git】</li>
                            <li>已有资源接入 【这个话题太大了】</li>
                            <li><a href="https://app.apiary.io/caolei/editor">Rest接口文档工具</a></li>
                            <li><a href="http://open.leancloud.cn/">IT公司管理规范</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>待解决问题</h4>
                        <ol>
                            <li>Session使用和跨域</li>
                            <li>curd后的修改</li>
                            <li>发布命令详解</li>
                            <li>运行环境的配置</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>静态页面生成器</h4>
                        <ol>
                            <li><a href="http://gohugo.io/">hugo</a></li>
                            <li><a href="http://www.gohugo.org/">hugo 中文文档</a></li>
                            <li><a href="https://hexo.io/">hexo</a></li>
                            <li><a href="https://hexo.io/zh-cn/docs/">hexo 中文文档</a></li>
                            <li><a href="https://jekyllrb.com/">jekyll</a></li>
                            <li><a href="http://jekyll.com.cn/">jekyll 中文文档</a></li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>持续集成</h4>
                        <ol>
                            <li>Git Hub</li>
                            <li>Git Book</li>
                            <li>Git CI</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>各种规范</h4>
                        <ol>
                            <li>Stack Overflow Markdown 规范</li>
                            <li>文案排版指北</li>
                            <li>提问的智慧</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>各种协议</h4>
                        <ol>
                            <li>「署名-非商业性使用」</li>
                            <li>MIT</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>CDN</h4>
                        <ol>
                            <li><a href="http://www.bootcdn.cn/font-awesome/">BOOTCDN</a></li>
                            <li><a href="http://www.bootcdn.cn/">又拍云CDN</a></li>
                            <li><a href="http://cdn.code.baidu.com/">百度CDN</a></li>
                            <li>淘宝CDN</li>
                            <li>腾讯CDN</li>
                            <li><a href="https://www.staticfile.org/">九牛CDN</a></li>
                            <li><a href="http://lib.sinaapp.com/">Sina CDN</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>社会化网络</h4>
                        <ol>
                            <li><i class="fa fa-github"></i> <a target="_blank"
                                                                href="https://github.com/pplboy">Github</a></li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                                  href="http://cn.linkedin.com/in/pplboy">LinkIn</a>
                            </li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                                  href="http://www.jianshu.com/u/773f33ffa8d9">简书</a>
                            </li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                                  href="https://www.douban.com/people/169342722/">豆瓣</a>
                            </li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                                  href="https://segmentfault.com/u/charlie_cao">SementFault</a>
                            </li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank" href="https://twitter.com/pplboy">Twitter</a>
                            </li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                                  href="https://www.instagram.com/pplboy">Instagram</a>
                            </li>
                            <li><i class="fa fa-facebook"></i> <a target="_blank"
                                                                  href="https://www.facebook.com/pplboy">FaceBook</a>
                            </li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank"
                                                                  href="https://www.zhihu.com/people/charlie_cao">知乎</a>
                            </li>
                            <li><i class="fa fa-linkedin"></i> <a target="_blank" href="http://weibo.com/charlie19817">微博</a>
                            </li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>头条</h4>
                        <ol>
                            <li>开发者头条</li>
                            <li>极客头条</li>
                            <li> 掘金稀土</li>
                            <li>CocoaChina</li>
                            <li>稀土掘金</li>
                            <li>伯乐在线</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>网络时代的节点</h4>
                        <ol>
                            <li><a href="">WIKI</a></li>
                            <li><a href="">GITHUB</a></li>
                            <li><a href="">TED</a></li>
                            <li><a href="">buffer.com</a></li>
                        </ol>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>算法</h4>
                        <ol>
                            <li><a href="https://www.zhihu.com/question/20368410">算法站点</a></li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>Hack</h4>
                        <ol>
                            <li><a href="https://wenku.baidu.com/view/87b3cffa581b6bd97e19ea48.html">黑客站点</a></li>
                            <li><a href="https://news.ycombinator.com/news">黑客新闻</a></li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>信仰和造物者</h4>
                        <ol>
                            <li><a href="">工程师</a></li>

                        </ol>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h4>碎片</h4>
                        <ol>
                            <li>各种零碎</li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>PPT</h4>
                        <ol>
                            <li></li>
                        </ol>
                    </div>
                    <div class="col-sm-4">
                        <h4>脑图</h4>
                        <ol>
                            <li></li>

                        </ol>
                    </div>

                </div>

                <pre>
<b>首页规划</b>
首页三大区块，1 本项目目的区域，2 文档区域，3，解决的问题区域
【目的】
1。使用了最新的开发技术和流程进行开发。实验了各种新特性和新理念。
2。提供各种文档的快捷链接，方便国内开发者
3。提供各种新技术的试验文档。
4。创建讨论区，讨论一套真正开放和便捷的开发辅助站点。
</pre>
                <pre>
<b>平台互通</b>
用户 -> SEO搜索 { 谷歌，百度，必应 } -> 博客 -> { Weibo，Github，Twitter，Facebook }
用户 -> 微博 -> { 博客，Instagram }
用户 -> Github -> 博客
用户 -> 知乎，SegmentFault -> { 博客 } </pre>
                <pre>
<b>git项目参与方法</b> <a href="https://www.gitbook.com/book/ryancao/php-developer-prepares/details">参考</a>
本项目在 Github 上维护，欢迎参与：https://github.com/zacao/php-developer-prepares。
在 GitHub 上把本项目 fork 到自己的仓库，如 your-username>/php-developer-prepares，然后 clone 到本地，并设置用户信息。
$ git clone git@github.com:your-username/php-developer-prepares.git
$ cd php-developer-prepares
$ git config user.name "yourname"
$ git config user.email "your email"
修改代码后提交，并推送到自己的仓库。
$ #do some change on the content
$ git commit -am "Fix issue #1: change helo to hello"
$ git push
在 GitHub 网站上提交 pull request。
定期使用项目仓库内容更新自己仓库内容。
$ git remote add upstream https://github.com/zacao/php-developer-prepares
$ git fetch upstream
$ git checkout master
$ git rebase upstream/master
$ git push -f origin master</pre>
                <pre>
<b>用ptyhon写一个个人内容管理工具</b>
这个工具基于 tag 进行内容分类和检索
内容可以选择各种输入类型
比如链接 文本 音频 重要日期等等
这个系统基于 github 管理 并使用 git生态链中的工具自动化生成
比如，平时看到比较好的链接
就选择 链接模式，输入文本，链接，标签，标签可以包含为什么寻找到这个链接的关键字
再比如 每天需要写日记
就选择 日记，输入标题，日记内容，标签，标签可以归类日记形成日记本
再比如 需要记住重要人的生日
就选择 重要时间， 输入 时间，备注，标签，自动打上重要时间标签
再比如 需要记下日更的身体状态
再比如 需要记下各种系统的密码
再比如 需要记下资产状况
再比如 需要记下读后感
https://ryancao.gitbooks.io/php-developer-prepares/content/preface/cross-the-gfw.html
提交的同时，本地缓存一个无格式的文档数据库中，并在合适的时候【比如有wifi】自动上传进入git个人home
定期的本地内容会pull出去，防止本地爆掉。
为通过github托管的这个库增加一个生态工具
可以通过站点查看自己所有的内容，并管理内容生成自动化的比如 gitbook，gitlist ，git日更之类的展现，可评论，可分享，加入社会化属性，
有的内容可以做版本控制，有的内容可以合并别人的提交。
一切的入口，通过一个跨平台的应用简单构成，核心使用python来调用各种工具。
并且暴露出接口，为各种内容管理工具提供插件，让内容管理工具变成客户端。
人类历史上的真正的大数据汇集，相当于网络人脑的存储空间。
这也算是一种计算机神经网络吧。
太有意思了。可以考虑做做。。。。。</pre>
                <a href="{{url('/notes/create')}}">添加笔记</a>
                <ol>
                    <li>快捷键:大写所选 Command+Shift+U</li>
                    <li>快捷键:选中内容之外生成标签 选中 Command+alt+t 输入 需要的标签</li>
                    <li>快捷键:表达式生成html标签 ol>li>h1> tab</li>
                </ol>
                @foreach ($notes as $note)
                    <h4>{{$note->title}}
                        <small>{{ $note->auth }}</small>
                        {{$note->created_at}}
                    </h4>
                    <pre style="">{{$note->content}}</pre>
                @endforeach
            </div>
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                @include('block.all')
            </div>
        </div>
    </div>
@stop
