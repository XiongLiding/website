

<div class=banner style="padding:4px;border-bottom:1px dotted gray">首页-->社区信息</div>



<br>



<table border=0 width=95%>

<tr><td class="ch_indent line24" width=55%>自1993年起，热心网友何伟平（网名laser，现国内数据库专家，”去哪儿“网站首席架构师）开始独自翻译并研究PostgreSQL十余年，网上现仍可随处搜索到何伟平当时所翻译的PostgreSQL4.0---8.2等各版本的手册，尤其是那篇《<b><a href=/news/viewone/1/52>PostgreSQL的昨天、今天和明天</a></b>》在网上广为流传，为广大中国IT开发人员了解PostgreSQL起到了重要的作用，在此我们也对何伟平所作的贡献表示由衷的敬意。</p>

<p class="ch_indent line24">今天，随着众多使用和爱好PostgreSQL人员的加入，PostgreSQL在中国的应用呈快速发展之势。为进一步规范中文社区的发展，在今年2013杭州PostgreSQL用户大会上，经广大网友的一致讨论，我们正式成立注册的组织---PostgreSQL中国用户协会，并根据各位网友的特长和爱好，成立不同的事务处理小组和核心的管理委员会，来共同努力更好地为广大网友服务，在中国大力推广这一优秀的数据库软件。</p>



<p class="ch_indent line24">最新注册用户 【  <b><a href=/community/typelist/1/ALL><font color=#990000><?php echo $total_num ; ?></font></a></b> 】（此处仅为本网站注册的用户，一般也是PostgreSQL的最终用户）在各行业的分布图和在各个省份的分布图，见附图1和附图2。</p>



<td width=45% align=center><div align=center id="container" style="height: 300px;"></div></td>
</table>



<div align=center id="container2" style="height: 300px;margin:1 auto;"></div><br>





<a name=jobs></a>

<div class=blockzone>


<table width=100% border=0 cellpadding=8 fraxme=box cellspacing=0 style="border-collapse:collapse">
<caption>协会管理委员分工情况... 任期:  <font color=#990000>2016-01-01 ---- 2018-12-31 </font></b></caption>
<tr  style="border-bottom:1px dotted;" align=center><th>职责<th>名单<th>权利和义务</tr>

<tr style="border-bottom:1px dotted;"><td  align=center >主席<td>萧少聪</td>
    <td><LI>职能：发展统筹，工作分配，整体进度跟踪</LI>
        <LI>权利：1票否决权，但没有强制执行权；投票数+2（1票等于3票）</LI>
        <LI>制约：常委过半数支持可弹劾发展统筹，工作分配，整体进度跟踪。</LI>
    </td>
</tr>

<tr style="border-bottom:1px dotted;"><td  align=center>常委<td>周正中<br>彭煜玮<br>唐成<br>赵振平<br>刘媛媛</td>
    <td><LI>权利：投票数+1（1票等于2票）；主席弹劾权</LI>
        <LI>制约：3个月不在重要会议出现自动免职，核心组重新选1人</LI>
    </td>
</tr>


<tr ><td align=center>核心组<td>
    刘奎恩、陈华军<br>朱贤文、张文升<br>周到京、吴仁锦<br>金华峰、胡怡文<br>李鹏宇、杨楂文<br>权宗亮、王硕<br>黄坚、谭峰

</td>
    <td><LI>权利：能参加所有核心级会议，并行使投票权</LI>
        <LI>制约：6个月不在重要会议出现自动免职，来年再进行推选</LI>
    </td>
</tr>

</table>

</div>



<br>

<div class=blockzonex>

<UL><b>事务小组分工情况</b><br><br>

<LI>象牙塔校长：周正中、彭煜伟
<LI>文档翻译组：刘嫒嫒、陈建军
<LI>网站建设组：周到京、张泽鹏
<LI>微信建设组：刘嫒嫒、张文升
<LI>微博建设组：谭峰、唐成、徐鹏飞、刘泉
<LI>帐目管理组：萧少聪、赵振平
<LI>大象会筹划：胡怡文、Wind、唐成
<LI>活动报名组：胡怡文、张茜
</UL>

