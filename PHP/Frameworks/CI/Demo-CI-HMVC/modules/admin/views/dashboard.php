<div class="row">
    <div class="col-lg-12">
        <?php if($this->session->flashdata('login_success')): ?>
        <div class="alert note note-success">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
            <h4><i class="fa fa-hand-o-right fa-2"></i>Thank You.</h4>
            <hr class="separator">
            <p><?php echo $this->session->flashdata('login_success') ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-9 col-sm-12">
        <div class="row">
          
		  <div class="col-lg-4 col-sm-4">
            <a class="tile-button btn btn-primary" href="#">
              <div class="tile-content-wrapper">
                <i class="fa fa-users">
                </i>
                <div class="tile-content">
                  475
                </div>
                <small>
                  New Signup 
                </small>
              </div>
            </a>
          </div>
          
		  <div class="col-lg-4 col-sm-4">
            <a class="tile-button btn btn-inverse" href="#">
              <div class="tile-content-wrapper">
                <i class="glyphicon glyphicon-gift">
                </i>
                <div class="tile-content">
                  70
                </div>
                <small>
                  My Domains 
                </small>
              </div>
            </a>
          </div>
		  
          <div class="col-lg-4 col-sm-4">
            <a class="tile-button btn btn-white" href="#">
              <div class="tile-content-wrapper">
                <i class="fa fa-warning text-primary">
                </i>
                <div class="tile-content text-primary">
                  <span>
                    $
                  </span>
                  270
                </div>
                <small>
                  Due Invoices 
                </small>
              </div>
            </a>
          </div>
        
		</div>
		
        <div class="portlet" style="display:none;">
          <div class="portlet-heading inverse">
            <div class="portlet-title">
              <h4>
                <i class="fa fa-line-chart">
                </i>
                Server Statics
              </h4>
            </div>
            <div class="portlet-widgets">
              <a title="" data-rel="tooltip" data-placement="top" class="tooltip-primary" href="javascript:;" id="daterange" data-original-title="DateRangePicker">
                <i class="fa fa-calendar">
                </i>
              </a>
              <span class="divider">
              </span>
              <a href="#m-charts" data-parent="#accordion" data-toggle="collapse">
                <i class="fa fa-chevron-down">
                </i>
              </a>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="panel-collapse collapse in" id="m-charts">
            <div class="portlet-body">
              <div class="row">
                <div class="col-sm-9">
                  <h4>
                    CPU percentage today
                  </h4>
                  <div style="height: 220px!important; min-height:220px;" id="morris-chart-1" class="chart-holder">
                    <svg height="220" version="1.1" width="605" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.75px;">
                      <desc>
                        Created with Raphaël 2.1.2
                      </desc>
                      <defs/>
                      <text style="text-anchor: end; font: 12px sans-serif;" x="53.5" y="180" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4.5">
                          0 %
                        </tspan>
                      </text>
                      <path style="" fill="none" stroke="#aaaaaa" d="M66,180H580" stroke-width="0.5"/>
                      <text style="text-anchor: end; font: 12px sans-serif;" x="53.5" y="141.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4.5">
                          7.5 %
                        </tspan>
                      </text>
                      <path style="" fill="none" stroke="#aaaaaa" d="M66,141.25H580" stroke-width="0.5"/>
                      <text style="text-anchor: end; font: 12px sans-serif;" x="53.5" y="102.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4.5">
                          15 %
                        </tspan>
                      </text>
                      <path style="" fill="none" stroke="#aaaaaa" d="M66,102.5H580" stroke-width="0.5"/>
                      <text style="text-anchor: end; font: 12px sans-serif;" x="53.5" y="63.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4.5">
                          22.5 %
                        </tspan>
                      </text>
                      <path style="" fill="none" stroke="#aaaaaa" d="M66,63.75H580" stroke-width="0.5"/>
                      <text style="text-anchor: end; font: 12px sans-serif;" x="53.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal">
                        <tspan dy="4.5">
                          30 %
                        </tspan>
                      </text>
                      <path style="" fill="none" stroke="#aaaaaa" d="M66,25H580" stroke-width="0.5"/>
                      <text style="text-anchor: middle; font: 12px sans-serif;" x="580" y="192.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)">
                        <tspan dy="4.5">
                          9PM
                        </tspan>
                      </text>
                      <text style="text-anchor: middle; font: 12px sans-serif;" x="494.33333333333337" y="192.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)">
                        <tspan dy="4.5">
                          12AM
                        </tspan>
                      </text>
                      <text style="text-anchor: middle; font: 12px sans-serif;" x="408.6666666666667" y="192.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)">
                        <tspan dy="4.5">
                          11AM
                        </tspan>
                      </text>
                      <text style="text-anchor: middle; font: 12px sans-serif;" x="323" y="192.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)">
                        <tspan dy="4.5">
                          9AM
                        </tspan>
                      </text>
                      <text style="text-anchor: middle; font: 12px sans-serif;" x="237.33333333333334" y="192.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)">
                        <tspan dy="4.5">
                          7AM
                        </tspan>
                      </text>
                      <text style="text-anchor: middle; font: 12px sans-serif;" x="151.66666666666669" y="192.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)">
                        <tspan dy="4.5">
                          2AM
                        </tspan>
                      </text>
                      <text style="text-anchor: middle; font: 12px sans-serif;" x="66" y="192.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#686868" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)">
                        <tspan dy="4.5">
                          1AM
                        </tspan>
                      </text>
                      <path style="" fill="none" stroke="#466baf" d="M66,164.5C87.41666666666667,134.79166666666666,130.25,46.95833333333333,151.66666666666669,45.66666666666666C173.08333333333334,44.37499999999999,215.91666666666669,142.54166666666666,237.33333333333334,154.16666666666666C258.75,165.79166666666666,301.5833333333333,146.41666666666666,323,138.66666666666666C344.4166666666667,130.91666666666666,387.25,103.14583333333333,408.6666666666667,92.16666666666666C430.08333333333337,81.18749999999999,472.9166666666667,44.37499999999998,494.33333333333337,50.833333333333314C515.75,57.29166666666664,558.5833333333334,120.58333333333331,580,143.83333333333331" stroke-width="2px"/>
                      <path style="" fill="none" stroke="#72af46" d="M66,180C87.41666666666667,149,130.25,57.9375,151.66666666666669,56C173.08333333333334,54.0625,215.91666666666669,156.75,237.33333333333334,164.5C258.75,172.25,301.5833333333333,124.45833333333333,323,118C344.4166666666667,111.54166666666667,387.25,119.29166666666666,408.6666666666667,112.83333333333333C430.08333333333337,106.375,472.9166666666667,61.16666666666666,494.33333333333337,66.33333333333333C515.75,71.5,558.5833333333334,132.20833333333331,580,154.16666666666666" stroke-width="2px"/>
                      <circle cx="66" cy="164.5" r="4" fill="#466baf" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="151.66666666666669" cy="45.66666666666666" r="4" fill="#466baf" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="237.33333333333334" cy="154.16666666666666" r="4" fill="#466baf" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="323" cy="138.66666666666666" r="4" fill="#466baf" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="408.6666666666667" cy="92.16666666666666" r="4" fill="#466baf" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="494.33333333333337" cy="50.833333333333314" r="4" fill="#466baf" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="580" cy="143.83333333333331" r="4" fill="#466baf" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="66" cy="180" r="4" fill="#72af46" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="151.66666666666669" cy="56" r="4" fill="#72af46" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="237.33333333333334" cy="164.5" r="4" fill="#72af46" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="323" cy="118" r="4" fill="#72af46" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="408.6666666666667" cy="112.83333333333333" r="4" fill="#72af46" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="494.33333333333337" cy="66.33333333333333" r="4" fill="#72af46" stroke="#ffffff" style="" stroke-width="1"/>
                      <circle cx="580" cy="154.16666666666666" r="4" fill="#72af46" stroke="#ffffff" style="" stroke-width="1"/>
                    </svg>
                    <div class="morris-hover morris-default-style" style="left: 193.833px; top: 79px; display: none;">
                      <div class="morris-hover-row-label">
                        7AM
                      </div>
                      <div style="color: #72af46" class="morris-hover-point">
                        Node 1:
                        3 %
                      </div>
                      <div style="color: #466baf" class="morris-hover-point">
                        Node 2:
                        5 %
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <h4>
                    Resources
                  </h4>
                  <hr class="separator">
                  <div class="clearfix">
                    <span class="pull-left">
                      Memory
                    </span>
                    
                    <small class="pull-right">
                      307.5/1024 GB
                    </small>
                  </div>
                  <div class="progress progress-mini">
                    <div style="width: 30%;" class="progress-bar progress-bar-success">
                    </div>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">
                      IP Address
                    </span>
                    
                    <small class="pull-right">
                      900/1000
                    </small>
                  </div>
                  <div class="progress progress-mini">
                    <div style="width: 90%;" class="progress-bar progress-bar-danger">
                    </div>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">
                      Storage
                    </span>
                    
                    <small class="pull-right">
                      3.5/5 TB
                    </small>
                  </div>
                  <div class="progress progress-mini">
                    <div style="width: 70%;" class="progress-bar progress-bar-warning">
                    </div>
                  </div>
                  <div class="clearfix">
                    <span class="pull-left">
                      Bandwidth
                    </span>
                    
                    <small class="pull-right">
                      3/30 TB
                    </small>
                  </div>
                  <div class="progress progress-mini">
                    <div style="width: 10%;" class="progress-bar progress-bar-info">
                    </div>
                  </div>
                  <button class="btn btn-sm btn-primary">
                    <i class="fa fa-file-pdf-o">
                    </i>
                    Generate PDF
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
		<div class="portlet">
          <div class="portlet-heading inverse">
            <div class="portlet-title">
              <h4>
                <i class="glyphicon glyphicon-sort-by-attributes">
                </i>
                Statics
              </h4>
            </div>
            <div class="portlet-widgets">
              <a title="" data-rel="tooltip" data-placement="top" class="tooltip-primary" href="javascript:;" id="daterange" data-original-title="DateRangePicker">
                <i class="fa fa-calendar">
                </i>
              </a>
              <span class="divider">
              <a href="#jq-spark" data-parent="#accordion" data-toggle="collapse">
                <i class="fa fa-chevron-down">
                </i>
              </a>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="panel-collapse collapse in" id="jq-spark">
            <div class="portlet-body">
              <div class="row">
                <div class="col-sm-3 col-xs-6 text-center">
                  <div class="sparkline-chart">
                    <span class="sparkline-bar">
                      <canvas style="display: inline-block; width: 113px; height: 55px; vertical-align: top;" width="113" height="55">
                      </canvas>
                    </span>
                    <a class="title" href="#">
                      CPU
                    </a>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6 text-center">
                  <div class="sparkline-chart">
                    <span class="sparkline-line">
                      <canvas style="display: inline-block; width: 110px; height: 55px; vertical-align: top;" width="110" height="55">
                      </canvas>
                    </span>
                    <a class="title" href="#">
                      Bandwith Uses
                    </a>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6 text-center">
                  <div data-percent="76" id="easyPieChart-visit" class="easy-pie-chart" style="width: 67px; height: 67px;">
                    <span class="number" style="line-height: 67px; font-size: 14px;">
                      7,397
                    </span>
                    
                    <a class="title" href="#">
                      Visits
                    </a>
                    <canvas height="67" width="67">
                    </canvas>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6 text-center">
                  <div data-percent="80" id="easyPieChart-bounce" class="easy-pie-chart" style="width: 67px; height: 67px;">
                    <span class="percent" style="line-height: 67px; font-size: 14px;">
                      80
                    </span>
                    
                    <a class="title" href="#">
                      Bounce
                    </a>
                    <canvas height="67" width="67">
                    </canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portlet no-border-bottom">
          <div class="portlet-heading dark">
            <div class="portlet-title">
              <h4>
                <i class="fa fa-list-ul">
                </i>
                Recent Activities
              </h4>
            </div>
            <div class="portlet-widgets">
              <a href="#recent" data-parent="#accordion" data-toggle="collapse">
                <i class="fa fa-chevron-down">
                </i>
              </a>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="panel-collapse collapse in" id="recent">
            <div class="portlet-body no-padding">
              <div class="tc-tabs no-margin">
                <ul class="nav nav-tabs tab-small-button no-padding">
                  <li class="">
                    <a data-toggle="tab" href="#tab14" aria-expanded="false">
                      <i class="fa fa-bell-o bigger-130">
                      </i>
                    </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#tab15" aria-expanded="false">
                      <i class="fa fa-ticket bigger-130">
                      </i>
                    </a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#tab16" aria-expanded="true">
                      <i class="fa fa-users bigger-130">
                      </i>
                      <span class="badge badge-primary">
                        5
                      </span>
                    </a>
                  </li>
                </ul>
                <div class="tab-content no-padding no-border-left no-border-right no-border-bottom">
                  <div id="tab14" class="tab-pane">
                    <ul class="lists">
                      <li>
                        <span class="date">
                          17/7/2014 07:43
                        </span>
                        Cron Job: Starting Updating Product Pricing for Current Exchange Rates 
                      </li>
                      <li>
                        <span class="date">
                          17/7/2014 05:45
                        </span>
                        Email Sent to 
                        <a href="#">
                          Maris Bradley
                        </a>
                        , answered 
                        <a href="#">
                          [Ticket ID: 332335]
                        </a>
                        
                      </li>
                      <li>
                        <span class="date">
                          17/7/2014 02:43
                        </span>
                        Module Suspend Successful - Reason: 
                        <a href="#">
                          #827101
                        </a>
                        
                      </li>
                      <li>
                        <span class="date">
                          17/7/2014 23:36
                        </span>
                        Cron Job: Starting Performing Automated Fixed Term Service Terminations 
                      </li>
                      <li>
                        <span class="date">
                          18/7/2014 07:39
                        </span>
                        Email Sent to 
                        <a href="#">
                          Jack Sparrow
                        </a>
                        (Invoice Payment Confirmation). 
                      </li>
                    </ul>
                  </div>
                  <div id="tab15" class="tab-pane">
                    <ul class="lists">
                      <li>
                        <span class="icons">
                          <i class="fa fa-envelope">
                          </i>
                        </span>
                        <a href="#">
                          #808936
                        </a>
                        - Invoice has been paid please active my server 
                      </li>
                      <li>
                        <span class="icons">
                          <i class="fa fa-envelope">
                          </i>
                        </span>
                        <a href="#">
                          #857517
                        </a>
                        - New Server's Name Server IPs 
                      </li>
                      <li>
                        <span class="icons">
                          <i class="fa fa-envelope">
                          </i>
                        </span>
                        <a href="#">
                          #225310
                        </a>
                        - unsuspended reseller dineshrv all account urgent 
                      </li>
                      <li>
                        <span class="icons">
                          <i class="fa fa-envelope">
                          </i>
                        </span>
                        <a href="#">
                          #597608
                        </a>
                        - Mail Not Received 
                      </li>
                      <li>
                        <span class="icons">
                          <i class="fa fa-envelope">
                          </i>
                        </span>
                        <a href="#">
                          #597607
                        </a>
                        - Plase update my new mail address 
                      </li>
                    </ul>
                  </div>
                  <div id="tab16" class="tab-pane active">
                    <ul class="lists">
                      <li>
                        <span class="date">
                          17/7/2014
                        </span>
                        
                        <span class="icons">
                          <i class="fa fa-user">
                          </i>
                        </span>
                        <a href="#">
                          Elly Martel
                        </a>
                        afiliated by 
                        <a href="#">
                          Johan Smith
                        </a>
                        . 
                      </li>
                      <li>
                        <span class="date">
                          17/7/2014
                        </span>
                        
                        <span class="icons">
                          <i class="fa fa-user">
                          </i>
                        </span>
                        <a href="#">
                          Jack Sparrow
                        </a>
                        afiliated by 
                        <a href="#">
                          Johan Smith
                        </a>
                        . 
                      </li>
                      <li>
                        <span class="date">
                          17/7/2014
                        </span>
                        
                        <span class="icons">
                          <i class="fa fa-user">
                          </i>
                        </span>
                        <a href="#">
                          Maris Bradley
                        </a>
                        afiliated by 
                        <a href="#">
                          Johan Smith
                        </a>
                        . 
                      </li>
                      <li>
                        <span class="date">
                          17/7/2014
                        </span>
                        
                        <span class="icons">
                          <i class="fa fa-user">
                          </i>
                        </span>
                        <a href="#">
                          Roby Roy
                        </a>
                        afiliated by 
                        <a href="#">
                          Johan Smith
                        </a>
                        . 
                      </li>
                      <li>
                        <span class="date">
                          17/7/2014
                        </span>
                        
                        <span class="icons">
                          <i class="fa fa-user">
                          </i>
                        </span>
                        <a href="#">
                          Rohan Jha
                        </a>
                        afiliated by 
                        <a href="#">
                          Johan Smith
                        </a>
                        . 
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portlet">
          <div class="portlet-heading dark">
            <div class="portlet-title">
              <h4>
                <i class="fa fa-comments">
                </i>
                Internal Chat
              </h4>
            </div>
            <div class="portlet-widgets">
              <a href="javascript:;">
                <i class="fa fa-refresh">
                </i>
              </a>
              <span class="divider">
              </span>
              <a href="#i-chat" data-parent="#accordion" data-toggle="collapse" class="" aria-expanded="true">
                <i class="fa fa-chevron-down">
                </i>
              </a>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="panel-collapse collapse in" id="i-chat" style="" aria-expanded="true">
            <div class="portlet-body">
              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 195px;">
                <div class="in-chat" style="overflow: hidden; width: auto; height: 195px;">
                  <div class="itemdiv dialogdiv">
                    <div class="user">
                      <img src="assets/images/user-profile-1.jpg" alt="">
                    </div>
                    <div class="body">
                      <div class="time">
                        <i class="fa fa-clock-o">
                        </i>
                        4 sec
                      </div>
                      <div class="name">
                        <a href="#">
                          John Smith
                        </a>
                      </div>
                      <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                      </div>
                      <div class="tools">
                        <a class="btn btn-xs btn-primary" href="#">
                          <i class="icon-only fa fa-share">
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="itemdiv dialogdiv">
                    <div class="user">
                      <img src="assets/images/user-profile-2.jpg" alt="">
                    </div>
                    <div class="body">
                      <div class="time">
                        <i class="fa fa-clock-o">
                        </i>
                        38 sec
                      </div>
                      <div class="name">
                        <a href="#">
                          Elly Martel
                        </a>
                      </div>
                      <div class="text">
                        Raw denim you probably haven't heard of them jean shorts Austin.
                      </div>
                      <div class="tools">
                        <a class="btn btn-xs btn-primary" href="#">
                          <i class="icon-only fa fa-share">
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="itemdiv dialogdiv">
                    <div class="user">
                      <img src="assets/images/user-profile-1.jpg" alt="">
                    </div>
                    <div class="body">
                      <div class="time">
                        <i class="fa fa-clock-o">
                        </i>
                        2 min
                      </div>
                      <div class="name">
                        <a href="#">
                          John Smith
                        </a>
                      </div>
                      <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                      </div>
                      <div class="tools">
                        <a class="btn btn-xs btn-primary" href="#">
                          <i class="icon-only fa fa-share">
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="itemdiv dialogdiv">
                    <div class="user">
                      <img src="assets/images/user-profile-2.jpg" alt="">
                    </div>
                    <div class="body">
                      <div class="time">
                        <i class="ace-icon fa fa-clock-o">
                        </i>
                        3 min
                      </div>
                      <div class="name">
                        <a href="#">
                          Elly Martel
                        </a>
                      </div>
                      <div class="text">
                        Raw denim you probably haven't heard of them jean shorts Austin.
                      </div>
                      <div class="tools">
                        <a class="btn btn-xs btn-primary" href="#">
                          <i class="icon-only fa fa-share">
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="itemdiv dialogdiv">
                    <div class="user">
                      <img src="assets/images/user-profile-1.jpg" alt="">
                    </div>
                    <div class="body">
                      <div class="time">
                        <i class="fa fa-clock-o">
                        </i>
                        4 min
                      </div>
                      <div class="name">
                        <a href="#">
                          Elly Martel
                        </a>
                      </div>
                      <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </div>
                      <div class="tools">
                        <a class="btn btn-xs btn-primary" href="#">
                          <i class="icon-only fa fa-share">
                          </i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slimScrollBar" style="background: none repeat scroll 0% 0% rgb(0, 0, 0); width: 7px; position: absolute; top: 22px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 109.267px;">
                </div>
                <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                </div>
              </div>
            </div>
            <div class="portlet-footer">
              <div class="input-group">
                <input type="text" placeholder="Type your message here ..." class="form-control input-sm" id="btn-input">
                
                <span class="input-group-btn">
                  <button id="btn-chat" class="btn btn-info btn-sm">
                    <i class="fa fa-send">
                    </i>
                    Send
                  </button>
                  
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
	  <div class="col-lg-3 col-sm-12">
        <div class="portlet">
          <div class="portlet-heading inverse">
            <div class="portlet-title">
              <h4>
                <i class="fa fa-list-alt">
                </i>
                Clients
              </h4>
            </div>
            <div class="portlet-widgets">
              <a href="#qclients" data-parent="#accordion" data-toggle="collapse">
                <i class="fa fa-chevron-down">
                </i>
              </a>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="panel-collapse collapse in" id="qclients">
            <div class="portlet-body">
              <input type="search" placeholder="Search User..." id="input-quicklist" class="form-control input-sm">
              <div class="space-4">
              </div>
              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 120px;">
                <div class="quick-list" style="overflow: hidden; width: auto; height: 120px;">
                  <a href="profile.html">
                    <div class="media items no-margin-top">
                      <span class="pull-left">
                        <img alt="#" style="width: 37px;height:37px;" src="assets/images/user-1.jpg">
                        
                      </span>
                      <div class="media-body">
                        John Smith
                        <br>
                        <small>
                          Software Developer
                        </small>
                      </div>
                      <div class="tools">
                        <i class="fa fa-share icon-only">
                        </i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="media items">
                      <span class="pull-left">
                        <img alt="#" style="width: 37px;height:37px;" src="assets/images/user-4.jpg">
                        
                      </span>
                      <div class="media-body">
                        Elly Martel
                        <br>
                        <small>
                          Software Developer
                        </small>
                      </div>
                      <div class="tools">
                        <i class="fa fa-share icon-only">
                        </i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="media items">
                      <span class="pull-left">
                        <img alt="#" style="width: 37px;height:37px;" src="assets/images/user-3.jpg">
                        
                      </span>
                      <div class="media-body">
                        Jack Sparrow
                        <br>
                        <small>
                          Software Developer
                        </small>
                      </div>
                      <div class="tools">
                        <i class="fa fa-share icon-only">
                        </i>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="media items">
                      <span class="pull-left">
                        <img alt="#" style="width: 37px;height:37px;" src="assets/images/user-5.jpg">
                        
                      </span>
                      <div class="media-body">
                        Maris Bradley
                        <br>
                        <small>
                          Software Developer
                        </small>
                      </div>
                      <div class="tools">
                        <i class="fa fa-share icon-only">
                        </i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="slimScrollBar" style="background: none repeat scroll 0% 0% rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 60.251px;">
                </div>
                <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portlet">
          <div class="portlet-heading inverse">
            <div class="portlet-title">
              <h4>
                <i class="fa fa-edit">
                </i>
                To Do
              </h4>
            </div>
            <div class="portlet-widgets">
              <a href="javascript:;">
                <span class="badge badge-primary">
                  6
                </span>
              </a>
              
              <span class="divider">
              </span>
              <a title="" data-rel="tooltip" data-placement="left" class="tooltip-primary" href="#" data-original-title="Delete">
                <i class="fa fa-trash-o">
                </i>
              </a>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="portlet-body">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 95px;">
              <ul class="task-widget list-group task-lists ui-sortable" id="todo-sortlist" style="overflow: hidden; width: auto; height: 95px;">
                <li class="list-group-item ui-sortable-handle">
                  <div class="tcb">
                    <label>
                      <input type="checkbox" id="checkbox" class="tc">
                      
                      <span class="labels" id="#checkbox">
                        Updating server software 
                        <i class="fa fa-warning text-danger">
                        </i>
                      </span>
                    </label>
                  </div>
                </li>
                <li class="list-group-item ui-sortable-handle">
                  <div class="tcb">
                    <label>
                      <input type="checkbox" id="checkbox1" class="tc">
                      
                      <span class="labels" id="#checkbox1">
                        Fixing bugs 
                      </span>
                    </label>
                  </div>
                </li>
                <li class="list-group-item ui-sortable-handle">
                  <div class="tcb">
                    <label>
                      <input type="checkbox" id="checkbox2" class="tc">
                      
                      <span class="labels" id="#checkbox2">
                        Upgrading scripts in template 
                      </span>
                    </label>
                  </div>
                </li>
                <li class="list-group-item ui-sortable-handle">
                  <div class="tcb">
                    <label>
                      <input type="checkbox" id="checkbox3" class="tc">
                      
                      <span class="labels" id="#checkbox3">
                        Reporting to manager 
                      </span>
                    </label>
                  </div>
                </li>
                <li class="list-group-item ui-sortable-handle">
                  <div class="tcb">
                    <label>
                      <input type="checkbox" id="checkbox4" class="tc">
                      
                      <span class="labels" id="#checkbox4">
                        Pending Orders 
                        <span class="badge badge-success">
                          3
                        </span>
                        
                      </span>
                    </label>
                  </div>
                </li>
                <li class="list-group-item ui-sortable-handle">
                  <div class="tcb">
                    <label>
                      <input type="checkbox" id="checkbox5" class="tc">
                      
                      <span class="labels" id="#checkbox5">
                        Call to John Smith 
                      </span>
                    </label>
                  </div>
                </li>
              </ul>
              <div class="slimScrollBar" style="background: none repeat scroll 0% 0% rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 50.7022px;">
              </div>
              <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;">
              </div>
            </div>
          </div>
          <div class="portlet-footer">
            <div class="input-group">
              <input type="text" placeholder="Add new Task..." class="form-control input-sm">
              
              <span class="input-group-btn">
                <button class="btn btn-success btn-sm">
                  <i class="fa fa-plus icon-only">
                  </i>
                </button>
                
              </span>
            </div>
          </div>
        </div>
        <div class="portlet hidden-widgets">
          <div class="portlet-heading inverse">
            <div class="portlet-title">
              <h4>
                <i class="fa fa-calendar">
                </i>
                Calendar
              </h4>
            </div>
            <div class="portlet-widgets">
              <a href="#mini-calendar" data-parent="#accordion" data-toggle="collapse">
                <i class="fa fa-chevron-down">
                </i>
              </a>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="panel-collapse collapse in" id="mini-calendar">
            <div class="portlet-body">
              <div id="minicalendar">
                <div class="datepicker datepicker-inline">
                  <div class="datepicker-days" style="display: block;">
                    <table class=" table-condensed">
                      <thead>
                        <tr>
                          <th class="prev" style="visibility: visible;">
                            <i class="fa fa-angle-double-left">
                            </i>
                          </th>
                          <th class="datepicker-switch" colspan="5">
                            April 2015
                          </th>
                          <th class="next" style="visibility: visible;">
                            <i class="fa fa-angle-double-right">
                            </i>
                          </th>
                        </tr>
                        <tr>
                          <th class="dow">
                            Su
                          </th>
                          <th class="dow">
                            Mo
                          </th>
                          <th class="dow">
                            Tu
                          </th>
                          <th class="dow">
                            We
                          </th>
                          <th class="dow">
                            Th
                          </th>
                          <th class="dow">
                            Fr
                          </th>
                          <th class="dow">
                            Sa
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="old day">
                            29
                          </td>
                          <td class="old day">
                            30
                          </td>
                          <td class="old day">
                            31
                          </td>
                          <td class="day">
                            1
                          </td>
                          <td class="day">
                            2
                          </td>
                          <td class="day">
                            3
                          </td>
                          <td class="day">
                            4
                          </td>
                        </tr>
                        <tr>
                          <td class="day">
                            5
                          </td>
                          <td class="day">
                            6
                          </td>
                          <td class="day">
                            7
                          </td>
                          <td class="day">
                            8
                          </td>
                          <td class="day">
                            9
                          </td>
                          <td class="day">
                            10
                          </td>
                          <td class="day">
                            11
                          </td>
                        </tr>
                        <tr>
                          <td class="day">
                            12
                          </td>
                          <td class="day">
                            13
                          </td>
                          <td class="day">
                            14
                          </td>
                          <td class="day">
                            15
                          </td>
                          <td class="day">
                            16
                          </td>
                          <td class="active day">
                            17
                          </td>
                          <td class="day">
                            18
                          </td>
                        </tr>
                        <tr>
                          <td class="day">
                            19
                          </td>
                          <td class="day">
                            20
                          </td>
                          <td class="day">
                            21
                          </td>
                          <td class="day">
                            22
                          </td>
                          <td class="day">
                            23
                          </td>
                          <td class="day">
                            24
                          </td>
                          <td class="day">
                            25
                          </td>
                        </tr>
                        <tr>
                          <td class="day">
                            26
                          </td>
                          <td class="day">
                            27
                          </td>
                          <td class="day">
                            28
                          </td>
                          <td class="day">
                            29
                          </td>
                          <td class="day">
                            30
                          </td>
                          <td class="new day">
                            1
                          </td>
                          <td class="new day">
                            2
                          </td>
                        </tr>
                        <tr>
                          <td class="new day">
                            3
                          </td>
                          <td class="new day">
                            4
                          </td>
                          <td class="new day">
                            5
                          </td>
                          <td class="new day">
                            6
                          </td>
                          <td class="new day">
                            7
                          </td>
                          <td class="new day">
                            8
                          </td>
                          <td class="new day">
                            9
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="today" colspan="7" style="display: none;">
                            Today
                          </th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="datepicker-months" style="display: none;">
                    <table class="table-condensed">
                      <thead>
                        <tr>
                          <th class="prev" style="visibility: visible;">
                            <i class="fa fa-angle-double-left">
                            </i>
                          </th>
                          <th class="datepicker-switch" colspan="5">
                            2015
                          </th>
                          <th class="next" style="visibility: visible;">
                            <i class="fa fa-angle-double-right">
                            </i>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="7">
                            <span class="month">
                              Jan
                            </span>
                            <span class="month">
                              Feb
                            </span>
                            <span class="month">
                              Mar
                            </span>
                            <span class="month active">
                              Apr
                            </span>
                            <span class="month">
                              May
                            </span>
                            <span class="month">
                              Jun
                            </span>
                            <span class="month">
                              Jul
                            </span>
                            <span class="month">
                              Aug
                            </span>
                            <span class="month">
                              Sep
                            </span>
                            <span class="month">
                              Oct
                            </span>
                            <span class="month">
                              Nov
                            </span>
                            <span class="month">
                              Dec
                            </span>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="today" colspan="7" style="display: none;">
                            Today
                          </th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <div class="datepicker-years" style="display: none;">
                    <table class="table-condensed">
                      <thead>
                        <tr>
                          <th class="prev" style="visibility: visible;">
                            <i class="fa fa-angle-double-left">
                            </i>
                          </th>
                          <th class="datepicker-switch" colspan="5">
                            2010-2019
                          </th>
                          <th class="next" style="visibility: visible;">
                            <i class="fa fa-angle-double-right">
                            </i>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="7">
                            <span class="year old">
                              2009
                            </span>
                            <span class="year">
                              2010
                            </span>
                            <span class="year">
                              2011
                            </span>
                            <span class="year">
                              2012
                            </span>
                            <span class="year">
                              2013
                            </span>
                            <span class="year">
                              2014
                            </span>
                            <span class="year active">
                              2015
                            </span>
                            <span class="year">
                              2016
                            </span>
                            <span class="year">
                              2017
                            </span>
                            <span class="year">
                              2018
                            </span>
                            <span class="year">
                              2019
                            </span>
                            <span class="year old">
                              2020
                            </span>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th class="today" colspan="7" style="display: none;">
                            Today
                          </th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <div class="space-8">
              </div>
              <div class="notice bg-primary marker-on-top no-margin-bottom">
                <h4>
                  Today's Event
                </h4>
                <ul class="list-unstyled smaller-90">
                  <li>
                    10 Addons Due to Renew
                  </li>
                  
                  <li>
                    2 Products/Services Due to Renew
                  </li>
                  
                  <li>
                    6 Domains Due to Renew
                  </li>
                </ul>
                <a href="#">
                  <i class="fa fa-plus">
                  </i>
                  Add New Event
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
	</div>
  </div>
</div>