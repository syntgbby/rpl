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
                    <h1>Master Menu</h1>
                </div>
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                    </div>
                    <!--end::Search-->
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
                                <th class="min-w-125px">Menu CD</th>
                                <th class="min-w-125px">Title</th>
                                <th class="min-w-125px">URL</th>
                                <th class="min-w-125px">Icon</th>
                                <th class="min-w-125px">Menu Parent</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $row['menu_cd'] ?></td>
                                <td><?= $row['title'] ?></td>
                                <td><?= $row['url'] ?></td>
                                <td class="text-center"><i class="<?= $row['icon'] ?>"></i></td>
                                <td class="text-center"><?= $row['parent_menucd'] ?></td>
                                <td class="text-center"><?= $row['status'] ?></td>
                                <td class="text-center">
                                    <div class="d-flex align-items-center justify-content-center gap-2">
                                        <button class="btn btn-light btn-sm btn-icon btn-active-light-primary" id="editMenu" data-rowid="<?= $row['rowid'] ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-light btn-sm btn-icon btn-active-light-danger" id="deleteMenu" data-rowid="<?= $row['rowid'] ?>"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
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

<?= $this->endSection() ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#editMenu').click(function() {
            var rowid = $(this).data('rowid');
            alert(rowid);
        });
    });

    $(document).ready(function() {
        $('#deleteMenu').click(function() {
            var rowid = $(this).data('rowid');
            alert(rowid);
        });
    });
</script>