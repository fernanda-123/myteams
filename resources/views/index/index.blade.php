<html lang="en" class="">
<head>
    <title>myteams - 我的团队1455526970310</title>
    <meta content="webkit" name="renderer" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="initial-scale=1.0, user-scalable=no" name="viewport" />
    <!-- <link type="text/css" rel="stylesheet" href="css/eteams.ui.css" /> -->
    <link href="{{asset('css/eteams.ui.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- <link type="text/css" rel="stylesheet" href="css/eteams.ui.min.css" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="css/plugins.css" /> -->
    <link href="{{asset('css/plugins.min.css?v=1.1')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/eteams.min1.css?v=1f6c37dde395eb63024a38bc63648cdd')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/eteams.min2.css?v=1f6c37dde395eb63024a38bc63648cdd')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/all-crm.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/css_f.css')}}" rel="stylesheet" type="text/css" />
    <script src="js/index.js"></script>
    <style type="text/css">.fancybox-margin{margin-right:0px;}</style>
</head>
<body class="">
@include('index.header')
<div id="mainContainer">
    <div class="i-view">
        <div class="i-content">
            <div class="i-main-col">
                <div class="i-communicate table-tray clearfix">
                    <div class="i-communicate-side tray-cell" id="j_communi-menu">
                        <div class="i-timer">
                            <a class="checkin-btn tran-bg fr j_check_inOrOut" id="check-out">签退</a>
                            <time><p id="j_timeHour" class="hour"></p><p id="j_timeYear" class="date"></p></time>
                        </div>
                        <div class="j_dynamic-all i-dynamic-checkall j_menu-item">
                            团队工作动态
                        </div>
                        <div class="i-member-wrapper">
                            <div class="i-member-head">
                                <div class="tab j_memberTab">
                                    <a data-show="#memberlist-wrapper" class="active"><i title="" data-placement="top" data-toggle="tooltip" class="graph" data-original-title="消息"></i></a>
                                    <a data-show="#member-book"><i title="" data-placement="top" data-toggle="tooltip" class="graph" data-original-title="通讯录"></i></a>
                                    <a data-show="#memberSch"><i title="" data-placement="top" data-toggle="tooltip" class="graph" data-original-title="查找人员"></i></a>
                                </div>
                            </div>
                            <div marginbottom="10" class="j_memberlist-wrapper scrollwrapper mCustomScrollbar _mCS_3 mCS_no_scrollbar" style="height: 413px;">
                                <div class="mCustomScrollBox mCS-darkblue mCSB_vertical mCSB_inside" id="mCSB_3" tabindex="0">
                                    <div dir="ltr" style="position:relative; top:0; left:0;" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" id="mCSB_3_container">
                                        <div class="i-member-body">
                                            <div class="i-member-book search-input hide" id="memberSch">
                                                <div class="membersch-input">
                                                    <input type="text" placeholder="搜索" class="form-control form-control-block" id="j_memberSchInput" />
                                                </div>
                                                <div class="member-book" id="j_memberSch_list">
                                                    <dl class="j_mesSchList_dl"></dl>
                                                    <div class="loading_small hide">
                                                        <span>正在加载，请稍后...</span>
                                                    </div>
                                                    <div class="no-result hide">
                                                        无相关数据
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="memberlist-wrapper">
                                                <div class="i-member-list j_member-list">
                                                    <div class="j_mesDiv j_mesFixed">
                                                        <div class="list-item j_menu-item active" data-entity="share">
                                                            <time></time>
                                                            <div class="count"></div>
                                                            <div class="j_avatar avatar">
                                                                <img src="images/avatar_group.png" />
                                                            </div>
                                                            <div class="info">
                                                                <p class="j_name name ellipsis" title="团队分享">团队分享</p>
                                                                <div class="j_info msg-text ellipsis">
                                                                    分享工作或参考信息
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item j_menu-item" id="10000" data-service-no="true" data-entity="employee">
                                                            <time>02-25</time>
                                                            <div class="count" title="1">
                                                                1
                                                            </div>
                                                            <div class="j_avatar avatar">
                                                                <img src="images/avatar_assistant.png" />
                                                            </div>
                                                            <div class="info">
                                                                <p class="j_name name ellipsis" title="eteams服务号">eteams服务号</p>
                                                                <div class="j_info msg-text ellipsis" title="eteams在您的支...">
                                                                    eteams在您的支...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="j_mesDiv j_mesRecent"></div>
                                                    <div class="loading_small hide">
                                                        <span>正在加载，请稍后...</span>
                                                    </div>
                                                    <div class="j_recent_more i-member-more hide">
                                                        更多...
                                                    </div>
                                                </div>
                                                <div class="i-member-guide hide">
                                                    <a class="btn btn-sm btn-block btn-success">邀请同事</a>
                                                    <a class="btn btn-sm btn-block btn-info">发起聊天</a>
                                                </div>
                                            </div>
                                            <div class="i-member-book hide" id="member-book">
                                                <div class="member-book j_memberbookScr">
                                                    <div class="loading_small hide">
                                                        <span>正在加载，请稍后...</span>
                                                    </div>
                                                </div>
                                                <div pageno="2" class="j_member_more i-member-more hide">
                                                    更多...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mCSB_scrollTools mCSB_3_scrollbar mCS-darkblue mCSB_scrollTools_vertical" id="mCSB_3_scrollbar_vertical" style="display: none;">
                                        <div class="mCSB_draggerContainer">
                                            <div oncontextmenu="return false;" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" class="mCSB_dragger" id="mCSB_3_dragger_vertical">
                                                <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                            </div>
                                            <div class="mCSB_draggerRail"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hide">
                            <div class="list-item j_menu-item" id="j_mesRecentlyClone">
                                <time></time>
                                <div class="count"></div>
                                <div class="j_avatar avatar"></div>
                                <div class="info">
                                    <p class="j_name name ellipsis"></p>
                                    <div class="j_info msg-text ellipsis"></div>
                                </div>
                            </div>
                            <div class="list-item j_menu-item" id="j_mesSearchClone">
                                <div class="j_avatar avatar"></div>
                                <span class="j_name name ellipsis"></span>
                            </div>
                            <div id="j_memberGroupClone">
                                <dl id="list-history#">
                                    <dt>
                                        #
                                    </dt>
                                </dl>
                            </div>
                            <div id="j_memberItemClone">
                                <dd data-chat-type="singleChat" data-entity="employee" class="j_member_item j_menu-item">
                                    <div class="j_avatar avatar cs-p">
                                        <img src="images/avatar.png" />
                                    </div>
                                    <div class="j_name name ellipsis"></div>
                                </dd>
                            </div>
                            <div id="j_allMemberServiceClone">
                                <dl title="eteams服务号" class="system" id="j_allEmployeeService">
                                    <dt>
                                        系统
                                    </dt>
                                    <dd data-chat-type="singleChat" data-entity="employee" data-service-no="true" class="j_member_item j_menu-item">
                                        <div class="j_avatar avatar">
                                            <img src="images/service.png" />
                                        </div>
                                        <div class="j_name name ellipsis">
                                            eteams服务号
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                            <div id="j_employGroupClone">
                                <dl class="j_employ_group group">
                                    <dt>
                                        群组
                                        <i class="icon-angle-right"></i>
                                    </dt>
                                    <div class="j_groupInviteTip tip hide">
                                        您还没有加入或创建过群组，若需要，您可以在与同事的对话界面直接添加成员，系统会自动建立新群组
                                    </div>
                                    <div class="loading_small hide">
                                        <span>正在加载，请稍后...</span>
                                    </div>
                                </dl>
                            </div>
                            <div id="j_groupClone">
                                <dd data-chat-type="groupChat" data-entity="channel" class="j_group_item j_menu-item">
                                    <div class="j_avatar avatar">
                                        <img src="images/group.png" />
                                    </div>
                                    <div class="j_name name ellipsis"></div>
                                </dd>
                            </div>
                            <div class="smwx-invite-tip text-center c-999 fs-12" id="j_oneEmpPanelClone">
                                团队人员少，请邀请同事加入协作吧！
                                <div class="mt-10">
                                    <a class="invite-toggle btn btn-danger btn-sm">邀请同事加入</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="i-communicate-main tray-cell" id="j_communi-main">
                        <div class="i-message-channel" id="j_communi-content">
                            <div class="j_channel_hd channel-hd share-hd" id="j_dyna" type="share">
                                <div class="j_avatar cover">
                                    <img src="images/avatar_group.png" />
                                </div>
                                <p class="j_name title ellipis">团队分享</p>
                                <ul class="nav j_dynamicTab hide">
                                    <li data-filter-type="workAll" class="active"><a>所有</a></li>
                                    <li data-filter-type="blog"><a>日报</a></li>
                                    <li data-filter-type="task"><a>任务</a></li>
                                    <li data-filter-type="calendar"><a>日程</a></li>
                                    <li data-filter-type="mainline"><a>项目</a></li>
                                    <li data-filter-type="customer"><a>客户</a></li>
                                    <li data-filter-type="saleChance"><a>商机</a></li>
                                    <li data-filter-type="production"><a>产品</a></li>
                                    <li data-filter-type="workflow"><a>审批</a></li>
                                    <li data-filter-type="document"><a>文档</a></li>
                                    <li data-filter-type="workreport"><a>报告</a></li>
                                </ul>
                                <ul class="nav-child hide j_dynamicTab-more">
                                    <li class="dropdown dropdown-menu-toggle"><a class="dropdown-toggle">更多<i class="icon-angle-down"></i></a>
                                        <ul class="j_dynamicTab-sub dropdown-menu border-dropdown">
                                            <li data-filter-type="workAll" class="active"><a>所有</a></li>
                                            <li data-filter-type="blog"><a>日报</a></li>
                                            <li data-filter-type="task"><a>任务</a></li>
                                            <li data-filter-type="calendar"><a>日程</a></li>
                                            <li data-filter-type="mainline"><a>项目</a></li>
                                            <li data-filter-type="customer"><a>客户</a></li>
                                            <li data-filter-type="saleChance"><a>商机</a></li>
                                            <li data-filter-type="production"><a>产品</a></li>
                                            <li data-filter-type="workflow"><a>审批</a></li>
                                            <li data-filter-type="document"><a>文档</a></li>
                                            <li data-filter-type="workreport"><a>报告</a></li>
                                        </ul></li>
                                </ul>
                                <ul class="nav j_shareTab">
                                    <li data-filter-type="share" class="active"><a>所有</a></li>
                                    <li data-filter-type="shareAtme"><a>@我的</a></li>
                                    <li data-filter-type="shareReplay"><a>评论我的</a></li>
                                    <li data-filter-type="likeme"><a>赞我的</a></li>
                                    <li data-filter-type="mine"><a>我的分享</a></li>
                                </ul>
                                <ul class="nav-child hide j_shareTab-more">
                                    <li class="dropdown dropdown-menu-toggle"><a class="dropdown-toggle">更多<i class="icon-angle-down"></i></a>
                                        <ul class="j_shareTab-sub dropdown-menu border-dropdown">
                                            <li data-filter-type="share" class="active hide"><a>所有</a></li>
                                            <li data-filter-type="shareAtme" class="hide"><a>@我的</a></li>
                                            <li data-filter-type="shareReplay" class="hide"><a>评论我的</a></li>
                                            <li data-filter-type="likeme" class="hide"><a>赞我的</a></li>
                                            <li data-filter-type="mine" class="hide"><a>我的分享</a></li>
                                        </ul></li>
                                </ul>
                                <div class="toollist-box">
                                    <ul class="toolkit-list fr teamwork-list">
                                        <li class="toolkit-item search search-right"><input type="text" class="form-control" id="j_dyna_searchinput" /><i title="搜索" class="icon-search"></i></li>
                                        <li class="toolkit-item">
                                            <div class="dropdown dropdown-menu-toggle w-120 dropdown-gettext">
                                                <a class="selectui-result dropdown-toggle">全团队<i class="icon-angle-down"></i></a>
                                                <ul style="display: none;" class="j_dyna-range dropdown-menu border-dropdown w-120">
                                                    <li data-range="company" class="j_company hide"><a>全团队</a></li>
                                                    <li data-range="department" class="j_department"><a>本部门</a></li>
                                                </ul>
                                            </div></li>
                                        <li class="toolkit-item">
                                            <div class="btn-group dropdown dropdown-menu-toggle j_dropdownMenuToggle">
                                                <a class="btn btn-sm dropdown-toggle">日期
                                                    <iclass="icon-caret-down"></iclass="icon-caret-down"></a>
                                                <div class="dropdown-menu border-dropdown dropdown-menu-right j_dropDownMenu">
                                                    <div class="inline" id="dyna-datepicker">
                                                        <div class="datetimepicker datetimepicker-inline">
                                                            <div class="datetimepicker-minutes" style="display: none;">
                                                                <table class=" table-condensed">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                                                                        <th class="switch" colspan="5">29 二月 2016</th>
                                                                        <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span class="minute active">0:00</span><span class="minute">0:05</span><span class="minute">0:10</span><span class="minute">0:15</span><span class="minute">0:20</span><span class="minute">0:25</span><span class="minute">0:30</span><span class="minute">0:35</span><span class="minute">0:40</span><span class="minute">0:45</span><span class="minute">0:50</span><span class="minute">0:55</span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th class="dategroup" colspan="7" style="display: none;">
                                                                            <div class="today">
                                                                                今天
                                                                            </div>
                                                                            <div class="tomorrow">
                                                                                明天
                                                                            </div>
                                                                            <div class="upcoming">
                                                                                即将
                                                                            </div>
                                                                            <div class="someday">
                                                                                无日期
                                                                            </div></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                            <div class="datetimepicker-hours" style="display: none;">
                                                                <table class=" table-condensed">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                                                                        <th class="switch" colspan="5">29 二月 2016</th>
                                                                        <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td colspan="7">
                                                                            <fieldset class="hour">
                                                                                <legend></legend>
                                                                                <span minute="0" hour="0" style="font-size:12px;font-weight: bold;" class="hour active hour_am">0</span>
                                                                                <span minute="30" hour="0" class="hour halfhour hour_am">0:30</span>
                                                                                <span minute="0" hour="1" style="font-size:12px;font-weight: bold;" class="hour hour_am">1</span>
                                                                                <span minute="30" hour="1" class="hour halfhour hour_am">1:30</span>
                                                                                <span minute="0" hour="2" style="font-size:12px;font-weight: bold;" class="hour hour_am">2</span>
                                                                                <span minute="30" hour="2" class="hour halfhour hour_am">2:30</span>
                                                                                <span minute="0" hour="3" style="font-size:12px;font-weight: bold;" class="hour hour_am">3</span>
                                                                                <span minute="30" hour="3" class="hour halfhour hour_am">3:30</span>
                                                                                <span minute="0" hour="4" style="font-size:12px;font-weight: bold;" class="hour hour_am">4</span>
                                                                                <span minute="30" hour="4" class="hour halfhour hour_am">4:30</span>
                                                                                <span minute="0" hour="5" style="font-size:12px;font-weight: bold;" class="hour hour_am">5</span>
                                                                                <span minute="30" hour="5" class="hour halfhour hour_am">5:30</span>
                                                                                <span minute="0" hour="6" style="font-size:12px;font-weight: bold;" class="hour hour_am">6</span>
                                                                                <span minute="30" hour="6" class="hour halfhour hour_am">6:30</span>
                                                                                <span minute="0" hour="7" style="font-size:12px;font-weight: bold;" class="hour hour_am">7</span>
                                                                                <span minute="30" hour="7" class="hour halfhour hour_am">7:30</span>
                                                                                <span minute="0" hour="8" style="font-size:12px;font-weight: bold;" class="hour hour_am">8</span>
                                                                                <span minute="30" hour="8" class="hour halfhour hour_am">8:30</span>
                                                                                <span minute="0" hour="9" style="font-size:12px;font-weight: bold;" class="hour hour_am">9</span>
                                                                                <span minute="30" hour="9" class="hour halfhour hour_am">9:30</span>
                                                                                <span minute="0" hour="10" style="font-size:12px;font-weight: bold;" class="hour hour_am">10</span>
                                                                                <span minute="30" hour="10" class="hour halfhour hour_am">10:30</span>
                                                                                <span minute="0" hour="11" style="font-size:12px;font-weight: bold;" class="hour hour_am">11</span>
                                                                                <span minute="30" hour="11" class="hour halfhour hour_am">11:30</span>
                                                                                <span minute="0" hour="12" style="font-size:12px;font-weight: bold;" class="hour hour_pm">12</span>
                                                                                <span minute="30" hour="12" class="hour halfhour hour_pm">12:30</span>
                                                                                <span minute="0" hour="13" style="font-size:12px;font-weight: bold;" class="hour hour_pm">13</span>
                                                                                <span minute="30" hour="13" class="hour halfhour hour_pm">13:30</span>
                                                                                <span minute="0" hour="14" style="font-size:12px;font-weight: bold;" class="hour hour_pm">14</span>
                                                                                <span minute="30" hour="14" class="hour halfhour hour_pm">14:30</span>
                                                                                <span minute="0" hour="15" style="font-size:12px;font-weight: bold;" class="hour hour_pm">15</span>
                                                                                <span minute="30" hour="15" class="hour halfhour hour_pm">15:30</span>
                                                                                <span minute="0" hour="16" style="font-size:12px;font-weight: bold;" class="hour hour_pm">16</span>
                                                                                <span minute="30" hour="16" class="hour halfhour hour_pm">16:30</span>
                                                                                <span minute="0" hour="17" style="font-size:12px;font-weight: bold;" class="hour hour_pm">17</span>
                                                                                <span minute="30" hour="17" class="hour halfhour hour_pm">17:30</span>
                                                                                <span minute="0" hour="18" style="font-size:12px;font-weight: bold;" class="hour hour_pm">18</span>
                                                                                <span minute="30" hour="18" class="hour halfhour hour_pm">18:30</span>
                                                                                <span minute="0" hour="19" style="font-size:12px;font-weight: bold;" class="hour hour_pm">19</span>
                                                                                <span minute="30" hour="19" class="hour halfhour hour_pm">19:30</span>
                                                                                <span minute="0" hour="20" style="font-size:12px;font-weight: bold;" class="hour hour_pm">20</span>
                                                                                <span minute="30" hour="20" class="hour halfhour hour_pm">20:30</span>
                                                                                <span minute="0" hour="21" style="font-size:12px;font-weight: bold;" class="hour hour_pm">21</span>
                                                                                <span minute="30" hour="21" class="hour halfhour hour_pm">21:30</span>
                                                                                <span minute="0" hour="22" style="font-size:12px;font-weight: bold;" class="hour hour_pm">22</span>
                                                                                <span minute="30" hour="22" class="hour halfhour hour_pm">22:30</span>
                                                                                <span minute="0" hour="23" style="font-size:12px;font-weight: bold;" class="hour hour_pm">23</span>
                                                                                <span minute="30" hour="23" class="hour halfhour hour_pm">23:30</span>
                                                                            </fieldset></td>
                                                                    </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th class="dategroup" colspan="7" style="display: none;">
                                                                            <div class="today">
                                                                                今天
                                                                            </div>
                                                                            <div class="tomorrow">
                                                                                明天
                                                                            </div>
                                                                            <div class="upcoming">
                                                                                即将
                                                                            </div>
                                                                            <div class="someday">
                                                                                无日期
                                                                            </div></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                            <div class="datetimepicker-days" style="display: block;">
                                                                <table class=" table-condensed">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                                                                        <th class="switch" colspan="5">二月 2016</th>
                                                                        <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="dow">日</th>
                                                                        <th class="dow">一</th>
                                                                        <th class="dow">二</th>
                                                                        <th class="dow">三</th>
                                                                        <th class="dow">四</th>
                                                                        <th class="dow">五</th>
                                                                        <th class="dow">六</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="day old">31</td>
                                                                        <td class="day">1</td>
                                                                        <td class="day">2</td>
                                                                        <td class="day">3</td>
                                                                        <td class="day">4</td>
                                                                        <td class="day">5</td>
                                                                        <td class="day">6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="day">7</td>
                                                                        <td class="day">8</td>
                                                                        <td class="day">9</td>
                                                                        <td class="day">10</td>
                                                                        <td class="day">11</td>
                                                                        <td class="day">12</td>
                                                                        <td class="day">13</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="day">14</td>
                                                                        <td class="day">15</td>
                                                                        <td class="day">16</td>
                                                                        <td class="day">17</td>
                                                                        <td class="day">18</td>
                                                                        <td class="day">19</td>
                                                                        <td class="day">20</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="day">21</td>
                                                                        <td class="day">22</td>
                                                                        <td class="day">23</td>
                                                                        <td class="day">24</td>
                                                                        <td class="day">25</td>
                                                                        <td class="day">26</td>
                                                                        <td class="day">27</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="day">28</td>
                                                                        <td class="day today active">29</td>
                                                                        <td class="day new">1</td>
                                                                        <td class="day new">2</td>
                                                                        <td class="day new">3</td>
                                                                        <td class="day new">4</td>
                                                                        <td class="day new">5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="day new">6</td>
                                                                        <td class="day new">7</td>
                                                                        <td class="day new">8</td>
                                                                        <td class="day new">9</td>
                                                                        <td class="day new">10</td>
                                                                        <td class="day new">11</td>
                                                                        <td class="day new">12</td>
                                                                    </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th class="dategroup" colspan="7" style="display: none;">
                                                                            <div class="today">
                                                                                今天
                                                                            </div>
                                                                            <div class="tomorrow">
                                                                                明天
                                                                            </div>
                                                                            <div class="upcoming">
                                                                                即将
                                                                            </div>
                                                                            <div class="someday">
                                                                                无日期
                                                                            </div></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                            <div class="datetimepicker-months" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                                                                        <th class="switch" colspan="5">2016</th>
                                                                        <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span class="month">一月</span><span class="month active">二月</span><span class="month">三月</span><span class="month">四月</span><span class="month">五月</span><span class="month">六月</span><span class="month">七月</span><span class="month">八月</span><span class="month">九月</span><span class="month">十月</span><span class="month">十一月</span><span class="month">十二月</span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th class="dategroup" colspan="7" style="display: none;">
                                                                            <div class="today">
                                                                                今天
                                                                            </div>
                                                                            <div class="tomorrow">
                                                                                明天
                                                                            </div>
                                                                            <div class="upcoming">
                                                                                即将
                                                                            </div>
                                                                            <div class="someday">
                                                                                无日期
                                                                            </div></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                            <div class="datetimepicker-years" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="prev" style="visibility: visible;"><i class="icon-arrow-left"></i></th>
                                                                        <th class="switch" colspan="5">2010-2019</th>
                                                                        <th class="next" style="visibility: visible;"><i class="icon-arrow-right"></i></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year active">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <tr>
                                                                        <th class="dategroup" colspan="7" style="display: none;">
                                                                            <div class="today">
                                                                                今天
                                                                            </div>
                                                                            <div class="tomorrow">
                                                                                明天
                                                                            </div>
                                                                            <div class="upcoming">
                                                                                即将
                                                                            </div>
                                                                            <div class="someday">
                                                                                无日期
                                                                            </div></th>
                                                                    </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></li>
                                        <li class="j_tip toolkit-item hide"><i data-template="&lt;div class='tooltip i-tooltip' role='tooltip'&gt;&lt;div class='tooltip-arrow i-tooltip-arrow'&gt;&lt;/div&gt;&lt;div class='tooltip-inner i-tooltip-inner'&gt;&lt;/div&gt;&lt;/div&gt;" title="" data-placement="bottom" data-toggle="tooltip" class="icon-help" data-original-title="工作动态权限说明：您可以查看下属及参与事项的工作动态及其具体内容；非下属的工作动态属于无权限范围，仅能了解到TA的工作动作"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="j_channel_hd message-hd channel-hd hide" id="j_message">
                                <div class="j_messageImg graph brand"></div>
                                <p class="j_name title ellipis"></p>
                                <ul class="nav j_dynamicTab">
                                    <li isread="false" class="j_unread active"><a>未读</a></li>
                                    <li isread="true" class="j_read"><a>已读</a></li>
                                </ul>
                                <div class="toollist-box">
                                    <ul class="j_toolList toolkit-list">
                                        <li class="j_searchtool toolkit-item search search-right"><input type="text" name="searchsearch" class="form-control" id="j_mes_searchinput" /><i title="搜索" class="icon-search"></i></li>
                                        <li class="j_moduletool toolkit-item">
                                            <div class="dropdown dropdown-menu-toggle w-110 dropdown-gettext">
                                                <a class="selectui-result dropdown-toggle j_module_feed">全部<i class="icon-angle-down"></i></a>
                                                <ul style="display: none;" class="dropdown-menu border-dropdown j_detail_ul w-110">
                                                    <li default="true" data-module="all" class="j_all hide"><a>全部</a></li>
                                                    <li data-module="mainline" class="j_mainline"><a>项目</a></li>
                                                    <li data-module="task" class="j_task"><a>任务</a></li>
                                                    <li data-module="document" class="j_document"><a>文档</a></li>
                                                    <li data-module="customer" class="j_customer"><a>客户</a></li>
                                                    <li data-module="workflow" class="j_workflow"><a>审批</a></li>
                                                    <li data-module="workreport" class="j_workreport"><a>报告</a></li>
                                                    <li data-module="share" class="j_share"><a>分享</a></li>
                                                    <li data-module="calendar" class="j_agenda"><a>日程</a></li>
                                                    <li data-module="saleChance" class="j_saleChance"><a>商机</a></li>
                                                    <li data-module="production" class="j_production"><a>产品</a></li>
                                                    <li data-module="formdatareport" class="j_formdatareport"><a>数据上报</a></li>
                                                </ul>
                                            </div></li>
                                        <li class="j_markallread toolkit-item dropdown-arrow-pre"><a class="j_page_read btn btn-sm btn-primary">当页标记已读</a></li>
                                        <li class="j_markallread toolkit-item dropdown-arrow">
                                            <div class="btn-group dropdown dropdown-menu-toggle">
                                                <a class="dropdown-toggle btn btn-sm btn-primary"><i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right border-dropdown">
                                                    <li><a class="j_all_read">全部标记已读</a></li>
                                                </ul>
                                            </div></li>
                                        <li class="j_tip toolkit-item hide"><i data-template="&lt;div class='tooltip i-tooltip' role='tooltip'&gt;&lt;div class='tooltip-arrow i-tooltip-arrow'&gt;&lt;/div&gt;&lt;div class='tooltip-inner i-tooltip-inner'&gt;&lt;/div&gt;&lt;/div&gt;" title="" data-placement="bottom" data-html="true" data-toggle="tooltip" class="icon-help" data-original-title=""></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="j_channel_hd channel-hd i-chat-group-hd hide" id="j_employee">
                                <div class="j_avatar cover">
                                    <img src="images/avatar.png" />
                                </div>
                                <div class="chat-name">
                                    <div contenteditable="false" class="j_name chat-name-input disabled"></div>
                                    <div class="a-addmember j_members">
                                        <i class="icon-angle-down"></i>
                                    </div>
                                </div>
                                <ul class="nav j_dynamicTab">
                                    <li data-type="chat" class="j_titleChat active"><a>聊天</a></li>
                                    <li data-sub-type="workAll" data-type="dyna" class="j_titleworkDyna"><a>工作动态</a></li>
                                    <li data-sub-type="share" data-type="dyna" class="j_titleShare"><a>分享</a></li>
                                    <li data-sub-type="blog" data-type="dyna" class="j_titleBlog hide"><a>日报</a></li>
                                    <li data-type="workspace" class="j_titleWorkSpace hide"><a>进入其工作空间</a></li>
                                </ul>
                                <div class="toollist-box">
                                    <ul class="toolkit-list hide">
                                        <li class="toolkit-item search"><input type="text" name="searchsearch" class="form-control" /><i title="搜索" class="icon-search"></i></li>
                                    </ul>
                                </div>
                                <div class="addmember-layer j_membersLayer">
                                    <div class="inner">
                                        <ul class="j_membersUls">
                                            <li class="j_addLi add" id="j_memberAddCLone"><a data-multi="true" data-entity="employee" class="j_add_member selector-toggle" title="添加成员"><i class="icon-plus-thin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="j_channel_hd channel-hd i-chat-group-hd hide" id="j_channel">
                                <div class="j_avatar cover">
                                    <img src="images/group.png" />
                                </div>
                                <div class="chat-name">
                                    <div contenteditable="true" class="j_nameDiv chat-name-input disabled"></div>
                                    <div class="a-addmember j_members">
                                        <i class="icon-angle-down"></i>
                                    </div>
                                    <div title="退出群组" class="quit-channel j_quit-channel">
                                        <i class="icon-logout"></i>
                                    </div>
                                </div>
                                <ul class="nav j_dynamicTab">
                                    <li data-type="chat" class="active"><a>聊天</a></li>
                                </ul>
                                <div class="toollist-box">
                                    <ul class="toolkit-list hide">
                                        <li class="toolkit-item search"><input type="text" name="searchsearch" class="form-control" /><i title="搜索" class="icon-search"></i></li>
                                    </ul>
                                </div>
                                <div class="addmember-layer j_membersLayer">
                                    <div class="inner">
                                        <ul class="j_membersUls">
                                            <li class="j_addLi add"><a data-multi="true" data-entity="employee" class="j_add_member selector-toggle" title="添加成员"><i class="icon-plus-thin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="channel-bd" id="j_communi-body">
                                <div class="scrollwrapper mCus-mh100 mCustomScrollbar _mCS_4 mCS_no_scrollbar" id="j_all-dynamic" style="height: 563px;">
                                    <div class="mCustomScrollBox mCS-darkblue mCSB_vertical mCSB_inside" id="mCSB_4" tabindex="0">
                                        <div dir="ltr" style="position:relative; top:0; left:0;" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" id="mCSB_4_container">
                                            <div id="j_dynamic-post" class="i-dynamic-post clearfix">
                                                <div class="i-post j_focusEl j_content_area">
                                                    <div id="j_dync-area" class="i-post-input j_post">
                                                        <textarea placeholder="分享工作或行业等相关领域的外界动态或参考信息......" data-type="share" data-top="-6" data-left="-10" data-offsetpx="-4" isoffsetpx="true" id="share-textarea" class="j_postsize j_post_share j_at_area" style="overflow: hidden; word-wrap: break-word; resize: none; height: 60px;"></textarea>
                                                    </div>
                                                    <div id="j_post-area" class="i-post-handle" style="position: relative;">
                                                        <div class="clearfix handle-row j_post-row">
                                                            <a data-placement="top" data-toggle="tooltip" title="" data-original-title="点击添加表情" href="javascript:void(0)" class="dynamic-emoji"><i class="icon-smiley"></i></a>
                                                            <div id="dync-post-right">
                                                                <a data-type="share" id="btn-dync" class="post-submit btn btn-info fr">发布 </a>
                                                            </div>
                                                            <div class="j_share_area fr">
                                                                <div data-type="all" id="visibleType" class="dropdown dropdown-menu-toggle post-scope">
                                                                    <a class="selectui-result dropdown-toggle"><span class="j_share_area_text">公开</span><i class="icon-angle-down"></i></a>
                                                                    <ul style="display: none;" class="dropdown-menu border-dropdown">
                                                                        <li data-type="all"><a>公开</a></li>
                                                                        <li data-type="sup"><a>上级可见</a></li>
                                                                        <li data-type="department"><a>本部门可见</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="j_blog_tip hide">
                                                                <span class="j_blog_length_tips post-tip fr">还可以输入1000字</span>
                                                            </div>
                                                            <span class="j_feedback_area fl mr-20 hide">
                  <div class="j_links-dropdown dropdown dropdown-menu-toggle">
                   <a id="i-dync-feedback" class="a-feed"><i class="icon-link"></i>关联 <b class="caret"></b></a>
                   <ul class="dropdown-menu border-dropdown">
                    <li><a data-entity="task" for="#dync-feedback-task" class="relevance-module-task">相关任务</a></li>
                    <li><a data-entity="document" for="#dync-feedback-doc" class="relevance-module-task">相关文档</a></li>
                    <li><a data-entity="customer" for="#dync-feedback-crm" class="relevance-module-task">相关客户</a></li>
                    <li><a data-entity="workflow" for="#dync-feedback-flow" class="relevance-module-task">相关审批</a></li>
                   </ul>
                  </div></span>
                                                            <a data-placement="top" data-toggle="tooltip" title="" id="dync-post-attach" class="post-upload fs-14 fl" style="position: relative; z-index: 0;" data-original-title="请选择附件"><i class="icon-paperclip"></i></a>
                                                        </div>
                                                        <div class="j_detailCommands i-post-handle-extend clearfix module-detail-view entity-info">
                                                            <div icon="#i-feedback-task" class="clearfix entity-relevance control-group j_feedback hide" data-module="task" id="dync-feedback-task"></div>
                                                            <div icon="#i-feedback-task" class="clearfix entity-relevance control-group j_feedback hide" data-module="document" id="dync-feedback-doc"></div>
                                                            <div icon="#i-feedback-task" class="clearfix entity-relevance control-group j_feedback hide" data-module="customer" id="dync-feedback-crm"></div>
                                                            <div icon="#i-feedback-task" class="clearfix entity-relevance control-group j_feedback hide" data-module="workflow" id="dync-feedback-flow"></div>
                                                            <div icon="#i-feedback-flow" class="clearfix control-group hide" id="all-attachments">
                                                                <div class="j_att_title control-label">
                                                                    <i class="graph graph-16-attach"></i>附件:
                                                                </div>
                                                                <div class="controls">
                                                                    <div data-url="/base/upload/{id}.json" class="entity-container clearfix" id="dync-attachments"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="p1acl57ja61f2h1h6u88v16qa1k1r5_html5_container" style="position: absolute; background: transparent none repeat scroll 0% 0%; width: 0px; height: 0px; overflow: hidden; z-index: -1; opacity: 0; top: 0px; left: 0px;" class="plupload html5">
                                                            <input type="file" multiple="multiple" accept="" style="font-size: 999px; position: absolute; width: 100%; height: 100%;" id="p1acl57ja61f2h1h6u88v16qa1k1r5_html5" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="j_dyna-card-list i-dynamic-card-view">
                                                <div class="i-dynamic-card j_dyna-card" data-target-id="6995670418037646642" data-type="share" data-module="share">
                                                    <div class="avatar j_avatar usercard-toggle" userid="4525552697072306457">
                                                        <img src="images/avatar.png" />
                                                    </div>
                                                    <div class="card-detail">
                                                        <div class="info ellipsis">
                                                            <a class="usercard-toggle bold c-666 j_name" userid="4525552697072306457">wyb</a>
                                                            <span class="event j_event"></span>
                                                            <span class="j_new new hide">NEW</span>
                                                        </div>
                                                        <div class="text j_content">
                                                            今天心情不错
                                                            <img class="emoji-png" alt=":hushed:" src="images/hushed.png" />
                                                        </div>
                                                        <div class="js_blogallfiles">
                                                            <div data-url="/blog/deleteAttachments/{id}.json" class="js_blogfiles entity-container attachment"></div>
                                                            <div class="js_blogimgs"></div>
                                                        </div>
                                                        <div class="status">
                                                            <div class="opt fr j_opt">
                                                                <span class="a-feedback j_feedback"><span class="j_tip_feedback">评论</span>(<em>0</em>)<i class="arr"></i></span>
                                                                <span class="j_like j_a-like"><span class="j_praise" title="点赞"><i class="graph arr"></i><i class="icon-thumbs-up"></i>(<em>0</em>)</span>
                   <div class="like-pop j_like-pop">
                    <ul class="like-avatars j_like-avatars"></ul>
                   </div></span>
                                                            </div>
                                                            <time>2016-02-29 08:03:00</time>
                                                        </div>
                                                    </div>
                                                    <div class="i-like-wrapper j_more-wrapper hide">
                                                        <ul class="like-avatars j_like-wrapper"></ul>
                                                        <div class="like-pager j_like-pager">
                                                            <ul class="pagination pagination-sm">
                                                                <li class="disabled j_last_page j_change_page"><a title="上一页"><i class=" icon-chevron-left"></i></a></li>
                                                                <li class="j_next_page j_change_page"><a title="下一页"><i class=" icon-chevron-right"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-feed hide">
                                                        <div class="feed-post clearfix">
                                                            <div class="avatar usercard-toggle" userid="4525552697072306457">
                                                                <img src="images/avatar.png" title="wyb" />
                                                            </div>
                                                            <div class="feed-input-wrap j_feedWrap">
                                                                <div class="feed-input j_feedInput">
                                                                    <textarea style="overflow: hidden; word-wrap: break-word; resize: none; height: 40px;" placeholder="评论..." class="form-control form-block j_feedAuto"></textarea>
                                                                </div>
                                                                <div class="j_feedBtn feed-btn">
                                                                    <a class="send btn btn-xs fr btn-info">提交</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="feed-list j_feed-list hide"></ul>
                                                        <div class="loading_small hide j_loading">
                                                            <span>加载中...</span>
                                                        </div>
                                                        <div class="common-more nomg hide j_more">
                                                            加载更多
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="j_card-loading i-dynamic-loading mh-20 mb-20" style="display: none;">
                                                <span>数据加载中...</span>
                                            </div>
                                            <div class="common-nodata j_loadedAll hide">
                                                全部加载完成
                                            </div>
                                            <div class="common-nodata j_nodata hide" style="display: none;">
                                                没有可显示的内容
                                            </div>
                                        </div>
                                        <div class="mCSB_scrollTools mCSB_4_scrollbar mCS-darkblue mCSB_scrollTools_vertical" id="mCSB_4_scrollbar_vertical" style="display: none;">
                                            <div class="mCSB_draggerContainer">
                                                <div oncontextmenu="return false;" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" class="mCSB_dragger" id="mCSB_4_dragger_vertical">
                                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                </div>
                                                <div class="mCSB_draggerRail"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hide">
                                    <div class="js_blog_atta_image hide" id="blog-atta-image-clone">
                                        <span></span>
                                    </div>
                                    <div class="i-dynamic-card j_dyna-card" id="dynamic-card">
                                        <div class="avatar j_avatar usercard-toggle">
                                            <img src="images/avatar.png" />
                                        </div>
                                        <div class="card-detail">
                                            <div class="info ellipsis">
                                                <a class="usercard-toggle bold c-666 j_name"></a>
                                                <span class="event j_event"></span>
                                                <span class="j_new new hide">NEW</span>
                                            </div>
                                            <div class="text j_content"></div>
                                            <div class="js_blogallfiles">
                                                <div data-url="/blog/deleteAttachments/{id}.json" class="js_blogfiles entity-container attachment"></div>
                                                <div class="js_blogimgs"></div>
                                            </div>
                                            <div class="status">
                                                <div class="opt fr j_opt">
                                                    <span class="a-feedback j_feedback"><span class="j_tip_feedback">评论</span>(<em>0</em>)<i class="arr"></i></span>
                                                    <span class="j_like j_a-like"><span class="j_praise"><i class="graph arr"></i><i class="icon-thumbs-up"></i>(<em>0</em>)</span>
                <div class="like-pop j_like-pop">
                 <ul class="like-avatars j_like-avatars"></ul>
                </div></span>
                                                </div>
                                                <time>1900-01-01 00:00:00</time>
                                            </div>
                                        </div>
                                        <div class="i-like-wrapper j_more-wrapper hide">
                                            <ul class="like-avatars j_like-wrapper"></ul>
                                            <div class="like-pager j_like-pager">
                                                <ul class="pagination pagination-sm">
                                                    <li class="disabled j_last_page j_change_page"><a title="上一页"><i class=" icon-chevron-left"></i></a></li>
                                                    <li class="j_next_page j_change_page"><a title="下一页"><i class=" icon-chevron-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-feed hide">
                                            <div class="feed-post clearfix">
                                                <div class="avatar usercard-toggle">
                                                    <img src="images/avatar.png" />
                                                </div>
                                                <div class="feed-input-wrap j_feedWrap">
                                                    <div class="feed-input j_feedInput">
                                                        <textarea style="overflow: hidden; word-wrap: break-word; resize: none; height: 40px;" placeholder="评论..." class="form-control form-block j_feedAuto"></textarea>
                                                    </div>
                                                    <div class="j_feedBtn feed-btn">
                                                        <a class="send btn btn-xs fr btn-info">提交</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="feed-list j_feed-list hide"></ul>
                                            <div class="loading_small hide j_loading">
                                                <span>加载中...</span>
                                            </div>
                                            <div class="common-more nomg hide j_more">
                                                加载更多
                                            </div>
                                        </div>
                                    </div>
                                    <li class="list-item j_dyna-feed-item" id="dyna-feed-item">
                                        <div class="avatar usercard-toggle">
                                            <img src="images/avatar.png" />
                                        </div>
                                        <div class="hd">
                                            <a class="name usercard-toggle">康晓鸽</a>
                                        </div>
                                        <div class="content">
                                            abcdefg测试
                                        </div>
                                        <div undeleteable="true" class="comment-attachment entity-container attachment clearfix"></div><span class="parent-comment-body hide">回复<a style="display: inline;" userid="1553409649410197073" title="测试号" class="parent-username router usercard-toggle">@测试号: </a><span title="测试上传复位键" class="parent-content ellipsis">测试上传复位键</span></span>
                                        <div class="ft">
                                            <div class="action fr">
                                                <span class="j_item-feedback">回复</span>
                                            </div>
                                            <time>1900-01-01 00:00:00</time>
                                        </div>
                                        <div class="feed-post clearfix hide">
                                            <div class="avatar">
                                                <img src="images/avatar.png" />
                                            </div>
                                            <div class="feed-input-wrap j_feedWrap">
                                                <div class="feed-input j_feedInput">
                                                    <textarea style="overflow: hidden; word-wrap: break-word; resize: none; height: 40px;" placeholder="回复" class="form-control form-block j_feedAuto"></textarea>
                                                </div>
                                                <div class="j_feedBtn feed-btn">
                                                    <a class="send btn btn-xs fr btn-info">回复</a>
                                                </div>
                                            </div>
                                        </div></li>
                                </div>
                            </div>
                        </div>
                        <div class="i-communicate-holder hide" id="j_communicate-holder">
                            <div class="icon"></div>
                            <div class="text c-999">
                                欢迎使用一站式的团队协作和沟通平台
                                <br />目前您团队中只有您一人，请
                                <a type="modal" class="invite-toggle">邀请加入</a>更多的同事一起协作吧
                            </div>
                        </div>
                        <div class="hide">
                            <li class="usercard-toggle cs-p" id="j_memberCLone"><img src="images/avatar.png" title="" /></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="i-side-col">
                <div class="scrollwrapper mCustomScrollbar _mCS_5" id="j_mini-modules" style="height: 624px;">
                    <div class="mCustomScrollBox mCS-darkblue mCSB_vertical mCSB_inside" id="mCSB_5" tabindex="0">
                        <div dir="ltr" style="position:relative; top:0; left:0;" class="mCSB_container" id="mCSB_5_container">
                            <div class="i-side-col-inner">
                                <div class="i-tile clearfix j_tag_div titleNum_1">
                                    <div data-href="/feed/unfinish/all" class="i-tile-item ds-ib-w tran-bg unfinish j_title_item" id="j_unfinish">
                                        <i class="graph"></i>
                                        <div class="content">
                                            <p class="count">1</p>
                                            <p>未完成事项</p>
                                        </div>
                                    </div>
                                    <div data-href="/feed/watched/all" class="i-tile-item ds-ib-w tran-bg follow j_title_item hide" id="j_watched">
                                        <i class="graph"></i>
                                        <div class="content">
                                            <p class="count"></p>
                                            <p>关注事项</p>
                                        </div>
                                    </div>
                                    <div data-href="/tag/privacy/list" class="i-tile-item ds-ib-w tran-bg tags j_title_item hide" id="j_privacy">
                                        <i class="graph"></i>
                                        <div class="content">
                                            <p class="count"></p>
                                            <p>标签</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="3" id="modules-section" class="i-mini-modules j_portal-sortable ui-sortable">
                                    <div data-id="4" class="j_portal_notice j_portal-col portal-col portal-notice " id="placard-comtainer">
                                        <div class="dynamicinfo-pane" id="dynamicinfo">
                                            <div class="i-box i-placard placard" id="placard">
                                                <div class="i-box-head j_portal-col-head">
                                                    <ul class="j_portal-col-nav i-box-nav">
                                                        <li><a class="active cs-m">团队公告</a></li>
                                                        <li><a title="点击查看未查看过团队动态的人" class="placard-unreaders">(未阅人员)</a></li>
                                                    </ul>
                                                    <div class="i-box-action">
                                                        <a class="j_btn-remove"><i class="icon-remove"></i></a>
                                                        <a class="j_iboxSlide"><i class="icon-chevron-down"></i></a>
                                                    </div>
                                                    <div class="ds-ib fr">
                                                        <a class="placard-history-btn btn btn-sm btn-primary">历史</a> &nbsp;
                                                        <a class="placard-submit hide btn btn-sm btn-success">发布</a>
                                                        <a title="新建" class="placard-add btn btn-sm add-btn"><i class="icon-plus"></i></a>
                                                        <a title="保存" class="placard-change btn btn-sm btn-success hide">保存</a>
                                                    </div>
                                                </div>
                                                <div class="i-box-content">
                                                    <div class="placard-edit">
                                                        <textarea placeholder="点击这里直接发布公告" maxlength="3900" class="autosize portal-notice-content" name="placard.content" id="placard-textarea" style="overflow: hidden; word-wrap: break-word; resize: none; height: 109px;"></textarea>
                                                    </div>
                                                    <div class="placard-history hide">
                                                        <div class="placard-historys"></div>
                                                        <div class="placard-page-btn">
                                                            <a title="下一页" class="placard-next-disable" id="placard-next">下一页</a>
                                                            <a title="上一页" class="placard-pre-disable" id="placard-pre">上一页</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div height="230" class="i-placard-unreaders j_unreaderScr scrollwrapper hide mCustomScrollbar _mCS_6 mCS_no_scrollbar" id="unreaders-list" style="height: 230px;">
                                                <div class="mCustomScrollBox mCS-darkblue mCSB_vertical mCSB_inside" id="mCSB_6" style="max-height: 208px;" tabindex="0">
                                                    <div dir="ltr" style="position:relative; top:0; left:0;" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" id="mCSB_6_container"></div>
                                                    <div class="mCSB_scrollTools mCSB_6_scrollbar mCS-darkblue mCSB_scrollTools_vertical" id="mCSB_6_scrollbar_vertical" style="display: none;">
                                                        <div class="mCSB_draggerContainer">
                                                            <div oncontextmenu="return false;" style="position: absolute; min-height: 30px; top: 0px;" class="mCSB_dragger" id="mCSB_6_dragger_vertical">
                                                                <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                            </div>
                                                            <div class="mCSB_draggerRail"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="placard-history-box hide" id="placard-history-box-clone">
                                                <span class="placard-history-content  pointer ellipsis"></span>
                                                <span class="placard-history-date pointer"></span>
                                                <a class="placard-history-user usercard-toggle pointer"></a>
                                            </div>
                                            <div class="placard-history-card hide j_placard" id="placard-history-card">
                                                <div class="caption">
                                                    <a class="user usercard-toggle"></a>
                                                    <span class="date"></span>
                                                    <a class="close">&times;</a>
                                                </div>
                                                <div class="j_contentScr card-content">
                                                    <div class="content j_content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-id="6" class="j_portal_calendar j_portal-col i-box i-agenda ">
                                        <div class="j_portal-col-head i-box-head">
                                            <div class="i-box-action">
                                                <a type="calendar" class="j_btn-refresh"><i class="icon-refresh"></i></a>
                                                <a title="隐藏元素" class="j_btn-remove"><i class="icon-remove"></i></a>
                                                <a class="j_iboxSlide"><i class="icon-chevron-down"></i></a>
                                            </div>
                                            <h3 class="i-box-title">日程</h3>
                                        </div>
                                        <div class="i-box-content">
                                            <div class="i-box-timepicker" id="calendar-datatime">
                                                <div class="datepicker" style="height: 100%;">
                                                    <div class="datepicker-days" style="display: block; height: 100%;">
                                                        <table class="table-condensed table-full">
                                                            <thead>
                                                            <tr class="head-opt">
                                                                <th class="prev"><i class="icon-arrow-left"></i></th>
                                                                <th class="datepicker-switch" colspan="5"><span class="switch-month">二月29 - 三月6日</span><span class="switch-year">2016</span></th>
                                                                <th class="next"><i class="icon-arrow-right"></i></th>
                                                            </tr>
                                                            <tr>
                                                                <td class="dow">一</td>
                                                                <td class="dow">二</td>
                                                                <td class="dow">三</td>
                                                                <td class="dow">四</td>
                                                                <td class="dow">五</td>
                                                                <td class="dow">六</td>
                                                                <td class="dow">日</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="29D 2M 2016Y selected today" id="20160229">
                                                                    <div>
                                                                        29
                                                                    </div></td>
                                                                <td class="1D 3M 2016Y" id="20160301">
                                                                    <div>
                                                                        1
                                                                    </div></td>
                                                                <td class="2D 3M 2016Y" id="20160302">
                                                                    <div>
                                                                        2
                                                                    </div></td>
                                                                <td class="3D 3M 2016Y" id="20160303">
                                                                    <div>
                                                                        3
                                                                    </div></td>
                                                                <td class="4D 3M 2016Y" id="20160304">
                                                                    <div>
                                                                        4
                                                                    </div></td>
                                                                <td class="5D 3M 2016Y holiday" id="20160305">
                                                                    <div>
                                                                        5
                                                                    </div></td>
                                                                <td class="6D 3M 2016Y holiday" id="20160306">
                                                                    <div>
                                                                        6
                                                                    </div></td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot style="display: none;">
                                                            <tr>
                                                                <td class="foot-buttons" colspan="7"><span class="foot-today">今天</span><span class="foot-tomorrow">明天</span><span class="foot-future">即将</span><span class="foot-memo">备忘</span></td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-months" style="height: 100%;">
                                                        <table class="table-condensed table-full">
                                                            <thead>
                                                            <tr class="head-opt">
                                                                <th class="prev"><i class="icon-arrow-left"></i></th>
                                                                <th class="datepicker-switch" colspan="5">2016</th>
                                                                <th class="next"><i class="icon-arrow-right"></i></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span class="month">一月</span><span class="month">二月</span><span class="month">三月</span><span class="month">四月</span><span class="month">五月</span><span class="month">六月</span><span class="month">七月</span><span class="month">八月</span><span class="month">九月</span><span class="month">十月</span><span class="month">十一月</span><span class="month">十二月</span></td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot style="display: none;">
                                                            <tr>
                                                                <td class="foot-buttons" colspan="7"><span class="foot-today">今天</span><span class="foot-tomorrow">明天</span><span class="foot-future">即将</span><span class="foot-memo">备忘</span></td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-years" style="height: 100%;">
                                                        <table class="table-condensed table-full">
                                                            <thead>
                                                            <tr class="head-opt">
                                                                <th class="prev"><i class="icon-arrow-left"></i></th>
                                                                <th class="datepicker-switch" colspan="5">2016</th>
                                                                <th class="next"><i class="icon-arrow-right"></i></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span class="year old">2011</span><span class="year old">2012</span><span class="year old">2013</span><span class="year old">2014</span><span class="year old">2015</span><span class="year active">2016</span><span class="year new">2017</span><span class="year new">2018</span><span class="year new">2019</span><span class="year new">2020</span><span class="year new">2021</span><span class="year new">2022</span></td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot style="display: none;">
                                                            <tr>
                                                                <td class="foot-buttons" colspan="7"><span class="foot-today">今天</span><span class="foot-tomorrow">明天</span><span class="foot-future">即将</span><span class="foot-memo">备忘</span></td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="j_e-list e-list i-agenda-list" id="calendar-list">
                                                <div class="no-result">
                                                    无日程数据(双击日期数字安排日程)
                                                </div>
                                                <div class="loading_small hide" id="calendar-loading">
                                                    <span>正在加载数据，请稍后...</span>
                                                </div>
                                            </ul>
                                            <ul class="j_e-list e-list e-list  hide" id="sub-calendar-list">
                                                <div class="hide no-result">
                                                    无下属日程
                                                </div>
                                                <div class="loading_small" id="sub-calendar-loading">
                                                    <span>正在加载数据，请稍后...</span>
                                                </div>
                                            </ul>
                                        </div>
                                        <div class="i-box-footer">
                                            <div class="i-box-footer-btns">
                                                <a class="btn btn-sm" id="calendar-create"><i class="icon-calendar"></i> 安排日程</a>
                                                <a href="/calendar" class="btn btn-sm router">进入日程</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="i-mini-mouules-add clearfix">
                                    <a data-module="portalsetting" data-id="new" class="j_add_module entitybox-toggle"><i class="icon-plus-thin glyphicon"></i>添加首页快速入口</a>
                                </div>
                            </div>
                        </div>
                        <div class="mCSB_scrollTools mCSB_5_scrollbar mCS-darkblue mCSB_scrollTools_vertical" id="mCSB_5_scrollbar_vertical" style="display: block;">
                            <div class="mCSB_draggerContainer">
                                <div oncontextmenu="return false;" style="position: absolute; min-height: 30px; height: 530px; top: 0px; display: block; max-height: 614px;" class="mCSB_dragger" id="mCSB_5_dragger_vertical">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hide">
        <dl data-id="" data-module="mainline" class="entitybox-toggle j_mainline_item" id="mainline-clone">
            <dt class="percent"></dt>
            <dd class="title">
                <p class="j_name ellipsis"></p>
                <span class="user leader ellipsis"></span>
            </dd>
            <dd class="j_shortcut option">
                <span class="watch"><i class="icon-favourite"></i> 关注</span>
                <span class="finish"><i class="icon-todo"></i> 标记关闭</span>
                <span data-multi="true" data-entity="employee" class="share"><i class="icon-share"></i> 共享</span>
            </dd>
        </dl>
        <li data-id="" data-module="task" class="j_task-item entitybox-toggle" id="task-clone">
            <div class="title">
                <div data-module="task" class="text j_name ellipsis"></div>
            </div>
            <div class="right">
                <span class="comment-count"></span>
                <span class="user ellipsis"></span>
                <span class="date"></span>
            </div>
            <div class="shortcut">
                <span class="watch"><i class="icon-favourite"></i> 关注</span>
                <span class="finish"><i class="icon-todo"></i> 标记未完成</span>
                <span data-multi="true" data-entity="employee" class="share"><i class="icon-share"></i> 共享</span>
            </div></li>
        <li id="task-create-clone">
            <div class="title">
                <input type="text" maxlength="100" placeholder="一句话描述任务..." class="title" />
            </div></li>
        <dl class="j_portal-blog-item portal-blog-item clearfix" id="blog-clone">
            <dt class="avatar">
                <img src="images/avatar.png" />
            </dt>
            <dd class="blog-box">
                <div class="blog-header">
                    <span><a class="user  ellipsis usercard-toggle "></a></span>
                    <span class="time"></span>
                    <span class="new hide">NEW</span>
                </div>
                <div class="j_blog-body blog-body"></div>
                <div class="js_blogallfiles">
                    <div data-url="/base/upload/{id}.json" class="js_blogfiles entity-container attachment"></div>
                    <div class="js_blogimgs"></div>
                </div>
                <div class="j_blog-coord blog-coord hide">
                    <i title="地理位置" class="icon-map-marker"></i>
                    <span class="blog-address gps-address"></span>
                    <a class="blog-map-toggle gps-map hide">地图展示</a>
                </div>
                <div class="j_blog-detail blog-detail">
                    <p class="j_mainline-count "></p>
                    <p class="j_task-count "></p>
                    <p class="j_customer-count "></p>
                    <p class="j_document-count "></p>
                    <p class="j_workflow-count "></p>
                </div>
                <div class="ta-r italic c-999">
                    <span class="create-time"></span>
                </div>
            </dd>
        </dl>
        <div class="js_blog_atta_image hide" id="blog-atta-image-clone">
            <span></span>
        </div>
        <li data-id="" data-module="customer" class="j_portal_item entitybox-toggle" id="customer-clone">
            <div class="title">
                <div class="j_name text ellipsis "></div>
            </div>
            <div class="right">
                <span class="user ellipsis"></span>
                <span class="date"></span>
            </div>
            <div class="shortcut">
                <span class="watch"><i class="icon-favourite"></i>关注</span>
                <span data-multi="true" data-entity="employee" class="share"><i class="icon-share"></i> 共享</span>
            </div></li>
        <li data-id="" data-module="document" class="j_portal_item entitybox-toggle" id="document-clone"><span class="doc-icon"><i></i></span>
            <div class="title">
                <div class="j_name ellipsis text"></div>
            </div>
            <div class="right">
                <span class="user ellipsis"></span>
                <span class="date"></span>
            </div>
            <div class="shortcut">
                <span class="watch"><i class="icon-favourite"></i> 关注</span>
                <span data-multi="true" data-entity="employee" class="share"><i class="icon-share"></i> 共享</span>
            </div></li>
        <li data-id="" data-module="workflow" class="j_portal_item entitybox-toggle" id="workflow-clone">
            <div class="title">
                <div class="j_name text ellipsis"></div>
            </div>
            <div class="right">
                <span class="comment-count"></span>
                <span class="user ellipsis"></span>
                <span class="date"></span>
            </div>
            <div class="shortcut">
                <span class="watch"><i class="icon-favourite"></i> 关注</span>
                <span data-multi="true" data-entity="employee" class="share"><i class="icon-share"></i> 共享</span>
            </div></li>
        <li data-id="" data-module="agenda" class="j_agenda-entity" id="calendar-clone">
            <div class="title">
                <div class="j_name text ellipsis"></div>
            </div>
            <div class="right">
                <span class="user ellipsis"></span>
                <span class="date"></span>
            </div></li>
    </div>
