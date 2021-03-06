
<div class=banner>首页 --> PostgreSQL 9.3版本发布说明</div><br><br>


<h2>目录</h2>

<p>
 &nbsp; <a href="#original_release">新版本发布说明的原文</a><br />
 &nbsp; <a href="#features">特性列表</a><br />
 &nbsp; <a href="#download">下载地址</a><br />
 &nbsp; <a href="#docs">文档</a><br />
 &nbsp; <a href="#license">版权声明</a><br />
 &nbsp; <a href="#contact">联系方式</a><br />
 &nbsp; <a href="#quoted_companies">相关商业公司体验</a><br />
 &nbsp; <a href="#companies">企业支持</a><br />
</p>

<a name="original_release"></a><h2>新版本发布说明的原文</h2>

<p>2013/9/9: 全球开发组宣布业界领先的开源关系数据库PostgreSQL9.3版发布，这个版本扩展了可靠性、可用性及与其他数据库易集成性，用户将会发现，他们可以使用9.3版本创建一些对以前版本是不可能实现的新功能。
</p>

<p>
"PostgreSQL 9.3版本可以提供给应用软件开发者安装就能使用的各种特性：如更好的JSON功能，正则表达式索引，以及使用PostgreSQL外部数据封装器将更简单的数据集成功能，我都不知道没有9.3版本，我的项目是否能按时完成"，VenueBook公司的CTO,Jonathan S. Katz.
</p>

<p>
<b>外部数据的可读写</b>
</p>

<p>
9.3版本的外部数据封装器使PostgreSQL能够读写外部数据，允许在不同数据库系统间进行双向数据交互。今天，复杂的IT环境下可能包括有多种数据库以及非结构化的数据源，使用PostgreSQL将帮助用户将这些数据整合为一个有机的整体。这个模块也有一个postgres_fdw的程序，它是一个高性能的，可实现PostgreSQL对PostgreSQL读写的驱动。
</p>

<p>
"外部数据封装器使我们可以随时加入和测试各种后台可选的数据库，可以使我们更加智能地选择不同的方案来快速地满足不同的需求"，来自CloudFlare公司的创始人及高级工程师Lee Holloway说道，"能够设计并实施新的存储方式（包括我们使用Go语言开发的实验室产品）并可以观察它们可以读、写甚至相互进行数据交互是一件很让人激动的事性"。
</p>

<p>
<b>增强的可靠性和可用性</b>
</p>

<p>
"PostgreSQL因为它众所周知的稳定性、强壮性、数据一致性、安全性、ACID事务性和SQL标准规范性一直就是我的最喜欢的选择"，Gandi.net网站的研发经理Pascal Bouchareine说道，"我对9.3版本中快速的失效转移功能尤其感到兴奋"。
</p>

<p>
新版本中用于进一步提升和扩展PostgreSQL可靠性和可用性的特性包括：
</p>

<ul>
<li>数据页的校验：帮助管理员快速检查失效磁盘和可能导致数据出错的有问题硬件</li>
<li>快速失效转移：可以实现亚秒级的从失效主机向备份机的切换，支持“电信级”高可用性</li>
<li>流式重建：在主机失效后可以更加简单、快速地重新配置级联复制</li>
</ul>

<p>
<b>开发人员友好的特性</b>
</p>

<p>
如同每年的大版本升级一样，PostgreSQL 9.3版本也包括很多让PostgreSQL工作起来更加简单、更加灵活和让应用程序开发人员、管理员、架构师有更多工作乐趣的新特性，这些特性包括：
</p>

<ul>
<li>更多的JSON 构建器和提取方法</li>
<li>可自动更新的视图</li>
<li>可并行执行pg_dump 导出，以提高大数据库的备份速度</li>
<li>后向JOIN（后一个子查询可以引用前一个子查询内容）</li>
</ul>

<p>
另外，PostgreSQL 9.3版本的用户自定义的后台进程允许开发者开发任务管理器、请求处理器、并行处理器、队列工具以及其他应用程序的辅助程序，以使PostgreSQL可作为一个工作负载协调器。如已有一个已发布的应用程序Mongres，这是一个后台进程，它可以接受MongoDB的查询请求、翻译请求并将之传给PostgreSQL。
</p>

<p>
<b>关于PostgreSQL</b>
</p>

