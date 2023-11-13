<?php
echo view('people/components/_people_nav');
?>
<main>
    <nav class="navbar navbar-expand-xxl">
        <div class="container-fluid">
            <div class="collapse navbar-collapse w-100 justify-content-between" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="#"><i class="ti ti-clock-hour-4 icon icon-left"></i>Check In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">12:35 Hrs</a>
                    </li>
                </ul>
                <ul class="navbar-nav gap-1 align-items-center">
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-primary" href="#">Apply Leave</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-primary" href="#">Log Time</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#customizeApps" aria-controls="customizeApps">
                            <i class="ti ti-apps"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="customizeApps" aria-labelledby="customizeAppsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="customizeAppsLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group" id="sortApps">
                <?php for ($count = 0; $count < 10; $count++) : ?>
                    <li class="list-group-item">
                        <div class="row -0 p-0 g-0">
                            <div class="col-md">Lorem, ipsum dolor <?= $count ?></div>
                            <div class="col-auto">
                                <i class="ti ti-grip-vertical"></i>&nbsp;
                            </div>
                        </div>
                    </li>
                <?php endfor ?>
            </ul>
        </div>
    </div>
    <article>
        <div class="container py-3">
            <div class="row m-0" id="sortWidgets">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <?= view('widgets/_widget_leaves_counter');?>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card card-widget app-widget">
                        <div class="card-header">
                            <div class="row m-0 g-0 justufy-content-between align-items-center">
                                <div class="col-md col-12">
                                    <i class="ti ti-grip-vertical"></i>&nbsp;Attendance
                                </div>
                                <div class="col-md-auto col-12">
                                    <ul class="nav nav-pills gap-1" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">D</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">W</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" class="check-in">
                                <div class="row g-0 m-0 gap-1">
                                    <div class="col-md col-12">
                                        <input type="text" name="" id="" class="form-control" placeholder="Add Notes">
                                    </div>
                                    <div class="col-md-auto col-12">
                                        <button type="submit" class="btn btn-secondary"><i class="ti ti-clock-hour-4 icon icon-left"></i>Check In</button>
                                    </div>
                                </div>
                            </form>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active py-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="time__tracker__brief">
                                        <div class="time__log text-center">
                                            <h2>12:35 Hrs</h2>
                                            <p class="text-muted">
                                                <span><?= date('j M, Y') ?></span> <br>
                                                <span class="text-success">Late by 2:15 Hrs</span>
                                            </p>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-primary" style="width:60%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card card-widget app-widget">
                        <div class="card-header"><i class="ti ti-grip-vertical"></i>&nbsp;Upcoming Holidays</div>
                        <div class="card-body p-0">
                            <div class="list-group">
                                <?php for ($i = 0; $i < 10; $i++) : ?>
                                    <div class="list-group-item">
                                        <div class="row m-0 justify-content-between">
                                            <div class="col">
                                                <div class="holiday__occassion">
                                                    <strong>Diwali</strong>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="holiday__duration">
                                                    <strong><?= date_format(date_create("2023-11-10"), "j M") ?></strong>&nbsp;
                                                    <span class="text-muted">(<?= date_format(date_create("2023-11-10"), "l") ?>)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <div class="card card-widget app-widget">
                        <div class="card-header">
                            <div class="row m-0 g-0 justify-content-between">
                                <div class="col-md-8 col-12">
                                    <i class="ti ti-grip-vertical"></i>&nbsp;</i>Request For Approvals
                                </div>
                                <div class="col-auto">
                                    <small>#<a href="">pending</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group">
                                <?php for ($i = 0; $i < 15; $i++) : ?>
                                    <div class="list-group-item">
                                        <div class="approval__brief">
                                            <div class="row m-0 g-0 justify-content-between">
                                                <div class="col-md-8 col-12">
                                                    <a href=""><strong>Lorem ipsum dolor sit.</strong></a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="" class="avatar avatar-sm">SK</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
<?php
echo view('components/_common_footer');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js" integrity="sha512-Eezs+g9Lq4TCCq0wae01s9PuNWzHYoCMkE97e2qdkYthpI0pzC3UGB03lgEHn2XM85hDOUF6qgqqszs+iXU4UA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    Sortable.create(sortApps, {
        group: 'list-1',
        handle: '.list-group-item'
    });
</script>
<script>
    Sortable.create(sortWidgets, {
        group: 'list-2',
        handle: '.app-widget',
        onEnd: (event) => {
            console.log("Dragged from " + event.oldIndex + " to " + event.newIndex);
        },
        store: {
            /**
             * Save the order of elements. Called onEnd (when the item is dropped).
             * @param {Sortable}  sortable
             */
            set: function(sortable) {
                var order = sortable.toArray();
                console.log(order);
                // AJAX call to save the widget order for the specific app_id
            }
        }
    });
</script>