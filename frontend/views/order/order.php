<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://user.wbiao.cn/order -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="Cache-Control" content="no-transform">
<meta property="qc:admins" content="6751370427672117636">
<title>我的订单</title>
<meta name="keywords" content="">
<meta name="description" content="">


<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<link rel="stylesheet" href="css/sxg.css">
<script src="Script/jquery.js"></script>
<script src="Script/saved_resource"></script>
<link rel="stylesheet" href="css/user.css" type="text/css" media="screen, projection">
<script type="text/javascript" src="Script/user.js"></script>
<link rel="stylesheet" href="css/user.css">
<!-- Begin header -->
<div id="member_info2"></div>
<div class="head">
  <div class="r1 w1225">
  <div class="ri">
            <span class="tLnk2"><a href="?r=car/car"  >购物车</a></span>
            <span class="tLnk1"><a href="?r=login/login" class="f12">登录</a> <a href="?r=reg/reg" class="f12">注册</a></span>
    </div>
    </div>
<div class="r2 w1225">
        <h1 class="logo w440"><img src="css/images/LOGO.png" /></h1>
<div class="srh">
            <form id="searchForm" name="searchForm" method="get" action="/shoubiao.html" onsubmit="return checkSearchForm()"><input type="hidden" value="1" name="dow" id="dow">
                <input name="w" id="w" type="text" class="tIptTxt c999 f14" value="搜索 品牌/系列/型号" title="搜索 品牌/系列/型号" onfocus="javascript:var t=$(this); if(t.val()==t.attr('title')) t.val('');" onblur="javascript:var t=$(this); if(t.val()=='') t.val(t.attr('title'));" />
                <a class="c__search">搜索</b></a>
            </form>
        </div>
        <div class="wbPt">
          <span class="tTel" style="font-size:16px;">服务热线：400-888-8888</span>
    </div>
  </div>
<div class="r3 w1225" style="position:relative">
<div class="gSort" id="pop_menu">
    <span class="tit"><b class="ico c__category"></b>腕表分类</span>
</div>


<ul class="gNav">
    
      <li><a  title="首页" class="cur"  href="?r=index/index">首页</a></li>
                 <li><a target="_blank"  href="?r=tejia/tejia" title="本期特价">本期特价</a></li>       
                 <li><a target="_blank"  href="?r=time/time" title="限时抢购">限时抢购</a></li>
                 <li><a target="_blank"  href="?r=boy/boy" title="男士腕表">男士腕表</a></li>
                 <li><a target="_blank"  href="?r=girl/girl" title="女士腕表">女士腕表</a></li>     
                 <!-- <li><a target="_blank"  href="jimai.html" title="免费寄卖">免费寄卖</a></li>
                 <li><a href="huiyuan.html" target="_blank"  style="font-size:15px; color:#ce1739;" title="寻表专区/采购清单"><strong>寻表专区/采购清单</strong></a></li> -->
    </ul>
</div>
</div>

<!-- End header -->

<div id="main">
<div class="position">
    <a href="#"><strong>首页</strong></a>
    <i>&gt;</i>
    <a href="#" target="_blank" class="c0e7">我的喜悦手表</a>
    <i>&gt;</i>
    <span>我的订单</span>