<p>
PostgreSQL是业内领先的开源数据库系统，它的开发和支持来自于一个由数千名用户组成的全球社区和全球几十家公司或组织，PostgreSQL项目有25年以上的历史，起源于加利福利亚的伯克利大学，经历了无数次开发升级。PostgreSQL的专业特性不仅包含最高级的商业数据库系统的功能，还在高级数据库特性、扩展性、安全性和稳定性方面超越了它们，更多详情以及加入我们的社区可浏览：
<a href="http://www.postgresql.org">PostgreSQL.org</a>网站。
</p>

<a name="features"></a><h2>有关新特性的更多信息</h2>

<p>
有关上述提及的新特性以及其他特性介绍，可查询以下资源：
</p>
<ul>
<li><a href="/docs/9.3/static/release-9-3.html">发布声明</a></li>
<li><a href="/docs/9.3/static/index.html">9.3版本的文档</a></li>
<li><a href="http://wiki.postgresql.org/wiki/What%27s_new_in_PostgreSQL_9.3">9.3版本的新特性(英文网站)</a></li>
<li><a href="/about/featurematrix">特性矩阵(仅英语)</a></li>
<li><a href="https://github.com/umitanuki/mongres">Mongres: MongoDB 在PostgreSQL平台的模拟器</a></li>
<li><a href="http://blog.cloudflare.com/kyoto_tycoon_with_postgresql">CloudFlare 公司的Kyoto Tycoon FDW 数据封装器</a></li>
<li><a href="https://wiki.postgresql.org/wiki/Foreign_data_wrappers">其他外部数据封装器的列表</a></li>
</ul>

<a name="download"></a><h2>下载</h2>
<ul>
<li><a href="/download">下载页面</a>有含Windows、Linux、OSX、BSD 和 Solaris 平台下的安装包及其他工具</li>
<li><a href="/ftp/source/v9.3.0">源代码</a></li>
<li><a href="http://pgxn.org">PostgreSQL 扩展模块网站</a></li>
<li><a href="/download/product-categories">相关商业软件</a></li>
</ul>

<a name="docs"></a><h2>文档</h2>

<p>
HTML 格式文档和 man 格式的文档随PostgreSQL一起安装，用户也可以免费地在网站上对<a href="/docs/9.3/interactive">在线文档</a>进行浏览、搜索和反馈评论。
</p>

<a name="license"></a><h2>版权声明</h2>
<p>
PostgreSQL 使用<a href="/about/licence">PostgreSQL版权声明</a>，它是类似BSD的版权。
由于这个经 <a href="http://www.opensource.org/licenses/postgresql">OSI认证的版权</a>不限制PostgreSQL在商业环境和有版权的应用程序中使用，因此被公认为是非常有灵活性和对商业应用是友好的。加上有多个公司的支持和源代码归属公共所有，我们的版权使得PostgreSQL在那些希望在自己的产品里嵌入数据库的厂商中很流行，因为他们不用担心费用、嵌入软件的版权锁以及版权条款的改变。
</p>

<a name="contact"></a><h2>联系方式</h2>

<p>相关网站</p>
<ul>
<li><a href="http://www.postgresql.org">PostgreSQL的网站</a></li>
<li><a href="http://www.pgsqldb.org:8079">PostgreSQL中文社区网站</a></li>
<li><a href="http://bbs.pgsqldb.com">PostgreSQL中文社区</a></li>
<li><a href="http://www.postgresql.org.cn">PostgreSQL中文网站</a></li>
</ul>

<p>联系人：</p>
<p>
何伟平<br />
北京<br />
<a href="mailto:laserhenry@gmail.com">laserhenry@gmail.com</a><br />
<br />
周到京<br />
合肥<br />
13515513326<br />
<a href="mailto:cn@postgresql.org">cn@postgresql.org</a>
</p>

<p>要查询特定地区的联系人，可浏览 <a href="/about/press/contact">我们的全球联系人员列表。</a></p>

<a name="quoted_companies"></a><h2>相关商业公司信息</h2>

<b>VenueBook公司</b>

<blockquote>"PostgreSQL 9.3版本提供一系列作为开发者可以立刻使用的功能：更好的JSON 功能、正则表达式索引、使用外部数据封装器可以更容易地整合数据库，我都无法想像，如果没有新的9.3版本的功能，我的项目如何能完成"，VenueBook公司的技术总监Jonathan S. Katz说道。</blockquote>

