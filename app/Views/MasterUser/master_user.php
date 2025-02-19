<?= $this->extend('Layout/template') ?>

<?= $this->section('content') ?>

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <h1>Master User</h1>
                </div>
                <div class="card-title">
                    <!--begin::Search-->
                    <!-- <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search" />
                    </div> -->
                    <!--end::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal" id="addUser"><i class="fa-solid fa-user-plus"></i> Add User</button>
                    </div>
                </div>
                <!--begin::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                            <tr class="text-center text-muted fw-bold fs-7 text-uppercase gs-0">
                                <!-- <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th> -->
                                <th class="min-w-125px">No</th>
                                <th class="min-w-125px">Group CD</th>
                                <th class="min-w-125px">Description</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-100px">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <?php $no = 1; ?>
                            <!-- <?php if ($data == null) : ?>
                                <tr>
                                    <td colspan="5" class="text-center">No data found</td>
                                </tr>
                            <?php else : ?> -->
                                <?php foreach ($data['data'] as $row) : ?>
                                <tr class="text-center">
                                    <!-- <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td> -->
                                <td><?= $no++ ?></td>
                                <td><?= $row['group_cd'] ?></td>
                                <td><?= $row['descs'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td class="text-center">
                                    <div class="d-flex align-items-center justify-content-center gap-2">
                                        <button type="button" class="btn btn-light btn-sm btn-icon btn-active-light-primary" onClick="editMenu(<?= $row['rowid'] ?>)"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button type="button" class="btn btn-light btn-sm btn-icon btn-active-light-danger" onClick="deleteMenu(<?= $row['rowid'] ?>)"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <!-- <?php endif; ?> -->
                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->

<script type="text/javascript">
$(document).ready(function() {
    $('#kt_table_users').DataTable();

    $('#addUser').click(function() {
        $('#modaltitle').html('User Entry');
        $('#modalbody').load("<?= base_url('view-add-master-user') ?>");
        $('#modal').data('rowid', 0);
        $('#modal').modal('show');
    });
});

function editMenu(rowid) {
    console.log(rowid);
    // return;
    $('#modaltitle').html('User Edit');
    $('#modalbody').load("<?= base_url('view-add-master-user') ?>");
    $('#modal').data('rowid', rowid);
    $('#modal').modal('show');
}

function deleteMenu(rowid) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        var formData = {
            rowid: rowid
        };
            
        var actionUrl = '<?= base_url('delete-master-user') ?>'; 

        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    toastr.success(response.message);
                    
                    location.reload();
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                toastr.error('An error occurred while sending the request.');
            }
        });
    });
}
</script>
<?= $this->endSection() ?>
