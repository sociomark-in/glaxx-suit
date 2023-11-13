<div class="card card-widget app-widget">
    <div class="card-header">
        <i class="ti ti-grip-vertical"></i>&nbsp;Leave Report
    </div>
    <div class="card-body p-0">
        <div class="list-group">
            <?php for ($i = 0; $i < 1; $i++) : ?>
                <div class="list-group-item">
                    <div class="row m-0 g-0 gap-3 align-items-center">
                        <div class="col-auto">
                            <div class="count count-donut count-donut-danger-subtle" style="--dp:<?= 25 ?>;--dw: 3px;">0</div>
                        </div>
                        <div class="col-auto">
                            <b>Absent</b>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="row m-0 g-0 gap-3 align-items-center">
                        <div class="col-auto">
                            <div class="count count-donut count-donut-green-subtle" style="--dp:<?= 44 ?>;--dw: 3px;">0</div>
                        </div>
                        <div class="col-auto">
                            <b>Compensatory Off</b>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="row m-0 g-0 gap-3 align-items-center">
                        <div class="col-auto">
                            <div class="count count-donut count-donut-blue-subtle" style="--dp:<?= 35 ?>;--dw: 3px;">0</div>
                        </div>
                        <div class="col-auto">
                            <b>Birthday Leave</b>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="row m-0 g-0 gap-3 align-items-center">
                        <div class="col-auto">
                            <div class="count count-donut count-donut-grey-subtle" style="--dp:<?= 56 ?>;--dw: 3px;">0</div>
                        </div>
                        <div class="col-auto">
                            <b>Annual Leaves</b>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</div>