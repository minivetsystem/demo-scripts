<?php
/* @var $this AdminController */
$this->pageTitle=Yii::app()->name;
?>
    
        <div id="updates" class="subcontent">
                <div class="notibar announcement">
                    <a class="close"></a>
                    <h3>Announcement</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur 
adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div><!-- notification announcement -->
                
                <div class="two_third dashboard_left">
                
                    <ul class="shortcuts">
                        <li><a href="" class="settings"><span>Settings</span></a></li>
                        <li><a href="" class="users"><span>Users</span></a></li>
                        <li><a href="" class="gallery"><span>Gallery</span></a></li>
                        <li><a href="" class="events"><span>Events</span></a></li>
                        <li><a href="" class="analytics"><span>Analytics</span></a></li>
                    </ul>
                    
                    <br clear="all">
                
                    <div class="contenttitle2 nomargintop">
                        <h3>Visit Overview</h3>
                    </div><!--contenttitle-->
                    
                    <div class="overviewhead">
                        <div class="overviewselect">
                            <div id="uniform-overviewselect" class="selector"><span style="-moz-user-select: none;">Last 1 hour ago</span><select style="opacity: 0;" id="overviewselect" name="select">
                                <option selected="selected" value="">Last 1 hour ago</option>
                                <option value="">Last 5 hours ago</option>
                                <option value="">Today</option>
                                <option value="">Yesterday</option>
                                <option value="">This Week</option>
                                <option value="">Last Week</option>
                                <option value="">This Month</option>
                                <option value="">Last Month</option>
                            </select></div>
                        </div><!--floatright-->
                        From: &nbsp;<input class="hasDatepicker" id="datepickfrom" type="text"> &nbsp; &nbsp; To: &nbsp;<input class="hasDatepicker" id="datepickto" type="text">
                    </div><!--overviewhead-->
                    
                    <br clear="all">
                    
                    <table class="stdtable overviewtable" border="0" cellpadding="0" cellspacing="0">
                        <colgroup>
                            <col class="con0" width="20%">
                            <col class="con1" width="20%">
                            <col class="con0" width="20%">
                            <col class="con1" width="20%">
                            <col class="con0" width="20%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="head0">Metric</th>
                                <th class="head1">Rates</th>
                                <th class="head0">Impressions</th>
                                <th class="head1">Unique Visits</th>
                                <th class="head0">Average Time (min)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="progress progress150">
                                        <div class="bar"><div style="width: 60%;" class="value bluebar"></div></div>
                                    </div>
                                </td>
                                <td>67.3%</td>
                                <td>856, 220</td>
                                <td class="center">32, 012</td>
                                <td class="center">20.5</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br clear="all">
                    
                    <table class="stdtable stdtablecb overviewtable2" border="0" cellpadding="0" cellspacing="0">
                        <colgroup>
                            <col class="con0" style="width: 4%">
                            <col class="con1">
                            <col class="con0">
                            <col class="con1">
                            <col class="con0">
                            <col class="con1">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="head0"><div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" class="checkall" type="checkbox"></span></div></th>
                                <th class="head1">Rendering engine</th>
                                <th class="head0">Browser</th>
                                <th class="head1">Platform(s)</th>
                                <th class="head0">Engine version</th>
                                <th class="head1">CSS grade</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="head0"><div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" class="checkall" type="checkbox"></span></div></th>
                                <th class="head1">Rendering engine</th>
                                <th class="head0">Browser</th>
                                <th class="head1">Platform(s)</th>
                                <th class="head0">Engine version</th>
                                <th class="head1">CSS grade</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td align="center"><div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div></td>
                                <td>Trident</td>
                                <td>Internet  Explorer 5.5</td>
                                <td>Win 95+</td>
                                <td class="center">5.5</td>
                                <td class="center">A</td>
                            </tr>
                            <tr>
                                <td align="center"><div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div></td>
                                <td>Trident</td>
                                <td>Internet Explorer 6</td>
                                <td>Win 98+</td>
                                <td class="center">6</td>
                                <td class="center">A</td>
                            </tr>
                            <tr>
                                <td align="center"><div id="uniform-undefined" class="checker"><span><input style="opacity: 0;" type="checkbox"></span></div></td>
                                <td>Trident</td>
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td class="center">7</td>
                                <td class="center">A</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br>
                    
                    <div class="widgetbox">
                        <div class="title"><h3>Latest Articles</h3></div>
                        <div class="widgetcontent">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 175px;"><div style="overflow: hidden; width: auto; height: 175px;" id="scroll1" class="mousescroll">
                                    <ul class="entrylist">
                                          <li>
                                            <div class="entry_wrap">
                                                <div class="entry_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/image1.png" alt=""></div>
                                                <div class="entry_content">
                                                    <h4><a href="">Why Won't My Cat Eat?</a></h4>
                                                    <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                    <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                                </div>
                                            </div>
                                          </li>
                                          <li class="even">
                                            <div class="entry_wrap">
                                            <div class="entry_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/image2.png" alt=""></div>
                                            <div class="entry_content">
                                                <h4><a href="">We Are About Color</a></h4>
                                                <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                            </div>
                                            </div>
                                          </li>
                                          <li>
                                            <div class="entry_wrap">
                                            <div class="entry_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/image3.png" alt=""></div>
                                            <div class="entry_content">
                                                <h4><a href="">Ancient Technology</a></h4>
                                                <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                            </div>
                                            </div>
                                          </li>
                                          <li class="even">
                                            <div class="entry_wrap">
                                            <div class="entry_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/image4.png" alt=""></div>
                                            <div class="entry_content">
                                                <h4><a href="">Bird's Nest Soup</a></h4>
                                                <small>Submitted by: <a href=""><strong>Hiccup</strong></a> - June 10, 2012</small>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>
                                                <p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>
                                            </div>
                                            </div>
                                          </li>
                                        </ul>                        
                            </div><div style="border-radius: 10px 10px 10px 10px; background: none repeat scroll 0% 0% rgb(102, 102, 102); width: 10px; position: absolute; top: 0px; opacity: 0.4; z-index: 99; right: 1px; height: 43.0126px; display: none;" class="slimScrollBar  ui-draggable"></div><div style="width: 15px; height: 100%; position: absolute; top: 0px; right: 1px;"></div></div><!--#scroll1-->
                        </div><!--widgetcontent-->
                    </div><!-- widgetbox -->                            
                    
                    
                </div><!--two_third dashboard_left -->
                
                <div class="one_third last dashboard_right">
                
                    <div class="contenttitle2 nomargintop">
                        <h3>Top Rated Sites</h3>
                    </div><!--contenttitle-->
                
                
                    <ul class="toplist">
                        <li>
                            <div>
                                <span class="three_fourth">
                                    <span class="left">
                                        <span class="title"><a href="">loremipsum.com</a></span>
                                        <span class="desc">Social Network</span>
                                    </span><!--left-->
                                </span><!--three_fourth-->
                                <span class="one_fourth last">
                                    <span class="right">
                                        <span class="h3">8.1</span>
                                    </span><!--right-->
                                </span><!--one_fourth-->
                                <br clear="all">
                            </div>
                        </li>
                        <li>
                            <div>
                                <span class="three_fourth">
                                    <span class="left">
                                        <span class="title"><a href="">dolorsitamet.net</a></span>
                                        <span class="desc">Social Network</span>
                                    </span><!--left-->
                                </span><!--three_fourth-->
                                <span class="one_fourth last">
                                    <span class="right">
                                        <span class="h3">7.8</span>
                                    </span><!--right-->
                                </span><!--one_fourth-->
                                <br clear="all">
                            </div>
                        </li>
                        <li>
                            <div>
                                <span class="three_fourth">
                                    <span class="left">
                                        <span class="title"><a href="">consectetur.org</a></span>
                                        <span class="desc">Social Network</span>
                                    </span><!--left-->
                                </span><!--three_fourth-->
                                <span class="one_fourth last">
                                    <span class="right">
                                        <span class="h3">7.5</span>
                                    </span><!--right-->
                                </span><!--one_fourth-->
                                <br clear="all">
                            </div>
                        </li>
                    </ul>
                    
                    <div class="widgetbox">
                        <div class="title"><h3>Newly Registered User</h3></div>
                        <div class="widgetoptions">
                            <div class="right"><a href="">View All Users</a></div>
                            <a href="">Add User</a>
                        </div>
                        <div class="widgetcontent userlistwidget nopadding">
                            <ul>
                                <li>
                                    <div class="avatar"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/avatar1.png"></div>
                                    <div class="info">
                                        <a href="">Squint</a> <br>
                                        Front-End Engineer <br> 18 minutes ago
                                    </div><!--info-->
                                </li>
                                <li>
                                    <div class="avatar"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/avatar2.png"></div>
                                    <div class="info">
                                        <a href="">Eunice</a> <br>
                                        Architectural Designer <br> 18 minutes ago
                                    </div><!--info-->
                                </li>
                                <li>
                                    <div class="avatar"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/avatar1.png"></div>
                                    <div class="info">
                                        <a href="">Captain Gutt</a> <br>
                                        Software Engineer <br> 18 minutes ago
                                    </div><!--info-->
                                </li>
                                <li>
                                    <div class="avatar"><img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/images/thumbs/avatar2.png"></div>
                                    <div class="info">
                                        <a href="">Flynn</a> <br>
                                        Accounting Manager <br> 18 minutes ago
                                    </div><!--info-->
                                </li>
                            </ul>
                            <a class="more" href="">View More Users</a>
                        </div><!--widgetcontent-->
                    </div>
                    
                    <div class="widgetbox">
                        <div class="title"><h3>Latest News</h3></div>
                        <div class="widgetcontent">
                                 
                          </div> <!--widgetcontent-->
                     </div><!--widgetbox-->                        
                                        
                </div><!--one_third last-->
                
                
        </div><!-- #updates -->
        
        <div id="activities" class="subcontent" style="display: none;">
            &nbsp;
        </div><!-- #activities -->
    