</div>
<div class="j_stretchBox module-detail-slide" id="entitySlider"></div>
<div class="goto-top graph hide"></div>
<script src="js/libs.js"></script>
<script src="js/plugins.js?v=1.1"></script>
<script type="text/javascript">var ETEAMSID = 'a243dc15122b26354ae992f096c1841a'; var TEAMS = {"service":{"base":"https://www.eteams.cn","crm":"https://www.eteams.cn/crmapp","passport":"https://passport.eteams.cn","biaoge":"http://www.ebiaoge.com","websocket":"mc.eteams.cn:8443","mcConnector":"mc.eteams.cn:5023/mc","mcManager":"https://www.eteams.cn/manager"},"currentUser":{"username":"wyb","mobile":"18228088215","status":"normal","department":{"name":"\u6211\u7684\u56E2\u961F1455526970310","id":"4525552697104506466"},"secLevel":0,"authorities":[{"authority":"ROLE_USER"},{"authority":"ROLE_ADMIN"}],"activeDate":1455526971000,"loginAccount":"18228088215","loginCount":22,"lastLoginTime":1456702014000,"rank":"boss","admin":true,"name":"wyb","id":"4525552697072306457","userId":"4525552693524058287","employeeId":"4525552697072306457"},"currentTenant":{"tenantKey":"tb1yh58m28","tenantName":"\u6211\u7684\u56E2\u961F1455526970310","status":"probation","maxLicense":10,"usedLicense":2,"maxSpace":1000,"usedSpace":0,"dateCreated":1455526971000,"dateUpdated":1455527054000,"contact":"wyb","email":"850194007@qq.com","telephone":"18228088215","mobile":"18228088215","address":"123","available":true},"globalConfig":[],"userConfig":[{"configKey":"guide.task.manager","configValue":"1","id":"4525552697129606467"},{"configKey":"guide.task.participant","configValue":"1","id":"4525552697129706468"},{"configKey":"guide.document.share","configValue":"1","id":"4525552697129706469"},{"configKey":"guide.customer.share","configValue":"1","id":"4525552697129706470"},{"configKey":"guide.workflow.operation","configValue":"1","id":"4525552697129706471"},{"configKey":"guide.workflow.createform","configValue":"1","id":"4525552697129706472"},{"configKey":"system.menu.display","configValue":"/portal","id":"6995670208446142971"},{"configKey":"order.task.search","configValue":"order_time","id":"6995670208459842972"},{"configKey":"order.task.searchDirection","configValue":"DESC","id":"6995670208460342973"},{"configKey":"portal.workdyna","configValue":"company-share","id":"6995670382051445996"}],"passportUrl":"https://passport.eteams.cn","siblingsTenants":[{"employeeId":"4525552697072306457","tenantKey":"tb1yh58m28","isCurrent":true,"tenantName":"\u6211\u7684\u56E2\u961F1455526970310"}],"noSubordinates":true,"nowTime":1456704200069,"eteamsHost":"https://www.eteams.cn","version":"1f6c37dde395eb63024a38bc63648cdd"};var crmContext = {"remoteDownloadUrl":"http://dl.eteams.cn"};var empMenusContext = [{"menuName":"首页","empid":4525552697072306457,"menuStatus":1,"orderIndex":0,"id":"0"},{"menuName":"任务协作","empid":4525552697072306457,"menuStatus":1,"orderIndex":1,"id":"1"},{"menuName":"审批流程","empid":4525552697072306457,"menuStatus":1,"orderIndex":2,"id":"2"},{"menuName":"目标项目","empid":4525552697072306457,"menuStatus":0,"orderIndex":3,"id":"3"},{"menuName":"知识文档","empid":4525552697072306457,"menuStatus":0,"orderIndex":4,"id":"4"},{"menuName":"客户库","empid":4525552697072306457,"menuStatus":0,"orderIndex":5,"id":"5"},{"menuName":"工作日报","empid":4525552697072306457,"menuStatus":0,"orderIndex":6,"id":"6"},{"menuName":"日程安排","empid":4525552697072306457,"menuStatus":0,"orderIndex":7,"id":"7"},{"menuName":"计划报告","empid":4525552697072306457,"menuStatus":0,"orderIndex":8,"id":"8"},{"menuName":"统计报表","empid":4525552697072306457,"menuStatus":0,"orderIndex":9,"id":"9"},{"menuName":"微信企业号","empid":4525552697072306457,"menuStatus":0,"orderIndex":10,"id":"10"},{"menuName":"业务表单","empid":4525552697072306457,"menuStatus":0,"orderIndex":11,"id":"11"},{"menuName":"客户联系人","empid":4525552697072306457,"menuStatus":0,"orderIndex":12,"id":"12"},{"menuName":"微信服务号","empid":4525552697072306457,"menuStatus":0,"orderIndex":13,"id":"13"},{"menuName":"商机","empid":4525552697072306457,"menuStatus":0,"orderIndex":14,"id":"14"},{"menuName":"产品","empid":4525552697072306457,"menuStatus":0,"orderIndex":15,"id":"15"}]</script>
<script>
    TEAMS.menuCrmContext="/crms";
    TEAMS.runMode="production";
    TEAMS.version="1f6c37dde395eb63024a38bc63648cdd";