<p><a href="http://venuebook.com/">VenueBook公司</a>是一个能提供基于云计算的事件管理方案的公司，在一个地方就可以帮助管理整个事件循环， 我们提供软件允许事件负责的经理准备和审批合同，菜单，处理在线支付等。不像市场上的其他系统仅能帮你管理事件，我们还可以简化过程和预定计划等。联系方式（仅英语）：<a href="mailto:info@venuebook.com">info@venuebook.com</a>, +1 646-543-8368</p>

<b>CloudFlare公司</b>

<blockquote>"CloudFlare在一系列工具中，很自豪地地选择PostgreSQL 9.3来向无数网站提供快速开发和安全维护。它提供了我们在敏捷开发和数据扩展所需要的扩展性和可定制性。可写的外部数据封装器允许我们随时加入和测试各种后台可选的数据库，可以使我们更加智能地选择不同的方案来快速地满足不同的需求"。能够设计并实施新的存储方式（包括我们使用Go语言开发的实验室产品）并可以观察它们可以读、写甚至相互进行数据交互是一件很让人激动的事性"。
<br /><br />

"将外部数据封装器和物化视图以及后向联合等技术组合起来进行查询，可自行定制的后台进程可监控、提升PostgreSQL作为一个真正强大的工具，这就是我们一直想要使用的软件。CloudFlare公司很高兴能使用这个软件作为自己的工具"，来自CloudFlare公司的创始人及高级工程师Lee Holloway说。</blockquote>

<p><a href="http://www.cloudflare.com">CloudFlare 公司</a> 可以使用户网站比以前更快，保护它们免受攻击，确保它们总是在线，以及可以通过简单点击就可以增加新的应用。不论目标网站的大小和所用平台，CloudFlare可以在不必增加硬件、软件甚至不必修改一行代码的前提下提升网站的能力。CloudFlare的社区也随之变得越来越强大， 感谢我们特棒的技术，每个月都有成千上万的人经历一个更快更安全更好体验的互联网。 CloudFlare公司被世界经济论坛称之为技术先锋，2011和2012被华尔街杂志命名为最有创新性的网络和互联网公司， 2012年被快公司推选为世界前50大最具创新力的公司。CloudFlare 公司地址现在美国加州的三藩市，联系地址（仅英语）：<a href="mailto:press@cloudflare.com">press@cloudflare.com</a>, +1 (650) 485-1399</p>

<b>Gandi.net公司</b>

<blockquote>"我们需要使用复制技术，对最近这项特性的改进非常感兴趣，我对9.3版本中的快速失效转移功能尤其兴奋。我们在Gandi IAAS/PAAS平台上已经使用PostgreSQL很长时间，最近我们也使用它创建我们的在线系统每天来存储、计算、输出数百万条记录，真的是很简单"。
<br /><br />
"PostgreSQL因为它众所周知的稳定性、强壮性、数据一致性、安全性、ACID事务性和SQL标准规范性一直就是我的最喜欢的选择， 现在它变得更加现代、充分使用了操作系统提供的功能，我们可见到很大的性能提升和失效时更加容易的管理。它就是适用于关键业务的最好的数据库"，Gandi.net网站的研发经理Pascal Bouchareine说。
</blockquote>

<p><a href="http://www.gandi.net">GANDI.net网站</a> 是经ICANN批准的一级域名注册商之一，可注册.COM, .NET,.ORG, .BIZ, .INFO域名和在法国的 .NAME, .BE, .FR, .EU域名，它提供超过200个域扩展并且仍在增加中。在目前注册领域可能会有一些”灰色“的操作，但Gandi 认为它是一个遵守道德规范的域名注册商，它尽量在任何地方对用户的权利和隐私进行保护。英语联系：<a href="thomas@gandi.net">Thomas  Stocking</a>, 法语：<a href="mailto:nicolas.lhuillery@gandi.net">Nicolas Lhuillery</a>. Phone: +1 410.429.7402.</p>

<a name="companies"></a><h2>企业支持</h2>

<p>PostgreSQL获得了一大批公司的支持，他们资助开发人员，提供网上资源以及给予了资金上的支持。一些较大的且长期支持的公司名单列在我们的 <a href="/about/sponsors">开发支持页面</a></p>

<p>还有<a href="/support/professional_support">大量的公司</a>提供从独立顾问到跨国公司的 PostgreSQL 支持。</p>

<p>我们也很乐意接受各方<a href="/about/donate">捐助</a>。</p>