</div>
<div class="rightArea">
    <!-- 便利提醒 Begin -->
    <div class="prompt">
        <div class="pr_top">
            <b class="tit">我的订单</b>
            <div id="contact_kf_div" class="u__kf" onclick="javascript:NTKF.im_openInPageChat(&#39;kf_9988_1341905703263&#39;);_gaq.push([&#39;_trackEvent&#39;,&#39;kefuxiaochuang&#39;, &#39;tousu&#39;, location.href]);"></div>
        </div>

    </div>
    <!-- 便利提醒 End -->

    <div class="clear"></div>
        <!-- order表单 Begin -->
    <div class="odrTab">
        <div class="ot_top">
            <form action="">
                <div class="left">
                    <select name="datetime">
                        <option selected="selected" value="">所有订单</option>
                        <option value="1">近一个月订单</option>
                        <option value="2">近三个月订单</option>
                        <option value="3">近一年订单</option>
                    </select>
                    <select name="order_status">
                                                <option value="">全部状态</option>
                                                    <option value="1">未确认</option>
                                                    <option value="2">确认中</option>
                                                    <option value="3">已确认</option>
                                                    <option value="4">待发货</option>
                                                    <option value="5">分单发货中</option>
                                                    <option value="6">已发货</option>
                                                    <option value="7">已取消</option>
                                                    <option value="8">待支付</option>
                                            </select>

                </div>
                <div class="right">
                    &lt;订单编号：&gt;<!--订单编号：-->
                    <input type="text" class="txt" name="order_id" value="" onfocus="javascript:$(this).val(&#39;&#39;);">
                    <input type="submit" class="lookup" value="查询">
                </div>
            </form>
        </div>
    </div>
    <div class="account">
        <div class="hisOrd">
                <table class="ho_middle" cellpadding="0" cellspacing="0">
                    <tbody><tr class="t">
                        <td class="w120">订单编号</td>
                        <td class="w186">订单商品</td>
                        <td class="w75">收货人</td>
                        <td class="w111">订单金额</td>
                        <td class="w87">下单时间</td>
                        <td class="w87">订单状态</td>
                        <td class="w130">操作</td>
                    </tr>
                                                                <tr class="c">
                            <td class="w120 h70"><a class="c0e7" target="_blank" href="#">2014041284656</a></td>
                            <td class="w186 adjust02" style="text-align:left;">
                                                                    <a target="_blank" title="瑞士爱宝时（EPOS）-Passion系列 3412.183.24.30.27 机械男表" href="#"><img alt="瑞士爱宝时（EPOS）-Passion系列 3412.183.24.30.27 机械男表" src="images/3412_183_24_30_27_27885.jpg"></a>
                                                            </td>
                            <td class="w75 h70"><font class="c333">小新</font></td>
                            <td class="w111 adjust01">
                                <font class="cb01">￥9500.00</font><br>
                                                                                            </td>
                            <td class="w87 adjust01">
                                <div>2014-04-12 17:03:34</div>
                            </td>
                            <td class="w87 h70"><font class="c888">确认中</font></td>
                            <td class="w130 adjust03">
                                <a class="c0e7" target="_blank" href="#">查看</a>
                                <span>|</span>
                                                        <a class="c0e7" href="#">评论</a>
                                                        <span>|</span>
                                <a class="c0e7" href="javascript:void(0);" style="padding: 0px; margin: 0px; display: inline-block; width: 28px;">
                                                            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" style="float:none;" data="{&#39;pic&#39;:&#39;http://imgd12.wbiao.cn/201303/01/3412_183_24_30_27_27885.jpg&#39;, &#39;text&#39;:&#39;瑞士爱宝时（EPOS）-Passion系列 3412.183.24.30.27 机械男表;  喜悦手表网（www.wbiao.cn）专注经营欧米茄、浪琴、赫柏林、DAVOSA等原装正品中高档世界名表，支持信用卡分期付款、尊享全球联保服务！买手表，上喜悦手表网！400-883-2688！&#39;, &#39;url&#39;:&#39;http://www.wbiao.cn/epos-g25523.html&#39;, &#39;wbUid&#39;:1834746210, &#39;snsKey&#39;:{&#39;tsina&#39;:&#39;2617921517&#39;,&#39;tqq&#39;:&#39;221680&#39;} }">
                                        <span class="bds_more2">分享</span>
                                    </div>
                                                        </a>
                                                                    <span>|</span>
                                    <a class="cb01" href="#">支付</a>
                                                                                                                                    <br>
                                <a href="javascript:void(0);" class="c0e7" onclick="javascript:NTKF.im_openInPageChat(&#39;kf_9988_1342405770356&#39;);_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;, &#39;shouhou&#39;, location.href]);">申请返修/退换货</a>
                            </td>
                        </tr>
                                                        </tbody></table>
        </div>
    </div>
    <!-- order表单 End -->

    <!-- 翻页 Begin -->
        <!-- 翻页 End -->

</div>

<!-- 左边菜单 Begin -->
<div class="leftArea">
    <div class="leftArea">
    <div class="u__mine"><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_index&#39;,&#39;http://user.wbiao.cn/&#39;]);" href="http://user.wbiao.cn/" style="display: block; height: 100%;"></a></div>
    <div class="floor">
        <div class="t"><i class="u__trade"></i><font class="f_fixed">交易管理</font></div>
        <div class="c">
            <ul>
                <li><i class="u__point"></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_order&#39;,&#39;/order&#39;]);" href="Script/yonghu.htm" class="ccf0" title="我的订单" rel="nofollow">我的订单 (<span class="cb01">1</span>)</a></li>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_orderbooking&#39;,&#39;/orderbooking&#39;]);" href="#" title="我的预售" rel="nofollow">我的预售 (<span class="cb01">0</span>)</a></li>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_address&#39;,&#39;/address&#39;]);" href="#" title="收货地址" rel="nofollow">收货地址</a></li>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_giftcard&#39;,&#39;/giftcard&#39;]);" href="#" title="礼品卡" rel="nofollow">礼品卡</a></li>
                <li style="border:0;"><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_bonus&#39;,&#39;/bonus&#39;]);" href="#" title="代金券/优惠券" rel="nofollow">代金券/优惠券</a></li>
            </ul>
        </div>
    </div>
    <div class="floor">
        <div class="t"><i class="u__datum"></i><font class="f_fixed">账户管理</font></div>
        <div class="c">
            <ul>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_profile&#39;,&#39;/profile&#39;]);" href="#" title="个人资料" rel="nofollow">个人资料</a></li>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_password&#39;,&#39;/password&#39;]);" href="#" title="修改密码" rel="nofollow">修改密码</a></li>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_collection&#39;,&#39;/collection&#39;]);" href="#" title="我的收藏" rel="nofollow">我的收藏</a></li>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_history_record&#39;,&#39;/history/record&#39;]);" href="#" title="浏览历史" rel="nofollow">浏览历史</a></li>
                <li style="border:0;"><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_recommend&#39;,&#39;/recommend&#39;]);" href="http://user.wbiao.cn/recommend" title="为我推荐" rel="nofollow">为我推荐</a></li>
            </ul>
        </div>
    </div>
    <div class="floor">
        <div class="t"><i class="u__integral"></i><font class="f_fixed">积分管理</font></div>
        <div class="c">
            <ul>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_points&#39;,&#39;/points&#39;]);" href="#" title="我的积分" rel="nofollow">我的积分</a></li>
                <li><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_points_detail&#39;,&#39;/points/detail&#39;]);" href="#" title="积分细则" rel="nofollow">积分细则</a></li>
                <li style="border:0;"><i></i><a onclick="_gaq.push([&#39;_trackEvent&#39;,&#39;user&#39;,&#39;user_recommend_gift&#39;,&#39;/recommend/gift&#39;]);" href="#" title="推荐有礼" rel="nofollow">推荐有礼</a></li>
            </ul>
        </div>
    </div>
    <div class="floor">
        <div class="t"><i class="u__service"></i><font class="f_fixed">消息管理</font></div>
        <div class="c">
            <ul>
                <li><i></i><a href="#" title="购买咨询" rel="nofollow">购买咨询</a></li>
                <li><i></i><a href="#" title="我的评论" rel="nofollow">我的评论</a></li>
                <li style="border:0;"><i></i><a href="#" title="我的消息" rel="nofollow">我的消息</a></li>
                <li style="border:0;"><i></i><a href="#" title="促销通知" rel="nofollow">促销通知</a></li>
            </ul>
        </div>
    </div>
    <div class="floor">
        <div class="t"><i class="u__star"></i><font class="f_fixed">喜悦手表会员</font></div>
        <div class="c">
            <ul>
                <li><i></i><a href="#" title="会员简介" rel="nofollow">会员简介</a></li>
            </ul>
        </div>
    </div>
    <div class="logout">
        <a href="#" class="c999">退出登录</a>
    </div>
</div></div>
<!-- 左边菜单 End -->

</div>






<!-- Begin footer -->

<div class="foot">
      <div class="r1 w1225">
        <dl class=" w188">
            <dd class=" w110">
                <a href="/help-706.html" target="_blank" rel="nofollow"><img src="css/images/logoxia.png"/></a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>新手</i></dt>
            <dd class=" w110">
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;用户注册</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;找回密码</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;订购流程</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>支付</i></dt>
            <dd class=" w110">
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;支付方式</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;发票说明</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;支付问题</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>配送</i></dt>
            <dd class=" w110">
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;配送方式</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;配送说明</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;包裹签收</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>保障</i></dt>
            <dd class=" w110">
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;退换货政策说明</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;如何办理退货</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;常见问题</a>
            </dd>
        </dl>
        <dl class=" w188">
            <dt class=" w70"><i>寄卖</i></dt>
            <dd class=" w110">
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;寄卖流程</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;寄卖说明</a>
                <a href="" target="_blank" rel="nofollow">&bull;&nbsp;调价与撤卖</a>
            </dd>
        </dl>
    </div>
    <div class="r2 w1225 wide">
        <div class="f333 tmallLinks">
        <a href="" target="_blank" rel="nofollow">正品保证</a>&nbsp;|&nbsp;
        <a href="" target="_blank" rel="nofollow">7天退货</a>&nbsp;|&nbsp;
        <a href="" target="_blank">售后维修 </a>&nbsp;|&nbsp;
        <a href="" target="_blank">全场包邮</a>&nbsp;|&nbsp;
        <a href="" target="_blank" rel="nofollow">投诉建议</a>
        </div>
        <div>
                喜悦名表 版权所有  Copyright 2014-2015 www.xxxxxxx.cn . LTD ALL RIGHT RESERVED.
            <br/>
        </div>
    </div>
</div>
<!-- End footer -->
<div id="floatBox">
    <div id="return">
        <a href="javascript:void(0);" class="c__gotop" title="返回顶部" style="display:none;" rel="nofollow"></a>
    </div>
</div>
</body>
</html>
