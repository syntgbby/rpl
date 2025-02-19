<form id="frm" class="p-3">
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
</form>

<script type="text/javascript">
    $(document).ready(function() {
        loadData();

        $('#savefrm').on('click', function(e) {
            e.preventDefault();
            var rowid = $('#modal').data('rowid');
            var group_cd = $('#group_cd').val();
            var descs = $('#descs').val();
            var status = $('input[name="status"]:checked').val();

            if (group_cd == "" || descs == "" || status == "") {
                e.preventDefault(); 

                toastr.error('All fields must be filled!');
            } else {
                var formData = {
                    rowid: rowid,
                    group_cd: group_cd,
                    descs: descs,
                    status: status
                };
                
                var actionUrl = '<?= base_url('add-master-user') ?>'; 

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
            }
        });
        
        function loadData() {
            $.ajax({
                url: '<?= base_url('get-master-user') ?>',
                type: 'GET',
                success: function(response) {
                    console.log(response);
                }
            });
        }
        
    });
</script>