<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modaltitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaltitle">Tambah Pengalaman Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalbody">
                <!-- <form id="frm" class="p-3"> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-5">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label for="group_cd" class="form-label">Group CD</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="group_cd" name="group_cd" placeholder="Enter Group CD">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-5">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label for="descs" class="form-label">Description</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="descs" name="descs" placeholder="Enter Description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-5">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <label for="status" class="form-label">Status</label>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status_master-user_Y" value="Y">
                                            <label class="form-check-label" for="status_master-user_Y">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="status_master-user_N" value="N">
                                            <label class="form-check-label" for="status_master-user_N">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>