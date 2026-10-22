<?php ob_start(); ?>
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary print-hide" id="btnPrint"><i class="bi bi-printer me-1"></i>Print</button>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>My Company</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Alice Johnson<br>
                012-3456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Jane Smith<br>
                janesmith@example.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Road Bike</td>
                        <td>$1,200.00</td>
                        <td>1</td>
                        <td class="text-end">$1,200.00</td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot><tr><th colspan="4" class="text-end">Grand Total</th><th class="text-end">$1,200.00</th></tr></tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary print-hide"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>

<style>
@media print {
    /* 隐藏侧边栏、顶部汉堡导航栏 */
    .sidebar, .side-nav, .navbar-header, .offcanvas {
        display: none !important;
    }
    /* 隐藏打印按钮、返回按钮 */
    .print-hide {
        display: none !important;
    }
    /* 清除所有card阴影、边框 */
    .card {
        box-shadow: none !important;
        border: none !important;
    }
    body {
        margin: 0;
        padding: 0;
    }
    @page {
        size: A4;
        margin: 15mm;
    }
}
</style>

<script>
document.getElementById('btnPrint').addEventListener('click', function(){
    window.print();
});
</script>

<?php $content = ob_get_clean(); require_once 'layout.php'; ?>