</div>

<br>










<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: { text: '<span style="font-size:12px;color:#990000">注册用户各行业最新分布图</span>' },
        tooltip: {  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
					style: {color:'#330000',fontWeight:'plain'},
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: '网站注册用户行业占比',
			style: {color:'#333333',fontWeight:'plain'},
            data: [

					['信息' , <?php echo $it_num; ?> ],
//	                    sliced: true,
//	                    selected: true
					['制造' ,  <?php echo $manu_num; ?> ],
					['房地产', <?php echo $ast_num; ?>],
					['政府' ,  <?php echo $gov_num; ?>],
					['金融' ,  <?php echo $fin_num; ?>],
					['基础服务',<?php echo $base_num; ?>],
					['旅游' ,<?php echo $trav_num; ?>],
					['农业' ,<?php echo  $agr_num; ?>],
					['其他' ,<?php echo  $oth_num; ?>]
            ]
        }]
    });
});



$(function () {
    // Create the chart
    $('#container2').highcharts({
        chart: {  type: 'column' },
        title: {  text: '<span style="font-size:12px;color:#990000">网站注册用户各地区最新分布图</span>' },
        subtitle: {  texxxt: 'Click the columns to view versions. ' },
        xAxis: {  type: 'category',
					style: {fontSize: '12px',color:'#330000',fontWeight:'plain'}
					},
        yAxis: { titlxxe: { text: 'Total share'	 },
                 style: {fontSize: '12px',color:'#330000',fontWeight:'plain'}

	    },
        legend: { enabled: false },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
					style: {'fontSize': '9px','color':'#330000','fontWeight':'plain'},
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> of <?php echo $total_num ; ?><br/>'
        },

        series: [{
            name: "网站注册用户数量：",
            colorByPoint: true,
            data: [
				  { name: '皖',y: <?php echo $n_ah; ?> },
				  { name: '京',y: <?php echo $n_bj; ?> },
				  { name: '津',y: <?php echo $n_tj; ?> },
				  { name: '沪',y: <?php echo $n_sh; ?> },
				  { name: '渝',y: <?php echo $n_cq; ?> },
				  { name: '黑',y: <?php echo $n_hlj; ?> },
				  { name: '吉',y: <?php echo $n_jl; ?> },
				  { name: '辽',y: <?php echo $n_ll; ?> },
				  { name: '豫',y: <?php echo $n_hn; ?> },
				  { name: '冀',y: <?php echo $n_hb; ?> },
				  { name: '鲁',y: <?php echo $n_sd; ?> },
				  { name: '晋',y: <?php echo $n_sx; ?> },
				  { name: '陕',y: <?php echo $n_shx; ?> },
				  { name: '湘',y: <?php echo $n_hun; ?> },
				  { name: '鄂',y: <?php echo $n_hub; ?> },
				  { name: '苏',y: <?php echo $n_js; ?> },
				  { name: '浙',y: <?php echo $n_zj; ?> },
				  { name: '赣',y: <?php echo $n_jx; ?> },
				  { name: '粤',y: <?php echo $n_gd; ?> },
				  { name: '闽',y: <?php echo $n_fj; ?> },
				  { name: '桂',y: <?php echo $n_gx; ?> },
				  { name: '滇',y: <?php echo $n_yn; ?> },
				  { name: '黔',y: <?php echo $n_gz; ?> },
				  { name: '川',y: <?php echo $n_sc; ?> },
				  { name: '未知',y: <?php echo $n_other; ?> }
				]
        }] //End of series
    }); //End of containers
});	//End of functions


		</script>


<script src="/js/highcharts.js"></script>
<script src="/js/highcharts-3d.js"></script>
<script src="/js/exporting.js"></script>


</td>
</tr>

