<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                
                                <div>THÊM MỚI NGƯỜI DÙNG
                                    
                                </div>
                            </div>
<!--                             <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                               <!-- </div> -->
                            </div>    </div>
                    </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">THÔNG TIN NGƯỜI DÙNG</h5>
                                    <form method="POST" enctype="multipart/form-data" action="<?=base_url().'admin/quan_tri_nguoi_dung/thuc_hien_them_moi_nguoi_dung';?>">

                                        <div class="form-row">




                                             <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="name" class="">Họ và tên</label><input name="txtHoTen" id="name" type="name" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="email" class="">Email</label><input name="txtEmail" id="email"  type="email" 
                                                                                                                                                         class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-group"><label for="Address" class="">Địa chỉ</label><input name="txtDiaChi" id="Address"  type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="Phone" class="">Số điện thoại</label><input name="txtSDT" id="Phone" type="text" class="form-control">
                                        </div>
                                         <div class="position-relative form-group">
                                            <label for="Position" class="">Vị trí công việc</label>
                                            <select name="txtViTri" id="Position"  type="text" class="form-control">
                                                    <?php foreach ($viTri as $key => $value) {
                                                        echo "<option value=".$value->vi_tri_id.">".$value->ten_vi_tri ."</option>";
                                                    }?>
                                                </select>
                                        </div>
                                        
                                        <div class="position-relative form-group">
                                            <label for="Sex" class="">Giới tính</label>
                                            <select name="txtGioiTinh" id="Sex" type="text" class="form-control">
                                                   <option value="1">Nam</option>
                                                   <option value="2">Nữ</option>
                                                </select>
                                        </div>
                                    
                                        <div class="position-relative row form-check">
                                            <div class="" style="text-align: right; margin-right: 15px;">
                                                <a href="<?=base_url();?>admin/Quan_tri_nguoi_dung" class="btn btn-danger">Quay trở lại</a>    
                                                <button class="btn btn-danger" onclick="alert('Thêm mới thành công!')">Xác nhận</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <div class="main-card mb-3 card">
                                <div class="card-body"><h5 class="card-title">Grid</h5>
                                    <form class="">
                                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
                                            <div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
                                            <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                            </div>
                                        </div>
                                        <fieldset class="position-relative row form-group">
                                            <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                                            <div class="col-sm-10">
                                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
                                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                                    one</label></div>
                                                <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                                            </div>
                                        </fieldset>
                                        <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                                            <div class="col-sm-10">
                                                <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button class="btn btn-secondary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    </div>
</div>
<div class="app-drawer-wrapper">
    <div class="drawer-nav-btn">
        <button type="button" class="hamburger hamburger--elastic is-active">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
    </div>
    <div class="drawer-content-wrapper">
        <div class="scrollbar-container">
            <h3 class="drawer-heading">Servers Status</h3>
            <div class="drawer-section">
                <div class="row">
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 1</h4>
                            <div class="circle-progress circle-progress-gradient-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 2</h4>
                            <div class="circle-progress circle-progress-success-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="progress-box"><h4>Server Load 3</h4>
                            <div class="circle-progress circle-progress-danger-xl mx-auto">
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="mt-3"><h5 class="text-center card-title">Live Statistics</h5>
                    <div id="sparkline-carousel-3"></div>
                    <div class="row">
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-warning fsize-3">43</div>
                                    <div class="widget-subheading pt-1">Packages</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-danger fsize-3">65</div>
                                    <div class="widget-subheading pt-1">Dropped</div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget-chart p-0">
                                <div class="widget-chart-content">
                                    <div class="widget-numbers text-success fsize-3">18</div>
                                    <div class="widget-subheading pt-1">Invalid</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center mt-2 d-block">
                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
                        <button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
                    </div>
                </div>
            </div>
            <h3 class="drawer-heading">File Transfers</h3>
            <div class="drawer-section p-0">
                <div class="files-box">
                    <ul class="list-group list-group-flush">
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                        <i class="fa fa-file-alt"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">TPSReport.docx</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
                                        <i class="fa fa-file-archive"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Latest_photos.zip</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
                                        <i class="fa fa-file-pdf"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Annual Revenue.pdf</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="pt-2 pb-2 pr-2 list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
                                        <i class="fa fa-file-excel"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading font-weight-normal">Analytics_GrowthReport.xls</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                            <i class="fa fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Tasks in Progress</h3>
            <div class="drawer-section p-0">
                <div class="todo-box">
                    <ul class="todo-list-wrapper list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="todo-indicator bg-warning"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1266" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox1266">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Wash the car
                                            <div class="badge badge-danger ml-2">Rejected</div>
                                        </div>
                                        <div class="widget-subheading"><i>Written by Bob</i></div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-focus"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox1666" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox1666">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Task with hover dropdown menu</div>
                                        <div class="widget-subheading">
                                            <div>By Johnny
                                                <div class="badge badge-pill badge-info ml-2">NEW</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <div class="d-inline-block dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                <i class="fa fa-ellipsis-h">
                                                </i>
                                            </button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-primary"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox4777" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox4777">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Badge on the right task</div>
                                        <div class="widget-subheading">This task has show on hover actions!</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="widget-content-right ml-3">
                                        <div class="badge badge-pill badge-success">Latest Task</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-info"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox2444" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox2444">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left"><img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt=""/></div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Go grocery shopping</div>
                                        <div class="widget-subheading">A short description ...</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-success">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="todo-indicator bg-success"></div>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-2">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" id="exampleCustomCheckbox3222" class="custom-control-input">
                                            <label class="custom-control-label" for="exampleCustomCheckbox3222">&nbsp;</label></div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Development Task</div>
                                        <div class="widget-subheading">Finish React ToDo List App</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="badge badge-warning mr-2">69</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="border-0 btn-transition btn btn-outline-success">
                                            <i class="fa fa-check">
                                            </i>
                                        </button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                            <i class="fa fa-trash-alt">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="drawer-heading">Urgent Notifications</h3>
            <div class="drawer-section">
                <div class="notifications-box">
                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Build the production release
                                        <div class="badge badge-danger ml-2">NEW</div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Something not important
                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/1.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/2.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/3.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/4.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/5.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/6.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/7.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                <div class="avatar-icon"><img
                                                        src="assets/images/avatars/8.jpg"
                                                        alt=""></div>
                                            </div>
                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                <div class="avatar-icon"><i>+</i></div>
                                            </div>
                                        </div>
                                    </h4>
                                    <span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                            <div><span class="vertical-timeline-element-icon is-hidden"></span>
                                <div class="vertical-timeline-element-content is-hidden"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>
</html>