</script>
<script><!-- 自定义全局缓存 -->
    TEAMS.ownCache = {};
</script>
<script>

    seajs.config({base:"./js",preload:["eteams.js?v=1f6c37dde395eb63024a38bc63648cdd"],charset:"utf-8",debug:!1}),seajs.use("./js/main");
</script>
<div class="smwx-box hide" id="smwx_box">
    <div class="smwx-list hide">
        <div class="smwx-list-header clearfix">
            <div class="opt">
                <a class="smwx-list-ctrl-size"><i class="icon-minus-thin"></i></a>
            </div>
            <div class="smwx-list-search">
                <i class="icon-search"></i>
                <input type="text" placeholder="搜索" class="form-control suggestion" />
            </div>
            <ul class="tab">
                <li><a data-entity="user">同事</a></li>
                <li><a data-entity="channel">群组</a></li>
                <li><a  data-entity="recent" class="active">最近</a></li>
            </ul>
        </div>
        <div height="416" class="smwx-list-con scrollwrapper mCustomScrollbar _mCS_2 mCS_no_scrollbar" id="smwx-list-con" style="height: 416px;">
            <div class="mCustomScrollBox mCS-darkblue mCSB_vertical mCSB_inside" id="mCSB_2" tabindex="0">
                <div dir="ltr" style="position:relative; top:0; left:0;" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" id="mCSB_2_container">
                    <div class="loading_small hide">
                        <span>正在加载，请稍后...</span>
                    </div>
                    <div class="smwx-list-search-result hide" id="smwx-list-search-result-query">
                        <div class="chat-member-list"></div>
                    </div>
                    <div class="smwx-list-search-result" id="smwx-list-search-result-all"></div>
                    <div class="smwx-list-search-result hide" id="smwx-list-search-result-channel"></div>
                    <div class="smwx-list-search-result" id="smwx-list-search-result-recent">
                        <div class="chat-member-list">
                            <div data-entity="employee" class="chat-member high-light" id="10000">
                                <div class="avatar">
                                    <img src="images/service.png" alt="avatar" />
                                </div>
                                <span class="name">eteams服务号</span>
                                <time>02-25</time>
                            </div>
                        </div>
                    </div>
                    <div pageno="2" class="members-more j_members-more hide">
                        更多...
                    </div>
                    <div class="members-more j_recent_more hide">
                        更多...
                    </div>
                </div>
                <div class="mCSB_scrollTools mCSB_2_scrollbar mCS-darkblue mCSB_scrollTools_vertical" id="mCSB_2_scrollbar_vertical" style="display: none;">
                    <div class="mCSB_draggerContainer">
                        <div oncontextmenu="return false;" style="position: absolute; min-height: 30px; top: 0px;" class="mCSB_dragger" id="mCSB_2_dragger_vertical">
                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="smwx-a-invite invite-toggle">
            <i class="icon-plus-thin"></i>
            <a>邀请同事</a>
        </div>
        <div class="hide channel-link-clone">
            <div data-entity="channel" class="chat-member" id="channel-link-clone">
                <div class="avatar">
                    <img src="images/group.png" alt="avatar" />
                </div>
                <span class="name"></span>
                <time></time>
            </div>
        </div>
        <div class="hide">
            <div data-entity="employee" class="chat-member" id="employee-clone">
                <div class="avatar">
                    <img src="images/avatar.png" alt="avatar" />
                </div>
                <span class="name"></span>
                <time></time>
            </div>
            <div id="blogmessage-clone" class="smwx-mes-view">
                <div class="smwx-mes-view-items router">
                    <span class="title"></span>
                    <span class="count badge badge-warning pull-right">8</span>
                </div>
            </div>
        </div>
        <div class="hide" id="members-pinyin">
            <div id="list-history#" class="pinyin-container">
                <span class="pinyin">#</span>
                <div class="chat-member-list"></div>
            </div>
        </div>
        <div id="all-employee-service" class="pinyin-container hide">
            <span class="pinyin"></span>
            <div class="chat-member-list">
                <div id="10000" class="chat-member">
                    <div class="avatar">
                        <img src="images/service.png" alt="avatar" />
                    </div>
                    <span class="name">eteams服务号</span>
                </div>
            </div>
        </div>
        <div class="hide">
            <div class="smwx-invite-tip text-center c-999 fs-12" id="invite-tip-clone">
                团队人员少，请邀请同事加入协作吧！
                <div class="mt-10">
                    <a class="invite-toggle btn btn-danger btn-sm">邀请同事加入</a>
                </div>
            </div>
        </div>
    </div>
    <div class="smwx-chat hide">
        <div class="smwx-chat-lf" id="leftChatList">
            <div marginbottom="" class="smwx-chat-scr-con j_chatlistScr scrollwrapper" style="height: 694px;">
                <ul></ul>
            </div>
        </div>
        <div class="hide" id="chat-left-list-clone">
            <li><a class="j_leftChatOne"></a><span class="smwx-chat-cur-close">&times;</span></li>
        </div>
        <div class="smwx-chat-rt">
            <div class="smwx-chat-header">
                <div class="chat-name"></div>
                <div class="opt">
                    <a class="smwx-mini-ctrl-size"><i class="icon-minus-thin"></i></a>
                    <a class="smwx-mini-ctrl-close"><i class="icon-plus-thin"></i></a>
                </div>
                <div class="addmember-layer j_memberLayer">
                    <div auto-scroll="yes" class="j_memberLayerScr">
                        <div class="inner">
                            <ul>
                                <div id="channel-member-top"></div>
                                <div>
                                    <li class="add"><a data-multi="true" data-entity="employee" class="add-member selector-toggle" title="添加成员" id="mini-new-channel"><i class="icon-plus-thin"></i></a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div height="342" class="smwx-chat-content w-full j_chatConScr  scrollwrapper" id="smwx-chat-top" style="height: 342px;">
                <div id="message-list-div"></div>
                <div class="chat-message-list" id="message-list-div-clone"></div>
            </div>
            <div class="chat-editor">
                <div class="tool-bar j_minichat_tool" style="position: relative;">
                    <div class="a-tools fl">
                        <a data-placement="top" data-toggle="tooltip" title="" data-original-title="点击添加表情" href="javascript:void(0)" class="chat-emoji"><i class="icon-smiley"></i></a>
                        <a class="graph a-pic" title="" data-placement="top" data-toggle="tooltip" id="chat-image-mini" style="position: relative; z-index: 0;" data-original-title="请选择图片"><i class="icon-image2"></i></a>
                        <a class="graph a-attach" title="" data-placement="top" data-toggle="tooltip" id="chat-attachment" style="position: relative; z-index: 0;" data-original-title="请选择附件"><i class="icon-paperclip"></i></a>
                    </div>
                    <a class="a-his chat-history-toggle fr" id="history-chat"><i class="icon-history icoinline"></i>聊天记录</a>
                    <div id="p1acl57irfnmkoc21mgv18no9ph0_html5_container" style="position: absolute; background: transparent none repeat scroll 0% 0%; width: 0px; height: 0px; overflow: hidden; z-index: -1; opacity: 0; top: 0px; left: 0px;" class="plupload html5">
                        <input type="file" multiple="multiple" accept="" style="font-size: 999px; position: absolute; width: 100%; height: 100%;" id="p1acl57irfnmkoc21mgv18no9ph0_html5" />
                    </div>
                    <div id="p1acl57iriai6hp66u317mpooa3_html5_container" style="position: absolute; background: transparent none repeat scroll 0% 0%; width: 0px; height: 0px; overflow: hidden; z-index: -1; opacity: 0; top: 0px; left: 0px;" class="plupload html5">
                        <input type="file" multiple="multiple" accept="" style="font-size: 999px; position: absolute; width: 100%; height: 100%;" id="p1acl57iriai6hp66u317mpooa3_html5" />
                    </div>
                </div>
                <div class="content">
                    <textarea class="area w-full" id="message-textarea"></textarea>
                </div>
                <div class="action-bar j_actionbar">
                    <div class="fl">
                        <span class="j_key-tip key-tip c-666"><i class="icon-exclamation-sign icoinline"></i>按Ctrl+Enter键发送</span>
                    </div>
                    <ul class="toolkit-list send-btns fr">
                        <li class="toolkit-item dropdown-arrow fr">
                            <div class="btn-group dropdown dropdown-menu-toggle">
                                <a class="dropdown-toggle btn btn-sm btn-primary"><i class="icon-angle-down"></i></a>
                                <ul data-type="CtrlEnter" class="dropdown-menu dropdown-menu-right border-dropdown j_sendType_menu">
                                    <li class="j_sendType_li" data-type="Enter"><a class="sendType"><i class="icon-checkmark"></i><span>按Enter发送</span></a></li>
                                    <li class="j_sendType_li active" data-type="CtrlEnter"><a class="sendType"><i class="icon-checkmark"></i><span>按Ctrl+Enter发送</span></a></li>
                                </ul>
                            </div></li>
                        <li class="toolkit-item fr mr-0 dropdown-arrow-pre"><a class="btn btn-sm w-60 btn-primary j_btn-send">发送</a></li>
                    </ul>
                    <span class="limit-tip c-999 fr mr-10" id="limitTip">还可以输入1000字</span>
                </div>
            </div>
        </div>
        <div class="hide" id="channel-member-top-clone">
            <li class="usercard-toggle" id=""><img src="images/" data-original-title="" data-placement="top" data-toggle="tooltip" /><p class="j_name ellipsis"></p></li>
        </div>
        <div class="chat-message hide" id="chat-message-clone">
            <div class="avatar">
                <img style="cursor:pointer;" class="usercard-toggle" src="images/avatar.png" />
            </div>
            <div class="chat-content">
                <div style="cursor:pointer;" class="name usercard-toggle"></div>
                <div class="bubble break">
                    内容
                </div>
                <div class="chat-time">
                    <i class="icon-time mr-3"></i>
                    <time>17:32:28</time>
                </div>
            </div>
        </div>
        <div class="date-divider date-line-clone hide">
            <div class="line"></div>
            <span></span>
        </div>
    </div>
    <div class="smwx-mini-bar">
        <div class="smwx-mini-list-trigger high-light">
            <i class="icon-comments"></i>企业微信
            <span class="smwx-msg-number">(1)</span>
        </div>
        <div class="smwx-mini-chat-trigger hide">
            <span class="smwx-mini-text-pre">正在与</span>
            <span class="smwx-mini-name"></span>
            <span class="smwx-mini-text-next">的聊天中</span>
        </div>
    </div>
</div>
<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: 1px; width: 1px; height: 0px; z-index: 999999999;">
    <object height="100%" width="100%" data="js/clipboard.swf?noCache=1456704048271" type="application/x-shockwave-flash" name="global-zeroclipboard-flash-bridge" id="global-zeroclipboard-flash-bridge"><param value="sameDomain" name="allowScriptAccess"></param><param value="all" name="allowNetworking"></param><param value="false" name="menu"></param><param value="transparent" name="wmode"></param><param value="trustedOrigins=www.eteams.cn%2C%2F%2Fwww.eteams.cn%2Chttps%3A%2F%2Fwww.eteams.cn&amp;swfObjectId=global-zeroclipboard-flash-bridge" name="flashvars"></param></object>
</div>
<textarea style="position: absolute; top: -999px; left: 0px; right: auto; bottom: auto; border: 0px none; padding: 0px; box-sizing: content-box; word-wrap: break-word; height: 0px ! important; min-height: 0px ! important; overflow: hidden; transition: none 0s ease 0s ; font-family: Arial," hiragino="" sans="" gb",microsoft="" yahei,sans-serif;="" font-size:="" 14px;="" font-weight:="" 400;="" font-style:="" normal;="" letter-spacing:="" 0px;="" text-transform:="" none;="" word-spacing:="" text-indent:="" line-height:="" 24px;="" width:="" 316px;"="" tabindex="-1" class="autosizejs"></textarea>
</body>
</html>